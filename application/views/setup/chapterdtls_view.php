

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chapter
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
        <div class="col-md-12 col-sm-12 col-xs-12">
		
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->	
			
			<div class="box-body">			    			                   
				<?php foreach($chapter as $r) { ?>
					<object style="width:100%;min-height:600px;" type="application/pdf" id="pdf_content" data="<?php echo base_url().'uploads/lesson/'.$r->chap_filename; ?>#toolbar=0" ></object>
				<?php } ?>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                
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


