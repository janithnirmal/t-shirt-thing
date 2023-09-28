// window.onload = function () {
//   var inputID = document.getElementById("lineId");
//   inputID.focus();
// };

// var color = document.getElementById("colorId").value;
// var gap = document.getElementById("gapId").value;

// // alert(width);

// function decreaseLine() {
//   var numlines = document.getElementById("lineId");

//   if (numlines.value == 1) {
//     var customize = document.getElementById("customizeArea");
//     customize.classList = "d-none";

//     var box = document.getElementById("box");
//     box.innerHTML = "";
//   }

//   if (numlines.value == 0) {
//   } else {
//     var newlines = parseInt(numlines.value) - 1;
//     var selectLine = document.getElementById("lineSelecter");
//     selectLine.innerHTML = "";

//     for (var i = 0; i < newlines; i++) {
//       var option = document.createElement("option");
//       option.value = "option" - (i + 1);
//       option.text = "Line" + (i + 1);

//       selectLine.appendChild(option);
//     }
//     var box = document.getElementById("box");
//     var smallBox = document.getElementById("smallBox" + newlines);
//     box.removeChild(smallBox);

//     numlines.value = newlines.toString();
//   }
// }

// // if(width ==1){
// //   alert("1")
// // }else if(width==2){
// //   alert("2")
// // }

// function increaseLine() {
//   var numlines = document.getElementById("lineId");

//   var box = document.getElementById("box");

//   if (numlines.value == 0) {
//     var customize = document.getElementById("customizeArea");
//     customize.classList = "d-block";
//   }

//   if (numlines.value == 3) {
//   } else {
//     var newlines = parseInt(numlines.value) + 1;
//     var selectLine = document.getElementById("lineSelecter");
//     selectLine.innerHTML = "";

//     var box = document.getElementById("box");
//     box.innerHTML = "";
//     var marginTop = 48;

//     for (var i = 0; i < newlines; i++) {
//       var option = document.createElement("option");
//       option.value = "option" + (i + 1);
//       option.text = "Line" + (i + 1);
//       selectLine.appendChild(option);

//       var smallBox = document.createElement("smallbox");
//       smallBox.className = "smallBox";
//       smallBox.id = "smallBox" + i;
//       smallBox.classList = "smallBox";
//       smallBox.style.width = "276px";
//       smallBox.style.backgroundColor = "red";
//       smallBox.style.height = "3px";
//       smallBox.style.position = "absolute";
//       smallBox.style.marginTop = marginTop + "px";
//       marginTop = marginTop - 12;

//       box.style.position = "relative";

//       box.appendChild(smallBox);
//     }

//     numlines.value = newlines.toString();
//   }
// }
// // ..............................

// function decreaseWidth() {
//   var numlines = document.getElementById("widthId");
//   if (numlines.value == 0) {
//   } else {
//     var newlines = parseInt(numlines.value) - 1;
//     numlines.value = newlines.toString();

//     var marginTop = 0;
//     for (var i = 0; i < 4; i++) {
//       var smallBox = document.getElementById("smallBox" + i);
//       if (numlines.value == 1) {
//         smallBox.style.height = "4px";
//       } else if (numlines.value == 2) {
//         smallBox.style.height = "5px";
//         smallBox.style.marginTop = marginTop + "px";
//         marginTop = marginTop + 6;
//       } else if (numlines.value == 3) {
//         smallBox.style.height = "6px";
//         smallBox.style.marginTop = marginTop + "px";
//         marginTop = marginTop + 2;
//       } else if (numlines.value == 4) {
//         smallBox.style.height = "7px";
//         smallBox.style.marginTop = marginTop + "px";
//         marginTop = marginTop + 2;
//       } else if (numlines.value == 5) {
//         smallBox.style.height = "8px";
//         smallBox.style.marginTop = marginTop + "px";
//         marginTop = marginTop + 2;
//       }
//     }
//   }
// }

// // var width = increaseWidth();
// // alert(width)

// function increaseWidth() {
//   var numlines = document.getElementById("widthId");
//   if (numlines.value == 5) {
//   } else {
//     var newlines = parseInt(numlines.value) + 1;
//     numlines.value = newlines.toString();
//   }
//   // return numlines.value

//   var marginTop = 12;

//   for (var i = 0; i < 4; i++) {
//     var smallBox = document.getElementById("smallBox" + i);
//     if (numlines.value == 1) {
//       smallBox.style.height = "4px";
//     } else if (numlines.value == 2) {
//       smallBox.style.height = "5px";
//     } else if (numlines.value == 3) {
//       smallBox.style.height = "6px";
//     } else if (numlines.value == 4) {
//       smallBox.style.height = "7px";
//     } else if (numlines.value == 5) {
//       smallBox.style.height = "8px";
//     }
//   }
// }

// function decreaseGap() {
//   var numlines = document.getElementById("gapId");
//   if (numlines.value == 0) {
//   } else {
//     var newlines = parseInt(numlines.value) - 1;
//     numlines.value = newlines.toString();
//   }
// }

// function increaseGap() {
//   var numlines = document.getElementById("gapId");
//   if (numlines.value == 10) {
//   } else {
//     var newlines = parseInt(numlines.value) + 1;
//     numlines.value = newlines.toString();

//     // var marginTop = 12;

//     for (var i = 0; i < 4; i++) {
//       var smallBox = document.getElementById("smallBox" + i);
//       if (numlines.value == 1) {
//         smallBox.style.marginTop = "1px";
//       } else if (numlines.value == 2) {
//         smallBox.style.marginTop = "1px";
//       } else if (numlines.value == 3) {
//         smallBox.style.marginTop = "1px";
//       } else if (numlines.value == 4) {
//         smallBox.style.marginTop = "1px";
//       } else if (numlines.value == 5) {
//         smallBox.style.marginTop = "1px";
//       }
//     }
//   }
// }

// function handleColorChange() {
//   var colorInput = document.getElementById("colorId");
//   var inputValue = colorInput.value;

//   for (var i = 0; i < 4; i++) {
//     var smallBox = document.getElementById("smallBox" + i);
//     smallBox.style.backgroundColor = inputValue;
//   }
//   document.body.style.backgroundColor = inputValue;
// }

// var colorInput = document.getElementById("colorId");
// colorInput.addEventListener("input", handleColorChange);

let neckLineArray = [];

// try {
//   // listners
//   document.getElementById("neckStripCount").addEventListener("change", () => {
//     neckLineArray = [];
//     let count = document.getElementById("neckStripCount").value;
//     let selector = document.getElementById("tshirtNeckLineSelector");
//     selector.innerHTML = "";
//     let defaultOption = document.createElement("option");
//     defaultOption.setAttribute("value", 0);
//     defaultOption.innerText = "No Lines";
//     selector.appendChild(defaultOption);

//     for (let x = 1; x <= count; x++) {
//       let option = document.createElement("option");
//       option.setAttribute("value", x);
//       option.innerText = "Line " + x;
//       selector.appendChild(option);

//       let section = document.getElementById("neckLineControlSection" + x);
//       section.classList.remove("d-block");
//       section.classList.add("d-none");
//     }

//     selector.selectedIndex = 0;
//     updateTshirtNeckArray();

//     console.log(neckLineArray);
//   });
// } catch (error) {}

// function updateTshirtNeckArray() {
//   let lineCount = document.getElementById("neckStripCount").value;

//   if (lineCount == 0) {
//     neckLineArray = [];
//   } else {
//     for (let index = 1; index <= lineCount; index++) {
//       let lineColor = document.getElementById(
//         "tshirtNeckStripColor" + index
//       ).value;

//       let lienThickness = document.getElementById(
//         "tshirtNeckStripThickness" + index
//       ).value;
//       const lineObject = {
//         color: lineColor,
//         thickness: lienThickness,
//       };
//       neckLineArray.push(lineObject);
//     }
//     dataObject.views.strips.neck = neckLineArray;
//     render(dataObject);
//   }
// }

// document
//   .getElementById("tshirtNeckLineSelector")
//   .addEventListener("change", () => {
//     let selectedOption = document.getElementById(
//       "tshirtNeckLineSelector"
//     ).value;

//     if (selectedOption != 0) {
//       let section = document.getElementById(
//         "neckLineControlSection" + selectedOption
//       );

//       for (let x = 1; x <= 3; x++) {
//         document
//           .getElementById("neckLineControlSection" + x)
//           .classList.remove("d-block");
//         document
//           .getElementById("neckLineControlSection" + x)
//           .classList.add("d-none");
//       }

//       section.classList.remove("d-none");
//       section.classList.add("d-block");
//     } else {
//       for (let x = 1; x <= 3; x++) {
//         document
//           .getElementById("neckLineControlSection" + x)
//           .classList.remove("d-block");
//         document
//           .getElementById("neckLineControlSection" + x)
//           .classList.add("d-none");
//       }
//     }

//     updateTshirtNeckArray();
//   });

// let inputElements = document.querySelectorAll(
//   ".tshirt-neck-line-control-container input"
// );

// for (let i = 0; i < inputElements.length; i++) {
//   const element = inputElements[i];

//   element.addEventListener("change", () => {
//     updateTshirtNeckArray();
//   });
// }
