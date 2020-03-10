<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		// $this->load->view('template/admin_sidebar');
		$this->load->view('dashboard/index' );
		$this->load->view('template/footer');
	}
}
