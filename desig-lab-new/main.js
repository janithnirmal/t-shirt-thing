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
  tooltip("btn1", " This will indicate Product Type", 0);
});
document.getElementById("btn2").addEventListener("mouseenter", () => {
  tooltip("btn2", "Change Type", 0);
});
document.getElementById("btn3").addEventListener("mouseenter", () => {
  tooltip("btn3", "Select Your Product ", 0);
});
document.getElementById("btn4").addEventListener("mouseenter", () => {
  tooltip("btn4", "What are the materials", 0);
});

// controls for left middle box
document.getElementById("btn6").addEventListener("mouseenter", () => {
  tooltip("btn6", "Add text", 25);
});
document.getElementById("btn7").addEventListener("mouseenter", () => {
  tooltip("btn7", "Add image", 25);
});
document.getElementById("btn8").addEventListener("mouseenter", () => {
  tooltip("btn8", "Save Your design", 25);
});
document.getElementById("btn9").addEventListener("mouseenter", () => {
  tooltip("btn9", "Print your design", 5);
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
