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
        <li class="active">Marks Details</li>
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
	  
	  <form role="form" action="<?php echo site_url('Exam/updateMarksDtls/'.$allrec[0]->e_id);?>" method="post">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
		
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Marks Details</h3>
			  
				  
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            
              <div class="box-body">
			  
				<table id="example2" class="table table-bordered table-striped">			  
					<thead>
					<tr>
					  <th>Sl No.</th>
					  <th>Class</th>					  
					  <th>Section</th>					  					  
					  <th>Subject</th>
					  <th>Term</th>
					  <th>Marks</th>
					  <th>Exam Date</th>
					  <th>Description</th>					  
					</tr>
					</thead>
					<tbody>
					
					<?php $i=1; foreach($allrec as $r) { ?>
					<tr>
					  <input type="hidden" value="<?=$r->e_id?>" name="examid" id="examid" />
					  <td><?=$i++?></td>
					  <td><?=$r->class_name?></td>
					  <td><?=$r->csec_name?></td>	
					  <td><?=$r->csub_name?></td>						  
					  <td><?=$r->cterm_name?></td>						  
					  <td><?=$r->cterm_totalmarks?></td>
					  <td><?=date('d-M-Y',strtotime($r->e_date))?></td>
					  <td><?=$r->e_desc?></td>		
					</tr> 
					<?php }?>
					</tbody>				
				  </table>	
				</div>	
				
				<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">			  
					<thead>
					<tr>
					  <th>Roll No.</th>
					  <th>Reg No.</th>
					  <th>Name</th>					  
					  <th>Marks</th>
					  <th>Marks</th>
					</tr>
					</thead>
					<tbody>
				
				<?php foreach($sturec as $r){?>
					
					<tr>
					  <td><?=$r->scm_rollno?></td>
					  <input type="hidden" value="<?=$r->reg_no?>" name="regno[]" id="regno[]" />
					  <td><?=$r->reg_no?></td>
					  <td><?=$r->stuname?></td>	
					  <td>
						<?php foreach($examrec as $r1){?>	
							<?php if($r1->r_reg_no==$r->reg_no){?>
								<?=$r1->r_marks?>
						<?php } } ?>
					  </td>
					  <td>
						<div class="form-group" style="margin:0;padding:0;width:100%;">
						<?php foreach($examrec as $r1){?>						
						<input type="hidden" value="<?=$r1->report_id?>" name="reportid[]" id="reportid[]" />
						<?php if($r1->r_reg_no==$r->reg_no){?>
						<input type="text" class="form-control" id="marks[]" placeholder="Enter Marks" name="marks[]" autocomplete="off" required value="<?=$r1->r_marks?>" />
						<?php 
						} else { ?>
						<input type="text" class="form-control" id="marks[]" placeholder="Enter Marks" name="marks[]" autocomplete="off" required value="" />
						<?php } } ?>
						</div>
						</td>	
					  
					</tr>
					
				<?php }?>
					</tbody>
				</table>	
				
				
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            
          </div>	
        </div> 
      </div>
	  
      <!-- /.row -->
	  
      <!-- /.row -->
	  
	  </form>
      <!-- Main row -->      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


