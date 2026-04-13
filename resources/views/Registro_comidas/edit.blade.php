@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Editar Registro de Comida</h4>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('registro_comidas.update', $registro->id_registrocomida) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Id Registro</label>
                                <input type="number" class="form-control bg-light" name="id_registrocomida" 
                                       value="{{ $registro->id_registrocomida }}" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Id Niño</label>
                                <input type="number" class="form-control" name="id_ninio" 
                                       value="{{ $registro->id_ninio }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Id Plato</label>
                                <input type="number" class="form-control" name="id_plato" 
                                       value="{{ $registro->id_plato }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Fecha</label>
                                <input type="date" class="form-control" name="fecha" 
                                       value="{{ $registro->fecha }}" required>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('registro_comidas.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success px-4">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection