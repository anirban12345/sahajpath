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
        <li class="active">Assign To Section</li>
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
              <h3 class="box-title">Assign To Section</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form role="form" action="<?php echo site_url('Exam/saveStudenttoSection');?>" method="post">
              <div class="box-body">
				
				<table id="example1" class="table table-bordered table-striped">			  
					<thead>
					<tr>
					  <th>Sl No.</th>
					  <th>Academic Year</th>
					  <th>Class</th>	
					  <th>Reg No.</th>
					  <th>Name</th>	
					  <th>Previous Year Marks</th>	
					  <th>Action</th>					  					  				  
					</tr>
					</thead>
					<tbody>			
					
						<?php $i=0; foreach($sturec as $r){?>
						
							<tr>
							  <td><?=++$i?></td>
							  <input type="hidden" value="<?=$r->reg_no?>" name="regno[]" id="regno[]" />
							  <td><?=$r->scm_session?></td>
							  <input type="hidden" value="<?=$r->scm_session?>" name="session" id="session" />
							  <td><?=$r->class_name?></td>							  
							  <input type="hidden" value="<?=$r->class_id?>" name="classname" id="classname" />
							  <td><?=$r->reg_no?></td>
							  <td><?=$r->stuname?></td>
								<td>
										<?php 
											$tot=0;	
											foreach($stumarks as $r1) {	
												if($r->reg_no==$r1->reg_no)	{  
														$tot+=$r1->r_marks;
												} } 
											echo $tot;		
										?>
								</td>						  
							  <td>
								<div class="form-group" style="margin:0;">
								  <div class="checkbox" style="margin:0;">
									<label>
									   <input type="checkbox" name="selsec[]" value="<?=$r->reg_no?>" />								
									</label>
								  </div>
								</div>
							  </td>	
							</tr>
							
						<?php }?>
					
					</tbody>
				</table>
				
				<div class="form-group">
					<label>Select Class</label>
						<select class="form-control select2" style="width: 100%;" id="section" name="section">		
							<option value="Select">Select</option>
							<?php foreach($section as $r){?>
							<option value="<?=$r->csec_id?>"><?=$r->csec_name?></option>                  
							<?php }?>
						</select>
				</div>
				
              </div>
              <!-- /.box-body -->
			
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Promote</button>
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


