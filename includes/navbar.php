<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo $TITLE?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./images/Techno-Logo_new.png" alt="" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-lg-around" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link <?php if($PAGE=='home'){echo 'active';} ?>" href="<?php if($PAGE=='home') {echo '#';} else {echo './index.php';} ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a type="button" class="btn btn-dropdown navbar-dropdown-btn" href="#">
                            About Us
                        </a>
                        <button type="button" class="btn dropdown-toggle dropdown-toggle-split d-lg-none" data-bs-toggle="dropdown" aria-expanded="false">
                            
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="./coc.html">Code of Conduct</a></li>
                            <li><a class="dropdown-item" href="./IQAC.html">IQAC</a></li>
                            <li><a class="dropdown-item" href="./aboutUsPolicies.html">Policies</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a type="button" class="btn btn-dropdown navbar-dropdown-btn" href="./departments.html">Departments</a>
                        <button type="button" class="btn dropdown-toggle dropdown-toggle-split d-lg-none" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle dropdown</span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Computer Science Engineering & Information Technology (CSE & IT)</a></li>
                            <li><a class="dropdown-item" href="#">Electronics and Communication Engineering (ECE)</a></li>
                            <li><a class="dropdown-item" href="./mechanical_Department.html">Mechanical Engineering (ME)</a></li>
                            <li><a class="dropdown-item" href="#">Electrical Engineering (EE)</a></li>
                            <li><a class="dropdown-item" href="#">Civil Engineering (CE)</a></li>
                            <li><a class="dropdown-item" href="#">Applied Sciences and Humanities</a></li>
                            <li><a class="dropdown-item" href="./adjunct-faculties.html">Adjunct Faculties</a></li>
                            <li><a class="dropdown-item" href="./researches.html">Research</a></li>
                            <li><a class="dropdown-item" href="#">Projects</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a type="button" class="btn btn-dropdown navbar-dropdown-btn" href="#">
                            Placement
                        </a>
                        <button type="button" class="btn dropdown-toggle dropdown-toggle-split d-lg-none" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle dropdown</span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Placement 2019 to 2021</a></li>
                            <li><a class="dropdown-item" href="#">Placement 2013 to 2019</a></li>
                            <li><a class="dropdown-item" href="./training.html">Training</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contactus.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./admission_form.html">Admission Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->