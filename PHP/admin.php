<!DOCTYPE html>
<html lang="eng">
<body>
<?php
$host = "localhost";
$database = "cosc360_project";
$user = "webuser";
$password = "P@ssw0rd";

$connection = mysqli_connect($host, $user, $password, $database);

$error = mysqli_connect_error();

$uname = $_COOKIE["user"];
$admin= null;



if($error != null)
{
    $output = "<p>Unable to connect to database!</p>";
    exit($output);
}
else
{

    //good connection, so do you thing
    $sql = "SELECT * FROM users WHERE username='$uname';";

    $results = mysqli_query($connection, $sql);

    if(mysqli_num_rows($results)!=0){
        //echo "username has a valid account";
        while ($row = mysqli_fetch_assoc($results)) {
            $admin= $row['admin'] ;
        }
        if($admin==false){
            echo '<script type="text/javascript">
                alert("You are not an admin");
                window.location.href="../Main.php";
                </script>';
        }
        if($admin==true){
            header("Location: ../admin/post.php");
        }

    }
    else {
        echo '<script type="text/javascript">
                alert("Not logged in");
                window.location.href="../Main.php";
                </script>';
        //header("Location: ../main.html");
    }

    mysqli_free_result($results);
    mysqli_close($connection);
}
?>


</body>
</html>