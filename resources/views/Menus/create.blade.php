@extends('layouts.template')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Menus</h4>
                </div>

                <div class="card-body">
                    <form action="{{route('menus.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="id_menus" class="form-label">Id Menu</label>
                                <input type="number" class="form-control" id="id_menu" name="id_menu" placeholder="Ej. 101">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="id_menu" class="form-label">Id plato</label>
                                <input type="number" class="form-control" id="id_plato" name="id_plato" placeholder="Ej. 101">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="id_ingrediente" class="form-label">Id ingrediente</label>
                                <input type="number" class="form-control" id="id_ingrediente" name="id_ingrediente" placeholder="Ej. 101">
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