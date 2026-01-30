<div class="vertical-menu">
    <div class="h-100" data-simplebar="">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">
                    Menu
                </li>
                <li>
                    <a href="{{ route('panel.dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>

                <li class="menu-title" key="t-apps">
                    Inicio
                </li>

                <li>
                    <a href="{{ route('banners.index') }}" class="waves-effect">
                        <i class="bx bx-image-add"></i> <span key="t-banners">
                            Banners
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('programs.index') }}" class="waves-effect">
                        <i class="bx bx-grid-alt"></i>
                        <span key="t-programs">
                            Programas
                        </span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
