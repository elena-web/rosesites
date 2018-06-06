<DOCTYPE! html>
<html lang="en">
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- jQuery -->
      <script src="jquery-3.3.1.min.js"></script>
      
      <script src="js/bootstrap.min.js"></script>
    <!-- External CSS -->
      <link type="text/css" rel="stylesheet" href="stylesheet.css">
    <!-- External JavaScript -->
      <script src="verifyLogin.js"></script>
      <script type = "text/javascript">
        $(document).ready(function(){
          checkIfUser();
          checkCookieForDash();
        });
      </script>
      <script type="text/javascript" src="test.js"></script>
    <!-- Title -->
    <title><?php echo('ACME NUCLEAR POWER :: '. $pageTitle); ?></title>
  </head>
  <body>
    <div id="background" class="full-page no-scroll"></div>
    <div class="container-fluid center-flex">
      <div class="row header-size center-flex">
        <div class="col-md-2"></div>
        <div class="col-md-8 center-flex">
          <span id="company-name" class="center-flex">
            ACME NUCLEAR POWER <img src="images/logo_WHITE.png" alt="" id="logo-image" class="image-responsive align-text-bottom hidden-sm hidden-xs" style="height:7vmin;">
          </span>
        </div>
        <div class="col-md-2"></div>
      </div>
      <!--<div class="row spacer">
        <div class="col-md-5"></div>
        <div class="col-md-2 center-flex">
          <img src="images/logo_WHITE.png" alt="" id="logo-image" class="image-responsive align-text-bottom hidden-sm hidden-xs">
        </div>
        <div class="col-md-5"></div>
      </div>-->
    </div>
    <?php include_once "frame.php"; ?>
  </body>
</html>
