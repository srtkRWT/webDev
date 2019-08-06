<?php
  session_start();
  require "./connection.php";
  if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
    header('Location: ../index.php');
  }
?>
<?php
    if(isset($_POST["delete"])){
        $contact_name = $_POST["contact_name"];
        
        $sql = "DELETE FROM `Contacts` WHERE contact_name = '$contact_name'";
        
        if ($conn->query($sql) === TRUE) {
            header('Location: ./contact_editor.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "err";
    }

?>