class Users_model extends CI_Model { 
    /** * Constructor * */ 
    function __Construct() { 
        parent::__Construct(); 
    } 
    // -------------------------------------------------------------------- 
    
    /** * Get Users */
    function getUsers($conditions=array(),$fields='') { 
        parent::__construct(); 
        if(count($conditions)>0) 
            $this->db->where($conditions); 
        $this->db->from('ci_users'); 
        $this->db->order_by("ci_users.user_id", "asc");
        if($fields!='') 
            $this->db->select($fields); 
        else 
            $this->db->select('ci_users.user_id,ci_users.user_name,ci_users.user_email,ci_users.online'); 
        $result = $this->db->get(); return $result; }
    //End of getUsers Function 
}