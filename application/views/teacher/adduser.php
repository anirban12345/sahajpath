

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Teacher
        <!-- <small>Version 2.0</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Teacher</a></li>
        <li class="active">Add Teacher</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
		
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Teacher</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('Teacher/saveTeacherDtls');?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="firstname">First Name</label>
                  <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname" autocomplete="off" />
                </div>
				<div class="form-group">
                  <label for="lastname">Last Name</label>
                  <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname" autocomplete="off" />
                </div>
				<div class="form-group">
                  <label for="phoneno">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" autocomplete="off" />
                </div>
				<div class="form-group">
                  <label for="phoneno">Phone No</label>
                  <input type="text" class="form-control" id="phoneno" placeholder="Enter Phone" name="phoneno" autocomplete="off" />
                </div>
				<div class="form-group">
                  <label for="username">User Name</label>
                  <input type="text" class="form-control" id="username" placeholder="Enter User Name" name="username" autocomplete="off" />
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" autocomplete="off" />
                </div>
				<div class="form-group">
                  <label for="cnfpassword">Confirm Password</label>
                  <input type="password" class="form-control" id="cnfpassword" placeholder="Enter Confirm Password" name="cnfpassword" autocomplete="off" />
                </div>
                <div class="form-group">
                <label>Select Type</label>
                <select class="form-control select2" style="width: 100%;" id="level" name="level">
				  <?php foreach($alltype as $r){ ?>
                  <option value="<?=$r->Id?>"><?=$r->Title?></option>
                  <?php } ?>
                </select>
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


