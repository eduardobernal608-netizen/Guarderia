@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Editar Niño</h4>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('ninios.update', $ninio) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Id niño</label>
                                <input type="number" class="form-control bg-light" name="id_ninio" value="{{ $ninio->id_ninio }}" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Matrícula</label>
                                <input type="text" class="form-control" name="matricula" value="{{ $ninio->matricula }}" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Fecha Ingreso</label>
                            <input type="date" class="form-control" name="fecha_ingreso" value="{{ $ninio->fecha_ingreso }}" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Id Persona</label>
                                <input type="number" class="form-control" name="id_persona" value="{{ $ninio->id_persona }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Id Centro</label>
                                <input type="number" class="form-control" name="id_centro" value="{{ $ninio->id_centro }}" required>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('ninios.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success px-4">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection