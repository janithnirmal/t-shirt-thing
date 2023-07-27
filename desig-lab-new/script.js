const SERVER_URL =
  "http://localhost/voodooDigital/t-shirt-thing/desig-lab-new/";

// signIn
let signInModel;
try {
  document.getElementById("signInBtn").addEventListener("click", () => {
    signInModel = new bootstrap.Modal("#signInModel");
    signInModel.show();
  });
} catch (error) {}

// function toggleDropdown() {
//   var dropdownMenu = document.querySelector(".dropdown-menu");
//   dropdownMenu.classList.toggle("show");
// }

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

try {
  document.getElementById("signInActionBtn").addEventListener("click", () => {
    let form = new FormData();
    form.append("email", document.getElementById("emailInput").value);
    form.append("password", document.getElementById("passwordInput").value);

    let request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if (request.readyState == 4) {
        let response = request.responseText;
        if (response.status == "success") {
          window.location.reload();
        } else if (response.status == "failed") {
          alert(response.error);
        }
      }
    };
    request.open("POST", SERVER_URL + "backend/sign_in.php", true);
    request.send(form);
  });
} catch (error) {}

// gender
let genderModel;
function openGenderModel() {
  genderModel = new bootstrap.Modal("#genderModel");
  genderModel.show();
}

let genderInputs = document.querySelectorAll('input[name="genderRadioInput"]');
for (let i = 0; i < genderInputs.length; i++) {
  let input = genderInputs[i];
  input.addEventListener("change", () => {
    let selectedOption;
    if (input.checked) {
      selectedOption = input.value;
    }
    dataObject.gender = selectedOption;

    let btn = document.getElementById("genderControlBtn");
    if (selectedOption == "male") {
      btn.classList.remove("btn-info");
      btn.classList.add("btn-primary");
      btn.innerText = "Men";
    } else if (selectedOption == "female") {
      btn.classList.remove("btn-primary");
      btn.classList.add("btn-info");
      btn.innerText = "Women";
    }

    render(dataObject);
  });
}

// print type
let printTypeModel;
function openPrintTypeModel() {
  printTypeModel = new bootstrap.Modal("#printTypeModel");
  printTypeModel.show();
}

let printTypeInputs = document.querySelectorAll(
  'input[name="printTypeRadioInput"]'
);
for (let i = 0; i < printTypeInputs.length; i++) {
  let input = printTypeInputs[i];
  input.addEventListener("change", () => {
    let selectedOption;
    if (input.checked) {
      selectedOption = input.value;
    }
    dataObject.printType = selectedOption;

    let btn = document.getElementById("printTypeControlBtn");
    if (selectedOption == "Embroidered") {
      btn.classList.remove("btn-primary");
      btn.classList.add("btn-info");
    } else if (selectedOption == "ScreenPrint") {
      btn.classList.remove("btn-info");
      btn.classList.add("btn-primary");
    }
    btn.innerText = selectedOption;

    render(dataObject);
  });
}

// color type
let colorControlModelModel;
function openModelColorControl() {
  colorControlModelModel = new bootstrap.Modal("#colorControlModel");
  colorControlModelModel.show();
}

function setColor(color) {
  var smallBox = document.querySelector(".small-box");
  smallBox.style.backgroundColor = color;

  colorControlModelModel.hide();
  // var dropdownContent = document.getElementById("dropdownContent1");
  // dropdownContent.style.display = "none";
}

// material control
let materialControlModel;
function opemMaterialModel() {
  materialControlModel = new bootstrap.Modal("#materialModel");
  materialControlModel.show();
}

// material control
let sizeQuantityModel;
function openSizeQuantityModel() {
  sizeQuantityModel = new bootstrap.Modal("#sizeQuantityModel");
  sizeQuantityModel.show();
}

let productControlModel;
function openProductModel() {
  productControlModel = new bootstrap.Modal("#productControlModel");
  productControlModel.show();
}
