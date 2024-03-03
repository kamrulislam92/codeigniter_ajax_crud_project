<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4">
          <div class="img_wrapper">

            <a href="<?php echo base_url('ProjectController/dashboard'); ?>">
              <img src="<?php echo base_url('assets/images/4.jpg'); ?>" alt="" srcset="">
            </a>
          </div>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="<?php echo base_url('ProjectController/dashboard'); ?>">Home</a>
	            
	          </li>
            <li class="active">
	            <a href="<?php echo base_url('UserController/index'); ?>">User Page</a>
	          </li>

            <?php if(!$this->session->has_userdata('authenticated')) {?>

            <li class="active">
	            <a href="<?php echo base_url('AdminController/index'); ?>">Admin Page</a>
	          </li>

            <?php } ?>

	          <li>
	              <a href="<?php echo base_url('ProjectController/about'); ?>">About</a>
	          </li>
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
              </ul>
	          </li>
	          <li>
              <a href="<?php echo base_url('ProjectController/portfolio'); ?>">Portfolio</a>
	          </li>
	          <li>
              <a href="<?php echo base_url('ProjectController/contact'); ?>">Contact</a>
	          </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-caret-left"></i>
            <i class="fa fa-caret-right"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li style="margin-top:10px; text-align:center;">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" >
                      <?= $this->session->userdata('authUser')['first_name']; ?>
                      <?= $this->session->userdata('authUser')['last_name']; ?>
                </a>
                  <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li style="padding:5px; border:1px solid #eee;">
                        <a href="#">Logout</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <style>.dropdown-toggle::after {
          display: block;
          position: absolute;
          top: 50%;
          right: 0;
          left: 108px;
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
      }</style>