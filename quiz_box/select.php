<!------------------ Text à trou ------------------>
<div class="question jumbotron text-center" id="select">
  <form action="" method="post">
    <fieldset>
      <!------------ head_box_quiz ------------>
      <legend>
        <h1 class="q_title display-4 text-center">Question 4 </h1>
        <p class="gameplay lead">Texte à trou</p>
      </legend>

      <hr class="my-4">

      <!------------ content_box_quiz ------------>
        <div class="content_box_quiz">
          <!-- Intitulé.s -->
          <div class="intitules">
            <p>Quels sont les avantages du covoiturage ?</p>
          </div>
          <!-- asset.s -> Img, video... -->
          <div class="assets">

          </div>

          <!-- Réponse.s -->
          <div class="reponses">
            <label for="slct1">Le covoiturage
              <select id="slct1" name="slct1" required>
                  <option selected>...</option>
                  <option>diminue</option>
                  <option>augmente</option>
              </select>
            </label>
            <label for="slct2">le nombre de véhicules  en circulation et par conséquent réduit les rejets de
              <select id="slct2" name="slct2" required>
                  <option selected>...</option>
                  <option>H2O</option>
                  <option>CO2</option>
                  <option>SO2</option>
              </select>
            </label>
            <label for="slct3"> le risque d’accident et les nuisances
              <select id="slct3" name="slct3" required>
                  <option selected>...</option>
                  <option>visuelles</option>
                  <option>sonores</option>
              </select>
            </label>
          </div>

        </div>

      <!-- Valid form -->
      <input class="btn btn-primary btn-lg text-center" type="button"
      name="slct_valid" value="Valider" onclick="loadQuiz('assoc.php', loadQuestion)"/>

    </fieldset>
  </form>
</div>
