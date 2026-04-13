@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Familiares</h4>
                </div>

                <div class="card-body">
                    <form action="{{route('familiares.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="id_familiar" class="form-label">Id Familiar</label>
                                <input type="number" class="form-control" id="id_familiar" name="id_familiar" placeholder="Ej. 101">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="DNI" class="form-label">DNI</label>
                                <input type="text-white" class="form-control" id="DNI" name="DNI" placeholder="">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="direccion" class="form-label">Direccion</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
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