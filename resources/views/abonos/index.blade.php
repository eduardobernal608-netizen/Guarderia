@extends("layouts.template")

@section("content")

<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0">

                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Lista de Abonos</h4>
                </div>

                <div class="row">
                    <div class="col-1">
                        <a class="btn btn-success px-4 mt-4 ms-4" href="{{url('abonos/create')}}">
                            Registrar
                        </a>
                    </div>
                </div>

                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID Abono</th>
                                    <th>Cantidad</th>
                                    <th>Fecha</th>
                                    <th>Nombre del niño</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($abonos as $abono)
                                    <tr>
                                        <td class="fw-bold">{{$loop->index+1}}</td>
                                        <td>${{number_format($abono->cantidad, 2)}}</td>
                                        <td>
                                            <span class="badge bg-info text-dark">
                                                {{$abono->fecha}}
                                            </span>
                                        </td>
                                        <td>{{$abono->nombre}}</td>
                                        <td>
                                            <a class="btn btn-warning px-4 mt-4" href="{{route('abonos.edit',  $abono->id_abono)}}">
                                                Editar
                                            </a>

                                            <form action="{{route('abonos.destroy', $abono->id_abono)}}" method="post" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger px-4 mt-4" onclick="return confirm('¿Eliminar abono?')">
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
