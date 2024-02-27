<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Link to Bootstrap 5 CSS -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <style>
        * {
	 margin: 0px;
}
 body {
	 background: #202838;
}
 .sidebar {
	 width: 250px;
	 height: 100%;
	 position: fixed;
	 z-index: 2000;
	 background: url("assets/images/3.jpg");
	 border-right: 10px solid #d00355;
}
 .sidebar ul {
	 margin-top: 30px;
}
 .sidebar li {
	 list-style: none;
	 padding: 10px;
	 position: relative;
}
.sidebar li:hover {
	background: #d00355;
}
 .sidebar a {
	 text-decoration: none;
	 color: #555;
	 font: 14px Oswald;
	 text-transform: uppercase;
	 position: relative;
	 z-index: 1000;
}
 .sidebar .hover {
	 display: block;
	 position: absolute;
	 width: 0%;
	 height: 40px;
	 top: 0px;
	 left: 0px;
	 background: #d00355;
	 z-index: 0;
	 opacity: 0;
}
 .sidebar a:hover {
	 color: #fff;
}
 .sidebar .fa-angle-right {
	 position: absolute;
	 left: 150px;
	 top: 1px;
}
 .sidebar .sub-menu {
	 z-index: 2000;
	 position: absolute;
	 left: 210px;
	 top: -30px;
	 padding: 0px;
	 width: 220px;
	 display: none;
	 background: #d00355;
}
 .sidebar .sub-menu li a {
	 padding-left: 20px;
	 font-size: 13px;
}
 .sidebar .sub-menu i {
	 left: 180px;
}
 .sidebar ul li:hover ul {
	 display: block;
     background:#d00355;
}
 .sidebar .push {
	 margin-right: 10px;
}
 h1 {
	 color: #fff;
	 font: 16px Open Sans;
	 padding-left: 50px;
	 padding-top: 30px;
}
 .color {
	 color: #d00355;
}
 .portfolio {
	 width: 1040px;
	 margin-left: 250px;
	 position: relative;
	 z-index: 0;
	 padding-top: 20px;
}
 .portfolio li {
	 list-style: none;
	 float: left;
	 box-shadow: #000 0px 0px 10px;
	 border: 1px solid #000;
	 position: relative;
	 overflow: hidden;
	 margin-right: 10px;
	 z-index: 0;
	 margin-bottom: 20px;
}
 .portfolio li:before {
	 content: "";
	 position: absolute;
	 width: 160%;
	 top: -100px;
	 left: -120px;
	 height: 200px;
	 -webkit-transform: rotate(-36deg);
	 -moz-transform: rotate(-36deg);
	 -o-transform: rotate(-36deg);
	 -ms-transform: rotate(-36deg);
	 transform: rotate(-36deg);
	 background: rgba(255, 255, 255, 0.1);
}
 .caption {
	 width: 230px;
	 background: #fff;
	 margin-top: -5px;
	 padding-bottom: 10px;
}
 .caption h1 {
	 color: #d00355;
	 text-align: center;
	 margin: 0px;
	 padding: 0px;
	 font: 16px Oswald;
	 text-transform: uppercase;
	 padding-top: 10px;
}
 .caption p {
	 font: 13px Open Sans;
	 text-align: center;
	 padding: 10px;
}
 .caption i {
	 margin-left: 110px;
	 margin-top: 15px;
	 color: #d00355;
}
 .active-drag {
	 -webkit-animation: drag 1.5s infinite;
}
 @-webkit-keyframes drag {
	 0% {
		 -webkit-transform: scale(1);
	}
	 50% {
		 -webkit-transform: scale(0.8);
	}
	 100% {
		 -webkit-transform: scale(1);
	}
}
</style>
</head>
<body>

    <!-- Navigation Bar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('/')?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('projectController/about')?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('projectController/service')?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('projectController/contact')?>">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-form">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </div>
    </nav> -->

<div class="sidebar">
  <h1><i class="fa fa-bars push"></i>Animated <span class="color"><strong>Nav</strong></span></h1>
    <ul>
    <li><a href="#"><i class="fa fa-dashboard push"></i>Home<i class="fa fa-angle-right"></i></a><span class="hover"></span>
    </li>
    <li><a href="#"><i class="fa fa-user push"></i>About<i class="fa fa-angle-right"></i></a><span class="hover"></span>
      <ul class="sub-menu">
         <li><a href="#">Add User<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
         <li><a href="#">Manage Users<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
      </ul>
    </li>
    <li><a href="#"><i class="fa fa-cog push"></i>Services<i class="fa fa-angle-right"></i></a><span class="hover"></span>
     <ul class="sub-menu">
         <li><a href="#">Web Design<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
         <li><a href="#">Logo Design<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
        <li><a href="#">Motion Graphics<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
       <li><a href="#">WordPress<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
      </ul></li>
    <li><a href="#"><i class="fa fa-picture-o push"></i>portfolio<i class="fa fa-angle-right"></i></a><span class="hover"></span>
        <ul class="sub-menu">
         <li><a href="#">Selected Works<i class="fa fa-angle-right"></i></a><span class="hover"></span>
          </li>
         <li><a href="#">Featured Works<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
      </ul>
    </li>
    <li><a href="#"><i class="fa fa-file push"></i>My Blog<i class="fa fa-angle-right"></i></a><span class="hover"></span>
        <ul class="sub-menu">
         <li><a href="#">Latest News<i class="fa fa-angle-right"></i></a><span class="hover"></span>
          </li>
         <li><a href="#">Recent Articles<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
      </ul>
    </li>
    <li><a href="#"><i class="fa fa-plane push"></i>Contact<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
  </ul>
</div>

    <!-- Sidebar and Main Content -->
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-12 ms-sm-auto col-lg-12 px-md-12 content">
               

