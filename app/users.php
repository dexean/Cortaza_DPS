<?php
session_start();
if (!isset($_SESSION['username'])){
	header('Location:../app/home.php');
} else {
	$username = $_SESSION['username'];
	
}
?>
<html>
<title>User Profile</title>
<head>
	<meta charset="utf-8">
	<!--****************************************************LINKs******************************************************-->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link rel="stylesheet" href="css/index.css" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css"/>
	<link rel="shortcut icon" href="../app/images/img01.jpg" />
	



	<!--***************S******C*******R*******I*******P******T*******S**************-->
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/jquery-2.0.0.min.js"></script>
	<script src="js/jquery-2.0.0-beta3.js"></script>
	<script src="js/jquery-2.0.0b2.js"></script>
	<script src ="js/jquery-ui-1.9.0.custom.js"></script>
	<script src ="js/jquery-ui-1.9.0.custom.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/jQuery-custom-input-file.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/user.js"></script>
	<!--<script src="js/homepage.js"></script>-->
	<script type="text/javascript">
	      var uploadURL = "upload.php";
 	      $(document).ready(function(){
                    $('a#uploadFile').file();
                    $('a#delete').click(function(){
                          $('input#profileImageFile').val("");
                          $('img#profileImage').attr("src","./images/images/icons/default.png");
                          var confirmPictoDelete = confirm('are you sure you want to delete??');
                          if (confirmPictoDelete) {
	                          $('div#messageBox').html("Image deleted !");
	                          $('div#messageBox').attr("class","success");
	                          $('a#delete').hide();
	                       };
                    });
                    $('input#uploadFile').file().choose(function(e, input) {
                        input.upload(uploadURL, function(res) {
                            if (res=="invalid"){
                                $('div#messageBox').attr("class","error");
                                $('div#messageBox').html("Invalid extension !");
                            }else{
                                $('div#messageBox').attr("class","success");
                                $('div#messageBox').html("File uploaded !");
                                $('img#profileImage').attr("src","uploaded-images/"+res);
                                $('input#profileImageFile').val(res);
                                $('a#delete').show();
                                $(this).remove();
                            }
                        }, '');                  
              });
               });
 	    </script>
	
</head>
<body>
	<div id="header-top">
	</div><!--header-top-->
	<div id="body-wrapper">
    	
    	<div id="dropdown-menu">
    		<center>
	    		<nav>
					<ul id="menu">
						<li><p class="text-center"><a href="home.php">Home</a></p></li>
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
						<div id="attendance">
							<li><a href="#checkAttendance">Attendance</a></li>
		    			</div>
		    			<div id="logout">
							<li><a href="../app/logout.php" id="here-logout">logout</a></li>
		    			</div>
					</ul>
	    		</nav>
    		</center>
    	</div>
    	<div id="body-inner-user">
    		<div id="searchForm">
				<form class="form-search" class="navbar-search pull-right">
					<input type="text" id="search" placeholder="search .. .." name="search">
					<button id="search_btn" class="btn-primary btn-mini">Search</button>
				</form>
			</div>
			</br>
			<div id="fieldset"><p class="lead"><?php if (isset($username)) echo $username; ?></p></div>
			</br>
	    	<!--<div class="imageContainer">
                <img alt=""  src="./images/images/icons/default.png" width="150" height="150" id="profileImage"><br />
                <a href="#" id="uploadFile" title="Upload"><img alt=""  src="./images/images/icons/profile.png"></a>
                <a href="#" id="delete" title="Delete" style="display:none;position:relative;z-index:999999;"><img alt=""  src="./images/images/icons/redWrong.png"></a>
                <div id="messageBox"></div>
	    	</div>-->
	    		<p class="pull-left">
	    		<button id="profile_btn" class="btn btn-primary" ><i class="icon-user"></i>Profile</button>
				<div id="profiles" title="My Profiles">
					<img src="./images/images/icons/default.png" id="<?php if (isset($username)) echo $username; ?>" width="150" height="150"/>
				</div></php>
		    	<div class="btn-group">
		    		<button id="btn-time_in" class="btn btn-primary btn-mini" data-toggle="button">My Attendance</button>
					<button id="btn_searchEmp" class="btn btn-primary btn-mini" data-toggle="button" >Search Employee</button>
					<button id="btn_addEmpHistory" class="btn btn-primary btn-mini" data-toggle="button" >Employment History</button>
					<button id="btn_payout" class="btn btn-primary btn-mini" data-toggle="button" >Payout</button>
				</div>
	    	<div id="forms_here">
		    	<div id="timeInForm">
		    		<form id="attendance_form"  action="users.php" method="POST" title="Attendance Form">
						<p><label for = 'time_in'>Time In:</label><input type= 'text' id='time_in' name = "time_in" value="<?php date_default_timezone_set('Asia/Manila'); echo date('h:i:s', time()); ?>"readonly /></p>
						<p><label for = 'date_time_in'>Date Checked:</label><input type= 'text' name = "date_time_in" value="<?php echo date("m-d-y"); ?>" readonly/></p>
					</form>
				</div>
				<div id="timeOutForm">
		    		<form id="attendance_form"  action="users.php" method="POST" title="Time-out Form">
						<p><label for = 'time_out'>Time Out:</label><input type= 'text' id='time_out' name = "time_out" value="<?php date_default_timezone_set('Asia/Manila'); echo date('h:i:s', time()); ?>"readonly /></p>
						<p>Remarks : <select name="remarks"><option value="attendance approved">Approve</option><option value="attendance aborted">Abort</option></select></p>
					</form>
				</div>
				<div id="employmentHistoryForm">
					<form id="empHistoryForm" action="users.php" method="POST" title="Employment History Form">
							  <div id="datetimepicker2" class="input-append">
							    <label for='date_of_employment'>Date of Employment :</label><input data-format="yyyy-MM-dd" type="text" name="date_of_employment" />
							    <span class="add-on">
							      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
							      </i>
							    </span>
							  </div>
						<script type="text/javascript">
							 $(function() {
							   $('#datetimepicker2').datetimepicker({
							      language: 'en',
							      pick12HourFormat: true

							    });
							  });
						</script>
						<p><label for = 'company_name'>Department Name :</label><input type= 'text' name = 'company_name' /></p>
						<p><label for = 'company_address'>Department Address :</label><input type= 'text' name = 'company_address' /></p>
						<p><label for = 'company_phone'>Department Phone Number :</label><input type= 'text' name = 'company_phone'/></p>
						<p><label for = 'company_email'>Department Email :</label><input type= 'text' name = 'company_email'/></p>
						<p><label for = 'position'>Position :</label><input type= 'text' name = 'position'/></p>
						<p><label for = 'salary'>Salary :</label><input type= 'int' name = 'salary'/></p>
					</form>
				</div>
			</div>
	    	<div id="tablesHere">
		    	<div id="ATTENDANCES">
		    		<div id="tables_attendance">
		    			<table id="tbl_attendance"  class="table table-hover" class="tbl_attendance" border="3">
							<tr>
								<th>Time In</th>
								<th>Time Out</th>
								<th>Over time Worked</th>
								<th>Date</th>
								<th>Remarks</th>
							</tr>	
							<tbody id="tbl_tbody_attendance"></tbody>
		    			</table>
		    		</div>
		    	</div>
		    	<div  class="employee table-hover" id="empDetails">
						<table id="employee" border="3">
							<thead>
								<tr>
									<th>Mode of Employment</th>
									<th>Classification of Employee</th>
									<th>Picture</th>
									<th>Fullname</th>
									<th>Mobile</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody id="employees"></tbody>
						</table>
				</div>
				<div id="EmpInsurances" class="employee table-hover" id="empDeductions">
						<table id="employee" border="3">
							<thead>
								<tr>
									<th>Salary Deductions</th>
									<th>Beneficiary</th>
									<th>Loaned Money</th>
									<!--<th></th>-->
									<th>Total Cash deducted</th>
									<th>Total Salary</th>
								</tr>
							</thead>
							<tbody id="insurances"></tbody>
						</table>
				</div>
				<div  id="empHistory" class="table table-hover table-bordered">
						<table id="employment_history" border="3">
							<thead>
								<tr>
									<th>Date of Employment</th>
									<th>Department Name</th>
									<th>Department Address</th>
									<th>Department Phone</th>
									<th>Department Email</th>
									<th>Position</th>
									<th>Salary</th>
								</tr>
							</thead>
							<tbody id="emp_history"></tbody>
						</table>
				</div>
                <div  id="empPayout" class="table table-hover table-bordered">
                    <table id="employe_payout" border="3">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Salary</th>
                            <th>Overtime Pay</th>
                            <th>Date Released</th>
                            <th>Remarks</th>
                        </tr>
                        </thead>
                        <tbody id="payout"></tbody>
                    </table>
                </div>
			</div>				
		</div> 

	</div>

		<?php include_once'footer.php' ?>
	</body>
</html>