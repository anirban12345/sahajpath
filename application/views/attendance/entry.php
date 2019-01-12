  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Staff
        <!-- <small>Version 2.0</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i>Student</a></li>
        <li class="active">Add Student</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
		
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Attendance</h3>
			  
				  
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form role="form" action="<?php echo site_url('Attendance/saveAttendanceDtls');?>" method="post">
              <div class="box-body">
				
                
				<div class="form-group">
					<label>Select Staff</label>
						<select class="form-control select2" style="width: 100%;" id="staffid" name="staffid">		
							<?php foreach($user as $r){?>
							<option value="<?=$r->id?>"><?=$r->Firstname.' '.$r->Lastname?></option>                  
							<?php }?>
					    </select>
				</div>
				
				<div class="form-group is-empty">
                <label>Entry Date</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="edate" name="edate" placeholder="Enter Date Of Birth" autocomplete="off" required value=<?=date('d-M-Y')?> />
                </div>
                <!-- /.input group -->
				</div>
				
				<?php echo date('h:i A',time()); ?>
				
				<!-- time Picker -->
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Entry Time</label>

                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
					<input type="text" class="form-control timepicker" value=<?php echo date('h:i A',time()); ?> />
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
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


