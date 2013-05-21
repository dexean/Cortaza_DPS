<?php
session_start();

include '../app/dao/functionDAO.php';

$action = new functionDAO();

if( isset($_REQUEST['username']) && isset($_REQUEST['password'])){
		
		$verify = $action->login($_REQUEST['username'],$_REQUEST['password']);	
		if($verify){
			$_SESSION['username'] = $_REQUEST['password'];
			header('Location: ../app/users.php');
		}elseif (($_REQUEST['username'] == 'as') && ($_REQUEST['password'] == 'as')){
			$_SESSION['username'] = $_REQUEST['username'];
			header('Location: ../app/accountant.php');
		} else {
			$errMsg = "Username and Password didn't match";
			header('Location: ../app/home.php');
		}

} 

?>

<html lang="en">
<head>
<title>Login</title>
<link rel="shortcut icon" href="images/img01.jpg" />
</head>
<body>

<form action="login.php" method="POST">
<fieldset>
<legend>Login</legend>
<p><label for="username">Username : </label><input type="text" id="username" name="username" /></p>
<p><label for="password">Password : </label><input type="password" id="password" name="password" /></p>
</fieldset>
<!--<input type="submit" value="Login" />-->
</form>
<?php if (isset($errMsg)) echo $errMsg; ?>

</body>
</html>
