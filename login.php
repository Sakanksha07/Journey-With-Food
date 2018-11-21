<?php 
session_start();
if (isset($_POST["submit"])) 
{
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
    if(mysqli_num_rows($result))
    {
        echo "string";
    $row=mysqli_fetch_assoc($result);
    $_SESSION["name"]=$row['UName'];
    echo $row['UName'];
    $_SESSION["email"]=$row['UEmail'];
    header('location:new.php');
    }
}
mysqli_close($conn);
?>
