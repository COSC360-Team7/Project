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
$img= null;



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
            $img= $row['pfp'];
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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/904eedb8ad.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="../JSFiles/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../JSFiles/profile.js"></script>
      <script type="text/javascript" src="../JSFiles/validate2.js"></script>
      <script>
          function checkPasswordMatch(e){
              var pass= document.getElementById("password").value;
              var cpass= document.getElementById("confirmpassword").value;
              if(pass != cpass){
                  makeRed(document.getElementById("password"));
                  makeRed(document.getElementById("confirmpassword"));
                  alert("passwords dont match :(");
                  e.preventDefault();
              }
              /*else if(pass == cpass){
                form submit
              }*/
          }
      </script>
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
                <!--<li class="nav-title"><a href="PHP/profile.php">Profile</a></li>-->
                <li class="nav-title" id="login-btn" style="cursor: pointer;">Login</li>
                <li class="nav-title"><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>
  
<body>
  <section>
    <div class="profile-container">
      <table >
          <tbody>
                <tr>
                    <td><h3> First Name:</td>
                    <td><?php echo $fname ?></td>
                </tr>
                <tr>
                    <td><h3>last Name:</td>
                    <td><?php echo $lname ?></td>
                </tr>
                <tr>
                    <td><h3>Username:</td>
                    <td><?php echo $uname ?></td>
                </tr>

                <tr>
                    <td><h3>Email:</td>
                    <td><?php echo $email ?></td>
                </tr>
                <tr>
                    <td><h3>Profile Picture:</td>
                    <td><img src="<?php echo $img ?>" style="width:200px;border-radius:50%"/></td>
                </tr>
            </tbody>
        </table>
        <div class="change-password-form">
            <form method="POST" action="changename.php">
                <div class="input-box">
                    <label>Change Email:</label>
                    <input type="text" name="newemail">
                </div>
                <div class="input-box">
                    <label>Change First Name:</label>
                    <input type="text" name="newfirstname">
                </div>
                <div class="input-box">
                    <label>Change Last Name:</label>
                    <input type="text" name="newlastname">
                    <p><input class="button" type="submit" value="Submit"></p>
                </div>

            </form>
        </div>
        <div class="change-password-form" style="clear:left">
            <form  method="POST" action="changepassword.php" id="form">
                <p style="text-align:center"><input type="submit" value="Change Password" class="button"></p>
                <div class="input-box">
                    <label style="display:block; text-align:center;" for="oldpassword"><b>Old Password:</b></label>
                    <input type="password" name="oldpassword" id="oldpassword" class="required">
                </div><br>
                <div class="input-box">     
                    <label style="display:block; text-align:center;" for="newpassword"><b>New Password:</b></label>
                    <input type="password" name="newpassword" id="password" class="required">
                </div>
                <div class="input-box" style="clear:left">
                    <label style="display:block; text-align:center;" for="confirmpassword"><b>Confirm Password:</b></label>
                    <input type="password" name="comfirmpassword" id="confirmpassword" class="required">
                </div>
            </form>     
        </div>           
        <div id="posts-btns" class="saved-posts-container" >
            <span style="margin-right:72%" class="button span"><b>Saved Posts</b></span>
            <span id="new-post" style="text-align:right" class="button span"><b>New Posts</b></span>
        </div>
        
        <div id="post" style="display:none" class="profile-posts-container"><p style="margin-left:5em" id="close">X</p>
          <form>
            <div class="input-box" > 
                <p><label for="posttitle"><b>Blog Title:</b></label></p>
                <input id="posttitle" type="text" name="posttitle">
            </div>
            <div class="input-box">
                <p><label for="category"><b>Blog Category:</b></label></p>
                <input id="postcategory" type="text" name="category" placeholder="fashion, sports, movies">
            </div>
            
            <div class="input-box" >
                <p><label for="postcontent"><b>Blog Content:</b></label></p>
                <textarea id="postcontent" rows="8" cols="70" name="blogcontent"></textarea>
            </div>
          </form>
        </div>
     
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
<script type="text/javascript">
    var newpostbtn = $("#new-post");
    //shows the form for a new blog post
    newpostbtn.on("click", function(e){
    var div = $('<div id="post" class="profile-posts-container"><p style="margin-left:5em" id="close">X</p>'+
        '<form method="POST" action="newblog.php"><div class="input-box" > '+
                '<p><label for="posttitle"><b>Blog Title:</b></label></p>'+
                '<input id="posttitle" type="text" name="posttitle">'+
                '</div>'+
            '<div class="input-box">'+
                '<p><label for="category"><b>Blog Category:</b></label></p>'+
                '<input id="postcategory" type="text" name="category" placeholder="fashion, sports, movies">'+
            '</div>'+
            
            '<div class="input-box" >'+
                '<p><label for="postcontent"><b>Blog Content:</b></label></p>'+
                '<textarea id="postcontent" rows="8" cols="70" name="blogcontent"></textarea>'+
            '</div>'+
            '<div class="input-box"><input class="button" style="padding:3px;height:fit-content" type="submit" value="Make new post"></div></form></div>');
   
    // $("#posts-btns").after(div);
    $("#post").slideDown();
    
    //closes the new post form
    $("#close").on("click",(function(e){
      $("#post").slideUp(600);
    //   $("#post").remove();
      console.log("this method is called");
      // e.preventDefault();
    
    }));
  });
</script>
</html>