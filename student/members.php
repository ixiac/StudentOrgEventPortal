<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../partials/student-head.php'; ?>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/responsive.bootstrap4.min.css">

    <link rel="stylesheet" href="../assets/css/student-members.css">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.php -->
            <?php include '../partials/student-sidebar.php'; ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="d-xl-flex justify-content-between align-items-start mb-5">
                        <h2 class="text-dark font-weight-bold mb-2">Members Configuration</h2>
                    </div>
                    <div class="container-scroller">
                        <div class="container-fluid page-body-wrapper">
                            <div class="content-wrapper">
                                <div class="row mx-5 px-5">
                                    <div class="col-6 grid-margin">
                                        <div class="card shadow animated-card" style="border-radius: 15px;" onclick="handleCardClick(this, 'members')">
                                            <div class="card-body text-center">
                                                <div class="d-flex align-items-center justify-content-center item-parent">
                                                    <i class="mdi mdi-account-settings card-icon" style="font-size: 180px; color: #900404"></i>
                                                </div>
                                                <h1 class="mb-2 text-dark font-weight-bold card-title">Members List</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 grid-margin">
                                        <div class="card shadow animated-card" style="border-radius: 15px;" onclick="handleCardClick(this, 'pending')">
                                            <div class="card-body text-center">
                                                <div class="d-flex align-items-center justify-content-center item-parent">
                                                    <i class="mdi mdi-account-check card-icon" style="font-size: 180px; color: #900404"></i>
                                                </div>
                                                <h1 class="mb-2 text-dark font-weight-bold card-title">Pending Application</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Dynamic Content Area -->
                                <div class="row mx-5 px-5">
                                    <div class="col-12">
                                        <div id="content-area" class="content-area">
                                            <div id="content-loading" class="loading-spinner" style="display: none;">
                                                <div class="spinner-border" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                <p class="mt-3 text-muted">Loading content...</p>
                                            </div>
                                            <div id="content-body"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- partial:partials/footer.php -->
                <?php include '../partials/student-footer.php'; ?>
                <!-- partial -->
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
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

    <!-- DataTables JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.responsive.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/responsive.bootstrap4.min.js"></script>

    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    <script>
        let currentSection = null;
        let isLoading = false;
        let membersTable = null;
        let pendingTable = null;

        function handleCardClick(card, section) {
            if (isLoading) return;

            createRippleEffect(card, event);
            card.classList.add('clicked');
            setTimeout(() => card.classList.remove('clicked'), 600);

            loadSectionContent(section);
        }

        function createRippleEffect(card, event) {
            const rect = card.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = event.clientX - rect.left - size / 2;
            const y = event.clientY - rect.top - size / 2;

            const ripple = document.createElement('span');
            ripple.classList.add('ripple');
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';

            card.appendChild(ripple);

            setTimeout(() => {
                ripple.remove();
            }, 600);
        }

        function loadSectionContent(section) {
            if (currentSection === section) return;

            currentSection = section;
            isLoading = true;

            if (membersTable) {
                membersTable.destroy();
                membersTable = null;
            }
            if (pendingTable) {
                pendingTable.destroy();
                pendingTable = null;
            }

            const contentArea = document.getElementById('content-area');
            const loadingDiv = document.getElementById('content-loading');
            const contentBody = document.getElementById('content-body');

            contentArea.classList.add('active');
            loadingDiv.style.display = 'block';
            contentBody.innerHTML = '';

            const endpoint = getEndpointUrl(section);

            setTimeout(() => {
                loadingDiv.style.display = 'none';
                renderFillerContent(section);
                initializeDataTables(section);
                isLoading = false;
            }, 1000);
        }

        function getEndpointUrl(section) {
            const endpoints = {
                'members': '/api/members/list',
                'pending': '/api/applications/pending'
            };
            return endpoints[section] || '/api/default';
        }

        function initializeDataTables(section) {
            if (section === 'members') {
                membersTable = $('#membersTable').DataTable({
                    responsive: true,
                    pageLength: 10,
                    lengthMenu: [
                        [5, 10, 25, 50],
                        [5, 10, 25, 50]
                    ],
                    language: {
                        search: "Search Members:",
                        lengthMenu: "Show _MENU_ members per page",
                        info: "Showing _START_ to _END_ of _TOTAL_ members",
                        infoEmpty: "No members found",
                        infoFiltered: "(filtered from _MAX_ total members)",
                        paginate: {
                            first: "First",
                            last: "Last",
                            next: "Next",
                            previous: "Previous"
                        }
                    },
                    columnDefs: [{
                            targets: 0,
                            orderable: true,
                            searchable: true
                        },
                        {
                            targets: 1,
                            orderable: true,
                            searchable: true
                        },
                        {
                            targets: 2,
                            orderable: true,
                            searchable: true
                        },
                        {
                            targets: 3,
                            orderable: true,
                            searchable: false
                        },
                        {
                            targets: 4, 
                            orderable: true,
                            searchable: false
                        },
                        {
                            targets: 5,
                            orderable: false,
                            searchable: false
                        }
                    ],
                    order: [
                        [4, 'desc']
                    ]
                });
            } else if (section === 'pending') {
                pendingTable = $('#pendingTable').DataTable({
                    responsive: true,
                    pageLength: 10,
                    lengthMenu: [
                        [5, 10, 25, 50],
                        [5, 10, 25, 50]
                    ],
                    language: {
                        search: "Search Applications:",
                        lengthMenu: "Show _MENU_ applications per page",
                        info: "Showing _START_ to _END_ of _TOTAL_ applications",
                        infoEmpty: "No applications found",
                        infoFiltered: "(filtered from _MAX_ total applications)",
                        paginate: {
                            first: "First",
                            last: "Last",
                            next: "Next",
                            previous: "Previous"
                        }
                    },
                    columnDefs: [{
                            targets: 0,
                            orderable: true,
                            searchable: true
                        },
                        {
                            targets: 1,
                            orderable: true,
                            searchable: true
                        },
                        {
                            targets: 2,
                            orderable: true,
                            searchable: true
                        },
                        {
                            targets: 3,
                            orderable: true,
                            searchable: true
                        },
                        {
                            targets: 4,
                            orderable: true,
                            searchable: false
                        },
                        {
                            targets: 5,
                            orderable: false,
                            searchable: false
                        }
                    ],
                    order: [
                        [4, 'desc']
                    ]
                });
            }
        }

        function renderFillerContent(section) {
            const contentBody = document.getElementById('content-body');

            switch (section) {
                case 'members':
                    contentBody.innerHTML = generateMembersFillerContent();
                    break;
                case 'pending':
                    contentBody.innerHTML = generatePendingFillerContent();
                    break;
                default:
                    contentBody.innerHTML = '<p>Unknown section</p>';
            }
        }

        function generateMembersFillerContent() {
            const members = [{
                    id: 1,
                    name: 'John Doe',
                    email: 'john.doe@email.com',
                    status: 'active',
                    joinDate: '2024-01-15',
                    role: 'Student',
                    program: 'Computer Science'
                },
                {
                    id: 2,
                    name: 'Jane Smith',
                    email: 'jane.smith@email.com',
                    status: 'active',
                    joinDate: '2024-02-20',
                    role: 'Student',
                    program: 'Engineering'
                },
                {
                    id: 3,
                    name: 'Mike Johnson',
                    email: 'mike.j@email.com',
                    status: 'inactive',
                    joinDate: '2024-01-10',
                    role: 'Student',
                    program: 'Business'
                },
                {
                    id: 4,
                    name: 'Sarah Wilson',
                    email: 'sarah.w@email.com',
                    status: 'active',
                    joinDate: '2024-03-05',
                    role: 'Student',
                    program: 'Mathematics'
                },
                {
                    id: 5,
                    name: 'David Brown',
                    email: 'david.brown@email.com',
                    status: 'active',
                    joinDate: '2024-02-28',
                    role: 'Student',
                    program: 'Physics'
                },
                {
                    id: 6,
                    name: 'Emily Davis',
                    email: 'emily.davis@email.com',
                    status: 'active',
                    joinDate: '2024-03-12',
                    role: 'Student',
                    program: 'Chemistry'
                },
                {
                    id: 7,
                    name: 'Robert Miller',
                    email: 'robert.m@email.com',
                    status: 'inactive',
                    joinDate: '2024-01-22',
                    role: 'Student',
                    program: 'Biology'
                },
                {
                    id: 8,
                    name: 'Lisa Anderson',
                    email: 'lisa.a@email.com',
                    status: 'active',
                    joinDate: '2024-02-18',
                    role: 'Student',
                    program: 'Computer Science'
                },
                {
                    id: 9,
                    name: 'Kevin Taylor',
                    email: 'kevin.taylor@email.com',
                    status: 'active',
                    joinDate: '2024-03-08',
                    role: 'Student',
                    program: 'Engineering'
                },
                {
                    id: 10,
                    name: 'Amanda White',
                    email: 'amanda.w@email.com',
                    status: 'pending',
                    joinDate: '2024-03-20',
                    role: 'Student',
                    program: 'Business'
                },
                {
                    id: 11,
                    name: 'Chris Martin',
                    email: 'chris.martin@email.com',
                    status: 'active',
                    joinDate: '2024-02-14',
                    role: 'Student',
                    program: 'Mathematics'
                },
                {
                    id: 12,
                    name: 'Rachel Green',
                    email: 'rachel.green@email.com',
                    status: 'active',
                    joinDate: '2024-01-28',
                    role: 'Student',
                    program: 'Physics'
                }
            ];

            let html = `
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark font-weight-bold">Members List</h3>
                    <div>
                        <span class="badge badge-primary me-2">${members.length} Total Members</span>
                        <button class="btn btn-success btn-sm">
                            <i class="mdi mdi-account-plus"></i> Add New Member
                        </button>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table id="membersTable" class="table table-custom table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Member</th>
                                <th>Role</th>
                                <th>Program</th>
                                <th>Status</th>
                                <th>Join Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
            `;

            members.forEach(member => {
                const avatar = member.name.split(' ').map(n => n[0]).join('');
                html += `
                    <tr>
                        <td>
                            <div class="member-info">
                                <div class="member-avatar">${avatar}</div>
                                <div class="member-details">
                                    <div class="member-name">${member.name}</div>
                                    <div class="member-email">${member.email}</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge badge-info">${member.role}</span></td>
                        <td><span class="badge badge-secondary">${member.program}</span></td>
                        <td><span class="status-badge status-${member.status}">${member.status.toUpperCase()}</span></td>
                        <td>${member.joinDate}</td>
                        <td>
                            <button class="action-btn btn-view" onclick="viewMember(${member.id})" title="View Details">
                                <i class="mdi mdi-eye"></i>
                            </button>
                            <button class="action-btn btn-approve" onclick="editMember(${member.id})" title="Edit Member">
                                <i class="mdi mdi-pencil"></i>
                            </button>
                            <button class="action-btn btn-reject" onclick="deleteMember(${member.id})" title="Delete Member">
                                <i class="mdi mdi-delete"></i>
                            </button>
                        </td>
                    </tr>
                `;
            });

            html += `
                        </tbody>
                    </table>
                </div>
            `;

            return html;
        }

        function generatePendingFillerContent() {
            const applications = [{
                    id: 101,
                    name: 'Alice Cooper',
                    email: 'alice.cooper@email.com',
                    submittedDate: '2024-03-10',
                    program: 'Computer Science'
                },
                {
                    id: 102,
                    name: 'Bob Martinez',
                    email: 'bob.martinez@email.com',
                    submittedDate: '2024-03-12',
                    program: 'Engineering'
                },
                {
                    id: 103,
                    name: 'Carol Davis',
                    email: 'carol.davis@email.com',
                    submittedDate: '2024-03-15',
                    program: 'Business'
                },
                {
                    id: 104,
                    name: 'Daniel Lee',
                    email: 'daniel.lee@email.com',
                    submittedDate: '2024-03-18',
                    program: 'Mathematics'
                },
                {
                    id: 105,
                    name: 'Eva Rodriguez',
                    email: 'eva.rodriguez@email.com',
                    submittedDate: '2024-03-20',
                    program: 'Physics'
                },
                {
                    id: 106,
                    name: 'Frank Wilson',
                    email: 'frank.wilson@email.com',
                    submittedDate: '2024-03-22',
                    program: 'Chemistry'
                },
                {
                    id: 107,
                    name: 'Grace Kim',
                    email: 'grace.kim@email.com',
                    submittedDate: '2024-03-25',
                    program: 'Biology'
                },
                {
                    id: 108,
                    name: 'Henry Chang',
                    email: 'henry.chang@email.com',
                    submittedDate: '2024-03-28',
                    program: 'Computer Science'
                },
                {
                    id: 109,
                    name: 'Isabella Lopez',
                    email: 'isabella.lopez@email.com',
                    submittedDate: '2024-03-30',
                    program: 'Engineering'
                },
                {
                    id: 110,
                    name: 'Jack Thompson',
                    email: 'jack.thompson@email.com',
                    submittedDate: '2024-04-02',
                    program: 'Business'
                }
            ];

            let html = `
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark font-weight-bold">Pending Applications</h3>
                    <div>
                        <span class="badge badge-warning">${applications.length} Pending Review</span>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table id="pendingTable" class="table table-custom table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Application ID</th>
                                <th>Applicant Name</th>
                                <th>Email</th>
                                <th>Program</th>
                                <th>Submitted Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
            `;

            applications.forEach(app => {
                html += `
                    <tr>
                        <td><strong>#${app.id}</strong></td>
                        <td>${app.name}</td>
                        <td>${app.email}</td>
                        <td><span class="badge badge-info">${app.program}</span></td>
                        <td>${app.submittedDate}</td>
                        <td>
                            <button class="action-btn btn-approve" onclick="approveApplication(${app.id})" title="Approve Application">
                                <i class="mdi mdi-check"></i>
                            </button>
                            <button class="action-btn btn-reject" onclick="rejectApplication(${app.id})" title="Reject Application">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <button class="action-btn btn-view" onclick="viewApplication(${app.id})" title="View Details">
                                <i class="mdi mdi-eye"></i>
                            </button>
                        </td>
                    </tr>
                `;
            });

            html += `
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 text-center">
                    <p class="text-muted">Review applications to approve or reject student memberships.</p>
                </div>
            `;

            return html;
        }

        function viewMember(id) {
            console.log(`Viewing member #${id}`);
            alert(`Viewing details for member #${id}`);
        }

        function editMember(id) {
            console.log(`Editing member #${id}`);
            alert(`Edit functionality for member #${id}`);
        }

        function deleteMember(id) {
            if (confirm(`Are you sure you want to delete member #${id}?`)) {
                console.log(`Deleting member #${id}`);
                alert(`Member #${id} deleted successfully!`);
                loadSectionContent('members');
            }
        }

        function approveApplication(id) {
            if (confirm(`Are you sure you want to approve application #${id}?`)) {
                const button = event.target.closest('button');
                const originalText = button.innerHTML;
                button.innerHTML = '<i class="mdi mdi-loading mdi-spin"></i>';
                button.disabled = true;

                setTimeout(() => {
                    console.log(`Approving application #${id}`);
                    alert(`Application #${id} approved successfully!`);
                    loadSectionContent('pending');
                }, 1000);
            }
        }

        function rejectApplication(id) {
            if (confirm(`Are you sure you want to reject application #${id}?`)) {
                const button = event.target.closest('button');
                const originalText = button.innerHTML;
                button.innerHTML = '<i class="mdi mdi-loading mdi-spin"></i>';
                button.disabled = true;

                setTimeout(() => {
                    console.log(`Rejecting application #${id}`);
                    alert(`Application #${id} rejected.`);
                    loadSectionContent('pending');
                }, 1000);
            }
        }

        function viewApplication(id) {
            console.log(`Viewing application #${id}`);
            alert(`Viewing details for application #${id}`);
        }

        function approveSelectedApplications() {
            const selectedRows = pendingTable.rows('.selected').data();
            if (selectedRows.length === 0) {
                alert('Please select applications to approve.');
                return;
            }

            if (confirm(`Are you sure you want to approve ${selectedRows.length} selected applications?`)) {
                console.log('Approving selected applications:', selectedRows);
                alert(`${selectedRows.length} applications approved successfully!`);
                loadSectionContent('pending');
            }
        }

        function rejectSelectedApplications() {
            const selectedRows = pendingTable.rows('.selected').data();
            if (selectedRows.length === 0) {
                alert('Please select applications to reject.');
                return;
            }

            if (confirm(`Are you sure you want to reject ${selectedRows.length} selected applications?`)) {
                console.log('Rejecting selected applications:', selectedRows);
                alert(`${selectedRows.length} applications rejected.`);
                loadSectionContent('pending');
            }
        }

        function exportMembers() {
            if (membersTable) {
                const data = membersTable.data().toArray();
                console.log('Exporting members data:', data);
                alert('Export functionality would be implemented here.');
            }
        }

        function exportApplications() {
            if (pendingTable) {
                const data = pendingTable.data().toArray();
                console.log('Exporting applications data:', data);
                alert('Export functionality would be implemented here.');
            }
        }

        function searchMembers(searchTerm) {
            if (membersTable) {
                membersTable.search(searchTerm).draw();
            }
        }

        function searchApplications(searchTerm) {
            if (pendingTable) {
                pendingTable.search(searchTerm).draw();
            }
        }

        function filterMembersByStatus(status) {
            if (membersTable) {
                if (status === 'all') {
                    membersTable.column(3).search('').draw();
                } else {
                    membersTable.column(3).search(status).draw();
                }
            }
        }

        function filterMembersByProgram(program) {
            if (membersTable) {
                if (program === 'all') {
                    membersTable.column(2).search('').draw();
                } else {
                    membersTable.column(2).search(program).draw();
                }
            }
        }

        function filterApplicationsByProgram(program) {
            if (pendingTable) {
                if (program === 'all') {
                    pendingTable.column(3).search('').draw();
                } else {
                    pendingTable.column(3).search(program).draw();
                }
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            console.log('Settings page loaded with DataTables functionality');

            $(document).on('keyup', '.dataTables_filter input', function() {
                const searchTerm = $(this).val();
                console.log('Searching for:', searchTerm);
            });

            $(document).on('click', 'tbody tr', function(e) {
                if (e.target.tagName.toLowerCase() !== 'button' && e.target.tagName.toLowerCase() !== 'i') {
                    $(this).toggleClass('selected');
                    console.log('Row selected/deselected');
                }
            });
        });

        function refreshCurrentSection() {
            if (currentSection) {
                loadSectionContent(currentSection);
            }
        }

        function startAutoRefresh(interval = 300000) {
            setInterval(() => {
                if (currentSection && !isLoading) {
                    console.log('Auto-refreshing data...');
                    loadSectionContent(currentSection);
                }
            }, interval);
        }
    </script>
</body>

</html>