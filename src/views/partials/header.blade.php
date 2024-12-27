<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="#">
            <img src="{{ url('roleassign-logo') }}" alt="Logo" class="mb-2">
        </a>

        <div class="vl border-start mx-5 d-none d-lg-block" style="height: 50px;"></div>


        <div class="col-lg-1 d-flex justify-content-center">
            <a href="#" class="d-flex align-items-center back-icon">
                <img src="{{ url('back-icon') }}" alt="Back">
            </a>
        </div>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link ms-5 {{ request()->routeIs('roles.*') ? 'active' : '' }}"
                        href="{{ route('roles.index') }}">Roles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-5 {{ request()->routeIs('permissions.*') ? 'active' : '' }}"
                        href="{{ route('permissions.index') }}">Permissions</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link ms-5 {{ request()->routeIs('permission-groups.*') ? 'active' : '' }}"
                        href="{{ route('permission-groups.index') }}">Permission Group</a>
                </li>
            </ul>

            <form class="d-flex d-none d-lg-block">
                <img src="{{ url('setting-icon') }}" alt="Settings">
            </form>
        </div>
    </div>


</nav>
