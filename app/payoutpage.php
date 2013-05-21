<?php
session_start();
if (!isset($_SESSION['username'])){
	header('Location:../app/home.php');
} else {
	$username = $_SESSION['username'];
}
?>
<html>
<head><title>Payout Page</title>

<!--****************************************************LINKs***************************************************-->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link rel="stylesheet" href="css/index.css" type="text/css"/>
	<link rel="shortcut icon" href="../app/images/img01.jpg">



	<!--***************S******C*******R*******I*******P******T*******S**********-->
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src = "js/jquery-ui-1.9.0.custom.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	
	<script src="js/homepage.js"></script>
</head>
<body>	
<div id="header-top">
		<a href="process.php"><img src="../app/images/Walking-FAIL.gif"/></a>
	</div><!--header-top-->
	<div id="body-wrapper">
    	
    	<div id="dropdown-menu">
    		<center>
	    		<nav>
	    			
					<ul id="menu">
						<li><a href="home.php">Home</a></li>
						<li>
							<a href="#">The Company</a>
							<ul>
								<li><a href="#">Market</a></li>
								<li><a href="#">Ratings</a></li>
								<li><a href="#">WorldWide Web</a></li>
								<li><a href="#">Networking</a></li>
								<li><a href="#">Associates</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Job Seekers</a>
							<ul>
								<li><a href="#">Marketing</a></li>
								<li><a href="#">Production</a></li>
								<li><a href="#">Staff</a></li>
								<li><a href="#">Finance</a></li>
							</ul>
						</li>
						<li>
							<a href="#">About</a>
							<ul>
								<li><a href="#">Employees</a></li>
								<li><a href="#">Management</a></li>
								<li><a href="#">Posts</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Comment</a>
							<ul>
								<li><a href="#">News and Headlines</a></li>
								<li><a href="#">Posts</a></li>
								<li><a href="#">Statistics</a></li>
								<li><a href="#">Payout</a></li>
							</ul>
						</li>
						
					</ul>

	    		</nav>
    		</center>
    	</div>

    	<div id="body-inner">

	    	</br>
	    	</br>
	    	</br>
    		<div id="body-inner01">

    		</div>

    		<div id="tblof_payout_basis">


    		</div>
			

				
		</div> 




	</div>

		<?php include_once'footer.php' ?>


</body>
</html>