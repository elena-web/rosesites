function checkIfUser(){
  if (getCookie("username") == ""){
    window.location.href="login.html";
  }
  if (getCookie("password") == ""){
    window.location.href="login.html";
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
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user = getCookie("username");
    var pass = getCookie("password");
    if (user == "admin" && pass == "pass1234") {
        window.location.href="dashboard.html";
    }
    else {
        window.location.href="login.html";
    }
}
