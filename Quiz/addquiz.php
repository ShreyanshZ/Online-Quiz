
<?php

session_start();

if(isset($_SESSION['SESS_MEMBER_ID']))	
			{
				?>	
			
			
			
					
			
		
				<?php
			
					$name=$_SESSION['SESS_MEMBER_ID'];
					echo $name;
echo"<input type=button value =ADD QUIZ onclick=add.php>";
}
?>