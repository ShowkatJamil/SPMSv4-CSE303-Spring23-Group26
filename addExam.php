<?php
session_start();

include 'connect.php';

?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add Exam</title>
  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
        <link href="newStyle.css" rel="stylesheet" />
    <script type="text/javascript"></script>  

    <style>
        body{
        /* background-image: url('logo.png'); */
          background-repeat:no-repeat;
          background-attachment:fixed;
          background-size:85% 95%;
          background-position:right;
          background-color:#5c5aac;
        }
      </style>
</head>

<body>

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="employeeDashboard.php">SPMS 4.0</a>
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
                            <a class="nav-link" href="employeeDashboard.php">
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
                                    <a class="nav-link" href="ploAnalysisDepartmentProgramSchoolAverage.php">PLO analysis with Department/Program/School Average</a>
                                    <a class="nav-link" href="ploAnalysisOverall.php">PLO Analysis (Overall, CO wise, Course Wise)</a>    
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseGPA" aria-expanded="false" aria-controls="collapseGPA">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
                                GPA Analysis
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseGPA" aria-labelledby="headingGPA" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="school_department_program_stats.php">School/Depertment/Program-wise</a>
                                    <a class="nav-link" href="courseWisePerformance.php">Course-wise</a> 
                                    <a class="nav-link" href="instructorWisePerformance.php">Instructor-wise</a> 
                                    <a class="nav-link" href="instructorWiseChosenCourse.php">Instructor(Chosen Course)</a> 
                                    <a class="nav-link" href="instructorWisePerformance.php">VC/Dean/Head-Wise</a> 
                                </nav>
                            </div>


                            <a class="nav-link" href="spiderChart.php">
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
                                    <a class="nav-link" href="addExam.php">Add Exams</a>
                                    <a class="nav-link" href="viewStudentAnswerScript.php">Evaluate Exam Scripts</a>  
                                    <a class="nav-link" href="uploadGrade.php">Upload Grades</a>  
                                </nav>
                            </div>

                            <a class="nav-link" href="createCourseOutlinePage1.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-file-circle-plus"></i></div>
                                Create Course Outline
                            </a>


                            <div class="sb-sidenav-menu-heading">View</div>
                            <a class="nav-link" href="viewCourseOutline.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-eye"></i></div>
                                View Course Outline
                            </a>


                            <div class="sb-sidenav-menu-heading">Statistics</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAchieveStats" aria-expanded="false" aria-controls="collapseAchieveStats">
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-chart-bar"></i></div>
                                PLO Achievement Statistics
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseAchieveStats" aria-labelledby="headingAchieveStats" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="ploComparisonStudent.php">PLO Comparison (Student)</a>
                                    <a class="nav-link" href="ploComparisonCourse.php">PLO Comparison (Course)</a>
                                    <a class="nav-link" href="ploComparisonProgram.php">PLO Comparison (Program)</a>
                                    <a class="nav-link" href="ploComparisonSchool.php">PLO Comparison (School)</a>
                                    <a class="nav-link" href="ploComparisonDepartment.php">PLO Comparison (Department)</a>
  
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEnrollmentStats" aria-expanded="false" aria-controls="collapseEnrollmentStats">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
                                Enrollment Statistics
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseEnrollmentStats" aria-labelledby="headingEnrollmentStats" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="enrollmentStatistics.php">Student Enrollment Statistics</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Employee
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4">Add Exam</h2>


  <!-- div row-1 starts here -->

  <form action="addExamConfig.php" method="POST">

      <div class="row3">
        
        <input class="id-input" type="text" placeholder="Exam Name" name="examName"/>


      <select name="courseID" class="select" style="margin-left: 15%; margin-right: 15%">
     <option disabled selected>Course</option>
     <option value="CSC101">CSC101</option>
      <option value="EEE131">EEE131</option>
      <option value="ENG101">ENG101</option>
     </select>              

    <select name="sectionNum" class="select">
    <option disabled selected>Section</option>
    <option value="1">section-1</option>
    <option value="2">section-2</option>
    <option value="3">section-3</option>
    <option value="4">section-4</option>
    </select>  

      </div>

  <!-- div row-1 ends here -->

    <div class="row3">

    <select name="questionCount" class="select" style="margin-left: 30px">
       <option disabled selected>No. of Questions</option>
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
       <option value="6">6</option>
       <option value="7">7</option>
     </select> 

    <select name="semester" class="select" style="margin-left: 16%; margin-right: 15%">
       <option disabled selected>Semester</option>
       <option value="spring">spring</option>
       <option value="summer">summer</option>
       <option value="autumn">autumn</option>
     </select>              

     <select name="year" class="select">
       <option disabled selected>year</option>
       <option value="2020">2020</option>
       <option value="2021">2021</option>
       <option value="2022">2022</option>
       <option value="2023">2023</option>
     </select>  

    </div>
    
    <div class="row1" style="height: 0px;">
            <div class="question-row1" style="font-weight: 400; margin-top: 10px">
  
                <label class="question-form">
                 Question Number
                <input type="text" class="question-number" name="questionNum1">
                </label>

                <label class="question-form">
                  Question Details
                <input type="text" class="question-number" name="questionDetails1">
                </label>

                <label class="question-form">
                 Mark
                <input type="text" class="question-number" name="mark1">
                </label>

                <label class="question-form">
                 CO Number
                <input type="text" class="question-number" name="coNum1">
                </label>
            </div>

            <div class="question-row1">
  
                <label class="question-form">
                 Question Number
                <input type="text" class="question-number" name="questionNum2">
                </label>

                <label class="question-form">
                  Question Details
                <input type="text" class="question-number" name="questionDetails2">
                </label>

                <label class="question-form">
                 Mark
                <input type="text" class="question-number" name="mark2">
                </label>

                <label class="question-form">
                 CO Number
                <input type="text" class="question-number"name="coNum2">
                </label>
            </div>
            
            <div class="question-row1">
  
              <label class="question-form">
               Question Number
              <input type="text" class="question-number" name="questionNum2">
              </label>

              <label class="question-form">
                Question Details
              <input type="text" class="question-number" name="questionDetails2">
              </label>

              <label class="question-form">
               Mark
              <input type="text" class="question-number" name="mark2">
              </label>

              <label class="question-form">
               CO Number
              <input type="text" class="question-number"name="coNum2">
              </label>
          </div>

          <div class="question-row1">
  
            <label class="question-form">
             Question Number
            <input type="text" class="question-number" name="questionNum2">
            </label>

            <label class="question-form">
              Question Details
            <input type="text" class="question-number" name="questionDetails2">
            </label>

            <label class="question-form">
             Mark
            <input type="text" class="question-number" name="mark2">
            </label>

            <label class="question-form">
             CO Number
            <input type="text"  class="question-number"name="coNum2">
            </label>            
        </div>

        <div class="question-row1">
  
          <label class="question-form">
           Question Number
          <input type="text" class="question-number" name="questionNum2">
          </label>

          <label class="question-form">
            Question Details
          <input type="text" class="question-number" name="questionDetails2">
          </label>

          <label class="question-form">
           Mark
          <input type="text" class="question-number" name="mark2">
          </label>

          <label class="question-form">
           CO Number
          <input type="text" class="question-number"name="coNum2">
          </label>
        </div>

        <div class="question-row1">
  
          <label class="question-form">
           Question Number
          <input type="text" class="question-number" name="questionNum2">
          </label>

          <label class="question-form">
            Question Details
          <input type="text" class="question-number" name="questionDetails2">
          </label>

          <label class="question-form">
           Mark
          <input type="text" class="question-number" name="mark2">
          </label>

          <label class="question-form">
           CO Number
          <input type="text" class="question-number"name="coNum2">
          </label>
   
      </div>

      <div class="question-row1">
  
        <label class="question-form">
         Question Number
        <input type="text" class="question-number" name="questionNum2">
        </label>

        <label class="question-form">
          Question Details
        <input type="text" class="question-number" name="questionDetails2">
        </label>

        <label class="question-form">
         Mark
        <input type="text" class="question-number" name="mark2">
        </label>

        <label class="question-form">
         CO Number
        <input type="text" class="question-number" name="coNum2" style="margin-bottom: 5px;">
        </label>
      </div>
<div id="id-input-container"> <input type="submit" class="id-submit" name="submit" value="Submit" style="margin-bottom: 10px;"></div>
        
      </div>  

 
    </form>

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
    </html>
    
    
    