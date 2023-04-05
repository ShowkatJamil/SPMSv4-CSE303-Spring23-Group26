<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLO Comparison(Student)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
    <script type="text/javascript"></script>  
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
                <a class="nav-link active" aria-current="page" href="studentDashboard.php">Dashboard</a>
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
                  <li><a class="dropdown-item" href="viewExam.php">View Exam</a></li>
                </a>
                  </li>
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
 

<div class="background">

     <div style="display:flex;justify-content:center;" class="row1">
     <form method="POST">

     <input style="background-color:#6698FF;height:36px;border: 1px solid;cursor: pointer;border-radius: 5px;
                font-size: 14px;letter-spacing:2px;font-weight: bold;text-transform: uppercase;border: none;
                outline: none;text-align: center;color:white;" type="text" placeholder="Enter Student ID" name="studentID"/>

     <select style="margin-left:10px;" name="year" class="select">
       <option disabled selected>Year</option>
       <option value="2020">2020</option>
       <option value="2021">2021</option>
       <option value="2022">2022</option>
     </select>
       <input style="background:#00BFFF;border-radius:10px;border:none;outline:none;color:#fff;font-size:14px;letter-spacing:2px;
              text-transform:uppercase;cursor:pointer;font-weight:bold;margin-left:10px;height: 36px;width: 100px;"
              type="submit" name="submit" value="Submit"/>
    </form>       
    </div>  <!-- div row-1 ends here -->

       
        <!-- div row-2 -->
        <div style="height:50px;padding-left:43%;margin-top:15px;">
        <button onclick="view()" style="height: 46px;width: 100px;margin-left:40px;display:inline-block;border-radius: 10px;
        border: none;outline: none;background:#00BFFF;color: #fff;font-size: 14px;letter-spacing:2px;
        text-transform: uppercase;cursor:pointer;font-weight: bold;">view</button>
        </div> <!-- div row-2 ends here -->

        <div style="display:flex;justify-content:center;"class="row3" style="margin-top:5px;"> 
        <div id="curve_chart" style="width: 900px; height: 500px"></div>
        </div> <!-- div row-3 ends here -->

</div>  <!-- background div ends here -->


<?php
    if(isset($_POST['submit'])){
    $year=$_POST['year'];
    $studentID=$_POST['studentID'];
  }?>

<script>
    function view(){
     
    <?php

    $sql="SELECT sec.semester AS semester, 
    AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
    FROM section_t AS sec, plo_t AS plo, answer_t AS ans, question_t AS q, 
    registration_t AS r, co_t AS co
    WHERE r.sectionID=sec.sectionID AND r.registrationID=ans.registrationID 
    AND ans.examID=q.examID
    AND ans.answerNum=q.questionNum AND q.coNum=co.coNum 
    AND q.courseID=co.courseID AND co.ploID=plo.ploID 
    AND r.studentID='$studentID' AND sec.year='$year'
    GROUP BY semester";

    $result=mysqli_query($con,$sql);
    ?>
    
    google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Semester', 'PLO'],
          <?php
            while($data=mysqli_fetch_array($result)){
              $semester=$data['semester'];
              $PLO=$data['PLO'];
           ?>
           ['<?php echo $semester;?>',<?php echo $PLO;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
   

  }

</script>



</body>

</html>