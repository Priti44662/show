<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method ="POST">
<table border="1">
  <tr>
    <td width="62">username:</td>
    <td>      <label for="textfield"></label>
      <input type="text" name="user" id="pass" /></td>
  </tr>
  <tr>
  <label>
    <select name="select"> 
	   <option>select</option>
	   <?php
	   $con= mysqli_connect("localhost","root","","amity");
			   $sql="select * from student1";
			
			   $result = mysqli_query($con,$sql);
			   while($row=mysqli_fetch_array($result))
			   {
			     echo "<option value=".$row[0].">".$row[1]."</option>";
				 
				 }
				 ?>
	   
	   </select>
	   </label>
    <td><div align="center">password:</div></td>
    <td>
      <label for="label"></label>
      <input type="text" name="pass" id="label" />        </td>
    </tr>
  <tr>
    <td colspan="2" align="left"><div align="center">
              <label for="Submit"></label>
              <input type="submit" name="login" value="submit" id="Submit" />
              <label for="label2"></label>
              <input type="submit" name="insert" value="insert" id="label2" />
              <label for="label3"></label>
              <input type="submit" name="Show" value="Show" id="label3" />
    </div></td>
    </tr>
</table>
</form>
<?php
 if(isset($_POST["login"]))
 {
    
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$x=0;
	$con= mysqli_connect("localhost","root","","amity");
	//echo $con;
	$sql="select * from student1 where USER='".$user."'and PASS='".$pass."'";
	
	//echo $sql;
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result))
	{
	  $x=1;
	  }
	  if ($x==1)
	  {
	    echo "Valid user";
		}else
		{
		echo "invalid user";
		}
		}
		
		if (isset($_POST["insert"]))
		    {
			   //echo "Yes insert  is working";
			   $user = $_POST["user"];
	           $pass = $_POST["pass"];
			   $con= mysqli_connect("localhost","root","","amity");
			   $sql="INSERT INTO `student1`(`USER`, `PASS`) VALUES ('$user','$pass')";
			   mysqli_query($con,$sql);
			   echo "data has been inserted successfully";
			   //echo $con;
			   
			   }
			if (isset($_POST["Show"]))
		    {
			   $user = $_POST["user"];
			   //echo $user;
			   //echo $user;
			   //echo $user;
			   $con= mysqli_connect("localhost","root","","amity");
			   $sql="select * from student1 where USER='".$user."'";
			  
			   $result = mysqli_query($con,$sql);
			   while($row=mysqli_fetch_array($result))
			   {
			     echo $row[2];
				 echo "<img width=20% height=20% src=".$row[3].">";
				 }
				 }
			   
			   
			   
		
		
		  
?>
</body>
</html>