

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setup
        <!-- <small>Version 2.0</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-wrench"></i>Setup</a></li>
        <li class="active">Subject Details</li>
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
	
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
		
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Subject</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->	
			
            <form role="form" action="<?php echo site_url('Setup/saveSubjectDtls');?>" method="post">
              <div class="box-body">			    			    
                <div class="form-group">
					<label>Select Class</label>
						<select class="form-control select2" style="width: 100%;" id="classname1" name="classname">
							<option value="Select">Select</option> 							
							<?php foreach($class as $r){?>
							<option value="<?=$r->class_id?>"><?=$r->class_name?></option> 							
							<?php }?>
					    </select>
				</div>
				<div class="form-group">
                  <label for="firstname">Subject Name</label>
                  <input type="text" class="form-control" id="subjectname" placeholder="Enter Subject Name" name="subjectname" autocomplete="off"  />
                </div>								
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>			
			
          </div>	
        </div>
			
		<div class="col-md-6 col-sm-6 col-xs-6">
		
			<div class="box">
				<div class="box-header">
				  <h3 class="box-title">Class And Subject List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  
				  <div id="subject">
					
				  </div>
				  
				  
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


