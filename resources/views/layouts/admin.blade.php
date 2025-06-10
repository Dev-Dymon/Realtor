<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    {{-- title and favicon --}}
    <title>Realtor - Admin Dashboard</title>
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('assets/images/favicon.png') }}' />
    {{-- title and favicon --}}


    {{-- General CSS Files --}}
    <link rel="stylesheet" href="{{ asset('assets/dashboard/admin/css/app.min.css') }}">

    {{-- Template CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/dashboard/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/admin/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/admin/bundles/summernote/summernote-bs4.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/dashboard/admin/css/datatables.css') }}"> --}}

    {{-- Custom style CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/dashboard/admin/css/custom.css') }}">
</head>

<body>

    {{-- session message success --}}
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible show fade alert-has-icon"
            style="
    position: fixed;
    top: 100px;
    z-index: 999;
    right: 50px;
    width: fit-content;
    align-items: center;
    justify-content: space-between;
">
            <div class="alert-icon"><i class="fas fa-check-circle"></i></div>
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ session('success') }}
            </div>
        </div>
    @endif
    {{-- session message success --}}

    {{-- session message error --}}
    @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible show fade alert-has-icon"
            style="
    position: fixed;
    top: 100px;
    z-index: 999;
    right: 50px;
    width: fit-content;
    align-items: center;
    justify-content: space-between;
">
            <div class="alert-icon"><i class="fas fa-check-circle"></i></div>
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ session('error') }}
            </div>
        </div>
    @endif
    {{-- session message error --}}

    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>


            {{-- navbar section --}}
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn">
                                <i data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                        data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle">
                        <a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle">
                            <i data-feather="mail"></i>
                            <span class="badge headerBadge1">6</span>
                        </a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                            <div class="dropdown-header">
                                Messages
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-message">
                                <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar
											text-white"> <img alt="image"
                                            src="assets/img/users/user-1.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">John
                                            Deo</span>
                                        <span class="time messege-text">Please check your mail !!</span>
                                        <span class="time">2 Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar text-white">
                                        <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                            Smith</span> <span class="time messege-text">Request for leave
                                            application</span>
                                        <span class="time">5 Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar text-white">
                                        <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                                            Ryan</span> <span class="time messege-text">Your payment invoice is
                                            generated.</span> <span class="time">12 Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar text-white">
                                        <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                                            Smith</span> <span class="time messege-text">hii John, I have upload
                                            doc
                                            related to task.</span> <span class="time">30
                                            Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar text-white">
                                        <img alt="image" src="assets/img/users/user-3.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                                            Joshi</span> <span class="time messege-text">Please do as specify.
                                            Let me
                                            know if you have any query.</span> <span class="time">1
                                            Days Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar text-white">
                                        <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                            Smith</span> <span class="time messege-text">Client Requirements</span>
                                        <span class="time">2 Days Ago</span>
                                    </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-list-toggle">
                        <a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg">
                            <i data-feather="bell" class="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                            <div class="dropdown-header">
                                Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                                        class="dropdown-item-icon bg-primary text-white"> <i
                                            class="fas
												fa-code"></i>
                                    </span> <span class="dropdown-item-desc"> Template update is
                                        available now! <span class="time">2 Min
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-info text-white"> <i
                                            class="far
												fa-user"></i>
                                    </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                                            Sugiharto</b> are now friends <span class="time">10 Hours
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-success text-white"> <i
                                            class="fas
												fa-check"></i>
                                    </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                                        moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                                            Hours
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-danger text-white"> <i
                                            class="fas fa-exclamation-triangle"></i>
                                    </span> <span class="dropdown-item-desc"> Low disk space. Let's
                                        clean it! <span class="time">17 Hours Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-info text-white"> <i
                                            class="fas
												fa-bell"></i>
                                    </span> <span class="dropdown-item-desc"> Welcome to Otika
                                        template! <span class="time">Yesterday</span>
                                    </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('uploads/users/' . Auth::user()->image) }}"
                                class="user-img-radious-style">
                            <span class="d-sm-none d-lg-inline-block"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">{{ Auth::user()->name }}</div>
                            <a href="{{ Auth::user()->usertype == 'admin' ? route('admin.profile') : route('admin.profile') }}"
                                class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
                            </a>
                            <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger" data-toggle="modal"
                                data-target="#basicModal" onclick="event.preventDefault();">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            {{-- navbar section --}}


            {{-- admin sidebar --}}
            @if (Auth::user()->usertype == 'admin')
                {{-- sidebar section --}}
                <div class="main-sidebar sidebar-style-2">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <a href="{{ route('admin.index') }}">
                                <img alt="image" src="{{ asset('assets/images/favicon.png') }}"
                                    class="header-logo" />
                                <span class="logo-name">Realtor</span>
                            </a>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="dropdown">
                                <a href="{{ route('admin.index') }}" class="nav-link">
                                    <i data-feather="grid"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('admin.user') }}">
                                    <i data-feather="users"></i>
                                    <span>Users</span>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('admin.agents') }}">
                                    <i data-feather="briefcase"></i>
                                    <span>Agent</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown">
                                    <i data-feather="home"></i>
                                    <span>Properties</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ route('admin.properties') }}">All Property</a>
                                    </li>
                                    <li><a class="nav-link" href="{{ route('admin.properties.add') }}">Add
                                            Property</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-link" href="vector-map.html">
                                    <i data-feather="bar-chart"></i>
                                    <span>Subscriptions</span>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="vector-map.html">
                                    <i data-feather="inbox"></i>
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="vector-map.html">
                                    <i data-feather="bell"></i>
                                    <span>Notifications</span>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('home') }}">
                                    <i data-feather="globe"></i>
                                    <span>Visit Website</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown">
                                    <i data-feather="settings"></i>
                                    <span>Site Settings</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="widget-chart.html">General Settings</a></li>
                                    <li><a class="nav-link" href="widget-chart.html">SEO Settings</a></li>
                                    <li><a class="nav-link" href="widget-chart.html">Legal Pages</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('admin.profile') }}">
                                    <i data-feather="user-check"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li data-toggle="modal" data-target="#basicModal">
                                <a class="nav-link" href="#" onclick="event.preventDefault();">
                                    <i data-feather="log-out"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
                {{-- sidebar section --}}
            @endif
            {{-- admin sidebar --}}


            {{-- agent sidebar --}}
            @if (Auth::user()->usertype == 'agent')
                {{-- sidebar section --}}
                <div class="main-sidebar sidebar-style-2">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <a href="index.html">
                                <img alt="image" src="{{ asset('assets/images/favicon.png') }}"
                                    class="header-logo" />
                                <span class="logo-name">Realtor</span>
                            </a>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="dropdown active">
                                <a href="index.html" class="nav-link">
                                    <i data-feather="monitor"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown">
                                    <i data-feather="briefcase"></i>
                                    <span>Widgets</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
                                    <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown">
                                    <i data-feather="pie-chart"></i>
                                    <span>Charts</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="chart-amchart.html">amChart</a></li>
                                    <li><a class="nav-link" href="chart-apexchart.html">apexchart</a></li>
                                    <li><a class="nav-link" href="chart-echart.html">eChart</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown">
                                    <i data-feather="feather"></i>
                                    <span>Icons</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="icon-font-awesome.html">Font Awesome</a></li>
                                    <li><a class="nav-link" href="icon-material.html">Material Design</a></li>
                                    <li><a class="nav-link" href="icon-ionicons.html">Ion Icons</a></li>
                                    <li><a class="nav-link" href="icon-feather.html">Feather Icons</a></li>
                                    <li><a class="nav-link" href="icon-weather-icon.html">Weather Icon</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown">
                                    <i data-feather="image"></i>
                                    <span>Gallery</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="light-gallery.html">Light Gallery</a></li>
                                    <li><a href="gallery1.html">Gallery 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-link" href="vector-map.html">
                                    <i data-feather="map-pin"></i>
                                    <span>Vector Map</span>
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
                {{-- sidebar section --}}
            @endif
            {{-- agent sidebar --}}

            {{-- main content --}}
            @yield('admin_dasboard')
            {{-- main content --}}


            {{-- footer section --}}
            <footer class="main-footer">
                <div class="footer-left">
                    <a href="#">Diamond Alex</a></a>
                </div>
                <div class="footer-right">
                    <a href="https://www.ipointhub.com">Ipoint Hub</a></a>
                </div>
            </footer>
            {{-- footer section --}}




            {{-- ========================= Modal section ======================= --}}

            {{-- logout modal --}}
            <div class="modal fade" id="basicModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                        </div>
                        <div class="modal-body fs-1 text-black">
                            Are you sure you want to log out
                        </div>
                        <div class="modal-footer bg-whitesmoke br d-flex align-items-center justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">cancel</button>
                            <Form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">Logout</button>
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- logout modal --}}

            {{-- ========================= Modal section ======================= --}}
        </div>
    </div>


    {{-- General JS Scripts --}}
    <script src="{{ asset('assets/dashboard/admin/js/app.min.js') }}"></script>

    {{-- JS Libraies --}}
    <script src="{{ asset('assets/dashboard/admin/bundles/apexcharts/apexchart.min.js') }}"></script>

    {{-- Page Specific JS File --}}
    <script src="{{ asset('assets/dashboard/admin/js/page/index.js') }}"></script>

    {{-- Template JS File --}}
    <script src="{{ asset('assets/dashboard/admin/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/dashboard/admin/bundles/summernote/summernote-bs4.js') }}"></script>

    {{-- Custom JS File --}}
    <script src="{{ asset('assets/dashboard/admin/js/custom.js') }}"></script>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            $('#myEditor').summernote({
                height: 200,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['codeview']]
                ]
            });

            const editorContainer = document.querySelector('#myEditor');

            
            editorContainer.addEventListener('drop', (e) => {
                if (e.dataTransfer && e.dataTransfer.files.length > 0) {
                    for (let file of e.dataTransfer.files) {
                        if (file.type.startsWith('image/')) {
                            e.preventDefault();
                            alert('Image drag-and-drop is disabled.');
                            return false;
                        }
                    }
                }
            });

           
            editorContainer.addEventListener('paste', (e) => {
                const items = e.clipboardData?.items;
                if (!items) return;
                for (let item of items) {
                    if (item.type.startsWith('image/')) {
                        e.preventDefault();
                        alert('Pasting images is disabled.');
                        return false;
                    }
                }
            });
        });
    </script>
</body>

</html>
