// $('.collapse').collapse()

function showHide1() {
    var x = document.getElementById("delivery");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
}

function hide1() {
    var x = document.getElementById("delivery");
     x.style.display = "none";
}

function showHide2() {
    var x = document.getElementById("address");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
}

function hide2() {
    var x = document.getElementById("address");
     x.style.display = "none";
}

function mySubmit() {
  alert("Thank you very much for your donation. Your donation is currently under reviewed. If you choose self-pickup, kindly upload the proof within 10 days or else your donation form will be cancelled.");
}

function mySubmit2() {
  alert("The requirments were updated, make sure to update again next week. Thank You!");
}