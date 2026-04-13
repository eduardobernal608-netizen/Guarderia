@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Registro comida</h4>
                </div>

                <div class="card-body">
                    <form action="{{route('registro_comidas.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="id_registrocomida" class="form-label">Id Registro comida</label>
                                <input type="number" class="form-control" id="id_registrocomida" name="id_registrocomida" placeholder="Ej. 101">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="id_ninio" class="form-label">Id Ninio</label>
                                <input type="number" class="form-control" id="id_ninio" name="id_ninio" placeholder="Ej. 101">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="id_plato" class="form-label">Id Plato</label>
                                <input type="number" class="form-control" id="id_plato" name="id_plato" placeholder="Ej. 101">
                            </div>



                            <div class="col-md-6 mb-3">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" placeholder="">
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