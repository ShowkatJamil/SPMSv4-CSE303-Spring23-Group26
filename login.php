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
    <link rel="stylesheet" href="loginStyle.css">
</head>
<body>
	<title>Student Dashboard Login</title>
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
