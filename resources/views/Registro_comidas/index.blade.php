@extends("layouts.template")

@section("content")

<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0">
                
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Historial de Registro de Comidas</h4>
                </div>
                
                <div class="row">
                    <div class="col-1">
                        <a class="btn btn-success px-4 mt-4 ms-4" href="{{url('registro_comidas/create')}}">
                            Registrar
                        </a>
                    </div>
                </div>

                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID Registro</th>
                                    <th>ID Niño</th>
                                    <th>ID Plato</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($registros as $item)
                                    <tr>
                                        <td class="fw-bold">{{$item->id_registrocomida}}</td>
                                        <td>{{$item->id_ninio}}</td>
                                        <td>{{$item->id_plato}}</td>
                                        <td>{{$item->fecha}}</td>
                                        <td>
                                            <a class="btn btn-warning px-4" href="{{route('registro_comidas.edit', $item->id_registrocomida)}}">
                                                Editar
                                            </a>

                                            <form action="{{route('registro_comidas.destroy', $item->id_registrocomida)}}" method="post" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger px-4" onclick="return confirm('¿Borrar registro de comida?')">
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