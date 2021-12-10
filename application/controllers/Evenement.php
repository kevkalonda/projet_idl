<?php
class Evenement extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('db_model');/*interogé la base de donnée*/
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
	}

	public function afficher() {
		$data['evenement'] = $this->db_model->get_all_evenement();
		//Chargement de la view haut.php
		$this->load->view('vueHaut.php');
		//Chargement de la view du milieu: page_accueil.php
		$this->load->view('afficher_evenements.php', $data);
		//Chargement de la view bas.php
		$this->load->view('vueBas.php');

	}

	public function ajouter() {

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('debutinscription', 'debutinscription', 'required', array('required' => 'veuillez saisir une date inscription'));
		$this->form_validation->set_rules('fininscription', 'fininscription', 'required', array('required'     => 'veuillez saisir une date fin iscription'));
		$this->form_validation->set_rules('debutevenement', 'debutevenement', 'required', array('required'     => 'veuillez saisir date début événement'));
		$this->form_validation->set_rules('finevenement', 'finevenement', 'required', array('required'         => 'veuillez saisir une date de fin événement'));
		$this->form_validation->set_rules('temps', 'temps', 'required', array('required'                       => 'veuillez saisir heure de début de événement'));
		$this->form_validation->set_rules('nombre', 'nombre', 'required', array('required'                     => 'veuillez saisir nombre de place'));
		$this->form_validation->set_rules('details', 'details', 'required', array('required'                   => 'veuillez saisir details '));
		$this->form_validation->set_rules('description', 'description', 'required', array('required'           => 'veuillez saisir description'));

		$debutinscription = $this->input->post('debutinscription');
		$fininscription   = $this->input->post('fininscription');
		$debutevenement   = $this->input->post('debutevenement');
		$finevenement     = $this->input->post('finevenement');

		if ($this->form_validation->run() == FALSE) {

			$this->load->helper('url');
			//Chargement de la view haut.php
			$this->load->view('vueHaut.php');
			//Chargement de la view du milieu: page_accueil.php
			$this->load->view('ajouter_evenement.php');
			//Chargement de la view bas.php
			$this->load->view('vueBas.php');
		} else {

			if (($debutinscription < $fininscription) && ($fininscription < $debutevenement) && ($debutevenement < $finevenement)) {

				$this->load->helper('url');
				$this->db_model->add_evenement();
				$data['evenement'] = $this->db_model->get_all_evenement();
				//Chargement de la view haut.php
				$this->load->view('vueHaut.php');
				//Chargement de la view du milieu: page_accueil.php
				$this->load->view('afficher_evenements.php', $data);
				//Chargement de la view bas.php
				$this->load->view('vueBas.php');
			} else {
				echo "Date non cohérentes";
				$this->load->helper('url');
				//Chargement de la view haut.php
				$this->load->view('vueHaut.php');
				//Chargement de la view du milieu: page_accueil.php
				$this->load->view('ajouter_evenement.php');
				//Chargement de la view bas.php
				$this->load->view('vueBas.php');
			}
		}

	}
}
?>


