<nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient shadow-sm fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold ps-2 fs-6" href="#">University Learning Portal</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">

                <li class="nav-item me-2">
                    <a class="nav-link" href="#">
                        <i class="bi bi-search fs-6 text-white" ></i>
                    </a>
                </li>

                <li class="nav-item me-3">
                    <a class="nav-link position-relative" href="#">
                        <i class="bi bi-chat-dots fs-6 text-white"></i>
                        <span class="position-absolute top-10 start-75 translate-middle badge rounded-pill bg-danger" style="font-size: 8px; padding: 2px 4px;">0</span>
                    </a>
                </li>

                <li class="nav-item me-3">
                    <a class="nav-link position-relative" href="#">
                        <i class="bi bi-bell fs-6 text-white"></i>

                        <span class="position-absolute top-10 start-75 translate-middle badge rounded-pill bg-danger" style="font-size: 8px; padding: 2px 4px;">
                            0
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white fs-6" href="#">
                        <i class="bi bi-person-circle me-1 fs-6 text-white"></i> John Doe
                    </a>
                </li>

                <li class="nav-item">
                    <form action="{{ route("logout") }}" method="post" class="">
                        @csrf
                        <button class="nav-link text-white">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
