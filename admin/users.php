<?php


$host = "localhost";
$database = "cosc360_project";
$user = "webuser";
$password = "P@ssw0rd";

$connection = mysqli_connect($host, $user, $password, $database);

$error = mysqli_connect_error();

$uname = $_COOKIE["user"];
$category = null;
$title = null;
$content = null;
$img= null;
//$_SESSION["title"];

$user= array();
$numrows= null;


if($error != null){
    $output = "<p>Unable to connect to database!</p>";
    exit($output);
}
else
{

    //good connection, so do you thing
    $sql = "SELECT * FROM users;";
    $results = mysqli_query($connection, $sql);
    $numrows= mysqli_num_rows($results);

    if(mysqli_num_rows($results)!=0){
        //echo "username has a valid account";
        $count =1;
        while ($row = mysqli_fetch_assoc($results)) {
            $user[$count]= $row['username'] ;
            $count ++;
        }

    }
    else {
    }

    mysqli_free_result($results);
    mysqli_close($connection);


}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" href="../css/admin.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/904eedb8ad.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="../JSFiles/jquery-3.1.1.min.js"></script>
</head>

<body >
<header>
    <div class="container">
            <div class="page-name">
                <a class="title" href="../Main.php">Cool<span> Blog</span></a>
            </div>
        </div>
        
    </div>
</header>
    <div class="admin-wrapper">


       
        <div class="sidebar">
            <ul>
                <li><a href="post.php">Manage Posts</a></li>
                <li><a href="users.php">Manage Users</a></li>
            </ul>
            

        </div>
        <div class="admin-content">
            <div class="content">
                <h3 class="admin-title">Manage Users</h3>
                <table>
                    <thead>
                        <th>Number</th>
                        <th>Username</th>
                        <th>UserId</th>
                        <th colspan="2">Manage</th>
                    </thead>
                    <tbody>
                    <?php
                    for ($x = 1; $x <= $numrows; $x++) {
                        echo ' <tr>
                            <td>'.$x.'</td>
                            <td>'.$user[$x].'</td>
                            <td> ? </td>
                            <td><a href="#"class="edit">edit</a></td>
                            <td><a href="removeuser.php?use='.$user[$x].'"class="remove">remove</a></td>
                        </tr>';
                    }

                    ?>
                    </tbody>
                </table>
                <div class="admin-button">
                <a href="users.php" class="admin-btn">Manage Users</a>
                <a href="search.html" class="admin-btn">Search Users</a>
            </div>
            </div>
        </div>
    </div>    
</body>

</html>