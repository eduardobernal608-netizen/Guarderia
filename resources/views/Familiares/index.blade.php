@extends("layouts.template")

@section("content")

<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0">
                
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Lista de Familiares</h4>
                </div>
                
                <div class="card-body p-4">
                    <div class="mb-4">
                        <a class="btn btn-success px-4" href="{{ route('familiares.create') }}">
                            Registrar Nuevo Familiar
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>DNI</th>
                                    <th>Dirección</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($familiares as $familiar)
                                    <tr>
                                        {{-- 1. Cambio: id_fam según tu base de datos --}}
                                        <td class="fw-bold">{{ $familiar->id_fam }}</td>
                                        <td>{{ $familiar->DNI }}</td>
                                        {{-- 2. Cambio: dir según tu base de datos --}}
                                        <td>{{ $familiar->dir }}</td>
                                        <td>
                                            {{-- 3. Cambio: usar id_fam para las rutas --}}
                                            <a class="btn btn-warning px-3" href="{{ route('familiares.edit', $familiar->id_fam) }}">
                                                Editar
                                            </a>

                                            <form action="{{ route('familiares.destroy', $familiar->id_fam) }}" method="post" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger px-3" onclick="return confirm('¿Borrar familiar?')">
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