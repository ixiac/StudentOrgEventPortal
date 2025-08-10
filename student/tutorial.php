<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../partials/admin-head.php'; ?>

    <link rel="stylesheet" href="../assets/css/student-tutorial.css">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/sidebar.php -->
            <?php include '../partials/student-sidebar.php'; ?>
            <!-- partial -->
            <div class="main-panel">
                <!-- Content Wrapper -->
                <div class="content-wrapper">

                    <div class="d-xl-flex justify-content-between align-items-start mb-5">
                        <h2 class="text-dark font-weight-bold mb-2">Tutorial Page</h2>
                    </div>

                    <div class="search-field d-none d-xl-block mb-5">
                        <form class="d-flex align-items-center h-100" action="#">
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent shadow-sm">
                                    <i class="input-group-text border-0 mdi mdi-magnify"></i>
                                </div>
                                <input type="text" class="search-bar form-control bg-white border-0 shadow-sm" placeholder="Search tutorial articles...">
                            </div>
                        </form>
                    </div>

                    <!-- Articles Grid -->
                    <div class="row g-4">
                        <div class="col-md-4 col-lg-3">
                            <div class="article-card mb-5 shadow">
                                <div class="article-icon">
                                    <i class="mdi mdi-file-document-outline"></i>
                                </div>
                                <h5 class="article-title fw-bold text-dark">Getting Started with HTML</h5>
                                <p class="text-muted" style="font-size: 14px;">
                                    Learn the basics of HTML structure, tags, and attributes to build your first web page.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="article-card mb-5 shadow">
                                <div class="article-icon">
                                    <i class="mdi mdi-file-document-outline"></i>
                                </div>
                                <h5 class="article-title fw-bold text-dark">CSS Styling Tips</h5>
                                <p class="text-muted" style="font-size: 14px;">
                                    Discover essential CSS tricks to make your website look clean, modern, and responsive.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="article-card mb-5 shadow">
                                <div class="article-icon">
                                    <i class="mdi mdi-file-document-outline"></i>
                                </div>
                                <h5 class="article-title fw-bold text-dark">JavaScript Basics</h5>
                                <p class="text-muted" style="font-size: 14px;">
                                    Understand variables, functions, and DOM manipulation to bring your site to life.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="article-card mb-5 shadow">
                                <div class="article-icon">
                                    <i class="mdi mdi-file-document-outline"></i>
                                </div>
                                <h5 class="article-title fw-bold text-dark">Bootstrap 5 Overview</h5>
                                <p class="text-muted" style="font-size: 14px;">
                                    Learn how to use Bootstrap components and utilities for fast, responsive layouts.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Content Wrapper -->

                <!-- Footer -->
                <?php include '../partials/student-footer.php'; ?>
                <!-- End Footer -->
            </div>
        </div>
    </div>

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
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- End Bootstrap JS -->
</body>

</html>