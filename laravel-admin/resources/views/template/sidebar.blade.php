<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/home') }}">
        <div class="sidebar-brand-icon"><i class="fas fa-tachometer-alt"></i></div>
        <div class="sidebar-brand-text mx-3">Laravel Admin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/home') }}"><i class="fas fa-fw fa-home"></i><span>Home</span></a>
    </li>
    <li class="nav-item {{ request()->is('product') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/product') }}"><i class="fas fa-fw fa-box"></i><span>Product</span></a>
    </li>
    <li class="nav-item {{ request()->is('service') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/service') }}"><i class="fas fa-fw fa-concierge-bell"></i><span>Service</span></a>
    </li>
    <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/contact') }}"><i class="fas fa-fw fa-envelope"></i><span>Contact</span></a>
    </li>
    <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/about') }}"><i class="fas fa-fw fa-info-circle"></i><span>About</span></a>
    </li>
    <li class="nav-item {{ request()->is('admin*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/admin') }}"><i class="fas fa-fw fa-user-shield"></i><span>Admin</span></a>
    </li>
    <li class="nav-item">
        <form method="post" action="/logout">
            @csrf
            <button type="submit" class="nav-link btn btn-link w-100 text-left border-0"><i class="fas fa-fw fa-sign-out-alt"></i><span>Logout</span></button>
        </form>
    </li>
</ul>
