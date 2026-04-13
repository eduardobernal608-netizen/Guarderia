@extends("layouts.template")

@section("content")
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Lista de Centros</h4>
                </div>
                
                <div class="row">
                    <div class="col-1">
                        <a class="btn btn-success px-4 mt-4 ms-4" href="{{url('centros/create')}}">
                            Registrar
                        </a>
                    </div>
                </div>

                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID Centro</th>
                                    <th>Nombre del Centro</th>
                                    <th>Costo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($centros as $centro)
                                    <tr>
                                        <td class="fw-bold">{{$centro->id_centro}}</td>
                                        <td>{{$centro->nom}}</td>
                                        <td>
                                            <span class="badge bg-info text-dark">
                                                ${{number_format($centro->costo, 2)}}
                                            </span>
                                        </td>
                                        <td>
                                            <a class="btn btn-warning px-4" href="{{route('centros.edit', $centro->id_centro)}}">
                                                Editar
                                            </a>

                                            <form action="{{route('centros.destroy', $centro->id_centro)}}" method="post" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger px-4" onclick="return confirm('¿Eliminar centro?')">
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