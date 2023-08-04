<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapasrock extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Maparock");
	}

	public function index()
	{
		$data["mapasrock"] = $this->Maparock->obtenerTodos();
		$this->load->view('mapasrock', $data);
	}
}
