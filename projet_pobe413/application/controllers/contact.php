<?php

class Devis extends CI_Controller {
	
	function index() {
	
	//chargement de la librairie pour la validation du formulaire
  	$this->load->library('form_validation');
  	//chargement du helper form
  	$this->load->helper('form');
	$this->load->database();
	$this->load->view('header');
	$this->load->view("template/navigateur");
	$this->load->view('contact');
	$this->load->view('footer');

	}
}


?>