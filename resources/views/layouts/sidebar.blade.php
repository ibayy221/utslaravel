<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Sistem Akademik</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --sidebar-width: 250px;
        }
        .sidebar {
            width: var(--sidebar-width);
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            background: #1a2b3c;
            padding-top: 1rem;
        }
        .sidebar .nav-link {
            color: #ffffff;
            padding: 0.8rem 1rem;
            opacity: 0.75;
            transition: all 0.3s;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            opacity: 1;
            background: rgba(255,255,255,0.1);
        }
        .sidebar .nav-link i {
            width: 20px;
        }
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
        }
        .logo {
            color: white;
            padding: 1rem;
            margin-bottom: 1rem;
            font-size: 1.25rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .logo i {
            margin-right: 0.5rem;
        }
        .card {
            border: none;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
        }
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            font-weight: 600;
        }
        .table th {
            font-weight: 600;
            background-color: #f8f9fa;
        }
        .btn-primary {
            background-color: #4070f4;
            border-color: #4070f4;
        }
        .btn-primary:hover {
            background-color: #2952d0;
            border-color: #2952d0;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <i class="fas fa-graduation-cap"></i>
            Sistem Akademik
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('mahasiswa*') ? 'active' : '' }}" href="{{ route('mahasiswa.index') }}">
                    <i class="fas fa-users"></i> Mahasiswa
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('kelas*') ? 'active' : '' }}" href="#">
                    <i class="fas fa-school"></i> Kelas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('matakuliah*') ? 'active' : '' }}" href="#">
                    <i class="fas fa-book"></i> Matakuliah
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dosen*') ? 'active' : '' }}" href="#">
                    <i class="fas fa-chalkboard-teacher"></i> Dosen
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-1"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>