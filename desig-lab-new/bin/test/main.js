document.addEventListener("DOMContentLoaded", () => {
  const canvas = new fabric.Canvas("canvasElement", {
    width: 500,
    height: 500,
    backgroundColor: "red",
  });

  canvas.renderAll();
});
