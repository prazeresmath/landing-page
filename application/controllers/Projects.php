<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/css');
		$this->load->view('pages/projetos');
	}
}
