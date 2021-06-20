<?php
  $data = json_decode(file_get_contents('./data/projects.json'), true);
  foreach($data as $project):
?>
  <section id="<?= $project['slug'] ?>" class="section">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2  align-items-center">
        <div class="col col-md-5">
          <h3 class="fs-5 mb-4 text-uppercase project__title">
            <?= $project['title'] ?>
          </h3>
          <p class="fs-5 project__description">
            <?= $project['description'] ?>
          </p>
        </div>
        <div class="col col-md-7 order-md-first">
          <?php
            $slides = $project['slides'];
            include 'projectSlider.php';
          ?>
        </div>
      </div>
      <?php include 'back-to-top.php' ?>
    </div>
  </section>
<?php endforeach; ?>
