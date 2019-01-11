

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
			<?php foreach($allrec as $r) {?>	
            <form role="form" action="<?php echo site_url('Setup/updateClassDtls/'.$r->class_id);?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="firstname">Name</label>
                  <input type="text" class="form-control" id="firstname" placeholder="Enter Class Name" name="schoolname" value="<?=$r->name?>" autocomplete="off"  />
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


