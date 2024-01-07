var numberOfElement = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16];
var initialRender = numberOfElement.slice(0, 15); // TAKIT: Modified to test

function renderAngle(data) {
  var angles = [360];
  data.forEach(function (item, index) {
    angles.push((angles[index] + 30) % 360); // TAKIT: Added modulo
  });
  return angles;
}

function generateHtml() {
  var html = "";
  var angles = renderAngle(initialRender);
  angles.forEach(function (item, index) {
    // TAKIT: Added use of a CSS var here, so all the CSS is in the CSS!
    html +=
      '<div class="shapes' + '" style="--deg:' + item + 'deg;">' + "</div>";
  });
  document.querySelector(".progress-circle-background").innerHTML += html; // TAKIT: Moved it here, after the loop
}

generateHtml();
