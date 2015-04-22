<?php

class send-contact extends CI_Controller {
	
	function index() {
	
	$this->load->view('header');
	$this->load->view("template/navigateur");
	
	$this->load->view('template/send_contact');
	$this->load->view('footer');

	}
}


?>