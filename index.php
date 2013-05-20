<?php
//session_start();
//if (!isset($_SESSION['username'])){
//	header('Location: login.php');
//} else {
//	$username = $_SESSION['username'];
//}
?>
<html>

<head>

<title>CMS</title>
	<!--****************************************************LINKs***************************************************-->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link rel="stylesheet" href="css/index.css" type="text/css"/>
	<link rel="shortcut icon" href="images/img01.jpg" />
	<link rel="stylesheet" href="css/bootstrap.css" />

	
	
	

	<!--***************S******C*******R*******I*******P******T*******S**********-->
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src = "js/jquery-ui-1.9.0.custom.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-transition.js"></script>
	<script src="js/homepage.js"></script>
	<script src="js/index.js"></script>
	<script type="text/javascript">
		//try to create an object to send our request with
		$(function(){
				$('#slides').slides({
					preload: true,
					preloadImage: 'images/Walking-FAIL.gif',
					play: 5000,
					pause: 2500,
					hoverPause: true,
					animationStart: function(current){
						$('.caption').animate({
							bottom:-35
						},100);
						if (window.console && console.log) {
							// example return of current slide number
							console.log('animationStart on slide: ', current);
						};
					},
					animationComplete: function(current){
						$('.caption').animate({
							bottom:0
						},200);
						if (window.console && console.log) {
							// example return of current slide number
							console.log('animationComplete on slide: ', current);
						};
					},
					slidesLoaded: function() {
						$('.caption').animate({
							bottom:0
						},200);
					}
				});
			});
	</script>

</head>

<body>
	<div id="header-top">
		
	</div>
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
	    	</br>


    		</div>
	    		<div id="slides">
					<div class="slides_container">
						<div class="slide">
								<a href="#"><img src="../CMS/images/building.jpg" width="570" height="270" alt="Slide 1"></a>
									<div class="caption" style="bottom:0">
										<p>
											<!--                   ***************TEXT HERE!!!!*************           -->
										</p>
									</div>
						</div>
						<div class="slide">
								<a href="#"><img src="../CMS/images/building.jpg" width="570" height="270" alt="Slide 2"></a>
									<div class="caption">
										<p>
											<!--                   ***************TEXT HERE!!!!*************           -->
										</p>
									</div>
						</div>
						<div class="slide">
								<a href="#"><img src="../CMS/images/building.jpg" width="570" height="270" alt="Slide 3"></a>
									<div class="caption">
										<p>
											<!--                   ***************TEXT HERE!!!!*************           -->
										</p>
									</div>
						</div>
						<div class="slide">
								<a href="#"><img src="../CMS/images/building.jpg" width="570" height="270" alt="Slide 4"></a>
									<div class="caption">
										<p>
											<!--                   ***************TEXT HERE!!!!*************           -->
										</p>
									</div>
						</div>
						<div class="slide">
								<a href="#"><img src="../CMS/images/building.jpg" width="570" height="270" alt="Slide 5"></a>
									<div class="caption">
										<p>
											<!--                   ***************TEXT HERE!!!!*************           -->
										</p>
									</div>
						</div>
						<div class="slide">
								<a href="#"><img src="../CMS/images/building.jpg" width="570" height="270" alt="Slide 6"></a>
									<div class="caption">
										<p>
											<!--                   ***************TEXT HERE!!!!*************           -->
										</p>										
									</div>
						</div>
						<div class="slide">
								<a href="#"><img src="../CMS/images/building.jpg" width="570" height="270" alt="Slide 7"></a>
									<div class="caption">
										<p>
											<!--                   ***************TEXT HERE!!!!*************           -->
										</p>
									</div>
						</div>
								</div>
								<a href="#" class="prev"><img src="images/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
								<a href="#" class="next"><img src="images/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>

	    	</div>
	    	<div id='wrapper02'>
	    		<div id="login">
	    		<form id="login_here" action="login.php" name="login" method="POST">
					<fieldset>
					<legend>Login</legend>
					<p><label for="username">Username : </label><input type="text" id="username" name="username" /></p>
					<p><label for="password">Password : </label><input type="password" id="password" name="password" /></p>
					</fieldset>
					<input type="submit" value="Login" />
				</form>
				</div>	
				<form id="registration_form"  action="home.php" method="POST" title="Registration Form">
					<p><label for = 'employee_num'>Employee ID Number:</label><input type= 'text' id='employee_num' name = "employee_num"/></p>
					<p><label for = 'mode_of_emp'>Mode of Employment <input type="text" id="datepicker" name='batch_year' /></p>
					<p><label for = 'classification_of_emp'>Classification of Employee:</label><input type= 'text' id='firstname' name = ""/></p>
					<p><label for = 'picture'>Picture:</label><input type= 'file' id='picture' name = "picture" accept = "jpeg/image/jpg"/></p>
					<p><label for = 'fullname'>Fullname:</label><input type= 'text' id='fullname' name = "fullname"/></p>
					<p><label for = 'gender'>Phone Number:</label><input type= 'text' id='mobile' name = "mobile"/></p>
					<p><label for = 'username'>Username:</label><input type= 'text' id='username' name = "username"/></p>
					<p><label for = 'password'>Password:</label><input type= 'password' id='password' name = "password"/></p>

			</form>
	    	</div>
    	</div>
    		
	<?php include_once'footer.php' ?>
	
</body>		

</html>