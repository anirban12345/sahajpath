<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $setup[0]->name;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>plugins/timepicker/bootstrap-timepicker.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>bower_components/select2/dist/css/select2.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>dist/css/AdminLTE.min.css">
  <!-- Material Design -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>dist/css/bootstrap-material-design.min.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>dist/css/ripples.min.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>dist/css/MaterialAdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>dist/css/skins/all-md-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Lightbox2 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>/dist/css/lightbox.min.css">
  
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">	
  
  <style>
  
	body{
		
	}
	.skin-blue .main-header .logo
	{
		background:#fff;
		color:#2196f3;
	}
	.skin-blue .main-header .logo:hover
	{	
		background:#fff;
		color:#2196f3;
	}
	.btn
	{
	  margin:0;
	}	
	.content-wrapper,.wrapper
	{
		overflow:hidden;
	}
	
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><!-- <img src="<?php echo base_url().'assets/images/logo2.png'; ?>" width=50 /> --></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><h2><strong><center><?php echo $setup[0]->name;?><center></strong></h2><!-- <img src="<?php echo base_url().'assets/images/logo.png'; ?>" width=200 /> --></span>
    </a> 

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="<?php echo base_url(); ?>#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="<?php echo base_url(); ?>#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="<?php echo base_url(); ?>#">
                      <div class="pull-left">
                        <img src="<?php echo base_url().'assets/'; ?>dist/img/user-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <div class="pull-left">
                        <img src="<?php echo base_url().'assets/'; ?>dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <div class="pull-left">
                        <img src="<?php echo base_url().'assets/'; ?>dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo base_url(); ?>#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="<?php echo base_url(); ?>#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo base_url(); ?>#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="<?php echo base_url(); ?>#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="<?php echo base_url(); ?>#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="<?php echo base_url(); ?>#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="<?php echo base_url(); ?>#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="<?php echo base_url(); ?>#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="<?php echo base_url(); ?>#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="<?php echo base_url(); ?>#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url().'assets/'; ?>dist/img/user-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php foreach($rec as $r ){echo $r->Firstname.' '.$r->Lastname;} ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url().'assets/'; ?>dist/img/user-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php foreach($rec as $r ){echo $r->Title;} ?>
                  <small>Member since <?php foreach($rec as $r ){echo date("d-M-Y",strtotime($r->Udate));} ?></small>
                </p>
              </li>
              
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url(); ?>#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <!-- <a href="<?php echo base_url(); ?>#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> -->
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url().'assets/'; ?>dist/img/user-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php foreach($rec as $r ){echo $r->Firstname.' '.$r->Lastname;} ?> - <?php foreach($rec as $r ){echo $r->Title;} ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->      
      <!-- /.search form -->
	  
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
		
		<li>
          <a href="<?php echo site_url('Dashboard'); ?>">
            <i class="fa fa-book"></i> <span>Dashboard</span>            
          </a>
        </li>
		<!-- 
		<li>
          <a href="#">
            <i class="fa fa-star"></i> <span>Birthday List</span>            
          </a>
        </li> -->
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Administration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">            
			<li><a href="<?php echo site_url('Administration/userList'); ?>"><i class="fa fa-circle-o text-aqua"></i>User List</a></li>  
			<li><a href="<?php echo site_url('Administration/userLog'); ?>"><i class="fa fa-circle-o text-aqua"></i>User Log</a></li>  
            <li><a href="<?php echo site_url('Administration/addUser'); ?>"><i class="fa fa-circle-o text-aqua"></i>Add User</a></li>
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-wrench"></i>
            <span>Setup</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="<?php echo site_url('Setup/schoolDtls'); ?>"><i class="fa fa-circle-o text-aqua"></i>School Details</a></li>
		    <li><a href="<?php echo site_url('Administration/addUsertype'); ?>"><i class="fa fa-circle-o text-aqua"></i>User Type</a></li>
			<li><a href="<?php echo site_url('Setup/religionDtls'); ?>"><i class="fa fa-circle-o text-aqua"></i>Religion</a></li>  
			<li><a href="<?php echo site_url('Setup/casteDtls'); ?>"><i class="fa fa-circle-o text-aqua"></i>Caste</a></li>            
            <li><a href="<?php echo site_url('Setup/classDtls'); ?>"><i class="fa fa-circle-o text-aqua"></i>Class</a></li>  			
			<li><a href="<?php echo site_url('Setup/sectionDtls'); ?>"><i class="fa fa-circle-o text-aqua"></i>Sections</a></li>  			
			<li><a href="<?php echo site_url('Setup/subjectDtls'); ?>"><i class="fa fa-circle-o text-aqua"></i>Subject</a></li>
			<li><a href="<?php echo site_url('Setup/feesDtls'); ?>"><i class="fa fa-circle-o text-aqua"></i>Fees</a></li>
			<!--<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Group / Class / Subject</a></li>
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Student Pick-Up Point</a></li>  -->
          </ul>
        </li>
		
		
		<!-- 
		<li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Certificate</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Transfer Certificate</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Bonafied Certificate</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Character Certificate</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Experience Certificate</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Attempt Certificate</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Fees Notice</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Undertaking Letter</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Holiday Notice</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Eligibility Certificate</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Student Absentee Notice</a></li>  
			
          </ul>
        </li>
		-->
		<li>
          <a href="<?php echo site_url('Student/addStudent'); ?>">
            <i class="fa fa-user-plus"></i> <span>Admission Form</span>            
          </a>
        </li>
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Students</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href=""><i class="fa fa-circle-o text-aqua"></i>Sections / Roll Numbers</a></li> -->
            <li><a href="<?php echo site_url('Student/searchStudent'); ?>"><i class="fa fa-circle-o text-aqua"></i>Search Student Record</a></li>  
			<li><a href="<?php echo site_url('Student/studentList'); ?>"><i class="fa fa-circle-o text-aqua"></i>Update class record</a></li>  
			<li><a href="<?php echo site_url('Student/studentList'); ?>"><i class="fa fa-circle-o text-aqua"></i>Search Boy-Girl Student</a></li>  
			<li><a href="<?php echo site_url('Student/studentList'); ?>"><i class="fa fa-circle-o text-aqua"></i>Transferred student details</a></li>  
			<li><a href="<?php echo site_url('Student/studentList'); ?>"><i class="fa fa-circle-o text-aqua"></i>Caste Categories wise details</a></li>
            <li><a href="<?php echo site_url('Student/studentList'); ?>"><i class="fa fa-circle-o text-aqua"></i>Age wise Student details</a></li>  
			<li><a href="<?php echo site_url('Student/searchStudentListClass'); ?>"><i class="fa fa-circle-o text-aqua"></i>Class wise student list</a></li>  
          </ul>
        </li>
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Teachers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">            
			<!-- <li><a href=""><i class="fa fa-circle-o text-aqua"></i>Sections / Roll Numbers</a></li> -->			
			<li><a href="<?php echo site_url('Teacher/teacherList'); ?>"><i class="fa fa-circle-o text-aqua"></i>Search Teachers</a></li>  
			<li><a href="<?php echo site_url('Teacher/addTeacher'); ?>"><i class="fa fa-circle-o text-aqua"></i>Add Teachers</a></li>			
          </ul>
        </li>
	
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-inr"></i>
            <span>Fee Payment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Fees/addFees'); ?>"><i class="fa fa-circle-o text-aqua"></i>Add Fee</a></li>
            <li><a href="<?php echo site_url('Fees/feesDtls'); ?>"><i class="fa fa-circle-o text-aqua"></i>Fee Details</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Pay / Taken Fee</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Print Receipts</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Generate Student Fee Card</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Class wise Students Fee status</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Check Paid Fee List with date range</a></li>  			
          </ul>
        </li>
		
		<!--
		<li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Study Material</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Add Unit under Unit management</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Add Topics</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Add Tutorial</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Add Booklet</a></li>  
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Question Bank</a></li>
          </ul>
        </li>
			
		<li class="treeview">
          <a href="#">
            <i class="fa fa-user-circle-o"></i>
            <span>Staff</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Assign Teacher In-charge For Class</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Add Department</a></li>
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Complete Staff report</a></li>  			
          </ul>
        </li>
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-user-circle-o"></i>
            <span>Payroll Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Create Pay slip</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>SearchPay slip List</a></li>  			
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-clock-o"></i>
            <span>Time table</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Student wise time table</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Staff wise time table</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Check free staff details</a></li>  			
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Examination</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Term wise Add Exam</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Create Exam for classes</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Export exam details</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Subject Wise Marks Search</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Student wise marks search</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Student report card</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Class wise report</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Academic Year wise report</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Student Rank</a></li>  			
          </ul>
        </li>
		-->
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Attendance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Students Attendance</a></li>
            <li><a href="<?php echo site_url('Attendance/addAttendance'); ?>"><i class="fa fa-circle-o text-aqua"></i>Staff Attendance</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Edit Students Attendance</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Edit Staff Attendance</a></li>
            <li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Student wise report</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Class wise Report</a></li>  			
			<li><a href="<?php echo base_url().'assets/'; ?>"><i class="fa fa-circle-o text-aqua"></i>Staff wise Report</a></li>            
          </ul>
        </li>
		
	  
      </ul>
	  
    </section>
    <!-- /.sidebar -->
  </aside>