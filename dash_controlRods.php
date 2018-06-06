<p>This is the Control Rods page<br/></p>

<div style="height:400px; width:400px;">
  <canvas id="myChart" width="400" height="400"></canvas>
  <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
          type: 'column',
          animationEnabled: true,
          data: {
              title:{
                text: "Control Rod Levels"
              }
              labels: ["Rod Bundle 1", "Rod Bundle 2", "Rod Bundle 3", "Rod Bundle 4", "Rod Bundle 5", "Rod Bundle 6"],
              datasets: [{
                  label: 'Rod Deployment Level',
                  data: [12, 19, 3, 5, 2, 3],
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(255, 99, 132, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255,99,132,1)',
                      'rgba(255,99,132,1)',
                      'rgba(255,99,132,1)',
                      'rgba(255,99,132,1)',
                      'rgba(255,99,132,1)',
                      'rgba(255,99,132,1)'
                  ],
                  borderWidth: 3
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero:true
                      }
                  }]
              }
          }
      });
  </script>
