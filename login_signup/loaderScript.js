var myVar;

function myFunction() {

  myVar = setTimeout(showPage, 1000);
}

function showPage() {
  let loaderTimer = document.getElementById("loader");

  document.getElementById("myDiv").style.display = "block";
  setTimeout(changeVisibility,1000);
}

function changeVisibility() {
  document.getElementById("loader").style.display = "none";
}
