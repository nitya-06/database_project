<!DOCTYPE html>
<html>

<head>
    <title>Register | Job Junction</title>
</head>

<body>
    <center>
        <?php
        ini_set('display_errors', 1);
        error_reporting(-1);
        session_start();
        $_SESSION['error'];
        $conn = mysqli_connect('localhost', 'root', 'Ashutosh@2003', 'db_project');
        // Check connection
        if ($conn === false) {
            echo 'ERROR: Could not connect. ';
            die('ERROR: Could not connect. ' . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $Name = $_REQUEST['Name'];
        $RollNo = $_REQUEST['RollNo'];
        $Email = $_REQUEST['Email'];
        $password = $_REQUEST['password'];
        $cnfpassword = $_REQUEST['confirm_password'];
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $EmailErr = "Invalid Email format";
}
// echo $Name;
        // Performing insert query execution
        // here our table name is college
        if(strlen($password)<8){
            $_SESSION['error']="Minimum password length is 8";

            header(
                'Location: register_alumni.php'
            );
            // echo "password must be atleast 8 character";
            exit();
        }
        if($cnfpassword === $password)
        {$sql = "INSERT INTO Alumni(Name, RollNo , Email, password) VALUES ('$Name','$RollNo','$Email','$password')";
        $sql1 = "INSERT into Alumni_marks(RollNo) values('$RollNo')";    
        }
        else
        {
            $_SESSION['error']="Password not matched";

            header(
                'Location: register_alumni.php'
            );
            // echo "password not matched";
            exit();
        }
        // mysqli_query($conn, $sql);
        if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)) {
            // function redirect($url) {
                header('Location: login.php');
                die();
            // }            // echo '<h3>data stored in a database successfully.' .
            //     ' Please browse your localhost php my admin' .
            //     ' to view the updated data</h3>';
            // echo 'Connected successfully  ';

            // echo nl2br(
            //     "\n$Name\n $RollNo\n $Email\n $password\n "
            // );
        } else {
            // echo '<h3>data stored in </h3>';
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
        <!-- <form action="login.php">
            <button type="submit">
                login page
            </button>
        </form> -->
    </center>

</body>

</html>