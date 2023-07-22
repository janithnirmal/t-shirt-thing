const dataObject = {
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
    front: {
      imageSections: {
        topLeft: {
          imgUri: "",
          position: {},
          size: {
            width: 50,
            height: 50,
          },
        },
        topRight: {
          imgUri: "",
          position: {},
          size: {
            width: 50,
            height: 50,
          },
        },
        center: {
          imgUri: "",
          position: {},
          size: {
            width: 50,
            height: 50,
          },
        },
      },
      strips: {
        neck: {
          thickness: 1,
          color: "blue",
        },
        leftArm: {
          thickness: 2,
          color: "orange",
        },
        rightArm: {
          thickness: 1,
          color: "purple",
        },
      },
    },
    back: {},
    left: {},
    right: {},
  },
};

function render(dataObject) {
  const container = document.getElementById("canvas");
  container.innerHTML = "";

  const canvas = document.createElement("canvas");
  canvas.id = "designPanelCanvas";

  canvas.width = parseInt(
    window.getComputedStyle(document.getElementById("canvas")).width
  );
  canvas.height = parseInt(
    window.getComputedStyle(document.getElementById("canvas")).height
  );
  container.appendChild(canvas);

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

    drawLine(100, 100, 200, 200, "red", 3, 9);
  };

  function drawLine(x1, y1, x2, y2, color, lineWidth, rotationAngle) {
    ctx.save(); // Save the current canvas state

    // Set the rotation origin to the starting point of the line
    ctx.translate(x1, y1);
    ctx.rotate(rotationAngle);

    ctx.beginPath();
    ctx.moveTo(0, 0); // Move to (0, 0) since the rotation origin is set to (x1, y1)
    ctx.lineTo(x2 - x1, y2 - y1); // Use relative coordinates for the end point
    ctx.strokeStyle = color;
    ctx.lineWidth = lineWidth;
    ctx.stroke();

    ctx.restore(); // Restore the saved canvas state to avoid affecting other drawings
  }

  function handleCanvasClick(event) {
    const rect = canvas.getBoundingClientRect();
    const mouseX = event.clientX - rect.left;
    const mouseY = event.clientY - rect.top;

    // Check if the click is on the line
    if (isClickedOnLine(mouseX, mouseY, 50, 50, 200, 200)) {
      // Call your function here for the line click event
      // For example, display an alert
      alert("Line 1 is clicked!");
    }

    // Add more checks for other lines if needed
  }

  function isClickedOnLine(mouseX, mouseY, x1, y1, x2, y2) {
    const tolerance = 5; // Tolerance to consider a click on the line (in pixels)

    // Calculate the distance from the mouse click point to the line
    const distance =
      Math.abs((y2 - y1) * mouseX - (x2 - x1) * mouseY + x2 * y1 - y2 * x1) /
      Math.sqrt((y2 - y1) ** 2 + (x2 - x1) ** 2);

    // Check if the distance is within the tolerance
    return distance <= tolerance;
  }
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
});

document.getElementById("colorInput").addEventListener("change", () => {
  dataObject.mainColorHueValue = document.getElementById("colorInput").value;
  render(dataObject);
});

function viewChange(side) {
  dataObject.views.clothTypeImageUrl = "shirt-" + side;
  render(dataObject);
}
