<?php
class Accueil extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('db_model');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');

	}
	public function afficher() {

		$this->load->view('vueHaut.php');
		//Chargement de la view du milieu: page_accueil.php
		$this->load->view('ajouter_evenement.php');
		//Chargement de la view bas.php
		$this->load->view('vueBas.php');

	}

	public function index() {
		$this->load->view('login');
	}

	public function inscription() {
		$this->load->view('inscription');
	}
}
?>