// const SERVER_URL = "http://localhost/to%20do%20list/t-shirt-thing/";
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
            console.log(responseObject);
            responseObject.data.forEach((element) => {
              let dataObject = JSON.parse(element.data_object);

              // Create a container for each order
              let orderContainer = document.createElement("div");
              orderContainer.classList.add("order-item");

              // Create an image element for the front image
              let frontImage = document.createElement("img");
              frontImage.classList.add("saved-design-item-images");
              frontImage.width = "200px";
              frontImage.src =
                "backend/saved_design_images/" +
                element.id +
                "dataURLFront.png"; // Set the image source dynamically
              orderContainer.appendChild(frontImage);

              // Display order details
              let orderDetails = document.createElement("div");
              orderDetails.classList.add("order-details");
              orderDetails.innerHTML = `
                <p><strong>Ordered Datetime:</strong> ${element.ordered_datetime}</p>
                <p><strong>Gender:</strong> ${element.gender}</p>
                <p><strong>Cloth Type:</strong> ${dataObject.clothType}</p>
                <p><strong>Print Type:</strong> ${dataObject.printType}</p>
                <!-- Add more order details here as needed -->
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

  request.open("GET", SERVER_URL + "backend/get_preset.php", true);
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
      window.alert("data added sucessfully");
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
          provinceInput.value = userData.userData.provience;
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
          window.alert("sign in unsessfull");
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
          alert(responseObject.status);
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
      document.getElementById("orderNowModalDetails").appendChild(row);
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

function placeOrder() {
  if (!dataObject.sizeQuntitySets || dataObject.sizeQuntitySets.length === 0) {
    alert(
      "Size and quantity sets are empty. Please add size and quntity before you press order button."
    );
    return; // Do not make a request to the database
  }
  let form = new FormData();
  form.append("image", JSON.stringify(imageDataForOrder));
  form.append("dataObject", JSON.stringify(dataObject));

  let request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      let response = request.responseText;
      let responseJson = JSON.parse(response);
      if (responseJson.status == "success") {
        alert("Success");
        placeOrderModal.hide();
      } else if (responseJson.status == "failed") {
        alert(responseJson.error);
      } else {
        alert(response);
      }
    }
  };
  request.open("POST", SERVER_URL + "backend/orderingProcess.php", true);
  request.send(form);
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