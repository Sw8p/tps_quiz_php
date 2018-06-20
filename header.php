<header>
  <!------------------ HEADER ------------------>
  <div class="jumbotron text-center" id="head_box">
    <h1>SteeriTest</h1>
    <h3>Demo</h3>
  <p>Présentation des différents gameplays</p>
  </div>

  <!------------------ MENU ------------------>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top justify-content-md-center" id="menu">

    <!-- Brand & toogleNav -->
    <a class="navbar-brand" href=""><h3>MENU</h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- nav item -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto nav-fill">
        <li class="nav-item active">
          <a class="nav-link" href="#demo" onclick="loadQuiz('demo.php', loadQuestion)">Demo <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item"><a class="nav-link" href="#qru" onclick="loadQuiz('qru.php', loadQuestion)">QRU</a></li>
        <li class="nav-item"><a class="nav-link" href="#qrm" onclick="loadQuiz('qrm.php', loadQuestion)">QRM</a></li>
        <li class="nav-item"><a class="nav-link" href="#curseur" onclick="loadQuiz('curseur.php', loadQuestion)">Curseur</a></li>
        <li class="nav-item"><a class="nav-link" href="#txt_trou" onclick="loadQuiz('select.php', loadQuestion)">Texte à trou</a></li>
        <li class="nav-item"><a class="nav-link" href="#assoc" onclick="loadQuiz('assoc.php', loadQuestion)">Association</a></li>
        <li class="nav-item"><a class="nav-link" href="#img_btn" onclick="loadQuiz('img_btn_qru.php', loadQuestion)">Image click</a></li>
        <li class="nav-item"><a class="nav-link" href="#img_btn" onclick="loadQuiz('img_btn_qrm.php', loadQuestion)">Image multi click</a></li>
        <li class="nav-item"><a class="nav-link" href="#d&d" onclick="loadQuiz('d&d.php', loadQuestion)">Drag & Drop</a></li>
        <li class="nav-item"><a class="nav-link" href="#ord_lst" onclick="loadQuiz('ord_lst.php', loadQuestion)">Liste ordonnée</a></li>
        <li class="nav-item"><a class="nav-link" href="#result" onclick="loadQuiz('result.php', loadQuestion)">Résultat</a></li>
      </ul>
    </div>

    <!-- nav log -->
    <!--<button type="button" class="btn btn-outline-primary btn-lg" disabled>Démo login</button>-->
    <ul class="nav nav-pills float-md-right">
      <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Démo</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Profil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Déconnect</a>
        </div>
      </li>
    </ul>


  </nav>

</header>
