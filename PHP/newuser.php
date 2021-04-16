<!DOCTYPE html>
<html>



<div>
<?php

$host = "localhost";
$database = "cosc360_project";
$user = "webuser";
$password = "P@ssw0rd";

$connection = mysqli_connect($host, $user, $password, $database);

$error = mysqli_connect_error();

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
{
    //good connection, so do you thing
    $sql = "SELECT * FROM users WHERE username='$uname' OR email='$email';";

    $results = mysqli_query($connection, $sql);

    if(mysqli_num_rows($results)!=0){
        echo "username and/or email already exists";
        echo "<p><a href='../main.html'>Return</a></p>";
       /* while ($row = mysqli_fetch_assoc($results)) {
            echo $row['username'] . " " . $row['firstName'] . " " . $row['lastName'] . " " . $row['email'] . " " . $row['password'] . "<br/>";
        }*/
    }
    else {
        $img= null;
        if($_FILES["pfpicture"]["name"]!= null) {
            $target_dir = "../pfp/";
            $target_file = $target_dir . basename($_FILES["pfpicture"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["pfpicture"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }


// Check file size
            if ($_FILES["pfpicture"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

// Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

// Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["pfpicture"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["pfpicture"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            $img= $target_file;
        }










        $epass= md5($pass);
        $nsql="INSERT INTO users VALUES ('$uname','$fname','$lname','$email','$epass', false, '$img');";
        //and fetch requsults
        /*while ($row = mysqli_fetch_assoc($results)) {
            echo $row['username'] . " " . $row['firstName'] . " " . $row['lastName'] . " " . $row['email'] . " " . $row['password'] . "<br/>";
        }*/

        if(mysqli_query($connection, $nsql)){
            echo "An account has been created";
        }
        else{
            echo "error";
        }

    }

    mysqli_free_result($results);
    mysqli_close($connection);
}
?>
</div>

</html>
