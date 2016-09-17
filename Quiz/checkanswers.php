



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
	
	
	$table=$_SESSION['table'];
	
	$query="select qnum,answer from ".$table;	


$count=0;
if($query_run=mysql_query($query))
	{
		while($query_row=mysql_fetch_assoc($query_run))
		{
			$x=$query_row['qnum'];	
			if(isset($_POST['q'.$x]))
			{
				$answer[$x]=$_POST['q'.$x];
			}
			else
			{
				$answer[$x]=0;
			}	
			if($answer[$x]==$query_row['answer'])
			{
				$count++;
			}
		}
	}

	echo '<br><h3>Total Correct Answers : '.$count.'</br>';
	
	echo '<a href="quizzes.php">BAck Again</a>';
}
?>


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






































