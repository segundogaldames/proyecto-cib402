<?php
use models\Funcionario;
use models\Rol;
use models\Especialidad;

class funcionariosController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->verificarSession();
    }

    public function index()
    {
        $this->verificarRolAdminSuper();
        $this->verificarMensajes();

        $this->_view->assign('titulo','Funcionarios');
        $this->_view->assign('title','Lista de Funcionarios');
        $this->_view->assign('funcionarios', Funcionario::with(['especialidad','rol'])->orderBy('nombre')->get());
        $this->_view->renderizar('index');

        //SELECT f.id, f.nombre, r.nombre as rol, e.nombre as especialidad FROM funcionarios f INNER JOIN roles r ON f.rol_id = r.id INNER JOIN especialidades e ON f.especialidad_id = e.id ORDER BY f.nombre
    }

    public function view($id = null)
    {
        $this->verificarRolAdminSuper();
        $this->verificarFuncionario($id);
        $this->verificarMensajes();

        $this->_view->assign('titulo','Funcionario');
        $this->_view->assign('title','Funcionario');
        $this->_view->assign('funcionario', Funcionario::with(['especialidad','rol','usuario'])->find($this->filtrarInt($id)));
        $this->_view->renderizar('view');
    }

    public function edit($id = null)
    {
        $this->verificarRolAdmin();
        $this->verificarFuncionario($id);

        $this->_view->assign('titulo','Editar Funcionario');
        $this->_view->assign('title','Editar Funcionario');
        $this->_view->assign('button','Editar');
        $this->_view->assign('ruta','funcionarios/view/' . $this->filtrarInt($id));
        $this->_view->assign('funcionario', Funcionario::with(['especialidad','rol'])->find($this->filtrarInt($id)));
        $this->_view->assign('roles', Rol::select('id','nombre')->orderBy('nombre')->get());
        $this->_view->assign('especialidades', Especialidad::select('id','nombre')->orderBy('nombre')->get());
        $this->_view->assign('enviar', CTRL);

        if ($this->getAlphaNum('enviar') == CTRL) {

            if (!$this->getSql('rut')) {
                $this->_view->assign('_error', 'Ingrese el rut del funcionario');
                $this->_view->renderizar('edit');
                exit;
            }

            if (!$this->getSql('nombre')) {
                $this->_view->assign('_error', 'Ingrese el nombre del funcionario');
                $this->_view->renderizar('edit');
                exit;
            }

            if (!$this->validarEmail($this->getPostParam('email'))) {
                $this->_view->assign('_error', 'Ingrese el email del funcionario');
                $this->_view->renderizar('edit');
                exit;
            }

            if (!$this->getInt('rol')) {
                $this->_view->assign('_error', 'Seleccione el rol del funcionario');
                $this->_view->renderizar('edit');
                exit;
            }

            if (!$this->getInt('especialidad')) {
                $this->_view->assign('_error', 'Seleccione la especialidad del funcionario');
                $this->_view->renderizar('edit');
                exit;
            }

            $funcionario = Funcionario::select('id')->where('rut', $this->getSql('rut'))->where('nombre', $this->getSql('nombre'))->where('email', $this->getPostParam('email'))->where('rol_id', $this->getInt('rol'))->where('especialidad_id', $this->getInt('especialidad'))->first();

            if ($funcionario) {
                $this->_view->assign('_error', 'El funcionario no se puede modificar... debe editar alguno de los datos del funcionario');
                $this->_view->renderizar('edit');
                exit;
            }

            $funcionario = Funcionario::find($this->filtrarInt($id));
            $funcionario->rut = $this->getSql('rut');
            $funcionario->nombre = $this->getSql('nombre');
            $funcionario->email = $this->getPostParam('email');
            $funcionario->rol_id = $this->getInt('rol');
            $funcionario->especialidad_id = $this->getInt('especialidad');
            $funcionario->save();

            Session::set('msg_success','El funcionario se ha modificado correctamente');

            $this->redireccionar('funcionarios/view/' . $this->filtrarInt($id));
        }

        $this->_view->renderizar('edit');
    }

    public function add()
    {
        $this->verificarRolAdmin();

        $this->_view->assign('titulo','Nuevo Funcionario');
        $this->_view->assign('title','Nuevo Funcionario');
        $this->_view->assign('button','Guardar');
        $this->_view->assign('ruta','funcionarios');
        $this->_view->assign('roles', Rol::select('id','nombre')->orderBy('nombre')->get());
        $this->_view->assign('especialidades', Especialidad::select('id','nombre')->orderBy('nombre')->get());
        $this->_view->assign('enviar', CTRL);

        if ($this->getAlphaNum('enviar') == CTRL) {
            $this->_view->assign('funcionario', $_POST);

            if (!$this->getSql('rut')) {
                $this->_view->assign('_error', 'Ingrese el rut del funcionario');
                $this->_view->renderizar('add');
                exit;
            }

            if (!$this->getSql('nombre')) {
                $this->_view->assign('_error', 'Ingrese el nombre del funcionario');
                $this->_view->renderizar('add');
                exit;
            }

            if (!$this->validarEmail($this->getPostParam('email'))) {
                $this->_view->assign('_error', 'Ingrese el email del funcionario');
                $this->_view->renderizar('add');
                exit;
            }

            if (!$this->getInt('rol')) {
                $this->_view->assign('_error', 'Seleccione el rol del funcionario');
                $this->_view->renderizar('add');
                exit;
            }

            if (!$this->getInt('especialidad')) {
                $this->_view->assign('_error', 'Seleccione la especialidad del funcionario');
                $this->_view->renderizar('add');
                exit;
            }

            $funcionario = Funcionario::select('id')->where('rut', $this->getSql('rut'))->where('email', $this->getPostParam('email'))->first();

            if ($funcionario) {
                $this->_view->assign('_error', 'El funcionario ingresado ya existe... intente con otro');
                $this->_view->renderizar('add');
                exit;
            }

            $funcionario = new Funcionario;
            $funcionario->rut = $this->getSql('rut');
            $funcionario->nombre = $this->getSql('nombre');
            $funcionario->email = $this->getPostParam('email');
            $funcionario->rol_id = $this->getInt('rol');
            $funcionario->especialidad_id = $this->getInt('especialidad');
            $funcionario->save();

            Session::set('msg_success','El funcionario se ha registrado correctamente');

            $this->redireccionar('funcionarios');
        }

        $this->_view->renderizar('add');
    }

    #####################################################
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
}
