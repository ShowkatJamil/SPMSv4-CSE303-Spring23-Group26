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

        <title>Create Course Outline</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <link href="newStyle.css" rel="stylesheet" />

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
    <script type="text/javascript"></script>  

    <link rel="stylesheet" href="courseOutline.css">
    
    
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

                            <a class="nav-link" href="createCourseOutline.php">
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
                        <h2 class="mt-4">Create Course Outline</h2>

                              

<!-- php code for analysis starts here -->

    <form action="createCourseOutlineConfig.php" method="post" style="background-color: #fff; margin-top: 25px;">

      <div style="margin-top:10px;" class="course_outline_head">
    <div class="rectangle"><p class=text_of_headers>Course Outline</p></div>
    <table>
        <tr>
            <th>Course Code</th>
            <td><input type="text" class="course-title" placeholder="Enter Course Code" name="courseCode"></td>
            <th>Course Title</th>
            <td><input type="text" class="course-title" placeholder="Enter Course Title" name="courseTitle"></td>
        </tr>
        <tr>
            <th>Section</th>
            <td><input type="text" class="course-title" placeholder="Enter Section" name="secNum"></td>
            <th>Prerequisite(if any)</th>
            <td><input type="text" class="course-title" placeholder="Enter Prerequisite" name="prerequisite"></td>
        </tr>
        <tr>
            <th>Credit Value</th>
            <td><input type="text" class="course-title" placeholder="Enter Credit Value" name="creditValue"></td>
            <th>Semester</th>
            <td><input type="text" class="course-title" placeholder="Enter Semester" name="semesterName"></td>
        </tr>
      </table>
  </div>

  <div class="course_description">
    <div class="rectangle"><p class=text_of_headers>Course Description</p></div>
    <textarea name="courseDescription" class="text-area" cols="30" rows="10" placeholder="Enter Course Description"></textarea>
    </div>

  <div class="course_objective">
    <div class="rectangle"><p class=text_of_headers>Course Objective</p></div>
    <textarea name="courseObjective" class="text-area" cols="30" rows="10" placeholder="Enter Course Objective"></textarea>
  </div>
  
  <div class="course_policy">
    <div class="rectangle"><p class=text_of_headers>Course Policy</p></div>
    <p>a. It is the student’s responsibility to gather information about the assignments/project and cover topics 
        during the lectures missed. Regular class attendance is mandatory. Points will be taken off for missing 
        classes. Without 70% of attendance, sitting for the final exam is NOT allowed. Students should come on 
        time to get the attendance. In the event of failing 70% of attendance, a student will receive a W grade 
        automatically. 
        <br>
        b. Same project work is assigned to all sections. Students should work in groups for the project. They are 
        required to prepare a final report on the project which will be incrementally developed through 
        assignments. 
        <br>
        c. The date and syllabus of class tests, Mid-Term and Final-Term will be announced in the class. There is NO 
        provision for make-up. 
        <br>
        d. Both the Mid-Term and Final-Term exams will be coordinated exams and will be held on a specific date 
        for all the sections. 
        <br>
        e. The reading materials for each class will be given prior to that class so that students may have a cursory 
        look into the materials. 
        <br>
        f. Class participation is vital for a better understanding of the topics of this course. Students are invited to 
        raise questions.
        <br>
        g. Students should take tutorials with the instructor during office hours. Prior appointment is required.
        <br>
        h. Students must maintain the IUB code of conduct and ethical guidelines offered by the school of computer 
        science and engineering.
        <br>
        i. No working mobile phones are allowed in class. Using one for any purpose will result in serious 
        consequences.
    </p>
  </div>

  <div class="academic_dishonesty">
    <div class="rectangle"><p class=text_of_headers>ACADEMIC DISHONESTY</p></div>
    <p> a. A student who cheats, plagiarizes, or furnishes false, misleading information in the course is subject to 
        disciplinary action up to and including an F grade in the course and/or suspension/expulsion from the 
        University.
        <br>
        b. Students must maintain the code of IUB.
        <br>
        c. The goal of homework is to give you practice in mastering the course material. Consequently, you are 
        encouraged to collaborate on problem sets. In fact, students who form study groups generally do better on 
        exams than do students who work alone. If you do work in a study group, however, you owe it to yourself 
        and your group to be prepared for your study group meeting. Specifically, you should spend at least 30-45 
        minutes trying to solve each problem beforehand by yourself. If your group is unable to solve a problem, 
        talk to other groups or ask your recitation instructor or teaching assistant assigned to your class.
        <br>
        d. You must write up each problem solution by yourself without assistance. It is a violation of this policy to 
        submit a problem solution that you cannot orally explain to a member of the course staff.
        <br>
        e. No collaboration whatsoever is permitted during examination.
        <br>
        f. Plagiarism and other anti-intellectual behavior cannot be tolerated in any academic environment that 
        prides itself on individual accomplishment. If you have any questions about the collaboration policy, or if 
        you feel that you may have violated the policy, please talk to one of the course staff. Although the course 
        staff is obligated to deal with cheating appropriately, we are more understanding and lenient if we find out 
        from the transgressor himself or herself rather than from a third party or by ourselves.
    </p>

  </div>

  <div class="student_with_disability_and_stress">
    <div class="rectangle"><p class=text_of_headers>STUDENT WITH DISABILITIES AND STRESS</p></div>
    <p>Students with disabilities are required to inform the Department of Computer Science & Engineering of any 
        specific requirement for classes or examination as soon as possible. Additionally, if you experience significant 
        stress or worry, changes in mood, or problems eating or sleeping this semester, whether because of this or 
        any other courses or factors, please do not hesitate to reach out immediately, at any hour, to any of the 
        course’s heads to discuss.
        </p>
  </div>

  <div class="non_discremination_policy">
    <div class="rectangle"><p class=text_of_headers>NON DISCREMINATION POLICY</p></div>
    <p>The course and University policy prohibit discrimination based on race, color, religion, sex, marital or parental 
        status, national origin or ancestry, age, mental or physical disability, sexual orientation, military status. If you 
        see either by course instructor or any other person related to course showing any form of discrimination, 
        please inform the proctors office of the wrongdoing.
        </p>
  </div>

  <div class="course_content">
    <div class="rectangle"><p class=text_of_headers>COURSE CONTENT</p></div>
    <textarea name="courseContent" class="text-area" cols="30" rows="10" placeholder="Enter Course Content"></textarea>
  </div>
<select style="width:200px; margin-top:15px; margin-bottom:15px;" name="cloCount" class="select"> 
            <option disabled selected>No. of CLOs</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
             <option value="7">7</option>
         </select>

  <div class="course_learning_outcome_matrix">
    <div class="rectangle"><p class=text_of_headers>COURSE LEARNING OUTCOME (CLO) MATRIX</p></div>
    <table>
        <tr >
            <th rowspan="2">CLOs</th>
            <th rowspan="2">CO Description</th>
            <th colspan="4">Blooms Taxonomy</th>
            <th rowspan="2">PLO Assessed</th>
            <th rowspan="2">CLO – PLO Correlation **</th>
        </tr>
        <tr >
          <th>C</th>
          <th>P</th>
          <th>A</th>
          <th>S</th>
        </tr>
        <tr >
          <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum1"></th>
          <th><input type="text" class="course-title" placeholder="Enter Description" name="clo1"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="c1"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="p1"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="a1"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="s1"></th>
          <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo1"></th>
          <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation1"></th>
        </tr>
        <tr >
          <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum2"></th>
          <th><input type="text" class="course-title" placeholder="Enter Description" name="clo2"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="c2"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="p2"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="a2"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="s2"></th>
          <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo2"></th>
          <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation2"></th>
        </tr>
        <tr >
          <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum3"></th>
          <th><input type="text" class="course-title" placeholder="Enter Description" name="clo3"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="c3"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="p3"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="a3"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="s3"></th>
          <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo3"></th>
          <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation3"></th>
        </tr>
        <tr >
          <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum4"> </th>
          <th><input type="text" class="course-title" placeholder="Enter Description" name="clo4"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="c4"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="p4"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="a4"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="s4"></th>
          <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo4"></th>
          <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation4"></th>
        </tr>
        <tr >
        <tr >
          <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum5"> </th>
          <th><input type="text" class="course-title" placeholder="Enter Description" name="clo5"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="c5"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="p5"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="a5"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="s5"></th>
          <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo5"></th>
          <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation5"></th>
        </tr>
        <tr >
          <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum6"> </th>
          <th><input type="text" class="course-title" placeholder="Enter Description" name="clo6"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="c6"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="p6"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="a6"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="s6"></th>
          <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo6"></th>
          <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation6"></th>
        </tr>
        <tr >
          <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum7"></th>
          <th><input type="text" class="course-title" placeholder="Enter Description" name="clo7"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="c7"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="p7"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="a7"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="s7"></th>
          <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo7"></th>
          <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation7"></th>
        </tr>
          <th colspan="8">*Bloom's Learning Level: Numbers signifies the Level of Bloom's skills.<br> **CLO – PLO Correlation: 3 – high, 2 – medium, 1- low</th>
        </tr>
    
    </table>
  </div>

  
    <select style="width:200px; margin-top:15px; margin-bottom:15px;" name="topicNum" class="select">
            <option disabled selected>No. of Topic</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
         </select>
    

  <div class="lesson_planning_with_mapping_of_CLO">
    <div class="rectangle"><p class=text_of_headers>LESSON PLANNING WITH MAPPING OF CLO,TEACHING AND ASSESSMENT STRATEGIES</p></div>
    <table>
        <tr>
            <th>Week</th>
            <th>Topic</th>
            <th>Teaching-Learning Strategy</th>
            <th>Assessment Stetragy</th>
            <th>Corresponding CLOs</th>
        </tr>
        <tr>
            <td>1</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic1"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy1"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy1"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo1"></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic2"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy2"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy2"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo2"></td>
        </tr>
        <tr>
            <td>3</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic3"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy3"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy3"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo3"></td>
        </tr>
        <tr>
            <td>4</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic4"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy4"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy4"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo4"></td>
        </tr>
        <tr>
            <td>5</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic5"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy5"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy5"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo5"></td>
        </tr>
        <tr>
        <td>6</td>
        <td><input type="text" class="course-title" placeholder="Enter" name="topic6"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy6"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy6"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo6"></td>
        </tr>
        <tr>
            <td>7</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic7"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy7"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy7"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo7"></td>
        </tr>
        <tr>
            <td>8</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic8"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy8"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy8"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo8"></td>
        </tr>
        <tr>
            <td>9</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic9"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy9"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy9"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo9"></td>
        </tr>
        <tr>
            <td>10</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic10"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy10"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy10"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo10"></td>
        </tr>
        <tr>
            <td>11</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic11"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy11"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy11"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo11"></td>
        </tr>
        <tr>
            <td>12</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic12"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy12"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy12"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo12"></td>
        </tr>
        <tr>
            <td>13</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic13"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy13"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy13"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo13"></td>
        </tr>
        <tr>
            <td>14</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic14"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy14"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy14"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo14"></td>
        </tr>
      </table>

  </div>

  <select style="width:220px; margin-top:15px; margin-bottom:15px;" name="assessmentCount" class="select">
            <option disabled selected>No. of Assessments</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
             <option value="7">7</option>
         </select>

  <div class="assessment_and_evaluation">
    <div class="rectangle"><p class=text_of_headers>ASSESSMENT AND EVALUATION</p></div>
    <table>
    <tr>
      <th>Assessment Type</th>
      <th>Assessment Tools</th>
      <th>Marks Distribution</th>
      <th>Blooms Category</th>
      <th>Sub Total</th>
    </tr>
    <tr>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter Assessment Type" name="assessmentType1"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool1"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution1"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory1"></td>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter" name="subTotal1"></td>
    </tr>
    <tr>
      
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool2"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution2"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory2"></td>
    </tr>
    <tr>
      
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool3"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution3"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory3"></td>
    </tr>
    <tr>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter Assessment Type" name="assessmentType2"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool4"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution4"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory4"></td>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter" name="subTotal2"></td></td>
    </tr>
    <tr>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool5"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution5"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory5"></td>
      
    </tr>
    <tr>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool6"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution6"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory6"></td>
      
    </tr>
    <tr>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter Assessment Type" name="assessmentType3"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool7"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution7"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory7"></td>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter" name="subTotal3"></td></td>
    </tr>
    <tr>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool8"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution8"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory8"></td>
      
    </tr>
    <tr>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool9"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution9"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory9"></td>
      
    </tr>
    <tr>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter Assessment Type" name="assessmentType4"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool10"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution10"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory10"></td>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter" name="subTotal4"></td></td>
    </tr>
    <tr>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool11"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution11"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory11"></td>
      
    </tr>
    <tr>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool12"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution12"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory12"></td>
      
    </tr>
    <tr>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter Assessment Type" name="assessmentType5"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool13"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution13"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory13"></td>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter" name="subTotal5"></td></td>
    </tr>
    <tr>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool14"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution14"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory14"></td>
      
    </tr>
    <tr>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool15"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution15"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory15"></td>
      
    </tr>
    <tr>
      <td td colspan="4" style="text-align:right;font-weight:bolder;"></td>
      <td style="font-weight:bolder;text-align:center;">Total : 100%</td>
    </tr>
    
    </table>

  </div>

  

    <p style="text-align:center; font-weight:bold;">The following chart will be followed for grading. Please note that for each category.<br>
        * Numbers are inclusive<br></p>

 

  <div style="margin-bottom:15px;" class="grades">
    <table>
        <tr>
            <th>A</th>
            <th>A-</th>
            <th>B+</th>
            <th>B</th>
            <th>B-</th>
            <th>C+</th>
            <th>C</th>
            <th>C-</th>
            <th>D+</th>
            <th>D</th>
            <th>F</th>
        </tr>
        <tr>
            <td>90-100</td>
            <td>85-89</td>
            <td>80-84</td>
            <td>75-79</td>
            <td>70-74</td>
            <td>65-69</td>
            <td>60-64</td>
            <td>55-59</td>
            <td>50-54</td>
            <td>45-49</td>
            <td>0-44</td>
            
            
        </tr>
      </table>
  </div>

  <div class="referance_book">
    <div class="rectangle"><p class=text_of_headers>REFERENCE BOOK AND ADDITIONAL MATERIALS</p></div>
    <textarea name="refMaterials" class="text-area" cols="30" rows="10" placeholder="Enter Reference Materials"></textarea>
  </div>
  <div id ="id-input-container"><input style="margin-bottom:20px;" type="submit" value="Submit" name="submit" class="id-submit"></div>
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
    
    
    