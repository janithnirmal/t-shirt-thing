function tooltip(id, innerText, topShift) {
  const element = document.getElementById(id);

  const style = window.getComputedStyle(element);
  let marginLeftValue = parseInt(style.width) + 12 + "px";
  let parentHeight = -parseInt(style.height) + topShift + "px";

  console.log(parentHeight);

  const tooltip = document.createElement("div");
  tooltip.innerText = "👈" + innerText;
  tooltip.className = "btn-tooltip";
  tooltip.style.marginLeft = marginLeftValue;
  tooltip.style.translate = " 0 " + parentHeight;
  element.appendChild(tooltip);

  document.getElementById(id).addEventListener("mouseleave", () => {
    tooltip.remove();
  });
}

// tooltip for top left box
document.getElementById("btn1").addEventListener("mouseenter", () => {
  tooltip("btn1", " polo tshirts", 0);
});
document.getElementById("btn2").addEventListener("mouseenter", () => {
  tooltip("btn2", "men things", 0);
});
document.getElementById("btn3").addEventListener("mouseenter", () => {
  tooltip("btn3", "products stufss", 0);
});
document.getElementById("btn4").addEventListener("mouseenter", () => {
  tooltip("btn4", "budgets thignsD", 0);
});

// controls for left middle box
document.getElementById("btn6").addEventListener("mouseenter", () => {
  tooltip("btn6", "add text", 25);
});
document.getElementById("btn7").addEventListener("mouseenter", () => {
  tooltip("btn7", "add image", 25);
});
document.getElementById("btn8").addEventListener("mouseenter", () => {
  tooltip("btn8", "save design", 25);
});


document.getElementById("viewPortChange").addEventListener("mouseenter", () => {
  tooltip("viewPortChange", "view port will chnage", 300);
});











function sectionSwitch(clcikbtn){
  // for (let index =1; index<=2; index++){
  // document.getElementById("pro_box"+index).style.display="none";
  // }
  document.getElementById("t_changeblock1").style.display="none";
  document.getElementById("t_changeblock2").style.display="none";
  document.getElementById("t_changeblock3").style.display="none";
  document.getElementById("t_changeblock4").style.display="none";

  document.getElementById(clcikbtn).style.display="block";
}
