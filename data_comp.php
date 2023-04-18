<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Database | Job Junction</title>
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

</head>

<body>
<?php
    session_start();
    // $person = $_SESSION['person'];
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
    // $name = $_SESSION['name'];
    // $email = $_SESSION['email'];
    // echo("$name"); 
    ?>
    <!-- navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-scroll">
        <div class="container-fluid">
            <a class="navbar-brand" href="home_admin.php">
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
                        <a class="nav-link " aria-current="page" href="home_admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="all_companies_admin.php">Companies</a>
                    </li>
                    <li class="nav-item" style="color: aqua;">
                        <a class="nav-link" href="stats_admin.php">Prev Stats</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown"
                        aria-expanded="false">
                        Database
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="data_stud.php">Student</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="data_comp.php">Company</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="data_alumni.php">Alumni</a>
                        </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="custom_query.php">Custom Query</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about_us_admin.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- navigation -->

    
    <table class="table table-striped" style="margin-top:15vh">
  <thead>
  <tr>
        <th scope="col"> Company name</th>
        <th scope="col"> Email</th>
        <th scope="col"> Field</th>
        <th scope="col"> Interview mode</th>
        <th scope="col"> Recruting Since</th>
        <th scope="col"> CTC</th>
        <th scope="col"> Interest</th>
        <th scope="col"> 10th Marks</th>
        <th scope="col"> 12th Marks</th>
        <th scope="col"> CPI</th>
        </tr>
  </thead>
  <tbody>
        <?php
            $sql = "SELECT * FROM Company natural join Company_marks order by Company_name";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            foreach($result as $row1){
                ?>
                <tr style="font-size:small">
                    <td><?=$row1['Company_name']?></td>
                    <td> <?=$row1['Email']?></td>
                    <td> <?=$row1['c_field']?></td>
                    <td> <?=$row1['mode_interview']?></td>
                    <td> <?=$row1['recrting_since']?></td>
                    <td> <?=$row1['ctc']?></td>
                    <td> <?=$row1['Interest']?></td>
                    <td> <?=$row1['10th_marks']?></td>
                    <td> <?=$row1['12th_marks']?></td>
                    <td> <?=$row1['cpi']?></td>
                </tr>
                <?php
            }
        ?>
  </tbody>
</table>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>
</html>