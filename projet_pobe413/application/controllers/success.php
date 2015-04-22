<?php

class success extends CI_Controller {
	
	function index() {
	
	$this->load->view('header');
	$this->load->view("template/navigateur");
	$this->load->view('success');
	$this->load->view('footer');

	}
}

?>