window.onload = function() {  alert("OK");

document.getElementById("re_name").innerHTML = sessionStorage.getItem("NAME");
document.getElementById("re_kana").innerHTML = sessionStorage.getItem("KANA");
document.getElementById("re_tel").innerHTML = sessionStorage.getItem("TEL");
document.getElementById("re_email").innerHTML = sessionStorage.getItem("Email");
document.getElementById("re_body").innerHTML = sessionStorage.getItem("BODY");
};
document.getElementById("send_last").onclick = function() {
  document.location.href = "complete.php";
};
document.getElementById("send_back").onclick = function() {
  document.location.href = "contact.php";
};
