<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../partials/admin-head.php'; ?>
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
                    <div class="d-xl-flex justify-content-between align-items-start mb-5">
                        <h2 class="text-dark font-weight-bold mb-2">Reports & Analytics</h2>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h4 class="card-title">Checkbox Controls</h4>
                                    <p class="card-description">Checkbox and radio controls (default appearance is in
                                        primary color)</p>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-check form-check-danger">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                name="optionsRadios" id="optionsRadios1" value="option1"
                                                                checked=""> All members report <i
                                                                class="input-helper"></i></label>
                                                    </div>
                                                    <div class="form-check form-check-danger">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                name="optionsRadios" id="optionsRadios2"
                                                                value="option2">
                                                            Multi-Organization members
                                                            <i class="input-helper"></i></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-check form-check-danger">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                name="optionsRadios" id="optionsRadios3"
                                                                value="option3">
                                                            Organization specific report
                                                            <i class="input-helper"></i></label>
                                                    </div>
                                                    <div class="form-check form-check-danger">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                name="optionsRadios" id="optionsRadios4"
                                                                value="option4">
                                                            Event summary report
                                                            <i class="input-helper"></i></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-xl-flex justify-content-between align-items-start mb-5">
                        <h2 class="text-dark font-weight-bold mb-2">Sample Charts</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h4 class="card-title">Line chart</h4>
                                    <canvas id="lineChart" style="max-height:250px"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h4 class="card-title">Bar chart</h4>
                                    <canvas id="barChart" style="max-height:250px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h4 class="card-title">Area chart</h4>
                                    <canvas id="areaChart" style="max-height:250px"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h4 class="card-title">Doughnut chart</h4>
                                    <canvas id="doughnutChart" style="max-height:250px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h4 class="card-title">Pie chart</h4>
                                    <canvas id="pieChart" style="max-height:250px"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h4 class="card-title">Scatter chart</h4>
                                    <canvas id="scatterChart" style="max-height:250px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.php -->
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

    <script>
        // Line Chart - Monthly Sales Revenue
        const lineCtx = document.getElementById('lineChart').getContext('2d');
        const lineChart = new Chart(lineCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Revenue ($1000s)',
                    data: [65, 78, 90, 81, 95, 105, 115, 125, 140, 155, 170, 185],
                    borderColor: '#4f46e5',
                    backgroundColor: 'rgba(79, 70, 229, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0,0,0,0.1)'
                        }
                    },
                    x: {
                        grid: {
                            color: 'rgba(0,0,0,0.1)'
                        }
                    }
                }
            }
        });

        // Bar Chart - Product Categories Performance
        const barCtx = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: ['Electronics', 'Clothing', 'Books', 'Home & Garden', 'Sports', 'Beauty'],
                datasets: [{
                    label: 'Sales (Units)',
                    data: [1200, 950, 800, 1100, 700, 600],
                    backgroundColor: [
                        '#10b981',
                        '#f59e0b',
                        '#ef4444',
                        '#8b5cf6',
                        '#06b6d4',
                        '#f97316'
                    ],
                    borderColor: [
                        '#059669',
                        '#d97706',
                        '#dc2626',
                        '#7c3aed',
                        '#0891b2',
                        '#ea580c'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0,0,0,0.1)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        // Area Chart - Website Traffic Growth
        const areaCtx = document.getElementById('areaChart').getContext('2d');
        const areaChart = new Chart(areaCtx, {
            type: 'line',
            data: {
                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5', 'Week 6', 'Week 7', 'Week 8'],
                datasets: [{
                    label: 'Unique Visitors',
                    data: [3200, 3800, 4200, 4900, 5400, 6100, 6800, 7500],
                    borderColor: '#06b6d4',
                    backgroundColor: 'rgba(6, 182, 212, 0.3)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4
                }, {
                    label: 'Page Views',
                    data: [8500, 9200, 10100, 11800, 12900, 14200, 15600, 17200],
                    borderColor: '#8b5cf6',
                    backgroundColor: 'rgba(139, 92, 246, 0.3)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0,0,0,0.1)'
                        }
                    },
                    x: {
                        grid: {
                            color: 'rgba(0,0,0,0.1)'
                        }
                    }
                }
            }
        });

        // Doughnut Chart - Customer Satisfaction
        const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');
        const doughnutChart = new Chart(doughnutCtx, {
            type: 'doughnut',
            data: {
                labels: ['Very Satisfied', 'Satisfied', 'Neutral', 'Dissatisfied', 'Very Dissatisfied'],
                datasets: [{
                    data: [45, 30, 15, 7, 3],
                    backgroundColor: [
                        '#10b981',
                        '#34d399',
                        '#fbbf24',
                        '#f87171',
                        '#ef4444'
                    ],
                    borderColor: '#ffffff',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });

        // Pie Chart - Market Share Distribution
        const pieCtx = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['Company A', 'Company B', 'Company C', 'Company D', 'Others'],
                datasets: [{
                    data: [35, 25, 20, 12, 8],
                    backgroundColor: [
                        '#4f46e5',
                        '#06b6d4',
                        '#10b981',
                        '#f59e0b',
                        '#ef4444'
                    ],
                    borderColor: '#ffffff',
                    borderWidth: 3
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });

        // Scatter Chart - Price vs Sales Volume
        const scatterCtx = document.getElementById('scatterChart').getContext('2d');
        const scatterChart = new Chart(scatterCtx, {
            type: 'scatter',
            data: {
                datasets: [{
                    label: 'Product Performance',
                    data: [{
                        x: 10,
                        y: 850
                    },
                    {
                        x: 25,
                        y: 720
                    },
                    {
                        x: 45,
                        y: 580
                    },
                    {
                        x: 65,
                        y: 420
                    },
                    {
                        x: 85,
                        y: 350
                    },
                    {
                        x: 105,
                        y: 280
                    },
                    {
                        x: 125,
                        y: 220
                    },
                    {
                        x: 145,
                        y: 180
                    },
                    {
                        x: 165,
                        y: 140
                    },
                    {
                        x: 185,
                        y: 120
                    },
                    {
                        x: 205,
                        y: 90
                    },
                    {
                        x: 225,
                        y: 75
                    }
                    ],
                    backgroundColor: '#8b5cf6',
                    borderColor: '#7c3aed',
                    borderWidth: 2,
                    pointRadius: 6,
                    pointHoverRadius: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                },
                scales: {
                    x: {
                        type: 'linear',
                        position: 'bottom',
                        title: {
                            display: true,
                            text: 'Price ($)'
                        },
                        grid: {
                            color: 'rgba(0,0,0,0.1)'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Sales Volume'
                        },
                        grid: {
                            color: 'rgba(0,0,0,0.1)'
                        }
                    }
                }
            }
        });
    </script>
    <!-- End custom js for this page -->
</body>

</html>