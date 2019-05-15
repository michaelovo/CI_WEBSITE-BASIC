<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_controller extends CI_Controller {


	public function index()
	{
		$this->load->view('home');
	}

	public function how()
	{
		$this->load->view('how');
	}

	public function our_campaign()
	{
		$this->load->view('our_campaign');
	}

	public function who_help()
	{
		$this->load->view('who_help');
	}


	public function donate()
	{
		$this->load->view('donate');
	}


	public function feedback()
	{
		$this->load->view('feedback');
	}
	public function reg_login()
	{
		$this->load->view('login');
	}
}
