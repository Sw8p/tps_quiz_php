<!------------------ QRU ------------------>
<div class="question jumbotron jumbotron-fluid text-center" id="qru">
  <form action="" method="post">
    <fieldset>
      <legend>
        <h1 class="display-4 text-center">Question 1 </h1>
        <p class="lead">question à choix unique</p>
      </legend>
      <hr class="my-4">
      <label>Lorem ipsum dolor sit amet, consectetur adipiscing elit</label>
      <br />
      <input name="qru_rep" id="qru_rep1" type="radio" value="Vrai"/><label for="qru_rep1">Vrai</label>
      <input name="qru_rep" id="qru_rep2" type="radio" value="Faux"/><label for="qru_rep2">Faux</label>
      <br />
      <input class="btn btn-primary btn-lg text-center" type="submit" name="qru_valid" value="Valider" />
    </fieldset>
  </form>
</div>

<!------------------ QRM ------------------>
<div class="question jumbotron jumbotron-fluid text-center" id="qrm">
  <form action="" method="post">
    <fieldset>
      <legend>
        <h1 class="display-4 text-center">Question 2 </h1>
        <p class="lead">question à choix multiples</p>
      </legend>
      <hr class="my-4">
      <label>Aliquam dictum, velit nec congue volutpat, diam nisl accumsan felis, sed dignissim lectus diam et lorem. In ullamcorper libero vel massa cursus, ut vehicula turpis gravida. Phasellus varius convallis dui, eget fermentum nunc pretium sed. Vivamus interdum ornare nunc, elementum tincidunt neque aliquam nec.</label>
      <br />
      <input name="qrm_rep" id="qrm_rep1" type="checkbox" value="qrm_rep1"/><label for="qrm_rep1">Réponse 1</label>
      <input name="qrm_rep" id="qrm_rep2" type="checkbox" value="qrm_rep2"/><label for="qrm_rep2">Réponse 2</label>
      <input name="qrm_rep" id="qrm_rep3" type="checkbox" value="qrm_rep3"/><label for="qrm_rep3">Réponse 3</label>
      <input name="qrm_rep" id="qrm_rep4" type="checkbox" value="qrm_rep4"/><label for="qrm_rep4">Réponse 4</label>
      <br />
      <input class="btn btn-primary btn-lg text-center" type="submit" name="qrm_valid" value="Valider" />
    </fieldset>
  </form>
</div>

<!------------------ Curseur ------------------>
<div class="question jumbotron jumbotron-fluid text-center" id="curseur">
  <form action="" method="post">
    <fieldset>
      <legend>
        <h1 class="display-4 text-center">Question 3 </h1>
        <p class="lead">question type curseur</p>
      </legend>
      <hr class="my-4">
      <label for="">Maecenas vel lobortis orci. Praesent fringilla interdum lacus, eu placerat lacus scelerisque ut.</label>
      <br />
      <input type="range" name="crs" id="crs" min="0" max="100" step="10">
      <br />
      <span class="crs_count"></span>
      <br />
      <input class="btn btn-primary btn-lg text-center" type="submit" name="crs_valid" value="Valider" />
    </fieldset>
  </form>
</div>

<!------------------ Text à trou ------------------>
<div class="question jumbotron jumbotron-fluid text-center" id="select">
  <form action="" method="post">
    <fieldset>
      <legend>
        <h1 class="display-4 text-center">Question 4 </h1>
        <p class="lead">Texte à trou</p>
      </legend>
      <hr class="my-4">
      <p>
        <em>Instruction : </p><br />
        Nullam semper velit quam. Duis luctus convallis dignissim. Cras maximus condimentum vehicula. Sed ultrices libero augue, quis suscipit urna sollicitudin quis.
      </p>
      <br />
      <label for="slct1">Lorem ipsum dolor sit
        <select id="slct1" name="slct1" required>
            <option selected>...</option>
            <option>option 1</option>
            <option>option 2</option>
            <option>option 3</option>
        </select>
        , consectetur adipiscing elit</label>
      <label for="slct2">Nullam ultricies dapibus tellus, ut tristique ante luctus id.
        <select id="slct2" name="slct2" required>
            <option selected>...</option>
            <option>option 1</option>
            <option>option 2</option>
        </select>
        Morbi aliquam consequat nisi quis facilisis. Nam a urna ultricies, bibendum nibh vel, rhoncus tellus.</label>
      <label for="slct3">Duis turpis ex, congue vel ipsum sit amet, cursus imperdiet purus. Etiam enim justo, egestas eget pulvinar et, finibus id nisi. Vivamus elementum,
        <select id="slct3" name="slct3" required>
            <option selected>...</option>
            <option>option 1</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
        </select>
      </label>
      <br />
      <input class="btn btn-primary btn-lg text-center" type="submit" name="slct_valid" value="Valider" />
    </fieldset>
  </form>
</div>

<!------------------ Association ------------------>
<div class="question jumbotron jumbotron-fluid text-center" id="assoc">
  <form action="" method="post">
    <fieldset>
      <legend>
        <h1 class="display-4 text-center">Question 5 </h1>
        <p class="lead">Association</p>
      </legend>
      <hr class="my-4">
      ...
      <input class="btn btn-primary btn-lg text-center" type="submit" name="assoc_valid" value="Valider" />
    </fieldset>
  </form>
</div>

<!------------------ IMG BTN ------------------>
<div class="question jumbotron jumbotron-fluid text-center" id="img_btn">
<form action="" method="post">
  <fieldset>
    <legend>
      <h1 class="display-4 text-center">Question 6 </h1>
      <p class="lead">Image bouton</p>
    </legend>
    <hr class="my-4">
    <label>Lorem ipsum dolor sit amet, consectetur adipiscing elit</label>
    <br />
    <!-- input type Image
      attr <img /> src , alt , height , width , ...
      return la position -coordonnées x & y de l'event click sur l'input img:
        en get avec le name de input ou sans name si non préciser:
         url?x=<val>&y=<val>  ,  url?nameInput.x=<val>&nameInput.y=<val>
    -->
    <input name="img_btn_rep" id="img_btn_rep1" type="image" src="" alt="image 1" width="48" height="48"/>
    <input name="img_btn_rep" id="img_btn_rep2" type="image" src="" alt="image 2" width="48" height="48"/>
    <input name="img_btn_rep" id="img_btn_rep3" type="image" src="" alt="image 3" width="48" height="48"/>
    <br />
    <p>
      <em>Avec une ancre get...:</p>
    </p>
    <a href="index.php?img_ancre=monImg"><img src="" alt="image ancre" width="48" height="48"/></a>
    <br />
    <input class="btn btn-primary btn-lg text-center" type="submit" name="img_btn_valid" value="Valider" />
  </fieldset>
</form>
</div>
