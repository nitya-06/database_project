<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us | Job Junction</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Sleek and modern CSS design starts here */
        body {
            background-color: #f7f7f7;
            color: #333;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px;
        }

        .card {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #FCF7F7;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 30px;
            color: #333;
            text-align: center;
        }

        h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #666;
        }

        .highlight {
            color: #ff6363;
        }

        .quote {
            font-style: italic;
            font-size: 24px;
            margin-top: 30px;
            color: #666;
            text-align: center;
        }

        .quote img {
            width: 40px;
            height: 40px;
            margin-top: -10px;
            margin-right: 10px;
            vertical-align: middle;
        }

        /* Sleek and modern CSS design ends here */
    </style>
</head>

<body>
<?php
    session_start();
    $person = $_SESSION['person'];
    if(!isset($_SESSION['logged_in'])){
        header("Location: login.php");
        exit();
    }
    ?>
<?php
        if($person=="student"){
        echo('<nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-scroll">
        <div class="container-fluid">
            <a class="navbar-brand" href="index_after_login_stud.php">
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
                        <a class="nav-link" aria-current="page" href="index_after_login_stud.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="all_companies.php">Companies</a>
                    </li>
                    <li class="nav-item" style="color: aqua;">
                        <a class="nav-link" href="stats.php">Prev Stats</a>
                    </li>
                    <li class="nav-item" style="color: aqua;">
                        <a class="nav-link" href="student_eligible.php">Check Eligibility </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about_us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">LogOut</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stud_account.php"><img src="profile.png" width="33px" /></a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>');}
        else if($person == "alumni"){
        echo('<nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-scroll">
        <div class="container-fluid">
            <a class="navbar-brand" href="index_after_login_alumni.php">
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
                        <a class="nav-link" aria-current="page" href="index_after_login_alumni.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="all_companies.php">Companies</a>
                    </li>
                    <li class="nav-item" style="color: aqua;">
                        <a class="nav-link" href="stats.php">Prev Stats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about_us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="alumni_account.php"><img src="profile.png" width="33px" /></a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>');}
        else{
            echo('<nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-scroll">
            <div class="container-fluid">
                <a class="navbar-brand" href="index_after_login_comp.php">
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
                            <a class="nav-link" aria-current="page" href="index_after_login_comp.php">Home</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link" href="all_companies.php">Companies</a>
                        </li>
                        <li class="nav-item" style="color: aqua;">
                            <a class="nav-link" href="stats.php">Prev Stats</a>
                        </li>
                        <li class="nav-item" style="color: aqua;">
                            <a class="nav-link" href="company_eligible.php">Check Eligibility </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="about_us.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="company_account.php"><img src="profile.png" width="33px" /></a>
                        </li>
                    </ul>
                    <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>');
        }
    ?>
        <!-- navigation -->
    <div class="container" >
        <div class="card" style="margin-top:10vh;">
            <h2 >About Us</h2>
            <p>
            Welcome to the Placement Cell of the Indian Institute of Technology (IIT) Patna !
            <br><br>
            At IIT Patna, we take pride in our exceptional students who are driven by a passion for excellence and a desire to make a positive  impact in the world. Our Placement Cell is dedicated to supporting and nurturing the talent of our students, and ensuring that they have the best possible opportunities to launch successful careers.
            </p>
            <p>
            Our Placement Cell is run by a team of experienced professionals who work tirelessly to connect our students with top-notch companies from various industries. With a robust network of corporate partnerships and a deep understanding of the job market, we are committed to helping our students explore diverse career options and find the perfect fit for their skills and aspirations.
            </p>
        </div>
        <div class="card">
            <h2>Our Vision</h2>
            <p>
            We believe in a student-centric approach, and our team provides personalized guidance and support to each student throughout the placement process. From resume building and interview preparation to industry-specific training and networking opportunities, we leave no stone unturned in ensuring that our students are well-prepared and confident to face the challenges of the competitive job market.
            <br><br>
            Our Placement Cell has a proven track record of excellent placements, with many of our students securing lucrative job offers from leading national and international companies. We are dedicated to maintaining this legacy and ensuring that our students have a bright future ahead.
            </p>
        </div>
    </div>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>