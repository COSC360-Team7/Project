<!DOCTYPE html>
<html>




<?php

$host = "localhost";
$database = "cosc360_project";
$user = "webuser";
$password = "P@ssw0rd";

$connection = mysqli_connect($host, $user, $password, $database);

$error = mysqli_connect_error();
$output = "wtf";
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
{   echo "reached here inside else";
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
            $output = "An account has been created";
        }
        else{
            echo "error";
        }

    }

    mysqli_free_result($results);
    mysqli_close($connection);
}
?>
  <head>
    <meta charset="UTF-8">
    <!-- <meta name="viewprot" content="width=device-width"> -->
    <title>Coolblog - Sign up</title>
    <link rel="stylesheet" href="../css/sign-up.css"/>
    <link rel="stylesheet" href="../css/main.css"/>
    <script type="text/javascript" src="../JSFiles/validate.js"></script>
</head>
<header>
  <div class="page-title">
    <p>Sign up!</p>
  </div>
  
</header>
<body>
  <div class="form">
    <form method="post" action="../PHP/newuser.php" id="form">
      <div style="margin: auto;">
        <div class="input-box" >
          <p><label>First Name:</label></p>
            <input class="required" type="text" name="firstname">
        </div>
        <div class="input-box" >
          <p><label>Last Name:</label></p>
          <input class="required" type="text" name="lastname">
        </div>
        <div class="input-box">
          <p><label>Username:</label></p>
            <input class="required" type="text" name="username">
        </div>
        <div class="input-box" style="clear:left;">
          <p><label>Email:</label></p>
            <input class="required" type="text" name="email">
        </div>
        <div class="input-box">
          <p><label>Password:</label></p>
            <input class="required" type="password" name="password">
        </div>
        <div class="input-box" style="clear:left;">
          <p><label>Confirm Password:</label></p>
            <input class="required" type="password" name="confirmpassword">
        </div>
    </div>
    <div style="clear:left;padding-top:5px;">
      <p><label>Profile Picture/Avatar: </label></p>
      <p><img class="proifle-pic" src="../images/profileIcon.svg"></p>
      <label for="file-upload" class="custom-file-upload">
        <i class="fa fa-cloud-upload"></i>Upload Picture
      </label>
      <input id="file-upload" type="file"/>
      <p>
        <button class="submit-btn" type="submit">Sign me up!</button>
      </p>
      <?php
        if(!empty($output))
            echo $output;
        echo $output;
      ?>
    </div>
    </form>
  </div>
</body>
<footer class="bgDark colorWhite">
  <div class="container">
      <div class="g-3-col">
          <div class="about-us text-align-center">
              <h3>About Us</h3>
              <div class="title-container">
                  <a class="title" href="#">Cool<span> Blog</span></a> 
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eaque porro magni in molestias quod necessitatibus amet dolorum aliquam, voluptatibus odio rerum laudantium sit eos eveniet labore omnis exercitationem consectetur?</p>
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
              <h3>Tags</h3>
              <ul class="flexbox">
                  <li class="tag"><a>Tag1</a></li>
                  <li class="tag"><a>Tag2</a></li>
                  <li class="tag"><a>Tag3</a></li>
                  <li class="tag"><a>Tag4</a></li>
                  <li class="tag"><a>Tag5</a></li>
                  <li class="tag"><a>Tag6</a></li>
                  <li class="tag"><a>Tag7</a></li>
              </ul>
          </div>
          <div class="tos text-align-center">
              <h3>Terms of Service</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci dolor nemo possimus blanditiis, delectus eius rerum fuga ipsa, odit voluptates atque asperiores ratione vero debitis, sit voluptatem neque distinctio labore.</p>
          </div>
      </div>
      <div class="copyright text-align-center">
          <p>Made by ... &copy;All rights reserved</p>
      </div>
  </div>
</footer>
<script type="text/javascript" src="validate.js"></script>
</html>