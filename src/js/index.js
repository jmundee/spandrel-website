import 'bootstrap';
import { ScrollSpy } from 'bootstrap';
import { tns } from 'tiny-slider/src/tiny-slider';

console.log('SPANDREL INTERACTIVE');

new ScrollSpy(document.body, {
  target: '#header',
  offset: 150
});

const anchorLinks = document.querySelectorAll('[href*="#"]')
const headerHeight = 78;
const fixAnchorScroll = event => {
  event.preventDefault();
  const target = document.querySelector(event.target.hash);
  if (target) {
    scrollTo(0, target.offsetTop - headerHeight)
  }
}
anchorLinks.forEach(anchor => {
  anchor.addEventListener('click', fixAnchorScroll)
})

const tnsBasicConfig = {
  items: 1,
  gutter: 24,
  controlsPosition: "bottom",
  navPosition: "bottom",
  controlsText: ["<", ">"]
}

tns({
  container: '.about__slider',
  ...tnsBasicConfig,
  loop: false,
  slideBy: "page",
  responsive: {
    768: {
      items: 2
    },
    992: {
      items: 3
    },
    1200: {
      items: 4
    }
  }
});

const projectSlider = containerElem => {
  return tns({
    container: containerElem,
    ...tnsBasicConfig,
    center: true,
    loop: true,
    controlsContainer: containerElem.querySelector('.arrows')
  });
}
