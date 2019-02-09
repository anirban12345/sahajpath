

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student
        <!-- <small>Version 2.0</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i>Student</a></li>
        <li class="active">View Student</li>
		
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">	
			<?php if($this->session->userdata('successmsg')){?>
			  <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?php echo $this->session->userdata('successmsg'); ?>
              </div>
			<?php } ?>
			
			<?php if($this->session->userdata('errmsg')){?>
			  <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                <?php echo $this->session->userdata('errmsg'); ?>
              </div>
			<?php } ?>
			
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
		
			<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Student Details</h3>
			 <?php foreach($allrec as $r) {?>
				<div class="pull-right"><a href="<?php echo site_url('Student/addStudentDocs/'.$r->reg_no); ?>" roll="button" class="btn btn-info btn-lg">Upload Docs</a></div>
			    <div class="pull-right"><a href="<?php echo site_url('Student/addStudenttoClass/'.$r->reg_no); ?>" roll="button" class="btn btn-info btn-lg">Assign To Class</a></div>
			    <div class="pull-right"><a href="<?php echo site_url('Student/addStudentPhoto/'.$r->reg_no); ?>" roll="button" class="btn btn-info btn-lg">Upload Photo</a></div>
			 <?php }?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<?php foreach($allrec as $r) {?>              
			  <table class="table table-bordered">                			  			                    
				<tr>                  
				  <td colspan=2 align=center>
					<a class="example-image-link" href="<?php echo base_url().'tes.png'; ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="img-responsive" src="<?php echo base_url().'tes.png'; ?>" alt="Image Not Found" width="200" /></a>
				  </td>					  
				</tr>
				<tr>
                  <th>Registration No</th>
                  <td><?=$r->reg_no?></td>
                </tr>
				<tr>
                  <th>Name</th>
                  <td><?=$r->stuname?></td>                                    				  
                </tr>
				<tr>
                  <th>Father's Name</th>
                  <td><?=$r->fathersname?></td>                                    				  
                </tr>
				<tr>
                  <th>Mother's Name</th>
                  <td><?=$r->mothersname?></td>                                    				  
                </tr>
				<tr>
                  <th>Address</th>
                  <td><?=$r->address?></td>                                    				  
                </tr>
				<tr>
                  <th>State</th>
                  <td><?=$r->state?></td>                                    				  
                </tr>
				<tr>
                  <th>District</th>
                  <td><?=$r->district?></td>                                    				  
                </tr>
				<tr>
                  <th>Pincode</th>
                  <td><?=$r->pincode?></td>                                    				  
                </tr>
				<tr>
                  <th>Date Of Birth</th>
                  <td><?=date("d-M-Y",strtotime($r->dob))?></td>                                    				  
                </tr>
				<tr>
                  <th>Gender</th>
                  <td><?=$r->gender?></td>                                    				  
                </tr>
				<tr>
                  <th>Nationality</th>
                  <td><?=$r->nationality?></td>                                    				  
                </tr>
				<tr>
                  <th>Religion</th>
                  <?php foreach($religion as $r) {?><td><?=$r->rname?></td><?php }?>                                    				  
                </tr>
				<tr>
                  <th>Caste</th>
                  <?php foreach($caste as $r) {?><td><?=$r->cname?></td><?php }?>
                </tr>
				<tr>
                  <th>Physically Challeged</th>
                  <td><?=$r->physicallychalleged?></td>                                    				  
                </tr>
				<tr>
                  <th>Contact No</th>
                  <td><?=$r->phoneno?></td>                                    				  
                </tr>
				<tr>
                  <th>Contact No</th>
				  <td>
					<a class="example-image-link" href="<?php echo base_url().'uploads/stuimg/'.$r->image; ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="img-responsive" src="<?php echo base_url().'uploads/stuimg/'.$r->image; ?>" alt="Image Not Found" width="100" /></a>
			      </td>
				</tr>				
				
				<?php } ?>
				
				<?php foreach($studoc as $r) {?>
				<tr>	
				  <td><?=$r->description?></td>
				  <td><a class="example-image-link" href="<?php echo base_url().'uploads/studocs/'.$r->filename; ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo base_url().'uploads/studocs/'.$r->filename; ?>" alt="Image Not Found" width="50" /></a></td>
                </tr>
				<?php } ?>
				</table>
			  
				<table class="table table-bordered"> 					
					<tr>
					  <th>Session</th>
					  <th>Class</th>
					  <th>Section</th>                                    				  
					  <th>Roll No</th>                                    				  
					</tr>
						
					<?php $i=0; foreach($stuclass as $r) {?>
					<tr>
					  <td><?=$r->scm_session?></td>
					  <td><?=$r->class_name?></td>
					  <td><?=$r->csec_name?></td>					  
					  <td><?=$r->scm_rollno?></td>					  
					</tr>
					<?php } ?>
				</table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              
            </div>
          </div>
		  
          <!-- /.box -->
        </div>  
      </div>
      <!-- /.row -->
      <!-- /.row -->

      <!-- Main row -->
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->