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
        <li class="active">Promote To Class</li>
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
              <h3 class="box-title">Promote To Class</h3>
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
				
				<table id="example1" class="table table-bordered table-striped">			  
					<thead>
					<tr>
					  <th>Sl No.</th>
					  <th>Reg No.</th>
					  <th>Name</th>	
					  <th>Total Marks Obtained</th>	
					  <th>Action</th>					  					  				  
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
								   <input type="checkbox" name="promote[]" class="promote" value="" />								
								</label>
							  </div>
							</div>
						  </td>	
						</tr>
						
					<?php }?>
					
					</tbody>
				</table>
				
				<div class="form-group">
					 <div class="checkbox" >
						<label> 
						   <input type="checkbox" name="selectall" id="selectall" value="" />
							Select All								   
						</label>
					 </div>
				</div>
				
				<div style="border:1px solid #ccc;margin:10px 0;"></div>
				
				<div class="form-group">
					<label>Select Academic Year</label>
						<select class="form-control select2" style="width: 100%;" id="session" name="session">								
								<option value="2017" <?php if(date('Y')=="2017"){ echo "selected"; } ?>>2017</option>                  
								<option value="2018" <?php if(date('Y')=="2018"){ echo "selected"; } ?>>2018</option>                  
								<option value="2019" <?php if(date('Y')=="2019"){ echo "selected"; } ?>>2019</option>                  
								<option value="2020" <?php if(date('Y')=="2020"){ echo "selected"; } ?>>2020</option>                  
								<option value="2021" <?php if(date('Y')=="2021"){ echo "selected"; } ?>>2021</option>                  
					    </select>
				</div>
				
				<div class="form-group">
					<label>Select Class</label>
						<select class="form-control select2" style="width: 100%;" id="classid" name="classid">		
							<?php foreach($class as $r){?>
							<option value="<?=$r->cs_id?>"><?=$r->cs_category?></option>                  
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


