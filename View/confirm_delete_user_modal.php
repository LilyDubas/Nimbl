<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header px-3 py-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <h3 class="font-weight-bold">Voulez vous vraiment supprimer cet utilisateur ?</h3>
        <h4>Cette action est irréversible !</h4>
      </div>
      <div class="modal-footer">
        <form class="w-100" action="#" method="post">
          <input id="userIDInput" type="hidden" name="userID" value="0">
          <div class="btn-group btn-group-lg w-100" role="group">
            <button type="button" data-dismiss="modal" class="btn btn-indigo">Annuler</button>
            <button name="confirmDeleteUser" type="submit" class="btn btn-success">Confirmer la suppression</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
