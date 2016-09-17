



<!DOCTYPE html>
<html lang="en">

<head>
	<title>Responsive Theme</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<meta name="viewport" content="width:device-width,initial-scale=1.0">
</head>

<body class="body">
	<?php
	
	include('head.php');
	?>

	<div id="mainContent">
		<div class="content">
			<article class="topContent">
			<header><h2><a href="#" title="First Post">Answer Carefully</a></h2></header>
					
				<content>
				<form action="createquiz.php" method="post">
					<?php

session_start();

if(isset($_SESSION['SESS_MEMBER_ID']))	
			{
				?>	
			
			
			
					
			
		
				<?php
			
					$name=$_SESSION['SESS_MEMBER_ID'];
					
	$db=mysql_connect('localhost','root','shrey');

	if(!$db)
	{
		die("not connected".mysql_error());
	}
	$select=mysql_select_db('quiz');
	
	if(!$select)
	{
		die("Not selected".mysql_error());
	}

echo"<table><tr><td>Quiz Name:</td>" ;
echo"<td><input type=text name=quiz ></td></tr>";
echo"<tr><td>Table Name: </td><td>";
echo"<input type=text name=table size=10></td></tr>";
echo"<tr><td>Total Questions: </td><td>";
echo"<input type=text name=totalquestions size=5></td></tr>";

echo"<tr><td>Category:</td> ";

$query="select * from categories";


$result=mysql_query($query);
echo"<td><select name=category>";
while($row=mysql_fetch_array($result))
{
	echo '<option value="'.$row['category_name'].'"'.'>'.$row['category_name'].'</option>';
}
//$_SESSION['cat_id']=$row['category_id'];
echo"</select></td></tr><tr><td>";

}
?>

<input type="submit" value="SUBMIT">
</td></tr></table>
				</content>
			</article>
			

			
			
		</div>
	</div>

	<aside class="top-sidebar">
		<article>
			<h2><?php echo '<h1>Welcome '.$name.'!</h1>';?></h2>
			<p>Participate and win</p>
		</article>
	</aside>

	<footer class="mainFooter">
		<p>Copyright &copy; Shreyansh</p>
	</footer>
</body>

</html>
