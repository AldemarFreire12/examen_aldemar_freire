<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapaschicha extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mapachicha");
	}

	public function index()
	{
		$data["mapaschicha"] = $this->Mapachicha->obtenerTodos();
		$this->load->view('mapaschicha', $data);
	}
}
