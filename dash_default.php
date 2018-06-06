<p>YOU ARE HOME<br/></p>
<!--<canvas class="my-4 w-100" id="myChart" width="900" height="380" style="border:1px solid #000000"></canvas>-->

<div class="" style="height:400px; width:400px;">
  <script>
    window.onload = function (){
      var crc = document.getElementById("controlRodsChart");
      var crChart = new CanvasJS.Chart(crc, {
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
      chart.render();
    }
  </script>
  <canvas id="controlRodsChart" class="my-4 w-100 chartjs-render-monitor" width="600" height="400" style="display:block; border:1px solid #000000"></canvas>
</div>
