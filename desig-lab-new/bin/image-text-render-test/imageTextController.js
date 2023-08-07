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
          canvasWidth: 50,
          canvasHeight: 50,
          topMargin: 40,
          leftMargin: 50,
        },
        {
          canvasWidth: 50,
          canvasHeight: 50,
          topMargin: 40,
          leftMargin: 200,
        },
        {
          canvasWidth: 100,
          canvasHeight: 100,
          topMargin: 200,
          leftMargin: 50,
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

const canvasOverly = document.getElementById("canvasOverly"); // container

function canvasBuilder(
  id,
  canvasWidth = 100,
  canvasHeight = 100,
  topMargin = 20,
  leftMargin = 20
) {
  const canvasId = id;
  const inputText = "Random Text";
  const canvasWidthNew = canvasWidth;
  const canvasHeightNew = canvasHeight;
  const canvasTop = topMargin;
  const canvasLeft = leftMargin;

  const canvas = document.createElement("canvas");
  canvas.width = canvasWidthNew;
  canvas.height = canvasHeightNew;
  canvas.style.marginLeft = canvasLeft;
  canvas.style.marginTop = canvasTop;
  canvas.style.backgroundColor = "#0000ff55";
  canvas.id = canvasId;
  canvasOverly.appendChild(canvas);
  const fabricElement = new fabric.Canvas(canvasId);

  textGenerator(fabricElement, inputText);

  console.log("done");
}

function textGenerator(fabricElement, inputText, options = {}) {
  const defaultOptions = {
    left: 10,
    top: 10,
    fontFamily: "arial",
    fontSize: 20,
    fill: "blue",
    fontWeight: "bold",
    fontStyle: "italic",
    textDecoration: "underline",
  };
  const margedOptions = Object.assign({}, defaultOptions, options);

  const text = new fabric.Text(inputText, margedOptions);
  fabricElement.add(text);
  fabricElement.renderAll();
}

// imaeg Text render
function imageTextSectionRenderer() {
  if (dataObject.views.active == "front") {
    const frontArray = dataObject.views.imageTextContanerData.front;
    frontArray.forEach((element) => {
      canvasBuilder(
        "simpleId",
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

//
//
//
//
//
// test
document.addEventListener("DOMContentLoaded", () => {
  canvasBuilder();
});
