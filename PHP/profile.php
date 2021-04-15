<!DOCTYPE html>
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
             $fname= $row['firstName'] ;
            $lname= $row['lastName'];
            $email= $row['email'];
         }

    }
    else {
        $fname= "na" ;
        $lname= "na";
        $email= "na";
    }

    mysqli_free_result($results);
    mysqli_close($connection);
}
?>
<html lang="eng">
  <head>
    <meta charset="UTF-8">
    <!-- <meta name="viewprot" content="width=device-width"> -->
    <title>Coolblog - Sign up</title>
    <link rel="stylesheet" href="../css/profile.css"/>
    <link rel="stylesheet" href="../css/main.css"/>
    <script type="text/javascript" src="../JSFiles/validate.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/904eedb8ad.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="JSFiles/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../JSFiles/profile.js"></script>
</head>
<header>
  
    <div class="container full-width">
        <div class="flexbox align-items-center justify-content-between">
            <div class="contact-info">
                <ul class="justify-content-evenly">
                    <li><p>Contact Info:</p></li>
                    <li><a><i class="fas fa-phone-square"></i> 250-123-4567</a></li>
                    <li><a><i class="fas fa-envelope-square"></i> coolblog@cblog.com</a></li>
                </ul>
            </div>
            <div class="page-name">
                <a class="title" href="#">Cool<span> Blog</span></a>
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
                <li class="nav-title"><a href="../main.html">Home</a></li>
                <li class="nav-title"><a href="html/nav2.html">Popular</a></li>
                <li class="nav-title"><a href="html/nav3.html">Following</a></li>
                <li class="nav-title"><a href="PHP/profile.php">Profile</a></li>
                <li class="nav-title" id="login-btn" style="cursor: pointer;">Login</li>
                <li class="nav-title"><a href="PHP/profile.php">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>
  
<body>
  <section>
    <div class="profile-container">
      <table>
          <tbody id="here">
                <tr>
                    <td><h3>Name:</td>
                    <td><?php echo $fname." ".$lname ?></td>
                </tr>
                <tr>
                    <td><h3>Username:</td>
                    <td><?php echo $uname ?></td>
                </tr>
                <tr>
                    <td><h3>Username:</td>
                    <td>footballerman142</td>
                </tr>
                <tr>
                    <td><h3>Email:</td>
                    <td><?php echo $email ?></td>
                </tr>
                <tr>
                    <td><h3>Profile Picture:</td>
                    <td><img src="../images/profileIcon.svg"/></td>
                </tr>
                <tr>
                    <td>
                       
                        <input  type="file" name="changepicture" >
                        
                    </td>
                </tr>
                
                <tr>
                    <td style="text-align:center" colspan="2"><button class="button" type="submit" >Change Password</button></td>
                </tr>
                
                <tr>
                    <td><label for="oldpassword"><b>Old Password:</b></label></td>
                    <td><input type="password" name="oldpassword" id="oldpassword"></td>
                    
                </tr>
                <tr>
                    <td><label for="confirmpassword"><b>Confirm Password:</b></label></td>
                    <td><input type="password" name="comfirmpassword" id="confirmpassword"></td>
                    
                </tr>
                <tr>
                    <td><label for="newpassword"><b>New Password:</b></label></td>
                    <td><input type="password" name="newpassword" id="newpassword"></td>
                </tr>
                
                <tr>
                    <td><button class="saved-posts"><b >Saved Posts</b></button></td>
                    <td><div class=" saved-posts" id="new-post"><b>Make a new blog post</b></div></td>

                </tr>
                
          </tbody>
      </table>
    </div>
  </section>
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