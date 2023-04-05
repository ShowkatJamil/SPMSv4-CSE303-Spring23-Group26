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

    <title>Spider Chart Analysis</title>

   

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
   
    <!-- JS Charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>

#chartdiv {
  width: 100%;
  height: 500px;
  background-color:pink;
}

    body{
        background-color:#155977;
    }
    
    .studentID{
        background-color:#6698FF;
        height:36px;border: 1px solid;
        cursor: pointer;
        border-radius: 5px;
        font-size: 14px;
        letter-spacing:2px;
        font-weight: bold;
        text-transform: uppercase;
        border: none;
        outline: none;
        text-align: center;
        color:white;
    }

    .studentID:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
    }
    .studentID:active{
    opacity: 0.5;
    }

    .enterButton{
        background:#6698FF;
        border-radius:10px;
        border:none;
        outline:none;
        color:#fff;
        font-size:14px;
        letter-spacing:2px;
        text-transform:uppercase;cursor:pointer;
        font-weight:bold;margin-left:10px;
        height: 36px;
        width: 100px;"
             
    }

    .enterButton:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
    }
    .enterButton:active{
    opacity: 0.5;
    }

    .viewButton{
        background:#6698FF;
        border-radius:10px;
        border:none;
        outline:none;
        color:#fff;
        font-size:14px;
        letter-spacing:2px;
        text-transform:uppercase;cursor:pointer;
        font-weight:bold;margin-left:10px;
        height: 36px;
        width: 100px;"
    }

    .viewButton:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
    }
    .viewButton:active{
    opacity: 0.5;
    }

    body{
            background-color:#155977;
        }

        ::placeholder{
          color:white;
        }

        ::-ms-input-placeholder{
          color:white;
        }

        :-ms-input-placeholder{
          color:white;
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

<!-- div row-1 starts here -->
     <div style="display:flex;justify-content:center;padding-top:15px;" class="row1">
     <form method="POST">

     <input style="margin-bottom:0px;" class="studentID" type="text" placeholder="Enter Student ID" name="studentID"/>

    <input style="margin-bottom:0px;" class="enterButton" type="submit" name="submit" value="Enter"/>

    </form>       
    </div>  <!-- div row-1 ends here -->

       
        <!-- div row-2 -->
    <div style="display:flex;justify-content:center;margin-bottom:10px;">

        <button onclick="poView()" style="width:200px;" class="viewButton">view PO analysis</button>
        <button onclick="coView()" style="width:200px;" class="viewButton">View CO analysis</button>
    
    </div> <!-- div row-2 ends here -->

        <div style="display:flex;justify-content:center;margin-top:5px;height:600px;width:100%;"class="row3"> 
        <canvas style="background-color:white;height:500px;width:400px;" id="myChart"></canvas>
        </div> <!-- div row-3 ends here -->

     </div>  <!-- background div ends here -->

    <?php
    if(isset($_POST['submit'])){
    $studentID=$_POST['studentID'];
    }?>


<script>
  
  function poView(){
  <?php
   $sql="SELECT po.poNum AS poNum, 
   AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
   FROM registration_t AS r, answer_t AS ans, question_t AS q, 
   co_t AS co, po_t AS po
   WHERE r.registrationID=ans.registrationID 
   AND ans.examID=q.examID
   AND ans.answerNum=q.questionNum AND q.coNum=co.coNum 
   AND q.courseID=co.courseID AND co.poID=po.poID 
   AND r.studentID='$studentID'
   GROUP BY po.poNum";

   $result=mysqli_query($con,$sql);

   $po=array();
   $percent=array();

   while($data=mysqli_fetch_array($result)){
             
    array_push($po,"PO ".$data['poNum']);
    array_push($percent,$data['percent']);
    
  }

  ?>

 
  var po=<?php echo json_encode($po); ?>;
  var percent=<?php echo json_encode($percent); ?>;

  for(var i=0;i<percent.length;i++){
    percent[i]=parseFloat(percent[i]);
  }
    
    const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'radar',
  data: {
    labels: po,
    datasets: [{
      label: 'PO Achieved',
      data: percent,
      fill: true,
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
    borderColor: 'rgb(54, 162, 235)',
    pointBackgroundColor: 'rgb(54, 162, 235)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(54, 162, 235)'}]
  },
  options: {
    elements: {
      line: {
        borderWidth: 3
      }
    }
  }
});

  }

  function coView(){
  <?php
   $sql="SELECT q.coNum, 
   AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
   FROM registration_t AS r, answer_t AS ans, question_t AS q, 
   co_t AS co, po_t AS po
   WHERE r.registrationID=ans.registrationID 
   AND ans.examID=q.examID
   AND ans.answerNum=q.questionNum AND q.coNum=co.coNum
   AND r.studentID='$studentID'
   GROUP BY q.coNum";

   $result=mysqli_query($con,$sql);

   $co=array();
   $percent=array();

   while($data=mysqli_fetch_array($result)){
             
    array_push($co,"CO ".$data['coNum']);
    array_push($percent,$data['percent']);
    
  }

  ?>

 
  var co=<?php echo json_encode($co); ?>;
  var percent=<?php echo json_encode($percent); ?>;

  for(var i=0;i<percent.length;i++){
    percent[i]=parseFloat(percent[i]);
  }
    
    const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'radar',
  data: {
    labels: co,
    datasets: [{
      label: 'CO Achieved',
      data: percent,
      fill: true,
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
    borderColor: 'rgb(54, 162, 235)',
    pointBackgroundColor: 'rgb(54, 162, 235)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(54, 162, 235)'}]
  },
  options: {
    elements: {
      line: {
        borderWidth: 3
      }
    }
  }
});

  }


</script>



</body>

</html>