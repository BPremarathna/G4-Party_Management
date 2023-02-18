<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - DREAM</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap1.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <script src="https://kit.fontawesome.com/9c1531a844.js" crossorigin="anonymous"></script>
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: #833948;border-color: #833948;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon "><img class="logo-img" src="images/logo.png"  width="40" height="40"></div>
                    <div class="sidebar-brand-text mx-3"><span>DREAM</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href=""><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}"><i class="fa-light fa-house-heart"></i><span>Home Page</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i class="far fa-user-circle"></i><span>Login</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-circle"></i><span>Register</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-table"></i><span>Booking</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa-light fa-users"></i><span>Users</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa-light fa-users"></i><span>Suppliers</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa-light fa-hotel"></i><span>Venue</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa-regular fa-lights-holiday"></i><span>Decoration</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa-light fa-cards"></i><span>Invitation</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa-light fa-cake-slice"></i><span>cake</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa-light fa-speakers"></i><span>Entertainment</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa-light fa-camera-movie"></i><span>Photography</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('galleryshow') }}"><i class="fa-light fa-users"></i><span>Gallery</span></a></li>
                </ul>

                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button" style="--bs-primary: #833948;--bs-primary-rgb: 131,57,72;background: #833948;border-color: #833948;"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>


                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4" style="border-color: #833948;">
                        <h3 class="text-dark mb-0">Dashboard</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#" style="--bs-primary: #833948;--bs-primary-rgb: 131,57,72;--bs-info: #833948;--bs-info-rgb: 131,57,72;background: #833948;border-color: #833948;"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="{{ asset('js/bootstrap1.min.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
</body>

</html>
