<!DOCTYPE html>
<html>

<head>
    <title>Account Page | Job Junction</title>
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
                // session_start();
                $name = $_SESSION['name'];
                $RollNo = $_SESSION['rollno'];
                // echo("<h1>$name</h1>");
                ?>
                <?php
            $conn = mysqli_connect('localhost', 'root', 'Ashutosh@2003', 'db_project');
            $sql = "SELECT * FROM Alumni natural join Alumni_marks WHERE RollNo='$RollNo'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $gender=$row['Gender'];
            $cname=$row['Company_name'];
            $area=$row['area_of_working'];
            $loc=$row['Location'];
            $tenure=$row['working_tenure'];
            $degree=$row['degree'];
            $branch=$row['branch'];
            $batch_year=$row['batch_year'];
            $marks_10=$row['10th_marks'];
            $marks_12=$row['12th_marks'];
            $cpi=$row['cpi'];
            $interest=$row['Interest'];
            $ctc=$row['Ctc'];
            $email=$row['Email'];
            mysqli_close($conn);
        ?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-scroll">
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
                        <a class="nav-link" href="about_us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="alumni_account.php"><img src="profile.png" width="33px" /></a>
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
        <h4>Add/Update Your details</h4>
        <form action="alumni_account_chk.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="username" name="name" class="form-control" value="<?php echo($name)?>" disabled>
            </div>
            <div class=" form-group">
                <label for="rollno">Roll No</label>
                <input type="text" id="username" name="rollno" class="form-control" value="<?php echo($RollNo)?>"
                    disabled>
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" id="username" name="Email" class="form-control" value="<?php echo($email)?>"
                    disabled>
            </div>
            <div class="form-group">
                <label for="Gender">Gender</label>
                <select required name="Gender" class="form-select form-control" aria-label="Default select example"
                    name="Gender">
                    <option selected value="<?php echo($gender)?>"><?php echo(($gender==''?'Select Gender':$gender))?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="comp_name">Company Name</label>
                <input type="text" id="username" name="comp_name" class="form-control" value="<?php echo($cname)?>"
                    placeholder="Enter the Company name" >
            </div>
            <div class="form-group">
                <label for="ctc">CTC</label>
                <input type="number" id="username" name="ctc" class="form-control" placeholder="In LPA" value="<?php echo($ctc)?>">
            </div>
            <div class="form-group">
                <label for="Degree">Degree</label>
                <select name="Degree" required class="form-select form-control" aria-label="Default select example">
                    <option selected value="<?php echo($degree)?>"><?php echo(($degree==''?'Select Degree':$degree))?></option>
                    <option value="B.Tech">B.Tech</option>
                    <option value="B.Sc">B.Sc</option>
                    <option value="M.Tech">M.Tech</option>
                    <option value="PhD">PhD</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Branch">Branch</label>
                <select name="Branch" required class="form-select form-control" aria-label="Default select example">
                    <option selected value="<?php echo($branch)?>"><?php echo(($branch==''?'Select Branch':$branch))?></option>
                    <option value="CSE">CSE</option>
                    <option value="EE">EE</option>
                    <option value="MnC">MnC</option>
                    <option value="AI">AI/DS</option>
                </select>
            </div>
            <div class="form-group">
                <label for="batch_year">Batch Year</label>
                <select name="batch_year" class="form-select form-control" aria-label="Default select example">
                <option value="<?php echo($batch_year)?>" selected><?php echo(($batch_year==''?'Select Year':$batch_year))?></option>                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                </select>
            </div>
            <div class="form-group">
                <label for="10th_marks">10th Marks</label>
                <input type="number" id="10th_marks" name="10th_marks" class="form-control" value="<?php echo($marks_10)?>"
                    placeholder="10th marks in %">
            </div>
            <div class="form-group">
                <label for="12th_marks">12th Marks</label>
                <input type="number" id="12th_marks" name="12th_marks" class="form-control" value="<?php echo($marks_12)?>"
                    placeholder="12th marks in %">
            </div>
            <div class="form-group">
                <label for="cpi">CPI</label>
                <input type="number" id="cpi" name="cpi" class="form-control" placeholder="CPI between 1-10" value="<?php echo($cpi)?>">
            </div>
            <div class="form-group">
                <label for="interset">Area of Working</label>
                <select name="interset" class="form-select form-control" aria-label="Default select example">
                <option value="<?php echo($area)?>" selected><?php echo(($area==''?'Select Your Area of work':$area))?></option>
                    <option value="Development">Development</option>
                    <option value="Machine Learning">Machine Learning</option>
                    <option value="Cyber Security">Cyber Security</option>
                    <option value="Finance">Finance</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" class="form-control" placeholder="City name" value="<?php echo($loc)?>">
            </div>
            <div class="form-group">
                <label for="working_tenure">Woking Tenure</label>
                <input type="number" id="working_tenure" name="working_tenure" class="form-control" value="<?php echo($tenure)?>"
                    placeholder="in years ">
            </div>
            <button type="submit" class="btn btn-primary btn-block"
                style="background-color: #88E05E; font-size:large">Update</button>
        </form>

    </div>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>