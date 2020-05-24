@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Zonas</h3>
            </div>
            <div class="col text-right">
                <a href="{{route('zones.create')}}" class="btn btn-sm btn-success">
                    <span class="btn-inner--icon">
                        <i class="ni ni-pin-3"></i>
                        Nuevo
                    </span>
                </a>
            </div>
        </div>
    </div>
    @if(session('notification'))
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                {{ session('notification') }}
            </div>
        </div>
    @endif
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
                    <form action="{{ route('zones.destroy', $zone->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('zones.edit', $zone->id) }}" class="btn btn-sm btn-primary">
                            <span class="btn-inner--icon">
                                <i class="ni ni-settings"></i>
                                Editar
                            </span>
                        </a>
                        <button class="btn btn-sm btn-danger" type="submit">
                            <span class="btn-inner--icon">
                                <i class="ni ni-fat-remove"></i>
                                Eliminar
                            </span>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


