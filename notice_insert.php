<?php
  session_start();
  require "connection.php";
  if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
    header('Location: ./index.php');
  }
?>
<?php
    if(isset($_POST["submit"])){
        $noticeTitle       = $_POST["noticeTitle"];
        $noticeAuthor      = $_POST["noticeAuthor"];
        $noticeDepartment  = $_POST["noticeDepartment"];
        $noticeData        = $_POST["noticeData"];


        $sql = "REPLACE INTO `Notice`
            (`title`, `author`, `post_date`, `notice_data`, `department`) 
            VALUES (
                '$noticeTitle', 
                '$noticeAuthor',
                SYSDATE(),
                '$noticeData',
                '$noticeDepartment'
            )";
        
        if ($conn->query($sql) === TRUE) {
            header('Location: ./notice_editor.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "err";
    }

?>