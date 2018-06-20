<!------------------ Drag&Drop ------------------>
<div class="question jumbotron text-center" id="ord_lst">
  <form action="" method="post">
    <fieldset>
      <!------------ head_box_quiz ------------>
      <legend>
        <h1 class="q_title display-4 text-center">Question 9</h1>
        <p class="gameplay lead">Liste ordonnée</p>
      </legend>

      <hr class="my-4">

      <!------------ content_box_quiz ------------>
      <div class="content_box_quiz">
        <!-- Intitulé.s -->
        <div class="intitules">
          <label>Lorem ipsum dolor sit amet, consectetur adipiscing elit</label>
        </div>
        <!-- asset.s -> Img, video... -->
        <div class="assets">

        </div>
        <!-- Réponse.s -->
        <div class="reponses">
          <div id="drop_box">
            <label>
              <ul>
                <li>
                  <!--<input value="" class="droparea" type="button" value="ord_lst_rep1" id="ord_lst_rep1" readonly/>-->
                  <div class="dropzone">
                    <input value="1" class="droparea" type="text" name="ord_lst_rep1" id="ord_lst_rep1" readonly/>
                    <span class="draggable_span" id="drag1" draggable="true">1</span>
                  </div>
                </li>
                <li>
                  <div class="dropzone">
                    <input value="2" class="droparea" type="text" name="ord_lst_rep2" id="ord_lst_rep2" readonly/>
                    <span class="draggable_span" id="drag2" draggable="true">2</span>
                  </div>
                </li>
                <li>
                  <div class="dropzone">
                    <input value="3" class="droparea" type="text" name="ord_lst_rep3" id="ord_lst_rep3" readonly/>
                    <span class="draggable_span" id="drag3" draggable="true">3</span>
                  </div>
                </li>
                <li>
                  <div class="dropzone">
                    <input value="4" class="droparea" type="text" name="ord_lst_rep4" id="ord_lst_rep4" readonly/>
                    <span class="draggable_span" id="drag4" draggable="true">4</span>
                  </div>
                </li>
                <li>
                  <div class="droparea">
                    <span class="draggable_span" id="drag5" draggable="true">5</span>
                  </div>
                </li>
                <li>
                  <div class="droparea">
                    <span class="draggable_span" id="drag6" draggable="true">6</span>
                  </div>
                </li>
              </ul>
            </label>
          </div>
        </div>

      </div>

      <!-- Valid form -->
      <input value="" class="btn btn-primary btn-lg text-center" type="button"
      name="ord_lst_valid" value="Valider" onclick="loadQuiz('result.php', loadQuestion)" />

    </fieldset>
  </form>
</div>
