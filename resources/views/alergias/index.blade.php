@extends("layouts.template")

@section("content")

<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0">
                
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Lista de Alergias</h4>
                </div>
                
                <div class="row">
                    <div class="col-1">
                        <a class="btn btn-success px-4 mt-4 ms-4" href="{{url('alergias/create')}}">
                            Registrar
                        </a>
                    </div>
                </div>

                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID Alergia</th>
                                    <th>ID Niño</th>
                                    <th>ID Ingrediente</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($alergias as $alergia)
                                    <tr>
                                        <td class="fw-bold">{{$alergia->id_alergia}}</td>
                                        <td>{{$alergia->id_ninio}}</td>
                                        <td>{{$alergia->id_ingrediente}}</td>
                                        <td>
                                            <a class="btn btn-warning px-4 mt-4" href="{{route('alergias.edit', $alergia)}}">
                                                Editar
                                            </a>

                                            <form action="{{route('alergias.destroy', $alergia)}}" method="post" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger px-4 mt-4" onclick="return confirm('¿Eliminar registro?')">
                                                    Eliminar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection