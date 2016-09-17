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

										$query="select * from categories";
										if($query_run=mysql_query($query))
										{
										echo '<table><caption><pre><h2>Select category</h2></pre></caption>';
											while($query_row=mysql_fetch_assoc($query_run))
											{
												$link='<a href="category.php?input=';
												$title=$query_row['category_name'];
												$id=$query_row['category_id'];
												//$desc=$query_row['blog_desc'];
												$link=$link.$id.'">';
												echo '<tr><td>'.$link ;
												echo $title.'</td></tr></a>';
											}
											echo '</table>';

										}
									}
									?>

					

		
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

















