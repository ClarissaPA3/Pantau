<div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
    </div>
</div>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="/" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/monitoring/Agrafik" class="nav-link">
                <i class="nav-icon fas fa-signal"></i>
                <p>Tegangan Arus PV</p>

            </a>
        </li>
        <li class="nav-item">
            <a href="/monitoring/Bgrafik" class="nav-link">
                <i class="nav-icon fas fa-signal"></i>
                <p>Tegangan Arus Baterai</p>

            </a>
        </li>
        <li class="nav-item">
            <a href="/monitoring/outputgrafik" class="nav-link">
                <i class="nav-icon fas fa-signal"></i>
                <p>Tegangan Arus Output</p>

            </a>
        </li>

        <li class="nav-item">
            <a href="/laporan" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>Laporan Kejadian</p>

            </a>
        </li>
        <li class="nav-item">
            <a href="/plts" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>Data PLTS</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/admin" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Data Users</p>
            </a>
        </li>

        
        <?php if (logged_in()) : ?>
        <li class="nav-item">
            <a href="/logout" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>Logout</p>
            </a>
        </li>
        <?php else : ?>
        <li class="nav-item">
            <a href="/login" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>Login</p>
            </a>
        </li>
        <?php endif; ?>

    </ul>
</nav>