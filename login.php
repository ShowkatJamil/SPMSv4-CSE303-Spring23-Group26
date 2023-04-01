<?php

$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    include 'connect.php';
    
    $userType=$_POST['userType'];
    $ID=$_POST['ID'];
    $password=$_POST['password'];

  if($userType!='student'){
    $sql="SELECT * from employee_t where employeeID='$ID' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
          $invalid=0;
            session_start();
            $_SESSION['ID']=$ID;
            header('location:EmployeeDashboard.php');
        }
     }
  }    

  elseif($userType=='student'){
    $sql="SELECT * from student_t where studentID='$ID' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
          $invalid=0;
            session_start();
            $_SESSION['ID']=$ID;
            header('location:StudentDashboard.php');
        }
     }
  }    

        else{
            $invalid=1;
        }
  }
  ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
	<title>Student Dashboard Login</title>
	<style>
		body {
			background-color: #f1f1f1;
		}

		.container {
			background-color: #fff;
			margin: 80px auto;
			padding: 40px;
			max-width: 400px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		}

		h1 {
			text-align: center;
			margin-bottom: 30px;
		}

		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		button[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
		}

		button[type=submit]:hover {
			background-color: #45a049;
		}

		.error {
			color: red;
			font-size: 16px;
			margin-top: 10px;
		}
		

		

		
		.login-title {
			margin-bottom: 24px;
			font-weight: bold;
			font-size: 24px;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1>Student Dashboard Login</h1>
		<form action="#" method="post">
			

			

			<label for="ID"><b>Login ID</b></label>
			<input type="text" placeholder="Enter Login ID" name="ID" required>

			<label for="password"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>

			<label for="userType"><b>User Type</b></label>
			<select name="userType">
				<option value="student">student</option>
				<option value="faculty">Faculty</option>
                <option value="dean">Dean</option>
                <option value="department head">Department Head</option>
			</select>

			<button type="submit">Login</button>
			<div class="error"><a href="#">Forgot password?</a></div>
		</form>
	</div>
</body>
</html>
