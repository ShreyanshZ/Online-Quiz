



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
			<header><h2><a href="#" title="First Post">Success</a></h2></header>
					
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
$totalno=$_SESSION['no'];
$table=$_SESSION['table'];

for($i=0;$i<$totalno;$i++)
{
	$question=$_POST[$i];
	$option1=$_POST['option1'.$i];
	$option2=$_POST['option2'.$i];
	$option3=$_POST['option3'.$i];
	$option4=$_POST['option4'.$i];
	$ans=$_POST['ans'.$i];
	$query="insert into ".$table." values($i,'$question','$option1','$option2','$option3','$option4',$ans)";
	$result=mysql_query($query);
}
}
echo 'Success';

echo '<br><a href="quizzes.php">BAck Again</a>';
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










