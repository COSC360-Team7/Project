<?php

$host = "localhost";
$database = "cosc360_project";
$user = "webuser";
$password = "P@ssw0rd";

$connection = mysqli_connect($host, $user, $password, $database);

$error = mysqli_connect_error();

$uname = $_COOKIE["user"];
$title = null;
$category= null;
$content= null;
$picture= null;
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $title= isset($_POST['posttitle']) ? $_POST['posttitle'] : null;
    $category= isset($_POST['category']) ? $_POST['category'] : null;
    $content= isset($_POST['blogcontent']) ? $_POST['blogcontent'] : null;
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
    $sql = "INSERT INTO blogs VALUES ('$uname','$title','$category','$picture','$content', null);";



    if(mysqli_query($connection, $sql)){
        /* while ($row = mysqli_fetch_assoc($results)) {
             echo $row['username'] . " " . $row['firstName'] . " " . $row['lastName'] . " " . $row['email'] . " " . $row['password'] . "<br/>";
         }*/
        header("Location: ../html/blogpost.html");
    }
    else {
        echo "not successful";
        echo $uname;
    }

    mysqli_close($connection);
}
?>
