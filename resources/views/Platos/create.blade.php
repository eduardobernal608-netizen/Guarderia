@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Platos</h4>
                </div>

                <div class="card-body">
                    <form action="{{route('platos.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="id_plato" class="form-label">Id Platp</label>
                                <input type="number" class="form-control" id="id_plato" name="id_plato" placeholder="Ej. 101">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="plato" class="form-label">Plato</label>
                                <input type="text" class="form-control" id="plato" name="plato" placeholder="Ej. caldo de frijol">
                            </div>

                             <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="number" class="form-control" id="precio" name="precio">
                            </div>

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