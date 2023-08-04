<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapas extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mapa");
	}

	public function index()
	{
		$data["capital_efaf"] = $this->Mapa->obtenerTodos();
		$this->load->view('capital_efaf', $data);
	}
}
