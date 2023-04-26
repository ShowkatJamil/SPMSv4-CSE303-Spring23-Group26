<?php                                  //csv file handler
include 'connect.php';
session_start();

if (isset($_POST["upload"])) {
    if ($_FILES['fileToUpload']['name']) {
        $filename = explode(".", $_FILES['fileToUpload']['name']);
        if (end($filename) == "csv") {
            $handle = fopen($_FILES['fileToUpload']['tmp_name'], "r");
            $header = fgetcsv($handle); 
            while ($data = fgetcsv($handle)) {
                $studentID = mysqli_real_escape_string($con, $data[0]);
                $year = mysqli_real_escape_string($con, $data[1]);
                $semester = mysqli_real_escape_string($con, $data[2]);
                $courseID = mysqli_real_escape_string($con, $data[3]);
                $section = mysqli_real_escape_string($con, $data[4]);
                $marks = mysqli_real_escape_string($con, $data[5]);
                $facultyID = $_SESSION['ID'];
                $time = date("Y-m-d H:i:s");
                $query = "
                    INSERT INTO backlog_data_t (studentID, edu_year, 
                    edu_semester, enrolled_course, enrolled_section, obtained_marks,
                    facultyID, time_stamp) VALUES 
                    ('$studentID', '$year', '$semester', '$courseID',
                    '$section', '$marks', '$facultyID', '$time')
                    
                          ";
                          
                mysqli_query($con, $query);
                        $result = mysqli_query($con,
                        "SELECT MAX(backlogID) AS backlogID
                        FROM backlog_data_t");
                        $row=mysqli_fetch_assoc($result); 
                        $backlogID=$row['backlogID'];
                          

                        $sectionQuery="INSERT INTO section_t (sectionNum, semester, courseID, facultyID, year) VALUES 
                        ('$section', '$semester', '$courseID','$facultyID', '$year')";
                        $sectionTable = mysqli_query($con, $sectionQuery);
                        //Getting sectionID
                        $result = mysqli_query($con,
                        "SELECT MAX(sectionID) AS secID
                        FROM section_t");
                        $row=mysqli_fetch_assoc($result); 
                        $secID=$row['secID'];

                        $backlogCourseQuery = "INSERT INTO backlog_course_t (backlogID, courseID) VALUES
                        ('$backlogID', '$courseID')";
                        $backlogCourseTable = mysqli_query($con, $backlogCourseQuery);

                        $backlogSectionQuery = "INSERT INTO backlog_section_t (backlogID, sectionID) VALUES
                        ('$backlogID', '$secID')";
                        $backlogSectionTable = mysqli_query($con, $backlogSectionQuery);

                        $registrationQuery="INSERT INTO registration_t (sectionID, studentID) VALUES 
                        ('$secID', '$studentID')";
                        $registrationTable = mysqli_query($con, $registrationQuery);

                        $examName="Backlog";
                        $examQuery="INSERT INTO exam_t (sectionID, examName) VALUES 
                        ('$secID', 'Backlog')";
                        $examTable = mysqli_query($con, $examQuery);

                        //Getting registrationID
                        $result = mysqli_query($con,
                        "SELECT MAX(registrationID) AS regID
                        FROM registration_t");
                        $row=mysqli_fetch_assoc($result);
                        $regID=$row['regID'];

                        //student course performance
                        $gradePoint=0;
                        if( $marks >= 90 && $marks<=100)
                            $gradePoint=4.0;
                        elseif( $marks>= 85 && $marks<=89)
                            $gradePoint=3.7;
                        elseif($marks >= 80 && $marks<=84)
                            $gradePoint=3.3;
                        elseif( $marks >= 75 && $marks<=79)
                            $gradePoint=3.0;
                        elseif( $marks >= 70 && $marks <=74)
                            $gradePoint=2.7;
                        elseif( $marks >= 60 && $marks <=69)
                            $gradePoint=2.3;
                        elseif( $marks >= 65 && $marks <=64)
                            $gradePoint=2.0;
                        elseif( $marks >= 55 && $marks <=59)
                            $gradePoint=1.7;
                        elseif( $marks >= 50 && $marks <=54)
                            $gradePoint=1.3;
                        elseif( $marks >= 45 && $marks<=49)
                            $gradePoint=1.0;
                        elseif( $marks < 44 )
                            $gradePoint=0.0;
                        $studCoursePerformanceQuery = "INSERT INTO student_course_performance_t(registrationID, totalMarksObtained,gradePoint)
                        VALUES ('$regID', '$marks', '$gradePoint')";
                        $studCoursePerformanceTable = mysqli_query($con, $studCoursePerformanceQuery);
                        
                        
                        //Getting examID
                        $result = mysqli_query($con,
                        "SELECT MAX(examID) AS examID
                        FROM exam_t");
                        $row=mysqli_fetch_assoc($result);
                        $examID=$row['examID'];
                        
                        
                        $ansMark = $marks/10;
                        $answerQuery="INSERT INTO answer_t (answerDetails, answerNum, markObtained,
                        registrationID,questionID, examID) VALUES
                        ('Backlog', 1, '$ansMark', '$regID', 0, '$examID'),
                        ('Backlog', 2, '$ansMark', '$regID', 0, '$examID'),
                        ('Backlog', 3, '$ansMark', '$regID', 0, '$examID'),
                        ('Backlog', 4, '$ansMark', '$regID', 0, '$examID')";
                        $answerTable = mysqli_query($con, $answerQuery);

                        $questionQuery="INSERT INTO question_t (questionDetails, markPerQuestion, questionNum,
                        difficultyLevel, examID, courseID, coNum) VALUES
                        ('Backlog', 10, 1, FLOOR(RAND()* (5-1+1))+1, '$examID', '$courseID', 1),
                        ('Backlog', 10, 2, FLOOR(RAND()* (5-1+1))+1, '$examID', '$courseID', 2),
                        ('Backlog', 10, 3, FLOOR(RAND()* (5-1+1))+1, '$examID', '$courseID', 3),
                        ('Backlog', 10, 4, FLOOR(RAND()* (5-1+1))+1, '$examID', '$courseID', 4)";
                        $questionTable = mysqli_query($con, $questionQuery);

                        //PO Table
                        $programID=0;
                        if($courseID=="CSE101"){
                            $programID=13;}
                        elseif($courseID=="EEE131"){
                            $programID=20;}
                        elseif($courseID=="ENG101"){
                            $programID=9; }

                        $poQuery="INSERT INTO po_t (poNum, programID) VALUES
                        (FLOOR(RAND()* (12-1+1))+1, '$programID'), 
                        (FLOOR(RAND()* (12-1+1))+1, '$programID'),
                        (FLOOR(RAND()* (12-1+1))+1, '$programID'),
                        (FLOOR(RAND()* (12-1+1))+1, '$programID')";
                        $poTable = mysqli_query($con, $poQuery);

                        //Getting po/ploID
                        $result = mysqli_query($con,
                        "SELECT MAX(poID) AS poID
                        FROM po_t");
                        $row=mysqli_fetch_assoc($result);
                        $poID=$row['poID'];

                        //PLO Table :)
                        $minPLO =$poID-3;
                        $ploQuery="INSERT INTO plo_t (ploNum, programID)
                        SELECT poNum, programID
                        FROM po_t
                        Where poID Between '$minPLO' AND '$poID'";
                        $ploTable = mysqli_query($con, $ploQuery);
                        $ploID=$poID;


                        //CO Table
                        $coQuery="INSERT INTO co_t (coNum, courseID, ploID, poID) VALUES
                        (1, '$courseID', '$ploID', '$poID'),
                        (2, '$courseID', '$ploID', '$poID'),
                        (3, '$courseID', '$ploID', '$poID'),
                        (4, '$courseID', '$ploID', '$poID')";
                        $coTable = mysqli_query($con, $coQuery);

            }


            fclose($handle);
            header("location: uploadGrade.php");
        } else {
            $message = '<label class="text-danger">Please Select CSV File Only</label>';
        }
    }   
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload New grades</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <link href="newStyle.css" rel="stylesheet" />

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
<script type="text/javascript"></script>  
 <link rel="stylesheet" href="uploadGradeStyle.css">


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
                <div class="input-group">
                    <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" /> -->
                    <!-- <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> -->
                </div>
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
                        <h2 class="mt-4">Upload Backlog Data</h2>
                         

<!-- php code for analysis starts here -->


        <form method="POST" enctype="multipart/form-data">
        <h2>Upload Backlog Data</h2>
        <div class="form-row">
          <label for="student-id">Student ID:</label>
          <input type="text" id="student-id" name="studentID">
        </div>
      
        <div class="form-row">
          <label for="educational-Year">Educational Year:</label>
          <select id="educational-Year" name="year">
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
          </select>
        </div>
      
        <div class="form-row">
          <label for="educational-semester">Educational Semester:</label>
          <select id="educational-semester" name="semester">
            <option value="spring">spring</option>
            <option value="summer">summer</option>
            <option value="autumn">autumn</option>
          </select>
        </div>
      
        <div class="form-row">
          <label for="enrolled-course">Enrolled Course:</label>    
            <select  name="courseID" id="enrolled-course">
                <option value="CSE101" selected>CSE101</option>
                <option value="EEE131">EEE131</option>
                <option value="ENG101">ENG101</option>
                </select>
        </div>
      
        <div class="form-row">
          <label for="enrolled-section">Enrolled Section:</label>
          <input type="text" id="enrolled-section" name="section">
        </div>
      
        <div class="form-row">
          <label for="obtained-grade">Obtained Marks:</label>
          <input type="text" id="obtained-grade" name="marks">
        </div>
      
        <div class="button-row-upload">
          <label for="file-upload">Upload File:</label>
          <input type="file" name="fileToUpload" id="fileToUpload">
        </div>

        <div class="button-row-upload">
        <input type="submit" name="upload" class="btn btn-danger" value="Upload" style="margin-top: 10px;">
        <a href="viewBackLogData.php" class="btn btn-primary" style="margin-top: 10px; margin-left:25px" >View Backlog Data</a>
        </div>

        <div class="button-row-submit">
        <button name="submit" class="id-submit">Submit</button>
        </div>
</form>

 <!--csv file import php partition  -->

    
 <?php

if(isset($_GET['path']))
{
//Read the filename
$filename = $_GET['path'];
//Check the file exists or not
if(file_exists($filename)) {

//Define header information
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");
header('Content-Disposition: attachment; filename="'.basename($filename).'"');
header('Content-Length: ' . filesize($filename));
header('Pragma: public');

//Clear system output buffer
flush();

//Read the size of the file
readfile($filename);

//Terminate from the script
die();
}
else{
echo "File does not exist.";
}
}

?>
<?php                //code for the menual form

        if (isset($_POST['submit'])) {
            //include 'connect.php';
            //session_start();
            $studentID = $_POST['studentID'];
            $semester = $_POST['semester'];
            $year = $_POST['year'];
            $courseID = $_POST['courseID'];
            $section = $_POST['section'];
            $marks = $_POST['marks'];
            $facultyID = $_SESSION['ID'];
            $timeStamp = date("Y-m-d H:i:s");


            $backlogQuery="INSERT INTO backlog_data_t (studentID, edu_year, 
            edu_semester, enrolled_course, enrolled_section, obtained_marks,
            facultyID, time_stamp) VALUES 
            ('$studentID', '$year', '$semester', '$courseID',
            '$section', '$marks', '$facultyID', '$timeStamp')";
            $backlogTable = mysqli_query($con, $backlogQuery);
            
            //Getting backlogID
            $result = mysqli_query($con,
            "SELECT MAX(backlogID) AS backlogID
            FROM backlog_data_t");
            $row=mysqli_fetch_assoc($result); 
            $backlogID=$row['backlogID'];

            $sectionQuery="INSERT INTO section_t (sectionNum, semester, courseID, facultyID, year) VALUES 
            ('$section', '$semester', '$courseID','$facultyID', '$year')";
            $sectionTable = mysqli_query($con, $sectionQuery);
            
            //Getting sectionID
            $result = mysqli_query($con,
            "SELECT MAX(sectionID) AS secID
            FROM section_t");
            $row=mysqli_fetch_assoc($result); 
            $secID=$row['secID'];

            $backlogCourseQuery = "INSERT INTO backlog_course_t (backlogID, courseID) VALUES
            ('$backlogID', '$courseID')";
            $backlogCourseTable = mysqli_query($con, $backlogCourseQuery);

            $backlogSectionQuery = "INSERT INTO backlog_section_t (backlogID, sectionID) VALUES
            ('$backlogID', '$secID')";
            $backlogSectionTable = mysqli_query($con, $backlogSectionQuery);

            $registrationQuery="INSERT INTO registration_t (sectionID, studentID) VALUES 
            ('$secID', '$studentID')";
            $registrationTable = mysqli_query($con, $registrationQuery);

            $examName="Backlog";
            $examQuery="INSERT INTO exam_t (sectionID, examName) VALUES 
            ('$secID', 'Backlog')";
            $examTable = mysqli_query($con, $examQuery);

            //Getting registrationID
            $result = mysqli_query($con,
            "SELECT MAX(registrationID) AS regID
            FROM registration_t");
            $row=mysqli_fetch_assoc($result);
            $regID=$row['regID'];

            //student course performance
            $gradePoint=0;
            if( $marks >= 90 && $marks<=100)
                $gradePoint=4.0;
            elseif( $marks>= 85 && $marks<=89)
                $gradePoint=3.7;
            elseif($marks >= 80 && $marks<=84)
                $gradePoint=3.3;
            elseif( $marks >= 75 && $marks<=79)
                $gradePoint=3.0;
            elseif( $marks >= 70 && $marks <=74)
                $gradePoint=2.7;
            elseif( $marks >= 60 && $marks <=69)
                $gradePoint=2.3;
            elseif( $marks >= 65 && $marks <=64)
                $gradePoint=2.0;
            elseif( $marks >= 55 && $marks <=59)
                $gradePoint=1.7;
            elseif( $marks >= 50 && $marks <=54)
                $gradePoint=1.3;
            elseif( $marks >= 45 && $marks<=49)
                $gradePoint=1.0;
            elseif( $marks < 44 )
                $gradePoint=0.0;
            $studCoursePerformanceQuery = "INSERT INTO student_course_performance_t(registrationID, totalMarksObtained,gradePoint)
            VALUES ('$regID', '$marks', '$gradePoint')";
            $studCoursePerformanceTable = mysqli_query($con, $studCoursePerformanceQuery);
            
            
            //Getting examID
            $result = mysqli_query($con,
            "SELECT MAX(examID) AS examID
            FROM exam_t");
            $row=mysqli_fetch_assoc($result);
            $examID=$row['examID'];
            
            
            $ansMark = $marks/10;
            $answerQuery="INSERT INTO answer_t (answerDetails, answerNum, markObtained,
            registrationID,questionID, examID) VALUES
            ('Backlog', 1, '$ansMark', '$regID', 0, '$examID'),
            ('Backlog', 2, '$ansMark', '$regID', 0, '$examID'),
            ('Backlog', 3, '$ansMark', '$regID', 0, '$examID'),
            ('Backlog', 4, '$ansMark', '$regID', 0, '$examID')";
            $answerTable = mysqli_query($con, $answerQuery);

            $questionQuery="INSERT INTO question_t (questionDetails, markPerQuestion, questionNum,
            difficultyLevel, examID, courseID, coNum) VALUES
            ('Backlog', 10, 1, FLOOR(RAND()* (5-1+1))+1, '$examID', '$courseID', 1),
            ('Backlog', 10, 2, FLOOR(RAND()* (5-1+1))+1, '$examID', '$courseID', 2),
            ('Backlog', 10, 3, FLOOR(RAND()* (5-1+1))+1, '$examID', '$courseID', 3),
            ('Backlog', 10, 4, FLOOR(RAND()* (5-1+1))+1, '$examID', '$courseID', 4)";
            $questionTable = mysqli_query($con, $questionQuery);

            //PO Table
            $programID=0;
            if($courseID=="CSE101"){
                $programID=13;}
            elseif($courseID=="EEE131"){
                $programID=20;}
            elseif($courseID=="ENG101"){
                $programID=9; }

            $poQuery="INSERT INTO po_t (poNum, programID) VALUES
            (FLOOR(RAND()* (12-1+1))+1, '$programID'), 
            (FLOOR(RAND()* (12-1+1))+1, '$programID'),
            (FLOOR(RAND()* (12-1+1))+1, '$programID'),
            (FLOOR(RAND()* (12-1+1))+1, '$programID')";
            $poTable = mysqli_query($con, $poQuery);

            //Getting po/ploID
            $result = mysqli_query($con,
            "SELECT MAX(poID) AS poID
            FROM po_t");
            $row=mysqli_fetch_assoc($result);
            $poID=$row['poID'];

            //PLO Table :)
            $minPLO =$poID-3;
            $ploQuery="INSERT INTO plo_t (ploNum, programID)
            SELECT poNum, programID
            FROM po_t
            Where poID Between '$minPLO' AND '$poID'";
            $ploTable = mysqli_query($con, $ploQuery);
            $ploID=$poID;

            //CO Table
            $coQuery="INSERT INTO co_t (coNum, courseID, ploID, poID) VALUES
            (1, '$courseID', '$ploID', '$poID'),
            (2, '$courseID', '$ploID', '$poID'),
            (3, '$courseID', '$ploID', '$poID'),
            (4, '$courseID', '$ploID', '$poID')";
            $coTable = mysqli_query($con, $coQuery);


            // $backlogCourseQuery = "INSERT INTO  backlog_course_t (backlogID, courseID) VALUES ('$backlogID', '$courseID')";
            // $backlogCourseTable = mysqli_query($con, $backlogCourseQuery);

            // $backlogSectionQuery = "INSERT INTO  backlog_section_t (backlogID, secID) VALUES 
            // ('$backlogID', '$sectionID')";
            // $backlogSectionTable = mysqli_query($con, $backlogSectionQuery);
        }
?>


   

<!-- code ends here -->


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
    