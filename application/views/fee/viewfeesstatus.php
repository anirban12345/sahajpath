

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Fee
        <!-- <small>Version 2.0</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-inr"></i>Fee</a></li>
        <li class="active">Fees Details</li>
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
				<div class="box-header">				
				 <?php foreach($sturec as $r)
				  {				  
					  $session=$r->scm_session;
					  $class=$r->class_name;
					  $section=$r->csec_name;
				  }?>
				  
				  <h3 class="box-title">Fees List of Academic Year: <strong><?=$session?></strong>, Class: <strong><?=$class?></strong>, Section: <strong><?=$section?></strong></h3>
				  				  
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="example1" class="table table-bordered table-striped">			  
					<thead>
					<tr>
					  <th>Roll No.</th>					  					  
					  <th>Student Registration No</th>					  
					  <th>Name</th>
					  <th>Months Paid</th>
					</tr>
					</thead>
					<tbody>
					
					<?php $i=1; foreach($sturec as $r) { ?>
					<tr>
					  <td><?=$r->scm_rollno?></td>
					  <td><?=$r->reg_no?></td>
					  <td><?=$r->stuname?></td>
					  
					  <?php $month=""; foreach($feessstat as $r1) {
							
							if($r1->reg_no==$r->reg_no)
							{			
								$month.=$r1->sf_month;
							}
							
						}?>
						<td><?=$month?></td>						
					</tr>
					<?php } ?>
					
					</tbody>
				  </table>	
				</div>	
			</div>	
        </div>  
      </div>
      <!-- /.row -->	  

      <!-- Main row -->
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


