let opendModal;

function controllerModelOpen(section) {
  if (section == "neck") {
    opendModal = new bootstrap.Modal("#tshirtNeckStripControlModel");
    opendModal.show();
    render(dataObject);
  } else {
  }
}

function tShirtControlViewChanger(side) {
  for (let x = 1; x <= 4; x++) {
    let element1 = document.getElementById("tshirtStripControl" + x);
    element1.classList.add("d-none");
    element1.classList.remove("d-block");

    let element2 = document.getElementById("tshirtImageControl" + x);
    element2.classList.add("d-none");
    element2.classList.remove("d-block");
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

  let selectedElement1 = document.getElementById(
    "tshirtStripControl" + itemNum
  );
  selectedElement1.classList.add("d-block");
  selectedElement1.classList.remove("d-none");

  let selectedElement2 = document.getElementById(
    "tshirtImageControl" + itemNum
  );
  selectedElement2.classList.add("d-block");
  selectedElement2.classList.remove("d-none");
}
