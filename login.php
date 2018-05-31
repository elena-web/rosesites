<?php
$pageTitle = 'Login';
include_once "header.php";
?>
  <head>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <p class="hidden-alert bg-danger center-flex text-center rounded" id="incorrectLoginAlert">
            <button type="button" class="close hide-element align-text-bottom" aria-label="Close" onclick="hideElement()"><span aria-hidden="true">&times;</span></button>
            The username or password you entered was incorrect.
          </p>
          <p class="hidden-alert bg-warning center-flex text-center rounded" id="emptyBoxAlert">
            <button type="button" class="close hide-element align-text-bottom" aria-label="Close" onclick="hideElement()"><span aria-hidden="true">&times;</span></button>
            Please enter both a username and a password.
          </p>
          <div id="loginBox" class="rounded">
            <form id="loginForm">
              <label class="form-group">Please log in.</label>
              <input type="text" name="username-box" placeholder="username" id="user" class="form-control"><br>
              <input type="text" name="password-box" placeholder="password" id="pass" class="form-control"><br>
              <button type="button" form="loginForm" onclick="doLoginFunctions()" class="btn btn-primary" value="Submit">Submit</button>
            </form>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </body>
</html>
