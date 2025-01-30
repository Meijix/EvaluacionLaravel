<div>
    <button wire:navigate href="/customers/create" class="btn btn-success btn-sm">Crear Cliente</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo Electrónico</th>
                <th scope="col">Teléfono</th>
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
                    <td>
                        <button wire:navigate href="/customers/{{$customer->id}}" class="btn btn-primary btn-sm">Ver</button>
                        <button class="btn btn-secondary btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Borrar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
