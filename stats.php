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

    <title>Query Form | Job Junction</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
    }

    h1 {
        text-align: center;
        margin-top: 20vh;
    }

    .form-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #121212;
        border-radius: 15px;
        margin-top: 30px;
        margin-bottom: 20vh;
        /* padding-bottom: ; */
    }

    .form-group {
        margin-bottom: 20px;
        border-radius: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        font-size: 14px;
    }

    .field {
        border-radius: 10px;

    }

    button[type="submit"] {
        display: block;
        margin-top: 20px;
        padding: 10px 15px;
        background-color: #88E05E;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 20px;
        cursor: pointer;
        /* display: flex;
            justify-content: space-around; */
        margin: 0 auto;
        border-radius: 15px;
        border: solid 1px #88E05E;


    }

    button[type="submit"]:hover {
        background-color: #2b7b05;
        border: solid 1px black;
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

    <h1>Placement Query Form</h1>
    <form class="form-container" method="post" action="query_handler.php">
        <!-- <h2>Show the trends of placement</h2> -->
        <div class="form-group">
            <label for="companyName">Company Name:</label>
            <select class="field" id="companyName" name="companyName" required>
                <option value="">Select Company</option>
                <option value="All">All</option>
                <?php
                $conn = mysqli_connect('localhost', 'root', 'Ashutosh@2003', 'db_project');
                $sql = "SELECT company_name FROM Company";
                $result = mysqli_query($conn, $sql);
                    foreach($result as $row){
                        ?>
                <option value=<?=$row['company_name']?>><?=$row['company_name']?></option>
                <?php
                    }
                ?>
                <!-- <option value="Infosys">Infosys</option>
                <option value="Wipro">Wipro</option> -->
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="form-group">
            <label for="year">Year:</label>
            <select class="field" id="year" name="year" required>
                <option value="">Select Year</option>
                <option value="All">All</option>
                <?php
                $i = 2016;
                while($i <= 2023){
                    echo "<option value='$i'>$i</option>";
                    $i++;
                }
                    ?>
            </select>
        </div>
        <div class="form-group">
            <label for="ctc">CTC:</label>
            <select class="field" id="ctc" name="ctc" required>
                <option value="">Select CTC</option>
                <option value="All">All</option>
                <option value="50">>=50LPA</option>
                <option value="30">>=30LPA</option>
                <option value="20">>=20LPA</option>
                <option value="10">>=10LPA</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="form-group">
            <label for="field">Field of Company:</label>
            <select class="field" id="field" name="field" required>
                <option value="">Select Field</option>
                <option value="All">All</option>
                <option value="IT">IT</option>
                <option value="Finance">Finance</option>
                <option value="Consulting">Consulting</option>
                <option value="Product Management">Product Management</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <button type="submit">Submit</button>
        <p style="margin-top: 30px;">*Filter by company name, year, CTC, and field of company:</p>
    </form>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>