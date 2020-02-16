
<?php 
 
$host="localhost";
$user="root";
$password="";
$db="Registration";
 
mysql_connect($host,$user,$password);
mysql_select_db($db);
 
if(isset($_POST['email'])){
	session_start();

	$pass=md5($pass);
    
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    $sql="select * from user where email='".$email."'AND pass='".$pass."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        header("Location:home.php");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        
    }
        
}
?>


<html>

<!--!DOCTYPE html-->

<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>


	<h1>Login</h1>
	<div class="register">
		<form method="post" id="register" action="login.php">
			<h2>Login Here!</h2>
			
			<label>Email:</label><br>

			<input type="email" name="email" id="name" placeholder="Enter Email" required><br><br>
		
			<label>Password:</label><br>
			<input type="Password" name="pass" id="name" placeholder="Enter Password" required><br><br>
			
			<input type="submit" name="register_btn" value="Submit" id="sub"><br>
			<a href="index.php">Not registered yet?</a>
		</form>
	</div>


</body>
</html>