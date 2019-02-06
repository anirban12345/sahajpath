<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller 
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
	
	public function studentList()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['allrec']=$this->Studentmodel->getstudent_by_join_regno();
		//$data['allrec']=$this->Studentmodel->getstudent_class_caste_religion();
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('student/studentlist',$data);
		$this->load->view('student/footer');	
	}
	
	public function addStudent()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		
		$data['religion']=$this->Globalmodel->getdata_by_field('religion','religion_flag','1');
		$data['caste']=$this->Globalmodel->getdata_by_field('caste','caste_flag','1');
		
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('student/addstudent',$data);
		$this->load->view('student/footer');
	}
	
	public function addStudentPhoto($regno)
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['regno']=$regno;
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('student/upload_student_image',$data);
		$this->load->view('student/footer');
	}
	
	public function addStudentDocs($regno)
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['regno']=$regno;
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('student/upload_student_docs',$data);
		$this->load->view('student/footer');
	}
	
	public function viewStudent($regno)
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['allrec']=$this->Globalmodel->getdata_by_field('student','reg_no',$regno);		
		$data['studoc']=$this->Globalmodel->getdata_by_field('student_docs','reg_no',$regno);				
		$data['stuclass']=$this->Studentmodel->getstudenttoclass_by_regno($regno);
		
		$data['religion']=$this->Globalmodel->getdata_by_field_join('student','religion_id','religion','religion_id','reg_no',$regno);		
		$data['caste']=$this->Globalmodel->getdata_by_field_join('student','caste_id','caste','caste_id','reg_no',$regno);				
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('student/viewstudent',$data);
		$this->load->view('student/footer');
	}
	
	public function editStudent($id)
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');
		$data['religion']=$this->Globalmodel->getdata_by_field('religion','religion_flag','1');
		$data['caste']=$this->Globalmodel->getdata_by_field('caste','caste_flag','1');
		$data['allrec']=$this->Globalmodel->getdata_by_field('student','stu_id',$id);			
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('student/editstudent',$data);
		$this->load->view('student/footer');
	}
	
	public function searchStudent()
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('student/searchstudent',$data);
		$this->load->view('student/footer');
	}
	
	public function searchStudentClassSection()
	{	
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['class']=$this->Globalmodel->getdata('class');		
		$this->load->view('header',$data);
		$this->load->view('student/studentsearchclass',$data);
		$this->load->view('student/footer');
	}
	
	public function searchStudentListClass()
	{
		
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');	
		//$data['allrec']=$this->Studentmodel->getstudent_class_caste_religion();

		$session=$this->input->post('session');
		$classid=$this->input->post('classname');
		$sectionid=$this->input->post('section');
		
		$data['allrec']=$this->Studentmodel->get_student_class_section($session,$classid,$sectionid);
		
		/*
		foreach($data['allrec'] as $r)
		{
			$data['class']=$this->Globalmodel->getdata_by_field('class_section','csec_id',$r->cs_parentid);		
		}
		*/
		
		//print_r($data['countuser']);
		//print_r($data['rec'][0]->id);
		$this->load->view('header',$data);
		$this->load->view('student/studentlistclass',$data);
		$this->load->view('student/footer');
		
	}
	
	public function searchStudent_by_name()
	{
		$stuname=$this->input->post('stuname');
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');				
		$data['sturec']=$this->Globalmodel->getdata_by_field_with_like('student','stuname',$stuname);				
		
		$html='<table id="example1" class="table table-bordered table-striped">			  
					<thead>
					<tr>
					  <th>Sl No.</th>
					  <th>Reg No.</th>
					  <th>Name</th>
					  <th>Father\'s Name</th>
					  <th>Phone No</th>
					  <th>Admission Date</th>
					  <th>Admission Time</th>
					  <th>Status</th>
					  <th>Action</th>
					</tr>
					</thead>
					<tbody>';
					$i=1; 
					foreach($data['sturec'] as $r) {
						
		$html.='<tr>
					  <td>'.$i++.'</td>
					  <td>'.$r->reg_no.'</td>
					  <td>'.$r->stuname.'</td>
					  <td>'.$r->fathersname.'</td>
					  <td>'.$r->phoneno.'</td>
					  <td>'.date("d-M-Y",strtotime($r->stu_date)).'</td>
					  <td>'.$r->stu_time.'</td>';
					  
					  if($r->stu_flag==1){ 
		$html.='<td><span class="label label-success">Active</span></td>';
					  }else {
		$html.='<td><span class="label label-danger">Deactive</span></td>';
					   }
		$html.='<td>';
					  if($r->stu_flag==1){ 					  
		$html.='<a href="'.site_url('Student/activateStudent/'.$r->stu_id).'" roll="button" class="btn btn-warning btn-xs"><i class="fa fa-ban" aria-hidden="true"></i></a>';					  					  
					  } else {
		$html.='<a href="'.site_url('Student/activateStudent/'.$r->stu_id).'" roll="button" class="btn btn-warning btn-xs"><i class="fa fa-check" aria-hidden="true"></i></a>';					  					  
					  }					   
		$html.='<a href="'.site_url('Student/editStudent/'.$r->stu_id).'" roll="button" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
				<a href="'.site_url('Student/viewStudent/'.$r->reg_no).'" roll="button" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
				</td>
				</tr>';
					} 
		$html.='</tbody></table>';		
		echo $html;
	}
	
	public function searchStudent_by_regno()
	{
		$regno=$this->input->post('regno');
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');				
		$data['sturec']=$this->Globalmodel->getdata_by_field('student','reg_no',$regno);				
		
		$i=1; 
		foreach($data['sturec'] as $r) {
		
		$html='<table id="example1" class="table table-bordered table-striped">			  
					<thead>
					<tr>
					  <th>Sl No.</th>
					  <th>Reg No.</th>
					  <th>Name</th>
					  <th>Father\'s Name</th>
					  <th>Phone No</th>
					  <th>Admission Date</th>
					  <th>Admission Time</th>
					  <th>Status</th>
					  <th>Action</th>
					</tr>
					</thead>
					<tbody>';		
		$html.='<tr>
					  <td>'.$i++.'</td>
					  <td>'.$r->reg_no.'</td>
					  <td>'.$r->stuname.'</td>
					  <td>'.$r->fathersname.'</td>
					  <td>'.$r->phoneno.'</td>
					  <td>'.date("d-M-Y",strtotime($r->stu_date)).'</td>
					  <td>'.$r->stu_time.'</td>';
					  
					  if($r->stu_flag==1){ 
		$html.='<td><span class="label label-success">Active</span></td>';
					  }else {
		$html.='<td><span class="label label-danger">Deactive</span></td>';
					   }
		$html.='<td>';
					  if($r->stu_flag==1){ 					  
		$html.='<a href="'.site_url('Student/activateStudent/'.$r->stu_id).'" roll="button" class="btn btn-warning btn-xs"><i class="fa fa-ban" aria-hidden="true"></i></a>';					  					  
					  } else {
		$html.='<a href="'.site_url('Student/activateStudent/'.$r->stu_id).'" roll="button" class="btn btn-warning btn-xs"><i class="fa fa-check" aria-hidden="true"></i></a>';					  					  
					  }					   
		$html.='<a href="'.site_url('Student/editStudent/'.$r->stu_id).'" roll="button" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
				<a href="'.site_url('Student/viewStudent/'.$r->reg_no).'" roll="button" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a></td>
				</tr>';
					}
		$html.='</tbody></table>';
		
		echo $html;
	}
	
	public function activateStudent($id)
	{
			$this->Globalmodel->activate('student','stu_id',$id,'stu_flag');	
			$this->session->set_flashdata('successmsg','Student Successfully Saved');
			redirect('Student/studentList', 'refresh');	
	}
	
	public function saveStudentDtls()
	{
		$regno=date('ymdHis');
		$firstname=$this->input->post('firstname');		
		$middlename=$this->input->post('middlename');		
		$lastname=$this->input->post('lastname');			
		$fathersname=$this->input->post('fathersname');	
		$mothersname=$this->input->post('mothersname');	
		$address=$this->input->post('address');			
		$state=$this->input->post('state');	
		$district=$this->input->post('district');	
		$pincode=$this->input->post('pincode');	
		$dob=$this->input->post('dob');	
		$gender=$this->input->post('gender');	
		$nationality=$this->input->post('nationality');	
		$religion=$this->input->post('religion');	
		$caste=$this->input->post('caste');		
		$physicallychalleged=$this->input->post('physicallychalleged');	
		$phoneno=$this->input->post('phoneno');
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'reg_no'=>$regno,
					'stuname'=>$firstname.' '.$middlename.' '.$lastname, 					
					'fathersname'=>$fathersname, 
					'mothersname'=>$mothersname,
					'address'=>$address,
					'state'=>$state,
					'district'=>$district,
					'pincode'=>$pincode,
					'dob'=>date("Y-m-d",strtotime($dob)),
					'gender'=>$gender,
					'nationality'=>$nationality,
					'religion_id'=>$religion,
					'caste_id'=>$caste,
					'physicallychalleged'=>$physicallychalleged,
					'phoneno'=>$phoneno,
					'image'=>'user.jpg',	
					'scm_id'=>'N/A',
					'stu_date'=>date('Y-m-d'), 
					'stu_time'=>date('H:i:s'), 
					'stu_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('student',$dtls);		
		$this->session->set_flashdata('successmsg','Student Successfully Saved - Student Registration No is: <strong>'.$regno.'</strong>');
		redirect('Student/viewStudent/'.$regno);	
	}
	
	public function updateStudentDtls($id)
	{
		$sname=$this->input->post('sname');					
		$fathersname=$this->input->post('fathersname');	
		$mothersname=$this->input->post('mothersname');	
		$address=$this->input->post('address');			
		$state=$this->input->post('state');	
		$district=$this->input->post('district');	
		$pincode=$this->input->post('pincode');	
		$dob=$this->input->post('dob');		
	    $gender=$this->input->post('gender');		
		$nationality=$this->input->post('nationality');	
		$religion=$this->input->post('religion');
		$caste=$this->input->post('caste');
		$physicallychalleged=$this->input->post('physicallychalleged');	
		$phoneno=$this->input->post('phoneno');
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'stuname'=>$sname, 										
					'fathersname'=>$fathersname, 
					'mothersname'=>$mothersname,
					'address'=>$address,
					'state'=>$state,
					'district'=>$district,
					'pincode'=>$pincode,
					'dob'=>date("Y-m-d",strtotime($dob)),
					'gender'=>$gender,
					'nationality'=>$nationality,
					'religion_id'=>$religion,
					'caste_id'=>$caste,
					'physicallychalleged'=>$physicallychalleged,
					'phoneno'=>$phoneno,															 
					'stu_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->updatedata('student','stu_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Student Successfully Saved');
		redirect('Student/studentlist');
	}
	
	public function do_upload($regno)
    {
			    $config['upload_path']     = './uploads/stuimg/';
				$config['file_name']       = $regno.'.jpg';				
                $config['allowed_types']   = 'gif|jpg|png';
                $config['max_size']        = 0;
                $config['max_width']       = 1024;
                $config['max_height']      = 768;
				$config['overwrite'] 	   = TRUE;
				
                $this->load->library('upload', $config);
				$this->upload->initialize($config);
				
                if (!$this->upload->do_upload('Image_Scan'))
                {
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('errmsg', $error->error);
                    redirect('Student/viewStudent/'.$regno);
                }
                else
                {   
					$dtls=array('image'=>$regno.'.jpg');
					$this->Globalmodel->updatedata('student','reg_no',$regno,$dtls);	
					
                    $data = array('upload_data' => $this->upload->data());
					$this->session->set_flashdata('successmsg', 'Image Successfully Added');
                    redirect('Student/viewStudent/'.$regno);
                }
    }
	
	public function do_upload2($regno,$time)
    {
			    $config['upload_path']     = './uploads/studocs/';
				$config['file_name']       = $time.'.jpg';				
                $config['allowed_types']   = 'gif|jpg|png';
                $config['max_size']        = 0;
                $config['max_width']       = 1024;
                $config['max_height']      = 768;
				$config['overwrite'] 	   = TRUE;
				
                $this->load->library('upload', $config);
				$this->upload->initialize($config);
				
                if (!$this->upload->do_upload('Image_Scan'))
                {
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('errmsg', $error->error);
                    redirect('Student/viewStudent/'.$regno);
                }
                else
                {   
					$regno=$regno;
					$description=$this->input->post('description');
					$filename=$time.'.jpg';
					$userid=$this->session->userdata('userid');
					
					$dtls=array(
								'reg_no'=>$regno,
								'description'=>$description,
								'filename'=>$filename,
								'sd_date'=>date('Y-m-d'),
								'sd_time'=>date('H:i:s'),
								'sd_flag'=>1,
								'user_id'=>$userid
								);
					$this->Globalmodel->savedata('student_docs',$dtls);	
					
                    $data = array('upload_data' => $this->upload->data());
					$this->session->set_flashdata('successmsg', 'Image Successfully Added');
                    redirect('Student/viewStudent/'.$regno);
                }
    }
	
	public function addStudenttoClass($regno)
	{
		$username=$this->session->userdata('username');
		$data['rec']=$this->Globalmodel->getdata_by_field_join('users','levelid','user_level','id','Username',$username);				
		$data['setup']=$this->Globalmodel->getdata('setup');		
		$data['allrec']=$this->Globalmodel->getdata('student');
		$data['class']=$this->Globalmodel->getdata('class');
		//$data['section']=$this->Globalmodel->getdata('section');
		$data['regno']=$regno;
		
		$this->load->view('header',$data);
		$this->load->view('student/addstudenttoclass',$data);
		$this->load->view('student/footer');	
	}
	
	public function isStudentExisttoClass($sessionyear,$regno)
	{
		$filterdata=array('scm_session'=>$sessionyear,'reg_no'=>$regno);
		$data['allrec']=$this->Globalmodel->getdata_by_field_array('student_class_map',$filterdata);
		$c=0;		
		foreach($data['allrec'] as $r)
		{
			$c++;
		}
		return $c;
	}
	
	public function classStudentCount()
	{
		$data['studentcount']=$this->Studentmodel->class_countstudent();
		print_r(json_encode($data['studentcount']));
	}
		
	public function saveStudenttoClass($regno)
	{
		$sessionyear=$this->input->post('sessionyear');				
		$classid=$this->input->post('classname');
		$sectionid=$this->input->post('section');
		$userid=$this->session->userdata('userid');
		
		$flag=$this->isStudentExisttoClass($sessionyear,$regno);
		
		if($flag>0)
		{
			$this->session->set_flashdata('errmsg','Student Already Added to Class');
			redirect('Student/viewStudent/'.$regno);
		}
		else
		{
			$dtls=array(
						'reg_no'=>$regno, 
						'scm_session'=>$sessionyear,
						'scm_classid'=>$classid, 						
						'scm_sectionid'=>$sectionid, 						
						'scm_date'=>date('Y-m-d'), 
						'scm_time'=>date('H:i:s'), 
						'scm_flag'=>1,
						'user_id'=>$userid
						);			
			$this->Globalmodel->savedata('student_class_map',$dtls);

			$data['student']=$this->Globalmodel->getdata_by_field('student_class_map','reg_no',$regno);
			
			foreach($data['student'] as $r)
			{
				$dtls2=array('scm_id'=>$r->scm_id);					
				$this->Globalmodel->updatedata('student','reg_no',$regno,$dtls2);	
			}
			$this->session->set_flashdata('successmsg','Student Successfully Added to Class');
			redirect('Student/viewStudent/'.$regno);
		}
	}
	
	public function getSection()
	{
		$classid=$this->input->post('classid');
		$data['rec']=$this->Globalmodel->getdata_by_field('class_section','csec_classid',$classid);
		//echo $sectionid;
		$str='';		
		foreach($data['rec'] as $r)
		{
			$str.='<option value="'.$r->csec_id.'">'.$r->csec_name.'</option>';
		}
		echo $str;		
	}
	
	
	public function getSection2()
	{
		$classid=$this->input->post('classid');
		$data['rec']=$this->Globalmodel->getdata_by_field('class_section','csec_classid',$classid);
		
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
					  <td>'.$r->csec_name.'</td>';					  
					  if($r->csec_flag==1)
					  {
						$str.='<td><span class="label label-success">Active</span></td>';
					  }else {
						$str.='<td><span class="label label-danger">Deactive</span></td>';
					  }
					  $str.='<td>';
					  if($r->csec_flag==1)
					  {
					  $str.='<a href="'.site_url('Setup/activateSection/'.$r->csec_id).'" roll="button" class="btn btn-warning btn-xs"><i class="fa fa-ban" aria-hidden="true"></i></a>';					  					  
					  }else {
					  $str.='<a href="'.site_url('Setup/activateSection/'.$r->csec_id).'" roll="button" class="btn btn-success btn-xs"><i class="fa fa-check" aria-hidden="true"></i></a>';  
					  }
					  $str.='<a href="'.site_url('Setup/editSectiondtls/'.$r->csec_id).'" roll="button" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>';
					  $str.='</td>'; 					
					  $str.='</tr>';						
		}
		$str.='</tbody></table>';		
		echo $str;
	}			  
}
