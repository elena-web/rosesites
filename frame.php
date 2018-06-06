<DOCTYPE! html>
<html lang="en">
  <head>
    <script>
      /*$(window).resize(function() {
        console.log("starting");
        var sidebar = document.getElementById("sidebar");
        console.log(sidebar);
        if (sidebar.width < 181){
          document.getElementById("frame").style('flex-direction') = "row";
          const style = window.getComputedStyle(el);
          console.log(style.setPropertyValue('flex-direction')); // using the method
          console.log(style.flexDirection); // accessing the property
        }
      });*/
    </script>
    <script type="text/javascript" src="test.js"></script>
  </head>
  <body>
    <div id="frame" class="container-fluid container-flex">
      <div class="row">
        <div id="sidebar" class="col-12 col-md-2 rounded">
          <div class="flex-md-column flex-row align-items-start rounded">
            <div id="sidebar-content" class="rounded">
              <div id="sidebar-content-content">
                <ul style="list-style-type:none" class="justify-content-left">
                  <li><button onclick="document.getElementById('mainContent').src = 'dash_default.php'">Dashboard Home</button></li>
                  <li><label class="menu-label">DISTRIBUTED CONTROL SYS</label></li>
                  <li class="hover-list-item"><button class="btn" onclick=" changeWindow()">Control Rods<span class="glyphicon glyphicon-menu-right hover-icon"></span></button></li>
                  <li class="hover-list-item"><button class="btn" onclick="document.getElementById('mainContent').src = 'dash_condensers.php'">Condensers<span class="glyphicon glyphicon-menu-right hover-icon"></span></button></li>
                  <li class="hover-list-item"><button class="btn" onclick="document.getElementById('mainContent').src = 'dash_turbines.php'">Turbines<span class="glyphicon glyphicon-menu-right hover-icon"></span></button></li>
                  <li class="hover-list-item"><button class="btn" onclick="document.getElementById('mainContent').src = 'dash_generator.php'">Generator<span class="glyphicon glyphicon-menu-right hover-icon"></span></button></li>
                  <li><label class="menu-label"><br/>IT SYSTEMS</label></li>
                  <li class="hover-list-item"><button class="btn" onclick="document.getElementById('mainContent').src = 'dash_networkTraffic.php'">Network Traffic<span class="glyphicon glyphicon-menu-right hover-icon"></span></button></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="content-area" class="col center-flex">
          <div id="content-area-content" class="rounded">
            <iframe id="mainContent" width="100%" height="100%" src="dash_default.php" frameBorder="0">
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
