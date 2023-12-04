<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trabalhos extends CI_Controller {

	public function p1()
	{
		$this->load->view('projetos/iron_man');
		$this->load->view('layout/iron_man');
	}

    public function p2()
    {
        $this->load->view('projetos/CRUD');
        $this->load->view('layout/CRUD');
    }

    public function p3()
    {
        $this->load->view('projetos/calculadora');
        $this->load->view('layout/calculadora');
    }

    public function p4()
    {
        $this->load->view('projetos/velha');
        $this->load->view('layout/velha');
    }

    public function p5()
    {
        $this->load->view('projetos/detona_ralph');
        $this->load->view('layout/detona_ralph');
        $this->load->view('layout/reset');
    }

    public function p6()
    {
        $this->load->view('projetos/jogo-memoria');
        $this->load->view('layout/jogo-memoria');
        $this->load->view('layout/reset');
    }
}
