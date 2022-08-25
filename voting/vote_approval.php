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
	width:112.5%;
	margin:auto;
	margin-top:-10%;
	height:450px;
	margin-left:13.5%;
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




</style>
</head>
<body >

<ul>
  <li ><font face = "Times New Roman" size = "4"><a   href="home.php">Home</a></li>
  <li><a class="active"  href="votepage.php">Vote</a></li>
  <li><a href="#contact">Results</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
 <li><a href="account.php">Account Details</a></li>
 <li><a   href="voter_history.php">Vote History</a></font></li>
</ul>
 
<div style="margin-left:-15%;padding:8% 300px;height:100%; background-image:url('https://www.gannett-cdn.com/presto/2019/03/20/PBIN/e9dfb24f-3532-4245-bb5e-a3b9665583fe-GettyImages-884243522.jpg?crop=4999,2835,x0,y559&width=3200&height=1680&fit=bounds'); background-size:1750px 800px;  background-repeat:no-repeat,no-repeat;background-attachment: fixed ;">
  <form action="votepage.php" method="post">
  <?php $user=$_SESSION['username'];?>
   <?php
				$results1 = mysqli_query($con, "SELECT * FROM voter where username='$user'");
				while ($row = mysqli_fetch_array($results1)) { 
					$vill=$row['villa_name'];
				}
	?>
  
			 <div class="inner_container">
			 <center>  
				<h2 style="color:white;"><i>CAST YOUR VOTE <u><?php echo "$user"?></u></i></h2>
			</center>
			<?php 
				$results = mysqli_query($con, "SELECT * FROM candidate where contest_villa='$vill'");
			?>	
			<table border="0%">
				<thead style="color:white" >
					<tr><b>
						<th>VOTER ID</th>
						<th>VOTER NAME</th>
						<th>VOTER PHONE NUMBER</th>
						<th>VOTER EMAIL</th>
						<th>VOTER VILLAGE</th>
						<th>VOTER AADHAR NUMBER</th>
						<th>VOTER DATE OF BIRTH</th>
						<th>VOTER ADDRESS</th>
						<th>VOTER APPROVAL STATUS</th></b>
					</tr>
				</thead>
	
				<?php while ($row = mysqli_fetch_array($results)) { ?>
					<tr>
						<td><?php echo $row['voter_id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['phonenum']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['villa_name']; ?></td>
						<td><?php echo $row['aadhar_card']; ?><t/d>
						<td><?php echo $row['date_of_birth']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><?php echo $row['apporval_status']; ?></td>
							
						
						
						<td>
							<button name="vote" type="submit" value="<?php echo $row['voter_id'] ; ?>" class="btn btn-success">Cast Vote</button>
						</td>
					</tr>
				<?php } ?>
			</table>
			
		</form>
		<button class="button" name="button" type="button" onclick="location.href='home.php'">LOGOUT</button>
	</div>	
		
</div>
<?php
			if(isset($_POST['vote']))
			{
				
				$vote=$_POST['vote'];
				$user=$_SESSION['username'];
				$results = mysqli_query($con, "SELECT * FROM voter where username='$user'");
				 while ($row = mysqli_fetch_array($results)) {
					$voterid=$row['voter_id'];
				 }
				 $date =date('Y/m/d');
				$query1=" INSERT INTO voting_details (voter_id, candidate_id,date_of_vote) VALUES ('$voterid','$vote','$date') ;";
						$query_run1=mysqli_query($con,$query1);
						if($query_run1)
						{  
							 echo'<script type"text/javascript"> alert("you vote is successful")</script>';
						}
						else
						{
							echo'<script type"text/javascript"> alert("you can vote for once")</script>';
						}
			}
		
		
		?>

</body>
</html>

		