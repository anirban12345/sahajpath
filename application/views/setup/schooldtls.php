

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
        <li class="active">School Details</li>
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
        <div class="col-md-12 col-sm-12 col-xs-12">
		
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">School Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<?php foreach($setup as $r){?>
            <form role="form" action="<?php echo site_url('Setup/updateSchoolDtls/'.$r->setup_id);?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="firstname">School Name</label>
                  <input type="text" class="form-control" id="firstname" placeholder="Enter School Name" name="schoolname" value="<?=$r->name?>" autocomplete="off"  />
                </div>				
				<div class="form-group">
                  <label for="phoneno">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address"  value="<?=$r->address?>" autocomplete="off"  />
                </div>
				<div class="form-group">
                  <label for="phoneno">Email Address</label>
                  <input type="text" class="form-control" id="phoneno" placeholder="Enter Email Address" name="email"  value="<?=$r->emailid?>" autocomplete="off" />
                </div>
				<div class="form-group">
                  <label for="phoneno">Phone No</label>
                  <input type="text" class="form-control" id="phoneno" placeholder="Enter Phone No" name="phoneno"  value="<?=$r->phoneno?>" autocomplete="off" />
                </div>				                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
			<?php } ?>
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


