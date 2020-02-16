<?php


	$db = mysqli_connect("localhost","root","","Registration");




	if (isset($_POST['register_btn'])){
		session_start();
		$fname=mysqli_real_escape_string($db,$_POST['fname']);
		$lname=mysqli_real_escape_string($db,$_POST['lname']);
		$MNum=mysqli_real_escape_string($db,$_POST['MNum']);
		$Month=mysqli_real_escape_string($db,$_POST['Month']);
		$bday=mysqli_real_escape_string($db,$_POST['bday']);
		$DOB=mysqli_real_escape_string($db,$_POST['DOB']);
		$email=mysqli_real_escape_string($db,$_POST['email']);
		$pass=mysqli_real_escape_string($db,$_POST['pass']);
		$pass2=mysqli_real_escape_string($db,$_POST['pass2']);
		$radio=mysqli_real_escape_string($db,$_POST['radio']);

		




		if ($pass==$pass2){

            setcookie("lname",time() - 86400);
			//$pass=md5($pass);
			$sql="INSERT INTO user(fname,lname,MNum,Month,bday,DOB,email,pass,Gender) VALUES('$fname','$lname','$MNum','$Month','$bday','$DOB','$email','$pass','$radio')";
			mysqli_query($db,$sql);
			$_SESSION['message']="Logged In Succesfully";
			$_SESSION['username']=$lname;
			header("Location:login.php");

		}else{

			$_SESSION['message']="The Two password does not match";
			echo "*The Two Password does not match!Please Re-Enter Two Passwords Again!";

		}
	}



?>




<html>

<!--!DOCTYPE html-->

<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	

	




</head>
<body>


	<h1>Registration Form</h1>
	<div class="register">
		<form name="form" method="post" id="register" action="index.php">
			<h2>Register Here!</h2>
			<label>First Name:</label><br>
			<input type="text" name="fname" id="name" placeholder="Enter First Name" required><br><br>
			<label>Last Name:</label><br>
			
			<input type="text" name="lname" id="name" placeholder="Enter Last Name" required><br><br>
			<label>Mobile Number:</label><br>
			
			<input type="Number" name="MNum" id="name" placeholder="ex.+88017XXXXXXXX" required><br><br>
			
			<label>Date of Birth:</label><br>
			<select id="month" name="Month">
				<option value="January">January</option>
				<option value="February">February</option>
				<option value="March">March</option>
				<option value="April">April</option>
				<option value="May">May</option>
				<option value="June">June</option>
				<option value="July">July</option>
				<option value="August">Agust</option>
				<option value="September">September</option>
				<option value="October">October</option>
				<option value="November">November</option>
				<option value="December">December</option>
				
				

			</select>
			<select id="month" name="bday">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				
				

			</select>
			<select id="month" name="DOB">
				<option value="1990">1990</option>
				<option value="1991">1991</option>
				<option value="1992">1992</option>
				<option value="1993">1993</option>
				<option value="1994">1994</option>
				<option value="1995">1995</option>
				<option value="1996">1996</option>
				<option value="1997">1997</option>
				<option value="1998">1998</option>
				<option value="1999">1999</option>
				<option value="2000">2000</option>
				<option value="2001">2001</option>
				
				

			</select><br>
			<br>
			<label>Email:</label><br>

			<input type="email" name="email" id="name" placeholder="Enter Email" required><br><br>
		
			<label>Password:</label><br>
			<input type="Password" name="pass" id="name" class="pass" placeholder="Enter Password" required>
			<br><br>
			<label>Re Enter Password:</label><br>
			<input type="Password" name="pass2" id="name" placeholder="Enter Password again" required><br><br>

			<input type="radio" name="radio" id="male" value="Male"><span id="male">&nbsp; Male</span>&nbsp;&nbsp;
			<input type="radio" name="radio" id="male" value="Female"><span id="male">&nbsp; Female</span>&nbsp;&nbsp;<br><br>

			<input type="submit" onclick="return CheckPass()" name="register_btn" value="Submit" id="sub">
		</form>

		
	</div>
<script type="text/javascript">
			
		
			var password=document.forms['form']['name'];
			var pass_error=document.getElementsById("pass_error");

			password.addEventListener("blur",passwordVerify,true);
			function Validate(){
				if (password.value == "") {

					password.style.border="1px solid red";
					pass_error.textContent="Password is required";
					return false;
				}

			}

			



		</script>

</body>
</html>