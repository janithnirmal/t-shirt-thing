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
