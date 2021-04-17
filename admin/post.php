<!DOCTYPE html>
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

$blog1 = [
    "title" => "bar",
    "user" => "foo",
    "category" => "foo",
];
$blog2 = [
    "title" => "bar",
    "user" => "foo",
    "category" => "foo",
];
$blog3 = [
    "title" => "bar",
    "user" => "foo",
    "category" => "foo",
];
$blog4 = [
    "title" => "bar",
    "user" => "foo",
    "category" => "foo",
];
$blog5 = [
    "title" => "bar",
    "user" => "foo",
    "category" => "foo",
];
$blog6 = [
    "title" => "bar",
    "user" => "foo",
    "category" => "foo",
];
$blog7 = [
    "title" => "bar",
    "user" => "foo",
    "category" => "foo",
];
$blog8 = [
    "title" => "bar",
    "user" => "foo",
    "category" => "foo",
];
$blog9 = [
    "title" => "bar",
    "user" => "foo",
    "category" => "foo",
];

$numrows= null;


if($error != null){
    $output = "<p>Unable to connect to database!</p>";
    exit($output);
}
else
{

    //good connection, so do you thing
    $sql = "SELECT * FROM blogs;";
    $results = mysqli_query($connection, $sql);
    $numrows= mysqli_num_rows($results);

    if(mysqli_num_rows($results)!=0){
        //echo "username has a valid account";
        $count =1;
        while ($row = mysqli_fetch_assoc($results)) {
            ${'blog' . $count}['user']= $row['username'] ;
            ${'blog' . $count}['title']= $row['title'];
            //$content= $row['content'];
            ${'blog' . $count}['picture']= $row['picture'];
            $count ++;
        }

    }
    else {
    }

    mysqli_free_result($results);
    mysqli_close($connection);


}
?>
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
                <h3 class="admin-title">Manage Posts</h3>
                <table>
                    <thead>
                        <th>Number</th>
                        <th>Title</th>
                        <th>Username</th>
                        <th colspan="2">Manage</th>
                    </thead>
                    <tbody>
                    <?php
                    for ($x = 1; $x < $numrows; $x++) {
                        echo ' <tr>
                            <td>'.$x.'</td>
                            <td>'.${'blog' . $x}["title"].'</td>
                            <td>'.${'blog' . $x}["user"].'</td>
                            <td><a href="#"class="edit">edit</a></td>
                            <td><a href="removepost.php?titl='.${'blog' . $x}["title"].'"class="remove">remove</a></td>
                        </tr>';
                    }

                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
</body>

</html>