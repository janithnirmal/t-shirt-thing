let dataObject = {
  sizeQuntitySets: [],
  gender: "male",
  clothType: "polo-t-shirt",
  printType: "ScreenPrint",
  mainColorHueValue: 100,
  mainColorSaturateValue: 1,
  mainColorLevelValue: 1,
  clothOption: {
    sleves: "shortSleeves",
    neck: "vneck",
    buttons: null,
  },
  views: {
    active: "front",
    strips: {
      neck: [
        {
          thickness: 2,
          color: "#ffffff",
        },
        {
          thickness: 2,
          color: "#008000",
        },
        {
          thickness: 3,
          color: "#A2FF1C",
        },
      ],
      arm: [
        {
          thickness: 2,
          color: "#ffffff",
        },
        {
          thickness: 2,
          color: "#F938FF",
        },
        {
          thickness: 3,
          color: "#FF6E38",
        },
      ],
      sides: [
        {
          thickness: 3,
          color: "#FF6E38",
        },
      ],
    },
    imageTextContanerData: {
      front: [
        {
          canvasWidth: 300,
          canvasHeight: 250,
          topMargin: 200,
          leftMargin: 50,
        },
        {
          canvasWidth: 125,
          canvasHeight: 125,
          topMargin: 40,
          leftMargin: 50,
        },
        {
          canvasWidth: 125,
          canvasHeight: 125,
          topMargin: 40,
          leftMargin: 225,
        },
      ],
      back: [
        {
          canvasWidth: 200,
          canvasHeight: 50,
          topMargin: 50,
          leftMargin: 10,
        },
      ],
      left: [
        {
          canvasWidth: 30,
          canvasHeight: 70,
          topMargin: 150,
          leftMargin: 50,
        },
      ],
      right: [
        {
          canvasWidth: 30,
          canvasHeight: 70,
          topMargin: 150,
          leftMargin: 50,
        },
      ],
    },
  },
};

let selectedInputCanvas = null;
let selectedItem = null;
let allCanvasElements = [];
let allCanvasTexts = [];

const canvasOverly = document.getElementById("canvasOverly"); // container

function canvasBuilder(
  canvasWidth = 100,
  canvasHeight = 100,
  topMargin = 20,
  leftMargin = 20
) {
  const canvasId = generateUniqueId();
  const inputText = "Random Text";
  const canvasWidthNew = canvasWidth;
  const canvasHeightNew = canvasHeight;
  const canvasTop = topMargin;
  const canvasLeft = leftMargin;

  // build canvas
  const canvas = document.createElement("canvas");
  canvas.width = canvasWidthNew;
  canvas.height = canvasHeightNew;
  canvas.id = canvasId;
  canvas.setAttribute("data-fabric-id", canvasId);

  // canvas container build
  const canvasCotainer = document.createElement("div");
  canvasCotainer.width = canvasWidthNew;
  canvasCotainer.height = canvasHeightNew;
  canvasCotainer.style.marginTop = canvasTop + "px";
  canvasCotainer.style.marginLeft = canvasLeft + "px";
  canvasCotainer.style.position = "absolute";
  canvasCotainer.style.backgroundColor = "#0000ff55";
  canvasCotainer.setAttribute("onclick", "selectCanvas('" + canvasId + "')");
  canvasCotainer.appendChild(canvas);
  canvasOverly.appendChild(canvasCotainer);

  const fabricElement = new fabric.Canvas(canvasId);
  allCanvasElements.push(fabricElement);

  // new items
  textGenerator(fabricElement, canvasId);
  imageGenerator(fabricElement);

  // clipper
  function boundKeeper(e) {
    var obj = e.target;
    // if object is too big ignore
    if (
      obj.currentHeight > obj.canvas.height ||
      obj.currentWidth > obj.canvas.width
    ) {
      return;
    }
    obj.setCoords();
    // top-left  corner
    if (obj.getBoundingRect().top < 0 || obj.getBoundingRect().left < 0) {
      obj.top = Math.max(obj.top, obj.top - obj.getBoundingRect().top);
      obj.left = Math.max(obj.left, obj.left - obj.getBoundingRect().left);
    }
    // bot-right corner
    if (
      obj.getBoundingRect().top + obj.getBoundingRect().height >
        obj.canvas.height ||
      obj.getBoundingRect().left + obj.getBoundingRect().width >
        obj.canvas.width
    ) {
      obj.top = Math.min(
        obj.top,
        obj.canvas.height -
          obj.getBoundingRect().height +
          obj.top -
          obj.getBoundingRect().top
      );
      obj.left = Math.min(
        obj.left,
        obj.canvas.width -
          obj.getBoundingRect().width +
          obj.left -
          obj.getBoundingRect().left
      );
    }
  }

  fabricElement.on("object:moving", function (e) {
    boundKeeper(e);
  });

  // selection observer
  fabricElement.on("selection:created", function (event) {
    selectedItem = event.target;
  });

  fabricElement.on("selection:cleared", function () {
    selectedItem = null; // Clear the selected object when selection is cleared
  });

  fabricElement.on("object:scaling", function (e) {
    const maxScale = 1.5; // Set your desired maximum scale value

    const obj = e.target;
    if (obj.scaleX * obj.scaleY > maxScale) {
      obj.lockScalingX = true;
      obj.lockScalingY = true;
      setTimeout(() => {
        obj.lockScalingX = false;
        obj.lockScalingY = false;
      }, 100);
      obj.scaleX = maxScale;
      obj.scaleY = maxScale;
    } else {
      obj.lockScalingX = false;
      obj.lockScalingY = false;
    }
  });
}

function textGenerator(fabricElement, inputText, options = {}) {
  const defaultOptions = {
    left: 10,
    top: 10,
    fontFamily: "arial",
    fontSize: 14,
    fill: "white",
    fontWeight: "bold",
    fontStyle: "italic",
    textDecoration: "underline",
  };
  const margedOptions = Object.assign({}, defaultOptions, options);

  const text = new fabric.Textbox(inputText, margedOptions);
  fabricElement.add(text);
  textChanger(text);
  fabricElement.renderAll();
}

function imageGenerator(fabricElement, options = {}) {
  const defaultOptions = {
    left: 20,
    top: 20,
    scaleX: 0.5,
    scaleY: 0.5,
    angle: 0,
    opacity: 1,
  };
  const mergedOptions = Object.assign({}, defaultOptions, options);

  const imgPath = "../../images/arrow.png"; // Replace this with the correct path to your image
  const imgObj = new Image();

  imgObj.onload = function () {
    const image = new fabric.Image(imgObj, mergedOptions);
    fabricElement.add(image);
  };

  imgObj.src = imgPath;
}

// image Text render
function imageTextSectionRenderer() {
  allCanvasElements = []; // clear all canavas array
  if (dataObject.views.active == "front") {
    const frontArray = dataObject.views.imageTextContanerData.front;
    frontArray.forEach((element) => {
      canvasBuilder(
        element.canvasWidth,
        element.canvasWidth,
        element.topMargin,
        element.leftMargin
      );
    });
  } else if (dataObject.views.active == "back") {
  } else if (dataObject.views.active == "left") {
  } else if (dataObject.views.active == "right") {
  }
}

function generateTextImageSections() {
  deselectAll();
  html2canvas(document.getElementById("canvasOverly"), {
    backgroundColor: "transparent",
  }).then((canvas) => {
    const img = new Image();
    img.src = canvas.toDataURL();
    let imageContainer = document.getElementById("imageViewer");
    imageContainer.innerHTML = "";
    imageContainer.appendChild(img);
  });
}

// Deselect all selected items
function deselectAll() {
  selectedInputCanvas = null;
  allCanvasElements.forEach((canvas) => {
    canvas.discardActiveObject();
    canvas.renderAll();
  });
}

// select a canvas
function selectCanvas(id = "test") {
  if (selectedInputCanvas) {
    deselectAll();
    selectedInputCanvas = id;
  }
}

// generate a unique id
function generateUniqueId() {
  const timestamp = new Date().getTime();
  const random = Math.floor(Math.random() * 10000); // Change the range as needed
  return `${timestamp}${random}`;
}

//
//
//
//
//
// test
document.addEventListener("DOMContentLoaded", () => {
  imageTextSectionRenderer();
});

// setInterval(() => {
//   generateTextImageSections();
// }, 5000);

function textChanger(fabricItem) {
  fabricItem.set({
    fontFamily: "Arial", // Font family
    fontSize: 12, // Font size in pixels
    fontWeight: "bold", // Font weight ('normal', 'bold', 'bolder', 'lighter', etc.)
    fontStyle: "italic", // Font style ('normal', 'italic', 'oblique')
  });
}
