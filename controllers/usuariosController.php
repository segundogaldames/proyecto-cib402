<?php
use models\Usuario;
use models\Funcionario;

class usuariosController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        # code...
    }

    public function view()
    {
        $this->verificarSession();

        $this->_view->assign('titulo','Mi Perfil');
        $this->_view->assign('title','Mi Perfil');
        $this->_view->assign('usuario', Usuario::with('funcionario')->find(Session::get('usuario_id')));
        $this->_view->renderizar('view');
    }

    public function login()
    {
        if (Session::get('autenticado')) {
            $this->redireccionar();
        }

        $this->_view->assign('titulo','Login');
        $this->_view->assign('title','Iniciar Sesión');
        $this->_view->assign('button','Login');
        $this->_view->assign('ruta','index');
        $this->_view->assign('enviar', CTRL);

        if ($this->getAlphaNum('enviar') == CTRL) {

            if (!$this->validarEmail($this->getPostParam('email'))) {
                $this->_view->assign('_error','Ingrese su email de usuario');
                $this->_view->renderizar('login');
                exit;
            }

            if (!$this->getSql('clave')) {
                $this->_view->assign('_error','Ingrese su clave de acceso');
                $this->_view->renderizar('login');
                exit;
            }

            $clave = $this->encriptar($this->getSql('clave'));

            $funcionario = Funcionario::with('rol')->where('email', $this->getPostParam('email'))->first();
            //print_r($funcionario);exit;
            $usuario = Usuario::select('id')->where('clave', $clave)->where('activo', 1)->first();
            //print_r($usuario);exit;

            if (!$funcionario || !$usuario) {
                $this->_view->assign('_error','El email o la clave ingresados no existen');
                $this->_view->renderizar('login');
                exit;
            }

            Session::set('autenticado', true);
            Session::set('usuario_id', $usuario->id);
            Session::set('usuario_nombre', $funcionario->nombre);
            Session::set('usuario_rol', $funcionario->rol->nombre);
            Session::set('time', time());

            $this->redireccionar();
        }

        $this->_view->renderizar('login');
    }

    public function logout()
    {
        Session::destroy();
        $this->redireccionar();
    }

    public function edit($id = null)
    {
        $this->verificarSession();
        $this->verificarRolAdmin();
        $this->verificarUsuario($id);

        $funcionario = Usuario::select('funcionario_id')->find($this->filtrarInt($id));

        $this->_view->assign('titulo','Editar Estado');
        $this->_view->assign('title','Modificar Estado');
        $this->_view->assign('button','Editar');
        $this->_view->assign('ruta','funcionarios/view/' . $funcionario->funcionario_id);
        $this->_view->assign('usuario', Usuario::with('funcionario')->find($this->filtrarInt($id)));
        $this->_view->assign('enviar', CTRL);

        if ($this->getAlphaNum('enviar') == CTRL) {

            if (!$this->getInt('activo')) {
                $this->_view->assign('_error', 'Seleccione un estado para el usuario');
                $this->_view->renderizar('edit');
                exit;
            }

            $usuario = Usuario::select('id')->where('activo', $this->getInt('activo'))->find($this->filtrarInt($id));

            if ($usuario) {
                $this->_view->assign('_error', 'El estado ingresado ya existe... cámbielo por otro');
                $this->_view->renderizar('edit');
                exit;
            }

            $usuario = Usuario::find($this->filtrarInt($id));
            $usuario->activo = $this->getInt('activo');
            $usuario->save();

            Session::set('msg_success','El estado se ha modificado correctamente');

            $this->redireccionar('funcionarios/view/' . $funcionario->funcionario_id);
        }

        $this->_view->renderizar('edit');
    }

    public function editPassword($id = null)
    {
        $this->verificarSession();
        $this->verificarUsuarioRol($id);

        $funcionario = Usuario::select('funcionario_id')->find($this->filtrarInt($id));

        $this->_view->assign('titulo','Editar Password');
        $this->_view->assign('title','Modificar Password');
        $this->_view->assign('button','Modificar');
        $this->_view->assign('ruta','funcionarios/view/' . $funcionario->funcionario_id);
        $this->_view->assign('usuario', Usuario::with('funcionario')->find($this->filtrarInt($id)));
        $this->_view->assign('enviar', CTRL);

        if ($this->getAlphaNum('enviar') == CTRL) {

            if (!$this->getSql('clave') || strlen($this->getSql('clave')) < 8) {
                $this->_view->assign('_error','Ingrese una clave de al menos 8 caracteres');
                $this->_view->renderizar('editPassword');
                exit;
            }

            if ($this->getSql('clave') != $this->getSql('reclave')) {
                $this->_view->assign('_error','Las claves ingresadas no coinciden... intente nuevamente');
                $this->_view->renderizar('editPassword');
                exit;
            }

            $clave = $this->encriptar($this->getSql('clave'));

            $usuario = Usuario::select('id')->where('clave', $clave)->first();

            if ($usuario) {
                $this->_view->assign('_error','El password ingresado ya existe... intente con otro');
                $this->_view->renderizar('editPassword');
                exit;
            }

            $usuario = Usuario::find($this->filtrarInt($id));
            $usuario->clave = $clave;
            $usuario->save();

            Session::set('msg_success','El password se ha modificado correctamente');

            $this->redireccionar('funcionarios/view/' . $funcionario->funcionario_id);
        }

        $this->_view->renderizar('editPassword');
    }

    public function add($funcionario = null)
    {
        $this->verificarSession();
        $this->verificarRolAdmin();
        $this->verificarFuncionario($funcionario);

        $this->_view->assign('titulo','Nuevo Usuario');
        $this->_view->assign('title','Nueva Cuenta de Usuario');
        $this->_view->assign('button','Guardar');
        $this->_view->assign('ruta','funcionarios/view/' . $this->filtrarInt($funcionario));
        $this->_view->assign('funcionario', Funcionario::find($this->filtrarInt($funcionario)));
        $this->_view->assign('enviar', CTRL);

        if ($this->getAlphaNum('enviar') == CTRL) {
            $this->_view->assign('usuario', $_POST);

            if (!$this->getSql('clave') || strlen($this->getSql('clave')) < 8) {
                $this->_view->assign('_error','Ingrese una clave de al menos 8 caracteres');
                $this->_view->renderizar('add');
                exit;
            }

            if ($this->getSql('clave') != $this->getSql('reclave')) {
                $this->_view->assign('_error','Las claves ingresadas no coinciden... intente nuevamente');
                $this->_view->renderizar('add');
                exit;
            }

            $usuario = Usuario::select('id')->where('funcionario_id', $this->filtrarInt($funcionario))->first();

            if ($usuario) {
                $this->_view->assign('_error','El usuario ingresado ya existe... intente con otro');
                $this->_view->renderizar('add');
                exit;
            }

            $clave = $this->encriptar($this->getSql('clave'));

            $usuario = new Usuario;
            $usuario->clave = $clave;
            $usuario->activo = 1;
            $usuario->funcionario_id = $this->filtrarInt($funcionario);
            $usuario->save();

            Session::set('msg_success','El usuario se ha registrado correctamente');

            $this->redireccionar('funcionarios/view/' . $this->filtrarInt($funcionario));
        }

        $this->_view->renderizar('add');
    }

    ##################################################
    private function verificarUsuario($id)
    {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('funcionarios');
        }

        $usuario = Usuario::select('id')->find($this->filtrarInt($id));

        if (!$usuario) {
            $this->redireccionar('funcionarios');
        }
    }

    private function verificarFuncionario($id)
    {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('funcionarios');
        }

        $funcionario = Funcionario::select('id')->find($this->filtrarInt($id));

        if (!$funcionario) {
            $this->redireccionar('funcionarios');
        }
    }

    private function encriptar($clave)
    {
        $clave = Hash::getHash('sha1', $clave, HASH_KEY);

        return $clave;
    }

    private function verificarUsuarioRol($id)
    {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar();
        }

        $usuario = Usuario::select('id')->find($this->filtrarInt($id));

        if ($usuario->id == Session::get('usuario_id')) {
            return true;
        }

        $this->redireccionar();
    }
}
