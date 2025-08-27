<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Empreendimento extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();

		$this->load->library('email');
	}


	public function index()
	{

		$data['breadcrumbs'] = create_breadcrumbs([
			['name' => 'Empreendimentos', 'url' => 'empreendimento']
		]);
		$this->load->view('empreendimento/index', $data);
	}



}
