<?php

require_once "php/config.php";

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once "php/header.php"; ?>

<body class="animsition">
  <?php require_once "php/bodier.php"; ?>

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
                            <embed id = 'pdf' src="db/camper.pdf"></embed>
                          </div>
                      </div>
                      <script>
                      function runTheChanger(selector){

                        document.getElementById("progressBarTester").style.visibility = "visible";
                        load();
                      }


                      function load(){
                        setTimeout(
                          function() {
                            document.getElementById("progressBarTester").style.visibility = "hidden";
                            document.getElementById("pdfViewer").style.visibility = "visible";
                          }, 8400);

                            var progress = setInterval(function () {
                            var $bar = $('.bar');

                            if ($bar.width() >= 400) {
                                clearInterval(progress);
                                $('.progress').removeClass('active');
                            } else {
                                $bar.width($bar.width() + 40);
                            }
                            $bar.text($bar.width() / 4 + "%");
                        }, 800);
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
                        width: auto;
                        height: 800px;
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
