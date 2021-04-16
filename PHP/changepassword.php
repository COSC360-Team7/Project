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
$opass = null;
$npass = null;
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $opass= isset($_POST['oldpassword']) ? $_POST['oldpassword'] : null;
    $npass= isset($_POST['newpassword']) ? $_POST['newpassword'] : null;
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
    $epass= md5($opass);
    //good connection, so do you thing
    $sql = "SELECT * FROM users WHERE username='$uname' AND password='$epass';";

    $results = mysqli_query($connection, $sql);

    if(mysqli_num_rows($results)!=0){
        $enpass= md5($npass);
        $nsql= "UPDATE users SET password='$enpass' WHERE username='$uname' AND password='$epass';";
        if(mysqli_query($connection, $nsql)){
            header("Location: profile.php");
            echo "user's password has been updated";

        }

       /* while ($row = mysqli_fetch_assoc($results)) {
            echo $row['username'] . " " . $row['firstName'] . " " . $row['lastName'] . " " . $row['email'] . " " . $row['password'] . "<br/>";
        }*/
    }
    else {
        echo "username and/or password is invalid";
    }

    mysqli_free_result($results);
    mysqli_close($connection);
}
?>
</div>

</html>
