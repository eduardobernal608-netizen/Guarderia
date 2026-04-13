@extends("layouts.template")

@section("content")

<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Catálogo de Parentezcos</h4>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-success px-4 mt-4 ms-4" href="{{url('parentezcos/create')}}">
                            Registrar Nuevo
                        </a>
                    </div>
                </div>

                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Parentesco (Relación)</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($parentezcos as $parentezco)
                                    <tr>
                                        <td class="fw-bold">{{$parentezco->id_parentezco}}</td>
                                        <td>{{$parentezco->nombre}}</td>
                                        <td>
                                            <a class="btn btn-warning px-4" href="{{route('parentezcos.edit', $parentezco)}}">
                                                Editar
                                            </a>

                                            <form action="{{route('parentezcos.destroy', $parentezco)}}" method="post" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger px-4" onclick="return confirm('¿Eliminar este parentesco?')">
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