<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compte extends CI_Controller {

        public function __construct(){                
            parent::__construct();
            $this->load->helper('url'); 
            $this->load->model('db_model');
            $this->load->library('session');     
            $this->load->helper('form');
            $this->load->library('form_validation');  
        }
    public function connecter(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('pseudo', 'pseudo', 'required',array('required'=>'veuillez saisir un identifient.'));
        $this->form_validation->set_rules('mdp', 'mdp', 'required',array('required'=>'veuillez saisir un mot de passe.')); 
        if ($this->form_validation->run() == FALSE){
            $this->load->view('login'); 
        }
        else{
            $pseudo = $this->input->post('pseudo');   
            $mdp = $this->input->post('mdp'); 

            if($this->db_model->connect_compte($pseudo,$mdp)){            
                    $data['compte'] = $this->db_model->get_one_compte($pseudo); 
                    $this->load->view('espace_utilisateur',$data);             
            }
                else{
                    $this->load->view('login'); 
                }
            }
    }
    public function creer(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('db_model');

        $this->form_validation->set_rules('pseudo', 'pseudo','required');
        $this->form_validation->set_rules('mdp1', 'mdp1','required'); 
        $this->form_validation->set_rules('mdp2', 'mdp2','required');
        $this->form_validation->set_rules('prenom', 'prenom','required');
        $this->form_validation->set_rules('nom', 'nom','required');
        $this->form_validation->set_rules('adresse', 'adresse','required');
        $this->form_validation->set_rules('email', 'email','required');
        $this->form_validation->set_rules('tele', 'tele','required');
        $this->form_validation->set_rules('description', 'description','required');
        $this->form_validation->set_rules('statut', 'statut','required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('inscription'); 
        }
        else{  
            $pseudo = $this->input->post('pseudo');
            $mdp1 = $this->input->post('mdp1');
            $mdp2 = $this->input->post('mdp2');

            if($mdp1==$mdp2){
                $this->db_model->creer_compte();
                $this->db_model->connect_compte($pseudo,$mdp1)  ;
                $data['compte'] = $this->db_model->get_one_compte($pseudo); 
                $this->load->view('espace_utilisateur',$data);   
            //    $this->load->helper('url');       
            //    redirect(base_url().'accueil/index');   
            }else {
                echo "Les deux mots de passes ne sont pas egaux";
            }  
        } 
    }


    public function deconnect()
	{
        $this->load->view('login'); 
	}

    public function afficherPropositions(){
        $data['propo'] = $this->db_model->get_all_propositions();       
        $this->load->view('espace_vote',$data); 
    } 
    
    public function voter($numero){
        $data['propo'] = $this->db_model->get_one_proposition($numero);
        $this->load->view('formulaire_vote',$data); 
    }     




}
