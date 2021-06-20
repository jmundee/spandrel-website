<div class="project__slider-wrapper">
  <div class="project__slider">
    <?php foreach($slides as $slide): ?>
      <div class="ratio ratio-16x9">
        <?php if($slide['type'] === "image"): ?>
          <div class="text-center">
            <img src="/img/projects/<?= $slide['src'] ?>" class="img-fluid"/>
          </div>
        <?php else: ?>
          <iframe
            type="text/html"
            src="http://www.youtube.com/embed/<?= $slide['src'] ?>?autoplay=0"
          ></iframe>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="project__slider-arrows">
    <button type="button" data-controls="prev">&lt;</button>
    <button type="button" data-controls="next">&gt;</button>
  </div>
</div>
