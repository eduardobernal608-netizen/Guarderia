@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Editar Familiar</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('familiares.update', $familiar) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Id Familiar</label>
                                <input type="number" class="form-control bg-light" name="id_familiar" value="{{ $familiar->id_familiar }}" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">DNI</label>
                                <input type="text" class="form-control" name="DNI" value="{{ $familiar->DNI }}" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Dirección</label>
                            <input type="text" class="form-control" name="direccion" value="{{ $familiar->direccion }}" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('familiares.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success px-4">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection