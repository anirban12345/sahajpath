

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Teachers
        <!-- <small>Version 2.0</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i>Teachers</a></li>
        <li class="active">Assigned Teacher List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">	
			<?php if($this->session->userdata('successmsg')){?>
			  <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                <h4><i class="icon fa fa-check"></i>Success!</h4>
                <?php echo $this->session->userdata('successmsg'); ?>
              </div>
			<?php } ?> 
			<?php if($this->session->userdata('errmsg')){?>
			  <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                <h4><i class="icon fa fa-ban"></i>Error!</h4>
                <?php echo $this->session->userdata('errmsg'); ?>
              </div>
			<?php } ?>
			
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
		
			<div class="box">
				<div class="box-header">
				  <h3 class="box-title">Teacher List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="example1" class="table table-bordered table-striped">			  
					<thead>
					<tr>
					  <th>Sl No.</th>
					  <th>Academic Year</th>
					  <th>Class</th>
					  <th>Section</th>
					  <th>Subject</th>
					  <th>Teacher Name</th>					  
					  <th>Action</th>					  
					</tr>
					</thead>
					<tbody>
					
					<?php $i=1; foreach($allrec as $r) { ?>
					<tr>
					  <td><?=$i++?></td>
					  <td><?=$r->tcm_session?></td>
					  <td><?=$r->class_name?></td>
					  <td><?=$r->csec_name?></td>
					  <td><?=$r->csub_name?></td>
					  <td><?=$r->Firstname.' '.$r->Lastname?></td>
					  
					  <td>
					  <?php if($r->Uflag==1){ ?>
					  <a href="<?php echo site_url('Teacher/activateTeacher/'.$r->id); ?>" roll="button" class="btn btn-warning btn-xs"><i class="fa fa-ban" aria-hidden="true"></i></a>					  					  
					  <?php }else {?>
					  <a href="<?php echo site_url('Teacher/activateTeacher/'.$r->id); ?>" roll="button" class="btn btn-success btn-xs"><i class="fa fa-check" aria-hidden="true"></i></a>
					  <?php }?>
					  <a href="<?php echo site_url('Teacher/editTeacher/'.$r->id); ?>" roll="button" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
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
      <!-- /.row -->

      <!-- Main row -->
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


