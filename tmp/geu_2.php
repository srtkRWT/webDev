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
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<!-- <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="list-inline nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Edit</a></li>
        <li><a href="#">GEU</a></li>
        <li><a href="#">GEHU Dehradun</a></li>
        <li><a href="#">GEHU Bhimtal</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav> -->


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">GEU <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">GEHU Dehradun</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">GEHU Bhimtal</a>
        </li>
      </ul>
      
    </div>
  </nav>
  
<div class="container-fluid text-left">    
  <div class="row content">
    <div class="col-sm-8 sidenav">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
            <li><a tabindex="-1" href="#">HTML</a></li>
            <li><a tabindex="-1" href="#">CSS</a></li>
            <li class="dropdown-submenu">
                <a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                <li class="dropdown-submenu">
                    <a class="test" href="#">Another dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="#">3rd level dropdown</a></li>
                    <li><a href="#">3rd level dropdown</a></li>
                    </ul>
                </li>
                </ul>
            </li>
            </ul>
        </div>

    </div>
    
    <div class="col-sm-4 sidenav" style="height:100%; overflow:auto; word-wrap: break-word; ">
      <!-- add php here -->
      <h2>Notice</h2>
      <div class="well"> 
        <p>Notice 1 00000000000000000000000000000000000000000000</p>
      </div>
      <div class="well">
        <p>Notice 2 1111111111111111111111111111111111111111111111111</p>
      </div>
    </div>
  </div>
</div>

<!-- 
<footer class="container-fluid text-center">
  <p>GEU</p>
</footer>
 -->
</body>
</html>
