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
	width:90%;
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
    width:80%;
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
  <li><font face = "Times New Roman" size = "4"><a  href="candidate_home.php">welcome</a></li>
  <li><a href="candidate_account.php">Account Details</a></li>
  <li><a class="active" href="candidate_results.php">Results</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#contact">About</a></li>  </font>
</ul>
  <?php
			$query1="select * from vill_details where  results_status='approve'";
						$query_run1=mysqli_query($con,$query1);
						if($query_run1)
						{  
						  $query2="select * from voting_details where status='unupdated';";
						  $query_run2=mysqli_query($con,$query2);
						   while ($row = mysqli_fetch_array($query_run2))
						   {
							   $candidate_id=$row['candidate_id'];
							   $vote_id=$row['vote_id'];
							   $query3="update candidate set no_of_votes=no_of_votes+1 where candi_id='$candidate_id';" ;
							   $query_run3=mysqli_query($con,$query3);
							   $query4="update voting_details set status='updated' where vote_id='$vote_id'";
							   $query_run4=mysqli_query($con,$query4);
						   }
							   
						}
						else
						{
							echo'<script type"text/javascript"> alert("you can vote for once")</script>';
						}
		?>
 
<div style="margin-left:-15%;padding:8% 300px;height:100%; background-image:url('https://www.gannett-cdn.com/presto/2019/03/20/PBIN/e9dfb24f-3532-4245-bb5e-a3b9665583fe-GettyImages-884243522.jpg?crop=4999,2835,x0,y559&width=3200&height=1680&fit=bounds'); background-size:1750px 800px;  background-repeat:no-repeat,no-repeat;background-attachment: fixed ;">
		<div class="inner_container">
		<h3><div style="margin-left:0%; color:white"><b>CANDIDATES RESULTS DETAILS</b></div></h3>
		<?php
		 $candi_username=$_SESSION['candi_username'];
		$query1="select contest_villa from candidate where username ='$candi_username'";
						$query_run1=mysqli_query($con,$query1);
						while ($row = mysqli_fetch_array($query_run1))
						   {
							   $village=$row['contest_villa'];
						   }
		$query2="select * from candidate where contest_villa ='$village'";
						$query_run2=mysqli_query($con,$query2);
						while ($row = mysqli_fetch_array($query_run2))
						   {
		?>
						  
		
		<div style="margin-left:0%;color:white">CANDIDATE ID :</b><i><?php echo $row['candi_id']; ?></i></div>
		<div style="margin-left:0%;color:white">CANDIDATE NAME :</b><i><?php echo $row['candi_name']; ?></i></div>
		<div style="margin-left:0%;color:white">CANDIDATE PHOTO :</b><i><?php echo $row['candi_photo']; ?></i></div>
		<div style="margin-left:0%;color:white">CANDIDATE SYMBOL :</b><i><?php echo $row['candi_symbol']; ?></i></div>
		<b><div class="alert alert-success" role="alert" style="margin-left:0%;">NO OF VOTES :</b><i><?php echo $row['no_of_votes']; ?></i></div><BR><BR><b>
		
		<?php
			}
			$query2="select * from candidate where contest_villa ='$village'";
			$query_run2=mysqli_query($con,$query2);
			$no=mysqli_num_rows($query_run2);
			$cou=0;
			while ($row = mysqli_fetch_array($query_run2))
				{
					$candidate_id=$row['no_of_votes'];
					$cou=$cou+1;
					$array[$candidate_id]=($row['no_of_votes']);
				}
				
				for($k = 0; $k < $no; $k++)
						{
							echo $array[$k];
						}
						
					$n = count($array);
					$max1 =0;
					for($i = 0; $i < $no; $i++)
						{
							if ($max1 > $array[$i])
							{
								$max1 = $array[$i];
								echo $max1;
							}
							
						}
					
		?>
		
		<center><button class="button" name="button" type="button" onclick="location.href='home.php'">LOGOUT</button></center>
	</div>	
		
</div>

		
		

</body>
</html>

		