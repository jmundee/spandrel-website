<?php
  $data = json_decode(file_get_contents('./data/projects.json'), true);
?>
<nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark" id="header">
  <div class="container-fluid">
    <a class="navbar-brand" href="#home" title="Spandrel Interactive">
      <img src="/img/spandrel_logo_white.png" alt="Spandrel Interactive" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav ms-auto mb-2 mb-md-0 text-uppercase">
        <li class="nav-item">
          <a class="nav-link fs-5 fw-bold text-white mx-4 my-2" aria-current="page" href="#Solutions">Solutions</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link fs-5 dropdown-toggle fw-bold text-white mx-4 my-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Projects
          </a>
          <ul class="dropdown-menu bg-dark dropdown-menu-dark" aria-labelledby="navbarDropdown">
            <?php foreach($data as $project): ?>
              <li><a class="dropdown-item" href="#<?= $project['slug'] ?>"><?= $project['title'] ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5 fw-bold text-white mx-4 my-2" aria-current="page" href="#About">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5 fw-bold text-white mx-4 my-2" aria-current="page" href="#Contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
