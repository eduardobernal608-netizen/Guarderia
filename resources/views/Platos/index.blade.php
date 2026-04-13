@extends("layouts.template")

@section("content")

<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0">
                
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Lista de Platos</h4>
                </div>
                
                <div class="card-body p-4">
                    {{-- Botón Registrar --}}
                    <div class="mb-4">
                        <a class="btn btn-success px-4" href="{{ url('platos/create') }}">
                            Registrar Nuevo Plato
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-striped align-middle text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID Plato</th>
                                    <th>Nombre del Plato</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($platos as $plato_item)
                                    <tr>
                                        <td class="fw-bold">{{ $plato_item->id_plato }}</td>
                                        
                                        
                                        <td>{{ $plato_item->nombre }}</td>
                                        
                                        <td>
                                            <span class="badge bg-primary">
                                                ${{ number_format($plato_item->precio, 2) }}
                                            </span>
                                        </td>
                                        <td>
                                            
                                            <a class="btn btn-warning px-3" href="{{ route('platos.edit', $plato_item->id_plato) }}">
                                                Editar
                                            </a>

                                            <form action="{{ route('platos.destroy', $plato_item->id_plato) }}" method="post" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger px-3" onclick="return confirm('¿Eliminar plato?')">
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