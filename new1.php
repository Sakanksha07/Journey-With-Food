<?php
//Include GP config file && User class
include_once 'gpConfig.php';
include_once 'User.php';

if(isset($_GET['code']))
{
  $gClient->authenticate($_GET['code']);
  $_SESSION['token'] = $gClient->getAccessToken();
  header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) 
{
  $gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) 
{
  //Get user profile data from google
  $gpUserProfile = $google_oauthV2->userinfo->get();
  
  //Initialize User class
  $user = new User();
  
  //Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
      //'gender'        => $gpUserProfile['gender'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
        'link'          => $gpUserProfile['link']
    );
    $userData = $user->checkUser($gpUserData);
  
  //Storing user data into session
  $_SESSION['userData'] = $userData;
  
  //Render facebook profile data
     if(!empty($userData))
     {
        $output = '<h1>Logged in by google </h1>';
        $_SESSION["name"] = $gpUserProfile['given_name'];
      /*$output .= '<img src="'.$userData['picture'].'" width="300" height="220">';
        $output .= '<br/>Google ID : ' . $userData['oauth_uid'];
        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
        $output .= '<br/>Email : ' . $userData['email'];
        $output .= '<br/>Gender : ' . $userData['gender'];
        $output .= '<br/>Locale : ' . $userData['locale'];
        $output .= '<br/>Logged in with : Google';
        $output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';*/
        $output .= '<br/>Logout from <a href="logout.php">Google</a>'; 
     }
     else
     {
         $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
     }
}
else 
{
 $authUrl = $gClient->createAuthUrl();
 $output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="images/glogin.png" alt=""/></a>';
}
?>
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
<body background="">

<nav style="background-color: #f4ad42" class="navbar navbar-inverse">
  <div class="container-fluid" class="list1">
    <div class="navbar-header">
      <a style="color: black" class="navbar-brand" href="#">Journey With Food</a>
    </div>
    <ol type="i" >
    <ul class="nav navbar-nav">
      <li class="active"><a href="new.php">Home</a></li>
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
    <li><a style="color: black" href="lgin.php">Login</a></li>
  <?php } ?>
    </ul>
</ol>
 <div class="list2" style="width: 430px"><li><input type="search" id="mySearch" placeholder="Search for something..">
    <button onclick="myFunction()">Search</button></li></div>
     
  </div>
  
 </nav>

</div>
<h3 style="font-family: Bradley Hand ITC ; margin: 50px; font-size: 40px" align="center">JOURNEY WITH FOOD</h3>
<h3 style="font-family: Blackadder ITC ; margin: 50px; font-size: 40px" align="center">whatever you are into its all free</h3>
<div style="float: right;">
  <img src="food1.jpg">
</div>
<div style="">
  <img src="food2.jpg">
</div>
<div style="float: right;">
  <img src="food3.jpg">
</div>
<div style="">
  <img src="food4.jpg">
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