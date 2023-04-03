<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Answer Script</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="questionForm.css">
    
    <style>
        body{
          background-image:url('back-logo.png');
          background-repeat:no-repeat;
          background-attachment:fixed;
          background-size:70% 100%;
          background-position:center;
          background-color:#f2c8f6;
        }
      </style>
  </head>

  <body>
  
  <nav class="navbar navbar-expand-lg     bg-body-tertiary">
      
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SPMS 4.0</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="EmployeeDashboard.php">Dashboard</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PLO analysis 
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">PLO analysis with Department/Program/School Average</a></li>
                <li><a class="dropdown-item" href="#">PLO Analysis (Overall, CO wise, Course Wise)</a></li>
          
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PLO Achievement stats
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">PLO Comparison(Student)</a></li>
                <li><a class="dropdown-item" href="#">PLO Comparison(Course)</a></li>
                <li><a class="dropdown-item" href="#">PLO Comparison(Program)</a></li>
                <li><a class="dropdown-item" href="#">PLO Comparison(School)</a></li>
                <li><a class="dropdown-item" href="#">PLO Comparison(Department)</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Spider Chart Analysis</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Data Entry 
              </a>

                <ul class="dropdown-menu">
                <li class="nav-item dropdown">
                <li><a class="dropdown-item" href="viewExam.php">View Exam</a></li>
              </a>
                </li>
              </ul>


            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">View Course Outline</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Enrollment Statistics</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                GPA Analysis 
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">School/Depertment/Program-wise</a></li>
                <li><a class="dropdown-item" href="#">Course-wise</a></li>
                <li><a class="dropdown-item" href="#">Instructor-wise</a></li>
                <li><a class="dropdown-item" href="#">Instructor(Chosen Course)</a></li>
                <li><a class="dropdown-item" href="#">VC/Dean/Head-Wise</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="logout.php">LogOut</a>
            </li>              
          </ul>
        </div>
      </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script> 

  <!-- div row-1 starts here -->

<?php

session_start();

include 'connect.php';

 $examName=$_SESSION['examName'];
 $courseID=$_SESSION['courseID'];
 $sectionNum=$_SESSION['sectionNum'];
 $studentID=$_SESSION['studentID'];
 $semester=$_SESSION['semester'];
 $year=$_SESSION['year'];

  //Getting section ID from database
  $result=mysqli_query($con,"SELECT sec.sectionID AS sectionID
  FROM section_t AS sec
  WHERE sec.sectionNum='$sectionNum' AND sec.courseID='$courseID' 
  AND sec.semester='$semester' AND sec.year='$year'");
  $row=mysqli_fetch_assoc($result); 
  $sectionID=$row['sectionID'];
  
  //Getting exam ID from database
  $result=mysqli_query($con,"SELECT exam.examID AS examID
  FROM exam_t AS exam
  WHERE exam.examName='$examName' AND exam.sectionID='$sectionID'");
  $row=mysqli_fetch_assoc($result); 
  $examID=$row['examID'];
  
  //Getting questions from database
  $result=mysqli_query($con,"SELECT *
  FROM question_t AS q
  WHERE q.examID='$examID'"); 

  //Getting number of questions
  $queryResultReturn=mysqli_query($con,"SELECT COUNT(*) AS num
  FROM question_t AS q
  WHERE q.examID='$examID'
  GROUP BY q.examID"); 
  $resultRow=mysqli_fetch_assoc($queryResultReturn); 
  $answerNum=$resultRow['num'];
  $_SESSION['answerNum']=$answerNum;

  //Getting registration ID from database
  $queryResultReturn=mysqli_query($con,"SELECT reg.registrationID 
  AS registrationID
  FROM registration_t AS reg
  WHERE reg.studentID='$studentID' AND reg.sectionID='$sectionID'"); 
  $resultRow=mysqli_fetch_assoc($queryResultReturn); 
  $registrationID=$resultRow['registrationID'];
  
  //Using loop to display all the questions 
  while($row=mysqli_fetch_assoc($result)){
  
  $questionNum=$row['questionNum'];
  $difficultyLevel=$row['difficultyLevel'];
  $mark=$row['markPerQuestion'];
  $questionDetails=$row['questionDetails'];

    echo '<div style="display:flex;justify-content:center;">
    <div class="main-container">   

    <div style="display:flex;justify-content:space-evenly;padding-top:10px;">
     
    <div>
       <label class="question-form">
       Question No.  
       </label>
       <p class="paragraph">'.$questionNum.'</p>
       </div>
       
       <div>
       <label class="question-form">
        Domain :
       </label>
       <p class="paragraph">Cognitive</p>
       </div>

       <div>
       <label class="question-form">
         level :
       </label>
       <p class="paragraph">'.$difficultyLevel.'</p>
       </div>

       <div>
       <label class="question-form">
         Mark :
       </label>
       <p class="paragraph">'. $mark.'</p>
       </div>

    </div>  
     
     <div style="padding-top:10px;border:3px solid #6698FF;">
       <label class="question-form">
         Question :
       </label>
       <p class="paragraph">'.$questionDetails.'</p>
     </div> 
  
    </div>
    </div>'; 
  }

//loop php part ends here
?>
<form method="post">
     <div style="display:flex;justify-content:center;">
     <div style="border:3px solid #6698FF;width:75%;">
     <textarea style="width:100%;" name="answer1" cols="30" rows="10" placeholder="Enter your answer"></textarea>
     </div>

     </div>

     <div style="display:flex;justify-content:center;">
     <div style="border:3px solid #6698FF;width:75%;">
     <textarea style="width:100%;" name="answer2" cols="30" rows="10" placeholder="Enter your answer"></textarea>
     </div>

     </div>

     <div style="display:flex;justify-content:center;">
     <div style="border:3px solid #6698FF;width:75%;">
     <textarea style="width:100%;" name="answer3" cols="30" rows="10" placeholder="Enter your answer"></textarea>
     </div>

     </div>

     <div style="display:flex;justify-content:center;">
     <div style="border:3px solid #6698FF;width:75%;">
     <textarea style="width:100%;" name="answer4" cols="30" rows="10" placeholder="Enter your answer"></textarea>
     </div>

     </div>

     <div style="display:flex;justify-content:center;">
     <div style="border:3px solid #6698FF;width:75%;">
     <textarea style="width:100%;" name="answer5" cols="30" rows="10" placeholder="Enter your answer"></textarea>
     </div>

     </div>

     <div style="display:flex;justify-content:center;">
     <div style="border:3px solid #6698FF;width:75%;">
     <textarea style="width:100%;" name="answer6" cols="30" rows="10" placeholder="Enter your answer"></textarea>
     </div>

     </div>

     <div style="display:flex;justify-content:center;">
     <div style="border:3px solid #6698FF;width:75%;">
     <textarea style="width:100%;" name="answer7" cols="30" rows="10" placeholder="Enter your answer"></textarea>
     </div>

     </div>

<div style="display:flex;justify-content:center;margin-bottom:25px;">
<input type="submit" style="margin-top:20px;margin-left:0px;" name="submitAnswerScript" value="Submit" class="submitButton">
</div>

</form>

<?php
  if(isset($_POST['submitAnswerScript'])){
     for($i=1;$i<=$_SESSION['answerNum'];$i++){
        
      $answerDetails=$_POST["answer".$i];

      $queryResult=mysqli_query($con,"INSERT INTO `answer_t` 
      (`answerID`, `answerDetails`, `answerNum`, `markObtained`, 
      `registrationID`, `questionID`, `examID`) 
      VALUES (NULL, '$answerDetails', '$i', NULL, '$registrationID', '', '$examID')");

     }
     header('location:submitAnswerScript.php');
     }
  ?>
   

  
  </body>
</html>