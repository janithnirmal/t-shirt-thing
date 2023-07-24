let tshirtNeckStripControlModel;

function controllerModelOpen(section) {
  if (section == "neck") {
    tshirtNeckStripControlModel = new bootstrap.Modal(
      "#tshirtNeckStripControlModel"
    );
    tshirtNeckStripControlModel.show();
    render(dataObject);
  } else {
  }
}

function tShirtControlViewChanger(side) {
  for (let x = 1; x <= 4; x++) {
    let element = document.getElementById("tshirtStripControl" + x);
    element.classList.add("d-none");
    element.classList.remove("d-block");
  }

  let itemNum = 0;
  if (side == "front") {
    itemNum = 1;
  } else if (side == "back") {
    itemNum = 2;
  } else if (side == "left") {
    itemNum = 3;
  } else if (side == "right") {
    itemNum = 4;
  }

  let selectedElement = document.getElementById("tshirtStripControl" + itemNum);
  selectedElement.classList.add("d-block");
  selectedElement.classList.remove("d-none");
}
