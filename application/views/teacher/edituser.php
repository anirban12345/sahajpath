

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
        <li class="active">Edit Teacher</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
		
		<?php foreach($rec as $r){?>
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Teacher</h3>
			  
			  <div class="pull-right"><a href="<?php echo site_url('Teacher/addTeacherDocs/'.$r->id); ?>" roll="button" class="btn btn-info btn-lg">Upload Docs</a></div>			  
			  <div class="pull-right"><a href="<?php echo site_url('Teacher/addTeacherPhoto/'.$r->id); ?>" roll="button" class="btn btn-info btn-lg">Upload Photo</a></div>
			  
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form role="form" action="<?php echo site_url('Teacher/updateTeacher/'.$r->id);?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="firstname">First Name</label>
                  <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname" value="<?=$r->Firstname?>">
                </div>
				<div class="form-group">
                  <label for="lastname">Last Name</label>
                  <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname" value="<?=$r->Lastname?>">
                </div>
				<div class="form-group">
                  <label for="phoneno">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="<?=$r->Address?>">
                </div>
				<div class="form-group">
                  <label for="phoneno">Phone No</label>
                  <input type="text" class="form-control" id="phoneno" placeholder="Enter Phone" name="phoneno" value="<?=$r->Phoneno?>">
                </div>
				<div class="form-group">
                  <label for="username">User Name</label>
                  <input type="text" class="form-control" id="username" placeholder="Enter User Name" name="username" value="<?=$r->Username?>">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
                </div>
				<div class="form-group">
                  <label for="cnfpassword">Confirm Password</label>
                  <input type="password" class="form-control" id="cnfpassword" placeholder="Enter Confirm Password" name="cnfpassword">
                </div>
                <div class="form-group">
                <label>Select Type</label>
                <select class="form-control select2" style="width: 100%;" id="level" name="level">
				  <?php foreach($alltype as $r1){ ?>		
						<?php if($r->Title==$r1->Title){ ?>           
							<option value="<?=$r1->Id?>" selected><?=$r1->Title?></option>				  
						<?php }else{ ?>
							<option value="<?=$r1->Id?>"><?=$r1->Title?></option>				  
						<?php } ?>
				  <?php } ?>						
                </select>
              </div>
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


