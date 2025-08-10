<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../partials/student-head.php'; ?>
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.php -->
            <?php include '../partials/student-sidebar.php'; ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h2 class="text-dark font-weight-bold mb-2">Downloadable Forms</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card shadow">
                                <div class="card-body">
                                    <!-- Bootstrap Tabs -->
                                    <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border">
                                        <ul class="nav nav-tabs tab-transparent" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="accreditation-tab" data-bs-toggle="tab" href="#accreditation" role="tab" aria-selected="true">
                                                    Accreditation Requirements
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="revalidation-tab" data-bs-toggle="tab" href="#revalidation" role="tab" aria-selected="false" tabindex="-1">
                                                    Revalidation Requirements
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-content" id="tabContent">
                                        <!-- Accreditation Tab -->
                                        <div class="tab-pane fade show active" id="accreditation" role="tabpanel" aria-labelledby="accreditation-tab">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="mb-4">Accreditation Forms</h5>
                                                    <div class="table-responsive">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>Form Name</th>
                                                                    <th>File Type</th>
                                                                    <th>Size</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Application for Initial Accreditation</td>
                                                                    <td><span class="badge badge-info">PDF</span></td>
                                                                    <td><small class="text-muted">2.5 MB</small></td>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm">
                                                                            <i class="mdi mdi-download me-1"></i>Download
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Self-Study Report Template</td>
                                                                    <td><span class="badge badge-success">DOCX</span></td>
                                                                    <td><small class="text-muted">1.8 MB</small></td>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm">
                                                                            <i class="mdi mdi-download me-1"></i>Download
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Faculty Credentials Form</td>
                                                                    <td><span class="badge badge-warning">XLSX</span></td>
                                                                    <td><small class="text-muted">542 KB</small></td>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm">
                                                                            <i class="mdi mdi-download me-1"></i>Download
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Curriculum Mapping Template</td>
                                                                    <td><span class="badge badge-success">DOCX</span></td>
                                                                    <td><small class="text-muted">1.2 MB</small></td>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm">
                                                                            <i class="mdi mdi-download me-1"></i>Download
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Resource Inventory Form</td>
                                                                    <td><span class="badge badge-info">PDF</span></td>
                                                                    <td><small class="text-muted">3.1 MB</small></td>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm">
                                                                            <i class="mdi mdi-download me-1"></i>Download
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Student Assessment Plan</td>
                                                                    <td><span class="badge badge-success">DOCX</span></td>
                                                                    <td><small class="text-muted">965 KB</small></td>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm">
                                                                            <i class="mdi mdi-download me-1"></i>Download
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Revalidation Tab -->
                                        <div class="tab-pane fade" id="revalidation" role="tabpanel" aria-labelledby="revalidation-tab">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="mb-4">Revalidation Forms</h5>
                                                    <div class="table-responsive">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>Form Name</th>
                                                                    <th>File Type</th>
                                                                    <th>Size</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Revalidation Application Form</td>
                                                                    <td><span class="badge badge-info">PDF</span></td>
                                                                    <td><small class="text-muted">2.1 MB</small></td>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm">
                                                                            <i class="mdi mdi-download me-1"></i>Download
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Progress Report Template</td>
                                                                    <td><span class="badge badge-success">DOCX</span></td>
                                                                    <td><small class="text-muted">1.4 MB</small></td>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm">
                                                                            <i class="mdi mdi-download me-1"></i>Download
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Quality Improvement Plan</td>
                                                                    <td><span class="badge badge-warning">XLSX</span></td>
                                                                    <td><small class="text-muted">785 KB</small></td>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm">
                                                                            <i class="mdi mdi-download me-1"></i>Download
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Updated Faculty Information</td>
                                                                    <td><span class="badge badge-success">DOCX</span></td>
                                                                    <td><small class="text-muted">1.7 MB</small></td>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm">
                                                                            <i class="mdi mdi-download me-1"></i>Download
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Student Outcome Assessment</td>
                                                                    <td><span class="badge badge-info">PDF</span></td>
                                                                    <td><small class="text-muted">4.2 MB</small></td>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm">
                                                                            <i class="mdi mdi-download me-1"></i>Download
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Compliance Checklist</td>
                                                                    <td><span class="badge badge-warning">XLSX</span></td>
                                                                    <td><small class="text-muted">324 KB</small></td>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm">
                                                                            <i class="mdi mdi-download me-1"></i>Download
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>External Review Summary</td>
                                                                    <td><span class="badge badge-success">DOCX</span></td>
                                                                    <td><small class="text-muted">1.9 MB</small></td>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm">
                                                                            <i class="mdi mdi-download me-1"></i>Download
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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
                <!-- partial:partials/footer.php -->
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
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- End Bootstrap JS -->
</body>

</html>