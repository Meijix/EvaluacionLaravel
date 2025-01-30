<div>
    <button wire:navigate href="/customers/create" class="btn btn-success btn-sm">Crear Cliente</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo Electrónico</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Dirección</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <th scope="row">{{$customer->id}}</th>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->birthday}}</td>
                    <td>
                        <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-primary btn-sm">Ver</a>
                        <button wire:click="edit({{ $customer->id }})" class="btn btn-secondary btn-sm">Editar</button>
                        

                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que quieres eliminar este cliente?')">
                                Borrar
                            </button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
