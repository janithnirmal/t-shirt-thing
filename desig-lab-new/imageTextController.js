let clothTextImageObject = {
  "polo-t-shirt": {
    front: [
      {
        canvasWidth: 240,
        canvasHeight: 250,
        topMargin: 250,
        leftMargin: 80,
      },
      {
        canvasWidth: 95,
        canvasHeight: 100,
        topMargin: 95,
        leftMargin: 75,
      },
      {
        canvasWidth: 95,
        canvasHeight: 100,
        topMargin: 95,
        leftMargin: 225,
      },
    ],
    back: [
      {
        canvasWidth: 240,
        canvasHeight: 300,
        topMargin: 175,
        leftMargin: 80,
      },
      {
        canvasWidth: 200,
        canvasHeight: 50,
        topMargin: 80,
        leftMargin: 100,
      },
    ],
    left: [
      {
        canvasWidth: 90,
        canvasHeight: 100,
        topMargin: 120,
        leftMargin: 170,
      },
    ],
    right: [
      {
        canvasWidth: 90,
        canvasHeight: 100,
        topMargin: 120,
        leftMargin: 130,
      },
    ],
  },
  "cotton-t-shirt": {
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
  bottom: {
    front: [
      {
        canvasWidth: 100,
        canvasHeight: 100,
        topMargin: 50,
        leftMargin: 50,
      },
      {
        canvasWidth: 100,
        canvasHeight: 100,
        topMargin: 50,
        leftMargin: 250,
      },
    ],
  },
  singlet: {
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
  },
  jacket: {
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
        canvasWidth: 300,
        canvasHeight: 300,
        topMargin: 200,
        leftMargin: 50,
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
};

//
// product Idnetifier
function productIdentifier() {
  const currentProduct = dataObject.clothType;
  if (currentProduct == "polo-t-shirt") {
    dataObject.views.imageTextContanerData =
      clothTextImageObject["polo-t-shirt"];
  } else if (currentProduct == "cotton-t-shirt") {
    dataObject.views.imageTextContanerData =
      clothTextImageObject["cotton-t-shirt"];
  } else if (currentProduct == "bottom") {
    dataObject.views.imageTextContanerData = clothTextImageObject["bottom"];
  }

  imageTextSectionRenderer();
}

// image Text render
function imageTextSectionRenderer() {
  allCanvasElements = []; // clear all canavas array

  // front
  const frontArray = dataObject.views.imageTextContanerData.front;
  document.getElementById("canvasOverlyFront").innerHTML = "";
  frontArray.forEach((element) => {
    canvasBuilder(
      "canvasOverlyFront",
      element.canvasWidth,
      element.canvasHeight,
      element.topMargin,
      element.leftMargin
    );
  });

  // back
  const backArray = dataObject.views.imageTextContanerData.back;
  document.getElementById("canvasOverlyBack").innerHTML = "";
  backArray.forEach((element) => {
    canvasBuilder(
      "canvasOverlyBack",
      element.canvasWidth,
      element.canvasHeight,
      element.topMargin,
      element.leftMargin
    );
  });

  // left
  const leftArray = dataObject.views.imageTextContanerData.left;
  document.getElementById("canvasOverlyLeft").innerHTML = "";
  leftArray.forEach((element) => {
    canvasBuilder(
      "canvasOverlyLeft",
      element.canvasWidth,
      element.canvasHeight,
      element.topMargin,
      element.leftMargin
    );
  });

  // right
  const rightArray = dataObject.views.imageTextContanerData.right;
  document.getElementById("canvasOverlyRight").innerHTML = "";
  rightArray.forEach((element) => {
    canvasBuilder(
      "canvasOverlyRight",
      element.canvasWidth,
      element.canvasHeight,
      element.topMargin,
      element.leftMargin
    );
  });
}

let selectedInputCanvas = null;
let selectedItem = null;
let allCanvasElements = [];
let allCanvasTexts = [];

function canvasBuilder(
  canvasOverly,
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
  canvasCotainer.style.border = "2px black dashed";
  canvasCotainer.style.cursor = "pointer";
  canvasCotainer.style.backgroundColor = "#0000ff";
  // canvasCotainer.setAttribute("onclick", "selectCanvas('" + canvasId + "')");
  canvasCotainer.appendChild(canvas);

  document.getElementById(canvasOverly).appendChild(canvasCotainer);

  const fabricElement = new fabric.Canvas(canvasId);
  allCanvasElements.push(fabricElement);

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
    console.log(selectedItem);
  });

  fabricElement.on("selection:cleared", function () {
    selectedItem = null; // Clear the selected object when selection is cleared
    console.log(selectedItem);
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

  // click event
  fabricElement.on("mouse:down", function (event) {
    selectedInputCanvas = fabricElement;
    console.log(selectedInputCanvas);
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

// function imageGenerator(fabricElement, file, options = {}) {
//   const DESIERED_WIDTH = 200;
//   const defaultOptions = {
//     left: 20,
//     top: 20,
//     scaleX: 0.3,
//     scaleY: 0.3,
//     angle: 0,
//     opacity: 1,
//   };

//   const mergedOptions1 = Object.assign({}, defaultOptions, options);

//   let url = file;
//   let imgPath = url; // Replace this with the correct path to your image
//   const imgObj = new Image();

//   let width = imgObj.width;
//   let height = imgObj.height;

//   let aspectRatio = width / height;
//   const DESIERED_HEIGHT = Math.round(DESIERED_WIDTH / aspectRatio);

//   var canvas = document.createElement("canvas");
//   canvas.width = DESIERED_WIDTH;
//   canvas.height = DESIERED_HEIGHT;

//   var ctx = canvas.getContext("2d");
//   ctx.drawImage(imgObj, 0, 0, DESIERED_WIDTH, DESIERED_HEIGHT);
//   imgPath = canvas.toDataURL("image/jpeg");

//   imgObj.onload = function () {
//     const image = new fabric.Image(imgObj, mergedOptions1);
//     fabricElement.add(image);
//     fabricElement.renderAll();
//   };

//   imgObj.src = imgPath;
//   document.body.appendChild(imgObj);
// }

function imageGenerator(fabricElement, file, options = {}) {
  imageSizeReducer(file, (URL) => {
    const dataURL = URL;
    console.log(dataURL);

    const imgObj = new Image();

    imgObj.onload = function () {
      const defaultOptions = {
        left: 20,
        top: 20,
        scaleX: 0.5,
        scaleY: 0.5,
        angle: 0,
        opacity: 1,
      };
      const mergedOptions = Object.assign({}, defaultOptions, options);

      const image = new fabric.Image(imgObj, mergedOptions);

      fabricElement.add(image);
      fabricElement.renderAll();
    };

    imgObj.src = dataURL;
  });
}

function imageSizeReducer(file, callback) {
  const imgObj = new Image();

  imgObj.onload = function () {
    const DESIRED_WIDTH = 200;
    let aspectRatio = imgObj.width / imgObj.height;
    const DESIRED_HEIGHT = Math.round(DESIRED_WIDTH / aspectRatio);

    var canvas = document.createElement("canvas");
    canvas.width = DESIRED_WIDTH;
    canvas.height = DESIRED_HEIGHT;

    var ctx = canvas.getContext("2d");
    ctx.drawImage(imgObj, 0, 0, DESIRED_WIDTH, DESIRED_HEIGHT);

    let URL = canvas.toDataURL("image/jpeg");
    callback(URL);
  };

  imgObj.src = file;
}

function generateDataUrlFromInputImage(file, callback) {
  var reader = new FileReader();

  reader.onload = function (event) {
    var dataUrl = event.target.result;
    callback(dataUrl);
  };

  reader.readAsDataURL(file);
}

// final renderer
let currentImageTextRenderViewImage = new Image();
function generateTextImageSections(sideId) {
  deselectAll();
  html2canvas(document.getElementById(sideId), {
    backgroundColor: "transparent",
  }).then((canvas) => {
    const img = new Image();
    img.src = canvas.toDataURL();
    currentImageTextRenderViewImage = img;
    let imageContainer = document.body;
    // imageContainer.innerHTML = "";
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
  productIdentifier();
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
