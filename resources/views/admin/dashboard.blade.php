@extends("layouts.admin_layout")
@section("admin-content")

    <h5 class="mb-4">Materials Dashboard</h5>
    <div class="row mb-4">

        <div class="col-md-3 mb-3">
            <div class="card text-white bg-primary h-100">
                <div class="card-body">
                    <h6 class="card-title">Courses</h6>
                    <h3 class="card-text">12</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card text-white bg-success h-100">
                <div class="card-body">
                    <h6 class="card-title">Students</h6>
                    <h3 class="card-text">150</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card text-white bg-warning h-100">
                <div class="card-body">
                    <h6 class="card-title">Materials</h6>
                    <h3 class="card-text">45</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card text-white bg-danger h-100">
                <div class="card-body">
                    <h6 class="card-title">Assignments Pending</h6>
                    <h3 class="card-text">8</h3>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <h6 class="mb-0">Dashboard Summary</h6>
                </div>
                <div class="card-body">
                    <canvas id="summaryChart" height="200"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <h6 class="mb-0">Quick Stats</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Total Courses
                            <span class="badge bg-primary rounded-pill">12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Total Students
                            <span class="badge bg-success rounded-pill">150</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Total Materials
                            <span class="badge bg-warning rounded-pill">45</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Assignments Pending
                            <span class="badge bg-danger rounded-pill">8</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('summaryChart').getContext('2d');
        const summaryChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Courses', 'Materials', 'Assignments', 'Students'],
                datasets: [{
                    label: 'Summary',
                    data: [12, 45, 8, 150],
                    backgroundColor: [
                        '#0d6efd',
                        '#ffc107',
                        '#dc3545',
                        '#198754'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 20,
                            padding: 15
                        }
                    }
                }
            }
        });
    </script>




@endsection
