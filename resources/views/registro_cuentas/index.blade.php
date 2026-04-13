@extends("layouts.template")

@section("content")

<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0">
                
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Lista de Registro de Cuentas</h4>
                </div>
                
                <div class="row">
                    <div class="col-1">
                        <a class="btn btn-success px-4 mt-4 ms-4" href="{{url('registro_cuentas/create')}}">
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
                                    <th>ID Familiar</th>
                                    <th>Fecha Cuenta</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($cuentas as $item)
                                    <tr>
                                        <td class="fw-bold">{{$item->id_regcuenta}}</td>
                                        <td>{{$item->id_fam}}</td>
                                        <td>{{$item->cuenta}}</td>
                                        <td>
                                            <a class="btn btn-warning px-4" href="{{route('registro_cuentas.edit', $item->id_regcuenta)}}">
                                                Editar
                                            </a>

                                            <form action="{{route('registro_cuentas.destroy', $item->id_regcuenta)}}" method="post" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger px-4" onclick="return confirm('¿Eliminar esta cuenta?')">
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