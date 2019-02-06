

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
              <h3 class="box-title">Add Student</h3>
			  
				  
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form role="form" action="<?php echo site_url('Student/saveStudentDtls');?>" method="post">
              <div class="box-body">
				
                <div class="form-group">
                  <label for="firstname">First Name</label>
                  <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname" autocomplete="off" required />
                </div>
				
				<div class="form-group">
                  <label for="middlename">Middle Name</label>
                  <input type="text" class="form-control" id="middlename" placeholder="Enter Middle Name" name="middlename" autocomplete="off" />
                </div>
				
				<div class="form-group">
                  <label for="lastname">Last Name</label>
                  <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname" autocomplete="off" required />
                </div>
				
				<div class="form-group">
                  <label for="fathersname">Father's Name</label>
                  <input type="text" class="form-control" id="fathersname" placeholder="Enter Father's Name" name="fathersname" autocomplete="off" required />
                </div>
				
				<div class="form-group">
                  <label for="mothersname">Mother's Name</label>
                  <input type="text" class="form-control" id="mothersname" placeholder="Enter Mother's Name" name="mothersname" autocomplete="off" required />
                </div>
				
				<div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" autocomplete="off" required />
                </div>
				
				<div class="form-group">
					<label>Select State</label>
					<select class="form-control select2" style="width: 100%;" id="state" name="state">				  
					  <option value="West Bengal">West Bengal</option>                  
					</select>
				</div>
				
				<div class="form-group">
					<label>Select District</label>
						<select class="form-control select2" style="width: 100%;" id="district" name="district">				  
							<option value="Bardhaman">Bardhaman</option>
							<option value="Birbhum">Birbhum</option>
							<option value="Bankura">Bankura</option>							
							<option value="Purba Medinipur">Purba Medinipur</option>
							<option value="Paschim Medinipur">Paschim Medinipur</option>
							<option value="Howrah">Howrah</option>
							<option value="Hooghly">Hooghly</option>
							<option value="Uttar 24 Parganas">Uttar 24 Parganas</option>
							<option value="Dakshin 24 Parganas">Dakshin 24 Parganas</option>
							<option value="Kolkata">Kolkata</option>
							<option value="Nadia">Nadia</option>
							<option value="Murshidabad">Murshidabad</option>
							<option value="Uttar Dinajpur">Uttar Dinajpur</option>
							<option value="Dakshin Dinajpur">Dakshin Dinajpur</option>
							<option value="Malda">Malda</option>
							<option value="Jalpaiguri">Jalpaiguri</option>
							<option value="Darjeeling">Darjeeling</option>
							<option value="Cooch Behar">Cooch Behar</option>
							<option value="Purulia">Purulia</option>
					</select>
				</div>
				
				<div class="form-group">
                  <label for="pincode">Pincode</label>
                  <input type="text" class="form-control" id="pincode" placeholder="Enter Pincode" name="pincode" autocomplete="off"  required />
                </div>
				
				<div class="form-group is-empty">
                <label>Date Of Birth</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="dob" name="dob" placeholder="Enter Date Of Birth" autocomplete="off" required />
                </div>
                <!-- /.input group -->
				</div>
				
				<div class="form-group">
					<label>Select Gender</label>
					<select class="form-control select2" style="width: 100%;" id="gender" name="gender">				  
					  <option value="Male">Male</option>                  
					  <option value="Female">Female</option>                  
					</select>
				</div>
				
				<div class="form-group">
					<label>Select Nationality</label>
						<select class="form-control select2" style="width: 100%;" id="nationality" name="nationality">							
							<option value="Indian">Indian</option>                  
					</select>
				</div>
				
				<div class="form-group">
					<label>Select Religion</label>
						<select class="form-control select2" style="width: 100%;" id="religion" name="religion">		
							<?php foreach($religion as $r){?>
							<option value="<?=$r->religion_id?>"><?=$r->rname?></option>                  
							<?php }?>
					    </select>
				</div>
				
				<div class="form-group">
					<label>Select Caste</label>
						<select class="form-control select2" style="width: 100%;" id="caste" name="caste">				  
							<?php foreach($caste as $r){?>
							<option value="<?=$r->caste_id?>"><?=$r->cname?></option> 							
							<?php }?>
					    </select>
				</div>
				
				<div class="form-group">
					<label>Is Physically Challeged</label>
						<select class="form-control select2" style="width: 100%;" id="physicallychalleged" name="physicallychalleged">				  
							<option value="Yes">Yes</option>                  
							<option value="No" selected>No</option>                  
					</select>
				</div>
				
				<div class="form-group">
                  <label for="phoneno">Contact No</label>
                  <input type="text" class="form-control" id="phoneno" placeholder="Enter Contact No" name="phoneno" autocomplete="off" required />
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


