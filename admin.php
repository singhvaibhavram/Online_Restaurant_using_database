<center>
<?php
session_start();
$username = $_SESSION['name'];
//echo 'welcome '.$username;
?>


<body style="font: 14px/20px  Arial, Helvetica, sans-serif;	color:#5f5e4e;" bgcolor="#d7d7b1">
<font align="center" style="color:teal; "><h1 style="font-family: Comic Sans MS,cursive,san-serif">ITALIAN CUISINE</h1></font>
<form method=post>
			<h1><u><b><?php
			echo 'Welcome '.$username;
			?></h1></u></b>
			<br>
			Name: <input type="text" name="customer_name"> &nbsp&nbsp
			
			
			<input type="submit" name="submit"><br><br>
			<input type="submit" name="total_profit" value="profit">
</form>
<form action="index.php" >
			<input  type="submit" value="logout">
		</form>
		<?php
	
	if(isset($_POST['submit']))		//check if username is not null
	{
		if(isset($_POST['customer_name']) )
		{
		$user_data = fopen($_POST['customer_name'].'.txt','r') or die("Unable to open file!");
		while(!feof($user_data)) {
			echo fgets($user_data) . "<br>";
				}
		
			
			
		fclose($user_data);
		}
		else 
		{
			echo "Enter valid user name";	
		}
	}
	
	if(isset($_POST['total_profit']))
	{
		echo "profit from all the customers =".$_SESSION['profit'];
	}
	
?>
</center>		