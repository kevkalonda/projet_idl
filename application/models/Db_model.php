<?php
class Db_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	public function get_all_evenement() {/*Affichage de toute les actualités*/
		$query = $this->db->query("SELECT * FROM `t_evenement_evn`
natural join t_responsable_res
NATURAL join t_adherent_adh;
");
		return $query->result_array();
	}

	public function add_evenement() {
		$this->load->helper('url');

		$debutinscription = htmlspecialchars(addslashes($this->input->post('debutinscription')));
		$fininscription   = htmlspecialchars(addslashes($this->input->post('fininscription')));
		$debutevenement   = htmlspecialchars(addslashes($this->input->post('debutevenement')));
		$finevenement     = htmlspecialchars(addslashes($this->input->post('finevenement')));
		$temps            = htmlspecialchars(addslashes($this->input->post('temps')));
		$nombre           = htmlspecialchars(addslashes($this->input->post('nombre')));
		$details          = htmlspecialchars(addslashes($this->input->post('details')));
		$description      = htmlspecialchars(addslashes($this->input->post('description')));
		$lieu             = "brest";
		$query            = $this->db->query(" INSERT INTO `t_evenement_evn` ( `date_debut_inscription_evn`, `date_fin_inscription_evn`, `date_debut_evenement`, `date_fin_evenement`, `heure_debut_evenement`, `description_evn`, `detail_evn`, `lieu_evn`, `nombre_place_evn`, `adm_id`, `res_id`) VALUES ('".$debutinscription."', '".$fininscription."', '".$debutevenement."', '".$finevenement."', '".$temps."', '".$description."', '".$details."', '".$lieu."', '".$nombre."',NULL,'1');");

		return ($query);

	}

	public function connect_compte($pseudo, $mdp) {
		$salt  = "OnRajouteDuSelPourAllongerleMDP123!!45678__Test";
		$mdp2  = hash('sha256', $salt.$mdp);
		$query = $this->db->query("SELECT com_pseudo,com_mot_de_passe FROM t_compte_cpt
		 WHERE com_pseudo='".$pseudo."'AND com_mot_de_passe='".$mdp."';
");
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	public function get_one_compte($pseudo) {
		$query = $this->db->query("SELECT * FROM t_compte_cpt  join t_adherent_adh using (cpt_id) where com_pseudo='".$pseudo."'");
		return $query->row();
	}

	public function creer_compte() {

		$this->load->helper('url');

		$pseudo  = htmlspecialchars(addslashes($this->input->post('pseudo')));
		$mdp     = htmlspecialchars(addslashes($this->input->post('mdp1')));
		$nom     = htmlspecialchars(addslashes($this->input->post('nom')));
		$prenom  = htmlspecialchars(addslashes($this->input->post('prenom')));
		$adresse = $this->input->post('adresse');
		$email   = htmlspecialchars(addslashes($this->input->post('email')));
		$desc    = htmlspecialchars(addslashes($this->input->post('description')));
		$tele    = $this->input->post('tele');
		$statut  = $this->input->post('statut');
		$req1    = "INSERT INTO t_compte_cpt values(NULL,'".$pseudo."','".$mdp."')";
		$req2    = "INSERT INTO t_adherent_adh values(NULL,'".$nom."','".$prenom."','".$adresse."','".$email."','".$desc."','".$tele."',NULL,'".$statut."',(select max(cpt_id)
        from t_compte_cpt),NULL)";
		$query1 = $this->db->query($req1);
		$query2 = $this->db->query($req2);
		return ($query1);
		return ($query2);
	}

	public function get_all_propositions() {
		$query = $this->db->query("SELECT * from t_proposition_pro");
		return $query->result_array();
	}

	public function get_one_proposition($numero) {
		$query = $this->db->query("SELECT  * from t_proposition_pro where pro_id=".$numero.";");
		return $query->row();
	}

}