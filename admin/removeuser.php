<?php


$host = "localhost";
$database = "cosc360_project";
$user = "webuser";
$password = "P@ssw0rd";

$connection = mysqli_connect($host, $user, $password, $database);

$error = mysqli_connect_error();

$uname = $_COOKIE["user"];
$category = null;
$user = $_GET["use"];


//$_SESSION["title"];



if ($error != null) {
    $output = "<p>Unable to connect to database!</p>";
    exit($output);
} else {

    //good connection, so do you thing
    $sql = "DELETE FROM users WHERE username= '$user';";
    mysqli_query($connection, $sql);


    if (mysqli_query($connection, $sql)) {
        //echo "username has a valid account";
        header("Location: users.php");

    } else {
        echo "could not delete";
    }

    mysqli_close($connection);


}
?>