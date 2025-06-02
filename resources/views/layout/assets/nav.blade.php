@php
$employee = null;
$people = null;

if (auth()->check() && auth()->user()->userReference && auth()->user()->userReference->reference) {
    $employee = auth()->user()->userReference->reference;
    $employee->load('people');
    $people = $employee->people;
}

$isStudent = auth()->user()->userReference->reference_type === "App\\Models\\Student";
@endphp

<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box">
        <a href="index.html" class="logo-dark">
            <img src="{{ asset('assetsa/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
            <img src="{{ asset('assetsa/images/logo-dark.png') }}" class="logo-lg" alt="logo dark">
        </a>
        <a href="index.html" class="logo-light">
            <img src="{{ asset('assetsa/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
            <img src="{{ asset('assetsa/images/logo-light.png') }}" class="logo-lg" alt="logo light">
        </a>
    </div>

    <!-- Saldo hanya untuk student -->
    @if($isStudent && $people)
        <div class="px-3 py-2 text-center border-bottom">
            <div class="text-muted" style="font-size: 0.9rem;">Saldo Anda</div>
            <div class="fw-bold" style="font-size: 1.2rem;">
Rp {{ number_format (auth()->user()->userReference->reference->saldo->saldo ?? 0, 0, ',','.') }}
            </div>
        </div>
    @endif

    <!-- Tombol untuk buka/tutup sidebar -->
    <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
        <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
    </button>

    <div class="scrollbar" data-simplebar>
        <ul class="navbar-nav" id="navbar-nav">

            <li class="menu-title">General</li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Dashboard </span>
                </a>
            </li>

            @if($isStudent)
                {{-- MENU KHUSUS STUDENT --}}
                <li class="menu-title mt-2">Order Menu</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('order.index') }}">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:cart-large-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Order </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('order.history') }}">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:history-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> History Pembelian </span>
                    </a>
                </li>
            @else
                {{-- MENU UNTUK EMPLOYEE / NON-STUDENT --}}
                <li class="menu-title mt-2">Users</li>
                <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarRoles" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarRoles">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:user-speak-rounded-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Users </span>
                    </a>
                    <div class="collapse" id="sidebarRoles">
                        <ul class="nav sub-navbar-nav">
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{ route('student') }}">Student</a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{ route('employee') }}">Employee</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title mt-2">Management Store</li>
                <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarSellers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSellers">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:shop-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Management </span>
                    </a>
                    <div class="collapse" id="sidebarSellers">
                        <ul class="nav sub-navbar-nav">
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{ route('room_management.room.tampilR') }}">Room</a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{ route('product_management.product.tampilP') }}">Product</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title mt-2">Setting</li>
                <li class="nav-item">
                    <a class="nav-link" href="settings.html">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Settings </span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>
