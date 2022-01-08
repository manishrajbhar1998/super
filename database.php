<?php
session_start();
// echo "great going - 1<br>";
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "superfiberglass";
$db_port = 3307;

// Create Connection
mysqli_report(MYSQLI_REPORT_STRICT);
try {
    $con = new mysqli($db_host,$db_user,$db_password,$db_name,$db_port);
    // echo "Connection established succssfully";
    // echo "<br>great going-2<br>";
    $regmsg;

    if(isset($_POST['submit'])){
        // echo "great going - 3<br>";

        // Checking all Field should not be empty (if empty then if condition work other wise else condition)
        if(($_POST['email'] == "") || ($_POST['number'] == "") || ($_POST['query'] == "")){
    
            $regmsg = "<div class='alert alert-danger mt-2' role='alert'>All Fields are Required</div>";
            // echo "<script> location.href='index.php'</script>";

        }else{
            // takeing all name value;
            $email = $_POST['email'];
            $number = $_POST['number'];
            $query = $_POST['query'];
    
                $sql1 = "INSERT INTO customerquery(email,phoneNumber,query) VALUES('$email','$number','$query')";
                $exec = $con->query($sql1);
    
                // if sql1 query executed successfully
                if($exec == TRUE){
                    $regmsg = "<div class='alert alert-success mt-2' role='alert'>Thanks for interset we will connect you within 24 hour</div>";
                    // if query not successfull
                }else{
                    $regmsg = "<div class='alert alert-warning mt-2' role='aler'>Unable send query</div>";
                }
            
            
            // $_SESSION['msg'] = 'hello';
            // echo "<script> location.href='index.php'</script>";
        
        }
        echo  $regmsg;
    }
    
} catch (Exception $ex) {
    echo "Connection Failed : ".$ex->getMessage();
}    
?> 

