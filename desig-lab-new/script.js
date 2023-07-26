const SERVER_URL =
  "http://localhost/voodooDigital/t-shirt-thing/desig-lab-new/";

// signIn
let signInModel;
document.getElementById("signInBtn").addEventListener("click", () => {
  signInModel = new bootstrap.Modal("#signInModel");
  signInModel.show();
});

// function toggleDropdown() {
//   var dropdownMenu = document.querySelector(".dropdown-menu");
//   dropdownMenu.classList.toggle("show");
// }

function setColor(color) {
  var smallBox = document.querySelector(".small-box");
  smallBox.style.backgroundColor = color;

  var dropdownContent = document.getElementById("dropdownContent1");
  dropdownContent.style.display = "none";
}

// // Function to hide the dropdown menu
// function hideDropdown() {
//   var dropdownMenu = document.querySelector(".dropdown-menu");
//   dropdownMenu.classList.remove("show");
// }

// // Add event listener to the document for clicks
// document.addEventListener("click", function(event) {
// var dropdown = document.querySelector(".dropdown");
// var dropdownMenu = document.querySelector(".dropdown-menu");

// // Check if the click target is within the dropdown or its menu
// if (!dropdown.contains(event.target)) {
// // Click target is outside of the dropdown, hide the menu
// dropdownMenu.classList.remove("show");
// }
// });

function toggleDropdown1() {
  var dropdownContent = document.getElementById("dropdownContent1");
  if (dropdownContent.style.display === "flex") {
    dropdownContent.style.display = "none";
  } else {
    dropdownContent.style.display = "flex";
  }
}

function toggleDropdown2() {
  var dropdownContent = document.getElementById("dropdownContent2");
  if (dropdownContent.style.display === "flex") {
    dropdownContent.style.display = "none";
  } else {
    dropdownContent.style.display = "flex";
  }
}

function sectionSwitch(clcikbtn) {
  // for (let index =1; index<=2; index++){
  // document.getElementById("pro_box"+index).style.display="none";
  // }
  document.getElementById("t_changeblock1").style.display = "none";
  document.getElementById("t_changeblock2").style.display = "none";
  document.getElementById("t_changeblock3").style.display = "none";
  document.getElementById("t_changeblock4").style.display = "none";

  document.getElementById(clcikbtn).style.display = "block";
}

document.getElementById("signInActionBtn").addEventListener("click", () => {
  let form = new FormData();
  form.append("email", document.getElementById("emailInput").value);
  form.append("password", document.getElementById("passwordInput").value);

  let request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      console.log(request.responseText);
      window.location.reload();
    }
  };
  request.open("POST", SERVER_URL + "backend/sign_in.php", true);
  request.send(form);
});
