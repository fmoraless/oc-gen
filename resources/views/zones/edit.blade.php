@extends('layouts.panel')

@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Editar Zona</h3>
                </div>
                <div class="col text-right">
                    <a href="{{route('zones.index')}}" class="btn btn-sm btn-default">
                    <span class="btn-inner--icon">
                        <i class="ni ni-pin-3"></i>
                        Cancelar y volver
                    </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Zonas Form Create -->
        <div class="card-body">
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route('zones.update', $zone->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nombre Zona</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $zone->name) }}" required>
                </div>
                <div class="form-group">
                    <label for="name">Descripción</label>
                    <input type="text" name="description" class="form-control" value="{{ old('description', $zone->description) }}">
                </div>
                <button type="submit" class="btn btn-primary">
                    Guardar
                </button>
            </form>
        </div>
    </div>
@endsection


