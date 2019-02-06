

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Fee
        <!-- <small>Version 2.0</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-inr"></i>Fee</a></li>
        <li class="active">Fees Details</li>
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
				  <h3 class="box-title">Fees List</h3>
				</div>
				<!-- /.box-header -->
				<form role="form" action="<?php echo site_url('Fees/saveStudentFees');?>" method="post">
				<div class="box-body">
				
				  <table id="example2" class="table table-bordered table-striped">			  
					<thead>
					<tr>
					  <th>Academic year</th>					  
					  
					  <th>Class</th>	
					  <th>Student Registration No</th>					  
					  <th>Student Name</th>			  
					</tr>
					</thead>
					<tbody>
					<?php foreach($studentclasssection as $r) { ?>
					
					  <input type="hidden" value="<?=$r->scm_session?>" name="session" id="session" />
					  <input type="hidden" value="<?=$r->class_id?>" name="classid" id="classid" />
					  <input type="hidden" value="<?=$r->reg_no?>" name="regno" id="regno" />
					  
					<tr>	
					  <td><?=$r->scm_session?></td>
					  
					  <td><?=$r->class_name?></td>					  					  			  
					  <td class="text-primary"><strong><?=$r->reg_no?></strong></td>
					  
					  <td class="text-primary"><strong><?=$r->stuname?></strong></td>
					</tr>
					<?php } ?>
				  </table>
				 
				  <table id="example2" class="table table-bordered table-striped">
				    <thead>
						<tr>
							<th>Sl No.</th>
							<th>Check</th>
							<th>Fees Head</th>					  
							<th>Fees</th>
						</tr>
				    </thead>
					<tbody>
						<?php $x=1;$tot=0; foreach($studentclassfees as $r) { $tot+=$r->cfees_fees; ?>												
								<tr>								
								    <td><?=$x++?></td>
									<td>
										<div class="checkbox" style="margin:0;">
										  <label>
											<input type="checkbox" id="checkfee" name="checkfee[]" rel="<?=$r->cfees_fees?>" value="<?=$r->cfees_id?>"><span class="checkbox-material">
										  </label>
										</div>
									</td>									
									<td><?=$r->cfees_name?></td>					  					  			  
									<td><?=$r->cfees_fees.'.00'?></td>					  
								</tr>							
						<?php } ?>						
						<tr>								
								<th colspan=3>Total Fees</td>					  					  			  
								<td align="right"><div class="form-group" style="margin:0;"><input type="text" id="total" name="total" class="form-control" placeholder="Total" readonly /></div></td>			
						</tr>
						<tr>								
							    <th colspan=3>Total Fees Inwords</td>					  					  			  
								<td align="right"><div class="form-group" style="margin:0;"><input type="text" name="totalword" id="totalword" class="form-control" placeholder="Total" readonly /></div></td>			
						</tr>
					</tbody>
				  </table>
				  
				<?php $month=array('January','February','March','April','May','June','July','August','Sepectember','October','November','December');?>				
					<div class="form-group">
						<label>For The Month Of</label>
						<select class="form-control select2" style="width: 100%;" id="month" name="month">								
								<?php for($i=0;$i<count($month);$i++) {?>
								<option value="<?=$month[$i]?>"><?=$month[$i]?></option>                  
								<?php }?>
					    </select>
					</div>
					
				</div>
			  <div class="box-footer">
                <button type="submit" class="btn btn-primary">Pay Fees</button>
              </div>
			</form>			  
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


