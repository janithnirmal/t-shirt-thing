//  other controls
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

// size & quantity control
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
  });

  if (option == "Type" || option == "Gender") {
    items.forEach((element) => {
      if (
        element.dataset.btntype == "Gender" ||
        element.dataset.btntype == "Type"
      ) {
        element.classList.add("d-flex");
        element.classList.remove("d-none");
      } else {
        element.classList.add("d-none");
        element.classList.remove("d-flex");
      }
    });
  }

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

  let tShirtButton = document.getElementById(
    "productControlNavigationChangeTshirtButtons"
  );

  if (type == "polo-t-shirt") {
    tShirtButton.classList.add("d-flex");
    tShirtButton.classList.remove("d-none");
    tShirtButton.click();
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

  changeControlViewSection(type);
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

function tShirtButtonNeckSection(buttonType) {
  dataObject.clothOption.buttons = buttonType;
  productControlModel.hide();
  render(dataObject);
  console.log(dataObject.clothOption.buttons);
}

// view side updater
function viewChange(side) {
  dataObject.views.active = side;
  render(dataObject);

  changeControlViewSection(dataObject.clothType);
}

function changeControlViewSection(type) {
  let elements = document.querySelectorAll(".canvasOverlyInner");
  elements.forEach((element) => {
    if (type !== element.id) {
      element.classList.add("d-none");
      element.classList.remove("d-block");
    } else {
      element.classList.add("d-block");
      element.classList.remove("d-none");
      controlSideSetionOpener(element);
    }
  });
}

function controlSideSetionOpener(item) {
  let currentSide = dataObject.views.active;

  let elements = item.querySelectorAll(".control-sectinos-sides");
  elements.forEach((element) => {
    if (element.dataset.controlside == currentSide) {
      element.classList.add("d-block");
      element.classList.remove("d-none");
    } else {
      element.classList.add("d-none");
      element.classList.remove("d-block");
    }
  });
}

//
//
//
//
//
//
let temporyneckLineArray = []; // temp data holder
let selectedneckLine = 0;
//
let temporyArmLineArray = []; // temp data holder
let selectedArmLine = 0;

//
//
// neck strip control section
// strip line controllers
let stripLineEditModal;
function controllerModelOpen(section) {
  if (section == "neck") {
    temporyneckLineArray = dataObject.views.strips.neck;
    document.getElementById("neckStripLineControlCountInput").value =
      temporyneckLineArray.length;
    neckStripLinePreviewUpdater();

    stripLineEditModal = new bootstrap.Modal("#neckStripControlModel");
    stripLineEditModal.show();
    render(dataObject);
  } else if (section == "sides") {
    stripLineEditModal = new bootstrap.Modal("#SideStripControlModel");
    stripLineEditModal.show();
    render(dataObject);
  } else if (section == "arm") {
    temporyArmLineArray = dataObject.views.strips.arm;
    document.getElementById("armStripLineControlCountInput").value =
      temporyArmLineArray.length;
    neckStripLinePreviewUpdater();

    stripLineEditModal = new bootstrap.Modal("#armStripControlModel");
    stripLineEditModal.show();
    render(dataObject);
  }
}

function neckLineCounter(event) {
  let count = event.target.value;
  temporyneckLineArray = [];
  selectedneckLine = 0;

  for (let x = 0; x < count; x++) {
    let lineObejct = {
      color: "#ffffff",
      thickness: "2",
    };
    temporyneckLineArray.push(lineObejct);
  }

  selectedLineUpdater();

  // color thicknes section opener
  let section = document.getElementById("neckLineControlSection");
  if (count == 0 || selectedneckLine == 0) {
    section.classList.add("d-none");
    section.classList.remove("d-block");
  } else {
    section.classList.add("d-block");
    section.classList.remove("d-none");
  }
  neckStripLinePreviewUpdater();
}

function selectedLineUpdater() {
  let neckLineSelector = document.getElementById("neckLineSelector");
  neckLineSelector.innerHTML = "";

  let option = document.createElement("option");
  option.value = 0;
  option.innerText = "No Lines";
  neckLineSelector.appendChild(option);
  for (let i = 1; i <= temporyneckLineArray.length; i++) {
    let option = document.createElement("option");
    option.value = i;
    option.innerText = "Line " + i;
    neckLineSelector.appendChild(option);
  }
}

function selectneckLine(event) {
  let value = event.target.value;
  selectedneckLine = value - 1;

  let neckLineControlSection = document.getElementById(
    "neckLineControlSection"
  );
  if (value == 0) {
    neckLineControlSection.classList.add("d-none");
    neckLineControlSection.classList.remove("d-block");
  } else {
    // color input preview
    let neckStripLinePreviewColorInput = document.getElementById(
      "neckStripLinePreviewColorInput"
    );
    neckStripLinePreviewColorInput.value =
      temporyneckLineArray[selectedneckLine].color;

    // thickness update
    let neckStripLinePreviewThicknessInput = document.getElementById(
      "neckStripLinePreviewThicknessInput"
    );
    neckStripLinePreviewThicknessInput.value =
      temporyneckLineArray[selectedneckLine].thickness;

    neckLineControlSection.classList.add("d-block");
    neckLineControlSection.classList.remove("d-none");
  }

  neckStripLinePreviewUpdater();
}

function updateneckStripData(event, type) {
  let value = event.target.value;
  if (type == "color") {
    temporyneckLineArray[selectedneckLine].color = value;
  } else if (type == "thickness") {
    temporyneckLineArray[selectedneckLine].thickness = value;
  }

  neckStripLinePreviewUpdater();
}

function neckStripLinePreviewUpdater() {
  let neckStripLinePreviewContainer = document.getElementById(
    "neckStripLinePreviewContainer"
  );
  neckStripLinePreviewContainer.innerHTML = "";

  temporyneckLineArray.forEach((element) => {
    let color = element.color;
    let thickness = element.thickness * 2;

    let line = document.createElement("div");
    line.classList.add("line-control-preview");
    line.style.height = thickness + "px";
    line.style.backgroundColor = color;
    neckStripLinePreviewContainer.appendChild(line);
  });
}
neckStripLinePreviewUpdater();

function updateneckLineData() {
  dataObject.views.strips.neck = temporyneckLineArray;
  stripLineEditModal.hide();
  render(dataObject);
}

function cancelLineData() {
  temporyneckLineArray = dataObject.views.strips.neck;
  document.getElementById("neckStripLineControlCountInput").value =
    temporyneckLineArray.length;

  selectedneckLine = 0;
  neckStripLinePreviewUpdater();

  stripLineEditModal.hide();
  render(dataObject);
}

//
//
//
//
//
//
// neck strip control section
function armLineCounter(event) {
  let count = event.target.value;
  temporyArmLineArray = [];
  selectedArmLine = 0;

  for (let x = 0; x < count; x++) {
    let lineObejct = {
      color: "#ffffff",
      thickness: "2",
    };
    temporyArmLineArray.push(lineObejct);
  }

  selectedLineUpdater();

  // color thicknes section opener
  let section = document.getElementById("armLineControlSection");
  if (count == 0 || selectedArmLine == 0) {
    section.classList.add("d-none");
    section.classList.remove("d-block");
  } else {
    section.classList.add("d-block");
    section.classList.remove("d-none");
  }
  armStripLinePreviewUpdater();
}

function selectedLineUpdater() {
  let armLineSelector = document.getElementById("armLineSelector");
  armLineSelector.innerHTML = "";

  let option = document.createElement("option");
  option.value = 0;
  option.innerText = "No Lines";
  armLineSelector.appendChild(option);
  for (let i = 1; i <= temporyArmLineArray.length; i++) {
    let option = document.createElement("option");
    option.value = i;
    option.innerText = "Line " + i;
    armLineSelector.appendChild(option);
  }
}

function selectarmLine(event) {
  let value = event.target.value;
  selectedArmLine = value - 1;

  let armLineControlSection = document.getElementById("armLineControlSection");
  if (value == 0) {
    armLineControlSection.classList.add("d-none");
    armLineControlSection.classList.remove("d-block");
  } else {
    // color input preview
    let armStripLinePreviewColorInput = document.getElementById(
      "armStripLinePreviewColorInput"
    );
    armStripLinePreviewColorInput.value =
      temporyArmLineArray[selectedArmLine].color;

    // thickness update
    let armStripLinePreviewThicknessInput = document.getElementById(
      "armStripLinePreviewThicknessInput"
    );
    armStripLinePreviewThicknessInput.value =
      temporyArmLineArray[selectedArmLine].thickness;

    armLineControlSection.classList.add("d-block");
    armLineControlSection.classList.remove("d-none");
  }

  armStripLinePreviewUpdater();
}

function updatearmStripData(event, type) {
  let value = event.target.value;
  if (type == "color") {
    temporyArmLineArray[selectedArmLine].color = value;
  } else if (type == "thickness") {
    temporyArmLineArray[selectedArmLine].thickness = value;
  }

  armStripLinePreviewUpdater();
}

function armStripLinePreviewUpdater() {
  let armStripLinePreviewContainer = document.getElementById(
    "armStripLinePreviewContainer"
  );
  armStripLinePreviewContainer.innerHTML = "";

  temporyArmLineArray.forEach((element) => {
    let color = element.color;
    let thickness = element.thickness * 2;

    let line = document.createElement("div");
    line.classList.add("line-control-preview");
    line.style.height = thickness + "px";
    line.style.backgroundColor = color;
    armStripLinePreviewContainer.appendChild(line);
  });
}
armStripLinePreviewUpdater();

function updatearmLineData() {
  dataObject.views.strips.arm = temporyArmLineArray;
  stripLineEditModal.hide();
  render(dataObject);
}

function cancelLineData() {
  temporyArmLineArray = dataObject.views.strips.arm;
  document.getElementById("armStripLineControlCountInput").value =
    temporyArmLineArray.length;

  selectedArmLine = 0;
  armStripLinePreviewUpdater();

  stripLineEditModal.hide();
  render(dataObject);
}

// let selectedArmLine;
// let selectedSidesLine;
// function chagneSelectedLine(type) {
//   if (type == "neck") {
//     let value = document.getElementById("NeckLineSelector").value;
//     selectedNeckLine = value;
//     document.getElementById("neckLineControlSection1");
//   } else if (type == "arm") {
//     let value = document.getElementById("ArmLineSelector").value;
//     selectedArmLine = value;
//   } else if (type == "sides") {
//     let value = document.getElementById("SidesLineSelector").value;
//     selectedSidesLine = value;
//   }
// }

//
//
//
//
//

const canvass = new fabric.Canvas("canvass");
let textTop = 150;
let textLeft = 150;
let selectedText = null;
let texts = []; // Array to store added texts

function addText() {
  const inputText = document.getElementById("text-input").value;
  const sizeText = document.getElementById("size-input").value;
  const colorText = document.getElementById("color-input").value;
  const textColor = colorText; // Default color

  const text = new fabric.Text(inputText, {
    left: textLeft,
    top: textTop,
    fontFamily: "Arial",
    fontSize: sizeText,
    fill: textColor,
  });

  canvass.add(text);
  texts.push(text); // Add the text to the texts array
  canvass.renderAll();
}

function deleteAllItems() {
  canvass.clear(); // Remove all objects from the canvas
  texts = []; // Clear the texts array
}

// Handle changes to text position inside the box
canvass.on("object:moving", (e) => {
  const target = e.target;
  if (target.type === "text") {
    textLeft = target.left;
    textTop = target.top;
  }
});
// text adding feature popup size incrasing
let currentFontSize = 16; // Initial font size in pixels

function increaseFontSize() {
  currentFontSize += 1; // Increase font size by 1 pixels
  applyFontSize();
}

function decreaseFontSize() {
  currentFontSize -= 1; // Decrease font size by 1 pixels
  applyFontSize();
}

function applyFontSize() {
  const textContent = document.getElementById("text-pop-sizebtn1");
  // textContent.style.fontSize = `${currentFontSize}px`;
  textContent.innerHTML = currentFontSize;
}

//
//
//
//
//
// test
document.addEventListener("DOMContentLoaded", () => {
  controllerModelOpen("neck");
});

function consolelog(params) {
  console.log(params);
}
