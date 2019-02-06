

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
        <li class="active">Assign Teacher To Class</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
		
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Assign Teacher To Class</strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form role="form" action="<?php echo site_url('Teacher/saveTeachertoClass');?>" method="post">
			
              <div class="box-body">
				<table id="example2" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Academic Year</th><td><?=$this->session->userdata('classsession');?></td>
							<th>Class</th><td><?=$classsection[0]->class_name?></td>
							<th>Section</th><td><?=$classsection[0]->csec_name?></td>
						</tr> 
					</thead>						
				</table>
				<div style="border:1px solid #ccc;margin:10px 0;"></div>
				<table id="example2" class="table table-bordered table-striped">			  
					<thead>
					<tr>
					  <th>Sl No.</th>					  
					  <th>Subject</th>
					  <th>Teacher</th>					  
					</tr>
					</thead>
					<tbody>
					<?php $i=1; foreach($classsubject as $r1){ ?>
					<tr>
					  <td><?=$i++?></td>
					  <input type="hidden" name="subject[]" id="subject" value="<?=$r1->csub_id?>"/> 	
					  <td><?=$r1->csub_name?></td>					  					  
					  <td>
					  <div class="form-group" style="margin-top:0;width:100%;">
					  <select class="form-control select2" style="width: 100%;" id="teacher" name="teacher[]">
							<option value="Select">Select</option>
							<?php foreach($teacher as $r2){ ?>
								<option value="<?=$r2->id?>"><?=$r2->Firstname.' '.$r2->Lastname?></option>
							<?php } ?>
					  </select>
					  </div>	
					  </td>
					  
					</tr>
					
					<?php } ?>					
					</tbody>
				</table>
				
				
				
				
              </div>
			  
			  <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
              </div>
			 </form> 
              <!-- /.box-body -->
            
			
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


