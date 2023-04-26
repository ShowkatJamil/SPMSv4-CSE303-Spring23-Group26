<?php
session_start();
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

    <title>Submit Answer Script</title>

    <!--Google Font-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
        <link href="newStyle.css" rel="stylesheet" />
    <script type="text/javascript"></script>    

    
  <style>

  body{
    background-color:#5c5aac;
  }

  .paragraph{
    display:inline-block;
    font-family: Arial, Helvetica, sans-serif;
    font-weight:bold;
    color:white;
    font-size:20px;
  }

  label{
    font-size:20px;
    font-family: Arial, Helvetica, sans-serif;
    text-transform: uppercase;
  }

  .main-container{
    border:3px solid #6698FF;
    margin-top:15px;
    margin-bottom:15px;
    width:75%;
   
  }
   </style>

  </head>

  <body>

  
    
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="studentDashboard.php">SPMS 4.0</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" /> -->
                    <!-- <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> -->
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                            <a class="nav-link" href="studentDashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Analysis</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePLO" aria-expanded="false" aria-controls="collapsePLO">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
                                PLO Analysis
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePLO" aria-labelledby="headingPLO" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="ploAnalysisDepartmentProgramSchoolAverage_S.php">PLO analysis with Department/Program/School Average</a>
                                    <a class="nav-link" href="ploAnalysisOverall_S.php">PLO Analysis (Overall, CO wise, Course Wise)</a>    
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseGPA" aria-expanded="false" aria-controls="collapseGPA">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
                                GPA Analysis
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseGPA" aria-labelledby="headingGPA" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="courseWisePerformance_S.php">Course-wise</a> 
                                </nav>
                            </div>


                            <a class="nav-link" href="spiderChart_S.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-chart-pie"></i></div>
                                Spider Chart Analysis
                            </a>


                            <div class="sb-sidenav-menu-heading">Data Entry</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseExam" aria-expanded="false" aria-controls="collapseExam">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-shield-halved"></i></div>
                                Exam
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseExam" aria-labelledby="headingExam" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="viewExam.php">View Available Exams</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">View</div>
                            <a class="nav-link" href="viewCourseOutline_S.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-eye"></i></div>
                                View Course Outline
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Student
                    </div>
                </nav>
            </div>

            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4">Submit Answer Script</h2>


  <!-- div row-1 starts here -->
  
  <?php
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
  <input type="submit" style="margin-top:20px;margin-left:0px;" name="submitAnswerScript" value="Submit" class="id-submit">
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

    echo "<script>window.location.href = 'submitAnswerScript.php'</script>";
       //header('location:submitAnswerScript.php');
       }
    ?>

<!-- php code ends here -->

<div style="height: 10vh"></div>      <!-- for outer border -->
                        
                        </div>
                    </main>
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-4">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; Team Halfdeads</div>
                              
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
    
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
    </body>