
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
$email = $_SESSION['email'];
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
    $mode_of_interview = $_POST['mode_of_interview'];
    $field = $_POST['field'];
    $recruiting_since = $_POST['recruiting_since'];
    $ctc = $_POST['ctc'];
    $marks_10 = $_POST['10th_marks'];
    $marks_12 = $_POST['12th_marks'];
    $cpi = $_POST['cpi'];
    $Interest = $_POST['interest'];
    $ctc = $_POST['ctc'];
    
    $sql = "SELECT * FROM Company WHERE Email='$email'";
    $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) === 1) {
        $sql1 = "UPDATE Company set mode_interview = '$mode_of_interview' , c_field='$field', recrting_since='$recruiting_since', ctc='$ctc',  Interest='$Interest' where Email='$email'";
        $sql2 = "UPDATE  Company_marks set  10th_marks = '$marks_10', 12th_marks='$marks_12' ,cpi='$cpi' where Email='$email'";
        $_SESSION['eligible']=1;
        } else {
            header(
                'Location: login.php?error=Incorect User name or password'
            );

            exit();
        }
        if (mysqli_query($conn, $sql1) && mysqli_query($conn,$sql2) ) {
            header('Location: index_after_login_comp.php');
            die();

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