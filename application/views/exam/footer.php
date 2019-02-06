    <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2018 <a href="http://www.technobrains.co.in">technobrains</a> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url().'assets/';?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Lightbox2 -->
<script src="<?php echo base_url().'assets/'; ?>/dist/js/lightbox-plus-jquery.min.js"></script> 

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url().'assets/';?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Material Design -->
<script src="<?php echo base_url().'assets/';?>dist/js/material.min.js"></script>
<script src="<?php echo base_url().'assets/';?>dist/js/ripples.min.js"></script>
<script>
    $.material.init();
</script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/'; ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url().'assets/'; ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/';?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/';?>dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url().'assets/';?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url().'assets/';?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url().'assets/';?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/';?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url().'assets/';?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url().'assets/';?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- ChartJS -->
<script src="<?php echo base_url().'assets/';?>bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url().'assets/';?>dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/';?>dist/js/demo.js"></script>



<!-- Select2 -->
<script src="<?php echo base_url().'assets/'; ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
	
  $(function () {
    $('#example1').DataTable();    
  });
  
  $('.select2').select2();
  
  //Date picker
  $('#edate').datepicker({
     autoclose: true,
	 format: 'dd-M-yyyy' 
  });
  
  	//Timepicker
    $('.timepicker').timepicker({
      showInputs: false	  
    })
	
	$("#selectall").click(function () {
            $(".promote").attr('checked', this.checked);
     });
	
</script>

<script>
$(document).ready(function(){
				
			//alert('a');
			
			var classid,stuname,regno,section,session;
				$('#classname').on('change',function(){
				
					classid = $(this).val();
					
					
					
					if(classid){
						$.ajax({
							type:'POST',
							url:'<?php echo base_url('Student/getSection'); ?>',
							data:{'classid':classid},
							success:function(data){
								//alert(data);
								$('#section').html('<option value="">Select</option>'+data);
							}
						}); 
						
						$.ajax({
						
							//alert('a');
							
							type:'POST',
							url:'<?php echo base_url('Exam/getTerm'); ?>',
							data:{'classid':classid},
							success:function(data){
								//alert('aa'+data);
								$('#term').html('<option value="">Select</option>'+data);
							}
						});
						
						$.ajax({
							type:'POST',
							url:'<?php echo base_url('Exam/getSubject'); ?>',
							data:{'classid':classid},
							success:function(data){
								//alert(data);
								$('#subject').html('<option value="">Select</option>'+data);
							}
						});
						
						
						
					}else{
						$('#section').html('<option value="">Select Input</option>');
							
					}
				});
				
				
				//alert('a');
				
				$('#searchstudent').click(function(){
					
					//alert('a');
					stuname = $('#stuname').val();
					
					//alert(sectionid);
					
					if(stuname){
						$.ajax({
							type:'POST',
							url:'<?php echo base_url('Student/searchStudent_by_name'); ?>',
							data:{'stuname':stuname},
							success:function(data){
							
								//alert(data);
								$('#rectable').html(data);
								
							}
						}); 
					}else{
						$('#rectable').html('Please Enter Input');
							
					}
				});

				$('#searchstudentbyregno').click(function(){
					
					//alert('a');
					regno = $('#regno').val();
					
					//alert(sectionid);
					
					if(regno){
						$.ajax({
							type:'POST',
							url:'<?php echo base_url('Student/searchStudent_by_regno'); ?>',
							data:{'regno':regno},
							success:function(data){
							
								//alert(data);
								$('#rectable').html(data);
								
							}  
						}); 
					}else{
						$('#rectable').html('Please Enter Input');
							
					}
				});
				
				//alert('a');				
				$('#section').on('change',function(){					
					//alert('a');
					classid = $('#classname').val();
					section = $('#section').val();
					session = $('#session').val();
					
					//alert(classid+'-'+section);
					
					if(classid){
						$.ajax({
							type:'POST',
							url:'<?php echo base_url('Exam/get_student_class_section_ajax'); ?>',
							data:{'class':classid,'section':section,'session':session},
							success:function(data){
							
								//alert(data);
								if(data=="1")
								{
									//alert(data);
									$('#submit').removeAttr("disabled");
								}
								else
								{
									//alert(data);
									$('#submit').attr("disabled", "disabled");
								}
							}  
						}); 
					}else{
						//$('#rectable').html('Please Enter Input');
					}
				});
				
	});
</script>

</body>
</html>
