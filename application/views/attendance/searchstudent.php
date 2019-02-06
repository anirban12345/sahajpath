  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student
        <!-- <small>Version 2.0</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-file"></i>Student</a></li>
        <li class="active">Search Student</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
	  <?php if($this->session->userdata('successmsg')){?>
			  <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?php echo $this->session->userdata('successmsg'); ?>
              </div>
	  <?php } ?>
	  
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
		
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Search Student</h3>
			  
				  
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form role="form" action="<?php echo site_url('Exam/createMarksDtls');?>" method="post">
              <div class="box-body">
			  
				<div class="form-group">
						<label>Select Academic Year</label>
						<select class="form-control select2" style="width: 100%;" id="session" name="session">								
								<option value="2017" <?php if(date('Y')=="2017"){ echo "selected"; } ?>>2017</option>                  
								<option value="2018" <?php if(date('Y')=="2018"){ echo "selected"; } ?>>2018</option>                  
								<option value="2019" <?php if(date('Y')=="2019"){ echo "selected"; } ?>>2019</option>                  
								<option value="2020" <?php if(date('Y')=="2020"){ echo "selected"; } ?>>2020</option>                  
								<option value="2021" <?php if(date('Y')=="2021"){ echo "selected"; } ?>>2021</option>                  
					    </select>
				</div>
					
				<div class="form-group">
					<label>Select Class</label>
						<select class="form-control select2" style="width: 100%;" id="classname" name="classname">	
							<option value="Select">Select</option> 							
							<?php foreach($class as $r){?>
							<option value="<?=$r->class_id?>"><?=$r->name?></option>                  
							<?php }?>
					    </select>
				</div>
				
				<div class="form-group">
					<label>Select Section</label>
					<select class="form-control select2" style="width: 100%;" id="section" name="section">
							
					</select>
				</div> 
				
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
              </div>
            </form>
          </div>	
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


