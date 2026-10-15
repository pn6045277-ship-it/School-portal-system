const login = document.getElementById("login");
const sign_up = document.getElementById("sign_up");
const log = document.getElementById("log");
const register = document.getElementById("register");

register.onclick = function(){
  sign_up.style.display = "block";
  login.style.display = "none";
}
log.onclick = function(){
  sign_up.style.display = "none";
  login.style.display = "block";
}