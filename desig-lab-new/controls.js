let opendModal;

function controllerModelOpen(section) {
  if (section == "neck") {
    opendModal = new bootstrap.Modal("#tshirtNeckStripControlModel");
    opendModal.show();
    render(dataObject);
  } else {
  }
}

function tShirtControlViewChanger(side) {
  for (let x = 1; x <= 4; x++) {
    let element1 = document.getElementById("tshirtStripControl" + x);
    element1.classList.add("d-none");
    element1.classList.remove("d-block");

    let element2 = document.getElementById("tshirtImageControl" + x);
    element2.classList.add("d-none");
    element2.classList.remove("d-block");
  }

  let itemNum = 0;
  if (side == "front") {
    itemNum = 1;
  } else if (side == "back") {
    itemNum = 2;
  } else if (side == "left") {
    itemNum = 3;
  } else if (side == "right") {
    itemNum = 4;
  }

  let selectedElement1 = document.getElementById(
    "tshirtStripControl" + itemNum
  );
  selectedElement1.classList.add("d-block");
  selectedElement1.classList.remove("d-none");

  let selectedElement2 = document.getElementById(
    "tshirtImageControl" + itemNum
  );
  selectedElement2.classList.add("d-block");
  selectedElement2.classList.remove("d-none");
}

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

// product controls
let productControlModel;
function openProductModel() {
  productControlModel = new bootstrap.Modal("#productControlModel");
  productControlModel.show();

  document
    .getElementById("productControlNavigationChangeGender")
    .classList.add("product-control-nav-section-btn-clicked");

  document.getElementById("productControlNavigationChangeGender").click();

  document
    .getElementById("productControlNavigationChangeSleeves")
    .classList.remove("d-flex");
  document
    .getElementById("productControlNavigationChangeSleeves")
    .classList.add("d-none");

  document
    .getElementById("productControlNavigationChangeTemplate")
    .classList.remove("d-flex");
  document
    .getElementById("productControlNavigationChangeTemplate")
    .classList.add("d-none");
}

function productControlNavigationChange(option) {
  let items = document.querySelectorAll(".product-control-nav-section-btn");
  items.forEach((element) => {
    if (element.id !== "productControlNavigationChange" + option) {
      element.classList.remove("product-control-nav-section-btn-clicked");
    } else {
      element.classList.add("product-control-nav-section-btn-clicked");
    }

    if (option == "Type") {
      document
        .getElementById("productControlNavigationChangeTshirtButtons")
        .classList.add("d-none");
      document
        .getElementById("productControlNavigationChangeTshirtButtons")
        .classList.remove("d-flex");

      let button2 = document.getElementById(
        "productControlNavigationChangeTemplate"
      );

      button2.classList.add
      document
        .getElementById("productControlNavigationChangeTshirtButtons")
        .classList.remove("d-flex");
    }
  });

  let sections = document.querySelectorAll(".product-control-section");
  sections.forEach((element) => {
    if (element.id !== "productControl" + option + "SelectSection") {
      element.classList.add("d-none");
      element.classList.remove("d-flex");
    } else {
      element.classList.add("d-flex");
      element.classList.remove("d-none");
    }
  });
}

function changeGender(gender) {
  document.getElementById("productControlNavigationChangeType").click();
  dataObject.gender = gender;
  render(dataObject);
}

function changeProduct(type) {
  let sleeveBtn = document.getElementById(
    "productControlNavigationChangeSleeves"
  );
  if (type == "polo-t-shirt") {
    sleeveBtn.classList.add("d-flex");
    sleeveBtn.classList.remove("d-none");
    sleeveBtn.click();
  } else if (type == "cotton-t-shirt") {
    sleeveBtn.classList.add("d-flex");
    sleeveBtn.classList.remove("d-none");
    sleeveBtn.click();
  } else {
    sleeveBtn.classList.add("d-none");
    sleeveBtn.classList.remove("d-flex");
    productControlModel.hide();
  }

  dataObject.clothType = type;
  document.getElementById("clothTypeIndicationBtn").innerText = type;
  render(dataObject);
}

function templateSection(type) {
  productControlModel.hide();
  dataObject.clothOption.neck = type;
  render(dataObject);
}

function sleeveSelection(type) {
  let sleeveBtn = document.getElementById(
    "productControlNavigationChangeTemplate"
  );

  sleeveBtn.classList.add("d-flex");
  sleeveBtn.classList.remove("d-none");
  sleeveBtn.click();

  dataObject.clothOption.sleves = type;
  render(dataObject);
}

function updateControlLayoutBaseVariable(value) {
  let elements = document.querySelectorAll(".canvasOverlyInner");
  elements.forEach((element) => {
    if (value !== element.id) {
      element.classList.add("d-none");
      element.classList.remove("d-block");
    } else {
      element.classList.add("d-block");
      element.classList.remove("d-none");
    }
  });
}
