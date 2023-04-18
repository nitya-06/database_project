
<?php
ini_set('display_errors', 1);
error_reporting(-1);
// ini_set('display_errors', 1);
// error_reporting(-1);
// echo("hello");
// session_start();
// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect('localhost', 'root', 'Ashutosh@2003', 'db_project');
// Check connection
session_start();
if ($conn === false) {
    echo 'ERROR: Could not connect. ';
    die('ERROR: Could not connect. ' . mysqli_connect_error());
}
$name = $_SESSION['name'];
$rollno = $_SESSION['rollno'];
// echo($name1);
if(1){
    function validate($data)
    {
        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;
    }

    // $name = validate($_POST['Name']);
    // $rollno = validate($_POST['RollNo']);
    $gender = $_POST['gender'];
    $comp_name = $_POST['comp_name'];
    $degree = $_POST['degree'];
    $branch = $_POST['branch'];
    $batch_year = $_POST['batch_year'];
    $marks_10 = $_POST['10th_marks'];
    $marks_12 = $_POST['12th_marks'];
    $cpi = $_POST['cpi'];
    $Interest = $_POST['interset'];
    $ctc = $_POST['ctc'];
    $location = $_POST['location'];
    $working_tenure = $_POST['working_tenure'];
    
    
    $sql = "SELECT * FROM Alumni WHERE RollNo='$rollno'";
    $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) === 1) {
         $sql2 = "UPDATE  Alumni_marks set  10th_marks = '$marks_10', 12th_marks='$marks_12' ,cpi='$cpi' where RollNo='$rollno'";
         $sql1 = "UPDATE Alumni set Gender = '$gender' , Company_name='$comp_name', degree='$degree', branch='$branch', batch_year='$batch_year', area_of_working='$Interest', Ctc='$ctc', Location='$location', working_tenure='$working_tenure' where RollNo='$rollno'";
        } else {
            header(
                'Location: login.php?error=Incorect User name or password'
            );

            exit();
        }
        if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)) {
            header('Location: index_after_login_alumni.php');
            die();
            // echo '<h3>data stored in a database successfully.' .
            //     ' Please browse your localhost php my admin' .
            //     ' to view the updated data</h3>';
            // echo 'Connected successfully  ';
            // echo ("<button type='button' onclick='location.href=`index_after_login_stud.php`'>Go to Home Page</button>");
        } else {
            echo '<h3>data stored in </h3>';
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }

}