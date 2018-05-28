function getValues() {
    var user = getElementById("user");
    var pass = getElementById("pass");
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function createLoginCookies(){
  if (user != "" && pass != "") {
    setCookie(username, user, 1);
    setCookie(password, pass, 1);
  }
  else {
    var emptyElem = document.getElementById("emptyBoxAlert");
    emptyElem.style.opacity = "100";
  }
}

function isCorrectLogin(){
  if (user == "admin" && pass == "pass1234"){
    window.location.href="dash.html";
  }
  else {
    var loginElem = document.getElementById("incorrectLoginAlert");
    loginElem.style.opacity = "100";
  }
}

getValues();
createLoginCookies();
isCorrectLogin();
