

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student
        <!-- <small>Version 2.0</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i>Student</a></li>
        <li class="active">Student List</li>
		
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
			<?php if($this->session->userdata('errmsg')){?>
			  <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                <?php echo $this->session->userdata('errmsg'); ?>
              </div>
			<?php } ?> 			

      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
			<div class="box">
			<div class="box-header with-border">
              <h3 class="box-title">Upload Docs of Student Registration No : <strong><?=$regno?></strong></h3>			  			  
            </div>
			 <?php echo form_open_multipart('Student/do_upload2/'.$regno.'/'.time());?>            
				<div class="box-body">					
					<div class="form-group">
					  <label for="description">File Name</label>
					  <input type="text" class="form-control" id="description" placeholder="Enter File Description" name="description" autocomplete="off" />
					</div>
					<div class="form-group addfile">
						<label for="Image_Scan">Add File Image</label>
						<input type="file" id="Imagescan" name="Image_Scan">
						<p class="help-block">Please Attach Your File</p>
					</div>
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Upload Document</button>
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


