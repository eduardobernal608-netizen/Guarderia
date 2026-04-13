@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Editar Menú</h4>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('menus.update', $menu) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Id Menu</label>
                            <input type="number" class="form-control bg-light" name="id_menu" 
                                   value="{{ $menu->id_menu }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Id Plato</label>
                            <input type="number" class="form-control" name="id_menu" 
                                   value="{{ $menu->id_menu }}" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Id Ingrediente</label>
                            <input type="number" class="form-control" name="id_ingrediente" 
                                   value="{{ $menu->id_ingrediente }}" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('menus.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success px-4">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection