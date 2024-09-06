<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <style>
        body {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }
        .card {
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
        }
        .sidebar {
            width: 250px;
            background: #007bff;
            color: white;
            padding-top: 1rem;
            transition: width 0.3s, transform 0.3s;
            position: relative;
            z-index: 1000;
            text-align: center;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            transition: background 0.3s;
        }
        .sidebar a:hover {
            background: #cfd6de;
        }
        .sidebar.collapsed {
            width: 0;
            padding-top: 0;
            overflow: hidden;
        }
        .content {
            flex: 1;
            padding: 2px;
            overflow-y: auto;
            transition: margin-left 0.3s;
        }
        .header, .footer {
            background: #f8f9fa;
            padding: 10px;
        }
        .toggle-btn {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 1001;
        }
        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }
            .sidebar {
                width: 250px;
                height: 100vh;
                position: absolute;
                top: 0;
                left: -250px;
                z-index: 999;
                transform: translateX(0);
            }
            .sidebar.open {
                left: 0;
            }
            .toggle-btn {
                left: 10px;
                top: 10px;
            }
            .content {
                margin-left: 0;
                width: 100%;
            }
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            
            border-bottom: 1px solid #dee2e6;
        }
        .header .center {
            flex-grow: 1;
            text-align: center;
        }
        .header .right {
            display: flex;
            align-items: center;
        }
        .header .right a {
            margin-left: 15px;
        }


         /* Centering the loader on the screen */
         .loader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(81, 2, 2, 0.8);
            z-index: 9999;
        }
        .traffic-loader {
  width: 50px;
  height: 50px;
  --c: radial-gradient(farthest-side, #fff 92%, #0000);
  background: var(--c) 50% 0, var(--c) 50% 100%, var(--c) 100% 50%,
    var(--c) 0 50%;
  background-size: 10px 10px;
  background-repeat: no-repeat;
  animation: s8 1s infinite;
  position: relative;
}

.traffic-loader::before {
  content: "";
  position: absolute;
  inset: 0;
  margin: 3px;
  background: repeating-conic-gradient(#0000 0 35deg, #fff 0 90deg);
  -webkit-mask: radial-gradient(farthest-side, #0000 calc(100% - 3px), #000 0);
  border-radius: 50%;
}

@keyframes s8 {
  100% {
    transform: rotate(0.5turn);
  }
}

        

    </style>
</head>
<body>
    <div class="loader-container">
        <div class="traffic-loader"></div>
    </div>
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    <nav id="sidebarMenu" class="d-lg-block sidebar collapse bg-white">
        <!-- Sidebar content -->
        <div class="position-sticky">
          
            <div class="list-group list-group-flush mx-3 mt-0">
                <!-- Sidebar items -->
                <div class="loader"></div>
            
                        <h4 class="text-center bg-white text-dark">HIIT<img src="{{ asset('assets/img/hitlogo.png') }}" style="width: 16%;"/>  </h4>
                        <a href="{{ route('dashboard') }}" class="ripple"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                        <a href="{{ route('home') }}" class="ripple"><i class="fas fa-home"></i> Home</a>
                        <a href="{{ route('course') }}" class="ripple"><i class="fas fa-book"></i> Course</a>
                        <a href="{{ route('studentreg') }}" class="ripple"><i class="fas fa-clipboard-list"></i>Student Reg</a>
                        <a href="{{ route('admission') }}" class="ripple"><i class="fas fa-user-check"></i> admission</a>
                        <a href="{{ route('profile') }}" class="ripple"><i class="fas fa-user"></i> Profile</a>
                        <a href="{{ route('logout') }}" class="ripple"><i class="fas fa-sign-out-alt"></i> Logout</a>

                       
                        </div>
        </div>
    </nav>














    {{-- <div class="sidebar">
        <h4 class="text-center bg-white text-dark">HIIT<img src="{{ asset('assets/img/hitlogo.png') }}" style="width: 16%;"/>  </h4>
        <a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a>
        <a href="{{ route('course') }}"><i class="fas fa-book"></i> Course</a>
        <a href="{{ route('studentreg') }}"><i class="fas fa-clipboard-list"></i>Student Reg</a>
        <a href="{{ route('admission') }}"><i class="fas fa-user-check"></i> admission</a>
        <a href="{{ route('profile') }}"><i class="fas fa-user"></i> Profile</a>
        <a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
        
    </div> --}}












    <div class="content">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
        
    </div>
   
    <script>
 window.addEventListener('load', function() {
            setTimeout(function() {
                document.querySelector('.loader-container').style.display = 'none';
            }, 1000);
        });


        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            const content = document.querySelector('.content');
            sidebar.classList.toggle('open');
            if (sidebar.classList.contains('open')) {
                sidebar.style.transform = 'translateX(0)';
                content.style.marginLeft = '0px';
            } else {
                sidebar.style.transform = 'translateX(-250px)';
                content.style.marginLeft = '0px';
            }
        }

        window.addEventListener('resize', () => {
            const sidebar = document.querySelector('.sidebar');
            const content = document.querySelector('.content');
            if (window.innerWidth <= 768) {
                sidebar.classList.remove('open');
                sidebar.style.transform = 'translateX(-250px)';
                content.style.marginLeft = '0';
            }
        });
    </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
