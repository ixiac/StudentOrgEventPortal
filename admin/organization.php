<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../partials/admin-head.php'; ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
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
                        <h2 class="text-dark font-weight-bold mb-2">Organization Account Management</h2>

                        <a href="create_organization_account.php" class="btn" style="background-color: #900404; color: white;">
                            <i class="mdi mdi-plus"></i> Create New Organization
                        </a>
                    </div>

                    <!-- Organization DataTable -->
                    <div class="card mt-4 shadow-lg">
                        <div class="card-body">
                            <table id="organizationTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Organization Name</th>
                                        <th>Members</th>
                                        <th>Status</th>
                                        <th>Create Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- 15 sample rows -->
                                    <tr>
                                        <td>Alpha Org</td>
                                        <td>12</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>2024-05-10</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="Access"><i class="mdi mdi-key text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Beta Group</td>
                                        <td>8</td>
                                        <td><span class="badge badge-danger">Inactive</span></td>
                                        <td>2024-04-22</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="Access"><i class="mdi mdi-key text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gamma Team</td>
                                        <td>20</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>2024-03-15</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="Access"><i class="mdi mdi-key text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Delta Org</td>
                                        <td>16</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>2024-02-28</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="Access"><i class="mdi mdi-key text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Epsilon Group</td>
                                        <td>30</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>2024-01-12</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="Access"><i class="mdi mdi-key text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Zeta Org</td>
                                        <td>5</td>
                                        <td><span class="badge badge-danger">Inactive</span></td>
                                        <td>2023-12-05</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="Access"><i class="mdi mdi-key text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Eta Team</td>
                                        <td>18</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>2023-11-20</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="Access"><i class="mdi mdi-key text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Theta Org</td>
                                        <td>22</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>2023-10-18</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="Access"><i class="mdi mdi-key text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Iota Group</td>
                                        <td>14</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>2023-09-30</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="Access"><i class="mdi mdi-key text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kappa Org</td>
                                        <td>10</td>
                                        <td><span class="badge badge-danger">Inactive</span></td>
                                        <td>2023-08-25</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="Access"><i class="mdi mdi-key text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lambda Team</td>
                                        <td>27</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>2023-07-14</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="Access"><i class="mdi mdi-key text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mu Org</td>
                                        <td>6</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>2023-06-03</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="Access"><i class="mdi mdi-key text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nu Group</td>
                                        <td>19</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>2023-05-21</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="Access"><i class="mdi mdi-key text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Xi Org</td>
                                        <td>13</td>
                                        <td><span class="badge badge-danger">Inactive</span></td>
                                        <td>2023-04-09</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="Access"><i class="mdi mdi-key text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Omicron Team</td>
                                        <td>21</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>2023-03-17</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="Access"><i class="mdi mdi-key text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Psi Org</td>
                                        <td>9</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>2023-02-01</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="Access"><i class="mdi mdi-key text-info"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Organization DataTable -->
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
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
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
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
    <script>
        $(document).ready(function() {
            $('#organizationTable').DataTable();
        });
    </script>
    <!-- End custom js for this page -->
</body>

</html>