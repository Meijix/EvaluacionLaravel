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
                </div>
                <div class="mb-3">
                    <label class="form-label">Dirección de Correo Electrónico</label>
                    <input wire:model="email" type="text" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label class="form-label">Teléfono</label>
                  <input wire:model="phone" type="text" class="form-control" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

        </div>
      </div>
</div>
