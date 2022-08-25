<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php

					$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
					mysqli_select_db ($con,'voting');
?>
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
		body:white;

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
	width:55%;
	margin:auto;
	margin-top:2%;
	height:auto;
	margin-left:43%;
	border-radius:15px;
	height: auto;
	color:white;
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

.button
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
.button:hover
{
	color:#fff;
	background-color:black;
}


table{
    width:90%;
    margin: 30px auto;
	column-width:5%;
    border-collapse: collapse;
    text-align:center;
	 border: 0px;
	 color:white;
}
table, th, td {
  border: 0px solid black;
   font-size: 16px;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}




</style>
</head>
<body >

<ul>
  <li><font face = "Times New Roman" size = "4"><a  href="ec_home.php">welcome</a></li>
  <li><a  href="voter_approval.php">Voter Approval</a></li>
  <li><a  href="candidate_approval.php">Candidate Approval</a></li>
  <li><a href="ec_results.php">Results</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#contact">About</a></li>
<li><a class="active" href="ec_account.php">Account Details</a></li>  </font>

</ul>
 
<div style="margin-left:-15%;padding:8% 300px;height:100%; background-image:url('https://www.gannett-cdn.com/presto/2019/03/20/PBIN/e9dfb24f-3532-4245-bb5e-a3b9665583fe-GettyImages-884243522.jpg?crop=4999,2835,x0,y559&width=3200&height=1680&fit=bounds'); background-size:1750px 800px;  background-repeat:no-repeat,no-repeat;background-attachment: fixed ;">
  <form action="candidate_account.php" method="post">
 
   <?php $ec_username=$_SESSION['ec_username'];?>
			 <div class="inner_container">
			 <center>  
				<h1 style="color:white;"><U><i>Account details</i></U></h1><br>
			</center>
			<center>
			<?php 
				$results = mysqli_query($con, "SELECT * FROM ec_details where username='$ec_username'");
			?>	
			
				<?php while ($row = mysqli_fetch_array($results)) { ?>
					<label>	<b>ELECTION COMMISSION ID :</b><i><?php echo $row['ec_id']; ?></i></label><br>
					<label>	<b>ELECTION COMMISSION OFFICER NAME :</b><i><?php echo $row['name']; ?></i></label><br>
					<label><b>	PHONE NUMBER :</b><i><?php echo $row['phonenum']; ?></i></label><br>
					<label><b>	EMAIL ID :</b><i><?php echo $row['gmail']; ?></i></label><br>
					<label><b>	USERNAME :</b><i><?php echo $row['username']; ?></i></label><br>
					<label><b>	PASSWORD :</b><i><?php echo $row['password']; ?></i></label><br>
				<?php } ?><br>
				
			</center>
			<center><button class="button" name="button" type="button" onclick="location.href='ec_account_edit.php'">EDIT YOUR DETAILS</button><br></center><br>
			<CENTER>	<a href="candidate_home.php"><font size="3px" color="khaki">GO BACK</font></a></CENTER>
		</form>
		
		
		
</div>

</body>
</html>

		