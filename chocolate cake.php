<!DOCTYPE html>
<html lang="en">
<head>
  <title>CHOCOLATE CAKE</title>
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
          <li><a href="#">Ice creams</a></li>
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
 <div class="list2" style=><li><input type="search" id="mySearch" placeholder="Search for something..">
    <button onclick="myFunction()">Search</button></li></div>
  </div>
 </nav>
 <h1 align="center" style="color: blue; background-color: #6E3211">CHOCOLATE CAKE</h1>
<div style="background-color: #C29E80; width: 580px; height: 870px; float: right;">
 <p style="font-weight:bold;font-size: 20px">About CHOCOLATE CAKE</p>
 <p>Chocolate cake or chocolate gâteau (from French: gâteau au chocolat) is a cake flavored with melted chocolate, cocoa powder, or both.<br>
  Chocolate cake is made with chocolate. It can also include other ingredients.[1] These include fudge, vanilla creme, and other sweeteners. The history of chocolate cake goes back to 1764, when Dr. James Baker discovered how to make chocolate by grinding cocoa beans between two massive circular millstones.[2][3] In 1828, Coenraad van Houten of the Netherlands developed a mechanical extraction method for extracting the fat from cacao liquor resulting in cacao butter and the partly defatted cacao, a compacted mass of solids that could be sold as it was "rock cacao" or ground into powder.[4] The processes transformed chocolate from an exclusive luxury to an inexpensive daily snack.[4] A process for making silkier and smoother chocolate called conching was developed in 1879 by Rodolphe Lindt and made it easier to bake with chocolate, as it amalgamates smoothly and completely with cake batters.[4] Until 1890 to 1900, chocolate recipes were mostly for chocolate drinks,[4] and its presence in cakes was only in fillings and glazes.[5] In 1886, American cooks began adding chocolate to the cake batter, to make the first chocolate cakes in the US.[5]<br>
 <p style="font-weight:bold;font-size: 20px">Ingredients:</p>
 <p style="font-weight:bold;font-size: 15px">CHOCOLATE CAKE
FIRST PART:<br></p>
1. 1/3 cup brown sugar<br>
2. 1/3 cup strong coffee<br>
3. 1/2 cup dutch process cocoa<br>
4. 1 tablespoon butter<br>
5. 1 teaspoon vanilla<br>
<p style="font-weight:bold;font-size: 15px">SECOND PART:<br></p>
1. 1 1/2 cups (192g) all-purpose flour<br>
2. 1/2 teaspoon baking powder<br>
3. 1 teaspoon baking soda<br>
4. 1/2 cup (1 stick, 113g) salted butter, warm but not melted<br>
5. 1/2 cup (100g) granulated sugar<br>
6. 1/2 cup (100g) packed brown sugar<br>
7. 2 large eggs, room temperature<br>
8. 1/2 cup cold coffee<br>
9. 1 teaspoon vanilla<br>
<p style="font-weight:bold;font-size: 15px">CHOCOLATE FROSTING<br></p>
1. 3 cups (384g) confectioners' sugar<br>
2. 6 tablespoons (90g) Dutch Process cocoa powder<br>
3. 6 tablespoons salted butter room temperature<br>
4. 3-5 tablespoons heavy whipping cream<br>
5. 1 teaspoon vanilla extract<br>
</p>
</div>
<div style="float: left;height: 780px;width: 660px; background-color: #A97A51;">
  <img src="chocolate cake.jpg" width="660px" height="350px">
<iframe width="660" height="415" 
src="https://www.youtube.com/embed/VkKjdmrV2iU">
</iframe>
</div>
<div style="background-color: #C29E80; height: 1300px;width:1500px;">
<p style="font-weight:bold;font-size: 20px">Procedure:</p>
<p style="font-weight:bold;font-size: 15px">CHOCOLATE CAKE<br>
FIRST PART:</p><br>
1. Place all ingredients in the first part into a saucepan over low heat. Stir until they are fully incorporated, 5-7 minutes.<br>
2. Remove from heat and allow to cool a bit. It should be a little thick and similar to custard.<br>
<p style="font-weight:bold;font-size: 15px">SECOND PART:</p><br>
1. In a medium bowl, sift flour, baking soda, and baking powder together.<br>
2. Add 1/2 cup warm butter, sugars, eggs, cooled coffee, and vanilla to the flour mixture and mix with a hand-held mixer until fully combined. (or stir by hand) <br>
3. Add the chocolate mixture from the FIRST PART to the ingredients from the SECOND PART. Stir by hand until all ingredients are well combined.<br>
4. Pour onto a prepared (sprayed or lined with parchment) baking sheet (I used a 10x15in baking sheet). Smooth out the batter and gently tap on the counter.<br> 
5. Bake in a 350°F oven for 16-22 minutes, or until the center no longer appears wet and an inserted toothpick is removed with a few crumbs.<br>
6. Allow to cool before frosting.<br>
<p style="font-weight:bold;font-size: 15px">CHOCOLATE FROSTING<br></p>
1. In a medium bowl, sift together the confectioners' sugar and cocoa, and set aside.<br>
2. In a large bowl, cream butter until smooth, then gradually beat in sugar mixture alternately with heavy whipping cream. Blend in vanilla. Beat until light and fluffy. If necessary, adjust consistency with more whipping cream or sugar.<br>
</div>
</script>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips --> 
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body> 