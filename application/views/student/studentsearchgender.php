

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
        <li class="active">Gender Wise Student</li>
		
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
				  <h3 class="box-title">Gender Wise Student</h3>				  
				</div>
				
				<!-- /.box-header -->
				 <form role="form" action="<?php echo site_url('Student/searchStudentListClass');?>" method="post">
				<div class="box-body">
				  
				    <div class="form-group">
						<label>Select Academic Year</label>
						<select class="form-control select2" style="width: 100%;" id="sessionyear" name="sessionyear">
								<option value="Select">Select</option>                  
								<option value="2017">2017</option>                  
								<option value="2018">2018</option>                  
								<option value="2019">2019</option>                  
								<option value="2020">2020</option>                  
								<option value="2021">2021</option>                  
					    </select>
					</div>
					
					<div class="form-group">
						<label>Select Class</label>
						<select class="form-control select2" style="width: 100%;" id="classname" name="classname">	
							<option value="Select">Select</option> 							
							<?php foreach($class as $r){?>
							<option value="<?=$r->class_id?>"><?=$r->class_name?></option>                  
							<?php }?>
					    </select>
					</div>
				
					<div class="form-group">
					<label>Select Section</label>
					<select class="form-control select2" style="width: 100%;" id="section" name="section">
							
					</select>
					</div> 		  
				</div>
			  
			   </form>				
			</div>	
        </div>  
      </div>
      <!-- /.row -->
	  
	   <div class="row">
        <div class="col-md-12">
          
		  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Student Count</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
			  <canvas id="barChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
	  
      <!-- /.row -->

      <!-- Main row -->
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


