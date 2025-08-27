<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Terreno extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();

		$this->load->library('email');
	}


	public function index()
	{

		$data['breadcrumbs'] = create_breadcrumbs([
            ['name' => 'Ofereça seu Terreno', 'url' => 'terreno']
		]);
		$this->load->view('terreno/index', $data);
	}



}
