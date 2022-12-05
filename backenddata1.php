<html>
<head>
<title> DATABASE </title>
</head>
<body>
   <?php
      $connection=mysqli_connect("localhost","root","","RForm2");
      if(!$connection)
      {
	     die("couldn't connect to server");
      }
	$sql_query="CREATE DATABASE RForm2";
	  mysqli_query($connection,$sql_query);
	  $sql_query1="create table regform2(
	              name1 varchar(40) ,
				  e_mail1 varchar(40),
				  comments varchar(150))";
	 	  mysqli_query($connection,$sql_query1);
	  $name1=$_POST['n2'];
	  $e_mail1=$_POST['e2'];
	  $comments=$_POST['c1'];
	  $sql_query2="insert into regform2(name1,e_mail1,comments)
                 values('$name1','$e_mail1','$comments')";
		mysqli_query($connection,$sql_query2);		 
 echo ("<script LANGUAGE='JavaScript'>
    window.alert('Thank you for your suggestions!!');
    window.location.href='/sparks_repair/index.php';
	</script>");
?>
</body>
</html>