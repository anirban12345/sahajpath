<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller 
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
	
	public function getSubject()
	{
		$classid=$this->input->post('classid');
		$data['rec']=$this->Globalmodel->getdata_by_field('class_subject','csub_classid',$classid);
		
		$data['class']=$this->Globalmodel->getdata_by_field('class','class_id',$classid);
		
		$class='';
		foreach($data['class'] as $r)
		{
			$class=$r->class_name;	
		}
		$str='';		
		
		$str.='<table id="example1" class="table table-bordered table-striped">			  
					<thead>
					<tr><th colspan=4 class="text-primary text-center"><h3>'.$class.'</h3></th></tr>
					<tr>
					  <th>Sl No.</th>					  
					  <th>Section Name</th>					  
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
					  <td>'.$r->csub_name.'</td>';					  
					  if($r->csub_flag==1)
					  {
						$str.='<td><span class="label label-success">Active</span></td>';
					  }else {
						$str.='<td><span class="label label-danger">Deactive</span></td>';
					  }
					  $str.='<td>';
					  if($r->csub_flag==1)
					  {
					  $str.='<a href="'.site_url('Setup/activateSubject/'.$r->csub_id).'" roll="button" class="btn btn-warning btn-xs"><i class="fa fa-ban" aria-hidden="true"></i></a>';					  					  
					  }else {
					  $str.='<a href="'.site_url('Setup/activateSubject/'.$r->csub_id).'" roll="button" class="btn btn-success btn-xs"><i class="fa fa-check" aria-hidden="true"></i></a>';  
					  }
					  $str.='<a href="'.site_url('Setup/editSubjectdtls/'.$r->csub_id).'" roll="button" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>';
					  $str.='</td>'; 					
					  $str.='</tr>'; 					
		}
		$str.='</tbody></table>';		
		echo $str;
	}
	
	public function getSubject2()
	{
		$classid=$this->input->post('classid');
		$data['rec']=$this->Globalmodel->getdata_by_field('class_subject','csub_classid',$classid);
		//echo $sectionid;
		$str='<option value="Select">Select</option>';		
		foreach($data['rec'] as $r)
		{
			$str.='<option value="'.$r->csub_id.'">'.$r->csub_name.'</option>';
		}
		echo $str;		
	}
}
