<?php
use models\Rol;

class rolesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->verificarSession();
        $this->verificarRolAdmin();
    }

    public function index()
    {
        $this->verificarMensajes();

        $this->_view->assign('titulo', 'Roles');
        $this->_view->assign('title', 'Lista de Roles');
        $this->_view->assign('roles', Rol::select('id','nombre')->orderBy('nombre')->get());
        //SELECT id, nombre FROM roles ORDER BY nombre;
        $this->_view->renderizar('index');
    }

    public function view($id = null)
    {
        $this->verificarRol($id);
        $this->verificarMensajes();

        $this->_view->assign('titulo','Roles');
        $this->_view->assign('title','Ver Rol');
        $this->_view->assign('rol', Rol::find($this->filtrarInt($id)));
        $this->_view->renderizar('view');
    }

    public function edit($id = null)
    {
        $this->verificarRol($id);

        $this->_view->assign('titulo', 'Editar Rol');
        $this->_view->assign('title', 'Editar Rol');
        $this->_view->assign('button', 'Editar');
        $this->_view->assign('ruta', 'roles/view/' . $this->filtrarInt($id));
        $this->_view->assign('rol', Rol::find($this->filtrarInt($id)));
        $this->_view->assign('enviar', CTRL);

        if ($this->getAlphaNum('enviar') == CTRL) {

            if (!$this->getSql('nombre')) {
                $this->_view->assign('_error', 'Ingrese el nombre del rol');
                $this->_view->renderizar('edit');
                exit;
            }

            $rol = Rol::select('id')->where('nombre', $this->getSql('nombre'))->first();

            if ($rol) {
                $this->_view->assign('_error', 'El rol ingresado ya existe... intente con otro nombre');
                $this->_view->renderizar('edit');
                exit;
            }

            $rol = Rol::find($this->filtrarInt($id));
            $rol->nombre = $this->getSql('nombre');
            $rol->save();

            //UPDATE roles SET nombre = $nombre, updated_at = now() where id = $id;

            Session::set('msg_success', 'El rol se ha modificado correctamente');

            $this->redireccionar('roles/view/' . $this->filtrarInt($id));
        }

        $this->_view->renderizar('edit');
    }

    public function add()
    {
        $this->_view->assign('titulo', 'Nuevo Rol');
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

            //INSERT INTO roles(nombre,created_at,updated_at) VALUES('nombre', now(), now());

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
