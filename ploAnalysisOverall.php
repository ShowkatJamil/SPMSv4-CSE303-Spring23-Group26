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
    <title>Overall PLO Analysis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
        <link href="newStyle.css" rel="stylesheet" />

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
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
                        <h2 class="mt-4">Overall PLO Analysis</h2>

                              

<!-- php code for analysis starts here -->

<div class="background">

      <div class="row1">
        <form method="POST">


        <div id="id-input-container">
  <input class= "id-input" type="text" placeholder="Enter Student ID" name="studentID"/>     
  <input class= "id-submit" type="submit" name="submit" value="Submit"/>
</div>

        </form>
        </div>

      <div style="display:flex;justify-content:space-around" class="row2">
        <button onclick="overallPlo()" style="width:300px;margin-left:0px;" class="School-wise">Overall PLO</button>
        <button onclick="coWisePlo()" style="width:300px;" class="Department-wise">CO Wise PLO</button>
        <button onclick="courseWisePlo()" style="width:300px;" class="Program-wise">Course Wise PLO</button>
      </div>
    
     <div style="display:flex;justify-content:center;" class="row3" style="margin-top:20px;"> 
       <div id="Autumn" style="width: 65%; height: 500px; display:inline-block;margin-top:23px;"></div>
       
     </div>
</div>    

<?php
if(isset($_POST['submit'])){
  $studentID=$_POST['studentID'];
}
?>

<!-- Overall plo -->
<script>
    function overallPlo(){
    <?php

    $sql="SELECT plo.ploNum AS ploNum, 
    AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
    FROM registration_t AS r, answer_t AS ans, question_t AS q, 
    co_t AS co, plo_t AS plo
    WHERE r.registrationID=ans.registrationID 
    AND ans.examID=q.examID
    AND ans.answerNum=q.questionNum AND q.coNum=co.coNum 
    AND q.courseID=co.courseID AND co.ploID=plo.ploID 
    AND r.studentID='$studentID'
    GROUP BY plo.ploNum,r.studentID";

    $result=mysqli_query($con,$sql);
    ?>
    
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawAutumnChart);

      function drawAutumnChart() {
        var data = google.visualization.arrayToDataTable([
          ['ploNum','PLO Percentage'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
             
              $ploNum="PLO".$data['ploNum'];
              $percent=$data['percent'];
              
           ?>

           ['<?php echo $ploNum;?>',<?php echo $percent;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Overall PLO Analysis',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Autumn'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
}
</script> 


<!-- Co wise plo -->
<script>
function coWisePlo(){
   
    }
</script>

<!-- course wise plo -->

<script>
function courseWisePlo(){


    }
</script>


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



























