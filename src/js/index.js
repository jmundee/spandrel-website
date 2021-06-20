import 'bootstrap';
import { ScrollSpy } from 'bootstrap';

console.log('SPANDREL INTERACTIVE');

new ScrollSpy(document.body, {
  target: '#navbar',
  offset: 150
});
