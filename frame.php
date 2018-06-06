    <div id="frame" class="container-fluid container-flex">
      <div class="row">
        <div id="sidebar" class="col-12 col-md-2">
          <div class="flex-md-column flex-row align-items-start rounded">
            <div id="sidebar-content" class="rounded">
              <div id="sidebar-content-content">
                <ul style="list-style-type:none" class="justify-content-left">
                  <li><button class="btn btn-link" onclick="document.getElementById('mainContent').src = 'dash_default.php'">Dashboard Home</button></li>
                  <li><label class="menu-label">DISTRIBUTED CONTROL SYS</label></li>
                  <li class="hover-list-item"><button class="btn btn-link" onclick="document.getElementById('mainContent').src = 'dash_controlRods.php'">Control Rods</button></li>
                  <li class="hover-list-item"><button class="btn btn-link" onclick="document.getElementById('mainContent').src = 'dash_condensers.php'">Condensers</button></li>
                  <li class="hover-list-item"><button class="btn btn-link" onclick="document.getElementById('mainContent').src = 'dash_turbines.php'">Turbines</button></li>
                  <li class="hover-list-item"><button class="btn btn-link" onclick="document.getElementById('mainContent').src = 'dash_generator.php'">Generator</button></li>
                  <li><label class="menu-label"><br/>IT SYSTEMS</label></li>
                  <li class="hover-list-item"><button class="btn btn-link" onclick="document.getElementById('mainContent').src = 'dash_networkTraffic.php'">Network Traffic</button></li>
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
