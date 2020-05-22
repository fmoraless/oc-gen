@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Zonas</h3>
            </div>
            <div class="col text-right">
                <a href="{{route('zones.create')}}" class="btn btn-sm btn-primary">
                    <span class="btn-inner--icon">
                        <i class="ni ni-pin-3"></i>
                        Nuevo
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Zonas table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($zones as $zone)
                <tr>
                <th scope="row">
                    {{$zone->name}}
                </th>
                <td>
                    {{ $zone->description }}
                </td>
                <td>
                    <a href="" class="btn btn-sm btn-primary">
                        <span class="btn-inner--icon">
                            <i class="ni ni-settings"></i>
                            Editar
                        </span>
                    </a>
                    <a href="" class="btn btn-sm btn-danger">
                        <span class="btn-inner--icon">
                            <i class="ni ni-fat-remove"></i>
                        </span>
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


