<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
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
if(isset($_GET["temp"])){
    $_SESSION["title"] = $_GET["temp"];
}
$passed= $_SESSION["title"];



if($error != null){
    $output = "<p>Unable to connect to database!</p>";
    exit($output);
}
else
{

    //good connection, so do you thing
    $sql = "SELECT * FROM blogs WHERE title='$passed';";
    $results = mysqli_query($connection, $sql);

    if(mysqli_num_rows($results)!=0){
        //echo "username has a valid account";
        while ($row = mysqli_fetch_assoc($results)) {
            $category= $row['category'] ;
            $title= $row['title'];
            $content= $row['content'];
            $img= $row['picture'];
        }

    }
    else {
    }

    mysqli_free_result($results);
    mysqli_close($connection);
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coolblog</title>
    <link rel="stylesheet" href="../css/main.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/904eedb8ad.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="../JSFiles/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../JSFiles/validate2.js"></script>
</head>

<body>

<header>
    <div class="container">
        <div class="flexbox align-items-center justify-content-between">
            <div class="contact-info">
                <ul class="justify-content-evenly">
                    <li><p>Contact Info:</p></li>
                    <li><a><i class="fas fa-phone-square"></i> 250-123-4567</a></li>
                    <li><a><i class="fas fa-envelope-square"></i> coolblog@cblog.com</a></li>
                </ul>
            </div>
            <div class="page-name">
                <a class="title" href="../Main.php">Cool<span> Blog</span></a>
            </div>
            <div class="sns">
                <ul class="flexbox justify-content-evenly">
                    <li><a><i class="fab fa-twitter-square"></i></a></li>
                    <li><a><i class="fab fa-facebook-square"></i></a></li>
                    <li><a><i class="fab fa-flickr"></i></a></li>
                    <li><a><i class="fab fa-youtube-square"></i></a></li>
                </ul>
            </div>
        </div>
        <nav>
            <ul class="flexbox justify-content-center justify-content-evenly">
                <li class="nav-title"><a href="../Main.php">Home</a></li>
                <li class="nav-title"><a href="profile.php">Profile</a></li>
                <li class="nav-title"><a href="../html/sign-up.html">Sign up</a></li>
                <li class="nav-title" id="login-btn" style="cursor: pointer;">Login</li>
                <li class="nav-title"><a href="../PHP/logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="blog-banner text-align-center bgBlack colorPrimary">
    <h1><?php echo $title ?></h1>
</section>

<section class="blog-detail">
    <div class="img-container text-align-center">
    <img class="img-detail" alt="img-alt" src="<?php echo $img ?>">
    </div>
    <div class="blog-text">
        <h2><?php echo $title ?></h2>
        <p> <?php echo $content ?></p>
    </div>
    <div class="blog-text">
        <h2>Comments</h2>
        <div class="comments-container">
            <div class="comment"><p><b>Author: </b>Karen Vick <time><i><u>date posted</u></i></time></p>
                <p class="padding-comment">Wow watch your language</p>
            </div>
        </div>
    </div>
</section>

<footer class="bgDark colorWhite" style="margin:0">
    <div class="containeasdsadar" style="margin:0;">
        <div class="g-3-col">
            <div class="about-us text-align-center">
                <h3>About Us</h3>
                <p>We are students from UBCO taking COSC 360:Web Development course and this is our first web development project. Most of us are thrid year students and we work from different parts of the country</p>
                <p>If you have any questions you can email us via the contact info</p>

                <div class="sns">
                    <ul class="flexbox justify-content-evenly">
                        <li><a><i class="fab fa-twitter-square"></i></a></li>
                        <li><a><i class="fab fa-facebook-square"></i></a></li>
                        <li><a><i class="fab fa-flickr"></i></a></li>
                        <li><a><i class="fab fa-youtube-square"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="tags text-align-center">
            <div class="title-container">
                    <a class="title" href="Main.php">Cool<span> Blog</span></a> 
                </div>
            </div>
            <div class="tos text-align-center">
                <h3>Terms of Service</h3>
                <p>Please read the following terms and conditions carefully.</p>
                <p>By accessing Cool Blog website,mobile or tablet application, you agree to be bound by our terms and conditions.</p>
            </div>
        </div>
        <div class="copyright text-align-center">
            <p>Made by COSC360 &copy;All rights reserved</p>
        </div>
    </div>
</footer>



</body>
<script type="text/javascript" src="../JSFiles/mainPage.js"></script>

</html>