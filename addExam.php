<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="employee.css">
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
                <li><a class="dropdown-item" href="#">PLO analysis with Department/Program/School Average</a></li>
                <li><a class="dropdown-item" href="#">PLO Analysis (Overall, CO wise, Course Wise)</a></li>
          
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PLO Achievement stats
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">PLO Comparison(Student)</a></li>
                <li><a class="dropdown-item" href="#">PLO Comparison(Course)</a></li>
                <li><a class="dropdown-item" href="#">PLO Comparison(Program)</a></li>
                <li><a class="dropdown-item" href="#">PLO Comparison(School)</a></li>
                <li><a class="dropdown-item" href="#">PLO Comparison(Department)</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Spider Chart Analysis</a>
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
                      <li><a class="dropdown-item" href="#">View Exam</a></li>
                      <li><a class="dropdown-item" href="#">Evaluate Exam Script</a></li>
                      <li><a class="dropdown-item" href="#">submit Grade</a></li>    <!--new feature for spms v4-->
                  </ul>
                  </li>   
                                  
                <li><a class="dropdown-item" href="#">Create Course Outline</a></li>
              </ul>


            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">View Course Outline</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Enrollment Statistics</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                GPA Analysis 
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">School/Depertment/Program-wise</a></li>
                <li><a class="dropdown-item" href="#">Course-wise</a></li>
                <li><a class="dropdown-item" href="#">Instructor-wise</a></li>
                <li><a class="dropdown-item" href="#">Instructor(Chosen Course)</a></li>
                <li><a class="dropdown-item" href="#">VC/Dean/Head-Wise</a></li>
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

  <!-- div row-1 starts here -->

  <form action="addExamConfig.php" method="POST">
      <div style="display:flex;justify-content:space-evenly;margin-top:15px;">
        
        <input type="text" style="background-color:#91c7c4;height:36px;cursor: pointer;border-radius: 15px;
           font-size: 14px;letter-spacing:2px;font-weight: bold;text-transform: uppercase;border: none;
           outline:none;text-align:center;color:black;width:250px;margin-top:0px;" 
           placeholder="Exam Name" name="examName"/>


      <select style="background-color:#91c7c4;height:36px;cursor: pointer;border-radius: 15px;
      font-size: 14px;letter-spacing:2px;font-weight:600 ;text-transform: uppercase;border: none;
      outline:none;text-align:center;color:black;width:250px;margin-top:0px;"  name="courseID" class="select">
     <option disabled selected>Course</option>
     <option value="CSC101">CSC101</option>
      <option value="EEE131">EEE131</option>
      <option value="ENG101">ENG101</option>
     </select>              

    <select style="background-color:#91c7c4;height:36px;cursor: pointer;border-radius: 15px;
    font-size: 14px;letter-spacing:2px;font-weight:600 ;text-transform: uppercase;border: none;
    outline:none;text-align:center;color:black;width:250px;margin-top:0px;" name="sectionNum" class="select">
    <option disabled selected>Section</option>
    <option value="1">section-1</option>
    <option value="2">section-2</option>
    <option value="3">section-3</option>
    <option value="4">section-4</option>
    </select>  

      </div>

  <!-- div row-1 ends here -->

    <div style="display:flex;justify-content:space-evenly;margin-top:15px;">

    <select style="background-color:#91c7c4;height:36px;cursor: pointer;border-radius: 15px;
    font-size: 16px;letter-spacing:1px;font-weight:600;border: none;
    outline:none;text-align:center;color:black;width:250px;margin-top:0px;" name="questionCount" class="select">
       <option disabled selected>No. of Questions</option>
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
       <option value="6">6</option>
       <option value="7">7</option>
     </select> 

    <select style="background-color:#91c7c4;height:36px;cursor: pointer;border-radius: 15px;
    font-size: 16px;letter-spacing:1px;font-weight:600;border: none;
    outline:none;text-align:center;color:black;width:250px;margin-top:0px;" name="semester" class="select">
       <option disabled selected>Semester</option>
       <option value="spring">spring</option>
       <option value="summer">summer</option>
       <option value="autumn">autumn</option>
     </select>              

     <select style="background-color:#91c7c4;height:36px;cursor: pointer;border-radius: 15px;
     font-size: 16px;letter-spacing:1px;font-weight:600;border: none;
     outline:none;text-align:center;color:black;width:250px;margin-top:0px;" name="year" class="select">
       <option disabled selected>year</option>
       <option value="2020">2020</option>
       <option value="2021">2021</option>
       <option value="2022">2022</option>
       <option value="2023">2023</option>
     </select>  

    </div>
    
    <div style="display:flex;justify-content:center;">
    <div style="margin-top:40px; width:85%;" class="background">
            <div class="question-row1" style="font-weight: 400;">
  
                <label class="question-form">
                 Question Number
                <input type="text" style="margin-bottom: 20px; height: 35px;" class="question-number" name="questionNum1">
                </label>

                <label class="question-form">
                  Question Details
                <input type="text" class="question-details" style="margin-bottom: 20px; height: 35px;" class="question-number" name="questionDetails1">
                </label>

                <label class="question-form">
                 Mark
                <input type="text" class="mark" style="margin-bottom: 20px; height: 35px;" class="question-number" name="mark1">
                </label>

                <label class="question-form">
                 CO Number
                <input type="text" class="coNum" style="margin-bottom: 20px; height: 35px;" class="question-number" name="coNum1">
                </label>
            </div>

            <div class="question-row1">
  
                <label class="question-form">
                 Question Number
                <input type="text" class="question-number" style="margin-bottom: 20px; height: 35px;" class="question-number" name="questionNum2">
                </label>

                <label class="question-form">
                  Question Details
                <input type="text" class="question-details" style="margin-bottom: 20px; height: 35px;" class="question-number" name="questionDetails2">
                </label>

                <label class="question-form">
                 Mark
                <input type="text" class="mark" style="margin-bottom: 20px; height: 35px;" class="question-number" name="mark2">
                </label>

                <label class="question-form">
                 CO Number
                <input type="text" class="coNum"  style="margin-bottom: 20px; height: 35px;" class="question-number"name="coNum2">
                </label>
            </div>
            
            <div class="question-row1">
  
              <label class="question-form">
               Question Number
              <input type="text" class="question-number" style="margin-bottom: 20px; height: 35px;" class="question-number" name="questionNum2">
              </label>

              <label class="question-form">
                Question Details
              <input type="text" class="question-details" style="margin-bottom: 20px; height: 35px;" class="question-number" name="questionDetails2">
              </label>

              <label class="question-form">
               Mark
              <input type="text" class="mark" style="margin-bottom: 20px; height: 35px;" class="question-number" name="mark2">
              </label>

              <label class="question-form">
               CO Number
              <input type="text" class="coNum"  style="margin-bottom: 20px; height: 35px;" class="question-number"name="coNum2">
              </label>
          </div>

          <div class="question-row1">
  
            <label class="question-form">
             Question Number
            <input type="text" class="question-number" style="margin-bottom: 20px; height: 35px;" class="question-number" name="questionNum2">
            </label>

            <label class="question-form">
              Question Details
            <input type="text" class="question-details" style="margin-bottom: 20px; height: 35px;" class="question-number" name="questionDetails2">
            </label>

            <label class="question-form">
             Mark
            <input type="text" class="mark" style="margin-bottom: 20px; height: 35px;" class="question-number" name="mark2">
            </label>

            <label class="question-form">
             CO Number
            <input type="text" class="coNum"  style="margin-bottom: 20px; height: 35px;" class="question-number"name="coNum2">
            </label>            
        </div>

        <div class="question-row1">
  
          <label class="question-form">
           Question Number
          <input type="text" class="question-number" style="margin-bottom: 20px; height: 35px;" class="question-number" name="questionNum2">
          </label>

          <label class="question-form">
            Question Details
          <input type="text" class="question-details" style="margin-bottom: 20px; height: 35px;" class="question-number" name="questionDetails2">
          </label>

          <label class="question-form">
           Mark
          <input type="text" class="mark" style="margin-bottom: 20px; height: 35px;" class="question-number" name="mark2">
          </label>

          <label class="question-form">
           CO Number
          <input type="text" class="coNum"  style="margin-bottom: 20px; height: 35px;" class="question-number"name="coNum2">
          </label>
        </div>

        <div class="question-row1">
  
          <label class="question-form">
           Question Number
          <input type="text" class="question-number" style="margin-bottom: 20px; height: 35px;" class="question-number" name="questionNum2">
          </label>

          <label class="question-form">
            Question Details
          <input type="text" class="question-details" style="margin-bottom: 20px; height: 35px;" class="question-number" name="questionDetails2">
          </label>

          <label class="question-form">
           Mark
          <input type="text" class="mark" style="margin-bottom: 20px; height: 35px;" class="question-number" name="mark2">
          </label>

          <label class="question-form">
           CO Number
          <input type="text" class="coNum"  style="margin-bottom: 20px; height: 35px;" class="question-number"name="coNum2">
          </label>
   
      </div>

      <div class="question-row1">
  
        <label class="question-form">
         Question Number
        <input type="text" class="question-number" style="margin-bottom: 20px; height: 35px;" class="question-number" name="questionNum2">
        </label>

        <label class="question-form">
          Question Details
        <input type="text" class="question-details" style="margin-bottom: 20px; height: 35px;" class="question-number" name="questionDetails2">
        </label>

        <label class="question-form">
         Mark
        <input type="text" class="mark" style="margin-bottom: 20px; height: 35px;" class="question-number" name="mark2">
        </label>

        <label class="question-form">
         CO Number
        <input type="text" class="coNum"  style="margin-bottom: 20px; height: 35px;" class="question-number"name="coNum2">
        </label>
      </div>

            <input type="submit" class ="btn btn-success"style="margin-top:20px;margin-left: 50%;" name="submit" value="Submit" class="submitButton">
        
        </div>   
      </div>  
    </form>

  </body>

</html>
