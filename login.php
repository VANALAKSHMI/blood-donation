<?php
$con=new mysqli('localhost','root','','mysql');
if($con->connect_errno)
{
	echo $con->connect_error;
	die();
	
}


?>

 <?php
if(isset($_POST['sub']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$group=$_POST['blood group'];
$contact=$_POST['contact'];
	if($_POST['name']!=null&&$_POST['age']!=null&&$$_POST['blood group']!=null&&$_POST['contact']!=null)
	{
$sql="INSERT INTO details(Name,Age,Blood group,Contact) VALUES('$name',$age,'$group',$contact)";
			if($con->query($sql))
			{
				echo " datas stored";
			}
			else{
				echo "insert data failed";
				}
	}
	else{
		echo "All fields required";
	}
}

 ?>
