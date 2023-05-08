@extends('admin.main-layout')
@section('content-header')
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

        <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin
                    </span>
                    <img class="img-profile rounded-circle" src="{{ asset('admin_assets/img/undraw_profile.svg') }}">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.content-header -->
@endsection
@section('body')

    <div class="card" style="margin:20px;">
        <div class="card-header">Create New Etablissement</div>
        <div class="card-body">
            <form action="{{ url('admin/faculte') }}" method="post">
                {!! csrf_field() !!}
                <h2><label>Nom Etablissement</label></h2>
                <input type="text" name="nom" id="nom" class="form-control" required></br>

                <h2> <label>Type Etablissement</label></h2>
                <div class="form-group">
                    <select name="type_etablissements_id" id="type_etablissements_id" class="form-control">
                        <option value="">-- Sélectionner Type Etablissement --</option>
                        @foreach ($type_etablissements as $type_etablissement)
                            <option value="{{ $type_etablissement->id }}">{{ $type_etablissement->labelle }}</option>
                        @endforeach
                    </select>
                </div></br>
                <div class="row">

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <label class="single-check">
                            <input type="checkbox" name="is_prive" value="Publique">
                            Publique
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <label class="single-check">
                            <input type="checkbox" name="is_prive" value="Privé">
                            Privé
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div></br>
                <input type="submit" value="Enregistrer" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
