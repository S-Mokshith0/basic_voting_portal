<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
		color: black;

	}

ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		width: 15%;
		background-color: #f1f1f1;
		position: fixed;
		height: 100%;
		overflow: auto;
	}

li a{
		display: block;
		color: #000;
		padding: 8px 16px;
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
	width:250px;
	margin:auto;
	margin-top:12%;
	height:350px;
	margin-left:600px;
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
.logo img
{ 
	float: center;
	width: 190px;
	height: 160px;
	margin-left:15%;
}
.dropbtn {
  background-color:;
  color: black;
  padding: 10px 15px;
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
  <li class="active"><a class="active"  href="home.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <div class="dropdown">
  		<li class="dropbtn"> Account</li>
        <div class="dropdown-content">
   			 <a href="signupcus.php">Sign Up</a>
   			
  		</div>
  </div>
</ul>

<div style="margin-left:-1%;height:800px; background-image:url('https://www.gannett-cdn.com/presto/2019/03/20/PBIN/e9dfb24f-3532-4245-bb5e-a3b9665583fe-GettyImages-884243522.jpg?crop=4999,2835,x0,y559&width=3200&height=1680&fit=bounds'); background-size:1750px 800px; background-repeat:no-repeat,no-repeat;background-attachment: fixed;">
	
  
	<div style="padding:10% 300px;margin-left:17%;">
	<div class="container">
    <div class="row pt-1 pb-1">
        <div class="col-lg-12">
            
        </div>
    </div>
</div>
<section>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        
           <br><center>PICK THE STATE,CITY AND VILLAGE</center><br><br><br>
        </div>
        
    
</section>
 <form  method="POST">
<section class="search-sec">
    <div class="container">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Enter State</option>
                                <option>ANDHRA PRADESH</option>
                                <option>--------------------</option>
                                <option>--------------------</option>
                                
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Enter District</option>
                                <option>kurnool</option>
                                <option>kadapa</option>
                                <option>Nellore</option>
                                <option>Chittoor</option>
                                <option>East godavari</option>
                                <option>West godavari</option>
								<option>Guntur</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" name="vill" id="exampleFormControlSelect1">
                                <option>Enter Village</option>
                                <option>rayachoti</option>
                                <option>jamalamadugu</option>
                                <option>sirivella</option>
                                <option>kottalapalle</option>
                                <option>sambepalle</option>
                                <option>vijayawada</option>
								<option>bhemavaram</option>
								<option>kakinada</option>
								<option>ellore</option>
								<option>tadepalligudam</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="submit" name="submit" class="btn btn-danger wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
</form>
  </div>
</div>

<?php
					$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
					mysqli_select_db ($con,'voting');
?>



<?php
ob_start();
	if(isset($_POST['submit']))
	{
		$vill=$_POST['vill'];
		$query = "select * from candidate where contest_villa='$vill'";
		$query_run= mysqli_query($con,$query) or die( mysqli_error($con));
		if($query_run)
		{
			
			if(mysqli_num_rows($query_run)>0)
			{
				$_SESSION['vill'] = $vill;
				header("Location: ./index.php");
				exit();
				
			}
			else
			{
				echo '<script type="text/javascript">alert("NO CANDIDATES IN THE SELECTED AREA")</script>';
			}
			
		}
		else
		{
			echo '<script type="text/javascript">alert("running problem")</script>';
		}
		
	}
	ob_end_flush();

?>

</body>
</html>



						