

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setup
        <!-- <small>Version 2.0</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-wrench"></i>Setup</a></li>
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
				<div class="box-body">
				  <table id="example1" class="table table-bordered table-striped">			  
					<thead>
					<tr>
					  <th>Sl No.</th>
					  <th>Class Name</th>					  
					  <!--<th>Fees Head</th>					  
					  <th>Fees ( <i class="fa fa-inr"></i> )</th> -->					  
					  <th>Status</th>
					  <th>Action</th>					  					  
					</tr>
					</thead>
					<tbody>
					
					<?php $i=1; foreach($allrec as $r) { ?>
					<tr>
					  <td><?=$i++?></td>
					  <td><?=$r->name?></td>
					  <!--<td><?=$r->f_head?></td>	
					  <td><?=$r->f_rs?></td> -->
					  
					  <?php if($r->class_flag==1){ ?>
					  <td><span class="label label-success">Active</span></td>
					  <?php }else {?>
					  <td><span class="label label-danger">Deactive</span></td>
					  <?php }?>					  
					  
					  
					  <td>
					  <?php if($r->class_flag==1){ ?>
					  <a href="<?php echo site_url('Fees/activateFees/'.$r->class_id); ?>" roll="button" class="btn btn-warning btn-xs"><i class="fa fa-ban" aria-hidden="true"></i></a>					  					  
					  <?php }else {?>
					  <a href="<?php echo site_url('Fees/activateFees/'.$r->class_id); ?>" roll="button" class="btn btn-success btn-xs"><i class="fa fa-check" aria-hidden="true"></i></a>  
					  <?php }?>
					  <a href="<?php echo site_url('Fees/editFeesdtls/'.$r->class_id); ?>" roll="button" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
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


