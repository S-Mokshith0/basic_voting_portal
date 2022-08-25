<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
	session_start();

					$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
					mysqli_select_db ($con,'voting');
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
	margin-top:-5%;
	height:450px;
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
  background-color:#4CAF50;
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
  background-color: #4CAF50;
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
	
	background-color: #4CAF50;
	color: white;
}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #4CAF50; color: white;
}

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
  <li ><font face = "Times New Roman" size = "4"><a   href="home.php">Home</a></li>
  <li ><a   href="votepage.php">Vote</a></li>
  <li><a href="voter_results.php">results</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
 <li><a class="active" href="account.php">Account Details</a></li>
 <li><a   href="vote_history.php">Vote History</a></font></li>
</ul>
 
<div style="margin-left:-15%;padding:8% 300px;height:100%; background-image:url('https://www.gannett-cdn.com/presto/2019/03/20/PBIN/e9dfb24f-3532-4245-bb5e-a3b9665583fe-GettyImages-884243522.jpg?crop=4999,2835,x0,y559&width=3200&height=1680&fit=bounds'); background-size:1750px 800px;  background-repeat:no-repeat,no-repeat;background-attachment: fixed ;">
  <form action="votepage.php" method="post">
 
   <?php $user=$_SESSION['username'];?>
			 <div class="inner_container">
			 <center>  
				<h1 style="color:white;"><U><i>Account details</i></U></h1><br>
			</center>
			<center>
			<?php 
				$results = mysqli_query($con, "SELECT * FROM voter where username='$user'");
			?>	
			
				<?php while ($row = mysqli_fetch_array($results)) { ?>
					<label>	<b>VOTER NAME :</b><i><?php echo $row['name']; ?></i></label><br>
					<label>	<b>VOTER AADHHAR CARD :</b><i><?php echo $row['aadhar_card']; ?></i></label><br>
					<label>	<b>VOTER ID :</b><i><?php echo $row['voter_id']; ?></i></label><br>
					<label><b>	PHONE NUMBER :</b><i><?php echo $row['phonenum']; ?></i></label><br>
					<label><b>	EMAIL ID :</b><i><?php echo $row['email']; ?></i></label><br>
					<label><b>	DATE OF BIRTH :</b><i><?php echo $row['date_of_birth']; ?></i></label><br>
					<label><b>	ADDRESS :</b><i><?php echo $row['address']; ?></i></label><br>
					<label><b>	VILLAGE NAME :</b><i><?php echo $row['villa_name']; ?></i></label><br>
					<label><b>	USERNAME :</b><i><?php echo $row['username']; ?></i></label><br>
					<label><b>	PASSWORD :</b><i><?php echo $row['password']; ?></i></label><br>
					<label><b>	APPROVAL STATUS :</b><i><?php echo $row['apporval_status']; ?></i></label><br>
				<?php } ?><br>
				
			</center>
			<center><button class="button" name="button" type="button" onclick="location.href='voter_edit.php'">EDIT YOUR DETAILS</button><br></center><br>
			<CENTER>	<a href="votepage.php"><font size="3px" color="khaki">GO BACK</font></a></CENTER>
		</form>
		
		
		
</div>

</body>
</html>

		