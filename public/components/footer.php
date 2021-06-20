<?php
  $data = json_decode(file_get_contents('./data/generalInfo.json'), true);
?>
<footer class="bg-dark footer">
  <div class="container">
    <p class="text-center">
      <a
        href="<?= $data['linkedin'] ?>"
        class="footer__social-link"
        target="_blank"
        rel="noopener noreferrer"
        title="LinkedIn"
      >
        <img src="/img/linkedin.svg" role="presentation" width="36px"/>
      </a>
      <a
        href="<?= $data['facebook'] ?>"
        class="footer__social-link"
        target="_blank"
        rel="noopener noreferrer"
        title="Facebook"
      >
        <img src="/img/facebook-square.svg" role="presentation" width="36px"/>
      </a>
    </p>
    <p class="fs-5 text-center">
      <a class="footer__contact" href="mailto:<?= $data['email'] ?>"><?= $data['email'] ?></a><br/>
      <a class="footer__contact" href="tel:<?= $data['phone'] ?>"><?= $data['phone'] ?></a>
    </p>
    <p class="fs-5 mt-4 text-center">
      © <?php echo date("Y"); ?>, Spandrel Interactive Inc. Fredericton New Brunswick Canada
    </p>
  </div>
</footer>
