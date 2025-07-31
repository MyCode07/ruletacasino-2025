// import './utils/smoothscrol.js';
import './utils/menu.js';
import './utils/sliders.js';
// import './utils/animations.js';

// import './utils/mouse.js';
// import './utils/ticker.js';
import './utils/to-top.js';
import './utils/popup.js';
// import './utils/inputmask.js';
// import './utils/forms.js';
import './utils/accordeon.js';
import './utils/replace.js';
import './utils/lazyImages.js';
import './utils/breadcrumbs.js';


document.addEventListener('click', function (e) {
    let targetEl = e.target;
    if (targetEl.classList.contains('pages-close')) {
        document.querySelector('.pages').classList.toggle('_hide');
    }
})