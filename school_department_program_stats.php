<?php
  include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>School dept program stats</title>
    <!--Google Font-->
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
  </head>

  <body>
    <!--
    <div class="container" id="logoutbutton">
    <a href="logout.php" class="btn btn-primary mb-5">Logout</a>
    </div>
    -->

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

      <div class="row1">
        <form method="POST">
         <select name="year" class="select">
            <option disabled selected>Year</option>
             <option value="2020">2020</option>
             <option value="2021">2021</option>
             <option value="2022">2022</option>
         </select>
             <input style="background:#00BFFF;
              border-radius:10px;
              border:none;
              outline:none;
              color:#fff;
              font-size:14px;
              letter-spacing:2px;
              text-transform:uppercase;
              cursor:pointer;
              font-weight:bold;
              margin-left:5px;
              height: 36px;
              width: 100px;"
              
             type="submit" name="submit" value="Submit"/>
         </form>
      </div>

      <div class="row2">
        <button onclick="schoolWiseGpa()" class="School-wise">School-wise GPA Trend</button>
        <button onclick="departmentWiseGpa()" class="Department-wise">Department-wise GPA Trend</button>
        <button onclick="programWiseGpa()" class="Program-wise">Program-wise GPA Trend</button>
      </div>
    
     <div class="row3" style="margin-top:20px;"> 
       <div id="Spring" style="width: 500px; height: 500px; display:inline-block;"></div>
       <div id="Summer" style="width: 500px; height: 500px; display:inline-block;"></div>
       <div id="Autumn" style="width: 500px; height: 500px; display:inline-block;"></div>
       
     </div>
</div>    

<?php
if(isset($_POST['submit'])){
  $year=$_POST['year'];
}
?>

<!-- department wise function -->
<script>
    function departmentWiseGpa(){
    <?php
    $sql="SELECT s.departmentID AS department,AVG(scp.gradePoint) as GPA
    FROM student_t AS s,student_course_performance_t AS scp, 
    registration_t AS r, section_t AS sec
    WHERE r.registrationID=scp.registrationID 
    AND r.studentID=s.studentID AND r.sectionID=sec.sectionID 
    AND sec.semester='autumn' AND sec.year='$year'
    GROUP BY s.departmentID";
    $result=mysqli_query($con,$sql);
    ?>
    
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawAutumnChart);
    google.charts.setOnLoadCallback(drawSummerChart);
    google.charts.setOnLoadCallback(drawSpringChart);

      function drawAutumnChart() {
        var data = google.visualization.arrayToDataTable([
          ['Department','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $department=$data['department'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $department;?>',<?php echo $GPA;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Autumn',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Autumn'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }


<?php
$sql="SELECT s.departmentID AS department,AVG(scp.gradePoint) as GPA
FROM student_t AS s,student_course_performance_t AS scp, registration_t AS r, section_t AS sec
WHERE r.registrationID=scp.registrationID AND r.studentID=s.studentID AND r.sectionID=sec.sectionID AND sec.semester='summer' AND sec.year='$year'
GROUP BY s.departmentID";
$result=mysqli_query($con,$sql);
?>

      function drawSummerChart() {
        var data = google.visualization.arrayToDataTable([
          ['Department','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $department=$data['department'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $department;?>',<?php echo $GPA;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Summer',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Summer'));

        chart.draw(data, google.charts.Bar.convertOptions(options)); 
    }
<?php
$sql="SELECT s.departmentID AS department,AVG(scp.gradePoint) as GPA
FROM student_t AS s,student_course_performance_t AS scp, registration_t AS r, section_t AS sec
WHERE r.registrationID=scp.registrationID AND r.studentID=s.studentID AND r.sectionID=sec.sectionID 
AND sec.semester='spring' AND sec.year='$year'
GROUP BY s.departmentID";
$result=mysqli_query($con,$sql);
?>

function drawSpringChart() {
        var data = google.visualization.arrayToDataTable([
          ['Department','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $department=$data['department'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $department;?>',<?php echo $GPA;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Spring',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Spring'));
        chart.draw(data, google.charts.Bar.convertOptions(options)); 
    }
}
</script> 


<!-- program wise function -->
<script>
function programWiseGpa(){
    <?php
    $sql="SELECT p.programName AS program, AVG(scp.gradePoint) AS GPA
    FROM registration_t AS r, student_t AS s, student_course_performance_t AS scp, program_t AS p, section_t AS sec
    WHERE r.studentID=s.studentID AND scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID AND s.programID=p.programID AND sec.semester='autumn' AND sec.year='$year'
    GROUP BY p.programID";
    $result=mysqli_query($con,$sql);
    ?>
    
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawAutumnChart);
    google.charts.setOnLoadCallback(drawSummerChart);
    google.charts.setOnLoadCallback(drawSpringChart);

      function drawAutumnChart() {
        var data = google.visualization.arrayToDataTable([
          ['Program','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $programName=$data['program'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $programName;?>',<?php echo $GPA;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Autumn',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Autumn'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }


<?php
$sql="SELECT p.programName AS program, AVG(scp.gradePoint) AS GPA
FROM registration_t AS r, student_t AS s, student_course_performance_t AS scp, program_t AS p, section_t AS sec
WHERE r.studentID=s.studentID AND scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID AND s.programID=p.programID AND sec.semester='summer' AND sec.year='$year'
GROUP BY p.programID";
$result=mysqli_query($con,$sql);
?>

      function drawSummerChart() {
        var data = google.visualization.arrayToDataTable([
          ['Program','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $programName=$data['program'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $programName;?>',<?php echo $GPA;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Summer',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Summer'));

        chart.draw(data, google.charts.Bar.convertOptions(options)); 
    }
<?php
$sql="SELECT p.programName AS program, AVG(scp.gradePoint) AS GPA
FROM registration_t AS r, student_t AS s, student_course_performance_t AS scp, program_t AS p, section_t AS sec
WHERE r.studentID=s.studentID AND scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID AND s.programID=p.programID AND sec.semester='spring' AND sec.year='$year'
GROUP BY p.programID";
$result=mysqli_query($con,$sql);
?>

function drawSpringChart() {
        var data = google.visualization.arrayToDataTable([
          ['Program','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $programName=$data['program'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $programName;?>',<?php echo $GPA;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Spring',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Spring'));
        chart.draw(data, google.charts.Bar.convertOptions(options)); 
    }

    }
</script>

<!-- school wise function -->
<script>
function schoolWiseGpa(){
    <?php
    $sql="SELECT sch.schoolID AS school,AVG(scp.gradePoint) AS GPA
    FROM student_t AS s, registration_t AS r,department_t AS d,school_t AS sch,student_course_performance_t AS scp, section_t AS sec
    WHERE scp.registrationID=r.registrationID AND r.studentID=s.studentID AND r.sectionID=sec.sectionID AND s.departmentID=d.departmentID AND d.schoolID=sch.schoolID AND sec.semester='autumn' AND sec.year='$year'
    GROUP BY sch.schoolID";
    $result=mysqli_query($con,$sql);
    ?>
    
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawAutumnChart);
    google.charts.setOnLoadCallback(drawSummerChart);
    google.charts.setOnLoadCallback(drawSpringChart);

      function drawAutumnChart() {
        var data = google.visualization.arrayToDataTable([
          ['School','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $school=$data['school'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $school;?>',<?php echo $GPA;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Autumn',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Autumn'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }


<?php
$sql="SELECT sch.schoolID AS school,AVG(scp.gradePoint) AS GPA
FROM student_t AS s, registration_t AS r,department_t AS d,school_t AS sch,student_course_performance_t AS scp, section_t AS sec
WHERE scp.registrationID=r.registrationID AND r.studentID=s.studentID AND r.sectionID=sec.sectionID AND s.departmentID=d.departmentID AND d.schoolID=sch.schoolID AND sec.semester='summer' AND sec.year='$year'
GROUP BY sch.schoolID";
$result=mysqli_query($con,$sql);
?>

      function drawSummerChart() {
        var data = google.visualization.arrayToDataTable([
          ['School','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $school=$data['school'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $school;?>',<?php echo $GPA;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Summer',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Summer'));

        chart.draw(data, google.charts.Bar.convertOptions(options)); 
    }
<?php
$sql="SELECT sch.schoolID AS school,AVG(scp.gradePoint) AS GPA
FROM student_t AS s, registration_t AS r,department_t AS d,school_t AS sch,student_course_performance_t AS scp, section_t AS sec
WHERE scp.registrationID=r.registrationID AND r.studentID=s.studentID AND r.sectionID=sec.sectionID AND s.departmentID=d.departmentID AND d.schoolID=sch.schoolID AND sec.semester='spring' AND sec.year='$year'
GROUP BY sch.schoolID";
$result=mysqli_query($con,$sql);
?>

function drawSpringChart() {
        var data = google.visualization.arrayToDataTable([
          ['School','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $school=$data['school'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $school;?>',<?php echo $GPA;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Spring',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Spring'));
        chart.draw(data, google.charts.Bar.convertOptions(options)); 
    }

    }
</script>

  </body>

</html>