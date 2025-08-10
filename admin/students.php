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
                        <h2 class="text-dark font-weight-bold mb-2">Organization Student Management</h2>

                        <a href="create_organization_account.php" class="btn" style="background-color: #900404; color: white;">
                            <i class="mdi mdi-plus"></i> Add New Student
                        </a>
                    </div>

                    <!-- Organization Student DataTable -->
                    <div class="card mt-4 shadow-lg">
                        <div class="card-body">
                            <table id="organizationTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Email</th>
                                        <th>Organization</th>
                                        <th>Date Joined</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Student records with corresponding organizations -->
                                    <tr>
                                        <td>Maria Santos</td>
                                        <td>maria.santos@university.edu</td>
                                        <td><span class="badge badge-primary">Alpha Org</span></td>
                                        <td>2024-05-10</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="View Profile"><i class="mdi mdi-account text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>John Dela Cruz</td>
                                        <td>john.delacruz@university.edu</td>
                                        <td><span class="badge badge-primary">Beta Group</span></td>
                                        <td>2024-04-22</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="View Profile"><i class="mdi mdi-account text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ana Reyes</td>
                                        <td>ana.reyes@university.edu</td>
                                        <td><span class="badge badge-primary">Gamma Team</span></td>
                                        <td>2024-03-15</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="View Profile"><i class="mdi mdi-account text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Carlos Garcia</td>
                                        <td>carlos.garcia@university.edu</td>
                                        <td><span class="badge badge-primary">Delta Org</span></td>
                                        <td>2024-02-28</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="View Profile"><i class="mdi mdi-account text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lisa Gonzalez</td>
                                        <td>lisa.gonzalez@university.edu</td>
                                        <td><span class="badge badge-primary">Epsilon Group</span></td>
                                        <td>2024-01-12</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="View Profile"><i class="mdi mdi-account text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Miguel Torres</td>
                                        <td>miguel.torres@university.edu</td>
                                        <td><span class="badge badge-primary">Zeta Org</span></td>
                                        <td>2023-12-05</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="View Profile"><i class="mdi mdi-account text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sofia Mendoza</td>
                                        <td>sofia.mendoza@university.edu</td>
                                        <td><span class="badge badge-primary">Eta Team</span></td>
                                        <td>2023-11-20</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="View Profile"><i class="mdi mdi-account text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rafael Cruz</td>
                                        <td>rafael.cruz@university.edu</td>
                                        <td><span class="badge badge-primary">Theta Org</span></td>
                                        <td>2023-10-18</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="View Profile"><i class="mdi mdi-account text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Carmen Rivera</td>
                                        <td>carmen.rivera@university.edu</td>
                                        <td><span class="badge badge-primary">Iota Group</span></td>
                                        <td>2023-09-30</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="View Profile"><i class="mdi mdi-account text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Roberto Flores</td>
                                        <td>roberto.flores@university.edu</td>
                                        <td><span class="badge badge-primary">Kappa Org</span></td>
                                        <td>2023-08-25</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="View Profile"><i class="mdi mdi-account text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Elena Morales</td>
                                        <td>elena.morales@university.edu</td>
                                        <td><span class="badge badge-primary">Lambda Team</span></td>
                                        <td>2023-07-14</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="View Profile"><i class="mdi mdi-account text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>David Ramos</td>
                                        <td>david.ramos@university.edu</td>
                                        <td><span class="badge badge-primary">Mu Org</span></td>
                                        <td>2023-06-03</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="View Profile"><i class="mdi mdi-account text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Isabela Castro</td>
                                        <td>isabela.castro@university.edu</td>
                                        <td><span class="badge badge-primary">Nu Group</span></td>
                                        <td>2023-05-21</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="View Profile"><i class="mdi mdi-account text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Antonio Vargas</td>
                                        <td>antonio.vargas@university.edu</td>
                                        <td><span class="badge badge-primary">Xi Org</span></td>
                                        <td>2023-04-09</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="View Profile"><i class="mdi mdi-account text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Patricia Herrera</td>
                                        <td>patricia.herrera@university.edu</td>
                                        <td><span class="badge badge-primary">Omicron Team</span></td>
                                        <td>2023-03-17</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="View Profile"><i class="mdi mdi-account text-info"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Fernando Silva</td>
                                        <td>fernando.silva@university.edu</td>
                                        <td><span class="badge badge-primary">Psi Org</span></td>
                                        <td>2023-02-01</td>
                                        <td>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                            <a href="#" title="Delete"><i class="mdi mdi-delete text-danger"></i></a>
                                            <a href="#" title="View Profile"><i class="mdi mdi-account text-info"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Organization Student DataTable -->
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
            $('#organizationTable').DataTable({
                "pageLength": 10,
                "order": [[ 3, "desc" ]],
                "columnDefs": [
                    { "orderable": false, "targets": 4 }
                ]
            });
        });
    </script>
    <!-- End custom js for this page -->
</body>

</html>