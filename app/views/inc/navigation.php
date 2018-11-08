<header>
      <nav class="navbar navbar-expand-md navbar-white bg-white text-dark">
        <a class="navbar-brand" href="#">
          <img src="https://via.placeholder.com/70x50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= URLROOT; ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Directoraat
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= URLROOT ?>directoraten/belasting">Directoraat Belastingen</a>
                <a class="dropdown-item" href="<?= URLROOT ?>directoraten/financien">Directoraat Financien</a>
                <a class="dropdown-item" href="<?= URLROOT ?>directoraten/plof">Directoraat PLOF</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Personeelzaken
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Personeelswet</a>
                <a class="dropdown-item" href="#">Studie</a>
                <a class="dropdown-item" href="#">Algemene Regels</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Activiteiten
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">HUBA</a>
                <a class="dropdown-item" href="<?= URLROOT ?>activiteiten/evenementen">Evenementen</a>
                <a class="dropdown-item" href="#">Jubilarisen</a>
                <a class="dropdown-item" href="#">Gepensioneerden</a>
                <a class="dropdown-item" href="#">Mijlpalen</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ICT
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">ICT Regels</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Personeelsbond</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Vacatures</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>