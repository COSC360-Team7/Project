<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["email"])){
        $email=$_POST["email"];
        
        $host = "localhost";
        $database = "cosc360_project";
        $user = "webuser";
        $password = "P@ssw0rd";

        $connection = mysqli_connect($host, $user, $password, $database);

        $error = mysqli_connect_error();
        if($error != null)
        {
        $output = "<p>Unable to connect to database!</p>";
        exit($output);
        }
        else{
            $stmt=$connection->prepare("SELECT username,firstName,lastName,email FROM users WHERE email=?");
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $stmt->bind_result($result,$result2,$result3,$result4);
            $stmt->fetch();
            if(!empty($result)){
                echo "<fieldset><legend>User: $result</legend>
                <table><tr><td>First Name: $result2</td></tr>
                <tr><td>Last Name: $result3</td></tr>
                <tr><td>Email: $result4</td></tr>
                </table><fieldset>";
            }else{
                echo"Cannot find user";
            }
            mysqli_close($connection);

        }
    }
    }else{
        echo "Not a POST request";
    }
    ?>
