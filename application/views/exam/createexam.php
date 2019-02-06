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
              <h3 class="box-title">Add Exam</h3>
			  
				  
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form role="form" action="<?php echo site_url('Exam/saveCreateExam');?>" method="post">
              <div class="box-body">
			  
				<div class="form-group">
						<label>Select Academic Year</label>
						<select class="form-control select2" style="width: 100%;" id="session" name="session">								
								<option value="2017" <?php if(date('Y')=="2017"){ echo "selected"; } ?>>2017</option>                  
								<option value="2018" <?php if(date('Y')=="2018"){ echo "selected"; } ?>>2018</option>                  
								<option value="2019" <?php if(date('Y')=="2019"){ echo "selected"; } ?>>2019</option>                  
								<option value="2020" <?php if(date('Y')=="2020"){ echo "selected"; } ?>>2020</option>                  
								<option value="2021" <?php if(date('Y')=="2021"){ echo "selected"; } ?>>2021</option>                  
					    </select>
				</div>
				
				<div class="form-group">
					<label>Select Class</label>
						<select class="form-control select2" style="width: 100%;" id="classname" name="classname">	
							<option value="Select">Select</option> 							
							<?php foreach($class as $r){?>
							<option value="<?=$r->cs_id?>"><?=$r->cs_category?></option>                  
							<?php }?>
					    </select>
				</div>
				
				<div class="form-group">
					<label>Select Section</label>
					<select class="form-control select2" style="width: 100%;" id="section" name="section">
							
					</select>
				</div> 	
				
				<div class="form-group">
					<label>Select Subject</label>
					<select class="form-control select2" style="width: 100%;" id="subject" name="subject">
							
					</select>
				</div> 	
				
				<div class="form-group">
					<label>Select Exam</label>
					<select class="form-control select2" style="width: 100%;" id="term" name="term">
							
					</select>
				</div> 
				
				<div class="form-group is-empty">
                <label>Exam Date</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="edate" name="edate" placeholder="Enter Date Of Birth" autocomplete="off" required value=<?=date('d-M-Y')?> />
                </div>
                <!-- /.input group -->
				</div>
				
				<div class="form-group">
                  <label for="desc">Exam Description</label>
                  <input type="text" class="form-control" id="desc" placeholder="Enter Exam Description" name="desc" autocomplete="off" required />
                </div>
				
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


