const toggleButton = document.getElementById('dark-mode-toggle');
const body = document.body;
const footer = document.getElementById("footer");
const header = document.getElementById("header");


toggleButton.addEventListener('click', () => {
  body.classList.toggle('dark-mode');
  footer.classList.toggle('dark-mode-footer');
  header.classList.toggle('dark-mode-header');
});

function mouseOver(){
    document.getElementById("logo-changes").style.content = "url(images/logo-light.png)";
}
function mouseOut(){
    document.getElementById("logo-changes").style.content = "url(images/logo-dark.png)";
}

  const textElement = document.querySelector('#text');

  // Add a scroll event listener to the window object
  window.addEventListener('scroll', function() {
    // Calculate the opacity of the text based on the scroll position
    const opacity = 1 - (window.scrollY / textElement.offsetTop);

    // Set the opacity of the text
    textElement.style.opacity = opacity;
  });

  function createPieChart() {
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Red', 'Blue', 'Yellow'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true
    }
  });
}