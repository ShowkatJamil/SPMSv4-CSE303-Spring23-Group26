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
        <title>Student Dashboard</title>
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <style>
        body{
          background-image: url('dashboardLogo.png');
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
            <a class="navbar-brand ps-3" href="studentDashboard.php">SPMS 4.0</a>
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
                            <a class="nav-link" href="studentDashboard.php">
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
                                    <a class="nav-link" href="ploAnalysisDepartmentProgramSchoolAverage_S.php">PLO analysis with Department/Program/School Average</a>
                                    <a class="nav-link" href="ploAnalysisOverall_S.php">PLO Analysis (Overall, CO wise, Course Wise)</a>    
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseGPA" aria-expanded="false" aria-controls="collapseGPA">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
                                GPA Analysis
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseGPA" aria-labelledby="headingGPA" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="courseWisePerformance_S.php">Course-wise</a> 
                                </nav>
                            </div>


                            <a class="nav-link" href="spiderChart_S.php">
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
                                    <a class="nav-link" href="viewExam.php">View Available Exams</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">View</div>
                            <a class="nav-link" href="viewCourseOutline_S.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-eye"></i></div>
                                View Course Outline
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Student
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <footer class="py-4 bg-light mt-auto" style="color: black;">
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
