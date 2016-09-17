



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
			<header><h2><a href="#" title="First Post">Your Result</a></h2></header>
					
				<content>
<form action="addquestions.php" method="post">
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
$table=$_POST['table'];
$totalquestions=$_POST['totalquestions'];
$category=$_POST['category'];
$quizname=$_POST['quiz'];

$select="select category_id from categories where category_name='".$category."'";
$result=mysql_query($select);
$ans=mysql_fetch_assoc($result);
$id=$ans["category_id"];

$_SESSION['no']=$totalquestions;
$_SESSION['table']=$table;
$query="create table ".$table." (qnum int(11),question text,option1 text,option2 text,option3 text,option4 text,answer int(11))";
$result=mysql_query($query);
for($i=0;$i<$totalquestions;$i++)
{
	echo "Question ".$i.":";
	echo "<input type='text' name=".$i." size='70'></br></br>";
	echo"Option 1:";
	echo "<input type='text' name=option1".$i." size='10'></br>";
	echo"Option 2:";
	echo "<input type='text' name=option2".$i." size='10'></br>";
	echo"Option 3:";
	echo "<input type='text' name=option3".$i." size='10'></br>";
	echo"Option 4:";
	echo "<input type='text' name=option4".$i." size='10'></br>";
	
	echo "Answer :";
	echo "<input type='text' name=ans".$i." size='10'></br>";
	echo"</br>";
}

$query="insert into quiznames (quiz_name,quiz_table,quiz_category) values ('".$quizname."','".$table."',".$id.")";
$result=mysql_query($query);
}
?>
<center>
<input type="submit" value="ADD">
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











<html>
<body>

</body>
</html>