@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Editar Baja de Niño</h4>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('bajas_ninios.update', $baja->id_baja) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="id_baja" class="form-label">Id Baja</label>
                                <input type="number" class="form-control bg-light" name="id_baja" 
                                       value="{{ $baja->id_baja }}" readonly>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="id_ninio" class="form-label">Id Niño</label>
                                <input type="number" class="form-control" name="id_ninio" 
                                       value="{{ $baja->id_ninio }}" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="motivo" class="form-label">Motivo</label>
                            <input type="text" class="form-control" name="motivo" 
                                   value="{{ $baja->motivo }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="date" class="form-control" name="fecha" 
                                   value="{{ $baja->fecha }}" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('bajas_ninios.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success px-4">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection