<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$data = array(
			'konten' => 'home',
		);
		$this->load->view('template/index', $data);
	}


	public function single()
	{

		$data = array(
			'konten' => 'single',
		 );
		$this->load->view('template/index', $data);

	}


}
