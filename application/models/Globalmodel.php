<?php
class Globalmodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
    }
	
	public function savedata($table,$data)
	{
		$this->db->insert($table,$data); 
	}
	
	public function updatedata($table,$filer,$value,$data)
	{
	   $this->db->select('*');
	   $this->db->from($table);	   
	   $this->db->where($filer,$value);
	   $this->db->update($table,$data);	
	}
	
	public function deletedata($table,$filer,$value)
	{
		$this->db->select('*');
		$this->db->from($table);		
		$this->db->where($filer,$value);
	    $this->db->update($table,$data);	
		$this->db->delete($table);
	}
	
	public function countdata($table)
	{
		$this->db->select('count(*) as noofrec');
		$this->db->from($table);		
		$this->query=$this->db->get();		
		return $this->query->result(); 
	}
	
	public function activate($table,$filter,$value,$flag_field)
	{
		$data['rec']=$this->getdata_by_field($table,$filter,$value);			
		$flag=0;			
		foreach($data['rec'] as $r)
		{
			if($r->$flag_field==0)
			{
			   $flag=1;
			}
		}
		$data=array($flag_field=>$flag);
		$this->updatedata($table,$filter,$value,$data);
	}
	
	public function getdata($table)
	{
		$this->db->select('*');
		$this->db->from($table);		
		$this->query=$this->db->get();		
		return $this->query->result(); 
	}
	
	public function getdata_join($table1,$f1,$table2,$f2)
	{
		$this->db->select('*');
		$this->db->from($table1);	
		$this->db->join($table2,$table1.'.'.$f1 ."=". $table2.'.'.$f2);		
		$this->query=$this->db->get();		
		return $this->query->result(); 
	}
	
	public function getdata_join_twotable($table1,$f1,$table2,$f2,$table3,$f3,$orderfield,$order)
	{
		$this->db->select('*');
		$this->db->from($table1);	
		$this->db->join($table2,$table1.'.'.$f1 ."=". $table2.'.'.$f2);		
		$this->db->join($table3,$table1.'.'.$f2 ."=". $table3.'.'.$f3);	
		$this->db->order_by($orderfield, $order);		
		$this->query=$this->db->get();		
		return $this->query->result(); 
	}
	
	public function getdata_by_field($table,$filter,$value)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($filter,$value);
		$this->query=$this->db->get();		
		return $this->query->result(); 
	}
	
	public function getdata_by_field_with_like($table,$filter,$value)
	{
		$this->db->select('*');
		$this->db->from($table);		
		$this->db->like($filter,$value);
		$this->query=$this->db->get();		
		return $this->query->result(); 
	}
	
	public function getdata_by_field_array($table,$filerarray)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($filerarray);
		$this->query=$this->db->get();		
		return $this->query->result(); 
	}	
	
	public function getdata_by_field_join($table1,$f1,$table2,$f2,$filer,$value)
	{
		$this->db->select('*');
		$this->db->from($table1);
		$this->db->join($table2,$table1.'.'.$f1 ."=". $table2.'.'.$f2);
		$this->db->where($filer,$value);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function getdata_by_field_join_twotable($table1,$f1,$table2,$f2,$filer,$value)
	{
		$this->db->select('*');
		$this->db->from($table1);
		$this->db->join($table2,$table1.'.'.$f1 ."=". $table2.'.'.$f2);
		$this->db->join($table3,$table1.'.'.$f2 ."=". $table3.'.'.$f3);	
		$this->db->where($filer,$value);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	
	
}

?>