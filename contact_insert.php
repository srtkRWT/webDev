<?php
  session_start();
  require "connection.php";
  if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
    header('Location: ./index.php');
  }
?>
<?php
    if(isset($_POST["submit"])){
        $contactName    = $_POST["contactName"];
        $contactEmail    = $_POST["contactEmail"];
        $contactPhone    = $_POST["contactPhone"];
        $contactDetails = $_POST["contactDetails"];


        $sql = "REPLACE INTO `Contacts`
            (`contact_name`, `contact_details`, `contact_email`, `contact_phone`) 
            VALUES (
                '$contactName', 
                '$contactDetails', 
                '$contactEmail',
                '$contactPhone'
            )";
        
        if ($conn->query($sql) === TRUE) {
            header('Location: ./contact_editor.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "err";
    }

?>