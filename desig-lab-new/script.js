$(document).ready(function () {
  $("#showModal").on("click", function () {
    $("#myModal").modal({
      escapeClose: false,
      clickClose: false,
      showClose: false,
    });
  });

  // Close modal box on close button click
  $(".modal-close").on("click", function () {
    $.modal.close();

    // Remove the highlight effect
    $("#myModal").removeClass("highlight");
  });

  let currentStep = 1;
  const totalSteps = 3;

  // Function to show the current step
  function showStep(step) {
    $(".steps").hide();
    $(`#step${step}`).show();
  }

  // Function to go to the previous step
  function previousStep() {
    if (currentStep > 1) {
      currentStep--;
      showStep(currentStep);
    }
  }

  // Function to go to the next step
  function nextStep() {
    if (currentStep < totalSteps) {
      currentStep++;
      showStep(currentStep);
    }
  }

  // Show the initial step
  showStep(currentStep);

  $(".next-button").on("click", function () {
    nextStep();
  });

  $(".prev-button").on("click", function () {
    previousStep();
  });

  // Show the modal on click
  $("#showModal").on("click", function () {
    $("#myModal").modal({
      escapeClose: false,
      clickClose: false,
      showClose: false,
    });
  });

  // Close modal box on close button click
  $(".modal-close").on("click", function () {
    $.modal.close();

    // Remove the highlight effect
    $("#myModal").removeClass("highlight");
  });

  // Attach click event to "Select" buttons
  $(".select-button").on("click", function () {
    // Go to the next step
    nextStep();
    // Get the .bullet element associated with the clicked button
    var bullet = $(this).closest(".step1").find(".bullet");

    // Show the right icon (e.g., checkmark)
    bullet.find("#check").show();

    // Hide the icon after a short delay (optional)
    setTimeout(function () {
      bullet.find("#check").hide();
    }, 1000); // Change the delay as needed (in milliseconds)
  });
});

function toggleDropdown() {
  var dropdownMenu = document.querySelector(".dropdown-menu");
  dropdownMenu.classList.toggle("show");
}

function setColor(color) {
  var smallBox = document.querySelector(".small-box");
  smallBox.style.backgroundColor = color;
}

// Function to hide the dropdown menu
function hideDropdown() {
  var dropdownMenu = document.querySelector(".dropdown-menu");
  dropdownMenu.classList.remove("show");
}

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
