<!-- Modal -->
<form method="POST"  v-on:submit.prevent="createKeep">
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Crear</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
          </button>
        </div>
        <div class="modal-body">
			<label for="keep">Nueva Tarea</label>
			<input type="text" name="keep" class="form-control" v-model="newKeep">
			<span v-for="error in errors" class="text-danger">@{{ error }}</span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</form>