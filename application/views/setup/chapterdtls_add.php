

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
        <li class="active">Subject Details</li>
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
	
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
		
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Chapters of Class: <?=$class[0]->class_name?> Subject: <?=$subject[0]->csub_name?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->	
			
            <!--<form role="form" action="<?php echo site_url('Setup/saveChapterDtls');?>" method="post"> -->
			
			<?php echo form_open_multipart('Student/saveChapterDtls/'.$class[0]->class_id.'/'.$subject[0]->csub_id);?> 
			
              <div class="box-body">			    			    
                <div class="form-group">
                  <label for="chaptername">Chapter Name</label>
                  <input type="text" class="form-control" id="chaptername" placeholder="Enter Chapter Name" name="chaptername">
                </div>					
				
				<div class="form-group addfile">
						<label for="pdfscan">Add File Pdf</label>
						<input type="file" id="pdfscan" name="pdfscan">
						<p class="help-block">Please Attach Your File</p>
				</div>
				
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

	  <div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12">
		
			<div class="box">
				<div class="box-header">
				  <h3 class="box-title">Subject And Chapter List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  
				  <table id="example1" class="table table-bordered table-striped">			  
					<thead>
					<tr>
					  <th>Sl No.</th>
					  <th>Chapter name</th>					  
					  <th>Date</th>
					  <th>Time</th>
					  <th>Status</th>
					  <th>Action</th>					  
					</tr>
					</thead>
					<tbody>
					
					<?php $i=1; foreach($chapter as $r) { ?>
					<tr>
					  <td><?=$i++?></td>
					  <td><?=$r->chap_name?></td>					  
					  <td><?=date("d-M-Y",strtotime($r->chap_date))?></td>
					  <td><?=$r->chap_time?></td>
					  <?php if($r->chap_flag==1){ ?>
					  <td><span class="label label-success">Active</span></td>
					  <?php }else {?>
					  <td><span class="label label-danger">Deactive</span></td>
					  <?php }?>
					  <td>
					  <?php if($r->chap_flag==1){ ?>
					  <a href="<?php echo site_url('Administration/activateChapter/'.$r->chap_id); ?>" roll="button" class="btn btn-warning btn-xs"><i class="fa fa-ban" aria-hidden="true"></i></a>				  					  
					  <?php }else {?>
					  <a href="<?php echo site_url('Administration/activateChapter/'.$r->chap_id); ?>" roll="button" class="btn btn-success btn-xs"><i class="fa fa-check" aria-hidden="true"></i></a>
					  <?php }?>
					  <a href="<?php echo site_url('Administration/editChapter/'.$r->chap_id); ?>" roll="button" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
					  </td>
					</tr>
					<?php } ?>
					</tbody>
				  </table>	
				  
				  
				</div>	
			</div>	
        </div> 
	   </div> 
      <!-- Main row -->
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

