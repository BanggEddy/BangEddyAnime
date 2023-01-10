<?php include("headeradmin.php") ?>

<br>

<div class="container">
  <form method="POST" action="ajouter_form.php" enctype="multipart/form-data">
    <div class="row">
      <br><br>
      <div class="col-25">
        <label for="Anime name" style="color:#f5b7f5 ;">Nom de l'anime</label>
      </div>
      <div class="col-75">
        <input type="text" name="nom" placeholder="Nom de l'anime">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Prix" style="color:#f5b7f5 ;">Note</label>
      </div>
      <div class="col-75">
        <input type="text" name="note" placeholder="Saisir la note (A-E)">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Prix" style="color:#f5b7f5 ;">Nombre d'épisodes </label>
      </div>
      <div class="col-75">
        <input type="text" name="eprn" placeholder="Sasir le nombre d'épisode actuallement">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Prix" style="color:#f5b7f5 ;">L'anime est-il finis ou pas </label>
      </div>
      <div class="col-75">
        <input type="text" name="yn" placeholder="Saisir O ou N">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Prix" style="color:#f5b7f5 ;">le lien du site pour visionner </label>
      </div>
      <div class="col-75">
        <input type="text" name="lien" placeholder="Saisir le lien du site pour visualiser">
      </div>
    </div>



    <div class="row">
      <div class="col-25">
        <label for="Sujet" style="color:#f5b7f5 ;">Images</label>
      </div>
      <div class="col-75">
        <input type="file" name="photo" placeholder="Selectionnez l'image"></textarea>
      </div>
    </div>
    <br><br>
    <div class="row">
      <input type="submit" value="Envoyer">
    </div>
  </form>
</div>

<?php include("footer.php") ?>