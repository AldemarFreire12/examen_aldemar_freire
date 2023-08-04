<?php
class Cantantes extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //Cargar Modelo
        $this->load->model('Cantante');
    }
    //Funcion que renderiza la vista index
    public function index()
    {
        $data['capital_efaf'] = $this->Cantante->obtenerTodos();
        // print_r($data);
        $this->load->view('header');
        $this->load->view('cantantes/index', $data);
        $this->load->view('footer');
    }

    public function nuevo()
    {
        $this->load->view('header');
        $this->load->view('cantantes/nuevo');
        $this->load->view('footer');
    }

    public function guardar()
    {
        $datosNuevoCantante = array(
            "pais_efaf" => $this->input->post('pais_efaf'),
            "continente_efaf" => $this->input->post('continente_efaf'),
            "nombre_efaf" => $this->input->post('nombre_efaf'),
            "latitud_efaf" => $this->input->post('latitud_efaf'),
            "longitud_efaf" => $this->input->post('longitud_efaf')
        );
        if ($this->Cantante->insertar($datosNuevoCantante)) {
            redirect('cantantes/index');
        } else {
            echo "<h1>ERROR DE LA PAGINA</h1>";
        }
    }
    //funcion para eliminar jugador
    public function eliminar($id)
    {
        if ($this->Cantante->borrar($id)) {
            redirect('cantantes/index');
        } else {
            echo "ERROR AL BORRAR :(";
        }
    }
} // Cierre de la clase
