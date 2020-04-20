<?php include '../Controller/update_info_controller.php'; ?>
<div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header px-3 py-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="update-form" class="w-100 d-flex" action="#" method="post">
          <div>
            <label for="password">Votre mot de passe :</label>
            <input id="password" type="password" name="password" placeholder="•••••••••">
            <label for="passwordConfirmation">Confirmation :</label>
            <input id="passwordConfirmation" type="password" name="passwordConfirmation" placeholder="•••••••••">
          </div>
          <div>
            <label for="username">Votre nom d'utilisateur :</label>
            <input id="username" type="text" name="username" placeholder="Buzz Lightyear">
            <label for="usernameConfirmation">Confirmation :</label>
            <input id="usernameConfirmation" type="text" name="usernameConfirmation" placeholder="Buzz Lightyear">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="btn-group btn-group-lg w-100" role="group">
          <button type="button" data-dismiss="modal" class="btn btn-block btn-indigo">Annuler</button>
          <button id="submitFormsButton" form="update-form" type="submit" class="btn btn-block btn-indigo">Valider les changements</button>
        </div>
      </div>
    </div>
  </div>
</div>
