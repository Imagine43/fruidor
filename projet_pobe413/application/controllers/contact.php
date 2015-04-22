<?php

class contact extends CI_Controller {
	
	function index() {
	
	//chargement de la librairie pour la validation du formulaire
	$this->form_validation->set_rules('nom','Nom','trim|required|min_length[3]|xss_clean');
	$this->form_validation->set_rules('email','Email','trim|required|valid_email');
	$this->form_validation->set_rules('demande','Demande','required|xss_clean');

	/*
	$this->form_validation->set_message('required', 'Ce champs est requis');
	$this->form_validation->set_message('required', 'Cette adresse email est valide');
	*/

		if ($this->form_validation->run()==TRUE) {
			# code
			$this->load->model('contact_model');
			$data = array(
				'nom' => $this->input->post('nom'),
				'email' => $this->input->post('email'),
				'demande' => $this->input->post('demande')
			);
		

			$this->contact_model->add($data);

			$this->load->view('success');
		}

		else
		{

			$this->load->view('header');
			$this->load->view("template/navigateur");
			$this->load->view('contact');
			$this->load->view('footer');
		}
	}
}


?>