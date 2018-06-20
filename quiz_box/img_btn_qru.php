<!------------------ IMG BTN ------------------>
<div class="question jumbotron text-center" id="img_btn_qru">
<form action="" method="post">
  <fieldset>
    <!------------ head_box_quiz ------------>
    <legend>
      <h1 class="q_title display-4 text-center">Question 6 </h1>
      <p class="gameplay lead">Image bouton</p>
    </legend>

    <hr class="my-4">

    <!------------ content_box_quiz ------------>
    <div class="content_box_quiz">
      <!-- Intitulé.s -->
      <div class="intitules">
        <label>Lorem ipsum dolor sit amet, consectetur adipiscing elit : </label>
      </div>
      <!-- asset.s -> Img, video... -->
      <div class="assets">

      </div>
      <!-- Réponse.s -->
      <div class="reponses">
        <label for="img_btn_qru_rep1">
          <img class="img_btn" src="assets/img/car" alt="image 1" width="56" height="56" />
          <input class="rad_img" name="img_btn_qru_rep" id="img_btn_qru_rep1" type="radio" value="img_1"/>
        </label>
        <label for="img_btn_qru_rep2">
          <img class="img_btn" src="assets/img/car" alt="image 2" width="56" height="56" />
          <input class="rad_img" name="img_btn_qru_rep" id="img_btn_qru_rep2" type="radio" value="img_2"/>
        </label>
        <label for="img_btn_qru_rep3">
          <img class="img_btn" src="assets/img/car" alt="image 3" width="56" height="56" />
          <input class="rad_img" name="img_btn_qru_rep" id="img_btn_qru_rep3" type="radio" value="img_3"/>
        </label>
      </div>
    </div>

    <!-- Valid form -->
    <input class="btn btn-primary btn-lg text-center" type="button" name="img_btn_valid" value="Valider"
    onclick="loadQuiz('img_btn_qrm.php', loadQuestion)"/>

  </fieldset>
</form>
</div>
