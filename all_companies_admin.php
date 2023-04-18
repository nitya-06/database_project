<!DOCTYPE html>
<html>

<head>
    <title>All Companies | Job Junction</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .container1 {
        margin-top: 20vh;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 30px;
        display: flex;
        flex-direction: row;
        /* Update to row direction */
        justify-content: center;
        /* Update to space-around alignment */
        margin: 0 auto;
        margin-top: 20vh;
        align-items: center;
        width: 1200px;
        height: 500%;
    }

    .image-container {
        max-height: 500px;
        max-width: 4000px;
    }

    .image-container img {
        max-width: 75%;
        max-height: 75%;
        object-fit: cover;
        border-radius: 10px;
    }

    .year-selector {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        justify-items: center;
        align-items: center;
        row-gap: 40px;
        column-gap: 80px;
        margin-right: 40px;
        /* Add gap between buttons */
        max-width: 800px;
        /* Update to limit width */
        /* padding: 40px; */
    }

    .year-selector button {
        border: none;
        background-color: #f8f9fa;
        color: #000;
        padding: 10px;
        border-radius: 8px;
        cursor: pointer;
        outline: none;
        font-size: 24px;
        /* margin-bottom: 10px; */
        transition: background-color 0.3s ease;
        width: 150%;
        border: solid 1px black;
        /* margin:10px; */
    }

    .year-selector button:hover {
        border: solid 1px black;
        background-color: #88E05E;
    }

    .year-selector button.selected {
        background-color: #007bff;
        color: #fff;

    }
    </style>
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
                        <a class="nav-link" aria-current="page" href="home_admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="all_companies_admin.php">Companies</a>
                    </li>
                    <li class="nav-item" style="color: aqua;">
                        <a class="nav-link" href="stats_admin.php">Prev Stats</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown"
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

    <div class="container1">
        <div class="image-container">
            <img src="prev_stats.png" alt="Example Image">
        </div>
        <div class="year-selector">
            <?php echo('<button class="year-btn" onclick=location.href=`year_admin.php?year=2022` data-year="2022">2022-2023</button>')?>
            <?php echo('<button class="year-btn" onclick=location.href=`year_admin.php?year=2021` data-year="2021">2021-2022</button>')?>
            <?php echo('<button class="year-btn" onclick=location.href=`year_admin.php?year=2020` data-year="2020">2020-2021</button>')?>
            <?php echo('<button class="year-btn" onclick=location.href=`year_admin.php?year=2019` data-year="2019">2019-2020</button>')?>
            <?php echo('<button class="year-btn" onclick=location.href=`year_admin.php?year=2018` data-year="2018">2018-2019</button>')?>
            <?php echo('<button class="year-btn" onclick=location.href=`year_admin.php?year=2017` data-year="2017">2017-2018</button>')?>
            <!-- <a href="year.php"><button class="year-btn" data-year="2022">2021-2022</button></a>
            <a href="year.php"><button class="year-btn" data-year="2021">2020-2021</button></a>
            <a href="year.php"><button class="year-btn" data-year="2020">2019-2020</button></a>
            <a href="year.php"><button class="year-btn" data-year="2019">2018-2019</button></a>
            <a href="year.php"> <button class="year-btn" data-year="2018">2017-2018</button></a> -->
        </div>
    </div>
    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>
</html>