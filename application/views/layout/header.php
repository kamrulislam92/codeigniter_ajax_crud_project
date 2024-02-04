<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Link to Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px; /* Adjusted for the fixed top navbar height */
            background-color: #f8f9fa; /* Background color for the body */
        }
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: #007bff; /* Top navbar background color */
            color: #fff; /* Top navbar text color */
        }
        .navbar-nav .nav-item:hover {
            background-color: #0056b3; /* Hover background color for top menu items */
        }
        .navbar-nav .nav-link {
            color: #fff !important; /* Text color for top menu items */
        }
        .navbar-nav .nav-item:hover .nav-link {
            color: #ffcc00 !important; /* Text color on hover for top menu items */
        }
        .navbar-form {
            display: flex;
            align-items: center;
            margin-left: auto;
            margin-right: 20px;
        }
        .form-control {
            border-radius: 20px;
        }
        .sidebar {
            position: fixed;
            top: 56px; /* Adjusted for the fixed top navbar height */
            bottom: 0;
            left: 0;
            z-index: 1000;
            padding-top: 20px; /* Adjusted for the top padding of the body */
            background-color: #343a40; /* Sidebar background color */
            color: #fff; /* Sidebar text color */
        }
        .sidebar-nav .nav-item:hover {
            background-color: #292e33; /* Hover background color for sidebar menu items */
        }
        .sidebar-nav .nav-link {
            color: #fff !important; /* Text color for sidebar menu items */
        }
        .sidebar-nav .nav-item:hover .nav-link {
            color: #ffcc00 !important; /* Text color on hover for sidebar menu items */
        }
        .content {
            margin-left: 250px; /* Adjusted for the fixed sidebar width */
            padding-top: 20px; /* Adjusted for the top padding of the body */
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('/'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('projectController/about'); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('projectController/service'); ?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('projectController/contact'); ?>">Contact</a>
                    </li>
                </ul>
            </div> -->
            <div class="navbar-form">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </div>
    </nav>

    <!-- Sidebar and Main Content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column sidebar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo base_url('/'); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('projectController/about'); ?>">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('projectController/service'); ?>">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('projectController/contact'); ?>">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 content">