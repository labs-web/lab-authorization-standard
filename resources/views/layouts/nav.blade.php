<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="">
                <img
                    src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
                    height="15"
                    alt="MDB Logo"
                    loading="lazy"
                />
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('main')}}">Liste des taches</a>
                </li>
                @can('create-Task')
                <li class="nav-item">
                    <a class="nav-link" href="{{route('add.task')}}">Ajouté une tache</a>
                </li>
                @endcan
            </ul>

            <form class="form-inline my-2 my-lg-0" id="search-form">
                <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search" name="search" id="search-input">
            </form>

            <!-- User dropdown -->
            <div class="dropdown mx-2">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>{{Auth()->user()->name}}</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end w-auto" aria-labelledby="dropdownMenuButton">
                    <!-- Dropdown items -->
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Paramaitre</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <form action="{{route('logout')}}" method="POST">
                      @csrf
                      @method('delete')
                    <li><button class="dropdown-item bg-danger text-dark">Se deconnecter</button></li>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</nav>
