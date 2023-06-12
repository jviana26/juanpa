@props(['activePage'])

<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" {{ route('dashboard') }} ">
           <img src="{{ asset('img/QUEHOME.png') }}" class="navbar-brand-img h-100" alt="main_logo"> 
            <span class="ms-2 font-weight-bold text-white"><!-- Polita 7u7 --></span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'dashboard' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'asesor' ? ' active bg-gradient-primary' : '' }} "
                    href="#">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Asesor</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'Backoffice' ? ' active bg-gradient-primary' : '' }} "
                    href="#">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">comment</i>
                    </div>
                    <span class="nav-link-text ms-1">Backoffice</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'Seguimiento' ? ' active bg-gradient-primary' : '' }} "
                    href="#">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">follow_the_signs</i>
                    </div>
                    <span class="nav-link-text ms-1">Seguimiento</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'Legalizacion' ? ' active bg-gradient-primary' : '' }} "
                    href="#">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">policy</i>
                    </div>
                    <span class="nav-link-text ms-1">Legalizacion</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100  navbar-nav" style="margin-top: 30px">
        <li class="nav-item">
            <a class="nav-link text-white {{ $activePage == 'Perfil' ? 'active bg-gradient-primary' : '' }} "
                href="#">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i style="font-size: 1.2rem;" class="fas fa-user-circle ps-2 pe-2 text-center"></i>
                </div>
                <span class="nav-link-text ms-1">Perfil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ $activePage == 'Usuarios' ? ' active bg-gradient-primary' : '' }} "
                href="{{ route('users') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons">people</i>
                </div>
                <span class="nav-link-text ms-1">Usuarios</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ $activePage == 'Roles' ? ' active bg-gradient-primary' : '' }} "
                href="{{ route('roles.index') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons">supervisor_account</i>
                </div>
                <span class="nav-link-text ms-1">Roles</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ $activePage == 'Permisos' ? ' active bg-gradient-primary' : '' }} "
                href="{{ route('permissions.index') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons">bubble_chart</i>
                </div>
                <span class="nav-link-text ms-1">Permisos</span>
            </a>
        </li>        
    </div>
</aside>
