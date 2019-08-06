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
        <div id="accordion">
        <!-- ................ -->
                        <!-- 
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Engineering
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                        Computer Science And Engineering
                                </div>
                            </div> 
                        </div>
                            -->
                          


                     
                        <?php
                        $sql = "SELECT hostel_name, hostel_details FROM Hostels";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                printf('<div class="card">');
                                    printf('<div class="card-header" id="heading%s">', $row["hostel_name"]); 
                                        printf('<h5 class="mb-0">');
                                            printf('<button class="btn btn-link" data-toggle="collapse" data-target="#collapse%s" aria-expanded="false" aria-controls="collapse%s">', $row["hostel_name"], $row["hostel_name"]);
                                                printf("%s", $row["hostel_name"]);
                                            printf('</button>');
                                        printf('</h5>');
                                    printf('</div>');
        
                                    printf('<div id="collapse%s" class="collapse" aria-labelledby="heading%s" data-parent="#accordion">', $row["hostel_name"], $row["hostel_name"]);
                                        printf('<div class="card-body">');
                                            printf('%s', $row["hostel_details"]);
                                        printf('</div>');
                                    printf('</div>'); 
                                printf('</div>');                                

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
    <?php include "../notice.php";?>
  </div>
</div>

<!-- 
<footer class="container-fluid text-center">
  <p>GEU</p>
</footer>
 -->

<!-- modals -->




</body>
</html>
