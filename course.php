<?php
  session_start();
  require "connection.php";
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
  <link rel="stylesheet" href="style.css">
</head>
<body>


<?php include "nav.php";?>
  
<div class="container-fluid text-left">    
  <div class="row content">
    
    <?php include "sidenav.php";?>
    
    <div class="col-sm-8 text-left"> 
      <div id="main" class="main">
        <!-- main body-->
        <br><br>
        
        <div id="accordion">
        <!-- ................ -->

          
            <?php
            $sql = "SELECT course_head_name FROM CourseHeaders";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    printf("<div class=\"card\">");
                    
                    printf("<div class=\"card-header\" id=\"heading%s\">", $row["course_head_name"]);
                    printf("<h5 class=\"mb-0\">");
                    printf("<button class=\"btn btn-light collapsed \" data-toggle=\"collapse\" data-target=\"#collapse%s\" aria-expanded=\"false\" aria-controls=\"collapse%s\">", $row["course_head_name"], $row["course_head_name"]);
                    printf("%s", $row["course_head_name"]);
                    printf("</button>");
                    printf("</h5>");
                    printf("</div>");
                    

                    printf("<div id=\"collapse%s\" class=\"collapse\" aria-labelledby=\"heading%s\" data-parent=\"#accordion\">", $row["course_head_name"], $row["course_head_name"]);
                    //course names and modals

                    //printf("</div>");
                    $sql2 = "SELECT course_name, course_details, pdf_name FROM Courses WHERE  course_head_name = \"" . $row["course_head_name"] . "\"";
                    $result2 = $conn->query($sql2);
                    if ($result2->num_rows > 0) {
                      while($row2 = $result2->fetch_assoc()) {
                        printf("<div class=\"card-body\">");
                        printf("<button type=\"button\" class=\"btn btn-dark btn-sm \" data-toggle=\"modal\" data-target=\"#%s_%s_modal\">", $row["course_head_name"], $row2["course_name"]);
                        printf("%s", $row2["course_name"]);
                        printf("</button><br><br>");
                        printf("</div>");
                        //modal code ........
                        printf("<div class=\"modal fade\" id=\"%s_%s_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"%s_%s__modalTitle\" aria-hidden=\"true\">", $row["course_head_name"], $row2["course_name"], $row["course_head_name"], $row2["course_name"]);
                        printf("<div class=\"modal-dialog\" role=\"document\">");
                        printf("<div class=\"modal-content\">");
                        printf("<div class=\"modal-header\">");
                        printf("<h5 class=\"modal-title text-dark\" id=\"%s_%s__modalTitle\">%s</h5>", $row["course_head_name"], $row2["course_name"], $row2["course_name"]);
                        printf("<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\Close\">");
                        printf("<span aria-hidden=\"true\">&times;</span>");
                        printf("</button>");
                        printf("</div>");
                        printf("<div class=\"modal-body text-dark\">");
                        printf("%s", $row2["course_details"]);
                        printf("<br><a href=\"pdf/%s\" target=\"_blank\"> open pdf </a>", $row2["pdf_name"]);
                        printf("</div>");
                        printf("<div class=\"modal-footer text-dark\">");
                        printf("<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>");
                        printf("</div>");
                        printf("</div>");
                        printf("</div>");
                        printf("</div>");
                        
                      }
                    }else {
                      echo '<div class="text-dark">no courses available</div>';
                    }
                    printf("</div>");
                    printf("</div>");
                }
            } else {
                echo "0 results";
            }
          ?>
          <br><br>
<!-- ...................................................................... -->
                          

        <!-- accordion close -->
        </div> 
              
<!-- main body -->
      </div>
    </div>
    
    <?php include "notice.php";?>
  </div>
</div>

<!-- 
<footer class="container-fluid text-center">
  <p>GEU</p>
</footer>
 -->


</body>
</html>
