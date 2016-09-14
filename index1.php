<!DOCTYPE html>
<html lang="en">
     <head>
		<title>Home</title>
		
		<meta charset="utf-8">
    
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="grid.css">
     </head>

<body class="page1">

		 
		  <?php

			
				$db_name="restaurant"; // Database name 

				// Connect to server and select databse.
				mysql_connect("localhost", "root", "")or die("cannot connect"); 
				mysql_select_db("$db_name")or die("cannot select DB");

				// username and password sent from form 
				if(isset($_POST['login'])){ 
				$myusername=$_POST['username']; 
				$mypassword=$_POST['password'];
				if($myusername!='' ||$mypassword!='' ){ 


				$sql="SELECT * FROM users WHERE id='$myusername' and password='$mypassword'";
				$result=mysql_query($sql);

				// Mysql_num_row is counting table row
				$count=mysql_num_rows($result);
				if($myusername == 'admin' and $mypassword='admin')
				{
				header("location:admin.php");
				session_start();
				$_SESSION['name'] = $myusername;
				
				break;
				}
				// If result matched $myusername and $mypassword, table row must be 1 row
				if($count==1){

				// Register $myusername, $mypassword and redirect to file "login_success.php".
				session_start();
				$_SESSION['name'] = $myusername;

				header("location:index-2.php");
				}
				else {
				echo "Wrong Username or Password";
				}
				}
				}
				?>
		 
<div class="login">
<div class="container">
		<table width="100%">
		<tr>
		<td>
		<div align="left"><img src="images/logo.gif" width="200px" height="150px" ></div></td>
        <td align="right"> <div><form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
            <input type="text" class="form-control" name="username" placeholder="username" required autofocus></br>
            <input type="password" class="form-control" name="password" placeholder="password" required><br>
            <button  type="submit" name="login">Login</button>
			<br><a href="newuser.php">new user..?</a>
         </form>
		 </div></td>
			</tr>
         </table>
      </div> 

</div>
<div class="content">
	
	<a href="index-2.html" class="block1">
		<img src="images/blur_img1.jpg" alt="">
		<span class="price"><span>magna non nunc</span><span>$29.35</span></span>
	</a>
	<a href="index-2.html" class="block1">
		<img src="images/blur_img2.jpg" alt="">
		<span class="price"><span>terto nomino</span><span>$ 35.45</span></span>
	</a>
	<a href="index-2.html" class="block1">
		<img src="images/blur_img3.jpg" alt="">
		<span class="price"><span>metus feugiat</span><span>$50.10</span></span>
	</a>

	<div class="container_12">
		
			<h3>New in Menu</h3>
		
		<div class="grid_3">
			<div class="box maxheight">
				<img src="images/box_img1.jpg" alt="">
				<div class="title">Lorem Ipsum</div>
				Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. 
				<br>
				<a href="#">More Info</a>
			</div>
		</div>
		<div class="grid_3">
			<div class="box maxheight">
				<img src="images/box_img2.jpg" alt="">
				<div class="title">Aliquamh ante</div>
				Benteger convallis orci veli elaoreet, at ornare loremo konsequat. Phasellus era nisl auctor vel veliterut. 
				<br>
				<a href="#">More Info</a>
			</div>
		</div>
		<div class="grid_3">
			<div class="box maxheight">
				<img src="images/box_img3.jpg" alt="">
				<div class="title">Ulum volutpat</div>
				Hrtolieger convallis omi tem aore, at ornare loren coate. Pasellus era nisl auctor vel veliterolsed pharetra. 
				<br>
				<a href="#">More Info</a>
			</div>
		</div>
		<div class="grid_3">
			<div class="box maxheight">
				<img src="images/box_img4.jpg" alt="">
				<div class="title">Vestibulum volu</div>
				Convallis orci vel mi oreet, at kotornare lorem consequat. Sellus era nisl auctor vel veliterolvenenatis nulla. 
				<br>
				<a href="#">More Info</a>
			</div>
		</div>
  </div>
</div>


    
</body>
</html>