<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a
            class="navbar-brand text-danger"
            href="#"
        >
            Store-App
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
            class="collapse navbar-collapse"
            id="navbarSupportedContent"
        >
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                        aria-current="page"
                        href="{{ route('home') }}"
                    >Home</a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('product') ? 'active' : '' }}"
                        href="{{ route('product') }}"
                    >Product</a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                        href="{{ route('about') }}"
                    >About</a>
                </li>
            </ul>
            @if (Auth::check())
                <a
                    href="{{ route('admin.dashboard') }}"
                    class="btn btn-outline-danger"
                >
                    {{ Auth::user()->name }}
                </a>
            @else
                <a
                    href="{{ route('login') }}"
                    class="btn btn-outline-danger me-2"
                >
                    Login
                </a>
                <a
                    href="{{ route('register') }}"
                    class="btn btn-danger"
                >
                    Register
                </a>
            @endif
        </div>
    </div>
</nav>
