// const SERVER_URL = "http://localhost/t-shirt-thing/desig-lab-new/";
const SERVER_URL =
//  "http://localhost/voodooDigital/t-shirt-thing/desig-lab-new/"; //janith
 "http://localhost/to%20do%20list/t-shirt-thing/desig-lab-new/"//malidu

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
        let responseObject = JSON.parse(response).data;
        responseObject.forEach((element) => {
          let id = element.id;
          let designData = JSON.parse(element.design_data);

          let resultDesign = document.createElement("div");
          resultDesign.classList.add("saved-design-item");
          resultDesign.innerText =
            id + designData.clothType + " - " + designData.gender;

          let image = document.createElement("img");
          image.src = "backend/saved_design_images/" + id + "dataURLFront.png";
          image.classList.add("saved-design-item-images");
          resultDesign.appendChild(image);

          container.appendChild(resultDesign);
        });

        console.log(responseObject);
      } catch (error) {
        console.log(response);
      }
    }
  };

  request.open("GET", SERVER_URL + "backend/get_saved_design_api.php", true);
  request.send();
}

function userData() {
  console.log("gf");
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
    }
  };

  request.open(
    "POST",
    "http://localhost/to%20do%20list/t-shirt-thing/desig-lab-new/backend/user_data_save.php",
    true
  );
  request.send(form);
}

function SignIn() {
  let form = new FormData();
  form.append("email", document.getElementById("emailInput").value);
  form.append("password", document.getElementById("passwordInput").value);

  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
    if (request.readyState == 4 && request.status == 200) {
      responseObject = JSON.parse(request.responseText);
      if (responseObject.status === "success") {
        window.location.reload();
      } else {
        console.log(responseObject);
      }
    }
  };

  request.open("POST", SERVER_URL + "backend/sign_in.php", true);
  request.send(form);
}

function updateDataObject(dataObject) {
  dataObject = dataObject;
}

function logout() {
  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
    if (request.readyState == 4 && request.status == 200) {
      responseObject = JSON.parse(request.responseText);
      if (responseObject.status === "success") {
        window.location.reload();
      } else {
        console.log(responseObject);
      }
    }
  };

  request.open(
    "POST",
    "http://localhost/to%20do%20list/t-shirt-thing/desig-lab-new/backend/sign_out.php",
    true
  );
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







const canvass = new fabric.Canvas("canvass");
let textTop = 150;
let textLeft = 150;
let selectedText = null;
let texts = []; // Array to store added texts

function addText() {
  const inputText = document.getElementById("text-input").value;
  const sizeText = document.getElementById("size-input").value;
  const colorText = document.getElementById("color-input").value;
  const textColor = colorText; // Default color

  const text = new fabric.Text(inputText, {
    left: textLeft,
    top: textTop,
    fontFamily: "Arial",
    fontSize: sizeText,
    fill: textColor,
  });

  canvass.add(text);
  texts.push(text); // Add the text to the texts array
  





  canvass.renderAll();
}

function deleteAllItems() {
  canvass.clear(); // Remove all objects from the canvas
  texts = []; // Clear the texts array
}

// Handle changes to text position inside the box
canvass.on("object:moving", (e) => {
  const target = e.target;
  if (target.type === "text") {
    textLeft = target.left;
    textTop = target.top;
  }
});

function addImage() {
  const imageUrl = "p2.jpg"; // URL of the image you want to add

  fabric.Image.fromURL(imageUrl, function (img) {
    // Callback function to handle the loaded image
    img.set({
      left: 100,
      top: 100,
      width: 100, // Set the desired width of the image
      height: 100, // Set the desired height of the image
    });

    canvass.add(img);

    canvass.renderAll();
  }, {
    crossOrigin: "Anonymous", // Set the crossOrigin property to "Anonymous"
    // Other options, if needed
  });
}

// Call addImage() function to add the image to the canvas
addImage();













// text adding feature popup size incrasing
let currentFontSize = 16; // Initial font size in pixels

function increaseFontSize() {
    currentFontSize += 1; // Increase font size by 1 pixels
    applyFontSize();

}

function decreaseFontSize() {
    currentFontSize -= 1; // Decrease font size by 1 pixels
    applyFontSize();
}

function applyFontSize() {
    const textContent = document.getElementById("text-pop-sizebtn1");
    // textContent.style.fontSize = `${currentFontSize}px`;
    textContent.innerHTML = currentFontSize;
} 


