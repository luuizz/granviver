<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sobre extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();

		$this->load->library('email');
	}


	public function index()
	{

		$data['breadcrumbs'] = create_breadcrumbs([
            ['name' => 'Quem somos', 'url' => 'sobre']
		]);
		$this->load->view('sobre/index', $data);
	}



}
