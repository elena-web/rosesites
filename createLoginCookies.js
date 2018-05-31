var user;
var pass;

function getValues() {
    user = document.getElementById("user").value;
    pass = document.getElementById("pass").value;
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function createLoginCookies(){
  if (user !== "" && pass !== "") {
    setCookie("username", user, 1);
    setCookie("password", pass, 1);
  }
  else {
    document.getElementById("emptyBoxAlert").style.visibility= "visible";
  }
}

function isCorrectLogin(){
  if ((user == "admin") && (pass == "pass1234")){
    window.location="dash.html";
  }
  else {
    document.getElementById("incorrectLoginAlert").style.visibility = "visible";
  }
}

// works
function hideAlerts(){
  document.getElementById("incorrectLoginAlert").style.visibility = "hidden";
  document.getElementById("emptyBoxAlert").style.visibility = "hidden";
}

function doLoginFunctions(){
  hideAlerts();
  getValues();
  createLoginCookies();
  isCorrectLogin();
}
