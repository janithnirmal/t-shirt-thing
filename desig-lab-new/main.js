function tooltip(id, innerText) {
  const element = document.getElementById(id);

  const style = window.getComputedStyle(element);
  let marginLeftValue = parseInt(style.width) + 12 + "px";
  let parentHeight = style.height;

  const tooltip = document.createElement("div");
  tooltip.innerText = "👈" + innerText;
  tooltip.className = "btn-tooltip";
  tooltip.style.marginLeft = marginLeftValue;
  tooltip.style.marginTop = "-20px";
  element.appendChild(tooltip);

  document.getElementById(id).addEventListener("mouseleave", () => {
    tooltip.remove();
  });
}

document.getElementById("btn1").addEventListener("mouseenter", () => {
  tooltip("btn1", " polo tshirts");
});
document.getElementById("btn2").addEventListener("mouseenter", () => {
  tooltip("btn2", "men things");
});
document.getElementById("btn3").addEventListener("mouseenter", () => {
  tooltip("btn3", "products stufss");
});
document.getElementById("btn4").addEventListener("mouseenter", () => {
  tooltip("btn4", "budgets thigns");
});
