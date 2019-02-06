

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
        <li class="active">Edit Student</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
		
		   <?php foreach($allrec as $r) {?>
			<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Student</h3>			  
			  <div class="pull-right"><a href="<?php echo site_url('Student/addStudentDocs/'.$r->reg_no); ?>" roll="button" class="btn btn-info btn-lg">Upload Docs</a></div>
			  <div class="pull-right"><a href="<?php echo site_url('Student/addStudenttoClass/'.$r->reg_no); ?>" roll="button" class="btn btn-info btn-lg">Assign To Class</a></div>
			  <div class="pull-right"><a href="<?php echo site_url('Student/addStudentPhoto/'.$r->reg_no); ?>" roll="button" class="btn btn-info btn-lg">Upload Photo</a></div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form role="form" action="<?php echo site_url('Student/updateStudentDtls/'.$r->stu_id);?>" method="post">
              <div class="box-body">
				<div class="form-group">
                  <label for="registrationno">Registration No</label>
                  <input type="text" class="form-control" id="registrationno" placeholder="Enter Registration No" name="registrationno" autocomplete="off"  value="<?=$r->reg_no?>" readonly />
                </div>
				
                <div class="form-group">
                  <label for="sname">Name</label>
                <input type="text" class="form-control" id="sname" placeholder="Enter First Name" name="sname" autocomplete="off" value="<?=$r->stuname?>" />
                </div>
				
				<div class="form-group">
                  <label for="fathersname">Father's Name</label>
                  <input type="text" class="form-control" id="fathersname" placeholder="Enter Father's Name" name="fathersname" autocomplete="off" value="<?=$r->fathersname?>"/>
                </div>
				
				<div class="form-group">
                  <label for="mothersname">Mother's Name</label>
                  <input type="text" class="form-control" id="mothersname" placeholder="Enter Mother's Name" name="mothersname" autocomplete="off" value="<?=$r->mothersname?>"/>
                </div>
				
				<div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" autocomplete="off" value="<?=$r->address?>" />
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
							<option value="Bardhaman" <?php if($r->district=="Bardhaman"){echo "Selected";}?>>Bardhaman</option>
							<option value="Birbhum" <?php if($r->district=="Birbhum"){echo "Selected";}?>>Birbhum</option>
							<option value="Bankura" <?php if($r->district=="Bankura"){echo "Selected";}?>>Bankura</option>							
							<option value="Purba Medinipur" <?php if($r->district=="Purba Medinipur"){echo "Selected";}?>>Purba Medinipur</option>
							<option value="Paschim Medinipur" <?php if($r->district=="Paschim Medinipur"){echo "Selected";}?>>Paschim Medinipur</option>
							<option value="Howrah" <?php if($r->district=="Howrah"){echo "Selected";}?>>Howrah</option>
							<option value="Hooghly" <?php if($r->district=="Hooghly"){echo "Selected";}?>>Hooghly</option>
							<option value="Uttar 24 Parganas" <?php if($r->district=="Uttar 24 Parganas"){echo "Selected";}?>>Uttar 24 Parganas</option>
							<option value="Dakshin 24 Parganas" <?php if($r->district=="Dakshin 24 Parganas"){echo "Selected";}?>>Dakshin 24 Parganas</option>
							<option value="Kolkata" <?php if($r->district=="Kolkata"){echo "Selected";}?>>Kolkata</option>
							<option value="Nadia" <?php if($r->district=="Nadia"){echo "Selected";}?>>Nadia</option>
							<option value="Murshidabad" <?php if($r->district=="Murshidabad"){echo "Selected";}?>>Murshidabad</option>
							<option value="Uttar Dinajpur" <?php if($r->district=="Uttar Dinajpur"){echo "Selected";}?>>Uttar Dinajpur</option>
							<option value="Dakshin Dinajpur" <?php if($r->district=="Dakshin Dinajpur"){echo "Selected";}?>>Dakshin Dinajpur</option>
							<option value="Malda" <?php if($r->district=="Malda"){echo "Selected";}?>>Malda</option>
							<option value="Jalpaiguri" <?php if($r->district=="Jalpaiguri"){echo "Selected";}?>>Jalpaiguri</option>
							<option value="Darjeeling" <?php if($r->district=="Darjeeling"){echo "Selected";}?>>Darjeeling</option>
							<option value="Cooch Behar" <?php if($r->district=="Cooch Behar"){echo "Selected";}?>>Cooch Behar</option>
							<option value="Purulia" <?php if($r->district=="Purulia"){echo "Selected";}?>>Purulia</option>
					</select>
				</div>
				
				<div class="form-group">
                  <label for="pincode">Pincode</label>
                  <input type="text" class="form-control" id="pincode" placeholder="Enter Pincode" name="pincode" autocomplete="off"  value="<?=$r->pincode?>" />
                </div>
				
				<div class="form-group is-empty">
                <label>Date Of Birth</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="dob" name="dob" placeholder="Enter Date Of Birth" autocomplete="off"  value="<?=date("d-M-Y",strtotime($r->dob))?>" />
                </div>
                <!-- /.input group -->
				</div>
				
				<div class="form-group">
					<label>Gender</label>
					<select class="form-control select2" style="width: 100%;" id="gender" name="gender">							
							<option value="Male" <?php if($r->gender=="Male"){echo "Selected";}?>>Male</option>                  
							<option value="Female" <?php if($r->gender=="Female"){echo "Selected";}?>>Female</option>                  
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
							<?php foreach($religion as $r1){?>
								<?php if($r->religion==$r1->religion_id){ ?>
									<option value="<?=$r1->religion_id?>" selected><?=$r1->rname?></option>                  
								<?php }else{ ?>
									<option value="<?=$r1->religion_id?>"><?=$r1->rname?></option>
								<?php } ?>
							<?php }?>
					    </select>
				</div>
				
				<div class="form-group">
					<label>Select Caste</label>
						<select class="form-control select2" style="width: 100%;" id="caste" name="caste">				  
							<?php foreach($caste as $r1){?>
								<?php if($r->caste==$r1->caste_id){ ?>
									<option value="<?=$r1->caste_id?>" selected><?=$r1->cname?></option>
								<?php }else{ ?>	
									<option value="<?=$r1->caste_id?>"><?=$r1->cname?></option>
								<?php } ?>								
							<?php }?>
					    </select>
				</div>
				
				<div class="form-group">
					<label>Is Physically Challeged</label>
						<select class="form-control select2" style="width: 100%;" id="physicallychalleged" name="physicallychalleged">							
							<option value="Yes" <?php if($r->physicallychalleged=="Yes"){echo "Selected";}?>>Yes</option>                  
							<option value="No" <?php if($r->physicallychalleged=="No"){echo "Selected";}?>>No</option>                  
						</select>
				</div>
				
				<div class="form-group">
                  <label for="phoneno">Contact No</label>
                  <input type="text" class="form-control" id="phoneno" placeholder="Enter Contact No" name="phoneno" autocomplete="off"  value="<?=$r->phoneno?>" />
                </div>
				
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
				<div class="pull-right"><a href="<?php echo site_url('Student/addStudentDocs/'.$r->reg_no); ?>" roll="button" class="btn btn-info btn-lg">Upload Docs</a></div>
			    <div class="pull-right"><a href="<?php echo site_url('Student/addStudenttoClass/'.$r->reg_no); ?>" roll="button" class="btn btn-info btn-lg">Assign To Class</a></div>
			    <div class="pull-right"><a href="<?php echo site_url('Student/addStudentPhoto/'.$r->reg_no); ?>" roll="button" class="btn btn-info btn-lg">Upload Photo</a></div>
              </div>
            </form>
			
          </div>
		 <?php } ?>		  
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


