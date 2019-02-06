  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Exam
        <!-- <small>Version 2.0</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-file"></i>Exam</a></li>
        <li class="active">Add Exam</li>
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
              <h3 class="box-title">Edit Exam</h3>
			  
				  
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
			<?php foreach($allrec as $r) {?>
            <form role="form" action="<?php echo site_url('Exam/updateExamDtls/'.$r->cet_id);?>" method="post">
              <div class="box-body">
			   
				<div class="form-group">
                  <label for="classname">Class Name</label>
				  <input type="hidden" id="classid" name="classid" autocomplete="off" value="<?=$r->class_id?>" />
                  <input type="text" class="form-control" id="classname" placeholder="Enter Class" name="classname" autocomplete="off" value="<?=$r->name?>" readonly />
                </div>
			  </div>
			  
			 <div class="box-body">
				<?php foreach($examterm as $r1) {?>
					<div class="form-group">
						<div class="checkbox">
							<label>						
								<input type="checkbox" name="examterm[]" value="<?=$r1->et_id?>" <?php if(strpos($r->cet_et_id,$r1->et_id) !== false) echo "checked='checked'";?> />
								<?=$r1->termname?>
							</label>
						</div>  
					</div>	
				<?php } ?>					
             </div>
             <!-- /.box-body -->
			 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
			<?php }?>
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


