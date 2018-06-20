<!------------------ QRM ------------------>
<div class="question jumbotron text-center" id="qrm">
  <form action="" method="post">
    <fieldset>
      <!------------ head_box_quiz ------------>
      <legend>
        <h1 class="q_title display-4 text-center">Question 2 </h1>
        <p class="gameplay lead">question à choix multiples</p>
      </legend>

      <hr class="my-4">

      <!------------ content_box_quiz ------------>
      <div class="content_box_quiz">
        <!-- Intitulé.s -->
        <div class="intitules">
          <label>La voiture jaune est bien placée pour : </label>
        </div>
        <!-- asset.s -> Img, video... -->
        <div class="assets">
          <img src="assets/img/Question1.jpg"/>
        </div>

        <!-- Réponse.s -->
        <div class="reponses">
          <label for="qrm_rep1">
            <input name="qrm_rep[]" id="qrm_rep1" type="checkbox" value="qrm_rep1"/>
            Prendre la première sortie
          </label>
          <label for="qrm_rep2">
            <input name="qrm_rep[]" id="qrm_rep2" type="checkbox" value="qrm_rep2"/>
            Prendre la troisième sortie
          </label>
          <br />
          <label for="qrm_rep3">
            <input name="qrm_rep[]" id="qrm_rep3" type="checkbox" value="qrm_rep3"/>
            Aller tout droit
          </label>
          <label for="qrm_rep4">
            <input name="qrm_rep[]" id="qrm_rep4" type="checkbox" value="qrm_rep4"/>
            Aller à Lyon
          </label>
        </div>
      </div>

      <!-- Valid form -->
      <input class="btn btn-primary btn-lg text-center" type="button"
      name="qrm_valid" value="Valider" onclick="loadQuiz('curseur.php', loadQuestion)"/>

    </fieldset>
  </form>
</div>
