<?php
 include 'functions.php';
 checker();
 $user = users();
//  var_dump($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    
<!-- Mirrored from learnplus.demo.frontendmatter.com/student-account-edit-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:33 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard</title>

         <meta name="robots"
              content="noindex">

        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="assets/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="assets/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="assets/vendor/spinkit.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="assets/css/app.css"
              rel="stylesheet">

    </head>

    <body class=" layout-fluid">

        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>

            <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <!-- Header Layout -->
        <//?php include 'navbar.php';
         ?>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">

                        <div class="container-fluid page__container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                            <h1 class="h2">Dashboard</h1>

                            <div class="card border-left-3 border-left-primary card-2by1">
                                <div class="card-body">
                                    <div class="media flex-wrap align-items-center">
                                        <div class="media-left">
                                            <i class="material-icons text-muted-light">account_box</i>
                                        </div>
                                        <div class="media-body"
                                             style="min-width: 180px">
                                            Your are welcome! <strong><?php echo $user['title'].' '.$user['name']; ?></strong>
                                        </div>
                                        <div class="media-right mt-2 mt-xs-plus-0">
                                        <?php
                                                        if ($user['title'] == '' || $user['gender'] == '' || $user['contact'] == '' || $user['lincesed'] == '' || $user['nameofschool'] == '' || $user['district'] == '' || $user['region'] == '' || $user['foodpref'] == '' || $user['paystatus'] == '' || $user['heard'] == '') {
                                                            echo '<a class="btn btn-sm btn-danger"
                                                            href="ntcreg.php">Continue Registration</a>';
                                                        } else {
                                                            echo '<a class="btn btn-sm btn-success"
                                                            href="certification.php"> View Certificate</a>';
                                                        }
                                                    ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-7">

                                    
                                        

                                    <!-- <div class="card">
                                        <div class="card-header">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <h4 class="card-title">Courses</h4>
                                                    <p class="card-subtitle">Your recent courses</p>
                                                </div>
                                                <div class="media-right">
                                                    <a class="btn btn-sm btn-primary"
                                                       href="student-my-courses.html">My courses</a>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-group list-group-fit mb-0"
                                            style="z-index: initial;">

                                            <li class="list-group-item"
                                                style="z-index: initial;">
                                                <div class="d-flex align-items-center">
                                                    <a href="#"
                                                       class="avatar avatar-4by3 avatar-sm mr-3">
                                                        <img src="assets/images/gulp.png"
                                                             alt="course"
                                                             class="avatar-img rounded">
                                                    </a>
                                                    <div class="flex">
                                                        <a href="#"
                                                           class="text-body"><strong>Learn Vue.js Fundamentals</strong></a>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress"
                                                                 style="width: 100px;">
                                                                <div class="progress-bar bg-primary"
                                                                     role="progressbar"
                                                                     style="width: 25%"
                                                                     aria-valuenow="25"
                                                                     aria-valuemin="0"
                                                                     aria-valuemax="100"></div>
                                                            </div>
                                                            <small class="text-muted ml-2">25%</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown ml-3">
                                                        <a href="#"
                                                           class="dropdown-toggle text-muted"
                                                           data-caret="false"
                                                           data-toggle="dropdown">
                                                            <i class="material-icons">more_vert</i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item"
                                                               href="#">Continue</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item"
                                                style="z-index: initial;">
                                                <div class="d-flex align-items-center">
                                                    <a href="#"
                                                       class="avatar avatar-4by3 avatar-sm mr-3">
                                                        <img src="assets/images/vuejs.png"
                                                             alt="course"
                                                             class="avatar-img rounded">
                                                    </a>
                                                    <div class="flex">
                                                        <a href="#"
                                                           class="text-body"><strong>Angular in Steps</strong></a>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress"
                                                                 style="width: 100px;">
                                                                <div class="progress-bar bg-success"
                                                                     role="progressbar"
                                                                     style="width: 100%"
                                                                     aria-valuenow="100"
                                                                     aria-valuemin="0"
                                                                     aria-valuemax="100"></div>
                                                            </div>
                                                            <small class="text-muted ml-2">100%</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown ml-3">
                                                        <a href="#"
                                                           class="dropdown-toggle text-muted"
                                                           data-caret="false"
                                                           data-toggle="dropdown">
                                                            <i class="material-icons">more_vert</i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item"
                                                               href="#">Continue</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item"
                                                style="z-index: initial;">
                                                <div class="d-flex align-items-center">
                                                    <a href="#"
                                                       class="avatar avatar-4by3 avatar-sm mr-3">
                                                        <img src="assets/images/nodejs.png"
                                                             alt="course"
                                                             class="avatar-img rounded">
                                                    </a>
                                                    <div class="flex">
                                                        <a href="#"
                                                           class="text-body"><strong>Bootstrap Foundations</strong></a>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress"
                                                                 style="width: 100px;">
                                                                <div class="progress-bar bg-warning"
                                                                     role="progressbar"
                                                                     style="width: 80%"
                                                                     aria-valuenow="80"
                                                                     aria-valuemin="0"
                                                                     aria-valuemax="100"></div>
                                                            </div>
                                                            <small class="text-muted ml-2">80%</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown ml-3">
                                                        <a href="#"
                                                           class="dropdown-toggle text-muted"
                                                           data-caret="false"
                                                           data-toggle="dropdown">
                                                            <i class="material-icons">more_vert</i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item"
                                                               href="#">Continue</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div> -->

                                    <div class="card">
                                        <div class="card-header">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <h4 class="card-title">Personal Info</h4>
                                                    <p class="card-subtitle">Your Personal Information</p>
                                                </div>
                                                <!-- <div class="media-right">
                                                    <?php
                                                        if ($user['title'] == '' || $user['gender'] == '' || $user['contact'] == '' || $user['lincesed'] == '' || $user['nameofschool'] == '' || $user['district'] == '' || $user['region'] == '' || $user['foodpref'] == '' || $user['paystatus'] == '' || $user['heard'] == '') {
                                                            echo '<a class="btn btn-sm btn-danger"
                                                            href="ntcreg.php">Continue Registration</a>';
                                                        } else {
                                                            echo '';
                                                        }
                                                    ?>
                                                </div> -->
                                            </div>
                                        </div>

                                        <ul class="list-group list-group-fit mb-0">

                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <strong>Email Address</strong><br>
                                                        <div class="d-flex align-items-center">
                                                            <!-- <small class="text-black-50 text-uppercase mr-2">Course</small> -->
                                                            <a href="#"><?php echo $user['email']; ?></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-right text-center d-flex align-items-center">
                                                        <!-- <span class="text-black-50 mr-3">Good</span>
                                                        <h4 class="mb-0">5.8</h4> -->
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <strong>Phone Number</strong><br>
                                                        <div class="d-flex align-items-center">
                                                            <!-- <small class="text-black-50 text-uppercase mr-2">Course</small> -->
                                                            <a href="#"><?php echo $user['contact']; ?></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-right text-center d-flex align-items-center">
                                                        <!-- <span class="text-black-50 mr-3">Great</span>
                                                        <h4 class="mb-0 text-success">9.8</h4> -->
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <strong>Telegram Phone Number</strong><br>
                                                        <div class="d-flex align-items-center">
                                                            <!-- <small class="text-black-50 text-uppercase mr-2">Course</small> -->
                                                            <a href="#"><?php echo $user['telegram']; ?></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-right text-center d-flex align-items-center">
                                                        <!-- <span class="text-black-50 mr-3">Failed</span>
                                                        <h4 class="mb-0 text-danger">2.8</h4> -->
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <strong>Name of School</strong><br>
                                                        <div class="d-flex align-items-center">
                                                            <!-- <small class="text-black-50 text-uppercase mr-2">Course</small> -->
                                                            <a href="#"><?php echo $user['nameofschool']; ?></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-right text-center d-flex align-items-center">
                                                        <!-- <span class="text-black-50 mr-3">Failed</span>
                                                        <h4 class="mb-0 text-danger">2.8</h4> -->
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <strong>National Teachers Council License Number</strong><br>
                                                        <div class="d-flex align-items-center">
                                                            <!-- <small class="text-black-50 text-uppercase mr-2">Course</small> -->
                                                            <a href="#"><?php echo $user['lincesed']; ?></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-right text-center d-flex align-items-center">
                                                        <!-- <span class="text-black-50 mr-3">Failed</span>
                                                        <h4 class="mb-0 text-danger">2.8</h4> -->
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <strong>Region</strong><br>
                                                        <div class="d-flex align-items-center">
                                                            <!-- <small class="text-black-50 text-uppercase mr-2">Course</small> -->
                                                            <a href="#"><?php echo $user['region']; ?></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-right text-center d-flex align-items-center">
                                                        <!-- <span class="text-black-50 mr-3">Failed</span>
                                                        <h4 class="mb-0 text-danger">2.8</h4> -->
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <strong>District</strong><br>
                                                        <div class="d-flex align-items-center">
                                                            <!-- <small class="text-black-50 text-uppercase mr-2">Course</small> -->
                                                            <a href="#"><?php echo $user['district']; ?></a>
                                                        </div>
                                                    </div>
                                                    <div class="media-right text-center d-flex align-items-center">
                                                        <!-- <span class="text-black-50 mr-3">Failed</span>
                                                        <h4 class="mb-0 text-danger">2.8</h4> -->
                                                    </div>
                                                </div>
                                            </li>
                                            

                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-5">

                                    

                                    <div class="card card-2by1">
                                        <div class="card-header">
                                            <h4 class="card-title">Rewards</h4>
                                            <p class="card-subtitle">Your latest achievements</p>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="btn btn-primary btn-circle"><i class="material-icons">thumb_up</i></div>
                                            <div class="btn btn-danger btn-circle"><i class="material-icons">grade</i></div>
                                            <div class="btn btn-success btn-circle"><i class="material-icons">bubble_chart</i></div>
                                            <div class="btn btn-warning btn-circle"><i class="material-icons">keyboard_voice</i></div>
                                            <div class="btn btn-info btn-circle"><i class="material-icons">event_available</i></div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <h4 class="card-title">Forum Activity</h4>
                                                    <p class="card-subtitle">Latest forum topics &amp; replies</p>
                                                </div>
                                                <div class="media-right">
                                                    <a class="btn btn-sm btn-primary"
                                                       href="student-forum.html"> <i class="material-icons">keyboard_arrow_right</i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-group list-group-fit">

                                            <li class="list-group-item forum-thread">
                                                <div class="media align-items-center">
                                                    <div class="media-left">
                                                        <div class="forum-icon-wrapper">
                                                            <a href="student-forum-thread.html"
                                                               class="forum-thread-icon">
                                                                <i class="material-icons">description</i>
                                                            </a>
                                                            <a href="student-profile.html"
                                                               class="forum-thread-user">
                                                                <img src="assets/images/people/50/guy-1.jpg"
                                                                     alt=""
                                                                     width="20"
                                                                     class="rounded-circle">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <a href="student-profile.html"
                                                               class="text-body"><strong>Luci Bryant</strong></a>
                                                            <small class="ml-auto text-muted">5 min ago</small>
                                                        </div>
                                                        <a class="text-black-70"
                                                           href="student-forum-thread.html">Am I learning the right way?</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item forum-thread">
                                                <div class="media align-items-center">
                                                    <div class="media-left">
                                                        <div class="forum-icon-wrapper">
                                                            <a href="student-forum-thread.html"
                                                               class="forum-thread-icon">
                                                                <i class="material-icons">description</i>
                                                            </a>
                                                            <a href="student-profile.html"
                                                               class="forum-thread-user">
                                                                <img src="assets/images/people/50/guy-2.jpg"
                                                                     alt=""
                                                                     width="20"
                                                                     class="rounded-circle">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <a href="student-profile.html"
                                                               class="text-body"><strong>Magnus Goldsmith</strong></a>
                                                            <small class="ml-auto text-muted">7 min ago</small>
                                                        </div>
                                                        <a class="text-black-70"
                                                           href="student-forum-thread.html">Can someone help me with the basic Setup?</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item forum-thread">
                                                <div class="media align-items-center">
                                                    <div class="media-left">
                                                        <div class="forum-icon-wrapper">
                                                            <a href="student-forum-thread.html"
                                                               class="forum-thread-icon">
                                                                <i class="material-icons">description</i>
                                                            </a>
                                                            <a href="student-profile.html"
                                                               class="forum-thread-user">
                                                                <img src="assets/images/people/50/woman-1.jpg"
                                                                     alt=""
                                                                     width="20"
                                                                     class="rounded-circle">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <a href="student-profile.html"
                                                               class="text-body"><strong>Katelyn Rankin</strong></a>
                                                            <small class="ml-auto text-muted">12 min ago</small>
                                                        </div>
                                                        <a class="text-black-70"
                                                           href="student-forum-thread.html">I think this is the right way?</a>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div> -->
                            </div>

                        </div>

                    </div>

                    <//?php include 'sidebar.php'; ?>

                <!-- App Settings FAB -->
                

            </div>
        </div>

        <!-- jQuery -->
        <script src="assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- MDK -->
        <script src="assets/vendor/dom-factory.js"></script>
        <script src="assets/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="assets/js/app.js"></script>

        <!-- Highlight.js -->
        <script src="assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>

    </body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/student-account-edit-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:33 GMT -->
</html>
