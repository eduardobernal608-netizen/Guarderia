@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Editar Abono</h4>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('abonos.update', $abono) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="id_abono" class="form-label">Id Abono</label>
                                <input type="number" class="form-control bg-light" name="id_abono" 
                                       value="{{ $abono->id_abono }}" readonly>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="cantidad" class="form-label">Cantidad</label>
                                <input type="number" class="form-control" name="cantidad" 
                                       value="{{ $abono->cantidad }}" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="date" class="form-control" name="fecha" 
                                   value="{{ $abono->fecha }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="id_regcuenta" class="form-label">Id REG Cuenta</label>
                            <input type="number" class="form-control" name="id_regcuenta" 
                                   value="{{ $abono->id_regcuenta }}" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('abonos.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success px-4">Actualizar</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection