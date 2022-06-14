
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
        <title>Payment Information</title>

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
        <?php include ("navbar.php") ?>

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
                                    <h1 class="h2">Payment Information</h1>
                                    <div class="card">
                                        <div class="list-group list-group-fit">
                                            <div class="list-group-item">
                                                <div class="form-group m-0"
                                                     role="group"
                                                     aria-labelledby="label-acctName">
                                                    <div class="form-row">
                                                        <label id="label-acctName"
                                                               for="firstname"
                                                               class="col-md-3 col-form-label form-label">Bank Account Name</label>
                                                        <div class="col-md-9">
                                                            <input id="acctName"
                                                                   type="text"
                                                                   placeholder="Your Bank Account Name"
                                                                   value=""
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0"
                                                     role="group"
                                                     aria-labelledby="label-acctNumber">
                                                    <div class="form-row">
                                                        <label id="label-acctNumber"
                                                               for="acctNumber"
                                                               class="col-md-3 col-form-label form-label">Bank Account Number</label>
                                                        <div class="col-md-9">
                                                            <input id="acctNumber"
                                                                   type="number"
                                                                   placeholder="Your Bank Account Number"
                                                                   value=""
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0"
                                                     role="group"
                                                     aria-labelledby="label-bankBranch">
                                                    <div class="form-row">
                                                        <label id="label-bankBranch"
                                                               for="bankBranch"
                                                               class="col-md-3 col-form-label form-label">bank branch</label>
                                                        <div class="col-md-9">
                                                            <input id="bankBranch"
                                                                   type="text"
                                                                   placeholder="bankBranch"
                                                                   value=""
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>

                                    

                                    
                                </div>
                                <div id="page-nav"
                                     class="col-lg-auto page-nav">
                                    <div data-perfect-scrollbar>
                                        <div class="page-section pt-lg-32pt">
                                            <ul class="nav page-nav__menu">
                                                <li class="nav-item">
                                                    <a href="student-account-edit-Payment.html"
                                                       class="nav-link active">Payment Information</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="student-billing.php"
                                                       class="nav-link">Payment History</a>
                                                </li>
                                                
                                            </ul>
                                            <div class="page-nav__content">
                                                <button class="btn btn-success">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <?php include ("sidebar.php") ?>

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