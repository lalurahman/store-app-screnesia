<ul
    class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
    id="accordionSidebar"
>

    <!-- Sidebar - Brand -->
    <a
        class="sidebar-brand d-flex align-items-center justify-content-center"
        href="{{ route('admin.dashboard') }}"
    >
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Store-App</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a
            class="nav-link"
            href="{{ route('admin.dashboard') }}"
        >
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>
    <!-- Nav Item - User -->
    <li class="nav-item">
        <a
            class="nav-link"
            href="{{ route('admin.user.index') }}"
        >
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li>

    <!-- Nav Item - Category -->
    <li class="nav-item">
        <a
            class="nav-link"
            href="{{ route('admin.category.index') }}"
        >
            <i class="fas fa-fw fa-table"></i>
            <span>Category Product</span></a>
    </li>

    <li class="nav-item">
        <a
            class="nav-link"
            href="{{ route('admin.product.index') }}"
        >
            <i class="fas fa-fw fa-table"></i>
            <span>Product</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button
            class="rounded-circle border-0"
            id="sidebarToggle"
        ></button>
    </div>

    <!-- Sidebar Message -->

</ul>
