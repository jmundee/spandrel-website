<?php
  $data = json_decode(file_get_contents('./data/generalInfo.json'), true);
?>
<section class="section" id="Contact">
  <div class="container">
    <h3 class="fs-1 text-center mt-5 mb-5">
      Collaborative process and high quality deliverables:<br/>
      100% of completed project customers came back for a second project.
    </h3>

    <p class="fs-5 fw-bold text-uppercase text-center">
      Integrate the power of games into your project
      <a class="contact__cta" href="mailto:<?= $data['email'] ?>">
        Contact us
      </a>
    </p>
  </div>
</section>
