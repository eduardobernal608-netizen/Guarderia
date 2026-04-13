@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Ninios</h4>
                </div>

                <div class="card-body">
                    <form action="{{route('ninios.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="id_ninio" class="form-label">Id ninio</label>
                                <input type="number" class="form-control" id="id_ninio" name="id_ninio" placeholder="Ej. 101">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="matricula" class="form-label">Matricula</label>
                                <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Ej. 202407056">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="fecha_ingreso" class="form-label">Fecha Ingreso</label>
                            <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso">
                        </div>

                         <div class="col-md-6 mb-3">
                                <label for="id_persona" class="form-label">Id Persona</label>
                                <input type="number" class="form-control" id="id_persona" name="id_persona" placeholder="Ej. 101">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="id_centro" class="form-label">Id Centro</label>
                                <input type="number" class="form-control" id="id_centro" name="id_centro" placeholder="Ej. 101">
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