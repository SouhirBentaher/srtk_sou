@php
    $current_route = request()
        ->route()
        ->getName();
@endphp
<!-- Main Sidebar Container -->
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ auth()->user()->name }}</div>
        <!--test wsolllllllllllt el houniiii-->
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a href="{{ route('dashboard') }}" class="nav-link {{ $current_route == 'dashboard' ? 'active' : '' }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tableau de board</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a href="{{ route('users.index') }}" class="nav-link {{ $current_route == 'users.index' ? 'active' : '' }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Users</span></a>
    </li>

    <!-- Divider eli 3ala jnabb  -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a href="{{ route('tarifs.index') }}" class="nav-link {{ $current_route == 'tarifs.index' ? 'active' : '' }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Tarifs </span>
        </a>

        <a href="{{ route('lycees.index') }}" class="nav-link {{ $current_route == 'lycees.index' ? 'active' : '' }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Type Etablissement</span>
        </a>
        <a href="{{ route('facultes.index') }}"
            class="nav-link {{ $current_route == 'facultes.index' ? 'active' : '' }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Etablissement</span>
        </a>
        <a href="{{ route('stagieres.index') }}"
            class="nav-link {{ $current_route == 'stagieres.index' ? 'active' : '' }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Categorie</span>
        </a>
        <a href="{{ route('lignes.index') }}" class="nav-link {{ $current_route == 'lignes.index' ? 'active' : '' }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Ligne</span>
        </a>
        <a href="{{ route('stations.index') }}"
            class="nav-link {{ $current_route == 'stations.index' ? 'active' : '' }}">
            <i class="fas fa-fw fa-table"></i>
            <span>-------- </span>
        </a>
        <a href="{{ route('abonnements.index') }}"
            class="nav-link {{ $current_route == 'abonnements.index' ? 'active' : '' }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Abonnement</span>
        </a>

        <a href="{{ route('lignes.index') }}" class="nav-link {{ $current_route == 'lignes.index' ? 'active' : '' }}">
            <i class="fas fa-fw fa-table"></i>
            <span>-----------</span>
        </a>
        <a href="{{ route('tarifs.index') }}" class="nav-link {{ $current_route == 'tarifs.index' ? 'active' : '' }}">
            <i class="fas fa-fw fa-table"></i>
            <span>------------</span>
        </a>
    </li>


    {{-- <!-- Heading -->
    <div class="sidebar-heading">
        URBAIN
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Abonnement</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Abonnement </a>
                <a class="collapse-item" href="cards.html">Abonnement Imprimer</a>
            </div>
        </div>

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Abonnement S2 </span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Abonnement </a>
                <a class="collapse-item" href="cards.html">Abonnement Imprimer</a>
            </div>
        </div>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Abonnement Ete </span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Abonnement </a>
                <a class="collapse-item" href="cards.html">Abonnement Imprimer</a>
            </div>
        </div>

    </li>
    <!-- Heading -->
    <div class="sidebar-heading">
        INTER-URBAIN
    </div>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Abonnement</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Abonnement </a>
                <a class="collapse-item" href="cards.html">Abonnement Imprimer</a>

            </div>
        </div>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Abonnement S2</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Abonnement </a>
                <a class="collapse-item" href="cards.html">Abonnement Imprimer</a>

            </div>
        </div>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Abonnement Ete</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Abonnement </a>
                <a class="collapse-item" href="cards.html">Abonnement Imprimer</a>

            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        ORDINAIRE
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a href="{{ route('users.index') }}" class="nav-link {{ $current_route == 'users.index' ? 'active' : '' }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Urbain</span>
        </a>
        <a href="{{ route('users.index') }}" class="nav-link {{ $current_route == 'users.index' ? 'active' : '' }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Inter Urbain</span>
        </a>
    </li> --}}
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
