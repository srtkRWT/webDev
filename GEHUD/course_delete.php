<?php
  session_start();
  require "./connection.php";
  if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
    header('Location: ../index.php');
  }
?>
<?php
    if(isset($_POST["delete"])){
        $courseName = $_POST["course"];
        
        $sql = "DELETE FROM `Courses` WHERE course_name = '$courseName'";
        
        if ($conn->query($sql) === TRUE) {
            header('Location: ./course_editor.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "err";
    }

?>