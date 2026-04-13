@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Alergias</h4>
                </div>

                <div class="card-body">
                    <form action="{{route('alergias.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="id_alergia" class="form-label">Id Alergia</label>
                                <input type="number" class="form-control" id="id_alergia" name="id_alergia" placeholder="Ej. 101">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="id_ninio" class="form-label">id Ninio</label>
                                <input type="number" class="form-control" id="id_ninio" name="id_ninio" placeholder="Ej. 101">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="id_ingrediente" class="form-label">Id Ingrediente</label>
                            <input type="text" class="form-control" id="id_ingrediente" name="id_ingrediente">
                        </div>

                        

                        <div class="d-grid">
                            <button class="btn btn-success">
                                Guardar
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection