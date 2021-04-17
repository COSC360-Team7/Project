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
//$_SESSION["title"];

$blog1 = [
    "title" => "bar",
    "picture" => "foo",
    "category" => "foo",
];
$blog2 = [
    "title" => "bar",
    "picture" => "foo",
    "category" => "foo",
];
$blog3 = [
    "title" => "bar",
    "picture" => "foo",
    "category" => "foo",
];
$blog4 = [
    "title" => "bar",
    "picture" => "foo",
    "category" => "foo",
];
$blog5 = [
    "title" => "bar",
    "picture" => "foo",
    "category" => "foo",
];
$blog6 = [
    "title" => "bar",
    "picture" => "foo",
    "category" => "foo",
];
$blog7 = [
    "title" => "bar",
    "picture" => "foo",
    "category" => "foo",
];
$blog8 = [
    "title" => "bar",
    "picture" => "foo",
    "category" => "foo",
];
$blog9 = [
    "title" => "bar",
    "picture" => "foo",
    "category" => "foo",
];




if($error != null){
    $output = "<p>Unable to connect to database!</p>";
    exit($output);
}
else
{

    //good connection, so do you thing
    $sql = "SELECT * FROM blogs;";
    $results = mysqli_query($connection, $sql);

    if(mysqli_num_rows($results)!=0){
        //echo "username has a valid account";
        $count =1;
        while ($row = mysqli_fetch_assoc($results)) {
            ${'blog' . $count}['category']= $row['category'] ;
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
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coolblog</title>
    <link rel="stylesheet" href="css/main.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/904eedb8ad.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="JSFiles/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="JSFiles/validate2.js"></script>
    
    <script>
        function checkPasswordMatch(e){
            var pass= document.getElementById("password").value;
            var cpass= document.getElementById("password-check").value;
            if(pass != cpass){
                makeRed(document.getElementById("password"));
                makeRed(document.getElementById("password-check"));
                alert("passwords dont match :(");
                e.preventDefault();
            }
            /*else if(pass == cpass){
              form submit
            }*/
        }
    </script>
</head>

<body >

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
        
    </div>
</header>
<nav>
    <ul class="flexbox justify-content-center justify-content-evenly">
        <li class="nav-title"><a href="Main.html">Home</a></li>
        <li class="nav-title"><a href="html/popular.html">Popular</a></li>
        <li class="nav-title"><a href="html/following.html">Following</a></li>
        <li class="nav-title"><a href="PHP/profile.php">Profile</a></li>
        <li class="nav-title"><a href="html/sign-up.html">Sign up</a></li>
        <li class="nav-title" id="login-btn" style="cursor: pointer;">Login</li>
        <li class="nav-title"><a href="PHP/logout.php">Logout</a></li>
        <li class="nav-title"><a href="PHP/admin.php">Admin</a></li>
    </ul>
</nav>
<main>
    <div class="container">
        <div class="g-3-col">
            <div class= "blog-post-container">
                <article class="blog-post">
                    <img class="img" alt="img-alt" src="<?php echo str_replace('../','',$blog1["picture"]) ?>">
                    <div class="content">
                        <h1><?php echo $blog1["title"] ?></h1>
                        <p class="summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta illo omnis distinctio magnam! Molestiae suscipit minus delectus inventore expedita. Non molestiae veniam voluptatem vitae aperiam. Numquam dolorum fugit sint iste...</p>                        
                        <div class="info flexbox justify-content-between">
                            <p class="readMore bgPrimary"><?php
                                    echo '<a href="PHP/blogpost.php?temp='.$blog1["title"].'">'?>Read More</a></p>
                            <div class="tagADate flexbox align-items-center">
                                <p class="tag"><?php echo $blog1["category"] ?></p>
                                <p class="date">date</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div>
                <article class="blog-post">
                    <img class="img" alt="img-alt" src="<?php echo str_replace('../','',$blog2["picture"]) ?>">
                    <div class="content">
                        <h1><?php echo $blog2["title"] ?></h1>
                        <p class="summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta illo omnis distinctio magnam! Molestiae suscipit minus delectus inventore expedita. Non molestiae veniam voluptatem vitae aperiam. Numquam dolorum fugit sint iste...</p>
                        <div class="info flexbox justify-content-between">
                            <p class="readMore bgPrimary"><?php
                                echo '<a href="PHP/blogpost.php?temp='.$blog2["title"].'">'?>Read More</a></p>
                            <div class="tagADate flexbox align-items-center">
                                <p class="tag"><?php echo $blog2["category"] ?></p>
                                <p class="date">date</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div>
                <article class="blog-post">
                    <img class="img" alt="img-alt" src="<?php echo str_replace('../','',$blog3["picture"]) ?>">
                    <div class="content">
                        <h1><?php echo $blog3["title"] ?></h1>
                        <p class="summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta illo omnis distinctio magnam! Molestiae suscipit minus delectus inventore expedita. Non molestiae veniam voluptatem vitae aperiam. Numquam dolorum fugit sint iste...</p>
                        <div class="info flexbox justify-content-between">
                            <p class="readMore bgPrimary"><?php
                                echo '<a href="PHP/blogpost.php?temp='.$blog3["title"].'">'?>Read More</a></p>
                            <div class="tagADate flexbox align-items-center">
                                <p class="tag"><?php echo $blog3["category"] ?></p>
                                <p class="date">date</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div>
                <article class="blog-post">
                    <img class="img" alt="img-alt" src="<?php echo str_replace('../','',$blog4["picture"]) ?>">
                    <div class="content">
                        <h1><?php echo $blog4["title"] ?></h1>
                        <p class="summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta illo omnis distinctio magnam! Molestiae suscipit minus delectus inventore expedita. Non molestiae veniam voluptatem vitae aperiam. Numquam dolorum fugit sint iste...</p>
                        <div class="info flexbox justify-content-between">
                            <p class="readMore bgPrimary"><?php
                                echo '<a href="PHP/blogpost.php?temp='.$blog4["title"].'">'?>Read More</a></p>
                            <div class="tagADate flexbox align-items-center">
                                <p class="tag"><?php echo $blog4["category"] ?></p>
                                <p class="date">date</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div>
                <article class="blog-post">
                    <img class="img" alt="img-alt" src="<?php echo str_replace('../','',$blog5["picture"]) ?>">
                    <div class="content">
                        <h1><?php echo $blog5["title"] ?></h1>
                        <p class="summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta illo omnis distinctio magnam! Molestiae suscipit minus delectus inventore expedita. Non molestiae veniam voluptatem vitae aperiam. Numquam dolorum fugit sint iste...</p>
                        <div class="info flexbox justify-content-between">
                            <p class="readMore bgPrimary"><?php
                                echo '<a href="PHP/blogpost.php?temp='.$blog5["title"].'">'?>Read More</a></p>
                            <div class="tagADate flexbox align-items-center">
                                <p class="tag"><?php echo $blog5["category"] ?></p>
                                <p class="date">date</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div>
                <article class="blog-post">
                    <img class="img" alt="img-alt" src="<?php echo str_replace('../','',$blog6["picture"]) ?>">
                    <div class="content">
                        <h1><?php echo $blog6["title"] ?></h1>
                        <p class="summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta illo omnis distinctio magnam! Molestiae suscipit minus delectus inventore expedita. Non molestiae veniam voluptatem vitae aperiam. Numquam dolorum fugit sint iste...</p>
                        <div class="info flexbox justify-content-between">
                            <p class="readMore bgPrimary"><?php
                                echo '<a href="PHP/blogpost.php?temp='.$blog6["title"].'">'?>Read More</a></p>
                            <div class="tagADate flexbox align-items-center">
                                <p class="tag"><?php echo $blog6["category"] ?></p>
                                <p class="date">date</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        
    </div>
    <!-- hidden articles are clicked with loadmore button --> 
    <div class="container">
        <div class="g-3-col">
            <div>
                <article class="blog-post">
                    <img class="img" alt="img-alt" src="<?php echo str_replace('../','',$blog7["picture"]) ?>">
                    <div class="content">
                        <h1><?php echo $blog7["title"] ?></h1>
                        <p class="summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta illo omnis distinctio magnam! Molestiae suscipit minus delectus inventore expedita. Non molestiae veniam voluptatem vitae aperiam. Numquam dolorum fugit sint iste...</p>
                        <div class="info flexbox justify-content-between">
                            <p class="readMore bgPrimary"><?php
                                echo '<a href="PHP/blogpost.php?temp='.$blog7["title"].'">'?>Read More</a></p>
                            <div class="tagADate flexbox align-items-center">
                                <p class="tag"><?php echo $blog7["category"] ?></p>
                                <p class="date">date</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div>
                <article class="blog-post">
                    <img class="img" alt="img-alt" src="<?php echo str_replace('../','',$blog8["picture"]) ?>">
                    <div class="content">
                        <h1><?php echo $blog8["title"] ?></h1>
                        <p class="summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta illo omnis distinctio magnam! Molestiae suscipit minus delectus inventore expedita. Non molestiae veniam voluptatem vitae aperiam. Numquam dolorum fugit sint iste...</p>
                        <div class="info flexbox justify-content-between">
                            <p class="readMore bgPrimary"><?php
                                echo '<a href="PHP/blogpost.php?temp='.$blog8["title"].'">'?>Read More</a></p>
                            <div class="tagADate flexbox align-items-center">
                                <p class="tag"><?php echo $blog8["category"] ?></p>
                                <p class="date">date</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div>
                <article class="blog-post">
                    <img class="img" alt="img-alt" src="<?php echo str_replace('../','',$blog9["picture"]) ?>">
                    <div class="content">
                        <h1><?php echo $blog9["title"] ?></h1>
                        <p class="summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta illo omnis distinctio magnam! Molestiae suscipit minus delectus inventore expedita. Non molestiae veniam voluptatem vitae aperiam. Numquam dolorum fugit sint iste...</p>
                        <div class="info flexbox justify-content-between">
                            <p class="readMore bgPrimary"><?php
                                echo '<a href="PHP/blogpost.php?temp='.$blog9["title"].'">'?>Read More</a></p>
                            <div class="tagADate flexbox align-items-center">
                                <p class="tag"><?php echo $blog9["category"] ?></p>
                                <p class="date">date</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        
    </div>
    <div class="btn-container flexbox justify-content-center" style="clear:left">
        <button class="btn-load button"/>Load More</a>
    </div>
</main>

<footer class="bgDark colorWhite" style="margin:0">
    <div class="containeasdsadar" style="margin:0;">
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
            <p>Made by COSC360 &copy;All rights reserved</p>
        </div>
    </div>
</footer>

<script>
    $(".blog-post").slice(0,6).show();
    $(".btn-load").on("click", function() {
        $(".blog-post:hidden").slice(0,3).slideDown();
        if($(".blog-post:hidden").length==0){
            $(".btn-load").fadeOut('slow');
        }
    }) 
</script>
</body>
<script type="text/javascript" src="JSFiles/mainPage.js"></script>

</html>