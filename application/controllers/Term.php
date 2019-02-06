<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Term extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct(); 
		$this->load->helper(array('url','html','form','download')); 
		ini_set('post_max_size', '64M');
		ini_set('memory_limit', '256M');
		ini_set('upload_max_filesize', '500M');
		date_default_timezone_set('Asia/Kolkata');		
    }
	
	public function index()
	{	
		
	}
	
	public function getTerm()
	{
		$classid=$this->input->post('classid');
		$data['rec']=$this->Globalmodel->getdata_by_field('class_term','cterm_classid',$classid);
		
		$data['class']=$this->Globalmodel->getdata_by_field('class','class_id',$classid);
		
		$class='';
		foreach($data['class'] as $r)
		{
			$class=$r->class_name;	
		}
		$str='';		
		
		$str.='<table id="example1" class="table table-bordered table-striped">			  
					<thead>
					<tr><th colspan=5 class="text-primary text-center"><h3>'.$class.'</h3></th></tr>
					<tr>
					  <th>Sl No.</th>					  
					  <th>Term Name</th>					  
					  <th>Total Marks</th>					  
					  <th>Status</th>
					  <th>Action</th>					  
					</tr>
					</thead>
					<tbody>
					';
		$i=1;			
		foreach($data['rec'] as $r)
		{
			$str.='<tr>
					  <td>'.$i++.'</td>					  
					  <td>'.$r->cterm_name.'</td>					  
					  <td>'.$r->cterm_totalmarks.'</td>';					  
					  if($r->cterm_flag==1)
					  {
						$str.='<td><span class="label label-success">Active</span></td>';
					  }else {
						$str.='<td><span class="label label-danger">Deactive</span></td>';
					  }
					  $str.='<td>';
					  if($r->cterm_flag==1)
					  {
					  $str.='<a href="'.site_url('Setup/activateTerm/'.$r->cterm_id).'" roll="button" class="btn btn-warning btn-xs"><i class="fa fa-ban" aria-hidden="true"></i></a>';					  					  
					  }else {
					  $str.='<a href="'.site_url('Setup/activateTerm/'.$r->cterm_id).'" roll="button" class="btn btn-success btn-xs"><i class="fa fa-check" aria-hidden="true"></i></a>';  
					  }
					  $str.='<a href="'.site_url('Setup/editTermdtls/'.$r->cterm_id).'" roll="button" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>';
					  $str.='</td>'; 					
					  $str.='</tr>'; 					
		}
		$str.='</tbody></table>';		
		echo $str;
	}
}
