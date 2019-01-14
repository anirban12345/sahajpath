

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
        <li class="active">Fees Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
		
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Fees</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->	
			<?php foreach($allrec as $r) {?>	
            <form role="form" action="<?php echo site_url('Setup/updateFeesDtls/'.$r->f_id);?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="fhead">Fees Head</label>
                  <input type="text" class="form-control" id="fhead" placeholder="Enter Fees Head" name="fhead" value="<?=$r->f_head?>" autocomplete="off"  />
                </div>	
				<div class="form-group">
                  <label for="frs">Fees ( <i class="fa fa-inr"></i> )</label>
                  <input type="text" class="form-control" id="frs" placeholder="Enter Fees" name="frs" value="<?=$r->f_rs?>" autocomplete="off"  />
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


