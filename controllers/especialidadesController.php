<?php
use models\Especialidad;

class especialidadesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->verificarMensajes();

        $this->_view->assign('titulo','Especialidades');
        $this->_view->assign('title','Lista de Especialidades');
        $this->_view->assign('especialidades', Especialidad::select('id','nombre')->orderBy('nombre')->get());
        $this->_view->renderizar('index');
    }

    public function view($id = null)
    {
        $this->verificarEspecialidad($id);
        $this->verificarMensajes();

        $this->_view->assign('titulo','Especialidades');
        $this->_view->assign('title','Ver Especialidad');
        $this->_view->assign('especialidad', Especialidad::find($this->filtrarInt($id)));
        $this->_view->renderizar('view');
    }

    public function edit($id = null)
    {
        $this->verificarEspecialidad($id);

        $this->_view->assign('titulo','Editar Especialidad');
        $this->_view->assign('title','Editar Especialidad');
        $this->_view->assign('button', 'Editar');
        $this->_view->assign('ruta', 'especialidades/view/' . $this->filtrarInt($id));
        $this->_view->assign('especialidad', Especialidad::find($this->filtrarInt($id)));
        $this->_view->assign('enviar', CTRL);

        if ($this->getAlphaNum('enviar') == CTRL) {

            if (!$this->getSql('nombre')) {
                $this->_view->assign('_error','Ingrese el nombre de la especialidad');
                $this->_view->renderizar('edit');
                exit;
            }

            $especialidad = Especialidad::select('id')->where('nombre', $this->getSql('nombre'))->first();

            if ($especialidad) {
                $this->_view->assign('_error','La especialidad ingresada ya existe... intente con otro nombre');
                $this->_view->renderizar('edit');
                exit;
            }

            $especialidad = Especialidad::find($this->filtrarInt($id));
            $especialidad->nombre = $this->getSql('nombre');
            $especialidad->save();

            Session::set('msg_success','La especialidad se ha modificado correctamente');

            $this->redireccionar('especialidades/view/' . $this->filtrarInt($id));
        }

        $this->_view->renderizar('edit');
    }

    public function add()
    {
        $this->_view->assign('titulo','Nueva Especialidad');
        $this->_view->assign('title','Nueva Especialidad');
        $this->_view->assign('button', 'Guardar');
        $this->_view->assign('ruta', 'especialidades');
        $this->_view->assign('enviar', CTRL);

        if ($this->getAlphaNum('enviar') == CTRL) {
            $this->_view->assign('especialidad', $_POST);

            if (!$this->getSql('nombre')) {
                $this->_view->assign('_error','Ingrese el nombre de la especialidad');
                $this->_view->renderizar('add');
                exit;
            }

            $especialidad = Especialidad::select('id')->where('nombre', $this->getSql('nombre'))->first();

            if ($especialidad) {
                $this->_view->assign('_error','La especialidad ingresada ya existe... intente con otra');
                $this->_view->renderizar('add');
                exit;
            }

            $especialidad = new Especialidad;
            $especialidad->nombre = $this->getSql('nombre');
            $especialidad->save();

            Session::set('msg_success','La especialidad se ha registrado correctamente');

            $this->redireccionar('especialidades');
        }

        $this->_view->renderizar('add');
    }

    ######################################################
    private function verificarEspecialidad($id)
    {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('especialidades');
        }

        $especialidad = Especialidad::select('id')->find($this->filtrarInt($id));

        if (!$especialidad) {
            $this->redireccionar('especialidades');
        }
    }
}
