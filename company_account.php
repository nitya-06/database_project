<!DOCTYPE html>
<html>

<head>
    <title>Registration Page | Job Junction</title>
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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

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
    $person = $_SESSION['person'];
    if(!isset($_SESSION['logged_in'])){
        header("Location: login.php");
        exit();
    }
    ?>
    <?php
                ini_set('display_errors', 1);
                error_reporting(-1);
                $conn = mysqli_connect('localhost', 'root', 'Ashutosh@2003', 'db_project');
                // session_start();
                $name = $_SESSION['name'];
                $email = $_SESSION['email'];
                echo("<h1>$name</h1>");
                ?>
    <?php
        $conn = mysqli_connect('localhost', 'root', 'Ashutosh@2003', 'db_project');
        $sql = "SELECT * FROM Company natural join Company_marks WHERE Email='$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $marks_10=$row['10th_marks'];
        $marks_12=$row['12th_marks'];
        $cpi=$row['cpi'];
        $interest=$row['Interest'];
        $ctc=$row['ctc'];
        $mode=$row['mode_interview'];
        $cfield=$row['c_field'];
        $since=$row['recrting_since'];
        mysqli_close($conn);
    ?>
    <?php
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
    $url = "https://";   
    else  
    $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
    $url_components = parse_url($url);
    
    // Use parse_str() function to parse the
    // string passed via URL
    parse_str($url_components['query'], $params);
    
    // Display result
    // echo ' Hi '.$params['year'];
    $error = $params['error'];

    ?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-scroll">
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
                        <a class="nav-link" href="about_us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <?php echo('<a class="nav-link active" href="company_account.php"><img src="profile.png" width="33px" /></a>')?>
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
    <?php
        if($error)
        echo("<center><p style='color:red'>$error !</p></center>");
        ?>
        <h4>Add/Update Your details</h4>
        <form action="company_account_chk.php" method="post">
            <div class="form-group">
                <label for="name">Company Name</label>
                <input type="text" required id="username" name="name" class="form-control" value="<?php echo($name)?>"
                    disabled>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" required id="username" name="email" class="form-control" value="<?php echo($email)?>"
                    disabled>
            </div>
            <div class="form-group">
                <label for="mode_of_interview">Mode of Interview</label>
                <select name="mode_of_interview" required required class="form-select form-control"
                    aria-label="Default select example">
                    <option selected value="<?php echo($mode)?>"><?php echo(($mode==''?'Select Mode of Interview':$mode))?></option>
                    <option value="Online">Online</option>
                    <option value="Offline">Offline</option>
                </select>
            </div>
            <div class="form-group">
                <label for="field">Field of company</label>
                <select name="field" required class="form-select form-control" aria-label="Default select example">
                    <option selected value="<?php echo($cfield)?>"><?php echo(($cfield==''?'Select Field':$cfield))?></option>
                    <option value="IT">IT</option>
                    <option value="Finance">Finance</option>
                    <option value="Consulting">Consulting</option>
                    <option value="Product Management">Product Management</option>
                    <option value="Others">Others</option>

                </select>
            </div>
            <div class="form-group">
                <label for="recruiting_since">Recruting Since</label>
                <input id="username" required name="recruiting_since" class="form-control" type="number" value="<?php echo($since)?>"
                    placeholder="YYYY" min="2000" max="2023">
            </div>
            <div class="form-group">
                <label for="ctc">Salary Package</label>
                <input id="number" required name="ctc" class="form-control" type="number" placeholder="In LPA" value="<?php echo($ctc)?>">
            </div>
            <div class="form-group">
                <label for="10th_marks">Cutoff 10th Marks</label>
                <input type="number" required id="10th_marks" name="10th_marks" class="form-control" value="<?php echo($marks_10)?>"
                    placeholder="10th marks in %">
            </div>
            <div class="form-group">
                <label for="12th_marks">Cutoff 12th Marks</label>
                <input type="number" required id="12th_marks" name="12th_marks" class="form-control" value="<?php echo($marks_12)?>"
                    placeholder="12th marks in %">
            </div>
            <div class="form-group">
                <label for="cpi">Cutoff CPI</label>
                <input type="number" required id="cpi" name="cpi" class="form-control" step="0.01" placeholder="CPI between 1-10" value="<?php echo($cpi)?>">
            </div>
            <div class="form-group">
                <label for="interest">Skills Required</label>
                <select name="interest" required class="form-select form-control" aria-label="Default select example">
                    <option selected value="<?php echo($interest)?>"><?php echo(($interest==''?'Select Skill':$interest))?></option>
                    <option value="Competitive Programming">Competitive Programming</option>
                    <option value="Development">Development</option>
                    <option value="Machine Learning">Machine Learning</option>
                    <option value="Cyber Security">Cyber Security</option>
                    <option value="Finance">Finance</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block"
                style="background-color: #88E05E; font-size:large">Update</button>
        </form>
    </div>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>