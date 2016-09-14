<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html>
   
   <head>
      <title>sign up</title>
  
   </head>
	
<body style="font: 14px/20px  Arial, Helvetica, sans-serif;	color:#5f5e4e;" bgcolor="#d7d7b1">
<center>
<font align="center" style="color:teal; "><h1 style="font-family: Comic Sans MS,cursive,san-serif">ITALIAN CUISINE</h1></font>
      
      <h2>Enter Your Credentials</h2> 
	  
      <div class="container form-signin">
         
         
					 <?php
				$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
				$msg="";
				$db = mysql_select_db("restaurant", $connection); // Selecting Database from Server
				if(isset($_POST['login'])){ // Fetching variables of the form which travels in URL
				
				$username = $_POST['name'];
				$id=$_POST['id'];
				$password = $_POST['password'];
				
				if($username!='' ||$password!='' ){
				//Insert Query of SQL
				$query = mysql_query("insert into users(name,id, Password) values ('$username','$id' ,'$password')");
				
				}
				}
				?>
		 
		 
      </div> <!-- /container -->
      
      <div class="container">
      
         <form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
            <input type="text" class="form-control" name="name" placeholder="name" required autofocus></br>
			<input type="text" class="form-control" name="id" placeholder="id" required autofocus></br>
            <input type="password" class="form-control" name="password" placeholder="password" required><br><br>
            <button  type="submit" name="login" value="login" >signup</button>
			
			
         </form>
		<form action="index1.php" >
			<input  type="submit" value="back">
		</form>
         
      </div> 
      </center>
   </body>
</html>