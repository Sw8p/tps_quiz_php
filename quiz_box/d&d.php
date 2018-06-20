<!------------------ Drag&Drop ------------------>
<div class="question jumbotron text-center" id="d&d">
  <form action="" method="post">
    <fieldset>
      <!------------ head_box_quiz ------------>
      <legend>
        <h1 class="q_title display-4 text-center">Question 8</h1>
        <p class="gameplay lead">Drag & Drop</p>
      </legend>

      <hr class="my-4">

      <!------------ content_box_quiz ------------>
      <div class="content_box_quiz">
        <!-- Intitulé.s -->
        <div class="intitules">
          <label>A quoi servent les voies réservées ?</label>
        </div>
        <!-- asset.s -> Img, video... -->
        <div class="assets">
          <img src="assets/img/Question13.jpg"/>
        </div>
        <!-- Réponse.s -->
        <div class="reponses">
          <div id="drop_box">
            <label>
              Elles servent à délimiter l’espace de chaque
              <input class="droparea" type="text" name="d&d_rep1" id="d&d_rep1" readonly/>
              de la route; et ainsi mieux
              <input class="droparea" type="text" name="d&d_rep2" id="d&d_rep2" readonly/>.
              Il est donc important que chacun
              <input class="droparea" type="text" name="d&d_rep3" id="d&d_rep3" readonly/>
               l’espace des autres.
            </label>
          </div>
          <div id="draggable_box">
            <span class="draggable_span" id="drag1" draggable="true"></span>
            <span class="draggable_span" id="drag2" draggable="true"></span>
            <span class="draggable_span" id="drag3" draggable="true"></span>
            <span class="draggable_span" id="drag4" draggable="true"></span>
            <span class="draggable_span" id="drag5" draggable="true"></span>
            <span class="draggable_span" id="drag6" draggable="true"></span>
            <span class="draggable_span" id="drag7" draggable="true"></span>
            <span class="draggable_span" id="drag8" draggable="true"></span>
          </div>
        </div>

      </div>

      <!-- Valid form -->
      <input class="btn btn-primary btn-lg text-center" type="button"
      name="d&d_valid" value="Valider" onclick="loadQuiz('ord_lst.php', loadQuestion)" />

    </fieldset>
  </form>
</div>
