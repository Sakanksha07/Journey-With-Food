<!DOCTYPE html>
<html>
<head>
  <title></title>
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
  <script type="text/javascript">
  function check() 
    {
      var a,b,c,d,e;
      a=document.getElementById('un').value;
      b=document.getElementById('em').value;
      c=document.getElementById('p').value;
      d=document.getElementById('p1').value;
      e=document.getElementById('dd').value;
      if (a==""||b==""||c==""||d==""||e=="") 
      {
        alert("Field cannot be blank!!!");  
      return false;
      }
      else if (c!=d) 
      {
        alert("Password does not match!!!");
        return false;
      }      
      else if (!isNaN(a)) 
      {
        alert('enter user name');
        return false;
      }
    }
   </script>
  <style type="text/css">
    h1{font-family:Arial, Helvetica, sans-serif;color:#999999;}
  </style>
</head>
<body background="3.jpg">
<nav style="background-color: #f4ad42" class="navbar navbar-inverse">
  <div class="container-fluid" class="list1">
    <div class="navbar-header">
      <a style="color: black" class="navbar-brand" href="#">Journey With Food</a>
    </div>
    <ol type="i" >
    <ul class="nav navbar-nav">
      <li class=""><a style="color: black" href="new.php">Home</a></li>
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
      <li><a href="aboutus.php" style="color: black">About Us</a></li>
      <?php if(!empty($_SESSION["name"])) {?>
     <li><a style="color: black" href="#"><?php echo $_SESSION["name"]; ?></a></li>
     <li><a style="color: black" href="logout1.php">Logout</a></li> 
   <?php }
   else { ?>
    <li class="active"><a style="" href="lgin.php">Login</a></li>
  <?php } ?>
    </ul>
</ol>
 <div class="list2" style="width: 430px"><li><input type="search" id="mySearch" placeholder="Search for something..">
    <button onclick="myFunction()">Search</button></li></div>     
  </div>
 </nav>
<br><br><br><br>
  <h1 style="font-family: Bradley Hand ITC; font-size: 50px" align="center">Login</h1>
<table align="center">
  <form name="f1" method="POST" action="lgin.php" onsubmit="return check()">
  <tr><th><input style="height: 30px" type="text" name="em" id="em" placeholder="Email"></th></tr><br>
  <tr><th><input style="height: 30px" type="password" name="p" id="p" placeholder="Password"></th></tr><br>
  <tr>
  </tr>
  <tr><th><input style="height: 30px" type="submit" name="submit" id="sub" onsubmit="return check()"></th></tr>
  </form>
</table>


<?php 
session_start();
if (isset($_POST["submit"])) {
$a=$_POST['em'];
$b=$_POST['p'];
$severname="localhost";
$username="root";
$password="";
$dbname="nsp";
$conn=mysqli_connect($severname,$username,$password,$dbname);
if($conn)
{
  $sql="SELECT * FROM `user_details` WHERE UEmail='$a' && Upass='$b'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1)
    {
    $row=mysqli_fetch_assoc($result);
    $_SESSION["name"]=$row['UName'];
    echo $row['UName'];
    $_SESSION["email"]=$row['UEmail'];
    header('location:new.php');
    }
}
mysqli_close($conn);
}
?>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips --> 
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>