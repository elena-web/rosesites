function checkIfUser(){
  if (getCookie("username") === ""){
    window.location="login.php";
  }
  if (getCookie("password") === ""){
    window.location="login.php";
  }
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user = getCookie("username");
    var pass = getCookie("password");
    if (user == "admin" && pass == "pass1234") {
        window.location="dash.php";
    }
    else {
        window.location="login.php";
    }
}

function checkCookieForDash() {
    var user = getCookie("username");
    var pass = getCookie("password");
    if (user !== "admin" && pass !== "pass1234") {
        window.location="login.php";
    }
    else {
     return;
   }
}

function checkCookieForLogin() {
    var user = getCookie("username");
    var pass = getCookie("password");
    if (user == "admin" && pass == "pass1234") {
        window.location="dash.php";
    }
    else {
      return;
    }
}
