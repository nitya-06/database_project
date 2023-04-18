<?php
ini_set('display_errors', 1);
error_reporting(-1);
// ini_set('display_errors', 1);
// error_reporting(-1);
// session_start();
// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect('localhost', 'root', 'Ashutosh@2003', 'db_project');
// Check connection
if ($conn === false) {
    echo 'ERROR: Could not connect. ';
    die('ERROR: Could not connect. ' . mysqli_connect_error());
}
if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;
    }

    $email = validate($_POST['email']);

    $pass = validate($_POST['password']);
    $role = $_POST['role'];

    if (empty($email)) {
        echo("empty email");
        $_SESSION['error'] = "Email is required";
        header('Location: login.php?error=Email is required');

        exit();
    } elseif (empty($pass)) {
        $_SESSION['error'] = "Password is required";

        header('Location: login.php');

        exit();
    } else {
        echo($email);
        echo($role);
        session_start();
        $_SESSION['error'];
    $_SESSION['error1']="";
        if($role === "stud"){
        $sql = "SELECT * FROM Student WHERE Email='$email' AND Password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['Email'] === $email && $row['Password'] === $pass) {
                echo 'Logged in!';
                session_start();
                // $_SESSION['error'] = "no";
                $_SESSION['eligible']=0;
                if($row['Gender']!=''){
                $_SESSION['eligible']=1;}

                $_SESSION['logged_in'] = true;
                $_SESSION['person']="student";
                $_SESSION['email'] = $row['Email'];
                $_SESSION['password'] = $row['Password'];
                $_SESSION['name'] = $row['Name'];
                $_SESSION['rollno'] = $row['RollNo'];
                // echo "$email";

                header('Location: index_after_login_stud.php');
            } else {
                $_SESSION['error'] = "Incorrect Email or Password";
                header(
                    // $_SESSION['error']
                    'Location: login.php'
                );

                exit();
            }
        } else {
            // echo("ko");
            $_SESSION['error'] = "Incorrect Email or Password";
            header(
                'Location: login.php'
            );

            exit();
        }
    }
            if($role === "alumni"){
        $sql = "SELECT * FROM Alumni WHERE Email='$email' AND Password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['Email'] === $email && $row['Password'] === $pass) {
                echo 'Logged in!';
                session_start();
                $_SESSION['logged_in'] = true;
                $_SESSION['person']="alumni";
                $_SESSION['email'] = $row['Email'];
                $_SESSION['password'] = $row['Password'];
                $_SESSION['name'] = $row['Name'];
                $_SESSION['rollno'] = $row['RollNo'];
                echo "$email";

                header('Location: index_after_login_alumni.php');
            } else {
                
                $_SESSION['error'] = "Incorrect Email or Password";
                header(
                    // 'Location: login.php?error=Incorrect Email or Password'
                    'Location: login.php'
                );

                exit();
            }
        } else {
            $_SESSION['error'] = "Incorrect Email or Password";
            header(
                'Location: login.php'
            );

            exit();
        }
    }
    if($role === "comp"){
        $sql = "SELECT * FROM Company WHERE Email='$email' AND Password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['Email'] === $email && $row['Password'] === $pass) {
                // echo 'Logged in!';
                session_start();
                $_SESSION['eligible']=0;
                if($row['c_field']!=''){
                    $_SESSION['eligible']=1;}
                $_SESSION['logged_in'] = true;
                $_SESSION['person']="company";
                $_SESSION['email'] = $row['Email'];
                $_SESSION['password'] = $row['Password'];
                $_SESSION['name'] = $row['Company_name'];
                // echo($row['Company_name']);
                // exit();
                // echo "$email";

                header('Location: index_after_login_comp.php?comp_name='.$row['Company_name']);
            } else {
            $_SESSION['error'] = "Incorrect Email or Password";
                header(
                    'Location: login.php'
                );

                exit();
            }
        } else {
            $_SESSION['error'] = "Incorrect Email or Password";
            header(
                'Location: login.php?'
            );

            exit();
        }
    }
    if($role==="admin"){
        if($email==="iitpjj@iitp.ac.in" && $pass==="123456789"){
            session_start();
            $_SESSION['logged_in'] = true;
            header(
                'Location: home_admin.php?'
            );
            exit();
        }
        else{
            $_SESSION['error'] = "Incorrect Email or Password";
            header(
                'Location: login.php?'
            );

            exit();
        }

    }
    
    }
} else {
    header('Location: login.php');

    exit();
}
?>
<br>
<!-- <label>Name</label>

<input type="text" name="name" placeholder="name"><br>
<label>Department</label>

<input type="text" name="Department" placeholder="department"><br> -->