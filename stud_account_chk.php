
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
    $gender = $_POST['Gender'];
    $dob = $_POST['DOB'];
    $degree = $_POST['Degree'];
    $branch = $_POST['Branch'];
    $batch_year = $_POST['Batch_year'];
    $marks_10 = $_POST['10th_marks'];
    $marks_12 = $_POST['12th_marks'];
    $cpi = $_POST['CPI'];
    $Interest = $_POST['Interest'];
    $ctc = $_POST['CTC'];
    $_SESSION['error1']="";
    
    $sql = "SELECT * FROM Student WHERE RollNo='$rollno'";
    $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) === 1) {
        $sql1 = "UPDATE Student set Gender = '$gender' , dob='$dob', degree='$degree', branch='$branch', batch_year='$batch_year', Interest='$Interest', Ctc='$ctc' where RollNo='$rollno'";
        
        $sql2 = "UPDATE  Student_marks set  10th_marks = '$marks_10', 12th_marks='$marks_12' ,cpi='$cpi' where RollNo='$rollno'";
    } else {
            header(
                'Location: login.php?error=Incorect User name or password'
            );

            exit();
        }
        if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)) {
            $_SESSION['eligible']=1;
            header('Location: index_after_login_stud.php');
            die();
            // header('Location: index_after_login_stud.php');
            // echo '<h3>data stored in a database successfully.' .
            //     ' Please browse your localhost php my admin' .
            //     ' to view the updated data</h3>';
            // echo 'Connected successfully  ';
            // echo ("<button type='button' onclick='location.href=`index_after_login_stud.php`'>Go to Home Page</button>");
        } else {
            // echo '<h3>data stored in </h3>';
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }

}