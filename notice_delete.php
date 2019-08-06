<?php
  session_start();
  require "connection.php";
  if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
    header('Location: ../index.php');
  }
?>
<?php
    if(isset($_POST["delete"])){
        $noticeTitle = $_POST["notice"];
        
        $sql = "DELETE FROM `Notice` WHERE title = '$noticeTitle'";
        
        if ($conn->query($sql) === TRUE) {
            header('Location: ./notice_editor.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "err";
    }

?>