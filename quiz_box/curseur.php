<!------------------ Curseur ------------------>
<div class="question jumbotron text-center" id="curseur">
  <form action="" method="post">
    <fieldset>
      <!------------ head_box_quiz ------------>
      <legend>
        <h1 class="q_title display-4 text-center">Question 3 </h1>
        <p class="gameplay lead">question type curseur</p>
      </legend>

      <hr class="my-4">

      <!------------ content_box_quiz ------------>
      <div class="content_box_quiz">
        <!-- Intitulé.s -->
        <div class="intitules">
            <label>Combien de points peut - on perdre sur son permis de conduire  pour avoir stationner ou circuler sur la bande d'arrêt d’urgence ?</label>
        </div>
        <!-- asset.s -> Img, video... -->
        <div class="assets">

        </div>
        <!-- Réponse.s -->
        <div class="reponses">
          <input type="range" name="crs" id="crs" min="0" max="12" step="1">
          <br />
          <span class="crs_count"></span>
        </div>
     </div>

      <!-- Valid form -->
      <input class="btn btn-primary btn-lg text-center" type="button"
      name="crs_valid" value="Valider" onclick="loadQuiz('select.php', loadQuestion)"/>

    </fieldset>
  </form>
</div>
