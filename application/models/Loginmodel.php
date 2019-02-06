<?php
class Loginmodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
    }
	
	public function checklogin($username,$password)
	{  
	    $this->db->select('*');
		$this->db->from('users');	 		
		$this->db->where('username',$username);							
		$this->db->where('password',$password);							
		$this->query=$this->db->get();		
		$noofrows = $this->query->num_rows();
	    return $noofrows;
	}
	
	public function countuser()
	{  
	    $this->db->select('Title,count(Title) as cuser');		
		$this->db->from('users');
		$this->db->join('user_level','users.levelid = user_level.id');
		$this->db->group_by('Title'); 		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
}

?>