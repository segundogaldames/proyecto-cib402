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
        # code...
    }

    public function edit($id = null)
    {
        # code...
    }

    public function add()
    {
        # code...
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
