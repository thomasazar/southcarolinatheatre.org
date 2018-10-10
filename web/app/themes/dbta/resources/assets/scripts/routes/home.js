import baguetteBox from 'baguettebox.js/dist/baguetteBox.min.js';

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    baguetteBox.run('.photo-credit');
  },
};
