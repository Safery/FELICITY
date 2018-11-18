<?php

  require_once "php/config.php";


  if(isset($_POST['submit'])){

    $file = $_FILES['fileToUpload']['name'];
    $target = 'db/' . $file;
    move_uploaded_file( $_FILES['fileToUpload']['tmp_name'], $target);

    $sql = "INSERT INTO registration_data (patient, forms) VALUES ('" . $_POST['fname'] . "', '" . $target . "')";
    $result = $conn->query($sql);

  }

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
                    <?php if(isset($_POST['submit'])){ ?>
                      <div class="row">
                      <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
  											<span class="badge badge-pill badge-success">Success</span>
  											Patient information was uploaded.
  											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  												<span aria-hidden="true">&times;</span>
  											</button>
  										</div>
                    </div>
                    <?php } ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Patient Registration</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                          <div class="container contact-form">
                                      <form action="register.php" method="post" enctype="multipart/form-data">
                                         <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group ">
                                                 <label class="control-label requiredField" for="fname">
                                                  First Name
                                                  <span class="asteriskField">
                                                   *
                                                  </span>
                                                 </label>
                                                 <input class="form-control" id="fname" name="fname" type="text"/>
                                                </div>
                                                <div class="form-group ">
                                                 <label class="control-label requiredField" for="lname">
                                                  Last Name
                                                  <span class="asteriskField">
                                                   *
                                                  </span>
                                                 </label>
                                                 <input class="form-control" id="lname" name="lname" type="text"/>
                                                </div>
                                                <div class="form-group ">
                                                 <label class="control-label requiredField" for="gender">
                                                  Gender
                                                  <span class="asteriskField">
                                                   *
                                                  </span>
                                                 </label>
                                                 <select class="select form-control" id="gender" name="gender">
                                                  <option value="Male">
                                                   Male
                                                  </option>
                                                  <option value="Female">
                                                   Female
                                                  </option>
                                                  <option value="Other">
                                                   Other
                                                  </option>
                                                 </select>
                                                </div>
                                                <div class="form-group ">
                                                 <label class="control-label requiredField" for="email">
                                                  Email
                                                  <span class="asteriskField">
                                                   *
                                                  </span>
                                                 </label>
                                                 <input class="form-control" id="email" name="email" type="text"/>
                                                </div>
                                                <div class="form-group ">
                                                 <label class="control-label requiredField" for="dob">
                                                  Date of Birth
                                                  <span class="asteriskField">
                                                   *
                                                  </span>
                                                 </label>
                                                 <input class="form-control" id="dob" name="dob" placeholder="MM/DD/YYYY" type="text"/>
                                                </div>
                                                <div class="form-group ">
                                                 <label class="control-label requiredField" for="hc_number">
                                                  Health Card Number
                                                  <span class="asteriskField">
                                                   *
                                                  </span>
                                                 </label>
                                                 <input class="form-control" id="hc_number" name="hc_number" type="text"/>
                                                </div>
                                                <div class="form-group ">
                                                 <label class="control-label requiredField" for="emergency_name">
                                                  Emergency Contact Name
                                                  <span class="asteriskField">
                                                   *
                                                  </span>
                                                 </label>
                                                 <input class="form-control" id="emergency_name" name="emergency_name" type="text"/>
                                                </div>
                                                <div class="form-group ">
                                                 <label class="control-label requiredField" for="emergency_number">
                                                  Emergency Contact Number
                                                  <span class="asteriskField">
                                                   *
                                                  </span>
                                                 </label>
                                                 <input class="form-control" id="emergency_number" name="emergency_number" type="text"/>
                                                </div>
                                                <div class="form-group ">
                                                 <label class="control-label requiredField" for="emergency_relationship">
                                                  Emergency Contact Relationship
                                                  <span class="asteriskField">
                                                   *
                                                  </span>
                                                 </label>
                                                 <input class="form-control" id="emergency_relationship" name="emergency_relationship" type="text"/>
                                                </div>
                                                <div class="form-group ">
                                                 <label class="control-label requiredField" for="medication">
                                                  Medication Name
                                                  <span class="asteriskField">
                                                   *
                                                  </span>
                                                 </label>
                                                 <input class="form-control" id="medication" name="medication" type="text"/>
                                                </div>
                                                <div class="form-group ">
                                                 <label class="control-label requiredField" for="dosage">
                                                  Dosage
                                                  <span class="asteriskField">
                                                   *
                                                  </span>
                                                 </label>
                                                 <input class="form-control" id="dosage" name="dosage" type="text"/>
                                                </div>
                                                <div class="form-group ">
                                                 <label class="control-label requiredField" for="schedule">
                                                  Schedule
                                                  <span class="asteriskField">
                                                   *
                                                  </span>
                                                 </label>
                                                 <select class="select form-control" id="schedule" name="schedule">
                                                  <option value="Morning">
                                                   Morning
                                                  </option>
                                                  <option value="Afternoon">
                                                   Afternoon
                                                  </option>
                                                  <option value="Evening">
                                                   Evening
                                                  </option>
                                                  <option value="Dinner">
                                                   Dinner
                                                  </option>
                                                 </select>
                                                </div>
                                                <div class="form-group">
                                                  <p>Upload Patient Registration Form:</p>
                                                  <input type="file" name="fileToUpload" id="fileToUpload">
                                                </div>
                                                <div class="form-group">
                                                 <div>
                                                  <button class="btn btn-success bg-olive" name="submit" type="submit">
                                                   Submit
                                                  </button>
                                                 </div>
                                                </div>
                                              </div>
                                          </div>
                                      </form>
                                    </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Camp Quality. All rights reserved <a href="http://campquality.org/">Camp Quality</a>.</p>
                                </div>
                            </div>
                        </div>
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
