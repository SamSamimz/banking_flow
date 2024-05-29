<nav class="navbar navbar-expand-lg mb-3 p-0">
    <div class="container-fluid px-0">
        <button class="menu-btn">&#9776; {{ __('Menu') }}</button>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                        <button wire:click='logoutUser()' class="nav-link btn btn-danger text-light">
                            <i class="fa-solid fa-right-from-bracket me-2"></i>
                            {{ __('Logout') }}
                        </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
