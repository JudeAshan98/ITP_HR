<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../img/favicon.ico" type="image/ico" />
  <!--Bootstrap4-->

  <!--End B4-->
  <title>CAL HRM System</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> -->
  <!-- NProgress -->
  <link href="../css/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../css/green.css" rel="stylesheet">
  <!--Boostrap custom-->
  <link href="../CSS/bootstrap.min.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="../css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="../css/custom.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <!-- graphs for dashboard  starts-->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Year', 'Sales', 'Expenses'],
        ['2004', 1000, 400],
        ['2005', 1170, 460],
        ['2006', 660, 1120],
        ['2007', 1030, 540]
      ]);

      var options = {
        title: 'Company Performance',
        curveType: 'function',
        legend: {
          position: 'bottom'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

      chart.draw(data, options);
    }
  </script>

  <!-- graphs for dashboard  Ends-->

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="dashboard.php" class="site_title" id="myCheck" onclick="myFunction()"><img src="../IMG/favicon.ico" style="width:50px; height:50px"></i> <span>CAL HRM</span></a>
          </div>

          <div class="clearfix"></div>

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.html">Dashboard</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-users"></i> Workfoce Management<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="EManagement.php">Employee Management</a></li>
                    <li><a href="PerformanceReport.php">Performance Report</a></li>
                    <li><a href="EmployeeProfile.php">Add Employee</a></li>
                    <!-- <li><a href="form_wizards.html">Form Wizard</a></li>
                    <li><a href="form_upload.html">Form Upload</a></li>
                    <li><a href="form_buttons.html">Form Buttons</a></li>-->
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Performance <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="PerformanceMain.php">My Performance</a></li>
                    <li><a href="TeamPerformance.php">Team Performance</a></li>
                    <!-- <li><a href="typography.html"></a></li-->

                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Time Management <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="time_management.php">Timesheet</a></li>
                    <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-balance-scale"></i> Finance Management <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="paychecks.php">Pay Checks</a></li>
                    <li><a href="salaryreports.php">salary Reports</a></li>
                    <!-- <li><a href="morisjs.html">Moris JS</a></li>
                    <li><a href="echarts.html">ECharts</a></li>
                    <li><a href="other_charts.html">Other Charts</a></li> -->
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i>Recruitment <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                    <li><a href="fixed_footer.html">Fixed Footer</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-car"></i>Travel Management <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="Transport_manage.php">Travel Requests</a></li>
                    <li><a href="travel_admin.php">Travel Admin</a></li>
                    <li><a href="admin_tracker.php">Admin tracker</a></li>
                    <li><a href="emp_tracker.php">Tracker App</a></li>
                    <li><a href="vehicles.php">Vehicles</a></li>
                    <li><a href="driver.php">Drivers</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-user-times"></i>Leave Inquiry <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="LeaveInquery.php">Add Leave</a></li>
                    <li><a href="Admin_Leave.php">admin Leave</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-medkit "></i> Incident Management <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="Incident.php">Add Incident</a></li>
                    <!-- <li><a href="AdminLeave.php">adminLeave Footer</a></li>-->
                  </ul>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html" id="logout" onclick="lgFunction()">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="data:image/jpeg;base64,<?php echo base64_encode($imagedp); ?>" class="rounded-circle" alt="Cinque Terre" width=100px height=100px>
                  <?= $login_name ?>
                  <span class="fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;"> Profile</a></li>
                  <li><a href="login.php" id="logout" onclick="lgFunction()"><i class="fa-sign-out pull-right" aria-hidden="true"></i> Log Out</a></li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-bell"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <!--li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li-->
                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row tile_count">
          <!--?php include ("Transport_manage.php") ?-->
          <!--CONTENT GOES HERE-->
          <div id="content1">
            <div class="container">
            <div class="col-md-6" id="curve_chart" style="max-width: 700px; height: 400px; margin-top:30px"></div>

            <!-- <div id="chart_div" style="width: 400px; height: 300px;float:right;margin-top:-340px"></div> -->
            <div class="col-md-6" id="piechart" style="max-width: 500px; max-height: 300px;"></div>
            
            </div>
            <div class="container">
            <br /><br /><br />
            <div class="btn-group-lg" role="group" aria-label="Third group">
              <!-- <a href="http://localhost:80/itp_hr/VIEW/EManagement.php" role="button" class="btn btn-primary ">Register an Emplyee</a> -->
              <a href="http://localhost:80/itp_hr/VIEW/PerformanceMain.php" role="button" class="btn btn-primary ">My KPIs</a>
              <a href="http://localhost:80/itp_hr/VIEW/Transport_manage.php" role="button" class="btn btn-primary ">Travel Request</a>
              <a href="http://localhost:80/itp_hr/VIEW/LeaveInquery.php" role="button" class="btn btn-primary ">Leave Inquery</a>
              <a href="http://localhost:80/itp_hr/VIEW/time_management.php" role="button" class="btn btn-primary ">Timesheet</a>
            </div>
            </div>
          </div>
   

      </div>
      <p id="demo"></p>
      <!--s-->
      <script>
        function myFunction() {
          document.getElementById("myCheck").click();
          var URL = "http://localhost:8080/itp_hr/VIEW/dashboard.php"
          window.location.href = URL;
        }
      </script>
      <script>
        function lgFunction() {
          document.getElementById("logout").click();
          var URL = "http://localhost:8080/itp_hr/VIEW/logout.php"
          window.location.href = URL;
        }
      </script>

      <script>
        $(document).ready(function() {
          //    var x = document.getElementById('myCheck').value;
          //   var y = document.getElementById('logout').value;
          $('a').click(function(e) {

            e.preventDefault();
            // $(".#content").hide();
            $("#content1").load($(this).attr('href'));
          });
        });
      </script>
      <!--ss-->
    </div>
  </div>
  <!-- /page content -->

  <!-- footer content -->
  <footer>
    <div class="pull-right">
      <!--   Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>-->
    </div>
    <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->
  </div>
  </div>



  <!-- jQuery -->
  <script src="../JS/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="../js/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <!--script src="../vendors/nprogress/nprogress.js"></script-->
  <!-- Chart.js -->
  <!--script src="../vendors/Chart.js/dist/Chart.min.js"></script-->
  <!-- gauge.js -->
  <!--script src="../vendors/gauge.js/dist/gauge.min.js"></script-->
  <!-- bootstrap-progressbar -->
  <!--script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script-->
  <!-- iCheck -->
  <script src="../JS/iCheck/icheck.min.js"></script>
  <!-- Skycons -->
  <script src="../JS/skycons/skycons.js"></script>
  <!-- Flot -->
  <!--script src="../vendors/Flot/jquery.flot.js"></script>
  <script src="../vendors/Flot/jquery.flot.pie.js"></script>
  <script src="../vendors/Flot/jquery.flot.time.js"></script>
  <script src="../vendors/Flot/jquery.flot.stack.js"></script>
  <script src="../vendors/Flot/jquery.flot.resize.js"></script-->
  <!-- Flot plugins -->
  <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="../vendors/DateJS/build/date.js"></script>
  <!-- JQVMap -->
  <!--script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script-->
  <!-- bootstrap-daterangepicker -->
  <!--script src="../vendors/moment/min/moment.min.js"></script>
  <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script-->
  <!-- Custom Theme Scripts -->

  <script src="../js/custom.min.js"></script>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    // Load google charts
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Month', 'Emp per month'],
        ['January', 8],
        ['February', 2],
        ['march', 4],
        ['April', 2],
        ['May', 8],
        ['June', 8],
        ['July', 2],
        ['August', 4],
        ['September', 2],
        ['October', 8],
        ['November', 2],
        ['December', 8],
      ]);

      // Optional; add a title and set the width and height of the chart
      var options = {
        'title': 'New Employees in this year',
        'width': 550,
        'height': 400
      };

      // Display the chart inside the <div> element with id="piechart"
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }
  </script>
</body>

</html>