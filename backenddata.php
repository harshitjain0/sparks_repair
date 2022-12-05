<html>
<head>
<title> DATABASE </title>
</head>
<body>
   <?php
      $connection=mysqli_connect("localhost","root","","RForm1");
      if(!$connection)
      {
	     die("couldn't connect to server");
      }
	  $sql_query="CREATE DATABASE RForm1";
	  mysqli_query($connection,$sql_query);
	  $sql_query1="create table regform1(
	              name1 varchar(40) ,
				  e_mail1 varchar(40),
				  add1 varchar(60),
				  pincode varchar(10),
				  phone1 varchar(50))";
	 	  mysqli_query($connection,$sql_query1);
	  $name1=$_POST['n1'];
	  $e_mail1=$_POST['e1'];
	  $add1=$_POST['a1'];
	  $pincode=$_POST['p1'];
	   $phone1=$_POST['s1'];
	  $sql_query2="insert into regform1(name1,e_mail1,add1,pincode,phone1)
	               values('$name1','$e_mail1','$add1','$pincode','$phone1')";
				   mysqli_query($connection,$sql_query2);
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('The record of the user has been stored');
    window.location.href='/sparks_repair/rate-cards.php';
	</script>");
?>
</body>
</html>