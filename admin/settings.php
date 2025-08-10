<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../partials/admin-head.php'; ?>

    <style>
        .input-helper::before {
            content: "✓";
            color: white;
            font-size: 12px;
        }
    </style>
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
                        <h2 class="text-dark font-weight-bold mb-2">Settings</h2>
                    </div>
                    <!-- Tabs -->
                    <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border">
                        <ul class="nav nav-tabs tab-transparent" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#users" role="tab" aria-controls="users" aria-selected="true">User Access</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="org-tab" data-bs-toggle="tab" href="#org-rules" role="tab" aria-controls="org-rules" aria-selected="false">Organization Rules</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="performance-tab" data-bs-toggle="tab" href="#performance" role="tab" aria-controls="performance" aria-selected="false">System Settings</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Tab Content -->
                    <div class="tab-content mt-3">
                        <!-- Users Tab -->
                        <div class="tab-pane fade show active" id="users" role="tabpanel" aria-labelledby="home-tab">
                            <!-- Container Header -->
                            <div class="d-xl-flex justify-content-between align-items-start mb-2">
                                <h4 class="text-dark font-weight-bold">ADMIN USERS</h4>

                                <a href="create_organization_account.php" class="btn" style="background-color: #900404; color: white;">
                                    <i class="mdi mdi-plus"></i> Create New User
                                </a>
                            </div>

                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table align-middle mb-0">
                                    <tbody>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>john@example.com</td>
                                            <td>
                                                <select class="btn btn-outline-danger"
                                                    id="dropdownMenuOutlineButton3" aria-expanded="false">
                                                    <option value="super_admin">Super Admin</option>
                                                    <option value="manager">Manager</option>
                                                    <option value="editor">Editor</option>
                                                    <option value="viewer">Viewer</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button class="btn me-1" title="Edit">
                                                    <i class="mdi mdi-pencil mdi-18px text-warning"></i>
                                                </button>
                                                <button class="btn" title="Delete">
                                                    <i class="mdi mdi-trash-can mdi-18px text-danger"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jane Smith</td>
                                            <td>jane@example.com</td>
                                            <td>
                                                <select class="btn btn-outline-danger"
                                                    id="dropdownMenuOutlineButton3" aria-expanded="false">
                                                    <option value="super_admin">Super Admin</option>
                                                    <option value="manager">Manager</option>
                                                    <option value="editor">Editor</option>
                                                    <option value="viewer">Viewer</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button class="btn me-1" title="Edit">
                                                    <i class="mdi mdi-pencil mdi-18px text-warning"></i>
                                                </button>
                                                <button class="btn" title="Delete">
                                                    <i class="mdi mdi-trash-can mdi-18px text-danger"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Organization Rules Tab -->
                        <div class="tab-pane fade" id="org-rules" role="tabpanel" aria-labelledby="org-tab">
                            <h4 class="text-dark fw-bold">ORGANIZATION LIMIT &amp; RULES</h4>

                            <!-- Max organizations -->
                            <div class="mb-3 d-flex align-items-center">
                                <label class="me-4 mb-0 text-dark">Maximum organizations a student can join:</label>
                                <input type="number" class="form-control form-control-sm" value="3" style="width: 50px; height: 38px;">
                            </div>

                            <!-- Allow duplicate organization names -->
                            <div class="form-check form-check-danger form-check-reverse mb-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="allowDuplicate">
                                    Allow duplicate organization names <i class="input-helper"></i>
                                </label>
                            </div>

                            <!-- Allowed event types -->
                            <div class="mb-3">
                                <label class="mb-1 text-dark">Allowed Event Types:</label>
                                <div class="d-flex flex-wrap gap-5">
                                    <div class="form-check form-check-danger">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" checked=""> Academic <i class="input-helper"></i>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-danger">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" checked=""> Social <i class="input-helper"></i>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-danger">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" checked=""> Fundraising <i class="input-helper"></i>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-danger">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" checked=""> Community Service <i class="input-helper"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Save button -->
                            <button class="btn btn-danger btn-sm mt-5">Save Settings</button>
                        </div>

                        <div class="tab-pane fade" id="performance" role="tabpanel" aria-labelledby="performance-tab">
                            <h4 class="text-dark fw-bold">SYSTEM CONFIGURATION</h4>

                            <div class="form-check form-check-danger form-check-reverse mb-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="allowDuplicate">
                                    Auto approve events from verified organizations <i class="input-helper"></i>
                                </label>
                            </div>
                            <div class="form-check form-check-danger form-check-reverse mb-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="allowDuplicate">
                                    Email notifications for new submissions <i class="input-helper"></i>
                                </label>
                            </div>
                            <div class="form-check form-check-danger form-check-reverse mb-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="allowDuplicate">
                                    System maintenance mode <i class="input-helper"></i>
                                </label>
                            </div>


                            <!-- Save button -->
                            <button class="btn btn-danger btn-sm mt-5">Save Settings</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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