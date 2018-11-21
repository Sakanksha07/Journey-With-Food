<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="2">
	<?php 
	$a=$_POST["c"];
$severname="localhost";
$username="root";
$password="";
$dbname="nsp";
$conn=mysqli_connect($severname,$username,$password,$dbname);
if($conn)
{
	$sql="select `stid`,`stname` from student where stid=$a";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {?>
    	<tr>
    		<td>stid</td>
    		<td>stname</td>
    	</tr>
    <?php
    	while ($row=mysqli_fetch_assoc($result))
    	{
    ?>

    <tr><td><?php echo $row["stid"]?></td>
    <td><?php echo $row["stname"]."<br>"?></td></tr>
    	<?php
    }
    }
    else
    	echo "0 result";
}
mysqli_close($conn);
 ?>
	
</table>
</body>
</html>