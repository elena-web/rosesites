<h2>Turbines</h2>
<p>&nbsp; &nbsp; ICS Port: 9500</p>

<!-- Bootstrap core CSS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->

    <link href="https://getbootstrap.com/docs/4.1/examples/dashboard/dashboard.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- for charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>


<div style="height:300px; width:100%;">
  <canvas id="myChart" width="900" height="300"></canvas>
  <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
          type: 'bar',
          title:{
		        text: "Turbines"
	        },
          data: {
              labels: ["Turbine 1", "Turbine 2", "Turbine 3", "Turbine 4", "Turbine 5", "Turbine 6", "Turbine 7", "Turbine 8", "Turbine 9", "Turbine 10", "Turbine 11", "Turbine 12"],
              datasets: [{
                  label: 'Turbine Stress Level',
                  data: [6, 19, 10, 9, 7, 15, 9, 3, 6, 23, 19, 4],
                  backgroundColor: [
                      'rgba(255, 102, 0, 0.2)',
                      'rgba(255, 102, 0, 0.2)',
                      'rgba(255, 102, 0, 0.2)',
                      'rgba(255, 102, 0, 0.2)',
                      'rgba(255, 102, 0, 0.2)',
                      'rgba(255, 102, 0, 0.2)',
                      'rgba(255, 102, 0, 0.2)',
                      'rgba(255, 102, 0, 0.2)',
                      'rgba(255, 102, 0, 0.2)',
                      'rgba(255, 102, 0, 0.2)',
                      'rgba(255, 102, 0, 0.2)',
                      'rgba(255, 102, 0, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255, 102, 0, 1)',
                      'rgba(255, 102, 0, 1)',
                      'rgba(255, 102, 0, 1)',
                      'rgba(255, 102, 0, 1)',
                      'rgba(255, 102, 0, 1)',
                      'rgba(255, 102, 0, 1)',
                      'rgba(255, 102, 0, 1)',
                      'rgba(255, 102, 0, 1)',
                      'rgba(255, 102, 0, 1)',
                      'rgba(255, 102, 0, 1)',
                      'rgba(255, 102, 0, 1)',
                      'rgba(255, 102, 0, 1)'
                  ],
                  borderWidth: 3
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero:false
                        }
                  }]
              }
          }
      });
  </script>









        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>


    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Bootstrap core CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->

    <link href="https://getbootstrap.com/docs/4.1/examples/dashboard/dashboard.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
