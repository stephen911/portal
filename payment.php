<?php
 include 'functions.php';
 include 'yolkpay.php';
 $yolk =  new YolkPay();

 checker();
 $user = users();
//  var_dump($_SESSION['id']);

if (isset($_GET['ref'])) {
    extract($_GET);

    $uid = $_SESSION['id'];

    payment($uid, $ref, $amount);
}
?>

<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    
<!-- Mirrored from learnplus.demo.frontendmatter.com/student-billing.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:35 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Payment History</title>

        <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
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


              <!-- sweetalert -->
              <link type="text/css"
              href="assets/css/sweetalert2.min.css"
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

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.php -->
        </div>

        <!-- Header Layout -->
        <?php include 'navbar.php'; ?>
            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">

                        <div class="container-fluid page__container p-0">
                            <div class="row m-0">
                                <div class="col-lg container-fluid page__container">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                        <li class="breadcrumb-item active">Payment History</li>
                                    </ol>

                                    <h1 class="h2">Payment History</h1>

                                    <?php
                                    if ($user['paystatus'] == '') {
                                        echo '<div class="card border-left-3 border-left-danger card-2by1">
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    Your haven\'t paid
                                                    
                                                </div>
                                                <div class="media-right">
                                                    '.$yolk->handler().'
                                                    '.$yolk->payscript($user['title'], $user['name'], $user['email'], $user['contact'], 100, $ref = '').'
                                                    '.$yolk->pay("Pay Now").'
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                    } else {
                                        echo '';
                                    }

                                    ?>

                                    <div class="card table-responsive"
                                         data-toggle="lists"
                                         data-lists-values='[
                                            "js-lists-values-document", 
                                            "js-lists-values-amount",
                                            "js-lists-values-status",
                                            "js-lists-values-date"
                                        ]'
                                         data-lists-sort-by="js-lists-values-document"
                                         data-lists-sort-desc="true">
                                        <table class="table mb-0">
                                            <!-- <thead class="thead-light">
                                                <tr>
                                                    <th colspan="4">
                                                        <a href="javascript:void(0)"
                                                           class="sort"
                                                           data-sort="js-lists-values-document">Document</a>
                                                        <a href="javascript:void(0)"
                                                           class="sort"
                                                           data-sort="js-lists-values-amount">Amount</a>
                                                        <a href="javascript:void(0)"
                                                           class="sort"
                                                           data-sort="js-lists-values-status">Status</a>
                                                        <a href="javascript:void(0)"
                                                           class="sort"
                                                           data-sort="js-lists-values-date">Date</a>
                                                    </th>
                                                </tr>
                                            </thead> -->
                                            <tbody class="list">

                                                <?php transactions($_SESSION['id']);?>

                                                <!-- <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-uppercase text-muted mr-2">Transaction Amount</small>
                                                            <a href="student-invoice.php"
                                                               class="text-body small"><span class="js-lists-values-document">7000</span></a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-uppercase text-muted mr-2">Outstanding Balance</small>
                                                            <small class="text-uppercase">$<span class="js-lists-values-amount">2000</span>GHC</small>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-uppercase text-muted mr-2">Status</small>
                                                            <i class="material-icons text-success md-18 mr-2">lens</i>
                                                            <small class="text-uppercase js-lists-values-status">paid</small>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="d-flex align-items-center text-right">
                                                            <small class="text-uppercase text-muted mr-2">Date</small>
                                                            <small class="text-uppercase js-lists-values-date">12 Feb 2019</small>
                                                        </div>
                                                    </td>
                                                </tr> -->

                                                <!-- <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-uppercase text-muted mr-2">Transaction Amount</small>
                                                            <a href="student-invoice.php"
                                                               class="text-body small"><span class="js-lists-values-document">7000</span></a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-uppercase text-muted mr-2">Outstanding Balance</small>
                                                            <small class="text-uppercase">$<span class="js-lists-values-amount">7000</span>GHC</small>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                    <div class="d-flex align-items-center">
                                                            <small class="text-uppercase text-muted mr-2">Status</small>
                                                            <i class="material-icons text-danger md-18 mr-2">lens</i>
                                                            <small class="text-uppercase js-lists-values-status">unpaid</small>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="d-flex align-items-center text-right">
                                                            <small class="text-uppercase text-muted mr-2">Date</small>
                                                            <small class="text-uppercase js-lists-values-date">12 Feb 2020</small>
                                                        </div>
                                                    </td>
                                                </tr> -->

                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Pagination -->
                                    <!-- <ul class="pagination justify-content-center pagination-sm">
                                        <li class="page-item disabled">
                                            <a class="page-link"
                                               href="#"
                                               aria-label="Previous">
                                                <span aria-hidden="true"
                                                      class="material-icons">chevron_left</span>
                                                <span>Prev</span>
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link"
                                               href="#"
                                               aria-label="1">
                                                <span>1</span>
                                            </a>
                                        </li>
                                        
                                        <li class="page-item">
                                            <a class="page-link"
                                               href="#"
                                               aria-label="Next">
                                                <span>Next</span>
                                                <span aria-hidden="true"
                                                      class="material-icons">chevron_right</span>
                                            </a>
                                        </li>
                                    </ul> -->

                                </div>
                                <div id="page-nav"
                                     class="col-lg-auto page-nav">
                                    <div data-perfect-scrollbar>
                                        <div class="page-section pt-lg-32pt">
                                            <ul class="nav page-nav__menu">
                                                
                                                
                                                <li class="nav-item">
                                                    <a href="student-billing.php"
                                                       class="nav-link active">Payment History</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="certification.php"
                                                       class="nav-link">Certification</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <?php include 'sidebar.php'; ?>


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

        <!-- List.js -->
        <script src="assets/vendor/list.min.js"></script>
        <script src="assets/js/list.js"></script>

    </body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/student-billing.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:35 GMT -->
</html>