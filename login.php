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
           
            $_SESSION['userType']=$userType;
            $_SESSION['ID']=$ID;
            
            header('location:employeeDashboard.php');
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
            $_SESSION['userType']=$userType;
            
            header('location:studentDashboard.php');
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

    <style>
       body{
          background-repeat:no-repeat;
          background-attachment:fixed;
          background-size:70% 100%;
          background-position:center;
          background-color:#5c5aac;
        }

    </style>
</head>
<body>
	<title>Dashboard Login</title>
</head>


<body >
	<div class="container">
		<h1>Dashboard Login</h1>


		<form action="#" method="post" >
		
			<label for="ID"><b>Login ID</b></label>
			<input type="text" placeholder="Enter Login ID" name="ID" required>

			<label for="password"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>

			<label for="userType"><b>User Type</b></label>
			<select name="userType" class = "userType" style="height: 30px; width: 100px;border-radius: 15px; font: arial;">
				        <option value="student" style="height: 30px; width: 100px; font: arial;">student</option>
				        <option value ="faculty" style="height: 30px; width: 100px; font: arial;">Faculty</option>
                <option value="dean" style="height: 30px; width: 100px; font: arial;">Dean</option>
                <option value="department head" style="height: 30px; width: 100px;font: arial;">Department Head</option>
			</select>

			<button type="submit">Login</button>
			<div class="error"><a href="#">Forgot password?</a></div>
		</form>
	</div>
</body>
</html>
