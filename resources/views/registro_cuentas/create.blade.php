@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Registrar Nueva Cuenta</h4>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('registro_cuentas.store') }}" method="post">
                        @csrf
                        
                        <div class="row">
                            {{-- ID del Registro --}}
                            <div class="col-md-12 mb-3">
                                <label for="id_regcuenta" class="form-label fw-bold">ID Registro Cuenta</label>
                                <input type="number" 
                                       class="form-control" 
                                       id="id_regcuenta" 
                                       name="id_regcuenta" 
                                       placeholder="Ej. 101" 
                                       required>
                            </div>

                            {{-- ID del Familiar (Llave Foránea) --}}
                            <div class="col-md-12 mb-3">
                                <label for="id_fam" class="form-label fw-bold">Familiar Responsable (ID)</label>
                                <input type="number"
                                       class="form-control"
                                       id="id_fam"
                                       name="id_fam"
                                       placeholder="Ingrese el ID del familiar (Ej. 1)"
                                       required>
                                <small class="text-muted">Debe ser un ID existente en la tabla de Familiares.</small>
                            </div>

                            {{-- Monto o Número de Cuenta --}}
                            <div class="col-md-12 mb-4">
                                <label for="cuenta" class="form-label fw-bold">Monto / Número de Cuenta</label>
                                <input type="number"
                                       class="form-control"
                                       id="cuenta"
                                       name="cuenta"
                                       placeholder="Ej. 2500"
                                       required>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success btn-lg">
                                <i class="fas fa-save"></i> Guardar Registro
                            </button>
                            <a href="{{ route('registro_cuentas.index') }}" class="btn btn-outline-secondary">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection