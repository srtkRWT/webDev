<?php
  session_start();
  require "./connection.php";
  if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
    header('Location: ../index.php');
  }
?>
<?php
    if(isset($_POST["delete"])){
        $hosteleName = $_POST["hostel"];
        
        $sql = "DELETE FROM `Hostels` WHERE hostel_name = '$hostelName'";
        
        if ($conn->query($sql) === TRUE) {
            header('Location: ./hostel_editor.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "err";
    }

?>