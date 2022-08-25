<?php
	session_start();
	//phpinfo();
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
		margin: 0;
		background-image:url(../img/download4.jpeg);
		background-size:cover;
		background-repeat:no-repeat,repeat;
		margin:0 auto;
		color: white;

	}

ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		width: 17%;
		background-color: #f1f1f1;
		position: fixed;
		height: 100%;
		overflow: auto;
	}

li a{
		display: block;
		color: #000;
		padding: 20px 16px;
		text-decoration: none;
	}

li a.active {
				background-color: #4CAF50;
				color: white;
			}

li a:hover:not(.active) {
							background-color: #555;
							color: white;
						}
.inner_container
{
	background:rgba(44,62,80,0.7);
	padding:40px;
	width:25%;
	margin:auto;
	margin-top:0%;
	margin-left:45%;
	border-radius:15px;
	height: auto;
}
.inputvalues1
{
	width:240px;
	text-align:center;
	background:transparent;
	border:none;
	border-bottom:1px solid #fff;
	font-family:'play',sans-serif;
	font-size:16px;
	font-weight:200px;
	padding:10px 0;
	transition:border 0.5s;
	outline:none;
	color:#fff;
}
.sub
{
	border:none;
	width:190px;
	background:white;
	color:#000;
	font-size:16px;
	line-height:25px;
	padding:10px 0;
	border-radius:15px;
	cursor:pointer;
}
.sub:hover
{
	color:#fff;
	background-color:black;
}


.logo img
{ 
	float: center;
	width: 190px;
	height: 160px;
	margin-left:15%;
	margin-top:-20%;
	margin-left:15%;
}
.dropbtn {
  background-color:;
  color: black;
  padding: 20px 15px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display:outline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover 
{
	
	background-color: #555;
	color: white;
}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #555; color: white;}


</style>
</head>
<body >

<ul>
  <li><font face = "Times New Roman" size = "4"><a  href="home.php">Home</a></li>
  <li><a  class="active" href="voterlogin.php">Login</a></li>
  <li><a   href="voterlogin.php">Vote History</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <div class="dropdown">
  		<li class="dropbtn"> Account</li>
        <div class="dropdown-content">
   			  <a href="votersignup.php">Sign Up</a>
   			
  		</div>
  </div></font>
</ul>
 
<div style="margin-left:-1%;height:750px; background-image:url('https://www.gannett-cdn.com/presto/2019/03/20/PBIN/e9dfb24f-3532-4245-bb5e-a3b9665583fe-GettyImages-884243522.jpg?crop=4999,2835,x0,y559&width=3200&height=1680&fit=bounds'); background-size:1750px 800px; background-repeat:no-repeat,no-repeat;background-attachment: fixed;">
  <form action="voterlogin.php" method="post">
	<br><br><br><br><br>
		<div class="inner_container">
			<center>
			<h1>LOG IN</h1>
			</center>
			<label style="color:white"><b>USERNAME:</b></label><br>
			<input name="username"type="text" class="inputvalues1"  required /><br><br>
			<label style="color:white"><b>PASSWORD:</b></label><br>
			<input name="password"type="password" class="inputvalues1"  required /><br><br>
			<a href="customerspassswordpage.php"><font size="3px" color="khaki">FORGOT PASSWORD</font></a><br><br>
			<center><input class="sub" name="submit" type="submit" id="button" value="SUBMIT"/><br></center>
			<br>
				<center>Doesn't have an account click here <a href="votersignup.php"><font size="3px" color="khaki">SIGN UP</font></a><br><br></center>
			<CENTER>	<a href="home.php"><font size="3px" color="khaki">GO BACK</font></a></CENTER><br><br>
			</div>
			
		</form>
		<?php
					$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
					mysqli_select_db ($con,'voting');
				?>
		<?php
			 
			if(isset($_POST['submit']))
				{ 
					$username=$_POST['username'];
					$password=$_POST['password'];
						$query = "select * from voter where username='$username' and password='$password' and apporval_status='approve'";
						$query_run= mysqli_query($con,$query) or die( mysqli_error($con));
						if($query_run)
						{
							if(mysqli_num_rows($query_run)>0)
							{
								$_SESSION['username'] = $username;
								header('Location:votepage.php');
								
							}
							else
							{
							
								echo '<script type="text/javascript">alert("CHECK YOUR CREDENTIALS ")</script>';
							}
						}
				
						else
						{
							echo '<script type="text/javascript">alert("DATABASE ERROR")</script>';
						}
				}
				
			
				
			
			?>
			
<script>
</div>

</body>
</html>
