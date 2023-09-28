<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <section class="t_changesection">
    <div class="t_changebox">
      <div class="t_changeimage">
        <div id="t_changeblock1" class="t_changeimg1"></div>
        <div id="t_changeblock2" class="t_changeimg2"></div>
        <div id="t_changeblock3" class="t_changeimg3"></div>
        <div id="t_changeblock4" class="t_changeimg4"></div>
      </div>
      <div class="t_changebtnbox">
        <button class="t_changebtn t_changebtn1" onclick="sectionSwitch('t_changeblock1');">
          <div class="t_changebtnimg t_changebtnimg1"></div>
          <p class="t_changebtnpara">Front view</p>
        </button>
        <button class="t_changebtn t_changebtn2" onclick="sectionSwitch('t_changeblock2');">
          <div class="t_changebtnimg t_changebtnimg2"></div>
          <p class="t_changebtnpara">Left view</p>
        </button>
        <button class="t_changebtn t_changebtn3" onclick="sectionSwitch('t_changeblock3');">
          <div class="t_changebtnimg t_changebtnimg3"></div>
          <p class="t_changebtnpara">Back view</p>
        </button>
        <button class="t_changebtn t_changebtn4" onclick="sectionSwitch('t_changeblock4');">
          <div class="t_changebtnimg t_changebtnimg4"></div>
          <p class="t_changebtnpara">Right view</p>
        </button>
      </div>
    </div>
    <!-- prcie tag  -->
    <div class="pricetagcontainer">
      <img src="pricetag.jpg" alt="" />
      <button class="pricetagbtn3box">
        <img src="Cart.png" style="width: 25px; height: 25px" />
        <p class="pricetagbtn3heading">MIN QTY : 15</p>
      </button>
    </div>
  </section>

  <!-- boostrap topup window -->

  <!-- <button> <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      dfaehfjhsf sugfursgf wufg wru gr 
    </div>
  
  </button> -->

  <!-- Vertically centered modal -->
  <!-- <div class="modal-dialog modal-dialog-centered">
  ...
</div> -->

  <!-- Vertically centered scrollable modal -->
  <!-- <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
  ...
</div> -->

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>

  
  <script src="https://kit.fontawesome.com/79961d807c.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>

</html>