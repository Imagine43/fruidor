<?php

class contact extends CI_Controller {
	
	function index() {
	
	$this->load->view('header');
	$this->load->view("template/navigateur");
	$this->load->view('contact');
	$this->load->view('footer');

	}
}


?>