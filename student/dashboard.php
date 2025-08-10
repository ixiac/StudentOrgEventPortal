<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../partials/admin-head.php'; ?>
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.php -->
            <?php include '../partials/student-sidebar.php'; ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="d-xl-flex justify-content-between align-items-start">
                        <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
                        <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
                            <div class="btn-group bg-white p-3" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-link text-light py-0 border-right">7 Days</button>
                                <button type="button" class="btn btn-link text-dark py-0 border-right">1 Month</button>
                                <button type="button" class="btn btn-link text-light py-0">3 Month</button>
                            </div>
                            <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
                                <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-calendar mr-1"></i>24 Mar 2019 - 24 Mar 2019 </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                    <div class="card shadow">
                                        <div class="card-body text-center">
                                            <h5 class="mb-2 text-dark font-weight-normal">Total Organizations
                                            </h5>
                                            <h2 class="mb-4 text-dark font-weight-bold">17</h2>
                                            <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                                            <p class="mt-4 mb-0">Out of</p>
                                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">23</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                    <div class="card shadow">
                                        <div class="card-body text-center">
                                            <h5 class="mb-2 text-dark font-weight-normal">Total Students</h5>
                                            <h2 class="mb-4 text-dark font-weight-bold">756,000,000</h2>
                                            <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                                            <p class="mt-4 mb-0">Increased since yesterday</p>
                                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">20%</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                                    <div class="card shadow">
                                        <div class="card-body text-center">
                                            <h5 class="mb-2 text-dark font-weight-normal">Pending Events</h5>
                                            <h2 class="mb-4 text-dark font-weight-bold">100</h2>
                                            <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                                            <p class="mt-4 mb-0">Total Events:</p>
                                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">250</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                    <div class="card shadow">
                                        <div class="card-body text-center">
                                            <h5 class="mb-2 text-dark font-weight-normal">Pending Tickets</h5>
                                            <h2 class="mb-4 text-dark font-weight-bold">425</h2>
                                            <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                                            <p class="mt-4 mb-0">Total Tickets:</p>
                                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">2,500</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 grid-margin">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                                        <h4 class="card-title mb-0">Recent Activity</h4>
                                                        <div class="dropdown dropdown-arrow-none">
                                                            <button class="btn p-0 text-dark dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="mdi mdi-dots-vertical"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuIconButton1">
                                                                <h6 class="dropdown-header">Settings</h6>
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-4 grid-margin  grid-margin-lg-0">
                                                    <div class="wrapper pb-5 border-bottom">
                                                        <div class="text-wrapper d-flex align-items-center justify-content-between mb-2">
                                                            <p class="mb-0 text-dark">Total Profit</p>
                                                            <span class="text-success"><i class="mdi mdi-arrow-up"></i>2.95%</span>
                                                        </div>
                                                        <h3 class="mb-0 text-dark font-weight-bold">₱ 92,556</h3>
                                                        <canvas id="total-profit"></canvas>
                                                    </div>
                                                    <div class="wrapper pt-5">
                                                        <div class="text-wrapper d-flex align-items-center justify-content-between mb-2">
                                                            <p class="mb-0 text-dark">Expenses</p>
                                                            <span class="text-success"><i class="mdi mdi-arrow-up"></i>52.95%</span>
                                                        </div>
                                                        <h3 class="mb-4 text-dark font-weight-bold">$ 59565</h3>
                                                        <canvas id="total-expences"></canvas>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-sm-8 grid-margin  grid-margin-lg-0">
                                                    <div class="pl-0 pl-lg-4 ">
                                                        <div class="d-xl-flex justify-content-between align-items-center mb-2">
                                                            <div class="d-lg-flex align-items-center mb-lg-2 mb-xl-0">
                                                                <h3 class="text-dark font-weight-bold mr-2 mb-0">Ticket sales</h3>
                                                                <h5 class="mb-0">( growth 62% )</h5>
                                                            </div>
                                                        </div>
                                                        <div class="graph-custom-legend clearfix" id="device-sales-legend"></div>
                                                        <canvas id="device-sales"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include '../partials/student-footer.php'; ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>