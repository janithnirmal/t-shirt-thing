// image editor class
//
//
//
//

const imageControlsArray = [];

class ImageEditor {
  constructor(
    parentElementId,
    boundBoxWidth,
    boundBoxHeight,
    boundBoxLaft,
    boundBoxTop
  ) {
    this.parentElementId = parentElementId;
    this.boundBoxWidth = boundBoxWidth;
    this.boundBoxHeight = boundBoxHeight;
    this.boundBoxLaft = boundBoxLaft;
    this.boundBoxTop = boundBoxTop;
  }

  createImageBox() {
    const imageControlBox = document.createElement("div");
    imageControlBox.style.width = this.boundBoxWidth + "px";
    imageControlBox.style.height = this.boundBoxHeight + "px";
    imageControlBox.style.marginLeft = this.boundBoxLaft + "px";
    imageControlBox.style.marginTop = this.boundBoxTop + "px";

    imageControlBox.style.display = "flex";

    const timestamp = new Date().getTime(); // Get the current timestamp
    this.currentElementId = Math.floor(Math.random() * 10000) + timestamp;
    imageControlBox.id = this.currentElementId;
    imageControlsArray.push(this.currentElementId);

    imageControlBox.classList.add("image-control-box-defaults");
    document.getElementById(this.parentElementId).appendChild(imageControlBox);

    this.controlDot("topLeft", imageControlBox);
    this.controlDot("topRight", imageControlBox);
    this.controlDot("bottomLeft", imageControlBox);
    this.controlDot("bottomRight", imageControlBox);
  }

  controlDot(type, referanceObject) {
    // image controls
    let controlCircle = document.createElement("div");
    controlCircle.style.height = "20px";
    controlCircle.style.width = "20px";
    controlCircle.style.borderRadius = "20px";
    controlCircle.style.backgroundColor = "green";
    controlCircle.style.position = "absolute";

    if (type == "topLeft") {
      controlCircle.style.top = "-10px";
      controlCircle.style.left = "-10px";
    }
    if (type == "topRight") {
      controlCircle.style.top = "-10px";
      controlCircle.style.right = "-10px";
    }
    if (type == "bottomLeft") {
      controlCircle.style.bottom = "-10px";
      controlCircle.style.left = "-10px";
    }
    if (type == "bottomRight") {
      controlCircle.style.bottom = "-10px";
      controlCircle.style.right = "-10px";
    }

    referanceObject.appendChild(controlCircle);

    let mouseMove = false;
    let mouseEntered = false;
    let mouseDown = false;
    controlCircle.addEventListener("mousemove", (event) => {
      mouseMove = true;
      setTimeout(() => {
        mouseMove = false;
      }, 100);
      resize(event);
    });

    controlCircle.addEventListener("mouseenter", (event) => {
      mouseEntered = true;
      resize(event);
    });

    controlCircle.addEventListener("mousedown", (event) => {
      mouseDown = true;
      resize(event);
    });
    document.body.addEventListener("mouseup", (event) => {
      mouseDown = false;
      mouseEntered = false;
      resize(event);
    });

    const resize = function (event) {
      if (mouseMove && mouseEntered && mouseDown) {
        const { clientX, clientY } = event;
        const containerRect = referanceObject.getBoundingClientRect();

        const mouseXRelativeToContainer = clientX - containerRect.left;
        const mouseYRelativeToContainer = clientY - containerRect.top;

        console.log(mouseXRelativeToContainer);
        console.log(mouseYRelativeToContainer);
      }
    };
  }

  colorChanger(color) {
    document.getElementById(this.currentElementId).style.backgroundColor =
      color;
  }
}

// testing area
const polo_tshirt_front_left_image = new ImageEditor(
  "imageRenderContainer",
  100,
  100,
  150,
  150
);

polo_tshirt_front_left_image.createImageBox();

setTimeout(() => {
  polo_tshirt_front_left_image.colorChanger("blue");
}, 5000);
