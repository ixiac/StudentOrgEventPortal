<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../partials/admin-head.php'; ?>

    <link rel="stylesheet" href="../assets/css/admin-events.css">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.php -->
        <?php include '../partials/admin-navbar.php'; ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.php -->
            <?php include '../partials/admin-sidebar.php'; ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="d-xl-flex justify-content-between align-items-start">
                        <h2 class="text-dark font-weight-bold mb-2">Events Approval Workflow</h2>

                        <!-- Status Badges -->
                        <div class="mb-4">
                            <span class="badge bg-warning text-dark p-2 me-2">14 Pendings</span>
                            <span class="badge bg-success p-2 me-2">34 Approved This Month</span>
                            <span class="badge bg-danger p-2">3 Rejected</span>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Event Card 1 -->
                        <div class="col-md-6 mb-4">
                            <div class="card shadow event-card">
                                <div class="card-body">
                                    <h5 class="card-title">Summer Music Festival
                                        <span class="badge bg-warning float-end">Pending Review</span>
                                    </h5>
                                    <div class="event-description">
                                        <p><strong>Organization:</strong> Harmonica</p>
                                        <p><strong>Date:</strong> June 15, 2025</p>
                                        <p><strong>Description:</strong> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia cur...</p>
                                        <p><strong>Attached Files:</strong></p>
                                        <div class="mb-3">
                                            <a href="#" class="btn btn-light btn-sm me-2">
                                                <i class="ti ti-file"></i> Event Proposal.pdf
                                            </a>
                                            <a href="#" class="btn btn-light btn-sm">
                                                <i class="ti ti-image"></i> Venue Layout.jpg
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-actions">
                                        <button class="btn btn-success btn-sm me-2">
                                            <i class="ti ti-check"></i> APPROVE
                                        </button>
                                        <button class="btn btn-danger btn-sm me-2">
                                            <i class="ti ti-close"></i> REJECT
                                        </button>
                                        <button class="btn btn-secondary btn-sm">
                                            <i class="ti ti-message"></i> ADD COMMENT
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 2 -->
                        <div class="col-md-6 mb-4">
                            <div class="card shadow event-card">
                                <div class="card-body">
                                    <h5 class="card-title">Tech Career Fair
                                        <span class="badge bg-warning float-end">Pending Review</span>
                                    </h5>
                                    <div class="event-description">
                                        <p><strong>Organization:</strong> Computer Science Club</p>
                                        <p><strong>Date:</strong> July 8, 2025</p>
                                        <p><strong>Venue:</strong> PUP Gymnasium</p>
                                        <p><strong>Expected Attendees:</strong> 250</p>
                                        <p><strong>Attached Files:</strong></p>
                                        <div class="mb-3">
                                            <a href="#" class="btn btn-light btn-sm">
                                                <i class="ti ti-file"></i> Career Fair Plan.pdf
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-actions">
                                        <button class="btn btn-success btn-sm me-2">
                                            <i class="ti ti-check"></i> APPROVE
                                        </button>
                                        <button class="btn btn-danger btn-sm me-2">
                                            <i class="ti ti-close"></i> REJECT
                                        </button>
                                        <button class="btn btn-secondary btn-sm">
                                            <i class="ti ti-message"></i> ADD COMMENT
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 3 -->
                        <div class="col-md-6 mb-4">
                            <div class="card shadow event-card">
                                <div class="card-body">
                                    <h5 class="card-title">Student Leadership Summit
                                        <span class="badge bg-warning float-end">Pending Review</span>
                                    </h5>
                                    <div class="event-description">
                                        <p><strong>Organization:</strong> Student Government Association</p>
                                        <p><strong>Date:</strong> August 20, 2025</p>
                                        <p><strong>Venue:</strong> University Conference Hall</p>
                                        <p><strong>Expected Attendees:</strong> 150</p>
                                        <p><strong>Duration:</strong> 2 Days (9:00 AM - 5:00 PM)</p>
                                        <p><strong>Attached Files:</strong></p>
                                        <div class="mb-3">
                                            <a href="#" class="btn btn-light btn-sm me-2">
                                                <i class="ti ti-file"></i> Summit Agenda.pdf
                                            </a>
                                            <a href="#" class="btn btn-light btn-sm me-2">
                                                <i class="ti ti-file"></i> Speaker Profiles.pdf
                                            </a>
                                            <a href="#" class="btn btn-light btn-sm">
                                                <i class="ti ti-file"></i> Budget Plan.xlsx
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-actions">
                                        <button class="btn btn-success btn-sm me-2">
                                            <i class="ti ti-check"></i> APPROVE
                                        </button>
                                        <button class="btn btn-danger btn-sm me-2">
                                            <i class="ti ti-close"></i> REJECT
                                        </button>
                                        <button class="btn btn-secondary btn-sm">
                                            <i class="ti ti-message"></i> ADD COMMENT
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 4 -->
                        <div class="col-md-6 mb-4">
                            <div class="card shadow event-card">
                                <div class="card-body">
                                    <h5 class="card-title">Green Campus Initiative Launch
                                        <span class="badge bg-warning float-end">Pending Review</span>
                                    </h5>
                                    <div class="event-description">
                                        <p><strong>Organization:</strong> Environmental Club</p>
                                        <p><strong>Date:</strong> September 5, 2025</p>
                                        <p><strong>Venue:</strong> University Quadrangle</p>
                                        <p><strong>Expected Attendees:</strong> 300</p>
                                        <p><strong>Description:</strong> Campus-wide sustainability awareness event with tree planting and eco-friendly workshops.</p>
                                        <p><strong>Attached Files:</strong></p>
                                        <div class="mb-3">
                                            <a href="#" class="btn btn-light btn-sm me-2">
                                                <i class="ti ti-file"></i> Initiative Plan.pdf
                                            </a>
                                            <a href="#" class="btn btn-light btn-sm">
                                                <i class="ti ti-image"></i> Setup Diagram.png
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-actions">
                                        <button class="btn btn-success btn-sm me-2">
                                            <i class="ti ti-check"></i> APPROVE
                                        </button>
                                        <button class="btn btn-danger btn-sm me-2">
                                            <i class="ti ti-close"></i> REJECT
                                        </button>
                                        <button class="btn btn-secondary btn-sm">
                                            <i class="ti ti-message"></i> ADD COMMENT
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:partials/footer.php -->
                <?php include '../partials/admin-footer.php'; ?>
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