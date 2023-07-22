function neckControlModelOpen() {
  dataObject.views.frontSideObject.strips.neck[0].color =
    document.getElementById("colorTest").value;
  render(dataObject);
}
