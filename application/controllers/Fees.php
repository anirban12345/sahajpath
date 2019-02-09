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
	public function searchStudent()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$data['class']=$this->Globalmodel->getdata('class');
		
		$this->load->view('header',$data);
		$this->load->view('fee/searchstudent',$data);
		$this->load->view('fee/footer');
	}
	
	public function searchStudentFeesCard()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$data['class']=$this->Globalmodel->getdata('class');
		
		$this->load->view('header',$data);
		$this->load->view('fee/searchstudentfeescard',$data);
		$this->load->view('fee/footer');
	}
	
	public function searchStudentFeesStatus()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$data['class']=$this->Globalmodel->getdata('class');
		
		$this->load->view('header',$data);
		$this->load->view('fee/searchstudentfeesstatus',$data);
		$this->load->view('fee/footer');
	}
	
	public function searchStudentFeesDate()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$data['class']=$this->Globalmodel->getdata('class');
		
		$this->load->view('header',$data);
		$this->load->view('fee/searchstudentfeesdate',$data);
		$this->load->view('fee/footer');
	}
	
	
	
	public function viewFeesStatus()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$session=$this->input->post('session');
		$classid=$this->input->post('classname');
		$sectionid=$this->input->post('section');
		
		$data['sturec']=$this->Studentmodel->get_student_class_section($session,$classid,$sectionid);
		$data['feessstat']=$this->Feesmodel->getfees_status($session,$classid,$sectionid);
		
		$this->load->view('header',$data);
		$this->load->view('fee/viewfeesstatus',$data);
		$this->load->view('fee/footer',$data);
	}
	
	public function searchStudentFees()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');

		$regno=$this->input->post('regno');
		
		$data['studentfees']=$this->Studentmodel->get_student_fees_by_regno($regno);
		
		$this->load->view('header',$data);
		$this->load->view('fee/searchstudentfees',$data);
		$this->load->view('fee/footer');
	}
	
	public function searchStudentClassSection()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');

		$session=$this->input->post('session');
		$classid=$this->input->post('classname');
		$sectionid=$this->input->post('section');
		
		$data['studentclasssection']=$this->Studentmodel->get_student_class_section($session,$classid,$sectionid);
		
		$this->load->view('header',$data);
		$this->load->view('fee/searchstudentfeesclass',$data);
		$this->load->view('fee/footer');
	}
	
	public function searchStudentClassSectionFeesCard()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');

		$session=$this->input->post('session');
		$classid=$this->input->post('classname');
		$sectionid=$this->input->post('section');
		
		$data['studentclasssection']=$this->Studentmodel->get_student_class_section($session,$classid,$sectionid);
		
		$this->load->view('header',$data);
		$this->load->view('fee/searchstudentfeesclassfeescard',$data);
		$this->load->view('fee/footer');
	}
	
	public function viewFees($session,$class,$regno)
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$data['studentclasssection']=$this->Studentmodel->get_student_class_section_by_regno($session,$class,$regno);
		
		$data['studentclassfees']=$this->Studentmodel->get_student_class_fees_by_regno($session,$class,$regno);
		
		$this->load->view('header',$data);
		$this->load->view('fee/viewfees',$data);
		$this->load->view('fee/footer',$data);
	}
	
	public function viewPaidFees($session,$class,$regno)
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$data['studentpaidfees']=$this->Studentmodel->get_student_paid_fees_by_regno($session,$class,$regno);
		
		$this->load->view('header',$data);
		$this->load->view('fee/paidfeesdtls',$data);
		$this->load->view('fee/footer',$data);
	}
	
	public function generateFeesCard($session,$class,$regno)
	{
		/* Export PDF */
		
		//load library
        $this->load->library('pdf');
        $mpdf = $this->pdf->load();
        //retrieve data from model
		
        //$data['rec'] = $this->Studentmodel->get_paidbill($billno);
		//$data['setup']=$this->Globalmodel->getdata('setup');
		//$data['sturec'] = $this->Studentmodel->getstudenttoclass_by_regno($data['rec'][0]->reg_no);
		
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['rec']=$this->Studentmodel->get_student_class_section_by_regno($session,$class,$regno);
		//$data['rec']=$this->Studentmodel->get_student_paid_fees_by_regno($session,$class,$regno);
		
		$username=$this->session->userdata('name');
		
        ini_set('memory_limit', '256M'); 
        //boost the memory limit if it's low ;)
	     
	    $html='<html>
		<head>
			<style>
					body
					{
						font-size:9px;
					}
					
					table 
					{
						font-family: verdana;
						border: 1px solid #ccc;
						border-collapse: collapse;
						width:100%;
					}
					td,th 
					{
						padding: 5px;
						border: 1px solid #ccc;
						vertical-align: middle;
					}
					div
					{
						text-align:center;
					}
					.div1{font-size:24px;}
			</style>
			<title>'.$data['setup'][0]->name.'_'.$data['rec'][0]->reg_no.'_'.$data['rec'][0]->stuname.'_Fees Card_' . date('d_M_Y') . '_.pdf</title>
		</head>
		<body>';
		
		$html.='<div class="div1">'.$data['setup'][0]->name.'</div>';
		$html.='<div>'.$data['setup'][0]->address.'</div>';
		$html.='<div>Emailid: '.$data['setup'][0]->emailid.'  Phone No: '.$data['setup'][0]->phoneno.'</div>';
		
		$html.='<table>';		
		$html.='<tr><td>Student Registration No: </td><td>'.$data['rec'][0]->reg_no.'</strong></td></tr>';				
		$html.='<tr><td>Student Name: </td><td>'.$data['rec'][0]->stuname.'</strong></td></tr>';
		$html.='<tr><td>Academic Year: </td><td>'.$data['rec'][0]->scm_session.'</strong></td></tr>';		
		$html.='<tr><td>Class: </td><td>'.$data['rec'][0]->class_name.'</strong></td></tr>';
		$html.='<tr><td>Section: </td><td>'.$data['rec'][0]->csec_name.'</strong></td></tr>';
		$html.='<tr><td>Roll No: </td><td>'.$data['rec'][0]->scm_rollno.'</strong></td></tr>';
		$html.='</table>';
		
		$html.='<table>			  
					<thead>
					<tr>				
					  <th width="50">Sl. No</th>					
					  <th width="70">Month</th>	
					  <th>Bill No</th>
					  <th>Date</th>
					  <th>Time</th>					  
					  <th>Signature</th>					  
					</tr>
					</thead>
					<tbody>';
					
		$month=array('January','February','March','April','May','June','July','August','Sepectember','October','November','December');
		for($i=0;$i<count($month);$i++)
		{	
            /*$html.='<tr>';
					  $html.='<td>'.$i++.'</td>					  
					  <td>'.$r->sf_billno.'</td>					  
					  <td>'.$r->sf_month.'</td>
					  <td>'.date("d-M-Y",strtotime($r->sf_date)).'</td>						  
					  <td>'.$r->sf_time.'</td>						  					  
					  </td>
					</tr>';
			*/		
			$html.='<tr>
					<td>'.$j=($i+1).'</td>
				    <td>'.$month[$i].'</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>					
					</tr>';
		}	
		
		$html.='</tbody></table>';
		
		$html.='<span style="font-size:8px;">** Printed By '.$username.' At: '.date('d/M/Y-H:i:s').'</span><hr>';
		
        $html.='</body></html>';
		
		$mpdf->SetHTMLHeader('<div style="border-bottom: 1px solid #000000;">My document</div>','E');


		
        $mpdf->WriteHTML($html); // write the HTML into the PDF
        $output = $data['rec'][0]->reg_no.'_'.$data['rec'][0]->sf_billno.'_Bill_' . date('d-M-Y') . '_.pdf';
		$mpdf->SetWatermarkText($data['setup'][0]->name);
		$mpdf->showWatermarkText = true;
		$mpdf->watermarkTextAlpha = 0.1;
        $mpdf->Output("$output", 'I'); // save to file because we can
        exit();
		
		
		/* Export PDF */
	}
	
	
	
	public function saveStudentFees()
	{
		$sf_billno=date('Hydmsi');	
		$sf_reg_no=$this->input->post('regno');
		$sf_classid=$this->input->post('classid');
		$sf_month=$this->input->post('month');
		$sf_year=$this->input->post('session');
		$userid=$this->session->userdata('userid');
		$sf_total=$this->input->post('total');
		$sf_totalword=$this->input->post('totalword');
		
		$checkfee=$this->input->post('checkfee');
		
		if($this->Studentmodel->is_paid_fees($sf_year,$sf_classid,$sf_month,$sf_reg_no)==0)
		{
			$dtls=array(
						'sf_reg_no'=>$sf_reg_no,
						'sf_billno'=>$sf_billno,
						'sf_classid'=>$sf_classid,
						'sf_month'=>$sf_month,
						'sf_year'=>$sf_year,
						'sf_date'=>date('Y-m-d'), 
						'sf_time'=>date('H:i:s'), 
						'sf_flag'=>1,
						'user_id'=>$userid
						);
			$this->Globalmodel->savedata('student_fee',$dtls);
			
			for($i=0;$i<count($checkfee);$i++)
			{
				$dtls2=array(						
						'sfb_billno'=>$sf_billno,
						'sfb_feesid'=>$checkfee[$i],
						'sfb_total'=>$sf_total,
						'sfb_total_word'=>$sf_totalword,
						'sfb_date'=>date('Y-m-d'), 
						'sfb_time'=>date('H:i:s'), 
						'sfb_flag'=>1,
						'user_id'=>$userid
						);
				$this->Globalmodel->savedata('student_fee_bill',$dtls2);
			}
			
			$this->session->set_flashdata('successmsg','Fees Successfully Paid Bill No Is: '.$sf_billno);
			redirect('Fees/searchStudent');
		}
		else{
			
			$this->session->set_flashdata('errmsg','Fees Already Paid');
			redirect('Fees/searchStudent');
		}		
	}
	public function getFees()
	{
		$classid=$this->input->post('classid');
		$data['rec']=$this->Globalmodel->getdata_by_field('class_fees','cfees_classid',$classid);
		
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
					  <th>Fees Head</th>					  
					  <th>Fees</th>					  
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
					  <td>'.$r->cfees_name.'</td>					  
					  <td><i class="fa fa-inr"></i> '.$r->cfees_fees.'.00</td>';
					  
					  if($r->cfees_flag==1)
					  {
						$str.='<td><span class="label label-success">Active</span></td>';
					  }else {
						$str.='<td><span class="label label-danger">Deactive</span></td>';
					  }
					  $str.='<td>';
					  if($r->cfees_flag==1)
					  {
					  $str.='<a href="'.site_url('Setup/activateFees/'.$r->cfees_id).'" roll="button" class="btn btn-warning btn-xs"><i class="fa fa-ban" aria-hidden="true"></i></a>';					  					  
					  }else {
					  $str.='<a href="'.site_url('Setup/activateFees/'.$r->cfees_id).'" roll="button" class="btn btn-success btn-xs"><i class="fa fa-check" aria-hidden="true"></i></a>';  
					  }
					  $str.='<a href="'.site_url('Setup/editFeesdtls/'.$r->cfees_id).'" roll="button" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>';
					  $str.='</td>'; 					
					  $str.='</tr>'; 					
		}
		$str.='</tbody></table>';		
		echo $str;
	
	}
	
	public function viewBill($billno)
    {
        //load library
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        //retrieve data from model
        $data['rec'] = $this->Studentmodel->get_paidbill($billno);
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['sturec'] = $this->Studentmodel->getstudenttoclass_by_regno($data['rec'][0]->reg_no);
		$username=$this->session->userdata('name');
		
        ini_set('memory_limit', '256M'); 
        //boost the memory limit if it's low ;)
	     
	    $html='<html>
		<head>
			<style>
					body
					{
						font-size:16px;
					}
					
					table 
					{
						font-family: verdana;
						border: 1px solid #ccc;
						border-collapse: collapse;
						width:100%;
					}
					td,th 
					{
						padding: 5px;
						border: 1px solid #ccc;
						vertical-align: middle;
					}
					div
					{
						text-align:center;
					}
					.div1{font-size:24px;}
			</style>
			<title>'.$data['rec'][0]->reg_no.'_'.$data['rec'][0]->sf_billno.'_Bill_' . date('d_M_Y') . '_.pdf</title>
		</head>
		<body>';
		
		$html.='<div class="div1">'.$data['setup'][0]->name.'</div>';
		$html.='<div>'.$data['setup'][0]->address.'</div>';
		$html.='<div>Emailid: '.$data['setup'][0]->emailid.'  Phone No: '.$data['setup'][0]->phoneno.'</div>';
		
		$html.='<table>';
		$html.='<tr><td>Bill No: </td><td>'.$data['rec'][0]->sf_billno.'</strong></td></tr>';				
		$html.='<tr><td>Bill Date: </td><td>'.date("d-M-Y",strtotime($data['rec'][0]->sf_date)).'</strong></td></tr>';
		$html.='<tr><td>Bill Time: </td><td>'.$data['rec'][0]->sf_time.'</strong></td></tr>';
		$html.='<tr><td>Student Registration No: </td><td>'.$data['rec'][0]->reg_no.'</strong></td></tr>';				
		$html.='<tr><td>Student Name: </td><td>'.$data['rec'][0]->stuname.'</strong></td></tr>';		
		$html.='<tr><td>Class: </td><td>'.$data['sturec'][0]->class_name.'</strong></td></tr>';
		$html.='<tr><td>Section: </td><td>'.$data['sturec'][0]->csec_name.'</strong></td></tr>';
		$html.='<tr><td>Fees Month Of: </td><td>'.$data['rec'][0]->sf_month.'</strong></td></tr>';
		$html.='<tr><td>Academic Year: </td><td>'.$data['rec'][0]->sf_year.'</strong></td></tr>';
		
		
		$html.='</table>';
		
		$html.='<table>
                <thead>
                <tr>				               
				  <th>Fees Head</th>                  
				  <th>Fees</th> 				  
                </tr>
                </thead>
                <tbody>';
		foreach($data['rec'] as $r)
		{	
            $html.='<tr>';
			$html.='<td>'.$r->cfees_name.'</td>';
			$html.='<td align=right><img src="'.base_url('assets/images/nGbfO.png').'" width="8" height="12"> '.$r->cfees_fees.'.00</td>';						
			$html.='</tr>';
		}	
		$html.='<tr><td>Total: </td><td align=right><img src="'.base_url('assets/images/nGbfO.png').'" width="8" height="12"> '.$data['rec'][0]->sfb_total.'.00</strong></td></tr>';				
		$html.='<tr><td>Total In Words: </td><td align=right><img src="'.base_url('assets/images/nGbfO.png').'" width="8" height="12"> '.$data['rec'][0]->sfb_total_word.'</strong></td></tr>';				
		$html.='<tr><td>Authorized Signatory: </td><td>______________________________________________________</td></tr>';				
		$html.='</tbody></table>';
		$html.='<span style="font-size:8px;">* This Is Computer Generated Bill Created By: '.$data['rec'][0]->Firstname.' '.$data['rec'][0]->Lastname.'</span>';
		$html.='<span style="font-size:8px;">** This Bill Is Printed By '.$username.' At: '.date('d/M/Y-H:i:s').'</span>';
		
        $html.='</body></html>';
		
		//$pdf->SetHTMLHeader('<div>abc</div>');
		//$pdf->SetHTMLFooter('<table width="100%"><tr><td width="33%">{DATE j-M-Y}</td><td width="33%" align="center">{PAGENO}/{nbpg}</td><td width="33%" style="text-align: right;">User List</td></tr></table>');
        // render the view into HTML
		
        $pdf->WriteHTML($html); // write the HTML into the PDF
        $output = $data['rec'][0]->reg_no.'_'.$data['rec'][0]->sf_billno.'_Bill_' . date('d-M-Y') . '_.pdf';
		$pdf->SetWatermarkText($data['setup'][0]->name);
		$pdf->showWatermarkText = true;
		$pdf->watermarkTextAlpha = 0.1;
        $pdf->Output("$output", 'I'); // save to file because we can
        exit();
		
		
    }
	
	
	
}