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
        <li class="active">Class Report</li>
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
              <h3 class="box-title">Class Report</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form role="form" action="<?php echo site_url('Exam/savePromotion');?>" method="post">
              <div class="box-body">
			  
				<table id="example2" class="table table-bordered table-striped">			  
					<thead>
					<tr>
					  <th>Present Class</th>
					  <th>Present Section</th>					  
					</tr>
					</thead>
					<tbody>

						<tr>
						  <td><?=$sturec[0]->classname[0]->cs_category?></td>
						  <td><?=$sturec[0]->cs_category?></td>
						</tr> 

					</tbody>	
				</table>	
				
				<div style="border:1px solid #ccc;margin:10px 0;"></div>
				
				<table id="example2" class="table table-bordered table-striped">			  
					<thead>
					<tr>
					  <th>Sl No.</th>
					  <th>Reg No.</th>
					  <th>Name</th>	
					  <th>Marks Details</th>					  
					  <th>Action</th>					  					  				  
					</tr>
					</thead>
					<tbody>			
					
					<?php $i=0; foreach($sturec as $r){ $tot=0;$marksobtain=0;?>
					
						<tr>
						  <td><?=++$i?></td>						  
						  <td><?=$r->reg_no?></td>
						  <td><?=$r->stuname?></td>
							<td style="padding:0;">	
							<table id="example2" class="table table-bordered table-striped" style="margin:0;">
							<?php foreach($stuexam as $r1){  ?>
							  <?php if($r->reg_no==$r1->r_reg_no) { $tot+=$r1->totalmarks; $marksobtain+=$r1->r_marks;?>	
							  <tr>	
							  <td><?=$r1->termname.' - '.$r1->subname.' ( '.$r1->totalmarks.' ) '?></td>
							  <td><?=$r1->r_marks?></td>						  					  
							  </tr>
							  <?php } ?>
							<?php } ?> 
							<tr><td>Total ( <?=$tot?> ) </td><td><?=$marksobtain?></td></tr>
							</table>  
							</td>							
							<td><a href="<?php echo site_url('Exam/viewReportCard/'.$r->reg_no); ?>" roll="button" class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></a></td>					  					  
					    </tr>
					<?php }?>
					</tbody>
				</table>
				
              </div>
              <!-- /.box-body -->
			
              <div class="box-footer">
                
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


