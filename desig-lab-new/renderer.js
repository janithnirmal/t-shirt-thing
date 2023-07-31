const dataObject = {
  sizeQuntitySets: [],
  gender: "male",
  clothType: "jacket",
  printType: "ScreenPrint",
  mainColorHueValue: 100,
  mainColorSaturateValue: 1,
  mainColorLevelValue: 1,
  clothOption: {
    sleves: "long",
    neck: "v",
    buttons: "2 Buttons Only",
  },
  views: {
    active: "front",
    strips: {
      neck: [
        {
          thickness: 2,
          color: "white",
        },
        {
          thickness: 2,
          color: "orange",
        },
        {
          thickness: 3,
          color: "pink",
        },
      ],
      arm: [
        {
          thickness: 2,
          color: "white",
        },
        {
          thickness: 2,
          color: "orange",
        },
        {
          thickness: 3,
          color: "pink",
        },
      ],
      sides: [
        {
          thickness: 3,
          color: "white",
        },
      ],
    },
  },
};

// renderer
function render(dataObject) {
  const container = document.getElementById("canvas");
  container.innerHTML = ""; // clean renverer view

  // render view build
  const canvas = document.createElement("canvas");
  canvas.id = "designPanelCanvas";
  // canvas.style.backgroundColor = "blue"; // test canvas bg color

  //  render setup
  canvas.width = parseInt(
    window.getComputedStyle(document.getElementById("canvas")).width
  );
  canvas.height = parseInt(
    window.getComputedStyle(document.getElementById("canvas")).height
  );
  container.appendChild(canvas);

  // // recatch renderer
  // const newInstanceOfCanvas = document.getElementById("designPanelCanvas");
  // let x;
  // let y;
  // newInstanceOfCanvas.addEventListener("click", (event) => {
  //   x = event.clientX - newInstanceOfCanvas.getBoundingClientRect().x;
  //   y = event.clientY - newInstanceOfCanvas.getBoundingClientRect().y;
  // });

  clothRenderer(canvas, dataObject);
}

//
//
//
//
//

// image side must be bethween 400, 540
function clothRenderer(canvas, dataObject) {
  // draw image
  const image = document.createElement("img");
  image.setAttribute(
    "src",
    "images/cloths/" +
      dataObject.clothType +
      "-" +
      dataObject.views.active +
      "_" +
      dataObject.gender +
      ".png"
  );

  let imageWidth = window.getComputedStyle(canvas).width;
  let imageHeight = window.getComputedStyle(canvas).height;

  const ctx = canvas.getContext("2d");
  image.onload = function () {
    ctx.filter =
      "hue-rotate(" +
      dataObject.mainColorHueValue +
      "deg) saturate(" +
      dataObject.mainColorSaturateValue +
      ") brightness(" +
      dataObject.mainColorLevelValue +
      ") "; // Apply the hue-rotate filter to the canvas context
    ctx.drawImage(image, 0, 0, parseInt(imageWidth), parseInt(imageHeight));
    ctx.filter = "none";

    // check cloth type
    if (dataObject.clothType == "polo-t-shirt") {
      poloTShirt(ctx, dataObject);
    } else if (dataObject.clothType == "bottom") {
      bottom(ctx, dataObject);
    } else if (dataObject.clothType == "short") {
      short(ctx, dataObject);
    } else if (dataObject.clothType == "jacket") {
      jacket(ctx, dataObject);
    }
    // testLineCreator(ctx, dataObject); // tester
  };
}

//  functions
// image section functions
// poloTShirt
function poloTShirt(ctx, dataObject) {
  const stripObject = dataObject.views.strips;
  stripDrawerpoloTShirt(ctx, stripObject, dataObject.views.active);
}

function stripDrawerpoloTShirt(ctx, stripObjects, side) {
  const neckStripsArray = stripObjects.neck;
  const armStripsArray = stripObjects.arm;
  const sidesStripsArray = stripObjects.sides;

  if (side == "front") {
    // neck strips
    for (let x = 0; x < neckStripsArray.length; x++) {
      if (x == 0) {
        drawLine(
          ctx,
          127,
          46,
          179,
          86,
          neckStripsArray[0].thickness,
          neckStripsArray[0].color
        );
        drawLine(
          ctx,
          272,
          46,
          219,
          83,
          neckStripsArray[0].thickness,
          neckStripsArray[0].color
        );
      } else if (x == 1) {
        drawLine(
          ctx,
          130,
          40,
          182,
          81,
          neckStripsArray[1].thickness,
          neckStripsArray[1].color
        );
        drawLine(
          ctx,
          268,
          40,
          215,
          78,
          neckStripsArray[1].thickness,
          neckStripsArray[1].color
        );
      } else if (x == 2) {
        drawLine(
          ctx,
          133,
          34,
          186,
          75,
          neckStripsArray[2].thickness,
          neckStripsArray[2].color
        );
        drawLine(
          ctx,
          265,
          34,
          210,
          72,
          neckStripsArray[2].thickness,
          neckStripsArray[2].color
        );
      }
    }

    // arm strips
    for (let x = 0; x < armStripsArray.length; x++) {
      if (x == 0) {
        drawLine(
          ctx,
          0,
          241,
          69,
          260,
          armStripsArray[0].thickness,
          armStripsArray[0].color
        );
        drawLine(
          ctx,
          400,
          244,
          329,
          258,
          armStripsArray[0].thickness,
          armStripsArray[0].color
        );
      } else if (x == 1) {
        drawLine(
          ctx,
          0,
          236,
          70,
          256,
          armStripsArray[1].thickness,
          armStripsArray[1].color
        );
        drawLine(
          ctx,
          400,
          239,
          328,
          254,
          armStripsArray[1].thickness,
          armStripsArray[1].color
        );
      } else if (x == 2) {
        drawLine(
          ctx,
          0,
          231,
          71,
          251,
          armStripsArray[2].thickness,
          armStripsArray[2].color
        );
        drawLine(
          ctx,
          399,
          235,
          327,
          250,
          armStripsArray[2].thickness,
          armStripsArray[2].color
        );
      }
    }
  } else if (side == "back") {
    for (let x = 0; x < neckStripsArray.length; x++) {
      if (x == 0) {
        drawLine(
          ctx,
          140,
          33,
          260,
          35,
          neckStripsArray[0].thickness,
          neckStripsArray[0].color
        );
      } else if (x == 1) {
        drawLine(
          ctx,
          143,
          28,
          257,
          30,
          neckStripsArray[1].thickness,
          neckStripsArray[1].color
        );
      } else if (x == 2) {
        drawLine(
          ctx,
          146,
          23,
          254,
          25,
          neckStripsArray[2].thickness,
          neckStripsArray[2].color
        );
      }
    }

    for (let x = 0; x < armStripsArray.length; x++) {
      if (x == 0) {
        drawLine(
          ctx,
          3,
          241,
          69,
          260,
          armStripsArray[0].thickness,
          armStripsArray[0].color
        );
        drawLine(
          ctx,
          395,
          244,
          325,
          258,
          armStripsArray[0].thickness,
          armStripsArray[0].color
        );
      } else if (x == 1) {
        drawLine(
          ctx,
          3,
          236,
          70,
          256,
          armStripsArray[1].thickness,
          armStripsArray[1].color
        );
        drawLine(
          ctx,
          395,
          239,
          324,
          254,
          armStripsArray[1].thickness,
          armStripsArray[1].color
        );
      } else if (x == 2) {
        drawLine(
          ctx,
          3,
          231,
          71,
          251,
          armStripsArray[2].thickness,
          armStripsArray[2].color
        );
        drawLine(
          ctx,
          394,
          235,
          323,
          250,
          armStripsArray[2].thickness,
          armStripsArray[2].color
        );
      }
    }
  } else if (side == "left") {
    for (let x = 0; x < neckStripsArray.length; x++) {
      if (x == 0) {
        drawLine(
          ctx,
          156,
          80,
          240,
          28,
          neckStripsArray[0].thickness,
          neckStripsArray[0].color
        );
      } else if (x == 1) {
        drawLine(
          ctx,
          153,
          76,
          238,
          23,
          neckStripsArray[1].thickness,
          neckStripsArray[1].color
        );
      } else if (x == 2) {
        drawLine(
          ctx,
          149,
          70,
          235,
          18,
          neckStripsArray[2].thickness,
          neckStripsArray[2].color
        );
      }
    }

    for (let x = 0; x < armStripsArray.length; x++) {
      if (x == 0) {
        drawLine(
          ctx,
          169,
          244,
          256,
          244,
          armStripsArray[0].thickness,
          armStripsArray[0].color
        );
      } else if (x == 1) {
        drawLine(
          ctx,
          169,
          240,
          256,
          240,
          armStripsArray[1].thickness,
          armStripsArray[1].color
        );
      } else if (x == 2) {
        drawLine(
          ctx,
          169,
          236,
          256,
          236,
          armStripsArray[2].thickness,
          armStripsArray[2].color
        );
      }
    }

    for (let x = 1; x <= sidesStripsArray.length; x++) {
      if ((x = 1)) {
        drawLine(
          ctx,
          216,
          248,
          205,
          535,
          armStripsArray[0].thickness,
          armStripsArray[0].color
        );
      }
    }
  } else if (side == "right") {
    for (let x = 0; x < neckStripsArray.length; x++) {
      if (x == 0) {
        drawLine(
          ctx,
          154,
          32,
          235,
          82,
          neckStripsArray[0].thickness,
          neckStripsArray[0].color
        );
      } else if (x == 1) {
        drawLine(
          ctx,
          156,
          28,
          238,
          78,
          neckStripsArray[1].thickness,
          neckStripsArray[1].color
        );
      } else if (x == 2) {
        drawLine(
          ctx,
          159,
          23,
          241,
          73,
          neckStripsArray[2].thickness,
          neckStripsArray[2].color
        );
      }
    }

    for (let x = 0; x < armStripsArray.length; x++) {
      if (x == 0) {
        drawLine(
          ctx,
          134,
          244,
          223,
          244,
          armStripsArray[0].thickness,
          armStripsArray[0].color
        );
      } else if (x == 1) {
        drawLine(
          ctx,
          134,
          240,
          223,
          240,
          armStripsArray[1].thickness,
          armStripsArray[1].color
        );
      } else if (x == 2) {
        drawLine(
          ctx,
          134,
          236,
          223,
          236,
          armStripsArray[2].thickness,
          armStripsArray[2].color
        );
      }
    }

    for (let x = 1; x <= sidesStripsArray.length; x++) {
      if ((x = 1)) {
        drawLine(
          ctx,
          175,
          248,
          185,
          535,
          armStripsArray[0].thickness,
          armStripsArray[0].color
        );
      }
    }
  }
}

// Bottom
function bottom(ctx, dataObject) {
  const stripObject = dataObject.views.strips;
  stripDrawerBottom(ctx, stripObject, dataObject.views.active);
}

function stripDrawerBottom(ctx, stripObjects, side) {
  // alert("success");

  const neckStripsArray = stripObjects.neck;
  const armStripsArray = stripObjects.arm;
  const sidesStripsArray = stripObjects.sides;

  if (side == "front") {
  } else if (side == "back") {
  } else if (side == "left") {
    for (let x = 0; x <= sidesStripsArray.length; x++) {
      if (x == 0) {
        drawLine(
          ctx,
          197,
          30,
          213,
          520,
          armStripsArray[0].thickness,
          armStripsArray[0].color
        );
      } else if (x == 1) {
        drawLine(
          ctx,
          187,
          30,
          203,
          520,
          armStripsArray[1].thickness,
          armStripsArray[1].color
        );
      }
    }
  } else if (side == "right") {
    for (let x = 0; x < neckStripsArray.length; x++) {
      if (x == 0) {
        drawLine(
          ctx,
          200,
          30,
          185,
          520,
          neckStripsArray[0].thickness,
          neckStripsArray[0].color
        );
      } else if (x == 1) {
        drawLine(
          ctx,
          190,
          30,
          175,
          520,
          neckStripsArray[1].thickness,
          neckStripsArray[1].color
        );
      }
    }
  }
}

//shorts
function short(ctx, dataObject) {
  const stripObject = dataObject.views.strips;
  stripDrawerShort(ctx, stripObject, dataObject.views.active);
}

function stripDrawerShort(ctx, stripObjects, side) {
  // alert("success");

  const neckStripsArray = stripObjects.neck;
  const armStripsArray = stripObjects.arm;
  const sidesStripsArray = stripObjects.sides;

  if (side == "front") {
  } else if (side == "back") {
  } else if (side == "left") {
    for (let x = 0; x <= sidesStripsArray.length; x++) {
      if (x == 0) {
        drawLine(
          ctx,
          210,
          88,
          200,
          490,
          armStripsArray[0].thickness,
          armStripsArray[0].color
        );
      } else if (x == 1) {
        drawLine(
          ctx,
          220,
          88,
          210,
          490,
          armStripsArray[1].thickness,
          armStripsArray[1].color
        );
      }
    }
  } else if (side == "right") {
    for (let x = 0; x < neckStripsArray.length; x++) {
      if (x == 0) {
        drawLine(
          ctx,
          185,
          88,
          200,
          490,
          neckStripsArray[0].thickness,
          neckStripsArray[0].color
        );
      } else if (x == 1) {
        drawLine(
          ctx,
          175,
          88,
          190,
          490,
          neckStripsArray[1].thickness,
          neckStripsArray[1].color
        );
      }
    }
  }
}

//jacket
function jacket(ctx, dataObject) {
  const stripObject = dataObject.views.strips;
  stripDrawerJacket(ctx, stripObject, dataObject.views.active);
}

function stripDrawerJacket(ctx, stripObjects, side) {
  // alert("success");

  const neckStripsArray = stripObjects.neck;
  const armStripsArray = stripObjects.arm;
  const sidesStripsArray = stripObjects.sides;

  if (side == "front") {
  } else if (side == "back") {
  } else if (side == "left") {
    for (let x = 0; x <= sidesStripsArray.length; x++) {
      if (x == 0) {
        drawLine(
          ctx,
          210,
          92,
          210,
          300,
          armStripsArray[0].thickness,
          armStripsArray[0].color
        );
        drawLine(
          ctx,
          210,
          300,
          130,
          480,
          armStripsArray[0].thickness,
          armStripsArray[0].color
        );
      } else if (x == 1) {
        drawLine(
          ctx,
          220,
          92,
          220,
          300,
          armStripsArray[1].thickness,
          armStripsArray[1].color
        );
        drawLine(
          ctx,
          220,
          300,
          140,
          485,
          armStripsArray[1].thickness,
          armStripsArray[1].color
        );
      }
    }
  } else if (side == "right") {
    for (let x = 0; x < neckStripsArray.length; x++) {
      if (x == 0) {
        drawLine(
          ctx,
          190,
          92,
          190,
          300,
          armStripsArray[0].thickness,
          armStripsArray[0].color
        );
        drawLine(
          ctx,
          190,
          300,
          270,
          480,
          armStripsArray[0].thickness,
          armStripsArray[0].color
        );
      } else if (x == 1) {
        drawLine(
          ctx,
          180,
          92,
          180,
          300,
          armStripsArray[1].thickness,
          armStripsArray[1].color
        );
        drawLine(
          ctx,
          180,
          300,
          260,
          485,
          armStripsArray[1].thickness,
          armStripsArray[1].color
        );
      }
    }
  }
}

// draw lines
function drawLine(ctx, startX, startY, endX, endY, thickness, color) {
  // Set line attributes
  ctx.beginPath();
  ctx.moveTo(startX, startY);
  ctx.lineTo(endX, endY);
  ctx.strokeStyle = color;
  ctx.lineWidth = thickness;
  ctx.stroke();
}

function colorUpdate(hue, saturation, value) {
  dataObject.mainColorHueValue = hue;
  dataObject.mainColorSaturateValue = saturation;
  dataObject.mainColorLevelValue = value;
  render(dataObject);
}

//
//
//
//
//
//
//
//
//
//

// testers
function testLineCreator(ctx, dataObject) {
  const testData = dataObject.test;
  drawLine(
    ctx,
    testData.startX,
    testData.startY,
    testData.endX,
    testData.endY,
    testData.thickness,
    testData.color
  );
}

function printImage(canvas) {
  // Get the data URL of the canvas
  const dataURL = canvas.toDataURL("image/png");

  // Create an image element
  const image = new Image();

  // Set the source of the image to the data URL
  image.src = dataURL;

  // Append the image to the document
  document.body.appendChild(image);
}

// test
document.addEventListener("DOMContentLoaded", () => {
  render(dataObject);
  setTimeout(() => {
    // window.location.reload();
  }, 100);
});

// document.getElementById("colorInput").addEventListener("change", () => {
//   dataObject.mainColorHueValue = document.getElementById("colorInput").value;
//   render(dataObject);
// });

function changeProduct(dress) {
  dataObject.clothType = dress;
  render(dataObject);
}
// Create an array to store the data sets
const dataSets = [];

// Function to save the data
// Function to save the data in sizeQuntity object
function size() {
  // Get the values
  var xs = parseInt(document.getElementById("xs").value);
  var s = parseInt(document.getElementById("s").value);
  var m = parseInt(document.getElementById("m").value);
  var l = parseInt(document.getElementById("l").value);
  var xl = parseInt(document.getElementById("xl").value);
  var doublexl = parseInt(document.getElementById("2xl").value);
  var thribblexl = parseInt(document.getElementById("3xl").value);
  // Get the selected gender and budget
  const selectedGender = getSelectedGender();
  const selectedBudget = getSelectedBudget();

  // Create a new data object to store the current data
  const newData = {
    timestamp: Date.now(), // Add a timestamp to identify this data set
    gender: selectedGender,
    matirial: selectedBudget,
    xs: xs,
    s: s,
    m: m,
    l: l,
    xl: xl,
    doublexxl: doublexl,
    thribblexxl: thribblexl,
  };

  // Push the new data object into the sizeQuntitySets array
  dataObject.sizeQuntitySets.push(newData);

  xs = isNaN(xs) ? 0 : xs;
  s = isNaN(s) ? 0 : s;
  m = isNaN(m) ? 0 : m;
  l = isNaN(l) ? 0 : l;
  xl = isNaN(xl) ? 0 : xl;
  doublexl = isNaN(doublexl) ? 0 : doublexl;
  thribblexl = isNaN(thribblexl) ? 0 : thribblexl;

  // Calculate and display the total
  var total = xs + s + m + l + xl + doublexl + thribblexl;
  const sizeItemsDiv = document.getElementById("sizeItems");
  sizeItemsDiv.textContent = total;

  if (
    newData.gender == "combinationMen" &&
    newData.matirial == "combinationBudget"
  ) {
    const sizeItemsDiv = document.getElementById("mb");
    sizeItemsDiv.textContent = total;
  }
  if (
    newData.gender == "combinationMen" &&
    newData.matirial == "combinationCoperate"
  ) {
    const sizeItemsDiv = document.getElementById("mc");
    sizeItemsDiv.textContent = total;
  }
  if (
    newData.gender == "combinationWomen" &&
    newData.matirial == "combinationBudget"
  ) {
    const sizeItemsDiv = document.getElementById("wb");
    sizeItemsDiv.textContent = total;
  }
  if (
    newData.gender == "combinationWomen" &&
    newData.matirial == "combinationCoperate"
  ) {
    const sizeItemsDiv = document.getElementById("wc");
    sizeItemsDiv.textContent = total;
  }

  // Optional: Log the updated dataObject to the console
  console.log(dataObject);
  // Clear the input fields
  document.getElementById("xs").value = "";
  document.getElementById("s").value = "";
  document.getElementById("m").value = "";
  document.getElementById("l").value = "";
  document.getElementById("xl").value = "";
  document.getElementById("2xl").value = "";
  document.getElementById("3xl").value = "";

  window.alert("data added sucess fully");
}

// Function to get the value of the selected radio button for gender
function getSelectedGender() {
  let selectedGender = "";
  const genderRadios = document.querySelectorAll(
    'input[name="combinationGender"]'
  );
  genderRadios.forEach((radio) => {
    if (radio.checked) {
      selectedGender = radio.id;
    }
  });
  return selectedGender;
}

// Function to get the value of the selected radio button for budget
function getSelectedBudget() {
  let selectedBudget = "";
  const budgetRadios = document.querySelectorAll(
    'input[name="combinationBudget"]'
  );
  budgetRadios.forEach((radio) => {
    if (radio.checked) {
      selectedBudget = radio.id;
    }
  });
  return selectedBudget;
}

// Get the element with the ID 'sizeItems'

//
//
//
// test line creator
//
// document.getElementById("startingPointXTest").addEventListener("change", () => {
//   dataObject.test.startX = document.getElementById("startingPointXTest").value;
//   render(dataObject);
// });
// document.getElementById("startingPointYTest").addEventListener("change", () => {
//   dataObject.test.startY = document.getElementById("startingPointYTest").value;
//   render(dataObject);
// });
// document.getElementById("endingPointXTest").addEventListener("change", () => {
//   dataObject.test.endX = document.getElementById("endingPointXTest").value;
//   render(dataObject);
// });
// document.getElementById("endingPointYTest").addEventListener("change", () => {
//   dataObject.test.endY = document.getElementById("endingPointYTest").value;
//   render(dataObject);
// });
// document.getElementById("thicknessTest").addEventListener("change", () => {
//   dataObject.test.thickness = document.getElementById("thicknessTest").value;
//   render(dataObject);
// });
// document.getElementById("colorTest").addEventListener("change", () => {
//   dataObject.test.color = document.getElementById("colorTest").value;
//   render(dataObject);
// });

//
//
//
//
//
//
//
// image renderer
//
//
//
//
//

function saveCurrentDesign() {
  renderStartEffects();

  let dataURLFront;
  let dataURLBack;
  let dataURLLeft;
  let dataURLRight;
  // front
  dataObject.views.active = "front";
  render(dataObject);

  setTimeout(() => {
    dataURLFront = generateFront();
    dataObject.views.active = "back";
    render(dataObject);
  }, 2000);

  setTimeout(() => {
    dataURLBack = generateBack();
    dataObject.views.active = "left";
    render(dataObject);
  }, 4000);

  setTimeout(() => {
    dataURLLeft = generateLeft();
    dataObject.views.active = "right";
    render(dataObject);
  }, 6000);

  setTimeout(() => {
    dataURLRight = generateRight();

    let imageObject = {
      dataURLFront: dataURLFront,
      dataURLBack: dataURLBack,
      dataURLLeft: dataURLLeft,
      dataURLRight: dataURLRight,
    };

    let form = new FormData();
    form.append("imageObject", JSON.stringify(imageObject));
    form.append("design_json", JSON.stringify(dataObject));

    let request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if (request.readyState == 4) {
        console.log(request.responseText);
        // try {
        //   let response = JSON.parse(request.responseText);
        //   if (response.status == "success") {
        //     alert("Successfully saved");
        //   } else if (response.status == "failed") {
        //     alert(response.error);
        //   }
        // } catch (error) {
        //   console.log(error);
        // }
        // dataObject.views.active = "front";
        // render(dataObject);
      }
    };

    request.open("POST", SERVER_URL + "backend/save_design_api.php", true);
    request.send(form);
    renderEndEffects();
  }, 8000);
}

function generateFront() {
  return document.getElementById("designPanelCanvas").toDataURL();
}
function generateBack() {
  return document.getElementById("designPanelCanvas").toDataURL();
}
function generateRight() {
  return document.getElementById("designPanelCanvas").toDataURL();
}
function generateLeft() {
  return document.getElementById("designPanelCanvas").toDataURL();
}

function renderStartEffects() {
  document.querySelectorAll(".section1-panel-sides").forEach((element) => {
    element.classList.add("d-none");
    element.classList.remove("d-flex");
  });

  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(
    document.getElementById("renderStartToastMessage")
  );

  toastBootstrap.show();
}

function renderEndEffects() {
  document.querySelectorAll(".section1-panel-sides").forEach((element) => {
    element.classList.add("d-flex");
    element.classList.remove("d-none");
  });
}
