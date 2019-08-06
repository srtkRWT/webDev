<?php
  session_start();
  require "./connection.php";
  if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
    header('Location: ../index.php');
  }
?>
<?php
    if(isset($_POST["submit"])){
        $courseName    = $_POST["courseName"];
        $courseType    = $_POST["courseType"];
        $courseDetails = $_POST["courseDetails"];

        $target = basename( $_FILES['file']['name']);
        
        //This gets all the other information from the form
        //$Filename=$_POST['file'];
        
        //$pdf=($_FILES['file']['name']);
        
        //Writes the Filename to the server
        if(move_uploaded_file($_FILES['file']['tmp_name'], 'pdf/'. $target)) {
            //Tells you if its all ok
            echo "The file ". basename( $_FILES['file']['name']). " has been uploaded, and your information has been added to the directory";
        } else {
            //Gives and error if its not
            echo "Sorry, there was a problem uploading your file.";
        }


        $sql = "REPLACE INTO `Courses`
            (`course_name`, `course_details`, `course_head_name`, `pdf_name`) 
            VALUES (
                '$courseName', 
                '$courseDetails', 
                '$courseType',
                '$target'
            )";
        
        if ($conn->query($sql) === TRUE) {
            header('Location: ./course_editor.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "err";
    }

?>