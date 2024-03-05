@props(['activePage'])

<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-9 fixed-start ms-3 bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center {{ $activePage == 'dashboard' ? ' active bg-gradient-primary' : '' }}" 
            href=" {{ route('dashboard') }} ">
            <img src="{{ asset('assets') }}/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-2 font-weight-bold text-light">MedSync</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-3">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <li class="nav-item">
                    <a class="nav-link text-white {{ $activePage == 'user-management' ? ' active bg-gradient-primary' : '' }} "
                        href="{{ route('user-management') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center"></i>
                        </div>
                        <span class="nav-link-text ms-1">User Management</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ $activePage == 'user-management' ? ' active bg-gradient-primary' : '' }} "
                        href="{{ route('user-management') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center"></i>
                        </div>
                        <span class="nav-link-text ms-1">Inventory</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ $activePage == 'tables' ? ' active bg-gradient-primary' : '' }} "
                        href="{{ route('tables') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-lg ps-1 pe-2 text-center material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Point Of Sale</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ $activePage == 'user-management' ? ' active bg-gradient-primary' : '' }} "
                        href="{{ route('user-management') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center"></i>
                        </div>
                        <span class="nav-link-text ms-1">Transaction Records</span>
                    </a>
                </li>
            </li>
        </ul>
</aside>
