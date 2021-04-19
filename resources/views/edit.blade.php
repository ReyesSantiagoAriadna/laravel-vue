<!-- Modal -->
<form method="POST"  v-on:submit.prevent="updateKeep(fillKeep.id)">
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Editar</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
              </button>
            </div>
            <div class="modal-body">
                <label for="keep">Actualizar Tarea</label>
                <input type="text" name="keep" class="form-control" v-model="fillKeep.keep">
                <span v-for="error in errors" class="text-danger">@{{ error }}</span>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
          </div>
        </div>
      </div>
    </form>