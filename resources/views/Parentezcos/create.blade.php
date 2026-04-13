@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Parentezcos</h4>
                </div>

                <div class="card-body">
                    <form action="{{route('parentezcos.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="id_parentezco" class="form-label">Id Parentezco</label>
                                <input type="number" class="form-control" id="id_parentezco" name="id_parentezco" placeholder="Ej. 101">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej papa">
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