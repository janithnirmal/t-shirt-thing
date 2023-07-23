const dataObject = {
  test: {
    startX: 100,
    startY: 100,
    endX: 200,
    endY: 200,
    thickness: 5,
    color: "white",
  },

  gender: "male",
  clothType: "t-shirt",
  mainColorHueValue: 100,
  clothOption: {
    sleves: "long",
    neck: "v",
  },
  views: {
    active: "front",
    clothTypeImageUrl: "shirt-front",
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
      strips: {
        neck: [
          {
            thickness: 2,
            color: "red",
          },
          {
            thickness: 3,
            color: "white",
          },
          {
            thickness: 5,
            color: "blue",
          },
        ],
        arm: [
          {
            thickness: 2,
            color: "blue",
          },
          {
            thickness: 3,
            color: "white",
          },
        ],
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
  container.innerHTML = "";

  const canvas = document.createElement("canvas");
  canvas.id = "designPanelCanvas";
  canvas.style.backgroundColor = "blue";

  canvas.width = parseInt(
    window.getComputedStyle(document.getElementById("canvas")).width
  );
  canvas.height = parseInt(
    window.getComputedStyle(document.getElementById("canvas")).height
  );
  container.appendChild(canvas);

  const newInstanceOfCanvas = document.getElementById("designPanelCanvas");
  let x;
  let y;
  newInstanceOfCanvas.addEventListener("click", (event) => {
    x = event.clientX - newInstanceOfCanvas.getBoundingClientRect().x;
    y = event.clientY - newInstanceOfCanvas.getBoundingClientRect().y;
  });

  // draw image
  const image = document.createElement("img");
  image.setAttribute(
    "src",
    "images/" + dataObject.views.clothTypeImageUrl + ".png"
  );
  let imageWidth = window.getComputedStyle(canvas).width;
  let imageHeight = window.getComputedStyle(canvas).height;

  const ctx = canvas.getContext("2d");
  image.onload = function () {
    ctx.filter = "hue-rotate(" + dataObject.mainColorHueValue + "deg)"; // Apply the hue-rotate filter to the canvas context
    ctx.drawImage(image, 0, 0, parseInt(imageWidth), parseInt(imageHeight));
    ctx.filter = "none";

    tShirt(ctx, dataObject);
    testLineCreator(ctx, dataObject);

    setTimeout(() => {
      const dataURL = canvas.toDataURL("image/png");

      // Create an image element
      const image = new Image();

      // Set the source of the image to the data URL
      image.src = dataURL;

      // Append the image to the document
      document.body.appendChild(image);
    }, 5000);
  };
}

//
//
//
//
//

//  functions
// image section functions
function tShirt(ctx, dataObject) {
  if (dataObject.views.active == "front") {
    // draw line
    const sideObject = dataObject.views.frontSideObject;
    const neckStripsArray = sideObject.strips.neck;
    const armStripsArray = sideObject.strips.arm;
    console.log(sideObject);
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
          270,
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
          181,
          80,
          neckStripsArray[0].thickness,
          neckStripsArray[0].color
        );
      } else if (x == 2) {
        drawLine(
          ctx,
          135,
          34,
          187,
          75,
          neckStripsArray[0].thickness,
          neckStripsArray[0].color
        );
      
      }
    }
  } else if (dataObject.views.active == "back") {
    console.log("back");
  } else if (dataObject.views.active == "left") {
    console.log("left");
  } else if (dataObject.views.active == "right") {
    console.log("right");
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

// test
document.addEventListener("DOMContentLoaded", () => {
  render(dataObject);
  setTimeout(() => {
    // window.location.reload();
  }, 100);
});

document.getElementById("colorInput").addEventListener("change", () => {
  dataObject.mainColorHueValue = document.getElementById("colorInput").value;
  render(dataObject);
});

function viewChange(side) {
  dataObject.views.clothTypeImageUrl = "shirt-" + side;
  render(dataObject);
}

//
//
//
// test line creator
//
document.getElementById("startingPointXTest").addEventListener("change", () => {
  dataObject.test.startX = document.getElementById("startingPointXTest").value;
  render(dataObject);
});
document.getElementById("startingPointYTest").addEventListener("change", () => {
  dataObject.test.startY = document.getElementById("startingPointYTest").value;
  render(dataObject);
});
document.getElementById("endingPointXTest").addEventListener("change", () => {
  dataObject.test.endX = document.getElementById("endingPointXTest").value;
  render(dataObject);
});
document.getElementById("endingPointYTest").addEventListener("change", () => {
  dataObject.test.endY = document.getElementById("endingPointYTest").value;
  render(dataObject);
});
document.getElementById("thicknessTest").addEventListener("change", () => {
  dataObject.test.thickness = document.getElementById("thicknessTest").value;
  render(dataObject);
});
document.getElementById("colorTest").addEventListener("change", () => {
  dataObject.test.color = document.getElementById("colorTest").value;
  render(dataObject);
});
