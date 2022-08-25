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
	width:80%;
	margin:auto;
	margin-top:-7%;
	height:450px;
	margin-left:25%;
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
    width:85%;
    margin: 30px auto;
	column-width:5%;
    border-collapse: collapse;
    text-align:center;
	 border: 0px;
	 color:white;
}
table, th, td {
  border: 1px solid black;
   font-size: 16px;
}
tr {
    border-bottom: 3px solid #cbcbcb;
	padding: 2px;
}
th{
	 border: 2px solid black;
}
 td{
    border: 3px;
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
 <li><font face = "Times New Roman" size = "4"><a  href="ec_home.php">welcome</a></li>
  <li><a  href="voter_approval.php">Voter Approval</a></li>
  <li><a href="candidate_approval.php">Candidate Approval</a></li>
  <li><a class="active" href="ec_results.php">Results</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#contact">About</a></li>
<li><a href="ec_account.php">Account Details</a></li>  </font>
</ul>
 
<div style="margin-left:-15%;padding:8% 300px;height:100%;width:125%; background-image:url('https://www.gannett-cdn.com/presto/2019/03/20/PBIN/e9dfb24f-3532-4245-bb5e-a3b9665583fe-GettyImages-884243522.jpg?crop=4999,2835,x0,y559&width=3200&height=1680&fit=bounds'); background-size:1750px 800px;  background-repeat:no-repeat,no-repeat;background-attachment: fixed ;">
  <form action="ec_results.php" method="post">
  <?php $ec_username=$_SESSION['ec_username'];?>
  
			 <div class="inner_container">
			 <center>  
				<h2 style="color:white;"><i>APPROVE/REJECT VOTER <u><?php echo "$ec_username"?></u></i></h2>
			</center>
			<?php
			 $result2 = mysqli_query($con, "SELECT * FROM ec_details where username='$ec_username'");
				 while ($row = mysqli_fetch_array($result2)) {
					$ec_id=$row['ec_id'];
				 }
			?>
			
			<?php 
				$results = mysqli_query($con, "SELECT * FROM vill_details where results_status='pending' or results_status='approve' ");
			?>	
			
			<table border="0%" width="60%">
				<thead style="color:white" >
					<tr><b>
						<th>VILLAGE ID</th>
						<th>VILLAGE NAME </th>
						<th>DISTRIST</th>
						<th>STATE</th>
						<th>RESULTS STATUS</th>
						<th>POST THE RESULTS</th>
						</b>
					</tr>
				</thead>
	
				<?php while ($row = mysqli_fetch_array($results)) {
					$villa_id=$row['villa_id'];
					?>
					<tr>
						<td><?php echo $row['villa_id']; ?></td>
						<td><?php echo $row['villa_name']; ?></td>
						<td><?php echo $row['disrt']; ?></td>
						<td><?php echo $row['state']; ?></td>
						<td><?php echo $row['results_status']; ?></td>
						
						
						<td>
							<button name="vote" type="submit" value="approve" class="btn btn-success">Approve Voter</button>
							 
							<button name="rvote" type="submit" value="pending" class="btn btn-danger">Reject Voter</button>
						</td>
					</tr>
				<?php } ?>
			</table>
			
		</form>
		<center><button class="button" name="button" type="button" onclick="location.href='home.php'">LOGOUT</button></center>
	</div>	
		
</div>
<?php
			if(isset($_POST['vote']))
			{
				
				$vote=$_POST['vote'];
				 $date =date('Y/m/d');
				 
				$query1=" update vill_details set results_status='$vote' where villa_id='$villa_id';";
						$query_run1=mysqli_query($con,$query1);
						if($query_run1)
						{  
							
							echo'<script type"text/javascript"> alert("RESULTS WILL BE POSTED")</script>';
							
						}
						else
						{
							echo'<script type"text/javascript"> alert("you can vote for once")</script>';
						}
			}
			else if(isset($_POST['rvote']))
			{
				
				
				$rvote=$_POST['rvote'];
				 $date =date('Y/m/d');
				 
				$query1=" update vill_details set results_status='$rvote' where villa_id='$villa_id';";
						$query_run1=mysqli_query($con,$query1);
						if($query_run1)
						{  
							
							echo'<script type"text/javascript"> alert("RESULTS WILL BE STOPED POSTING")</script>';
							
						}
						else
						{
							echo'<script type"text/javascript"> alert("you can vote for once")</script>';
						}
			}
		
		
		?>
		
		

</body>
</html>

		