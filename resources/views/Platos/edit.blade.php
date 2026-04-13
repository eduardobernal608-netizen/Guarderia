@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Editar Plato</h4>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('platos.update', $plato) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Id Plato</label>
                                <input type="number" class="form-control bg-light" name="id_plato" value="{{ $plato->id_plato }}" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nombre del Plato</label>
                                <input type="text" class="form-control" name="plato" value="{{ $plato->plato }}" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Precio</label>
                            <input type="number" step="0.01" class="form-control" name="precio" value="{{ $plato->precio }}" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('platos.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success px-4">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection