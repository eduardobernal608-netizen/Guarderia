@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Editar Registro Cuenta</h4>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('registro_cuentas.update', $cuenta->id_registro) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Id Registro Cuenta</label>
                            <input type="number" class="form-control bg-light" name="id_registro" value="{{ $cuenta->id_registro }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Id Familiar</label>
                            <input type="number" class="form-control" name="id_familiar" value="{{ $cuenta->id_familiar }}" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Cuenta (Fecha)</label>
                            <input type="date" class="form-control" name="cuenta" value="{{ $cuenta->cuenta }}" required>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('registro_cuentas.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success px-4">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection