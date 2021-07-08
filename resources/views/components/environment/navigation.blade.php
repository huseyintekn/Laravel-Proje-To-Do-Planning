<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav__logo">
                <i class='bx bx-layer nav__logo-icon'></i>
                <span class="nav__logo-name">HSYNTKN</span>
            </a>

            <div class="nav__list">
                <a href="{{route('dashboard')}}" class="nav__link active">
                    <i class='bx bx-grid-alt nav__icon' ></i>
                    <span class="nav__name">Dashboard</span>
                </a>
                <a href="{{route('provider.index')}}" class="nav__link">
                    <i class='bx bx-user nav__icon' ></i>
                    <span class="nav__name"></span>
                </a>
            </div>
        </div>

        <a href="#" class="nav__link">
            <i class='bx bx-log-out nav__icon' ></i>
            <span class="nav__name">Log Out</span>
        </a>
    </nav>
</div>
