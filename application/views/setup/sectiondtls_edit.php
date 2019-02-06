

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
        <li class="active">Class Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
		
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Class Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->	
			<?php foreach($classsection as $r) {?>	
            <form role="form" action="<?php echo site_url('Setup/updateSectionDtls/'.$r->csec_id);?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="classname">Class</label>				  
				  <input type="hidden" id="classname" name="classname" value="<?=$r->class_id?>" autocomplete="off" readonly />
                  <input type="text" class="form-control" id="" placeholder="Enter Class Name" value="<?=$r->class_name?>" autocomplete="off" readonly />
                </div>								
				<div class="form-group">
                  <label for="sectioname">Section</label>
				<input type="text" class="form-control" id="sectioname" placeholder="Enter Section Name" name="sectioname" value="<?=$r->csec_name?>" autocomplete="off"  />
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


