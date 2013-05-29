
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>HOME</title>
	<!--****************************************************LINKs***************************************************-->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link rel="stylesheet" href="css/index.css" type="text/css"/>
	<link rel="shortcut icon" href="../app/images/img01.jpg">
	<link rel="stylesheet" href="css/bootstrap.css" />


	<!--***************S******C*******R*******I*******P******T*******S**********-->
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src = "js/jquery-ui-1.9.0.custom.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-transition.js"></script>
	<script src="js/sliderman.1.3.7.js"></script>
	<script src="js/homepage.js"></script>

	
</head>
<body>
	<style type="text/css">
		* { margin: 0; outline: none; }
		.c { clear: both; }
		#wrapper { margin : auto auto auto 120px; padding: 0 40px 60px 40px; width: 960px; }
		h2 { padding: 20px 0 10px 0; font-size: 24px; line-height: 40px; font-weight: normal; color: #adc276; text-shadow: 0 1px 3px #222222; }
		#SliderName_3{
			height: auto;
			width: auto;
		}
	</style>
	<div id="header-top">
		<a href="process.php"><img src="../app/images/ambut.gif"/></a><img src="../app/images/com.png"/>
	</div><!--header-top-->
	<div id="body-wrapper">
    	
    	<div id="dropdown-menu">
	    		<nav>
	    			
					<ul id="menu">
						<li><a href="home.php">Home</a></li>
						<li>
							<a href="#">The Company</a>
							<ul>
								<li><a href="#">Market></a></li>
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
							<li><a href="#myModal" id="here-register">REGISTER</a></li>
		    			</div>
					</ul>

	    		</nav>
    	</div>

    	<div id="body-inner">

	    	</br>
	    	</br>
	    	</br>
    		<div id="body-inner01">

    			<div id="wrapper">
    				<div id="examples_outer">
    				
	    				<div id="slider_container_3" class="carousel">
	    					<div id="SliderName_3" class="SliderName_3">
	    						<img src="../app/images/images/featpics/4.jpeg" width="200" height="200" alt="" title=""/>
	    						<img src="../app/images/images/featpics/5.jpeg" width="200" height="200" alt="" title=""/>
	    						<img src="../app/images/images/featpics/6.jpeg" width="200" height="200" alt="" title=""/>
	    						<img src="../app/images/images/featpics/7.jpeg" width="200" height="200" alt="" title=""/>
	    						<img src="../app/images/images/featpics/8.jpeg" width="200" height="200" alt="" title=""/>
	    						<img src="../app/images/images/featpics/9.jpeg" width="200" height="200" alt="" title=""/>
	    						<img src="../app/images/images/featpics/images (1).jpg" width="200" height="200" alt="" title=""/>
	    					</div>
		    				<div class="c"></div>

		    				<script typy="text/javascript">

		    				demo3Effect1 = {name: 'myEffect31', top: true, move: true, duration: 400 ,  chess: true};
							demo3Effect2 = {name: 'myEffect32', right: true, move: true, duration: 400 ,  chess: true};
							demo3Effect3 = {name: 'myEffect33', bottom: true, move: true, duration: 400,  chess: true};
							demo3Effect4 = {name: 'myEffect34', left: true, move: true, duration: 400,  chess: true};
							demo3Effect5 = {name: 'myEffect35', rows: 3, cols: 9, delay: 20, duration: 1000, order: 'random', fade: true};
							demo3Effect6 = {name: 'myEffect36', rows: 2, cols: 4, delay: 900, duration: 400, order: 'random', fade: true, chess: true};

							effectsDemo3 = [demo3Effect1,demo3Effect2,demo3Effect3,demo3Effect4,demo3Effect5,demo3Effect6,'blinds'];

							var demoSlider_3 = Sliderman.slider({container: 'SliderName_3', width: 800, height: 500, effects: effectsDemo3, display: {autoplay: 30}});

		    				</script>

		    				<div class="c"></div>
		    			</div>
		    			<div class="c"></div>
    				</div>
    				<div class="c"></div>
				</div>


				<!--   LOGIN   Modal -->



				<div id="myloginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h3 id="myModalLabel">Log in</h3>
					</div>
					<div class="modal-body">
				    	<form id="login_here" action="login.php" class="pull-left" name="login" method="POST">
								<fieldset>
								<p><p id="username-label" ><label for="username"></p>Username : </label><input type="text" id="username" name="username" /></p>
								<p><p id="password-label" ><label for="password"></p>password : </label><input type="password" id="password" name="password" /></p>
								</fieldset>
								<input class="btn btn-primary" type="submit" value="Login"/>
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						</form>
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
									<p><label for = 'username'>Username:</label><input type= 'text' id='username' name = "reg_username"/></p>
									<p><label for = 'password'>Password:</label><input type= 'password' id='password' name = "reg_password"/></p>
									<input type="hidden" name="id" />
								</form>
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button class="btn btn-primary" type="submit">Register</button>
					</div>
				</div>




				<!--END NANG MODAL-->
    		</div>	
				<!--<button type="submit" id="submit2" ></button>-->
		</div>
	</div>

		<?php include_once'footer.php' ?>
	</body>
</html>