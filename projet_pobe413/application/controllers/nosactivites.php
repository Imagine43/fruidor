<?php

class nosactivites extends CI_Controller {
	
	function index() {
	
	$this->load->view('header');
	$this->load->view("template/navigateur");
	$this->load->view('activite');
	$this->load->view('footer');

	}
}


?>