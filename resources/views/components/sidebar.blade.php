<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
        </div>
        <div class="sidebar-brand-text mx-3">IKASI</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::routeIs('home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Main Menu
    </div>

    <!-- Nav Item - Articles Collapse Menu -->
    <li class="nav-item {{ Request::routeIs('articles.index') | Request::routeIs('articles.create') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseArticles"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Article</span>
        </a>
        <div id="collapseArticles"
            class="collapse {{ Request::routeIs('articles.index') | Request::routeIs('articles.create') ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('articles.index') }}"><i class="fas fa-fw fa-rss"></i>
                    <span>
                        List
                        Articles
                    </span>
                </a>
                <a class="collapse-item" href="{{ route('articles.create') }}"><i class="fas fa-fw fa-plus"></i>
                    <span>
                        Add
                        Article
                    </span>
                </a>
                <a class="collapse-item" href="#"><i class="fas fa-fw fa-th-list"></i>
                    <span>
                        Category Article
                    </span>
                </a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Events Collapse Menu -->
    <li class="nav-item {{ Request::routeIs('events.index') | Request::routeIs('events.create') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvents"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Events</span>
        </a>
        <div id="collapseEvents"
            class="collapse {{ Request::routeIs('events.index') | Request::routeIs('events.create') ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('events.index') }}"><i class="fas fa-fw fa-rss"></i>
                    <span>
                        List
                        Events
                    </span>
                </a>
                <a class="collapse-item" href="{{ route('events.create') }}"><i class="fas fa-fw fa-plus"></i>
                    <span>
                        Add
                        Event
                    </span>
                </a>
                <a class="collapse-item" href="buttons.html"><i class="fas fa-fw fa-th-list"></i>
                    <span>
                        Category Event
                    </span>
                </a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Locations Collapse Menu -->
    <li
        class="nav-item {{ Request::routeIs('locations.index') | Request::routeIs('locations.create') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLocations"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-map"></i>
            <span>Locations</span>
        </a>
        <div id="collapseLocations"
            class="collapse {{ Request::routeIs('locations.index') | Request::routeIs('locations.create') ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('locations.index') }}"><i class="fas fa-fw fa-rss"></i>
                    <span>
                        List
                        Locations
                    </span>
                </a>
                <a class="collapse-item" href="{{ route('locations.create') }}"><i class="fas fa-fw fa-plus"></i>
                    <span>
                        Add
                        Location
                    </span>
                </a>
                <a class="collapse-item" href="buttons.html"><i class="fas fa-fw fa-th-list"></i>
                    <span>
                        Category Location
                    </span>
                </a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
