

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
	
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
		
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Fees</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->	
			
            <form role="form" action="<?php echo site_url('Setup/saveFeesDtls');?>" method="post">
              <div class="box-body">
				<div class="form-group">
					<label>Select Class</label>
						<select class="form-control select2" style="width: 100%;" id="classname2" name="classname">		
							<option value="Select">Select</option>                  
							<?php foreach($class as $r){?>
							<option value="<?=$r->class_id?>"><?=$r->class_name?></option>                  
							<?php }?>
					    </select>
				</div>
                <div class="form-group">				
                  <label for="fhead">Fees Head</label>
                  <input type="text" class="form-control" id="fhead" placeholder="Enter Fees Head" name="fhead" autocomplete="off"  />
                </div>								
				<div class="form-group">
                  <label for="frs">Fees ( <i class="fa fa-inr"></i> )</label>
                  <input type="text" class="form-control" id="frs" placeholder="Enter Fees" name="frs" autocomplete="off"  />
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
				  <h3 class="box-title">Class and Fees List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <div id="fees">
				  
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


