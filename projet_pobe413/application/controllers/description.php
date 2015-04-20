<?php

class description extends CI_Controller {
	
	function index() {
	
	$this->load->view('header');
	$this->load->view("template/navigateur");
	$this->load->view('description');
	$this->load->view('footer');

	}
}


?>