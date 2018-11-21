<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Journey With Food</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  .footer {
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: blue;
   color: white;
   text-align: center;
}
    .list1{
      background-color: red;
      font-size: 2em;
      font-family: Brush Script MT;
      float:left;
      width:50%;
      height:20px;
      position: fixed;
    }

    .list2{
       
      font-size: 1.5em;
      font-family: calibri;
      float:right;
      width: 50%;
      height: 20px;
    }
  </style>
</head>
<body>
<nav style="background-color: #f4ad42" class="navbar navbar-inverse">
  <div class="container-fluid" class="list1">
    <div class="navbar-header">
      <a style="color: black" class="navbar-brand" href="#">Journey With Food</a>
    </div>
    <ol type="i" >
    <ul class="nav navbar-nav">
      <li><a style="color: black" href="new.php">Home</a></li>
      <li class="dropdown" style="float: right;"><a style="color: black" class="dropdown-toggle" data-toggle="dropdown" href="#">Categories<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Indian.html">Indian</a></li>
          <li><a href="cakes.html">Cakes</a></li>
          <li><a href="Icecream.html">Ice creams</a></li>
          <li><a href="#">Sea food</a></li>
          <li><a href="#">Deserts</a></li>
          <li><a href="#">Low calory</a></li>
          <li><a href="#">Fast food</a></li>
          <li><a href="#">Vegetarian</a></li>
          <li><a href="#">Non vegetarian</a></li>
        </ul>
      </li>
      <li class="active"><a href="aboutus.php" style="color: white">About Us</a></li>
      <?php if(!empty($_SESSION["name"])) {?>
     <li><a style="color: black" href="#"><?php echo $_SESSION["name"]; ?></a></li>
     <li><a style="color: black" href="logout1.php">Logout</a></li>
     <?php }else{ ?> 
    <li><a style="color: black" href="lgin.php">Login</a></li>
    <?php } ?>
    </ul>
</ol>
 <div class="list2" style="width: 430px"><li><input type="search" id="mySearch" placeholder="Search for something..">
    <button onclick="myFunction()">Search</button></li></div>
  </div>
</nav>
<div style="width: 550px;float: right;">
 <img src="pic_nutan.jpg" style="height: 350px;width: 230px">
 <p style="font-size: 30px ">
  Nutan Raj Shekhawat<br>
  2017pietcsnutan076@poornima.org<br>
  Poornima Institute of Engineering and Technology,<br> Jaipur
 </p>
</div>
<div style="width: 600px">
 <img src="pic_sd.jpg" style="height: 350px;width: 230px">
 <p style="font-size: 30px ">
  Sakanksha Dadhich<br>
  2017pietcssakanksha092@poornima.org<br>
  Poornima Institute of Engineering and Technology,<br> Jaipur
 </p>
</div>

    <script>
  function myFunction() {
      var x = document.getElementById("mySearch").placeholder;
      document.getElementById("demo").innerHTML = x;
  }
    </script>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips --> 
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>