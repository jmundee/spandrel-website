<?php
  $data = json_decode(file_get_contents('./data/generalInfo.json'), true);
?>
<footer class="bg-dark footer">
  <div class="container">
    <p class="text-center">
      <a
        href="<?php echo $data['linkedin'] ?>"
        target="_blank"
        class="footer__social-link"
        rel="noopener noreferrer"
        title="LinkedIn"
      >
        <img src="/img/linkedin.svg" role="presentation" width="36px"/>
      </a>
      <a
        href="<?php echo $data['facebook'] ?>"
        target="_blank"
        class="footer__social-link"
        rel="noopener noreferrer"
        title="Facebook"
      >
        <img src="/img/facebook-square.svg" role="presentation" width="36px"/>
      </a>
    </p>
    <p class="fs-5 text-center">
      <a class="footer__contact" href="mailto:<?php echo $data['email'] ?>"><?php echo $data['email'] ?></a><br/>
      <a class="footer__contact" href="tel:<?php echo $data['phone'] ?>"><?php echo $data['phone'] ?></a>
    </p>
    <p class="fs-5 mt-4 text-center">
      © <?php echo date("Y"); ?>, Spandrel Interactive Inc. Fredericton New Brunswick Canada
    </p>
  </div>
</footer>
