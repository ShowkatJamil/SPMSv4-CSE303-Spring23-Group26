<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
                <a class="nav-link active" aria-current="page" href="employeeDashboard.php">Dashboard</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PLO analysis 
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="ploAnalysisDepartmentProgramSchoolAverage.php">PLO analysis with Department/Program/School Average</a></li>
                  <li><a class="dropdown-item" href="ploAnalysisOverall.php">PLO Analysis (Overall, CO wise, Course Wise)</a></li>
            
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PLO Achievement stats
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="ploComparisonStudent.php">PLO Comparison(Student)</a></li>
                  <li><a class="dropdown-item" href="ploComparisonCourse.php">PLO Comparison(Course)</a></li>
                  <li><a class="dropdown-item" href="ploComparisonProgram.php">PLO Comparison(Program)</a></li>
                  <li><a class="dropdown-item" href="ploComparisonSchool.php">PLO Comparison(School)</a></li>
                  <li><a class="dropdown-item" href="ploComparisonDepartment.php">PLO Comparison(Department)</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="spiderChart.php">Spider Chart Analysis</a>
              </li>



              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Data Entry 
                </a>

                  <ul class="dropdown-menu">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Exam
                    </a>
                      <ul class="nav-item dropdown">                    <!--make it similar to data entry dropdown-->
                        <li><a class="dropdown-item" href="addExam.php">Add Exam</a></li>
                        <li><a class="dropdown-item" href="viewStudentAnswerScript.php">Evaluate Exam Script</a></li>
                        <li><a class="dropdown-item" href="uploadGrade.php">Upload Grades</a></li>    <!--new feature for spms v4-->
                    </ul>
                    </li>   
                                    
                  <li><a class="dropdown-item" href="CreateCourseOutline.php">Create Course Outline</a></li>
                </ul>


              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="viewCourseOutline.php">View Course Outline</a>
              </li>





            <!-- multi level dropdown-->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Enrollment Statistics
                </a>

                  <ul class="dropdown-menu">

                  <li><a class="dropdown-item" href="enrollmentStatistics.php">Student Enrollment Statistics</a></li>


                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Student Performance Statistics
                    </a>
                      <ul class="nav-item dropdown">                    <!--make it similar to data entry dropdown-->
                        <li><a class="dropdown-item" href="school_department_program_stats.php"> School/dept/Program-wise </a></li>
                        <li><a class="dropdown-item" href="courseWisePerformance.php">Course-wise</a></li>
                        <li><a class="dropdown-item" href="instructorWisePerformance.php">Instructor-wise</a></li>
                        <li><a class="dropdown-item" href="instructorWiseChosenCourse.php">Instructor-wise(Chosen course)</a></li>
                        <li><a class="dropdown-item" href="instructorWisePerformance.php">VC/Dean/Head-wise</a></li>
                    </ul>
                    </li>   
                                     
                </ul>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  GPA Analysis 
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="school_department_program_stats.php">School/Depertment/Program-wise</a></li>
                  <li><a class="dropdown-item" href="courseWisePerformance.php">Course-wise</a></li>
                  <li><a class="dropdown-item" href="instructorWisePerformance.php">Instructor-wise</a></li>
                  <li><a class="dropdown-item" href="instructorWiseChosenCourse.php">Instructor(Chosen Course)</a></li>
                  <li><a class="dropdown-item" href="instructorWisePerformance.php">VC/Dean/Head-Wise</a></li>
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
  </body>
</html>