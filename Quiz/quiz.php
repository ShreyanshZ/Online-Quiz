



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
	
	$table=$_GET["input"];
	
	$query="select * from ".$table;

	
	
	$_SESSION['table']=$table;
	?>

<form name="input" action="checkanswers.php" method="post">
<?php 

	if($query_run=mysql_query($query))
	{
		while($query_row=mysql_fetch_assoc($query_run))
		{
			$x=$query_row['qnum'];	
			echo '
				<p>'.$query_row['question'].'</p>
				<input type="radio" name="';echo 'q'.$x; echo '" value="1">'.$query_row['option1'].'<br>
				<input type="radio" name="';echo 'q'.$x; echo '" value="2">'.$query_row['option2'].'<br>
				<input type="radio" name="';echo 'q'.$x; echo '" value="3">'.$query_row['option3'].'<br>
				<input type="radio" name="';echo 'q'.$x; echo '" value="4">'.$query_row['option4'].'<br>
			';
		}
	}
}
?>

<input type="submit" value="Go!!!">
</form> 



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

