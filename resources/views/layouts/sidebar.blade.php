<div class="sidebar-content">
    <div id="sidebar">

        <!-- Logo -->
        <div class="logo">
            <h2 class="mb-0"><img src="{{ asset('assets/images/logo-kost.png') }}">The Kost</h2>
        </div>

        <ul class="side-menu">
            @section('sidebar')
                <li>
                    <a href="index.html" class="active">
                        <i class='bx bxs-dashboard icon'></i> Dashboard
                    </a>
                </li>

                <!-- Divider-->
                <li class="divider" data-text="STARTER">STARTER</li>

                <li>
                    <a href="#">
                        <i class='bx bx-columns icon'></i>
                        Layout
                        <i class='bx bx-chevron-right icon-right'></i>
                    </a>
                    <ul class="side-dropdown">
                        <li><a href="layout-default.html">Default Layout</a></li>
                        <li><a href="layout-top-navigation.html">Top Navigation</a></li>
                    </ul>
                </li>

                <li>
                    <a href="blank-pages.html">
                        <i class='bx bxs-meh-blank icon'></i>
                        Blank Page
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class='fa fa-th icon'></i>
                        Bootstrap
                        <i class='bx bx-chevron-right icon-right'></i>
                    </a>
                    <ul class="side-dropdown">
                        <li><a href="bootstrap-alert.html">Alert</a></li>
                        <li><a href="bootstrap-badge.html">Badge</a></li>
                        <li><a href="bootstrap-breadcrumb.html">Breadcrumb</a></li>
                    </ul>
                </li>
            @show
        </ul>

        <div class="ads">
            <div class="wrapper">
                <div class="help-icon"><i class="fa fa-circle-question fa-3x"></i></div>
                <p>Need Help with <strong>Atrana</strong>?</p>
                <a href="docs/" class="btn-upgrade">Documentation</a>
            </div>
        </div>
    </div>

</div>
