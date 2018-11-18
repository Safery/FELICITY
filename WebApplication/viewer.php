<?php
  require_once "php/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Camp Quality - Admin Panel</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">


    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="index.php">
                                <i class="fas fa-chart-bar"></i>Home</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Check Medication</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Register Kids</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Scheduler</a>
                        </li>
                        <li>
                          <a href="login.html">
                                <i class="fas fa-copy"></i>Report Generation</a>
                        </li>
                        <li class="fas fa-desktop">
                          <a href="loginFeature/logout.php"> Logout </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/logo.png" style="width:180px;height:80px;" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                      <li>
                          <a href="index.php">
                              <i class="fas fa-chart-bar"></i>Home</a>
                      </li>
                      <li>
                          <a href="table.html">
                              <i class="fas fa-table"></i>Check Medication</a>
                      </li>
                      <li>
                          <a href="form.html">
                              <i class="far fa-check-square"></i>Register Kids</a>
                      </li>
                      <li>
                          <a href="scheduler/index.php">
                              <i class="fas fa-calendar-alt"></i>Scheduler</a>
                      </li>
                      <li>
                        <a href="login.html">
                              <i class="fas fa-copy"></i>Report Generation</a>
                      </li>
                      <li>
                        <a href="loginFeature/logout.php">
                            <i class="fas fa-desktop"></i>Logout </a>
                      </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for patients &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You have new reminder</p>
                                                    <span class="date">November 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Medication updated for a patient.</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got new meeting invite!</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/profile.png" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION["username"]; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="selectLg" class=" form-control-label">Select Patient:</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <select name="selectLg" id="selectLg" class="form-control-lg form-control" onchange="runTheChanger(this);">
                                  <option>Please select</option>
                                  <?php
                                    $sql = "select patient.first_name, patient.last_name, patient.patient_id FROM patient";
                                    $result = $conn->query($sql);
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo'<option value="0" id="' . $row["patient_id"] . '">'. $row["first_name"] . " " . $row["last_name"] . '</option>';
                                    }
                                  ?>
                              </select>
                          </div>
                      </div>
                      <div class="container">
                          <div class="progress progress-striped active" id="progressBarTester">
                              <div class="bar" style="width: 0%;"></div>
                          </div>
                          <div id="pdfViewer">
                            <table>
                              <thead>
                                <tr>
                                  <th colspan="3">Medication List</th>
                                </tr>
                                <tr>
                                  <th>Name</th>
                                  <th colspan="2">In-take Time</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr id="one">
                                  <td>Venlafaxine</td>
                                  <td>Noon at 12:00 PM</td>
                                  <td>
                                    <i class="far fa-check-square" onClick="clickedButton1()"></i>
                                  </td>
                                </tr>
                                <tr id="two">
                                  <td>Chlorapoxide</td>
                                  <td>Evening at 5:00 PM</td>
                                  <td>
                                    <i class="far fa-check-square" onClick="clickedButton2()"></i>
                                  </td>
                                </tr>
                                <tr id="three">
                                  <td>Peroxide</td>
                                  <td>Before bed at 10:00PM</td>
                                  <td>
                                    <i class="far fa-check-square" onClick="clickedButton3()"></i>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                      </div>
                      <script>
                      function runTheChanger(selector){

                        document.getElementById("progressBarTester").style.visibility = "visible";
                        load();
                      }

                      function clickedButton1(){
                        document.getElementById("one").setAttribute("bgcolor", "#00FF00");
                      }
                      function clickedButton2(){
                        document.getElementById("two").setAttribute("bgcolor", "#00FF00");
                      }
                      function clickedButton3(){
                        document.getElementById("three").setAttribute("bgcolor", "#00FF00");
                      }


                      function load(){
                        setTimeout(
                          function() {
                            document.getElementById("progressBarTester").style.visibility = "hidden";
                            document.getElementById("pdfViewer").style.visibility = "visible";
                          }, 1200);

                            var progress = setInterval(function () {
                            var $bar = $('.bar');

                            if ($bar.width() >= 400) {
                                clearInterval(progress);
                                $('.progress').removeClass('active');
                            } else {
                                $bar.width($bar.width() + 40);
                            }
                            $bar.text($bar.width() / 4 + "%");
                        }, 200);
                      }

                      </script>
                      <style>
                      @import url('//netdna.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css');
                       .container {
                          margin-top: 30px;
                          width: 400px;
                      }

                      #progressBarTester{
                        visibility: hidden;
                      }
                      #pdfViewer{
                        visibility: hidden;
                      }

                      * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


table {
  text-align: left;
  line-height: 40px;
  border-collapse: separate;
  border-spacing: 0;
  border: 2px solid #ed1c40;
  width: 500px;
  margin: 50px auto;
  border-radius: .25rem;
}

thead tr:first-child {
  background: #ed1c40;
  color: #fff;
  border: none;
}

th:first-child,
td:first-child {
  padding: 0 15px 0 20px;
}

th {
  font-weight: 500;
}

thead tr:last-child th {
  border-bottom: 3px solid #ddd;
}

tbody tr:hover {
  background-color: #f2f2f2;
  cursor: default;
}

tbody tr:last-child td {
  border: none;
}

tbody td {
  border-bottom: 1px solid #ddd;
}

td:last-child {
  text-align: right;
  padding-right: 10px;
}

.button {
  color: #aaa;
  cursor: pointer;
  vertical-align: middle;
  margin-top: -4px;
}

.edit:hover {
  color: #0a79df;
}

.delete:hover {
  color: #dc2a2a;
}
                      </style>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
