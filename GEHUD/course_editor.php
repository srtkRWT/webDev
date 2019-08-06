<?php
  session_start();
  require "./connection.php";
  if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
    header('Location: ../index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GEU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../style.css">
</head>
<body>



<?php include "../nav.php";?>
  
<div class="container-fluid text-left">    
  <div class="row content">
  <?php include "../sidenav.php";?>
    <div class="col-sm-8 text-left"> 
      <div id="main" class="main">
        <!-- main body-->
        <br><br>
            <h3 class="editor">Add Course Details</h3>
            <form action="./course_insert.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="editor" for="courseName">Course Name</label>
                    <input type="text" class="form-control" name="courseName" placeholder="enter course name here">
                </div>
                <div class="form-group">
                    <label class="editor" for="courseType">Select Course Type</label>
                    <select class="form-control" name="courseType">
                    
                    <?php
                        $sql = "SELECT course_head_name FROM CourseHeaders";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                printf("<option>%s</option>", $row["course_head_name"]);
                            }
                        } else {
                            echo "0 results";
                        }
                    ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label class="editor" for="courseDetails">Course Details</label>
                    <textarea class="form-control" name="courseDetails" rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label class="editor" for="FormControlFile">Select Fees Structure PDF file</label>
                  <input type="file" class="form-control-file" name="file">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <br><br>
            </form>

            <br><br>

            <h3 class="editor">Delete Course</h3>
            <form action="./course_delete.php" method="POST">
                <div class="form-group">
                    <label for="course">Select Course Type</label>
                    <select class="form-control" name="course">
                    
                    <?php
                        $sql = "SELECT course_name, course_head_name FROM Courses";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                printf("<option>%s</option>", $row["course_name"]);
                            }
                        } else {
                            echo "0 results";
                        }
                    ?>
                    </select>
                </div>
                
                <button type="submit" name="delete" class="btn btn-primary">Submit</button>
                <br><br>
            </form>
  

      <!-- main body close -->
      </div>
    </div>
    <?php include "../notice.php";?>
  </div>
</div>

<!-- 
<footer class="container-fluid text-center">
  <p>GEU</p>
</footer>
 -->



</body>
</html>
