<?php
class Subjectmodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
    }
	
	public function get_all_class_subject_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('class_subject');		
		$this->db->join('class','class_subject.csub_classid=class.class_id');						
		$this->db->where('class_id',$id);		
		$this->db->order_by('class_name','asc');		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
}

?>