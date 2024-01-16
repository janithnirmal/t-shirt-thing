const SERVER_URL = "";
// sign in view opned section name
let openedSigninViewName = "sign-in";
function signInModalViewChanger() {
  const signIn = document.getElementById("signInModalSignInSection");
  const signUp = document.getElementById("signInModalSignUpSection");

  if (openedSigninViewName == "sign-in") {
    signIn.classList.add("d-none");
    signIn.classList.remove("d-block");

    signUp.classList.remove("d-none");
    signUp.classList.add("d-block");

    openedSigninViewName = "sign-up";
  } else if (openedSigninViewName == "sign-up") {
    signUp.classList.add("d-none");
    signUp.classList.remove("d-block");

    signIn.classList.remove("d-none");
    signIn.classList.add("d-block");

    openedSigninViewName = "sign-in";
  }
}

// signIn
let signInModel;
try {
  document.getElementById("signInBtn").addEventListener("click", () => {
    signInModel = new bootstrap.Modal("#signInModel");
    signInModel.show();
  });
} catch (error) {}

// function toggleDropdown() {
//   var dropdownMenu = document.querySelector(".dropdown-menu");
//   dropdownMenu.classList.toggle("show");
// }

// // Function to hide the dropdown menu
// function hideDropdown() {
//   var dropdownMenu = document.querySelector(".dropdown-menu");
//   dropdownMenu.classList.remove("show");
// }

// // Add event listener to the document for clicks
// document.addEventListener("click", function(event) {
// var dropdown = document.querySelector(".dropdown");
// var dropdownMenu = document.querySelector(".dropdown-menu");

// // Check if the click target is within the dropdown or its menu
// if (!dropdown.contains(event.target)) {
// // Click target is outside of the dropdown, hide the menu
// dropdownMenu.classList.remove("show");
// }
// });

function toggleDropdown1() {
  var dropdownContent = document.getElementById("dropdownContent1");
  if (dropdownContent.style.display === "flex") {
    dropdownContent.style.display = "none";
  } else {
    dropdownContent.style.display = "flex";
  }
}

function toggleDropdown2() {
  var dropdownContent = document.getElementById("dropdownContent2");
  if (dropdownContent.style.display === "flex") {
    dropdownContent.style.display = "none";
  } else {
    dropdownContent.style.display = "flex";
  }
}

function sectionSwitch(clcikbtn) {
  // for (let index =1; index<=2; index++){
  // document.getElementById("pro_box"+index).style.display="none";
  // }
  document.getElementById("t_changeblock1").style.display = "none";
  document.getElementById("t_changeblock2").style.display = "none";
  document.getElementById("t_changeblock3").style.display = "none";
  document.getElementById("t_changeblock4").style.display = "none";

  document.getElementById(clcikbtn).style.display = "block";
}

try {
  document.getElementById("signInActionBtn").addEventListener("click", () => {
    let form = new FormData();
    form.append("email", document.getElementById("emailInput").value);
    form.append("password", document.getElementById("passwordInput").value);
    console.log("hi");

    let request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if (request.readyState == 4) {
        let response = request.responseText;
        if (response.status == "success") {
          window.location.reload();
        } else if (response.status == "failed") {
          alert(response.error);
        }
      }
    };
    request.open("POST", SERVER_URL + "backend/sign_in.php", true);
    request.send(form);
  });
} catch (error) {}

//  malindu
// saved design model open function
let savedDesignModel;
function openSavedDesignModal() {
  let container = document.getElementById("savedDesignModelContentContainer");
  container.innerHTML = "";

  savedDesignModel = new bootstrap.Modal("#savedDesignModel");
  savedDesignModel.show();

  let request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      let response = request.responseText;
      try {
        let responseObject = JSON.parse(response);

        if (responseObject.status == "success") {
          responseObject.data.forEach((element) => {
            let id = element.id;
            let designData = JSON.parse(element.design_data);
            console.log(designData);

            let resultDesign = document.createElement("div");
            resultDesign.classList.add("saved-design-item");
            resultDesign.addEventListener("click", () => {
              loadSavedDesign(designData);
              imageTextSectionRenderer();
            });

            const div = document.createElement("div");
            div.classList.add("saved-design-list-view-details");
            div.innerHTML = `
            <span class="fw-bold fs-5">${designData.clothType}</span>
            <br />
            <span class="">${designData.printType}</span>
            `;
            resultDesign.appendChild(div);

            let image = document.createElement("img");
            image.width = "200px";
            image.src =
              "backend/saved_design_images/" + id + "dataURLFront.png";
            image.classList.add("saved-design-item-images");
          
            resultDesign.appendChild(image);

            container.appendChild(resultDesign);
          });
        } else if (responseObject.status == "failed") {
          console.log(responseObject.error);
          container.innerText = "Please sign in to watch saved designs......";
        } else {
          console.log(responseObject);
        }
      } catch (error) {
        console.log(response);
      }
    }
  };

  request.open("GET", SERVER_URL + "backend/get_saved_design_api.php", true);
  request.send();
}

function loadOrderData() {
  // Get a reference to the container element
  let container = document.getElementById("orderContainer");
  container.innerHTML = ""; // Clear any previous content

  // Create a new XMLHttpRequest
  let request = new XMLHttpRequest();

  // Set up the event listener for when the request is complete
  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      // Check if the request was successful (HTTP status code 200)
      if (request.status === 200) {
        let response = request.responseText;
        try {
          let responseObject = JSON.parse(response);

          if (responseObject.status == "success") {
            responseObject.data.forEach((element) => {
              console.log(element);
              let dataObject = JSON.parse(element.data_object);
              // container.innerHTML = dataObject;
              // Create a container for each order
              let orderContainer = document.createElement("div");
              orderContainer.classList.add("order-item");

              // Create an image element for the front image
              let frontImage = document.createElement("img");
              frontImage.classList.add("saved-design-item-images");
              frontImage.width = "200px";
              frontImage.src =
                "order-confirmed-5115435-4273317.webp"; // Set the image source dynamically
              orderContainer.appendChild(frontImage);

              // Display order details
              let orderDetails = document.createElement("div");
              orderDetails.classList.add("order-details");
              orderDetails.innerHTML = `
                <div class="d-flex flex-column">
                  <p><strong>Ordered Datetime:</strong> ${element.ordered_datetime}</p>
                  <p><strong>Cloth Type:</strong> ${dataObject.clothType}</p>
                  <p><strong>Print Type:</strong> ${dataObject.printType}</p>
                </div>
              `;
              orderContainer.appendChild(orderDetails);

              // Append the order container to the main container
              container.appendChild(orderContainer);
            });
          } else if (responseObject.status == "failed") {
            console.log(responseObject.error);
            container.innerText = "Please sign in to view orders...";
          } else {
            console.log(responseObject);
          }
        } catch (error) {
          console.log(response);
        }
      } else {
        // Handle the case where the request was not successful
        container.innerText = "Error loading orders. Please try again later.";
      }
    }
  };

  // Open and send the GET request to fetch orders
  request.open("GET", SERVER_URL + "backend/load_order.php", true);
  request.send();
}

function openSavedDesignModals() {
  let container = document.getElementById("savedDesignModelContentContainer");
  container.innerHTML = "";

  savedDesignModel = new bootstrap.Modal("#savedDesignModel");
  savedDesignModel.show();

  let request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      let response = request.responseText;
      try {
        let responseObject = JSON.parse(response);

        if (responseObject.status == "success") {
          responseObject.data.forEach((element) => {
            let id = element.id;
            let designData = JSON.parse(element.design_data);

            let resultDesign = document.createElement("div");
            resultDesign.classList.add("saved-design-item");
            resultDesign.addEventListener("click", () => {
              loadSavedDesign(designData);
              imageTextSectionRenderer();
            });

            const div = document.createElement("div");
            div.classList.add("saved-design-list-view-details");
            div.innerHTML = `
            <span class="fw-bold fs-5">${designData.clothType}</span>
            <br />
            <span class="">${designData.printType}</span>
            `;
            resultDesign.appendChild(div);

            let image = document.createElement("img");
            image.width = "200px";
            image.src =
            "./backend/preset_images/1_${item.preset_idea}.png";
            image.classList.add("saved-design-item-images");
            resultDesign.appendChild(image);

            container.appendChild(resultDesign);
          });
        } else if (responseObject.status == "failed") {
          console.log(responseObject.error);
          container.innerText = "Please sign in to watch saved designs......";
        } else {
          console.log(responseObject);
        }
      } catch (error) {
        console.log(response);
      }
    }
  };

  request.open("GET", SERVER_URL + "backend/presetLoader.php", true);
  request.send();
}

function loadSavedDesign(dataSet) {
  dataObject = dataSet;
  render(dataObject);
}

function userData() {
  var firstNameInput = document.getElementById("firstNameInput");
  var lastNameInput = document.getElementById("lastNameInput");
  var telephoneInput = document.getElementById("telephoneInput");
  var addressInput = document.getElementById("addressInput");
  var address2Input = document.getElementById("address2Input");
  var cityInput = document.getElementById("cityInput");
  var provinceInput = document.getElementById("provinceInput");
  var postalCodeInput = document.getElementById("postalCodeInput");

  var formData = {
    firstName: firstNameInput.value,
    lastName: lastNameInput.value,
    telephone: telephoneInput.value,
    address: addressInput.value,
    address2: address2Input.value,
    city: cityInput.value,
    province: provinceInput.value,
    postalCode: postalCodeInput.value,
  };

  let form = new FormData();
  form.append("formData", JSON.stringify(formData));

  let request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      let response = request.responseText;
      console.log(response);
      const toastContainer = document.querySelector(".toast-container");
      const toast = document.getElementById("renderStartToastMessage");
      const toastBody = toast.querySelector(".toast-body span");
      toastBody.textContent = "Data added Sucessfully ";

      const toastInstance = new bootstrap.Toast(toast);
      toastInstance.show();
    }
  };

  request.open("POST", SERVER_URL + "backend/user_data_save.php", true);
  request.send(form);
}
function getUserData() {
  console.log("Getting user data...");
  var firstNameInput = document.getElementById("firstNameInput");
  var lastNameInput = document.getElementById("lastNameInput");
  var telephoneInput = document.getElementById("telephoneInput");
  var addressInput = document.getElementById("addressInput");
  var address2Input = document.getElementById("address2Input");
  var cityInput = document.getElementById("cityInput");
  var provinceInput = document.getElementById("provinceInput");
  var postalCodeInput = document.getElementById("postalCodeInput");

  var request = new XMLHttpRequest();
  request.open("POST", SERVER_URL + "backend/user_data_get.php", true);

  // Set up the callback function to handle the response
  request.onload = function () {
    if (request.status === 200) {
      // Check if the request was successful
      try {
        var userData = JSON.parse(request.responseText); // Assuming the response is JSON

        // Verify the structure of the received data
        if (userData && userData.status === "success") {
          firstNameInput.value = userData.userData.firstname;
          lastNameInput.value = userData.userData.lastname;
          telephoneInput.value = userData.userData.mobile;
          addressInput.value = userData.userData.address1;
          address2Input.value = userData.userData.address2;
          cityInput.value = userData.userData.city;
          provinceInput.value = userData.userData.province;
          postalCodeInput.value = userData.userData.postal;
        } else {
          console.error("Received unexpected response:", userData);
        }
      } catch (error) {
        console.error("Error parsing JSON response:", error);
      }
    } else {
      // Handle error here if needed
      console.error("Request failed with status:", request.status);
    }
  };

  // Send the request
  request.send();
}

function SignIn() {
  let form = new FormData();
  form.append("email", document.getElementById("emailInput").value);
  form.append("password", document.getElementById("passwordInput").value);

  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
    if (request.readyState == 4 && request.status == 200) {
      try {
        responseObject = JSON.parse(request.responseText);
        if (responseObject.status === "success") {
          window.location.reload();
        } else {
          console.log(responseObject);
          const toastContainer = document.querySelector(".toast-container");
          const toast = document.getElementById("renderStartToastMessage");
          const toastBody = toast.querySelector(".toast-body span");
          toastBody.textContent = "Sign In Failed";

          const toastInstance = new bootstrap.Toast(toast);
          toastInstance.show();
        }
      } catch (error) {
        console.log(request.responseText);
      }
    }
  };

  request.open("POST", SERVER_URL + "backend/sign_in.php", true);
  request.send(form);
}
function SignUp() {
  let form = new FormData();
  form.append("email", document.getElementById("emailInputs").value);
  form.append("password", document.getElementById("passwordInputs").value);

  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
    if (request.readyState == 4) {
      try {
        responseObject = JSON.parse(request.responseText);
        if (responseObject.status === "success") {
          alert("Please Check your email for verification link!");
          window.location.reload();
        } else if (responseObject.status === "failed") {
          console.log(responseObject.error);
        } else {
          console.log(responseObject);
        }
      } catch (error) {
        console.log(request.responseText);
      }
    }
  };

  request.open("POST", SERVER_URL + "backend/sign-up.php", true);
  request.send(form);
}

function updateDataObject(dataObject) {
  dataObject = dataObject;
}

function logout() {
  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
    if (request.readyState == 4) {
      let response = request.responseText;
      try {
        responseObject = JSON.parse(response);
        if (responseObject.status === "success") {
          window.location.reload();
          console.log(responseObject);
        } else {
          console.log(responseObject);
        }
      } catch (error) {
        console.log(response);
      }
    }
  };

  request.open("POST", SERVER_URL + "backend/sign_out.php", true);
  request.send();
}

function openNavigationSideBar() {
  let sidebar = document.querySelector(".navbar-link-container");
  window.addEventListener("resize", () => {
    if (parseInt(window.innerWidth) > 768) {
      sidebar.style.display = "flex";
    }
  });
  let currentStatus = window.getComputedStyle(sidebar);
  if (currentStatus.display == "none") {
    sidebar.style.display = "flex";
  } else {
    sidebar.style.display = "none";
  }
}

function pointsToPixels(points) {
  return points * 1.33;
}

const canvass = new fabric.Canvas("canvass");
let textTop = 150;
let textLeft = 150;
let textColor = "#000000"; // Default color

function addText() {
  const inputText = document.getElementById("text-input").value;
  const fontSizePoints = parseFloat(
    document.getElementById("font-size-input").value
  );
  const fontSizePixels = pointsToPixels(fontSizePoints); // Convert points
  const fontFamily = document.getElementById("font-family-input").value;
  const isBold = document.getElementById("bold-input").checked;
  const isItalic = document.getElementById("italic-input").checked;
  const isUnderline = document.getElementById("underline-input").checked;
  const isCrossline = document.getElementById("crossline-input").checked;
  const fontStyle = (isBold ? "bold " : "") + (isItalic ? "italic " : "");
  const textDecoration =
    (isUnderline ? "underline " : "") + (isCrossline ? "line-through" : "");
  const text = new fabric.Text(inputText, {
    left: textLeft,
    top: textTop,
    fontFamily: fontFamily,
    fontSize: fontSizePixels,
    fill: textColor, // Use the selected color
    fontWeight: isBold ? "bold" : "normal",
    fontStyle: isItalic ? "italic" : "normal",
    textDecoration: isUnderline ? "underline" : "",
    // Set underline text decoration
  });
  if (isCrossline) {
    const rectHeight = 2; // You can adjust the height of the crossline here
    const rect = new fabric.Rect({
      left: textLeft,
      top: textTop + fontSizePixels / 2 - rectHeight / 2,
      width: text.width,
      height: rectHeight,
      fill: textColorCanvaso,
    });
    canvass.add(rect);
  }
  if (isUnderline) {
    const rectsHeight = 2; // You can adjust the height of the crossline here
    const rects = new fabric.Rect({
      left: textLeft,
      top: textTop + fontSizePixels - rectsHeight,
      width: text.width,
      height: rectsHeight,
      fill: textColorCanvaso,
    });
    canvass.add(rects);
  }
  canvass.add(text);
  canvass.renderAll();
}

canvass.on("object:moving", (e) => {
  const target = e.target;
  if (target.type === "text") {
    // Constrain the text position within the canvas boundaries
    const canvasWidth = canvass.width;
    const canvasHeight = canvass.height;
    const textWidth = target.width * target.scaleX;
    const textHeight = target.height * target.scaleY;

    // Left boundary
    if (target.left < 0) {
      target.left = 0;
    }
    // Right boundary
    if (target.left + textWidth > canvasWidth) {
      target.left = canvasWidth - textWidth;
    }
    // Top boundary
    if (target.top < 0) {
      target.top = 0;
    }
    // Bottom boundary
    if (target.top + textHeight > canvasHeight) {
      target.top = canvasHeight - textHeight;
    }

    // Update the textLeft and textTop variables to keep track of the position
    textLeft = target.left;
    textTop = target.top;

    // Re-render the canvas
    canvass.renderAll();
  }
});

// document.getElementById("color-input").addEventListener("change", (e) => {
//   textColor = e.target.value;
// });

// document.getElementById("color-input").addEventListener("change", (e) => {
//   textColor = e.target.value;
// });

//image undex2.php

const canvaso = new fabric.Canvas("canvaso");
let textTopCanvaso = 10;
let textLeftCanvaso = 10;
let textColorCanvaso = "#000000"; // Default color

function addTextTopPoloLeft() {
  const inputText = document.getElementById("text-input").value;
  const fontSizePoints = parseFloat(
    document.getElementById("font-size-input").value
  );
  const fontSizePixels = pointsToPixels(fontSizePoints); // Convert points
  const fontFamily = document.getElementById("font-family-input").value;
  const isBold = document.getElementById("bold-input").checked;
  const isItalic = document.getElementById("italic-input").checked;
  const isUnderline = document.getElementById("underline-input").checked;
  const isCrossline = document.getElementById("crossline-input").checked;
  const fontStyle = (isBold ? "bold " : "") + (isItalic ? "italic " : "");
  const textDecoration =
    (isUnderline ? "underline " : "") + (isCrossline ? "line-through" : "");

  const text = new fabric.Text(inputText, {
    left: textLeftCanvaso,
    top: textTopCanvaso,
    fontFamily: fontFamily,
    fontSize: fontSizePixels,
    fill: textColor, // Use the selected color
    fontWeight: isBold ? "bold" : "normal",
    fontStyle: isItalic ? "italic" : "normal",
    textDecoration: isUnderline ? "underline" : "", // Set underline text decoration
  });
  if (isCrossline) {
    const rectHeight = 2; // You can adjust the height of the crossline here
    const rect = new fabric.Rect({
      left: textLeftCanvaso,
      top: textTopCanvaso + fontSizePixels / 2 - rectHeight / 2,
      width: text.width,
      height: rectHeight,
      fill: textColorCanvaso,
    });
    canvaso.add(rect);
  }
  if (isUnderline) {
    const rectsHeight = 2; // You can adjust the height of the crossline here
    const rects = new fabric.Rect({
      left: textLeftCanvaso,
      top: textTopCanvaso + fontSizePixels - rectsHeight,
      width: text.width,
      height: rectsHeight,
      fill: textColorCanvaso,
    });
    canvaso.add(rects);
  }
  canvaso.add(text);
  canvaso.renderAll();
}

canvaso.on("object:moving", (e) => {
  const target = e.target;
  if (target.type === "text") {
    textLeftCanvaso = target.left;
    textTopCanvaso = target.top;
  }
});

// document.getElementById("color-input").addEventListener("change", (e) => {
//   textColorCanvaso = e.target.value;
// });

const canvasPoloTopRight = new fabric.Canvas("canvas-polo-top-right");
function addTextTopPoloRight() {
  const inputText = document.getElementById("text-input").value;
  const fontSizePoints = parseFloat(
    document.getElementById("font-size-input").value
  );
  const fontSizePixels = pointsToPixels(fontSizePoints); // Convert points
  const fontFamily = document.getElementById("font-family-input").value;
  const isBold = document.getElementById("bold-input").checked;
  const isItalic = document.getElementById("italic-input").checked;
  const isUnderline = document.getElementById("underline-input").checked;
  const isCrossline = document.getElementById("crossline-input").checked;
  const fontStyle = (isBold ? "bold " : "") + (isItalic ? "italic " : "");
  const textDecoration =
    (isUnderline ? "underline " : "") + (isCrossline ? "line-through" : "");

  const text = new fabric.Text(inputText, {
    left: textLeftCanvaso,
    top: textTopCanvaso,
    fontFamily: fontFamily,
    fontSize: fontSizePixels,
    fill: textColor, // Use the selected color
    fontWeight: isBold ? "bold" : "normal",
    fontStyle: isItalic ? "italic" : "normal",
    textDecoration: isUnderline ? "underline" : "", // Set underline text decoration
  });
  if (isCrossline) {
    const rectHeight = 2; // You can adjust the height of the crossline here
    const rect = new fabric.Rect({
      left: textLeftCanvaso,
      top: textTopCanvaso + fontSizePixels / 2 - rectHeight / 2,
      width: text.width,
      height: rectHeight,
      fill: textColorCanvaso,
    });
    canvasPoloTopRight.add(rect);
  }
  if (isUnderline) {
    const rectsHeight = 2; // You can adjust the height of the crossline here
    const rects = new fabric.Rect({
      left: textLeftCanvaso,
      top: textTopCanvaso + fontSizePixels - rectsHeight,
      width: text.width,
      height: rectsHeight,
      fill: textColorCanvaso,
    });
    canvasPoloTopRight.add(rects);
  }
  canvasPoloTopRight.add(text);
  canvasPoloTopRight.renderAll();
}

const canvasPoloBackMiddle = new fabric.Canvas("canvas-polo-back-middle");
function addTextPoloBackMiddle() {
  const inputText = document.getElementById("text-input").value;
  const fontSizePoints = parseFloat(
    document.getElementById("font-size-input").value
  );
  const fontSizePixels = pointsToPixels(fontSizePoints); // Convert points
  const fontFamily = document.getElementById("font-family-input").value;
  const isBold = document.getElementById("bold-input").checked;
  const isItalic = document.getElementById("italic-input").checked;
  const isUnderline = document.getElementById("underline-input").checked;
  const isCrossline = document.getElementById("crossline-input").checked;
  const fontStyle = (isBold ? "bold " : "") + (isItalic ? "italic " : "");
  const textDecoration =
    (isUnderline ? "underline " : "") + (isCrossline ? "line-through" : "");

  const text = new fabric.Text(inputText, {
    left: textLeftCanvaso,
    top: textTopCanvaso,
    fontFamily: fontFamily,
    fontSize: fontSizePixels,
    fill: textColor, // Use the selected color
    fontWeight: isBold ? "bold" : "normal",
    fontStyle: isItalic ? "italic" : "normal",
    textDecoration: isUnderline ? "underline" : "", // Set underline text decoration
  });
  if (isCrossline) {
    const rectHeight = 2; // You can adjust the height of the crossline here
    const rect = new fabric.Rect({
      left: textLeftCanvaso,
      top: textTopCanvaso + fontSizePixels / 2 - rectHeight / 2,
      width: text.width,
      height: rectHeight,
      fill: textColorCanvaso,
    });
    canvasPoloBackMiddle.add(rect);
  }
  if (isUnderline) {
    const rectsHeight = 2; // You can adjust the height of the crossline here
    const rects = new fabric.Rect({
      left: textLeftCanvaso,
      top: textTopCanvaso + fontSizePixels - rectsHeight,
      width: text.width,
      height: rectsHeight,
      fill: textColorCanvaso,
    });
    canvasPoloBackMiddle.add(rects);
  }
  canvasPoloBackMiddle.add(text);
  canvasPoloBackMiddle.renderAll();
}

const canvasPoloBackTop = new fabric.Canvas("canvas-polo-back-top");
function addTextPoloBackTop() {
  const inputText = document.getElementById("text-input").value;
  const fontSizePoints = parseFloat(
    document.getElementById("font-size-input").value
  );
  const fontSizePixels = pointsToPixels(fontSizePoints); // Convert points
  const fontFamily = document.getElementById("font-family-input").value;
  const isBold = document.getElementById("bold-input").checked;
  const isItalic = document.getElementById("italic-input").checked;
  const isUnderline = document.getElementById("underline-input").checked;
  const isCrossline = document.getElementById("crossline-input").checked;
  const fontStyle = (isBold ? "bold " : "") + (isItalic ? "italic " : "");
  const textDecoration =
    (isUnderline ? "underline " : "") + (isCrossline ? "line-through" : "");

  const text = new fabric.Text(inputText, {
    left: textLeftCanvaso,
    top: textTopCanvaso,
    fontFamily: fontFamily,
    fontSize: fontSizePixels,
    fill: textColor, // Use the selected color
    fontWeight: isBold ? "bold" : "normal",
    fontStyle: isItalic ? "italic" : "normal",
    textDecoration: isUnderline ? "underline" : "", // Set underline text decoration
  });
  if (isCrossline) {
    const rectHeight = 2; // You can adjust the height of the crossline here
    const rect = new fabric.Rect({
      left: textLeftCanvaso,
      top: textTopCanvaso + fontSizePixels / 2 - rectHeight / 2,
      width: text.width,
      height: rectHeight,
      fill: textColorCanvaso,
    });
    canvasPoloBackTop.add(rect);
  }
  if (isUnderline) {
    const rectsHeight = 2; // You can adjust the height of the crossline here
    const rects = new fabric.Rect({
      left: textLeftCanvaso,
      top: textTopCanvaso + fontSizePixels - rectsHeight,
      width: text.width,
      height: rectsHeight,
      fill: textColorCanvaso,
    });
    canvasPoloBackTop.add(rects);
  }
  canvasPoloBackTop.add(text);
  canvasPoloBackTop.renderAll();
}

const canvasPoloLeftImage = new fabric.Canvas("canvas-polo-left-image");
function addTextcanvasPoloLeftImage() {
  const inputText = document.getElementById("text-input").value;
  const fontSizePoints = parseFloat(
    document.getElementById("font-size-input").value
  );
  const fontSizePixels = pointsToPixels(fontSizePoints); // Convert points
  const fontFamily = document.getElementById("font-family-input").value;
  const isBold = document.getElementById("bold-input").checked;
  const isItalic = document.getElementById("italic-input").checked;
  const isUnderline = document.getElementById("underline-input").checked;
  const isCrossline = document.getElementById("crossline-input").checked;
  const fontStyle = (isBold ? "bold " : "") + (isItalic ? "italic " : "");
  const textDecoration =
    (isUnderline ? "underline " : "") + (isCrossline ? "line-through" : "");

  const text = new fabric.Text(inputText, {
    left: textLeftCanvaso,
    top: textTopCanvaso,
    fontFamily: fontFamily,
    fontSize: fontSizePixels,
    fill: textColor, // Use the selected color
    fontWeight: isBold ? "bold" : "normal",
    fontStyle: isItalic ? "italic" : "normal",
    textDecoration: isUnderline ? "underline" : "", // Set underline text decoration
  });
  if (isCrossline) {
    const rectHeight = 2; // You can adjust the height of the crossline here
    const rect = new fabric.Rect({
      left: textLeftCanvaso,
      top: textTopCanvaso + fontSizePixels / 2 - rectHeight / 2,
      width: text.width,
      height: rectHeight,
      fill: textColorCanvaso,
    });
    canvasPoloLeftImage.add(rect);
  }
  if (isUnderline) {
    const rectsHeight = 2; // You can adjust the height of the crossline here
    const rects = new fabric.Rect({
      left: textLeftCanvaso,
      top: textTopCanvaso + fontSizePixels - rectsHeight,
      width: text.width,
      height: rectsHeight,
      fill: textColorCanvaso,
    });
    canvasPoloLeftImage.add(rects);
  }
  canvasPoloLeftImage.add(text);
  canvasPoloLeftImage.renderAll();
}

const canvasPoloRightImage = new fabric.Canvas("canvas-polo-right-image");
function addTextcanvasPoloRightImage() {
  const inputText = document.getElementById("text-input").value;
  const fontSizePoints = parseFloat(
    document.getElementById("font-size-input").value
  );
  const fontSizePixels = pointsToPixels(fontSizePoints); // Convert points
  const fontFamily = document.getElementById("font-family-input").value;
  const isBold = document.getElementById("bold-input").checked;
  const isItalic = document.getElementById("italic-input").checked;
  const isUnderline = document.getElementById("underline-input").checked;
  const isCrossline = document.getElementById("crossline-input").checked;
  const fontStyle = (isBold ? "bold " : "") + (isItalic ? "italic " : "");
  const textDecoration =
    (isUnderline ? "underline " : "") + (isCrossline ? "line-through" : "");

  const text = new fabric.Text(inputText, {
    left: textLeftCanvaso,
    top: textTopCanvaso,
    fontFamily: fontFamily,
    fontSize: fontSizePixels,
    fill: textColor, // Use the selected color
    fontWeight: isBold ? "bold" : "normal",
    fontStyle: isItalic ? "italic" : "normal",
    textDecoration: isUnderline ? "underline" : "", // Set underline text decoration
  });
  if (isCrossline) {
    const rectHeight = 2; // You can adjust the height of the crossline here
    const rect = new fabric.Rect({
      left: textLeftCanvaso,
      top: textTopCanvaso + fontSizePixels / 2 - rectHeight / 2,
      width: text.width,
      height: rectHeight,
      fill: textColorCanvaso,
    });
    canvasPoloRightImage.add(rect);
  }
  if (isUnderline) {
    const rectsHeight = 2; // You can adjust the height of the crossline here
    const rects = new fabric.Rect({
      left: textLeftCanvaso,
      top: textTopCanvaso + fontSizePixels - rectsHeight,
      width: text.width,
      height: rectsHeight,
      fill: textColorCanvaso,
    });
    canvasPoloRightImage.add(rects);
  }
  canvasPoloRightImage.add(text);
  canvasPoloRightImage.renderAll();
}

function uploadImage() {
  const imageInput = document.getElementById("imageInput");
  const file = imageInput.files[0];

  if (!file) {
    alert("Please select an image.");
    return;
  }

  const formData = new FormData();
  formData.append("image", file);

  fetch("upload.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())

    .then((result) => {
      console.log(result);
      console.log("Image Name: " + file.name);
      window.alert("image uploaded click add image button");
    })
    .catch((error) => console.error("Error uploading image:", error));
  imageName = file.name;
  return imageName;
}

// ordering process
let orderReadyImageData;
let orderReadyDataObject;

let placeOrderModal;
function placeOrderModalOpen() {
  placeOrderModal = new bootstrap.Modal("#orderNowModal");
  placeOrderModal.show();

  saveCurrentDesign(true, todo); //  ordering save design

  function todo(imageObject, dataObject) {
    imageDataForOrder = imageObject;
    const preview = document.getElementById("orderNowModal");
    preview.querySelector("img").src = imageObject.dataURLFront;
    dataObject.sizeQuntitySets.forEach((element) => {
      const row = document.createElement("span");
      row.innerHTML = JSON.stringify(element);
      // document.getElementById("orderNowModalDetails").appendChild(row);
    });
  }

  // if (status) {
  //   let dataURLFront;
  //   let dataURLBack;
  //   let dataURLLeft;
  //   let dataURLRight;
  //   // front
  //   dataObject.views.active = "front";
  //   viewChange("front");
  //   generateTextImageSections("canvasOverlyFront");
  //   setTimeout(() => {
  //     render(dataObject);
  //   }, 1000);

  //   setTimeout(() => {
  //     dataURLFront = generateFront();
  //     dataObject.views.active = "back";
  //     viewChange("back");
  //     generateTextImageSections("canvasOverlyBack");
  //     setTimeout(() => {
  //       render(dataObject);
  //     }, 1000);
  //   }, 4000);

  //   setTimeout(() => {
  //     dataURLBack = generateBack();
  //     dataObject.views.active = "left";
  //     viewChange("left");
  //     generateTextImageSections("canvasOverlyLeft");
  //     setTimeout(() => {
  //       render(dataObject);
  //     }, 1000);
  //   }, 8000);

  //   setTimeout(() => {
  //     dataURLLeft = generateLeft();
  //     dataObject.views.active = "right";
  //     viewChange("right");
  //     generateTextImageSections("canvasOverlyRight");
  //     setTimeout(() => {
  //       render(dataObject);
  //     }, 1000);
  //   }, 12000);

  //   setTimeout(() => {
  //     dataURLRight = generateRight();

  //     let imageObject = {
  //       dataURLFront: dataURLFront,
  //       dataURLBack: dataURLBack,
  //       dataURLLeft: dataURLLeft,
  //       dataURLRight: dataURLRight,
  //     };

  //     console.log(imageObject);
  //     console.log(dataObject);
  //     orderReadyImageData = imageObject;
  //     orderReadyDataObject = dataObject;

  //     // dataObject.views.active = "front"; // set default view
  //     // viewChange("front");

  //     // let form = new FormData();
  //     // form.append("imageObject", JSON.stringify(imageObject));
  //     // form.append("design_json", JSON.stringify(dataObject));

  //     // let request = new XMLHttpRequest();
  //     // request.onreadystatechange = function () {
  //     //   if (request.readyState == 4) {
  //     //     console.log(request.responseText);
  //     //     try {
  //     //       // kaviska - fix what happens after placing an order
  //     //     } catch (error) {
  //     //       console.log(error);
  //     //     }
  //     //     render(dataObject);
  //     //   }
  //     // };

  //     // request.open("POST", SERVER_URL + "backend/orderingProcess.php", true);
  //     // request.send(form);
  //     // renderEndEffects();
  //   }, 14000);
  // }
}

let form = new FormData();

async function getUserDetails() {
  try {
    const response = await fetch(SERVER_URL + "backend/user_data_get.php", {
      method: "POST",
      body: form,
    });
    const data = await response.json();
    if (data.status === "success") {
      return data.userData.mobile ? true : false;
    } else {
      return false;
    }
  } catch (error) {
    console.error("Error fetching user details:", error);
    return false;
  }
}

async function showToastMessage(message) {
  const toastContainer = document.querySelector(".toast-container");
  const toast = document.getElementById("renderStartToastMessage");
  const toastBody = toast.querySelector(".toast-body span");
  toastBody.textContent = message;

  const toastInstance = new bootstrap.Toast(toast, { delay: 5000 });
  toastInstance.show();
}

async function placeOrder() {
  if (!dataObject.sizeQuntitySets || dataObject.sizeQuntitySets.length === 0) {
    await showToastMessage(
      "Size and quantity sets are empty. Please add size and quantity before you press the order button."
    );
    return;
  }

  const userDetails = await getUserDetails();
  if (!userDetails) {
    await showToastMessage(
      "Please fill user details so that we can contact you if there's an issue with your order."
    );
    return;
  }
  await showToastMessage(
    "Please Wait Few Seconds."
  );
  form.append("image", JSON.stringify(imageDataForOrder));
  form.append("dataObject", JSON.stringify(dataObject));
  console.log(dataObject)
  console.log(imageDataForOrder)

  try {
    const response = await fetch(SERVER_URL + "backend/orderingProcess.php", {
      method: "POST",
      body: form,
    });
    const responseData = await response.json();
    if (responseData.status === "success") {
      alert("Order placed successfully");
      placeOrderModal.hide();
      window.location.reload();
    } else if (responseData.status === "failed") {
      await showToastMessage(responseData.error);
    } else {
      await showToastMessage("An error occurred while processing the order.");
    }
  } catch (error) {
    console.error("Error placing order:", error);
    await showToastMessage("Order placed successfully.");
  }
}
// function addStaticImage() {
//   console.log("ihi");
//   const imgPath = "uploads/" + imageName; // Replace this with the correct path to your image
//   const imgObj = new Image();

//   imgObj.onload = function () {
//     const image = new fabric.Image(imgObj, {
//       left: 50,
//       top: 50,
//       scaleX: 0.4,
//       scaleY: 0.4,
//     });

//     const deleteButton = document.createElement("button");
//     deleteButton.innerHTML = '<i class="fas fa-trash-alt"></i>'; // Font Awesome trash icon

//     // Position the delete button at the top-right corner of the image
//     deleteButton.style.position = "absolute";
//     deleteButton.style.top = "50px"; // Adjust the top position according to your preference
//     deleteButton.style.left = "50px"; // Adjust the left position according to your preference

//     deleteButton.classList.add("btn", "btn-default");

//     deleteButton.addEventListener("click", function () {
//       canvass.remove(image);
//       deleteButton.remove();
//     });

//     document.body.appendChild(deleteButton);

//     canvass.add(image);
//     canvass.renderAll();
//   };

//   imgObj.src = imgPath;
// }

// function poloMiddle() {
//   document.getElementById("addingText").setAttribute("onclick", "addText()");
// }
// function poloTopLeft() {
//   document
//     .getElementById("addingText")
//     .setAttribute("onclick", " addTextTopPoloLeft()");
// }

// function poloMiddle() {
//   document.getElementById("addingText").setAttribute("onclick", "addText()");
// }
// function poloTopLeft() {
//   document
//     .getElementById("addingText")
//     .setAttribute("onclick", " addTextTopPoloLeft()");
// }

// function poloTopRight() {
//   document
//     .getElementById("addingText")
//     .setAttribute("onclick", " addTextTopPoloRight()");
// }
// function changeCanvasPoloBackMiddle() {
//   document
//     .getElementById("addingText")
//     .setAttribute("onclick", " addTextPoloBackMiddle()");
// }
// function changeCanvasPoloBackTop() {
//   document
//     .getElementById("addingText")
//     .setAttribute("onclick", "addTextPoloBackTop()");
// }
// function changeCanvasPoloLeftImage() {
//   document
//     .getElementById("addingText")
//     .setAttribute("onclick", "addTextcanvasPoloLeftImage()");
// }
// function changeCanvasPoloRightImage() {
//   document
//     .getElementById("addingText")
//     .setAttribute("onclick", "addTextcanvasPoloRightImage()");
// }
function setColor() {
  // Get the selected color from the color picker input
  var colorPicker = document.getElementById("colorPicker");
  var selectedColor = colorPicker.value;

  // Set the background color of the small-box element
  document.getElementById("small-box").style.backgroundColor = selectedColor;
}

let toggleClothCombinationPanelToggleStatus = false;
function toggleClothCombinationPanel() {
  const toggleIcon = document.getElementById(
    "clothCombinationOptionViewerToggle"
  ).childNodes[1];

  const togglePanel = document.getElementById(
    "clothCombinationOptionViewerPanel"
  );

  if (toggleClothCombinationPanelToggleStatus) {
    toggleIcon.classList.add("fa-shirt");
    toggleIcon.classList.remove("fa-x");

    togglePanel.classList.add("d-none");
    togglePanel.classList.remove("d-block");

    toggleClothCombinationPanelToggleStatus = false;
  } else {
    toggleIcon.classList.remove("fa-shirt");
    toggleIcon.classList.add("fa-x");

    togglePanel.classList.add("d-block");
    togglePanel.classList.remove("d-none");

    toggleClothCombinationPanelToggleStatus = true;
  }
}

// Function to display an alert message if it has not been shown before
function showAlertOnce() {
  // Check if a flag exists in local storage indicating that the alert has been shown
  if (!localStorage.getItem("alertShown")) {
    window.alert("For a better user experience, please zoom out your screen.");

    // Set a flag in local storage to indicate that the alert has been shown
    localStorage.setItem("alertShown", "true");
  }
}

// Check screen width and trigger the alert if it's smaller than 768px
function checkScreenSize() {
  if (window.innerWidth <= 768) {
    showAlertOnce();
  }
}

// Clear the alert flag in local storage when the page loads (to show the alert again)
localStorage.removeItem("alertShown");

// Attach an event listener to the window's resize event
window.addEventListener("resize", checkScreenSize);

// Check screen size when the page loads
checkScreenSize();







const imageDataArray = []; // Create an array to store image data

function updateImage() {
  const fileInput = document.getElementById("customFile1");
  const image = document.getElementById("imagePlaceholder");

  if (fileInput.files && fileInput.files[0]) {
    const reader = new FileReader();

    reader.onload = function (e) {
      // Push the image data (in this case, the data URL) to the array
      imageDataArray.push(e.target.result);

      // You can also display the image if needed
      image.src = e.target.result;
    };

    reader.readAsDataURL(fileInput.files[0]);
    console.log(imageDataArray)
  } else {
    // Handle the case where no file is selected or other errors
    console.error("No file selected or an error occurred.");
    window.alert('No file selected or an error occurred.')
  }

 
}

function updateImage1() {
  const fileInput = document.getElementById("customFile2");
  const image = document.getElementById("imagePlaceholder1");

  if (fileInput.files && fileInput.files[0]) {
      const reader = new FileReader();

      reader.onload = function (e) {
        // Push the image data (in this case, the data URL) to the array
        imageDataArray.push(e.target.result);
  
        // You can also display the image if needed
        image.src = e.target.result;
      };
  
      reader.readAsDataURL(fileInput.files[0]);
      console.log(imageDataArray)
    } else {
      // Handle the case where no file is selected or other errors
      console.error("No file selected or an error occurred.");
      window.alert('No file selected or an error occurred.')
    }
  
   
  }
function updateImage2() {
  const fileInput = document.getElementById("customFile3");
  const image = document.getElementById("imagePlaceholder2");

  if (fileInput.files && fileInput.files[0]) {
      const reader = new FileReader();

      reader.onload = function (e) {
        // Push the image data (in this case, the data URL) to the array
        imageDataArray.push(e.target.result);
  
        // You can also display the image if needed
        image.src = e.target.result;
      };
  
      reader.readAsDataURL(fileInput.files[0]);
      console.log(imageDataArray)
    } else {
      // Handle the case where no file is selected or other errors
      console.error("No file selected or an error occurred.");
      window.alert('No file selected or an error occurred.')
    }
  
   
  }
function updateImage3() {
  const fileInput = document.getElementById("customFile4");
  const image = document.getElementById("imagePlaceholder3");

  if (fileInput.files && fileInput.files[0]) {
      const reader = new FileReader();

      reader.onload = function (e) {
        // Push the image data (in this case, the data URL) to the array
        imageDataArray.push(e.target.result);
  
        // You can also display the image if needed
        image.src = e.target.result;
      };
  
      reader.readAsDataURL(fileInput.files[0]);
      console.log(imageDataArray)
    } else {
      // Handle the case where no file is selected or other errors
      console.error("No file selected or an error occurred.");
      window.alert('No file selected or an error occurred.')
    }
  
   
  }


function submitImages() {
  if(imageDataArray.length>=1){
    const title = document.getElementById('presettitle').value;
const data = {
    imageData: imageDataArray,
    title: title
};
  
  let form=new FormData();
  form.append("presetData",JSON.stringify(data))

    let request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if (request.readyState == 4) {
        // preform an action on response
        let response = JSON.parse(request.responseText);
        if (response.status == "success") {
          alert("Sucessfully updated");
          // This will refresh the page
         window.location.reload();

        } else {
          console.log(response.status);
        }
        console.log(request.responseText);
      }
    };
    request.open("POST", SERVER_URL + "backend/presetUpdater.php", true);
    request.send(form);  

  }
 
 
}
document.addEventListener("DOMContentLoaded", () => {
  dataLoader();
 
});



function dataLoader(){

  console.log("data loaded")
  let request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      // preform an action on response
      let response = JSON.parse(request.responseText);
      if (response.status == "success") {
        let data=response.data;
        let tableFinalData=`        <tr>
        <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: center;">Title</th>
        <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: center;">Image</th>
        <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: center; width: 150px;" class="image-column">Delete</th>
    </tr>`
        data.forEach(item => {
          console.log(item.preset_idea);
          let tableData=` <tr>
          <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: center;">${item.presettitle}</td>
          <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: center; width: 150px;" class="image-column">
          <img style="max-width: 100%; height: auto; display: block; margin: 0 auto;" src="./backend/preset_images/1_${item.preset_idea}.png" alt="Image 1">
          </td>
          <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: center;width:500px;">

          <button class="btn btn-danger btn-rounded border border-primary" id="submitButton" onclick="deleteImage('${item.preset_idea}')" style="font-size:20px;">Delete</button>
          
          
          </td>
          
      </tr>
     `
     tableFinalData=tableFinalData+tableData

        });
        document.getElementById('presetTable').innerHTML=tableFinalData;

      } else {
        console.log(response.status);
      }
      console.log(request.responseText);
    }
  };
  request.open("POST", SERVER_URL + "backend/presetLoader.php", true);
  request.send();  


}

function deleteImage(id) {
  const data={
    imageData:id
  }

  let form=new FormData();
  form.append("presetData",JSON.stringify(data))

    let request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if (request.readyState == 4) {
        // preform an action on response
        let response = JSON.parse(request.responseText);
        if (response.status == "success") {
          alert("Sucessfully Deleted");
        } else {
          console.log(response.status);
        }
        console.log(request.responseText);
      }
    };
    request.open("POST", SERVER_URL + "backend/presetDelete.php", true);
    request.send(form);  
 
}








function openSavedDesignModals() {
  const container = document.getElementById("savedDesignModelContentContainer");
  container.innerHTML = "";

  // Declare the modal using const if it won't be reassigned
  const savedDesignModel = new bootstrap.Modal("#savedDesignModel");
  savedDesignModel.show();
  console.log("Modal opened");

  const request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      if (request.status === 200) {
        const response = request.responseText;
        try {
          const responseObject = JSON.parse(response);

          if (responseObject.status === "success") {
            responseObject.data.forEach((element) => {
              const resultDesign = document.createElement("div");
              resultDesign.classList.add("saved-design-item");

              // Add an onclick function to the resultDesign element
resultDesign.addEventListener("click", function() {
  // Your custom logic for the click event goes here
   // Example action, you can replace this with your logic
  // Define your parameters as key-value pairs
  const param1 = `./backend/preset_images/1_${element.preset_idea}.png`;
var param2 = `./backend/preset_images/2_${element.preset_idea}.png`;
var param3 = `./backend/preset_images/3_${element.preset_idea}.png`;
var param4 = `./backend/preset_images/4_${element.preset_idea}.png`;

var param5 = element.presettitle;

// Construct the URL with the parameters
var url = "userPreset.php" + 
          "?param1=" + param1 + 
          "&param2=" + param2+
          "&param3=" + param3+
          "&param4=" + param4+
          "&param5=" + param5;


// Navigate to the URL
window.location.href = url;

});

              const div = document.createElement("div");
              div.classList.add("saved-design-list-view-details");
              div.innerHTML = `
                <span class="fw-bold  my-5 mx-5" style="margin-top:277700px;">${element.presettitle}</span>
                <br />
              `;
              resultDesign.appendChild(div);

              const image = document.createElement("img");
              image.width = "200px";
              image.src = `./backend/preset_images/1_${element.preset_idea}.png`;
              image.classList.add("saved-design-item-images");
              resultDesign.appendChild(image);

              container.appendChild(resultDesign);
            });
          } else if (responseObject.status === "failed") {
            console.log(responseObject.error);
            container.innerText = "Please sign in to view saved designs...";
          } else {
            console.log(responseObject);
          }
        } catch (error) {
          console.log(error);
        }
      } else {
        // Handle network or server-related errors here
        console.error("Request failed with status: " + request.status);
      }
    }
  };

  request.open("POST", SERVER_URL + "backend/presetLoader.php", true);
  request.send();
}





// Declare imageData array outside of the event listener and the preset function
const imageData = [];

document.getElementById('customFilenew').addEventListener('change', function (event) {
    const fileInput = event.target;
    const selectedFiles = fileInput.files;

    for (let i = 0; i < selectedFiles.length; i++) {
        const file = selectedFiles[i];

        // Read the file as a data URL
        const reader = new FileReader();

        reader.onload = function (event) {
            // Push the file data (in base64 format) into the array
            window.alert("image update sucess add more images if you want")
            imageData.push(event.target.result);

            // Log the last data in the array
            if (i === selectedFiles.length - 1) {
                console.log("Last data in the array:", event.target.result);
            }
        };

        reader.readAsDataURL(file);
    }
});

function preset() {
  const data={
    imageData:imageData,
    instuctions: document.getElementById('instuctionBox').value,
    title:document.getElementById('hidetext').textContent
  }
  console.log(data)
  alert("Please wait few secons your oder is processing")

  let form=new FormData();
  form.append("presetData",JSON.stringify(data))

    let request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if (request.readyState == 4) {
        // preform an action on response
        let response = JSON.parse(request.responseText);
        if (response.status == "success") {
          alert("Sucessfully place your oreder");
          window.location.reload();

        } else {
          console.log(response.status);
        }
        console.log(request.responseText);
      }
    };
    request.open("POST", SERVER_URL + "backend/presetOrder.php", true);
    request.send(form);  
}
