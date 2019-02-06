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
        <li class="active">Add Fee</li>
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
              <h3 class="box-title">Add Fee</h3>
			  
				  
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form role="form" action="<?php echo site_url('Fees/saveFeesDtls');?>" method="post">
              <div class="box-body">
			  
				<div class="form-group">
					<label>Select Class</label>
						<select class="form-control select2" style="width: 100%;" id="classid" name="classid">		
							<?php foreach($class as $r){?>
							<option value="<?=$r->class_id?>"><?=$r->name?></option>                  
							<?php }?>
					    </select>
				</div>
				
				<?php $i=0; foreach($fees as $r){?>
				<div class="form-group">
                  <div class="checkbox">
                    <label>
                       <input type="checkbox" name="fees[]" value="<?=$r->f_id?>" />
                        <?=$r->f_head.' ( <i class="fa fa-inr"></i> '.$r->f_rs.' )'?>
                    </label>
                  </div>
                </div>
				<?php }?>
				
				
				
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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


