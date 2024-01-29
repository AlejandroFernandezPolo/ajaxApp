<div class="modal" id="deletePaisModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">¿Estas seguro de eliminar el país?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="editUrl">
            
        <div class="alert alert-danger mt-3 visually-hidden" id="error" role="alert">
          Error al eliminar el pais.
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" id="btEliminarPais" class="btn btn-primary">Eliminar país</button>
      </div>
    </div>
  </div>
</div>
