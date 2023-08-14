<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('backend/assets/brand/coreui.svg') }}"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('backend/assets/brand/coreui.svg') }}"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('backend/vendors/@coreui/icons/svg/free.svg') }}"></use>
                </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span>
            </a>
        </li>
        <li class="nav-title">Theme</li>
        <li class="nav-item">
            <a class="nav-link" href="colors.html">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('backend/vendors/@coreui/icons/svg/free.svg') }}"></use>
                </svg> Colors
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="typography.html">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('backend/vendors/@coreui/icons/svg/free.svg') }}"></use>
                </svg> Typography
            </a>
        </li>
        <li class="nav-title">Components</li>
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('backend/vendors/@coreui/icons/svg/free.svg') }}"></use>
                </svg> Base
            </a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="base/accordion.html"><span class="nav-icon"></span>
                        Accordion
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"></span>
                        Breadcrumb
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-divider"></li>
        <li class="nav-title">Settings</li>
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('backend/vendors/@coreui/icons/svg/free.svg') }}"></use>
                </svg> Pages
            </a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="login.html" target="_top">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('backend/vendors/@coreui/icons/svg/free.svg') }}"></use>
                        </svg> Login
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item mt-auto">
            <a class="nav-link" href="https://coreui.io/docs/templates/installation/" target="_blank">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('backend/vendors/@coreui/icons/svg/free.svg') }}"></use>
                </svg> Docs
            </a>
        </li>

    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
