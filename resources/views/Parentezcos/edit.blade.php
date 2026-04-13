@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Editar Parentezco</h4>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('parentezcos.update', $parentezco) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Id Parentezco</label>
                                <input type="number" class="form-control bg-light" name="id_parentezco" 
                                       value="{{ $parentezco->id_parentezco }}" readonly>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nombre (Relación)</label>
                                <input type="text" class="form-control" name="nombre" 
                                       value="{{ $parentezco->nombre }}" required>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('parentezcos.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success px-4">Guardar Cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection