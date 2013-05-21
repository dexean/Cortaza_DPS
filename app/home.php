<?php

?>
<html>
<meta charset="utf8">
<title>HOME</title>
<head>
	<!--****************************************************LINKs***************************************************-->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link rel="stylesheet" href="css/index.css" type="text/css"/>
	<link rel="shortcut icon" href="..app/images/img01.jpg">
	<link rel="stylesheet" href="css/bootstrap.css" />


	<!--***************S******C*******R*******I*******P******T*******S**********-->
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src = "js/jquery-ui-1.9.0.custom.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-transition.js"></script>
	<script src="js/homepage.js"></script>
	
</head>
<body>
	<div id="header-top">
		<a href="process.php"><img src="../app/images/ambut.gif"/></a><img src="../app/images/com.png"/>
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
						<div id="login">
							<li><a href="#myloginModal" role="button" class="btn-inverse" data-toggle="modal">LOG IN</a></li>
		    			</div>
		    			<div id="register">
							<li><a href="#	" id="here-register">REGISTER</a></li>
		    			</div>
					</ul>

	    		</nav>
    		</center>
    	</div>

    	<div id="body-inner">

	    	</br>
	    	</br>
	    	</br>
    		<div id="body-inner01">
				<!--   LOGIN   Modal -->
				<div id="myloginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h3 id="myModalLabel">Log in</h3>
					</div>
					<div class="modal-body">
						<!--<div id="login">-->
				    		<form id="login_here" action="login.php" class="pull-left" name="login" method="POST">
				    			<blockquote class="pull-left">
									<fieldset>
									<legend>Login</legend>
									<p><label for="username">Username : </label><input type="text" id="username" name="username" /></p>
									<p><label for="password">Password : </label><input type="password" id="password" name="password" /></p>
									</fieldset>
								</blockquote>	
								<input type="submit" value="Login"/>
							</form>
						<!--</div>-->
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button class="btn btn-primary" type="submit" value="Login">Log in</button>
					</div>
				</div>
				<!--             Register     MODAL        -->
				<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h3 id="myModalLabel">Log in</h3>
					</div>
					<div class="modal-body">
				    		<form id="registration_form"  action="home.php" method="POST" title="Registration Form">
								<p><label for = 'mode_of_employment'>Mode of Employment:</label><input type= 'text' id='mode_of_employment' name = "mode_of_employment"/></p>
								<p><label for = 'classification_of_employee'>Classification of Employee:</label><input type= 'text' id='classification_of_employee' name = "classification_of_employee"/></p>
								<p><label for = 'fullname'>Fullname:</label><input type= 'text' id='fullname' name = "fullname"/></p>
								<p><label for = 'mobile'>Phone Number:</label><input type= 'text' id='mobile' name = "mobile"/></p>
								<p><label for = 'username'>Username:</label><input type= 'text' id='username' name = "username"/></p>
								<p><label for = 'password'>Password:</label><input type= 'password' id='password' name = "password"/></p>
								<input type="hidden" name="id" />

							</form>
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button class="btn btn-primary" type="submit"  >Register</button>
					</div>
				</div>
    		</div>	
			

				<!--<button type="submit" id="submit2" ></button>-->
		</div> 


	</div>

		<?php include_once'footer.php' ?>
	</body>
</html>