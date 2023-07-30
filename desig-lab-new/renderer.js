const dataObject = {
  test: {
    startX: 100,
    startY: 100,
    endX: 200,
    endY: 200,
    thickness: 3,
    color: "white",
  },
  sizeQuntity: {
    gender: null,
    matirial: null,
    xs: null,
    s: null,
    m: null,
    l: null,
    xl: null,
    xxl: null,
    doublexxl: null,
    thribblexxl: null,
  },

  gender: "male",
  clothType: "polo-t-shirt",
  printType: "ScreenPrint",
  mainColorHueValue: 100,
  mainColorSaturateValue: 1,
  mainColorLevelValue: 1,
  clothOption: {
    sleves: "long",
    neck: "v",
  },
  views: {
    active: "front",
    strips: {
      neck: [],
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
    frontSideObject: {
      imageSections: {
        topLeft: {
          imgUri: null,
          position: {},
          size: {
            width: 50,
            height: 50,
          },
        },
        topRight: {
          imgUri: null,
          position: {},
          size: {
            width: 50,
            height: 50,
          },
        },
        center: {
          imgUri: null,
          position: {},
          size: {
            width: 50,
            height: 50,
          },
        },
      },
    },
    backSideObject: {},
    leftSideObject: {},
    rightSideObject: {},
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

    if (
      dataObject.clothType == "polo-t-shirt" ||
      dataObject.clothType == "cotton-t-shirt"
    ) {
      poloTShirt(ctx, dataObject);
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
  const hipStripsArray = stripObjects.hip;

  if (side == "front") {
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

    for (let x = 1; x <= hipStripsArray.length; x++) {
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

    for (let x = 1; x <= hipStripsArray.length; x++) {
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

function viewChange(side) {
  dataObject.views.active = side;
  render(dataObject);
}
function changeProduct(dress) {
  dataObject.clothType = dress;
  render(dataObject);
}
function size() {
  // Assuming you have an object named dataObject defined before this function is called
  // If not, create it using: var dataObject = { sizeQuntity: {} };

  var xs = document.getElementById("xs").value;
  var s = document.getElementById("s").value;
  var m = document.getElementById("m").value;
  var l = document.getElementById("l").value;
  var xl = document.getElementById("xl").value;
  var doublexl = document.getElementById("2xl").value; // Note: '2xl' is not a valid ID in HTML, but we keep it as it is.
  var thribblexl = document.getElementById("3xl").value; // Note: '3xl' is not a valid ID in HTML, but we keep it as it is.

  dataObject.sizeQuntity.xs = xs;
  dataObject.sizeQuntity.s = s;
  dataObject.sizeQuntity.m = m;
  dataObject.sizeQuntity.l = l;
  dataObject.sizeQuntity.xl = xl;
  dataObject.sizeQuntity.doublexxl = doublexl;
  dataObject.sizeQuntity.thribblexxl = thribblexl;

  console.log(dataObject.sizeQuntity);
}

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
        try {
          let response = JSON.parse(request.responseText);
          if (response.status == "success") {
            alert("Successfully saved");
          } else if (response.status == "failed") {
            alert(response.error);
          }
        } catch (error) {
          console.log(error);
        }
        dataObject.views.active = "front";
        render(dataObject);
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
