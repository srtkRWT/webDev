<?php
  session_start();
  require "./connection.php";
  if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
    header('Location: ../index.php');
  }
?>
<?php
    if(isset($_POST["submit"])){
        $hostelName    = $_POST["hostelName"];
        $hostelDetails = $_POST["hostelDetails"];


        $sql = "REPLACE INTO `Hostels`
            (`hostel_name`, `hostel_details`) 
            VALUES (
                '$hostelName', 
                '$hostelDetails'
            )";
        
        if ($conn->query($sql) === TRUE) {
            header('Location: ./hostel_editor.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "err";
    }

?>