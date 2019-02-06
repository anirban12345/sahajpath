

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
				  <h3 class="box-title">Marks List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="example1" class="table table-bordered table-striped">			  
					<thead>
					<tr>
					  <th>Sl No.</th>
					  <th>Class</th>					  
					  <th>Section</th>					  					  
					  <th>Subject</th>
					  <th>Term</th>
					  <th>Exam Date</th>
					  <th>Description</th>					  
					  <th>Action</th>					  
					</tr>
					</thead>
					<tbody>
					
					<?php $i=1; foreach($sturec as $r) { ?>
					<tr>
					  <td><?=$i++?></td>
					  <td><?=$r->class_name?></td>
					  <td><?=$r->csec_name?></td>	
					  <td><?=$r->csub_name?></td>						  
					  <td><?=$r->cterm_name?></td>						  
					  <td><?=date('d-M-Y',strtotime($r->e_date))?></td>
					  <td><?=$r->e_desc?></td>
					  <td>
					  <a href="<?php echo site_url('Exam/createMarksEntry/'.$r->e_id); ?>" roll="button" class="btn btn-primary btn-sm">Entry Report</a>					  					  
					  </td>
					</tr>
					<?php } ?>
					</tbody>
				  </table>	
				</div>	
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


