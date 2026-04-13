@extends("layouts.template")

@section("content")

<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0">
                
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Lista de Bajas de Niños</h4>
                </div>
                
                <div class="card-body p-4">
                    {{-- Botón Registrar --}}
                    <div class="mb-4">
                        <a class="btn btn-success px-4" href="{{ url('bajas_ninios/create') }}">
                            Registrar Baja
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID Baja</th>
                                    <th>ID Niño</th>
                                    <th>Motivo</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($bajas as $baja)
                                    <tr>
                                        {{-- Usa id_baja que es tu Primary Key en la DB --}}
                                        <td class="fw-bold">{{ $baja->id_baja }}</td>
                                        <td>{{ $baja->id_ninio }}</td>
                                        <td>{{ $baja->motivo }}</td>
                                        <td>{{ $baja->fecha }}</td>
                                        <td>
                                            {{-- Enlace de Editar --}}
                                            <a class="btn btn-warning px-3" href="{{ route('bajas_ninios.edit', $baja->id_baja) }}">
                                                Editar
                                            </a>

                                            {{-- Formulario de Eliminar --}}
                                            <form action="{{ route('bajas_ninios.destroy', $baja->id_baja) }}" method="post" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger px-3" onclick="return confirm('¿Eliminar este registro?')">
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