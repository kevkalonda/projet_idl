<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Groupe extends CI_Controller {

		public function __construct() {
	        parent::__construct();
	        $this->load->model('db_model');
	        $this->load->helper('url');
	        $this->load->helper(array('form', 'url'));
	        $this->load->helper('form');
			$this->load->library('form_validation');
    	}

		public function creer()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('id', 'id', 'required');
			$this->form_validation->set_rules('mdp', 'mdp', 'required');
			$this->form_validation->set_rules('nombre', 'nombre', 'required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('creer_un_groupe');

			}
			else
			{
				$this->db_model->set_groupe();
				$this->load->view('creer_groupe_reussi');
			}
		}
	}
?>