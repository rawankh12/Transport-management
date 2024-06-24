<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    @include('layouts.header')
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button id="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Admin</a>
                </div>
            </div>
            {{-- <!-- إضافة الشعار هنا -->
            <div class="sidebar-logo">
                <a href="#">
                    <img src="{{ asset('images/bus.jpg') }}" alt="Logo" class="img-fluid" />
                </a>
            </div> --}}
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown {{ request()->is('requests*') ? 'active' : '' }}" data-bs-toggle="collapse" data-bs-target="#requerment" aria-expanded="false" aria-controls="requerment">
                        <i class="lni lni-text-align-justify"></i>
                        <span>الطلبات</span>
                    </a>
                    <ul id="requerment" class="sidebar-dropdown collapse {{ request()->is('requests*') ? 'show' : '' }}" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link {{ request()->is('requests/employment') ? 'active' : '' }}">طلبات التوظيف</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link {{ request()->is('requests/add-trip') ? 'active' : '' }}">طلبات اضافة رحلة</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link {{ request()->is('requests/edit-trip') ? 'active' : '' }}">طلبات تعديل رحلة</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link {{ request()->is('requests/offers-discounts') ? 'active' : '' }}">طلبات العروض والحسومات</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('supervisors.index') }}" class="sidebar-link {{ request()->is('supervisors') ? 'active' : '' }}">
                        <i class="lni lni-users"></i>
                        <span>المشرفين</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link {{ request()->is('branches') ? 'active' : '' }}">
                        <i class="lni lni-travel"></i>
                        <span>الافرع</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link {{ request()->is('records') ? 'active' : '' }}">
                        <i class="lni lni-files"></i>
                        <span>السجلات</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link {{ request()->is('logout') ? 'active' : '' }}">
                        <i class="lni lni-exit"></i>
                        <span>تسجيل خروج</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link {{ request()->is('notifications') ? 'active' : '' }}">
                        <i class="lni lni-popup"></i>
                        <span>اشعارات</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <span>-------</span>
                </a>
            </div>
        </aside>
        <div class="content p-4">
            @yield('content')
        </div>
    </div>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-gradient@latest/dist/chartjs-plugin-gradient.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
