<!DOCTYPE html>
<html>

<head>
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
    <title>Query | Job Junction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 30px;
        margin-top: 20vh;
    }

    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        flex-direction: row;
        transition: box-shadow 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.2);
    }

    .card img {
        max-width: 100px;
        max-height: 100px;
        object-fit: cover;
        border-radius: 5px;
        margin-right: 20px;
    }

    .card-info {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .card-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .card-field {
        font-size: 16px;
        margin-bottom: 5px;
    }

    .card-email {
        font-size: 14px;
        color: #999;
    }

    .card-logo {
        display: flex;
        align-items: center;
    }

    .card-logo img {
        max-width: 100px;
        max-height: 100px;
        object-fit: cover;
        border-radius: 5px;
        margin-right: 20px;
    }

    .card-info {
        flex-grow: 1;
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
                        <a class="nav-link active" href="stats.php">Prev Stats</a>
                    </li>
                    <li class="nav-item" style="color: aqua;">
                        <a class="nav-link" href="student_eligible.php">Check Eligibility </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about_us.php">About Us</a>
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
                        <a class="nav-link active" href="stats.php">Prev Stats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about_us.php">About Us</a>
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
                            <a class="nav-link active" href="stats.php">Prev Stats</a>
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
    <div class="container">
        <?php
        ini_set('display_errors', 1);
        error_reporting(-1);
        ini_set('display_errors', 1);
        error_reporting(-1);
        $conn = mysqli_connect('localhost', 'root', 'Ashutosh@2003', 'db_project');
        // Check connection
        $company_name = $_POST['companyName'];
        $year = $_POST['year'];
        $ctc = $_POST['ctc'];
        $field = $_POST['field'];

        if($company_name == 'All' && $year == 'All' && $ctc=='All' && $field=='All'){
            $sql = "SELECT * FROM Company ";
        }
        else if($company_name == 'All' && $year == 'All' && $ctc=='All'){
            $sql = "SELECT * FROM Company where c_field = '$field'";
        }
        else if($company_name == 'All' && $year == 'All' && $field=='All'){
            $sql = "SELECT * FROM Company where ctc >= $ctc";
        }
        else if($company_name == 'All' && $ctc == 'All' && $field=='All'){
            $sql = "SELECT * FROM Company where recrting_since<= $year";
        }
        else if($year == 'All' && $ctc == 'All' && $field=='All'){
            $sql = "SELECT * FROM Company where Company_name = '$company_name'";
        }
        else if($company_name == 'All' && $year == 'All'){
            $sql = "SELECT * FROM Company where ctc >= $ctc and c_field = '$field'";
        }
        else if($company_name == 'All' && $ctc == 'All'){
            $sql = "SELECT * FROM Company where recrting_since<= $year and c_field = '$field'";
        }
        else if($company_name == 'All' && $field == 'All'){
            $sql = "SELECT * FROM Company where recrting_since<= $year and ctc >= $ctc";
        }
        else if($year == 'All' && $ctc == 'All'){
            $sql = "SELECT * FROM Company where Company_name = '$company_name' and c_field = '$field'";
        }
        else if($year == 'All' && $field == 'All'){
            $sql = "SELECT * FROM Company where Company_name = '$company_name' and ctc >= $ctc";
        }
        else if($ctc == 'All' && $field == 'All'){
            $sql = "SELECT * FROM Company where Company_name = '$company_name' and recrting_since<= $year";
        }
        else if($company_name == 'All'){
            $sql = "SELECT * FROM Company where recrting_since<= $year and ctc >= $ctc and c_field = '$field'";
        }
        else if($year == 'All'){
            $sql = "SELECT * FROM Company where Company_name = '$company_name' and ctc >= $ctc and c_field = '$field'";
        }
        else if($ctc == 'All'){
            $sql = "SELECT * FROM Company where Company_name = '$company_name' and recrting_since<= $year and c_field = '$field'";
        }
        else if($field == 'All'){
            $sql = "SELECT * FROM Company where Company_name = '$company_name' and recrting_since<= $year and ctc >= $ctc";
        }
        else{
            $sql = "SELECT * FROM Company where Company_name = '$company_name' and recrting_since<= $year and ctc >= $ctc and c_field = '$field'";
        }

        // $sql = 'SELECT * FROM Company where Company_name = $company_name AND recrting_since<= $year and Ctc >= $ctc and c_field = $field;
        // $sql = 'SELECT * FROM Company ';
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
        <div class="card">
            <div class="card-logo">
                <img src="https://via.placeholder.com/100" alt="Company Logo">
            </div>
            <div class="card-info">

                <div class="card-title">Company Name:<?=$row['Company_name'];?></div>
                <div class="card-field">CTC:<?=$row['ctc'];?></div>
                <div class="card-field">Field:<?=$row['c_field'];?></div>
                <div class="card-field">Recruting Since:<?=$row['recrting_since'];?></div>
            </div>
        </div>
        </br>
        <?php
            }
        } else {
            echo 'No results found';
        }
        
?>
        <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

    </html>