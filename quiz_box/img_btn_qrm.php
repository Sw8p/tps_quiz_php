<!------------------ IMG BTN MULTI------------------>
<div class="question jumbotron text-center" id="img_btn_qrm">
<form action="" method="post">
  <fieldset>
    <!------------ head_box_quiz ------------>
    <legend>
      <h1 class="q_title display-4 text-center">Question 7 </h1>
      <p class="gameplay lead">Image Clic Multiple</p>
    </legend>

    <hr class="my-4">

    <!------------ content_box_quiz ------------>
    <div class="content_box_quiz">
      <!-- Intitulé.s -->
      <div class="intitules">
        <label>Quels usagers n’ont pas le droit de circuler sur la voie rapide ?</label>
      </div>
      <!-- asset.s -> Img, video... -->
      <div class="assets">

      </div>
      <!-- Réponse.s -->
      <div class="reponses">
        <label for="img_btn_qrm_rep1">
          <img class="img_btn" src="assets\img\Question9\interdit12t@3x.png" alt="image 1" width="96" height="96" />
          <input class="rad_img" name="img_btn_qrm_rep[]" id="img_btn_qrm_rep1" type="checkbox" value="img_1"/>
        </label>
        <label for="img_btn_qrm_rep2">
          <img class="img_btn" src="assets\img\Question9\interditBus@3x.png" alt="image 2" width="96" height="96" />
          <input class="rad_img" name="img_btn_qrm_rep[]" id="img_btn_qrm_rep2" type="checkbox" value="img_2"/>
        </label>
        <label for="img_btn_qrm_rep3">
          <img class="img_btn" src="assets\img\Question9\interditCaravane@3x.png" alt="image 3" width="96" height="96" />
          <input class="rad_img" name="img_btn_qrm_rep[]" id="img_btn_qrm_rep3" type="checkbox" value="img_3"/>
        </label>
        <label for="img_btn_qrm_rep4">
          <img class="img_btn" src="assets\img\Question9\interditMarchandises@3x.png" alt="image 4" width="96" height="96" />
          <input class="rad_img" name="img_btn_qrm_rep[]" id="img_btn_qrm_rep4" type="checkbox" value="img_4"/>
        </label>
        <label for="img_btn_qrm_rep5">
          <img class="img_btn" src="assets\img\Question9\interditMobylette@3x.png" alt="image 5" width="96" height="96" />
          <input class="rad_img" name="img_btn_qrm_rep[]" id="img_btn_qrm_rep5" type="checkbox" value="img_5"/>
        </label>
        <label for="img_btn_qrm_rep6">
          <img class="img_btn" src="assets\img\Question9\interditMoto@3x.png" alt="image 6" width="96" height="96" />
          <input class="rad_img" name="img_btn_qrm_rep[]" id="img_btn_qrm_rep6" type="checkbox" value="img_6"/>
        </label>
        <label for="img_btn_qrm_rep7">
          <img class="img_btn" src="assets\img\Question9\interditPieton@3x.png" alt="image 7" width="96" height="96" />
          <input class="rad_img" name="img_btn_qrm_rep[]" id="img_btn_qrm_rep7" type="checkbox" value="img_7"/>
        </label>
        <label for="img_btn_qrm_rep8">
          <img class="img_btn" src="assets\img\Question9\interditTracteur@3x.png" alt="image 5" width="96" height="96" />
          <input class="rad_img" name="img_btn_qrm_rep[]" id="img_btn_qrm_rep8" type="checkbox" value="img_8"/>
        </label>
        <label for="img_btn_qrm_rep9">
          <img class="img_btn" src="assets\img\Question9\interditVelo@3x.png" alt="image 6" width="96" height="96" />
          <input class="rad_img" name="img_btn_qrm_rep[]" id="img_btn_qrm_rep9" type="checkbox" value="img_9"/>
        </label>
      </div>
    </div>

    <!-- Valid form -->
    <input class="btn btn-primary btn-lg text-center" type="button" name="img_btn_valid" value="Valider"
    onclick="loadQuiz('d&d.php', loadQuestion)"/>

  </fieldset>
</form>
</div>
