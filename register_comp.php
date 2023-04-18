<!DOCTYPE html>
<html>

<head>
    <title>Register | Job Junction</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!-- <title>IITP Job Junction</title> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Changa:wght@200&family=M+PLUS+1+Code:wght@300&family=Mukta:wght@300;400&family=Preahvihear&family=Zilla+Slab:wght@300&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    
    <!-- MDB -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    <!-- css  -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/home.css" />

    <style>
        body {
            background-color: #f8f9fa;
        }

        .registration-container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 50px;
            margin-top: 20vh;
        }

        .registration-container h4 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-control {
            border-radius: 25px;
        }

        .btn-primary {
            border-radius: 25px;
        }
    </style>
</head>

<body>
<?php
session_start();
    // if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
    // $url = "https://";   
    // else  
    // $url = "http://";   
    // // Append the host(domain name, ip) to the URL.   
    // $url.= $_SERVER['HTTP_HOST'];   
    
    // // Append the requested resource location to the URL   
    // $url.= $_SERVER['REQUEST_URI'];    
    // $url_components = parse_url($url);
    
    // // Use parse_str() function to parse the
    // // string passed via URL
    // parse_str($url_components['query'], $params);
    
    // Display result
    // echo ' Hi '.$params['year'];
    // $error = $params['error'];
    // $error_msg=$_SESSION['error'];

    ?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-scroll">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="logo2.png" class="rounded-circle" height="70" background="white" />
            </a>
            <!-- <a class="navbar-brand" href="index.php"> -->
            <p class="fs-5 fw-light mb-0">
                Indian Institute <br>of Technology Patna
            </p>
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarRightAlignExample" aria-controls="navbarRightAlignExample" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarRightAlignExample">
                <!-- Left links -->
                <ul class="navbar-nav ms-auto me-5 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
    
                    <!-- Navbar dropdown -->
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            Register
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="register_stud.php">Student</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="register_comp.php">Company</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="register_alumni.php">Alumni</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="all_companies_before_login.php">Companies</a>
                    </li>
                    <!-- <li class="nav-item" style="color: aqua;">
                        <a class="nav-link" href="stats.php">Prev Stats</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="about_us_before_login.php">About Us</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- navigation -->

    <div class="container registration-container">
        <h4>Register your Company</h4>
        <form action="reg_comp.php" method="post">
            <div class="form-group">
                <label for="Name">Company Name</label>
                <input type="text" id="username" name="Name" class="form-control" placeholder="Company Name">
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" id="email" name="Email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control"
                    placeholder="Confirm Password">
            </div>
            <?php
             if(isset($_SESSION['error'])){
                $error_msg = $_SESSION['error'];
                echo("<center><p style='color:red'>$error_msg</p></center>");}
                ?>
            <!-- ?> -->
            <button type="submit" class="btn btn-primary btn-block" style="background-color: #88E05E; font-size:large">Register</button>
        </form>

        <p class="text-center mt-3">Already have an account? <a href="login.php">Login</a></p>
    </div>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>