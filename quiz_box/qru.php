<!------------------ QRU ------------------>
<div class="question jumbotron text-center" id="qru">
  <form action="" method="post">
    <fieldset>
      <!------------ head_box_quiz ------------>
      <legend>
        <h1 class="q_title display-4 text-center">Question 1 </h1>
        <p class="gameplay lead">question à choix unique <br />
        Vrai ou Faux : </p>
      </legend>

      <hr class="my-4"/>

      <!------------ content_box_quiz ------------>
      <div class="content_box_quiz">
        <!-- Intitulé.s -->
        <div class="intitules">
          <label>La voiture jaune est-elle bien placée pour tourner à gauche ?</label>
        </div>
        <!-- asset.s -> Img, video... -->
        <div class="assets">
          <img src="assets/img/Question2.jpg" />
        </div>
        <!-- Réponse.s -->
        <div class="reponses">
          <label for="qru_rep1">
            <input name="qru_rep" id="qru_rep1" type="radio" value="Vrai"/> Oui
          </label>
          <label for="qru_rep2">
            <input name="qru_rep" id="qru_rep2" type="radio" value="Faux"/> Non
          </label>
        </div>
      </div>

      <!------------ Valid form ------------>
      <input class="btn btn-primary btn-lg text-center" type="button" name="qru_valid" value="Valider"
      onclick="loadQuiz('qrm.php', loadQuestion)" />

    </fieldset>

  </form>
</div>
