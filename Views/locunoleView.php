
 <form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row form-check-inline my-5 d-flex justify-content-center">

      <div class="col-auto">
        <input id="tenant_chosen" name="tenant_chosen" class="form-control mt-3" type="text" placeholder="Aucun locataire choisi" readonly>
        <button onclick="document.getElementById('tenant_chosen').value = ''" class="form-control">Désélectionner</button>
      </div>

      <div class="col-auto">
        <p style="margin-bottom: 0px;" class="form-control bg-secondary text-light text-center fs-5" type="text">Ajouter le bail rempli</p>
        <input class="form-control" type="file" name="file_common"> <!-- input case du fichier à charger -->
        <input class="form-control btn btn-primary" type="submit" name="submit_file_common">
      </div>

      <div class="col-auto">
        <input id="landlord_chosen" name="landlord_chosen" class="form-control mt-3" type="text" placeholder="Aucun propriétaire choisi" readonly>
        <button onclick="document.getElementById('landlord_chosen').value = ''" class="form-control">Désélectionner</button>
      </div>

    </div>
  </form>



<?php 


?>