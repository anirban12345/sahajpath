<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fees extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct(); 
		$this->load->helper(array('url','html','form','download')); 
		ini_set('post_max_size', '64M');
		ini_set('upload_max_filesize', '500M');
		date_default_timezone_set('Asia/Kolkata');		
    }
	
	public function index()
	{	
		
	}
	
	public function addFees()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['class']=$this->Globalmodel->getdata_by_field('class','class_flag','1');
		$data['fees']=$this->Globalmodel->getdata_by_field('fees','f_flag','1');
		$this->load->view('header',$data);		
		$this->load->view('fee/addfee',$data);
		$this->load->view('fee/footer');	
	}
	
	public function editFeesdtls($id)
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$data['allrec']=$this->Feesmodel->get_all_class_fees_by_id($id);		
		$data['fees']=$this->Globalmodel->getdata_by_field('fees','f_flag','1');
		
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('fee/feesdtls_edit',$data);
		$this->load->view('fee/footer');	
	}
	
	public function feesDtls()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['allrec']=$this->Globalmodel->getdata('class');		
		//$data['allrec']=$this->Feesmodel->get_all_class_fees();		
		//print_r($data['allrec']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('fee/feesdtls',$data);
		$this->load->view('fee/footer');	
	}
	
	public function issexistsFeesDtls($class_id)
	{
		$data['rec']=$this->Globalmodel->getdata_by_field('class_fees','class_id',$class_id);		
		$i=0;
		foreach($data['rec'] as $r){$i++;}
		if($i>0)
		{
			$this->session->set_flashdata('errmsg','Fees Already Added! Please Edit Fees Respect to Class');
			redirect('Fees/feesDtls');
		}else
		{
			$this->saveFeesDtls();
		}
	}
	
	public function saveFeesDtls()
	{
		$classid=$this->input->post('classid');		
		$this->issexistsFeesDtls($classid);		
		$fees=$this->input->post('fees');
		$userid=$this->session->userdata('userid');
		
		for($i=0;$i<sizeof($fees);$i++)
		{
			$dtls=array(
					'class_id'=>$classid,
					'fees_id'=>$fees[$i],
					'cf_date'=>date('Y-m-d'), 
					'cf_time'=>date('H:i:s'), 
					'cf_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('class_fees',$dtls);
		}
		$this->session->set_flashdata('successmsg','Fees Successfully Saved');
		redirect('Fees/feesDtls');			
	}
}
