<!DOCTYPE html>
<html>



<div>
<?php

$host = "localhost";
$database = "cosc360_project";
$user = "webuser";
$password = "P@ssw0rd";

$connection = mysqli_connect($host, $user, $password, $database);

$error = mysqli_connect_error();

$fname = null;
$lname = null;
$uname = null;
$email = null;
$pass = null;
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname= isset($_POST['firstname']) ? $_POST['firstname'] : null;
    $lname= isset($_POST['lastname']) ? $_POST['lastname'] : null;
    $uname= isset($_POST['username']) ? $_POST['username'] : null;
    $email= isset($_POST['email']) ? $_POST['email'] : null;
    $pass= isset($_POST['password']) ? $_POST['password'] : null;
}
else if($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "bad data being injected";
    exit();
}


if($error != null)
{
  $output = "<p>Unable to connect to database!</p>";
  exit($output);
}
else
{
    //good connection, so do you thing
    $sql = "SELECT * FROM users WHERE username='$uname' OR email='$email';";

    $results = mysqli_query($connection, $sql);

    if(mysqli_num_rows($results)!=0){
        echo "username and/or email already exists";
        echo "<p><a href='lab9-1.html'>Return</a></p>";
       /* while ($row = mysqli_fetch_assoc($results)) {
            echo $row['username'] . " " . $row['firstName'] . " " . $row['lastName'] . " " . $row['email'] . " " . $row['password'] . "<br/>";
        }*/
    }
    else {
        $epass= md5($pass);
        $nsql="INSERT INTO users VALUES ('$uname','$fname','$lname','$email','$epass', true);";
        //and fetch requsults
        /*while ($row = mysqli_fetch_assoc($results)) {
            echo $row['username'] . " " . $row['firstName'] . " " . $row['lastName'] . " " . $row['email'] . " " . $row['password'] . "<br/>";
        }*/

        if(mysqli_query($connection, $nsql)){
            echo "An account has been created";
        }
        else{
            echo "error";
        }

    }

    mysqli_free_result($results);
    mysqli_close($connection);
}
?>
</div>
<!--<p><?php
/*    echo $results.toString();
    echo $pass;
    */?></p>-->
</html>
