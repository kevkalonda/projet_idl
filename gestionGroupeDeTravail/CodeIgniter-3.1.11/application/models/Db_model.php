<?php
	class Db_model extends CI_Model {
		//...
		public function __construct()
		{
			$this->load->database();
		}
		public function set_groupe()
		{
			$this->load->helper('url');
			$id=htmlspecialchars(addslashes($this->input->post('id')));
			$nom=htmlspecialchars(addslashes($this->input->post('mdp')));
			$nbParticipant=htmlspecialchars(addslashes($this->input->post('nombre')));
			
			$req="INSERT INTO groupe VALUES ('".$id."','".$nom."','".$nbParticipant."');";
			//$req="INSERT INTO groupe VALUES (10,'junior','kkk');";
			$query = $this->db->query($req);
			return ($query);
		}
	}
?>