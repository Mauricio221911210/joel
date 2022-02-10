@extends('layout.index')

@section('content')
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-3">
        <a class="nav-link" href="{{ route('home') }}">
            <div class="card text-white bg-danger on-hover-expand-card">
                <div class="card-body">
                    <center>
                        <div>
                            <i class="bi bi-person-square text-white"></i>
                        </div>

                        <h5 class="card-title text-white fw-bold">Usuarios</h5>
                        <h6 class="card-subtitle text-white fw-bold">{{ $users->count() }}</h6>
                    </center>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3">
        <a class="nav-item nav-link" href="{{ route('client.index') }}">
            <div class="card text-center bg-success on-hover-expand-card">
                <div class="card-body">
                    <div>
                        <i class="bi bi-people-fill text-white"></i>
                    </div>
                    <h5 class="card-title text-white fw-bold">Clientes</h5>
                    <h6 class="card-subtitle text-white fw-bold"> {{ $clients->count() }} </h6>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3">
        <a class="nav-item nav-link" href="{{ route('provider.index') }}">
            <div class="card text-center bg-warning on-hover-expand-card">
                <div class="card-body">
                    <div>
                        <i class="bi bi-truck text-white"></i>
                    </div>
                    <h5 class="card-title text-white fw-bold">Proveedores</h5>
                    <h6 class="card-subtitle text-white fw-bold">{{ $providers->count() }}</h6>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3">
        <a class="nav-link" href="{{ route('product.index') }}">
            <div class="card text-center bg-info on-hover-expand-card">
                <div class="card-body">
                    <div>
                        <i class="bi bi-basket text-white"></i>
                    </div>
                    <h5 class="card-title text-white fw-bold">Productos</h5>
                    <h6 class="card-subtitle text-white fw-bold">{{$products->count() }}</h6>
                </div>
            </div>
        </a>
    </div>
</div>
