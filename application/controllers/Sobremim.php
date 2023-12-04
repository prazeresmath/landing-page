<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobremim extends CI_Controller {

	public function index()
	{
		$this->load->view('pages/sobremim');
		$this->load->view('layout/css');
	}
}
