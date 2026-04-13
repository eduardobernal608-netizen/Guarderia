@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Registrar Baja de Niño</h4>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('bajas_ninios.store') }}" method="post">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="id_baja" class="form-label fw-bold">ID Registro Baja</label>
                                <input type="number" class="form-control" id="id_baja" name="id_baja" placeholder="Ej. 1" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="id_ninio" class="form-label fw-bold">ID Niño</label>
                                {{-- Nombre corregido a id_ninio --}}
                                <input type="number" class="form-control" id="id_ninio" name="id_ninio" placeholder="Ej. 5" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="motivo" class="form-label fw-bold">Motivo de la Baja</label>
                            <input type="text" class="form-control" id="motivo" name="motivo" placeholder="Ej. Cambio de domicilio" required>
                        </div>

                        <div class="mb-4">
                            <label for="fecha" class="form-label fw-bold">Fecha de Baja</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success btn-lg">Guardar Baja</button>
                            <a href="{{ route('bajas_ninios.index') }}" class="btn btn-outline-secondary">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection