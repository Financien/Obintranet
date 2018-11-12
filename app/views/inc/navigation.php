<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="#">
          <img class= "headerimg" src="./public/img/wapensuriname.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <a class="nav-link" href="<?= URLROOT; ?>"><i class="fas fa-home"></i> Home</a>
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
                <a class="dropdown-item" href="<?= URLROOT ?>personeelzaken/personeelswet">Personeelswet</a>
                <a class="dropdown-item" href="<?= URLROOT ?>personeelzaken/studie">Studie</a>
                <a class="dropdown-item" href="<?= URLROOT ?>personeelzaken/algemeneregels">Algemene Regels</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Activiteiten
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= URLROOT ?>activiteiten/huba">HUBA</a>
                <a class="dropdown-item" href="<?= URLROOT ?>activiteiten/evenementen">Evenementen</a>
                <a class="dropdown-item" href="<?= URLROOT ?>activiteiten/jubilarisen"">Jubilarisen</a>
                <a class="dropdown-item" href="#">Gepensioneerden</a>
                <a class="dropdown-item" href="#">Mijlpalen</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ICT
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= URLROOT ?>ICT/ictregels">ICT Regels</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= URLROOT ?>personeelbond">Personeelsbond</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Vacatures</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>