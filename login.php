<?php
    require "/GEUInfoManager/connection.php";

    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $sql = "SELECT user_name FROM `Users` WHERE user_name = '$username' AND password = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows === 1) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION["username"] = $username;
            header('Location: /GEUInfoManager/course.php');
        } else {
            echo "Error: invalid username or password" ;
        }
    } else {
        echo "err";
    }

?>