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

$uname = $_COOKIE["user"];
$fname = null;
$lname = null;
$email = null;
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname= isset($_POST['newfirstname']) ? $_POST['newfirstname'] : null;
    $lname= isset($_POST['newlastname']) ? $_POST['newlastname'] : null;
    $email= isset($_POST['newemail']) ? $_POST['newemail'] : null;
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
    echo "success";
    //good connection, so do you thing
    $sql = "SELECT * FROM users WHERE username='$uname';";

    $results = mysqli_query($connection, $sql);

    if(mysqli_num_rows($results)!=0){
        if($fname!=null){
            $nsql= "UPDATE users SET firstname='$fname' WHERE username='$uname';";
            mysqli_query($connection, $nsql);

        }
        if($lname!=null){
            $nsql= "UPDATE users SET lastname='$lname' WHERE username='$uname';";
            mysqli_query($connection, $nsql);
        }
        if($email!=null){
            $nsql= "UPDATE users SET email='$email' WHERE username='$uname';";
            mysqli_query($connection, $nsql);
        }
        header("Location: profile.php");
       /*while ($row = mysqli_fetch_assoc($results)) {
            echo $row['username'] . " " . $row['firstName'] . " " . $row['lastName'] . " " . $row['email'] . " " . $row['password'] . "<br/>";
        }*/
    }
    else{
        echo 'error';
    }


    mysqli_free_result($results);
    mysqli_close($connection);
}
?>
</div>

</html>
