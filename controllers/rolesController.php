<?php
use models\Rol;

class rolesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->verificarMensajes();

        $this->_view->assign('titulo', 'PCIB :: Roles');
        $this->_view->assign('title', 'Roles');
        $this->_view->assign('roles', Rol::select('id','nombre')->orderBy('nombre')->get());
        //SELECT id, nombre FROM roles ORDER BY nombre;
        $this->_view->renderizar('index');
    }

    public function view($id = null)
    {
        # code...
    }

    public function edit($id = null)
    {
        # code...
    }

    public function add()
    {
        $this->_view->assign('titulo', 'PCIB :: Nuevo Rol');
        $this->_view->assign('title', 'Nuevo Rol');
        $this->_view->assign('button', 'Guardar');
        $this->_view->assign('ruta', 'roles');
        $this->_view->assign('enviar', CTRL);

        if ($this->getAlphaNum('enviar') == CTRL) {
            $this->_view->assign('rol', $_POST);
            //print_r($_POST);

            if (!$this->getSql('nombre')) {
                $this->_view->assign('_error', 'Ingrese el nombre del rol');
                $this->_view->renderizar('add');
                exit;
            }

            $rol = Rol::select('id')->where('nombre', $this->getSql('nombre'))->first();

            if ($rol) {
                $this->_view->assign('_error', 'El rol ingresado ya existe... intente con otro');
                $this->_view->renderizar('add');
                exit;
            }

            $rol = new Rol;
            $rol->nombre = $this->getSql('nombre');
            $rol->save();

            Session::set('msg_success', 'El rol se ha registrado correctamente');

            $this->redireccionar('roles');
        }

        $this->_view->renderizar('add');
    }

    ################################################
    private function verificarRol($id)
    {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('roles');
        }

        $rol = Rol::select('id')->find($this->filtrarInt($id));
        //SElECT id FROM roles WHERE id = id;

        if (!$rol) {
            $this->redireccionar('roles');
        }
    }
}
