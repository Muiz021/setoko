<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="" class="app-brand-link my-4">
            <span class="app-brand-text demo menu-text fw-bolder fs-3">Teman Masjid</span>
        </a>

        <a href="javascript:void(0);"
            class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{request()->is('dashboard-admin') ? 'active' : '' }} mb-3">
            <a href="{{'/dashboard-admin'}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li  class="menu-item {{request()->is('menu-baju') ? 'active' : '' }} mb-3">
            <a href="{{'/menu-baju'}}" class="menu-link">
                <i class="menu-icon bi bi-tags"></i>
                <div data-i18n="Analytics">Baju</div>
            </a>
        </li>
        <li class="menu-item {{request()->is('menu-celana') ? 'active' : '' }} mb-3">
            <a href="{{'/menu-celana'}}" class="menu-link">
                <i class="menu-icon bi bi-tags"></i>
                <div data-i18n="Analytics">Celana</div>
            </a>
        </li>
        <li class="menu-item {{request()->is('menu-baju-muslim') ? 'active' : '' }} mb-3">
            <a href="{{'/menu-baju-muslim'}}" class="menu-link">
                <i class="menu-icon bi bi-tags"></i>
                <div data-i18n="Analytics">Baju Muslim</div>
            </a>
        </li>
    </ul>
</aside>
