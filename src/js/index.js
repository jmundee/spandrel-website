import 'bootstrap';
import { ScrollSpy } from 'bootstrap';

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
  scrollTo(0, target.offsetTop - headerHeight)
}
anchorLinks.forEach(anchor => {
  anchor.addEventListener('click', fixAnchorScroll)
})
