<?php
	class Accueil extends CI_Controller {
		public function __construct() {
	        parent::__construct();
	        $this->load->model('db_model');
	        $this->load->helper('url');
	        $this->load->helper(array('form', 'url'));
	        $this->load->helper('form');
			$this->load->library('form_validation');
    	}
		public function afficher()
		{
			//Chargement de la view du milieu : page_accueil.php
			$this->load->view('acceder_un_groupe');
		}
		public function afficherMonGroupe()
		{
			//Chargement de la view du milieu : page_accueil.php
			$this->load->view('mon_groupe');
		}
		public function installerDokuwiki()
		{
			//Chargement de la view du milieu : page_accueil.php
			$this->load->view('install');
		}
		public function choix()
		{	
			//Chargement de la view du milieu : page_accueil.php
			$this->load->view('mon_groupe',);
		}
		public function choix1()
		{	
			//Chargement de la view du milieu : page_accueil.php
			$this->load->view('mon_groupe2',);
		}
		public function choix2()
		{	
			//Chargement de la view du milieu : page_accueil.php
			$this->load->view('mon_groupe3',);
		}
	}
?>