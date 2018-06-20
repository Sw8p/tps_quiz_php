<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SteeriTest Démo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="assets/style.css" />
  <!-- icon stars -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <!------------------ HEADER - NAV ------------------>
  <?php include("header.php");?>

  <!------------------ QUIZ ------------------>
<div id="box_quiz" class="d-flex flex-column align-items-center justify-content-center">

  <!------------------ DEMO ------------------>
  <div class="question jumbotron text-center" id="demo">
    <h1 class="display-4 text-center">Test de niveau EasyDriver</h1>
    <p class="lead">
      Permettre à chacun particulier comme professionnel
       d'évaluer sa connaissance et sa compréhension
       de l'écosystème de la route.
    </p>
    <hr class="my-4">
    <p>
      A travers un questionnaire d'une centaine de questions,
       et dans un temps limité,
      le candidat devra répondre correctement
       à un maximum de questions.
     Il obtiendra en retour une note sous forme de badge,
     et un diagramme en radar représentatif de ses forces et faiblesses.
   </p>
   <div id="tne_pres_gameplays">
        <p>
          <ul>
            <h5>Le questionnaire peut prendre la forme :</h5>
            <li>d'un QCM à choix unique</li>
            <li>d'un QCM à choix multiple</li>
            <li>d'un text à trous</li>
            <li>d'une liste ordonnée</li>
            <li>d'une analyse d'images</li>
            <li>d'une analyse vidéo</li>
          </ul>
        </p>
    </div>

    <button class="btn btn-primary btn-lg text-center" type="button"
    onclick="loadQuiz('qru.php', loadQuestion)">Commencer la demo</a>
  </div>

</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/script.js"></script>
</body>
</html>
