@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Editar Alergia</h4>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('alergias.update', $alergia) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="id_alergia" class="form-label">Id Alergia</label>
                                <input type="number" class="form-control bg-light" name="id_alergia" 
                                       value="{{ $alergia->id_alergia }}" readonly>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="id_ninio" class="form-label">Id Ninio</label>
                                <input type="number" class="form-control" name="id_ninio" 
                                       value="{{ $alergia->id_ninio }}" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="id_ingrediente" class="form-label">Id Ingrediente</label>
                            <input type="text" class="form-control" name="id_ingrediente" 
                                   value="{{ $alergia->id_ingrediente }}" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('alergias.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success px-4">Actualizar</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection