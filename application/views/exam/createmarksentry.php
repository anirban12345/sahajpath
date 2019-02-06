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
	  
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
		
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Marks Details</h3>
			  
				  
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form role="form" action="<?php echo site_url('Exam/saveMarksDtls');?>" method="post">
              <div class="box-body">
			  
				<table id="example2" class="table table-bordered table-striped">			  
					<thead>
					<tr>					  
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
					
				
				<table id="example2" class="table table-bordered table-striped">			  
					<thead>
					<tr>
					  <th>Sl No.</th>
					  <th>Reg No.</th>
					  <th>Name</th>					  
					  <th>Marks</th>					  					  				  
					</tr>
					</thead>
					<tbody>
				
				<?php $i=0; foreach($sturec as $r){?>
					
					<tr>
					  <td><?=++$i?></td>
					  <input type="hidden" value="<?=$r->reg_no?>" name="regno[]" id="regno[]" />
					  <td><?=$r->reg_no?></td>
					  <td><?=$r->stuname?></td>	
					  <td>
						<div class="form-group" style="margin:0;padding:0;width:100%;">
						<input type="text" class="form-control" id="marks[]" placeholder="Enter Marks" name="marks[]" autocomplete="off" required />
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


