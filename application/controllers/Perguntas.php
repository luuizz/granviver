<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perguntas extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();

		$this->load->library('email');
	}


	public function index()
	{
			$data['breadcrumbs'] = create_breadcrumbs([
					['name' => 'Contato', 'url' => 'contato'],
					['name' => 'Perguntas Frequentes', 'url' => 'perguntas']
			]);

		$this->load->view('perguntas/index', $data);
	}



}
