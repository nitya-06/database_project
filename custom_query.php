<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
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
    <title>Custom Query | Job Junction</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    padding: 20px;
    background-color: #f8f9fa;
}

.container {
    max-width: 800px;
    margin: 0 auto;
}

h1 {
    margin-bottom: 20px;
    text-align: center;
    color: #007bff;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

textarea {
    width: 98%;
    /* height: 150px; */
    resize: none;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    
}

.input-container {
    display: flex;
    justify-content: flex-end;
}

input[type="submit"] {
    margin-top: 10px;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
}

th,
td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

th {
    background-color: #f8f9fa;
    font-weight: bold;
}

tr:hover {
    background-color: #f8f9fa;
}

.error {
    color: #ff0000;
}
.submit_btn{
    background-color: #88E05E !important;
    font-size:large;
}
.submit_btn:hover{
    background-color: green !important;
}
h1{
    margin-top:15vh;
    color: #88E05E !important;
}

    </style>
</head>
<body>
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
                        <a class="nav-link" href="all_companies_admin.php">Companies</a>
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
                        <a class="nav-link active" href="custom_query.php">Custom Query</a>
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
    <h1></h1>
    <form method="post">
        <label for="query"><h5>Enter MySQL Query:</h5></label><br>
        <textarea id="query" name="query" ></textarea><br>
        <center><input class="submit_btn" type="submit" value="Submit"></center>
    </form>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the query from the form data
        $query = $_POST["query"];

        $servername = "localhost";
        $username = "root"; // Replace with your MySQL username
        $password = "Ashutosh@2003"; // Replace with your MySQL password
        $dbname = "db_project"; // Replace with your MySQL database name
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Execute the MySQL query
        $result = $conn->query($query);

        // Check if the query executed successfully
        if ($result) {
            // Display the query result
            if ($result->num_rows > 0) {
                echo "<table>";
                // Print column names
                echo "<tr>";
                $field_info = $result->fetch_fields();
                foreach ($field_info as $field) {
                    echo "<th>" . $field->name . "</th>";
                }
                echo "</tr>";
                // Print row data
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    foreach ($row as $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No results found.";
            }
        } else {
            echo "Error executing query: " . $conn->error;
        }

        // Close database connection
        $conn->close();
    }
    ?>
</body>
</html>
