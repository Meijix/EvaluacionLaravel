<div>
  <div class="card offset-3 col-6">
      <div class="card-header">
        Crea Cliente
      </div>
      <div class="card-body">
        
          <form wire:submit="save">
              <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input wire:model="name" type="text" class="form-control" aria-describedby="nameHelp">
                @error('name')<span class="text-danger" >{{$message}}</span>@enderror
              </div>
              <div class="mb-3">
                  <label class="form-label">Dirección de Correo Electrónico</label>
                  <input wire:model="email" type="text" class="form-control" aria-describedby="emailHelp">
                  @error('email')<span class="text-danger" >{{$message}}</span>@enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Teléfono</label>
                <input wire:model="phone" type="text" class="form-control" >
                @error('phone')<span class="text-danger" >{{$message}}</span>@enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Edad</label>
                <input wire:model="edad" type="number" class="form-control">
                @error('edad')<span class="text-danger" >{{$message}}</span>@enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Fecha de nacimiento</label>
                <input wire:model="nacimiento" type="date" class="form-control">
                @error('nacimiento')<span class="text-danger" >{{$message}}</span>@enderror
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <a href="/customers" class="btn btn-primary">regresar</a>
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

