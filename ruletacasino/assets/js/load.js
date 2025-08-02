let eventStatus = false;
const bodyEl = document.querySelector("body");
const styles = [
  "/wp-content/themes/ruletacasino/assets/css/style.css",
  "/wp-includes/css/dist/block-library/style.min.css",
  "/wp-includes/css/classic-themes.min.css",
  "/wp-content/themes/ruletacasino/style.css",
];
const scripts = [
  "/wp-content/themes/ruletacasino/assets/js/app.min.js",
  "/wp-includes/js/dist/vendor/lodash.min.js",
  "/wp-content/themes/ruletacasino/js/navigation.js"
];

window.addEventListener("load", function () {
  ["mouseover", "click", "scroll"].forEach(function (event) {
    window.addEventListener(event, function () {

      if (!eventStatus) {
        styles.forEach(el => {
          const newStyle = document.createElement("link");
          newStyle.setAttribute("rel", "stylesheet");
          newStyle.setAttribute("href", el);
          bodyEl.appendChild(newStyle);
        })

        scripts.forEach(el => {
          const newScript = document.createElement("script");
          newScript.src = el;
          bodyEl.appendChild(newScript);
        })

        eventStatus = true;
      }

    }, {
      once: true
    });

  });

});
