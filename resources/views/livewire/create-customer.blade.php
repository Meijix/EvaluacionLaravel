<div>
  <div class="card offset-1 col-10">
      <div class="card-header">
        Agregar Nuevo Cliente
      </div>
      <div class="card-body">
          <form wire:submit="save">
              <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input wire:model="name" id="name" type="text" class="form-control" aria-describedby="nameHelp">
                @error('name')<span class="text-danger" >{{$message}}</span>@enderror
              </div>
              <div class="mb-3">
                  <label for="email" class="form-label">Dirección de Correo Electrónico</label>
                  <input wire:model="email" id="email" type="text" class="form-control" aria-describedby="emailHelp">
                  @error('email')<span class="text-danger" >{{$message}}</span>@enderror
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Teléfono</label>
                <input wire:model="phone" id="phone" type="text" class="form-control" >
                @error('phone')<span class="text-danger" >{{$message}}</span>@enderror
              </div>
              <div class="mb-3">
                <label for="address" class="form-label">Dirección</label>
                <input wire:model="address"  id="address" type="text" class="form-control">
                @error('address')<span class="text-danger" >{{$message}}</span>@enderror
              </div>
              <div class="mb-3">
                <label for="birthday" class="form-label">Fecha de nacimiento</label>
                <input wire:model="birthday" id="birthday" type="date" class="form-control">
                @error('birthday')<span class="text-danger" >{{$message}}</span>@enderror
              </div>
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="/customers" class="btn btn-primary">Regresar</a>
            </form>

            <!-- Mensaje de éxito -->
            @if (session()->has('message'))
              <div class="alert alert-success mt-3">
                  {{ session('message') }}
              </div>
            @endif
      </div>
    </div>
</div>

