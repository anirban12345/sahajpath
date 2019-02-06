

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setup
        <!-- <small>Version 2.0</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Setup</a></li>
        <li class="active">Exam Term Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
		
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Exam Term</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->	
			<?php foreach($classterm as $r) {?>	
            <form role="form" action="<?php echo site_url('Setup/updateTermDtls/'.$r->cterm_id);?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="fhead">Class</label>
				  <input type="hidden" id="classname" name="classname" value="<?=$r->class_id?>" />
                  <input type="text" class="form-control" id="class" placeholder="Enter Fees Head" name="class" value="<?=$r->class_name?>" autocomplete="off" readonly  />				  
                </div>
				<div class="form-group">
                  <label for="termname">Term Name</label>
                  <input type="text" class="form-control" id="termname" placeholder="Enter Total Marks" name="termname" value="<?=$r->cterm_name?>" autocomplete="off"  />
                </div>				
				<div class="form-group">
                  <label for="totalmarks">Total Marks</label>
                  <input type="text" class="form-control" id="totalmarks" placeholder="Enter Total Marks" name="totalmarks" value="<?=$r->cterm_totalmarks?>" autocomplete="off"  />
                </div>				
				<div class="form-group">
                  <label for="passmarks">Pass Marks</label>
                  <input type="text" class="form-control" id="passmarks" placeholder="Enter Pass Marks" name="passmarks" value="<?=$r->cterm_passmarks?>" autocomplete="off"  />
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

      <!-- Main row -->
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


