<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="{{ route('dashboard.index') }}"
                class="nav-link {{ Route::is('dashboard*') ? 'active' : 'link-dark' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('pinjam.index') }}" class="nav-link {{ Route::is('pinjam*') ? 'active' : 'link-dark' }}">
                <i class="nav-icon fas fa-table"></i>
                Pinjam
            </a>
        </li>
        <li>
            <a href="{{ route('buku.index') }}" class="nav-link {{ Route::is('buku*') ? 'active' : 'link-dark' }}">
                <i class="nav-icon fas fa-book"></i>
                Buku
            </a>
        </li>
        <li>
            <a href="{{ route('anggota.index') }}"
                class="nav-link {{ Route::is('anggota*') ? 'active' : 'link-dark' }}">
                <i class="nav-icon fas fa-solid fa-user"></i>
                Anggota
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                class="rounded-circle me-2">
            <strong>{{ Auth::user()->name }}</strong>
        </a>
        <ul class="dropdown-menu text-small shadow">
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</div>
