<?php
  include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLO Analysis with dept/program/school average</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">

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

      <div style="height:80px;"class="row1">
        <form method="POST">
        <input style="background-color:#6698FF;height:50px;border: 1px solid;cursor: pointer;border-radius: 5px;font-size: 14px;letter-spacing:2px;
                      font-weight: bold;text-transform:uppercase; border: none;outline: none;text-align: center;margin-right:20px;
                      color:white;margin-left:43%;margin-top:13px;" type="text" placeholder="Enter Student ID" name="studentID"/>
             
        <input style="background:#00BFFF;border-radius:10px; border:none;outline:none;color:#fff;font-size:14px;
                    letter-spacing:2px;text-transform:uppercase;cursor:pointer;font-weight:bold;margin-left:5px;height: 36px;width: 100px;"
              
        type="submit" name="submit" value="Submit"/>
        </form>
        </div>

      <div style="display:flex;justify-content:space-around" class="row2">
        <button onclick="ploAnalysisWithDepartmentAverage()" style="width:300px;margin-left:0px;" class="School-wise">PLO Analysis with Department Average</button>
        <button onclick="ploAnalysisWithProgramAverage()" style="width:300px;" class="Department-wise">PLO Analysis with Program Average</button>
        <button onclick="ploAnalysisWithSchoolAverage()" style="width:300px;" class="Program-wise">PLO Analysis with School Average</button>
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

<!-- Analysis with Department Average -->
<script>
    function ploAnalysisWithDepartmentAverage(){
    <?php

    $sql="SELECT plo.ploNum AS ploNum, 
    AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
    FROM registration_t AS r, answer_t AS ans, question_t AS q, 
    co_t AS co, plo_t AS plo
    WHERE r.registrationID=ans.registrationID 
    AND ans.examID=q.examID AND ans.answerNum=q.questionNum AND q.coNum=co.coNum 
    AND q.courseID=co.courseID AND co.ploID=plo.ploID 
    AND r.studentID='$studentID'
    GROUP BY plo.ploNum,r.studentID";

    $result=mysqli_query($con,$sql);

    $sql2="SELECT plo.ploNum AS ploNum, AVG((ans.markObtained/q.markPerQuestion)*100) 
    AS percent
    FROM registration_t AS r, answer_t AS ans, question_t AS q, 
    co_t AS co, plo_t AS plo, student_t AS s WHERE r.studentID=s.studentID 
    AND r.registrationID=ans.registrationID AND ans.examID=q.examID
    AND ans.answerNum=q.questionNum 
    AND q.coNum=co.coNum AND q.courseID=co.courseID AND co.ploID=plo.ploID
    AND s.departmentID=(SELECT s.departmentID FROM student_t AS s 
    WHERE s.studentID='$studentID')
    GROUP BY plo.ploNum";

    $result2=mysqli_query($con,$sql2);

    ?>
    
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawAutumnChart);

      function drawAutumnChart() {
        var data = google.visualization.arrayToDataTable([
          ['ploNum','Individual','Dept Average'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $data2=mysqli_fetch_array($result2);
              $ploNum="PLO".$data['ploNum'];
              $percent=$data['percent'];
              $percent2=$data2['percent'];
           ?>

           ['<?php echo $ploNum;?>',<?php echo $percent;?>,<?php echo $percent2;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'PLO Analysis with Department Average',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Autumn'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
}
</script> 


<!-- Analysis with Program Average -->
<script>
function ploAnalysisWithProgramAverage(){
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

    $sql2="SELECT plo.ploNum AS ploNum, 
    AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
    FROM registration_t AS r, answer_t AS ans, question_t AS q, 
    co_t AS co, plo_t AS plo, student_t AS s, program_t AS p
    WHERE r.studentID=s.studentID 
    AND r.registrationID=ans.registrationID AND ans.examID=q.examID
    AND ans.answerNum=q.questionNum  
    AND q.coNum=co.coNum AND q.courseID=co.courseID AND co.ploID=plo.ploID 
    AND s.programID=p.programID
    AND s.programID=(SELECT s.programID FROM student_t AS s WHERE s.studentID='$studentID')
    GROUP BY plo.ploNum";

    $result2=mysqli_query($con,$sql2);

    ?>
    
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawAutumnChart);

      function drawAutumnChart() {
        var data = google.visualization.arrayToDataTable([
          ['ploNum','Individual','Program Average'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $data2=mysqli_fetch_array($result2);
              $ploNum="PLO".$data['ploNum'];
              $percent=$data['percent'];
              $percent2=$data2['percent'];
           ?>

           ['<?php echo $ploNum;?>',<?php echo $percent;?>,<?php echo $percent2;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'PLO Analysis with Program Average',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Autumn'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    }
</script>

<!-- Analysis with School Average -->
<script>
function ploAnalysisWithSchoolAverage(){

    <?php

$sql="SELECT plo.ploNum AS ploNum, 
AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
FROM registration_t AS r, answer_t AS ans, question_t AS q, 
co_t AS co, plo_t AS plo
WHERE r.registrationID=ans.registrationID 
AND ans.examID=q.examID
AND ans.answerNum=q.questionNum  AND q.coNum=co.coNum 
AND q.courseID=co.courseID AND co.ploID=plo.ploID 
AND r.studentID='$studentID'
GROUP BY plo.ploNum,r.studentID";

$result=mysqli_query($con,$sql);

$sql2="SELECT plo.ploNum AS ploNum, 
AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
FROM registration_t AS r, answer_t AS ans, question_t AS q, 
co_t AS co, plo_t AS plo, student_t AS s, program_t AS p, department_t AS d
WHERE r.studentID=s.studentID 
AND r.registrationID=ans.registrationID AND ans.examID=q.examID
AND ans.answerNum=q.questionNum  
AND q.coNum=co.coNum AND q.courseID=co.courseID AND co.ploID=plo.ploID 
AND s.departmentID=d.departmentID
AND d.schoolID=(SELECT d.schoolID FROM student_t AS s, 
department_t AS d WHERE s.studentID='$studentID' 
AND s.departmentID=d.departmentID)
GROUP BY plo.ploNum";

$result2=mysqli_query($con,$sql2);

?>

google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawAutumnChart);

  function drawAutumnChart() {
    var data = google.visualization.arrayToDataTable([
      ['ploNum','Individual','School Average'],
      
      <?php
        while($data=mysqli_fetch_array($result)){
          $data2=mysqli_fetch_array($result2);
          $ploNum="PLO".$data['ploNum'];
          $percent=$data['percent'];
          $percent2=$data2['percent'];
       ?>

       ['<?php echo $ploNum;?>',<?php echo $percent;?>,<?php echo $percent2;?>],   
       <?php   
    }
    ?> 
    ]);

    var options = {
      chart: {
        title: 'PLO Analysis with School Average',
      },
      bars: 'vertical',
    };

    var chart = new google.charts.Bar(document.getElementById('Autumn'));
    chart.draw(data, google.charts.Bar.convertOptions(options));
  }

    }
</script>

</body>
</html>
