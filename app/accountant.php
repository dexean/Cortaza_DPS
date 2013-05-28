<?php
session_start();
if (!isset($_SESSION['username'])){
	header('Location: ../app/home.php');
} else {
	$username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PAYOUT ACCOUNTING</title>
	<!--****************************************************LINKs***************************************************-->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link rel="stylesheet" href="css/jquery-ui-1.10.1.custom.css" />
	<link rel="stylesheet" href="css/jquery-ui-1.10.1.custom.min.css" />
	<link rel="stylesheet" href="css/index.css" type="text/css"/>
	<link rel="shortcut icon" href="../app/images/img01.jpg">
	<link rel="stylesheet" href="./css/accountant.css" type="text/css"/>
	<link rel="stylesheet" href="./css/bootstrap.css" type="text/css"/>



	<!--***************S******C*******R*******I*******P******T*******S************************-->
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src = "js/jquery-ui-1.9.0.custom.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/accountant.js"></script>
	<script src="js/tables_from_accountant.js"></script>

</head>
<body>
		<div id="header-top">
			<!--header-top-->
		</div>
		<div id="body-wrapper">
    	
	    	<div id="dropdown-menu">
	    		<center>	
						<ul id="menu">
							
							<li><a href="../app/home.php">Home</a></li>
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
							<div id="payout">
								<li><a href="#">Payout</a>
			    					<ul>
			    						<li><a href="#" id="payout">Employee</a></li>
			    					</ul>
			    				</li>
			    			</div>
			    			<div id="logout">
								<li><a href="logout.php">Logout</a></li>
			    			</div>
						</ul>
	    		</center>
	    	</div>

	    	<div id="body-inner">
	    		<div class="container">
		    		<br />
		    		<br />
		    		<br />
					<div id="bodyContent">
						<div id="menu_buttons" class="tabContent">
							<!--btn_view_payout,btn_view_payout_history,btn_overtime,btn_attendances,btn_insurances-->
							<button id="btn_payout">Employees</button>
							<button id="btn_payout_history">Payout history</button>
							<button id="btn_overtime">Overtime pays</button>
							<button id="btn_attendance">Attendance</button>
							<button id="btn_insurances">Insurances</button>
						</div>
					</div>
							<div id="table_to_append">
								    <form class="form-search">
									    <input type="text" class="input-medium search-query" id="search" name="search" placeholder="search via username">
								    </form>
								<div  class="employee" id="employee_tbl">
									<table class="table table-hover table-bordered" id="" border="3">
										<thead>
											<tr>
												<th>Mode of Employment</th>
												<th>Classification of Employee</th>
												<th>Picture</th>
												<th>Fullname</th>
												<th>Mobile</th>
												<th>Username</th>
												<th colspan="2">Action</th>
											</tr>
										</thead>
										<tbody id="employees"></tbody>
									</table>
								</div>
								<div class="payout_history" id="tabContent">
										<table class="table table-hover table-bordered" id="payout_history" border="3">
											<thead>
												<tr>
													<th>Employee Id</th>
													<th>Employee Name</th>
													<th>Last Amount Recieved</th>
													<th>Released By</th>
													<th>Remarks</th>
												</tr>	
											</thead>
											<tbody id="payout_histories"></tbody>
										</table>
								</div>
								<div class="overtime_pays" id="tabContent">
										<table class="table table-hover table-bordered" id="overtime_pays" border="3">
												<thead>
												<tr>
													<th>Employee Name</th>
													<th>Overtime Worked</th>
													<th>Wage Per Time</th>
													<th>Remarks</th>
												</tr>	
											</thead>
											<tbody id="overtime_pays"></tbody>
										</table>
								</div>
								<div class="attendance" id="tabContent">
										<table class="table table-hover table-bordered" id="attendance" border="3">
											<thead>
												<tr>
													<th>Employee Id</th>
													<th>Employee Name</th>
													<th>Time In</th>
													<th>Time Out</th>
													<th>Date</th>
													<th>Remarks</th>
												</tr>	
											</thead>
											<tbody id="attendances"></tbody>
										</table>
								</div>
								<div class="insurances" id="tabContent">
										<table class="table table-hover table-bordered" id="insurances" border="3">
												<thead>
												<tr>
													<th>Employee Id</th>
													<th>Employee Name</th>
													<th>Deductions</th>
													<th>Loan</th>
												</tr>	
											</thead>
											<tbody id="employees_insurances"></tbody>
										</table>

								</div>
						</div>

					<div id="Forms">
						<form id="release_salary" action="accountant.php" method="POST">
							<p><label for='salary'></label><input type='money' name='' placeholder=''/></p>
							<p><label for='overtime_pay'></label><input type='money' name='' placeholder=''/></p>
							<p><label for='date_released'></label><input type='date' name='' placeholder='date'/></p>
							<p><label for='remarks'></label><input type='text' name='' placeholder=''/></p>
						</form>
					</div>
			</div> 
		</div>

		
		<!--                                              *************FOOTER HERE*************                                   -->
		<?php include_once'accountantFooter.php';?>
		<!--LOOKING FOR THE OVER Time WORKS

		SELECT a.employee_attendance_id,e.fullname,a.over_time_worked,a.date from  attendance as a,users_info as ui,employees as e where ui.employee_attendance_id = a.employee_attendance_id and e.employee_id = ui.employee_id ;
-->
</body>
</html>