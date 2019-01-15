<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fees extends CI_Controller 
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
		$data['allrec']=$this->Feesmodel->get_all_class_fees();
		
		for($i=0; $i<count($data['allrec']); $i++) 
		{
			$fees_id = explode(",",$data['allrec'][$i]->fees_id);
			$c_fee = "";
			for($j=0; $j<count($fees_id); $j++) 
			{
				$ur = $this->Globalmodel->getdata_by_field('fees','f_id',$fees_id[$j]);
				
				//print_r($ur);
				
				if($j == count($fees_id)-1)
					$c_fee .= $ur[0]->f_head;
				else
					$c_fee .= $ur[0]->f_head . ",<br>";
			}
			$data['allrec'][$i]->c_fee = $c_fee;
		}
		
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
		$fees=implode(",", $this->input->post('fees'));
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'class_id'=>$classid,
					'fees_id'=>$fees,
					'cf_date'=>date('Y-m-d'), 
					'cf_time'=>date('H:i:s'), 
					'cf_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('class_fees',$dtls);
		
		$this->session->set_flashdata('successmsg','Fees Successfully Saved');
		redirect('Fees/feesDtls');			
	}
	
	public function updateFeesDtls($id)
	{
		$classid=$this->input->post('classid');				
		$fees=implode(",", $this->input->post('fees'));
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'class_id'=>$classid,
					'fees_id'=>$fees,
					'cf_date'=>date('Y-m-d'), 
					'cf_time'=>date('H:i:s'), 
					'cf_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->updatedata('class_fees','cf_id',$id,$dtls);
		
		$this->session->set_flashdata('successmsg','Fees Successfully Saved');
		redirect('Fees/feesDtls');	
	}
}
