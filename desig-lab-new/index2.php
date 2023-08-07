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
      body: formData
  })

  .then(response => response.text())
  
  .then(result => {
      console.log(result);
      console.log("Image Name: " + file.name);
  })
  .catch(error => console.error("Error uploading image:", error));
  imageName=file.name;
  return imageName
}




function addStaticImage() {
  console.log("ihi")
  const imgPath = "uploads/"+imageName; // Replace this with the correct path to your image
  const imgObj = new Image();
  
  imgObj.onload = function () {
    const image = new fabric.Image(imgObj, {
      left: 50,
      top: 50,
      scaleX: 0.4,
      scaleY: 0.4,
    });

    canvass.add(image);
    canvass.renderAll();
  };

  imgObj.src = imgPath;
}












