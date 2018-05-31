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
    var cookie = cname + "=" + cvalue + "; " + expires + "; path=/";
    console.log(cookie);
    document.cookie = cookie;
    //document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function createLoginCookies(){
  if (user !== "" && pass !== "") {
    setCookie("username", user, 1);
    setCookie("password", pass, 1);
  }
  else {
    document.getElementById("emptyBoxAlert").style.display= "flex";
  }
}

function isCorrectLogin(){
  console.log(user + " = username " + pass + " = password");
  if ((user == "admin") && (pass == "pass1234")){
    //console.log("Inside isCorrectLogin if statement.");
    window.location ="dash.html";
    //window.location.assign(https://rosesites.com/dash.html);
  }
  else {
    document.getElementById("incorrectLoginAlert").style.display = "flex";
  }
}

// works
function hideAlerts(){
  document.getElementById("incorrectLoginAlert").style.display = "none";
  document.getElementById("emptyBoxAlert").style.display = "none";
}

function doLoginFunctions(){
  console.log("Starting");
  //window.alert("starting hideAlerts");
  hideAlerts();
  console.log("Past hideAlerts");
  //window.alert("starting getValues");
  getValues();
  //window.alert("starting createLoginCookies");
  createLoginCookies();
  //window.alert("starting isCorrectLogin");
  isCorrectLogin();
  console.log("finished");
}

function dummy(){
  console.log("Button clicked.");
}
