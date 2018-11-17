<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Camp Quality - Admin Panel</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- FullCalendar -->
	<link href='css/fullcalendar.css' rel='stylesheet' />


    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
	#calendar {
		max-width: 800px;
	}
	.col-centered{
		float: none;
		margin: 0 auto;
	}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                      <div class="col-lg-12 text-center">
                          <div id="calendar" class="col-centered"></div>
                      </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>


    		<!-- Modal -->
    		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    		  <div class="modal-dialog" role="document">
    			<div class="modal-content">
    			<form class="form-horizontal" method="POST" action="addEvent.php">

    			  <div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    				<h4 class="modal-title" id="myModalLabel">Add Event</h4>
    			  </div>
    			  <div class="modal-body">

    				  <div class="form-group">
    					<label for="title" class="col-sm-2 control-label">Title</label>
    					<div class="col-sm-10">
    					  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
    					</div>
    				  </div>
    				  <div class="form-group">
    					<label for="color" class="col-sm-2 control-label">Color</label>
    					<div class="col-sm-10">
    					  <select name="color" class="form-control" id="color">
    						  <option value="">Choose</option>
    						  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
    						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
    						  <option style="color:#008000;" value="#008000">&#9724; Green</option>
    						  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
    						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
    						  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
    						  <option style="color:#000;" value="#000">&#9724; Black</option>

    						</select>
    					</div>
    				  </div>
    				  <div class="form-group">
    					<label for="start" class="col-sm-2 control-label">Start date</label>
    					<div class="col-sm-10">
    					  <input type="text" name="start" class="form-control" id="start" readonly>
    					</div>
    				  </div>
    				  <div class="form-group">
    					<label for="end" class="col-sm-2 control-label">End date</label>
    					<div class="col-sm-10">
    					  <input type="text" name="end" class="form-control" id="end" readonly>
    					</div>
    				  </div>

    			  </div>
    			  <div class="modal-footer">
    				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				<button type="submit" class="btn btn-primary">Save changes</button>
    			  </div>
    			</form>
    			</div>
    		  </div>
    		</div>



    		<!-- Modal -->
    		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    		  <div class="modal-dialog" role="document">
    			<div class="modal-content">
    			<form class="form-horizontal" method="POST" action="editEventTitle.php">
    			  <div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    				<h4 class="modal-title" id="myModalLabel">Edit Event</h4>
    			  </div>
    			  <div class="modal-body">

    				  <div class="form-group">
    					<label for="title" class="col-sm-2 control-label">Title</label>
    					<div class="col-sm-10">
    					  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
    					</div>
    				  </div>
    				  <div class="form-group">
    					<label for="color" class="col-sm-2 control-label">Color</label>
    					<div class="col-sm-10">
    					  <select name="color" class="form-control" id="color">
    						  <option value="">Choose</option>
    						  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
    						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
    						  <option style="color:#008000;" value="#008000">&#9724; Green</option>
    						  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
    						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
    						  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
    						  <option style="color:#000;" value="#000">&#9724; Black</option>

    						</select>
    					</div>
    				  </div>
    				    <div class="form-group">
    						<div class="col-sm-offset-2 col-sm-10">
    						  <div class="checkbox">
    							<label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
    						  </div>
    						</div>
    					</div>

    				  <input type="hidden" name="id" class="form-control" id="id">


    			  </div>
    			  <div class="modal-footer">
    				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				<button type="submit" class="btn btn-primary">Save changes</button>
    			  </div>
    			</form>
    			</div>
    		  </div>
    		</div>

        </div>
        <!-- /.container -->

        <!-- jQuery Version 1.11.1 -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    	<!-- FullCalendar -->
    	<script src='js/moment.min.js'></script>
    	<script src='js/fullcalendar.min.js'></script>

    	<script>

    	$(document).ready(function() {

    		$('#calendar').fullCalendar({
    			header: {
    				left: 'prev,next today',
    				center: 'title',
    				right: 'month,basicWeek,basicDay'
    			},
    			editable: true,
    			eventLimit: true, // allow "more" link when too many events
    			selectable: true,
    			selectHelper: true,
    			select: function(start, end) {

    				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
    				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
    				$('#ModalAdd').modal('show');
    			},
    			eventRender: function(event, element) {
    				element.bind('dblclick', function() {
    					$('#ModalEdit #id').val(event.id);
    					$('#ModalEdit #title').val(event.title);
    					$('#ModalEdit #color').val(event.color);
    					$('#ModalEdit').modal('show');
    				});
    			},
    			eventDrop: function(event, delta, revertFunc) { // si changement de position

    				edit(event);

    			},
    			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

    				edit(event);

    			},
    			events: [
    			<?php foreach($events as $event):

    				$start = explode(" ", $event['start']);
    				$end = explode(" ", $event['end']);
    				if($start[1] == '00:00:00'){
    					$start = $start[0];
    				}else{
    					$start = $event['start'];
    				}
    				if($end[1] == '00:00:00'){
    					$end = $end[0];
    				}else{
    					$end = $event['end'];
    				}
    			?>
    				{
    					id: '<?php echo $event['id']; ?>',
    					title: '<?php echo $event['title']; ?>',
    					start: '<?php echo $start; ?>',
    					end: '<?php echo $end; ?>',
    					color: '<?php echo $event['color']; ?>',
    				},
    			<?php endforeach; ?>
    			]
    		});

    		function edit(event){
    			start = event.start.format('YYYY-MM-DD HH:mm:ss');
    			if(event.end){
    				end = event.end.format('YYYY-MM-DD HH:mm:ss');
    			}else{
    				end = start;
    			}

    			id =  event.id;

    			Event = [];
    			Event[0] = id;
    			Event[1] = start;
    			Event[2] = end;

    			$.ajax({
    			 url: 'editEventDate.php',
    			 type: "POST",
    			 data: {Event:Event},
    			 success: function(rep) {
    					if(rep == 'OK'){
    						alert('Saved');
    					}else{
    						alert('Could not be saved. try again.');
    					}
    				}
    			});
    		}

    	});

    </script>
    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>

</body>

</html>
<!-- end document-->
