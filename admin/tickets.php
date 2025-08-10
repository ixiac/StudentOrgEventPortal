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
                    </div>

                    <!-- Organization Student DataTable -->
                    <div class="card mt-4 shadow-lg">
                        <div class="card-body">
                            <table id="organizationTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Ticket Number</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Date Submitted</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>TKT-001</td>
                                        <td>maria.santos@university.edu</td>
                                        <td>Maria Santos</td>
                                        <td>2024-05-10</td>
                                        <td class="action-icons">
                                            <a href="#" title="View Profile"><i class="mdi mdi-eye text-info"></i></a>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TKT-002</td>
                                        <td>john.delacruz@university.edu</td>
                                        <td>John Dela Cruz</td>
                                        <td>2024-04-22</td>
                                        <td class="action-icons">
                                            <a href="#" title="View Profile"><i class="mdi mdi-eye text-info"></i></a>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TKT-003</td>
                                        <td>ana.reyes@university.edu</td>
                                        <td>Ana Reyes</td>
                                        <td>2024-03-15</td>
                                        <td class="action-icons">
                                            <a href="#" title="View Profile"><i class="mdi mdi-eye text-info"></i></a>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TKT-004</td>
                                        <td>carlos.garcia@university.edu</td>
                                        <td>Carlos Garcia</td>
                                        <td>2024-02-28</td>
                                        <td class="action-icons">
                                            <a href="#" title="View Profile"><i class="mdi mdi-eye text-info"></i></a>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TKT-005</td>
                                        <td>lisa.gonzalez@university.edu</td>
                                        <td>Lisa Gonzalez</td>
                                        <td>2024-01-12</td>
                                        <td class="action-icons">
                                            <a href="#" title="View Profile"><i class="mdi mdi-eye text-info"></i></a>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TKT-006</td>
                                        <td>miguel.torres@university.edu</td>
                                        <td>Miguel Torres</td>
                                        <td>2023-12-05</td>
                                        <td class="action-icons">
                                            <a href="#" title="View Profile"><i class="mdi mdi-eye text-info"></i></a>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TKT-007</td>
                                        <td>sofia.mendoza@university.edu</td>
                                        <td>Sofia Mendoza</td>
                                        <td>2023-11-20</td>
                                        <td class="action-icons">
                                            <a href="#" title="View Profile"><i class="mdi mdi-eye text-info"></i></a>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TKT-008</td>
                                        <td>rafael.cruz@university.edu</td>
                                        <td>Rafael Cruz</td>
                                        <td>2023-10-18</td>
                                        <td class="action-icons">
                                            <a href="#" title="View Profile"><i class="mdi mdi-eye text-info"></i></a>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TKT-009</td>
                                        <td>carmen.rivera@university.edu</td>
                                        <td>Carmen Rivera</td>
                                        <td>2023-09-30</td>
                                        <td class="action-icons">
                                            <a href="#" title="View Profile"><i class="mdi mdi-eye text-info"></i></a>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TKT-010</td>
                                        <td>roberto.flores@university.edu</td>
                                        <td>Roberto Flores</td>
                                        <td>2023-08-25</td>
                                        <td class="action-icons">
                                            <a href="#" title="View Profile"><i class="mdi mdi-eye text-info"></i></a>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TKT-011</td>
                                        <td>elena.morales@university.edu</td>
                                        <td>Elena Morales</td>
                                        <td>2023-07-14</td>
                                        <td class="action-icons">
                                            <a href="#" title="View Profile"><i class="mdi mdi-eye text-info"></i></a>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TKT-012</td>
                                        <td>david.ramos@university.edu</td>
                                        <td>David Ramos</td>
                                        <td>2023-06-03</td>
                                        <td class="action-icons">
                                            <a href="#" title="View Profile"><i class="mdi mdi-eye text-info"></i></a>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TKT-013</td>
                                        <td>isabela.castro@university.edu</td>
                                        <td>Isabela Castro</td>
                                        <td>2023-05-21</td>
                                        <td class="action-icons">
                                            <a href="#" title="View Profile"><i class="mdi mdi-eye text-info"></i></a>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TKT-014</td>
                                        <td>antonio.vargas@university.edu</td>
                                        <td>Antonio Vargas</td>
                                        <td>2023-04-09</td>
                                        <td class="action-icons">
                                            <a href="#" title="View Profile"><i class="mdi mdi-eye text-info"></i></a>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TKT-015</td>
                                        <td>patricia.herrera@university.edu</td>
                                        <td>Patricia Herrera</td>
                                        <td>2023-03-17</td>
                                        <td class="action-icons">
                                            <a href="#" title="View Profile"><i class="mdi mdi-eye text-info"></i></a>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TKT-016</td>
                                        <td>fernando.silva@university.edu</td>
                                        <td>Fernando Silva</td>
                                        <td>2023-02-01</td>
                                        <td class="action-icons">
                                            <a href="#" title="View Profile"><i class="mdi mdi-eye text-info"></i></a>
                                            <a href="#" title="Edit"><i class="mdi mdi-pencil text-warning"></i></a>
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
                "order": [
                    [3, "desc"]
                ],
                "columnDefs": [{
                    "orderable": false,
                    "targets": 4
                }]
            });
        });
    </script>
    <!-- End custom js for this page -->
</body>

</html>