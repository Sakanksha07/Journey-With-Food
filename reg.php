<?php 
$a=$_POST['un'];
$b=$_POST['em'];
$c=$_POST['p'];

$d=$_POST['dd'];
$severname="localhost";
$username="root";
$password="";
$dbname="nsp";
$conn=mysqli_connect($severname,$username,$password,$dbname);
if ($conn) 
{
	$sql="insert into user_details(`UName`,`UEmail`,`Upass`,`DOB`) values('$a','$b','$c','$d');";
	if (mysqli_query($conn,$sql)) 
	{
		session_start();
		$_SESSION["name"]=$a;$_SESSION["email"]=$b;
		header("Location: http://localhost/sak/NSP%202nd%20yr/mail/index1.php");
		header("Location: http://localhost/sak/NSP%202nd%20yr/new.php");
		$mobile=;
$message="test message";
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=xxxxxxxxxx&Password=xxxxxx&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=xxxxxxxxxxxxxx"),true);
if ($json["status"]==="success") {
    echo $json["msg"];
    //your code when send success
}else{
    echo $json["msg"];
    //your code when not send
}
	}
	mysqli_close($conn);
}
?>