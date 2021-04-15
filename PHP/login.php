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

$uname = null;
$pass = null;
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname= isset($_POST['username']) ? $_POST['username'] : null;
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
    $epass= md5($pass);
    //good connection, so do you thing
    $sql = "SELECT * FROM users WHERE username='$uname' AND password='$epass';";

    $results = mysqli_query($connection, $sql);

    if(mysqli_num_rows($results)!=0){
        echo "username has a valid account";
       /* while ($row = mysqli_fetch_assoc($results)) {
            echo $row['username'] . " " . $row['firstName'] . " " . $row['lastName'] . " " . $row['email'] . " " . $row['password'] . "<br/>";
        }*/
        header("Location: profile.php");
        $cookie_name = "user";
        $cookie_value = $uname;
        setcookie($cookie_name, $cookie_value);
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
