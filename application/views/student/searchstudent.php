

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
        <li class="active">Student Search</li>
		
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
				<div class="box-header">
				  <h3 class="box-title">Student Search</h3>
				  
				  <div class="pull-right"><a href="<?php echo site_url('Student/addStudent'); ?>" roll="button" class="btn btn-info btn-lg">Add New Student</a></div>
				  
				</div>
				
				<!-- /.box-header -->
				<div class="box-body">

				  <div class="input-group margin">
					<input type="text" class="form-control" id="regno" placeholder="Enter Registration No" name="regno" autocomplete="off" required />
						<span class="input-group-btn">
						  <button type="button" class="btn btn-primary"  id="searchstudentbyregno">Search</button>
						</span>
				  </div>
				  
				  <div class="input-group margin">
					<input type="text" class="form-control" id="stuname" placeholder="Enter Student Name" name="stuname" autocomplete="off" required />
						<span class="input-group-btn">
						  <button type="button" class="btn btn-primary" id="searchstudent">Search</button>
						</span>
				  </div>
				  
				  <br/><br/>
				  
					
						<div id="rectable">
						
						</div>
				    </tbody>
					</table>
				</div>	
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


