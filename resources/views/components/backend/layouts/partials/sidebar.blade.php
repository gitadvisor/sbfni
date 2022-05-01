<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            @can('admin') 
            <div class="nav">
                <div class="sb-sidenav-menu-heading">List</div>
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Home
                </a>
                <a class="nav-link" href="{{ route('notices.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                   Notice
                </a>
                <a class="nav-link" href="{{ route('events.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Events
                </a>
                <a class="nav-link" href="{{ route('news.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    News
                </a>
                <a class="nav-link" href="{{ route('teachers.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Teachers
                </a>
                <a class="nav-link" href="{{ route('quotations.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Quotation
                </a>

                <a class="nav-link" href="{{ route('course.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Course
                </a>

                <a class="nav-link" href="{{ route('section.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Section
                </a>

                <a class="nav-link" href="{{ route('markdestribution.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Mark Destribution
                </a>

                <a class="nav-link" href="{{ route('year.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                   Year
                </a>
                <a class="nav-link" href="{{ route('markinput.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Mark Input
                </a>




                {{--@can('user-management')--}}

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    User Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('roles.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Role
                        </a>
                        <a class="nav-link" href="{{ route('users.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Users
                        </a>
                    </nav>
                </div>
                {{--@endcan--}}

            </div>
            @endcan

            @can('student') 
            <div class="nav">
                <div class="sb-sidenav-menu-heading">List</div>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Profile
                </a>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                   Semester
                </a>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Result
                </a>

            </div>
            @endcan
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
           {{ auth()->user()->role->name ?? "" }}
        </div>
    </nav>
</div>


