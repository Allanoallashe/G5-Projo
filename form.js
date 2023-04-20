
  // first password
document.getElementById('hide').onclick = () => {
  document.getElementById('view').style.display="contents";
  document.getElementById('hide').style.display = "none";
  document.getElementById('pwd1').type="text";
  document.getElementById('pwd1').style.letterSpacing="5px";
}
document.getElementById('view').onclick = () => {
  document.getElementById('view').style.display="none";
  document.getElementById('hide').style.display = "contents";
  document.getElementById('pwd1').type = "password";
  document.getElementById('pwd1').style.letterSpacing="14px";
}

  // second password
document.getElementById('hider').onclick = () => {
  document.getElementById('viewer').style.display="contents";
  document.getElementById('hider').style.display = "none";
  document.getElementById('pwd2').type = "text";
  document.getElementById('pwd2').style.letterSpacing="5px";
}
document.getElementById('viewer').onclick = () => {
  document.getElementById('viewer').style.display="none";
  document.getElementById('hider').style.display = "contents";
  document.getElementById('pwd2').type="password";
  document.getElementById('pwd2').style.letterSpacing="14px";
}