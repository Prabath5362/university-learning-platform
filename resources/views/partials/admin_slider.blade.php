
    <ul class="nav flex-column">
        <li class="nav-item mb-2">
            <a href="{{ route("dashboard") }}" class="nav-link sidebar-link text-dark" style="font-size: 12px;"><i
                    class="bi bi-speedometer2 me-2"></i> Dashboard</a>
        </li>

        <li class="nav-item text-uppercase fw-bold text-secondary" style="font-size: 10px;">
            Academics
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle sidebar-link text-dark" id="coursesDropdown"
                role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 12px;">
                <i class="bi bi-journal-bookmark me-2"></i> Courses
            </a>
            <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="coursesDropdown">
                <li><a class="dropdown-item" href= {{ route('admin.addCource') }} style="font-size: 12px";><i
                            class="bi bi-plus-circle me-2"></i> Add Course</a></li>
                <li><a class="dropdown-item" href="{{ route("admin.viewCource") }}" style="font-size: 12px";><i class="bi bi-eye me-2"></i> View
                        Courses</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link sidebar-link text-dark" style="font-size: 12px;">
                <i class="bi bi-folder2-open me-2"></i> Materials
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link sidebar-link text-dark" style="font-size: 12px;">
                <i class="bi bi-pencil-square me-2"></i> Assignments
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link sidebar-link text-dark" style="font-size: 12px;">
                <i class="bi bi-bar-chart-line me-2"></i> Grades
            </a>
        </li>

        <hr>

        <li class="nav-item text-uppercase fw-bold text-secondary mt-2 mb-1" style="font-size: 10px;">
            Users
        </li>
        <li class="nav-item">
            <a href="{{ route("admin.students") }}" class="nav-link sidebar-link text-dark" style="font-size: 12px;">
                <i class="bi bi-people me-2"></i> Students
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link sidebar-link text-dark" style="font-size: 12px;">
                <i class="bi bi-person-badge me-2"></i> Lecturers
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link sidebar-link text-dark" style="font-size: 12px;">
                <i class="bi bi-shield-lock me-2"></i> Admins
            </a>
        </li>

        <hr>

        <li class="nav-item text-uppercase fw-bold text-secondary mt-2 mb-1" style="font-size: 10px;">
            System
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link sidebar-link text-dark" style="font-size: 12px;">
                <i class="bi bi-graph-up-arrow me-2"></i> Reports
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link sidebar-link text-dark" style="font-size: 12px;">
                <i class="bi bi-gear me-2"></i> Settings
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link sidebar-link text-dark" style="font-size: 12px;">
                <i class="bi bi-box-arrow-right me-2"></i> Logout
            </a>
        </li>
    </ul>

