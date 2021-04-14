<!DOCTYPE html>
<html lang="eng">
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
    <form method="POST" action="../PHP/newuser.php" id="form">
      <div style="margin: auto;">
        <div class="input-box" >
          <p><label>First Name:</label></p>
            <input class="required" type="text" name="firstname">
        </div>
        <div class="input-box" >
          <p><label>Last Name:</label></p>
          <input class="required" type="text" name="lastname">
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