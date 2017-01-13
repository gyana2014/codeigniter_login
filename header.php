
<?php
$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT'); 
$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate'); 
$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false); 
$this->output->set_header('Pragma: no-cache');


?>
<!DOCTYPE html>
<html lang="en">
<head>   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>look</title>
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/headerC.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-fixed-top" style="background:#847355;" role="banner">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle btn btn-default" id="menu-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="/" class="navbar-brand"><img src="<?php echo base_url(); ?>/assets/images/logo.gif"></a>
        </div>
       
     
       
      
       
        <div   style="margin-top:-13px;float:right;" class="dropdown navbar-brand">
            <a style="float:right; color: #847355;" class=" btn btn-default btn-lg dropdown-toggle"  data-toggle="dropdown">
              <span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('user_id');?>
               <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
              <li><a href="#">settings</a></li>
              <li><a href="<?php echo base_url('clogin/logout'); ?>">Logout</a></li>
            </ul>
        </div>
        <a   style="float:right; color: #FFFFFF;; "  class=" navbar-brand " href="#">
           <span class="glyphicon glyphicon-bell"></span>
           <span style="background: red ;right: 13px;top: -12px;position: relative;" class="badge">4</span>
        </a>
        <a  style="float:right;color: #FFFFFF;"  class=" navbar-brand " href="#">
            <span class="glyphicon glyphicon-envelope"></span>
            <span style="  background: red ;right: 13px;top: -12px;position: relative;"  class="badge">4</span>
        </a>
    </div>
</nav>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
              
                <li>
                    <a href="<?php echo base_url('dashboard')?>"">Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo base_url('projects')?>">Projects</a>
                </li>
                <li>
                    <a href="#">My Projects</a>
                </li>
                <li>
                    <a href="#">My Teams</a>
                </li>
                 <li>
                    <a href="#">Jobs</a>
                </li>
                 <li>
                    <a href="#">Applied Jobs</a>
                </li>
                 <li>
                    <a href="#">My Challenges</a>
                </li>
      
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
             <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid" style="border: 2px solid #E9F3EE;background: #FFFFFF;padding-top: 15px;">
              