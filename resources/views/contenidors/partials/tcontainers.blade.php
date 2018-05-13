<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-xs-12 col-12">
            <table class="table table-bordered table-striped">
                <caption><small>{{ $tInfo }}</small></caption>
                <thead class="thead-dark">
                    <tr style="border-bottom:3px solid #dc3545;">
                        <th scope="col">Tipus</th>
                        <th scope="col">Ubicat (a)</th>
                        <th scope="col">Contingut (en)</th>
                        <th scope="col">Materials</th>
                        <th scope="col">Acció</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($containers as $container)
                        <tr>
                            <td>{{ $container['container_name']['nom'] }}</td>
                            <td>
                                {{-- Mostrar les dades del lloc on està ubicat el contenidor. --}}
                                @if (isset($container['vehicle']))
                                    {{ $container['vehicle']['codi'] }}, {{ $container['vehicle']['type']['codi'] }}
                                @elseif (isset($container['user']))
                                    {{ $container['user']['codi_parc'] }}, {{ $container['user']['name'] }}
                                @else
                                    No assignat
                                @endif
                            </td>
                            <td>{{ $container['parent']['container_name']['nom'] }}</td>
                            <td>...</td>
                            <td class="text-right">
                                <!-- Editar -->
                                <a class="btn btn-xs btn-default" href="{{ action('ContainerController@edit', ['id' => $container->id]) }}">
                                    <i class="fas fa-pencil-alt"></i> Editar
                                </a>
                                <!-- Esborrar -->
                                <div class="d-inline-block">
                                    <form action="{{ action('ContainerController@destroy', ['id' => $container->id]) }}" method="POST" class="form-delete">
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" name="nom" value="{{-- $containerN->referencia --}}">
                                        <input type="hidden" name="nom" value="{{-- $containerN->nom --}}">
                                        <button type="submit" class="btn btn-xs btn-danger">
                                            <i class="fas fa-times"></i> Eliminar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">{{ $tBuida }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- container-fluid -->