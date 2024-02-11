<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Link to Bootstrap 5 CSS -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
         
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
        .navbar-toggler {
            background-color: #007bff; /* Background color for the toggle button */
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
     
        .content {
           
            transition: margin-left 0.3s ease-in-out, padding-left 0.3s ease-in-out;
        }
        .content.active {
            margin-left: 250px; /* Adjusted for the fixed sidebar width */
        }
        @media (max-width: 768px) {
            .navbar-nav .nav-item {
                text-align: center;
            }
            .navbar-nav .nav-link {
                color: #fff !important; /* Text color for mobile menu items */
            }
            .navbar-nav .nav-item:hover .nav-link {
                color: #ffcc00 !important; /* Text color on hover for mobile menu items */
            }
            .sidebar {
                left: 0; /* Show sidebar on mobile */
            }
            .content {
                padding-left: 0; /* Adjust padding-left for content when sidebar is active */
            }
            .content.active {
                padding-left: 250px; /* Adjusted padding-left for content when sidebar is active */
            }
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
    </nav>

    <!-- Sidebar and Main Content -->
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-12 ms-sm-auto col-lg-12 px-md-12 content">
               

