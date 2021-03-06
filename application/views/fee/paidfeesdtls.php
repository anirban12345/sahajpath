

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
        <li class="active">Paid Fees Details</li>
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
				  <h3 class="box-title">Paid Fees List</h3>				
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="example1" class="table table-bordered table-striped">			  
					<thead>
					<tr>
					  <th>Sl No.</th>
					  <th>Reg No</th>
					  <th>Name</th>
					  <th>Bill No</th>
					  <th>Class</th>					  
					  <th>Month</th>					  
					  <th>Academic Year</th>
					  <th>Date</th>
					  <th>Time</th>
					  <th>Action</th>
					</tr>
					</thead>
					<tbody>
					
					<?php $i=1; foreach($studentpaidfees as $r) { ?>
					<tr>
					  <td><?=$i++?></td>
					  <td><?=$r->reg_no?></td>
					  <td><?=$r->stuname?></td>
					  <td><?=$r->sf_billno?></td>
					  <td><?=$r->class_name?></td>
					  <td><?=$r->sf_month?></td>
					  <td><?=$r->sf_year?></td>						  
					  <td><?=date("d-M-Y",strtotime($r->sf_date))?></td>						  
					  <td><?=$r->sf_time?></td>						  
					  <td>
					  <a href="<?php echo site_url('Fees/viewBill/'.$r->sf_billno); ?>" target="_blank" roll="button" class="btn btn-primary btn-sm">View Bill</a>
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


