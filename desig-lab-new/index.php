<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <!-- css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="dcss.css" />

  <!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js" defer></script>
  <script src="https://kit.fontawesome.com/f98ce7c376.js" crossorigin="anonymous" defer></script>
  <script src="script.js" defer></script>
  <script src="main.js" defer></script>
</head>

<body>
  <nav class="d-flex justify-content-between align-items-center">
    <div class=" h-100">
      <a href="">
        <img src="images/free-logo-simple-illustration-vector-260nw-776460778.webp" />
      </a>
      <a href="">DesignLab</a>
      <a href="">Designs</a>
      <a href="">Orders</a>
      <a href="">Help</a>
      <a href="">
        Reviews
        <i class="fas fa-star"></i>
      </a>
    </div>
    <div class="d-flex h-100 justify-content-center">
      <a href=""><img class="nav-img-contact" src="images/nav-image.png" alt="" /></a>
      <a href="#"><i class="fas fa-shopping-cart"></i></a>
      <a href=""><button class="piority sign-in">Sign In</button></a>
    </div>

  </nav>

  <div class="section1">
    <div class="container section1-layout">
      <!-- left side panel -->
      <div class="section1-panel section1-panel-sides side-panel-1">
        <div class="basic-styling left-side-box1">
          <div class="list-group-item">
            <div id="btn1">
              <button class="left-side-btn" style="background-color: #6c7a89">
                Polo Tshirt
              </button>
            </div>
          </div>
          <div class="list-group-item">
            <div id="btn2">
              <button class="left-side-btn" style="background-color: #2c82c9">
                Men
              </button>
            </div>
          </div>
          <div class="list-group-item">
            <div id="btn9">
              <button class="left-side-btn" style="background-color: #2c82c9">
                ScreenPrint
              </button>
            </div>
          </div>
          <div class="list-group-item">
            <div id="btn3">
              <button class="left-side-btn" id="showModalss" style="background-color: #f62459">
                Product
              </button>
            </div>
          </div>
          <div class="list-group-item">
            <div id="btn4">
              <button class="left-side-btn" style="background-color: #343f86">
                Budget
              </button>
            </div>
          </div>
        </div>

        <div class="basic-styling left-side-box2">
          <div class="list-group-item" id="btn6">
            <button class="btn-style-remover left-side-box-btn">
              <i class="left-side-icons fas fa-t"></i>
              <p>Add Text</p>
            </button>
          </div>
          <div class="list-group-item" id="btn7">
            <button class="btn-style-remover left-side-box-btn">
              <i class="left-side-icons fas fa-image"></i>
              <p>Add Image</p>
            </button>
          </div>
          <div class="list-group-item" id="btn8">
            <button class="btn-style-remover left-side-box-btn">
              <i class="left-side-icons fas fa-download"></i>
              <p>Save Design</p>
            </button>
          </div>
          <div class="list-group-item" id="btn10">
            <button class="btn-style-remover left-side-box-btn">
              <i class="left-side-icons fas fa-sliders-h"></i>
              <p>Preset</p>
            </button>
          </div>
        </div>

        <div class="left-side-box3">
          <div class="pricetagcontainer">
            <button class="pricetagbtn3box">
              <img src="images/Cart.png" style="width: 25px; height: 25px" />
              <p class="pricetagbtn3heading">MIN QTY : 15</p>
            </button>
          </div>
        </div>
      </div>

      <!-- middle panel -->
      <div class="section1-panel section1-panel-mid side-panel-2">
        <div class="middle-slide">
          <div class="shirt-panel">
            <div class="icon-group-1 d-flex-column">
              <div class="basic-styling icon-group1-icons">
                <i class="fa-solid fa-pen"></i>
              </div>
              <div class="basic-styling icon-group1-icons">
                <i class="fa-regular fa-trash-can"></i>
              </div>
              <div class="basic-styling icon-group1-icons">
                <i class="fas fa-tshirt"></i>
              </div>
            </div>
            <img id="t_changeblock1" src="images/f.png" alt="" class="shirt" style="height: 500px; margin-top: 45px" />
            <img id="t_changeblock2" src="images/L.png" alt="" class="shirt" style="height: 500px; margin-top: 45px" />
            <img id="t_changeblock3" src="images/M.png" alt="" class="shirt" style="height: 500px; margin-top: 45px" />
            <img id="t_changeblock4" src="images/R.png" alt="" class="shirt" style="height: 500px; margin-top: 45px" />
          </div>

          <div id="myModal" class="modal">
            <div class="modal-box">
              <div class="product-form">
                <div class="progress-bar">
                  <div class="step">
                    <div class="bullet">
                      <span>1</span>
                    </div>
                    <div class="fas fa-check" id="check"></div>

                    <p>Start Here</p>
                  </div>
                  <div class="step">
                    <div class="bullet">
                      <span>2</span>
                    </div>
                    <p>T-shirt Type</p>
                  </div>
                  <div class="step">
                    <div class="bullet">
                      <span>3</span>
                    </div>
                    <p>Templeate</p>
                  </div>
                </div>

                <div class="shirt-item">
                  <!-- Step 1 -->
                  <div class="steps" id="step1">
                    <p>Hey Let's start here!</p>
                    <div class="step1">
                      <div class="step1-box1">
                        <p>Men</p>
                        <img src="images/shirt-new-removebg-preview.png" alt="" />
                        <button class="select-button">Select</button>
                      </div>
                      <div class="step1-box2">
                        <p>Woman</p>

                        <img src="images/girl-shirt.png" alt="" />

                        <button class="select-button">Select</button>
                      </div>
                    </div>
                    <div class="buttons">
                      <!-- Next and Previous buttons -->
                      <button class="prev-button" onclick="previousStep()">
                        Previous
                      </button>
                      <button class="next-button" onclick="nextStep()" id="next">
                        Next
                      </button>
                    </div>
                  </div>

                  <!-- Step 2 -->
                  <div class="steps" id="step2">
                    <p>Great! Now it's time to select what you want..</p>

                    <div class="step1">
                      <div class="step1-box1">
                        <p>Polo TShirt</p>
                        <img src="images/step2-image-1.png" alt="" />
                        <button class="select-button">Select</button>
                      </div>
                      <div class="step1-box2">
                        <p>Cotton T-shirt</p>

                        <img src="images/step2-image2.png" alt="" />
                        <button class="select-button">Select</button>
                      </div>
                    </div>
                    <div class="buttons">
                      <!-- Next and Previous buttons -->
                      <button class="prev-button" onclick="previousStep()">
                        Previous
                      </button>
                      <button class="next-button" onclick="nextStep()" id="next">
                        Next
                      </button>
                    </div>
                  </div>

                  <!-- Step 3 -->
                  <div class="steps" id="step3">
                    <p>
                      We prepaired everything for you. Just select template!
                    </p>

                    <div class="step1">
                      <div class="step1-box1">
                        <p>Two buttons</p>

                        <img src="images/shirt-new-removebg-preview.png" alt="" />

                        <button class="select-button">Select</button>
                      </div>
                      <div class="step1-box2">
                        <p>Three Buttons</p>
                        <img src="images/girl-shirt.png" alt="" />
                        <button class="select-button">Select</button>
                      </div>
                    </div>
                    <div class="buttons">
                      <!-- Next and Previous buttons -->
                      <button class="prev-button" onclick="previousStep()">
                        Previous
                      </button>
                      <button class="next-button" onclick="nextStep()" id="next">
                        Next
                      </button>
                    </div>
                  </div>
                </div>
                <span class="modal-close">&times;</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- right side panel -->
      <div class="section1-panel section1-panel-sides side-panel-3 d-flex flex-column align-items-center">
        <div class="basic-styling right-side-box1">
          <div class="right-side-box-btn-container">
            <div class="d-flex-column">
              <button style="background-color: #2596be" class="right-side-box-btn">
                Men
              </button>
              <button style="background-color: #8e48ae" class="right-side-box-btn">
                Woman
              </button>
              <button style="background-color: #4482c9" class="right-side-box-btn">
                Men
              </button>
              <button style="background-color: #8e44ad" class="right-side-box-btn">
                Woman
              </button>
            </div>

            <div class="d-flex-column">
              <button style="background-color: #1f3a93" class="right-side-box-btn">
                Coparate
              </button>
              <button style="background-color: #1f3a93" class="right-side-box-btn">
                Coparate
              </button>
              <button style="background-color: #fb6e0d" class="right-side-box-btn">
                Budget
              </button>
              <button style="background-color: #fb6e0d" class="right-side-box-btn">
                Budget
              </button>
            </div>

            <div class="d-flex-column">
              <span class="right-side-box-num"><input class="style-remover" type="radio" /></span>
              <span class="right-side-box-num"><input class="style-remover" type="radio" /></span>
              <span class="right-side-box-num"><input class="style-remover" type="radio" /></span>
              <span class="right-side-box-num"><input class="style-remover" type="radio" /></span>
            </div>
          </div>
        </div>

        <div class="basic-styling big-box d-flex justify-content-center flex-column align-items-center">
          <div class="dropdown">
            <button onclick="toggleDropdown1()" class="size-qty-box2 btn-style-remover d-flex-column" style="align-items: center; justify-content: center; gap: 10px">
              <div class="small-box"></div>
              <span>Color</span> <i class="fas fa-chevron-down"></i>
            </button>

            <div class="dropdown-menu1 basic-styling flex-column" id="dropdownContent1">
              <div class="color-row" style="max-width: 350px">
                <div class="color-option" onclick="setColor('red')" style="background-color: red"></div>
                <div class="color-option" onclick="setColor('blue')" style="background-color: blue"></div>
                <div class="color-option" onclick="setColor('green')" style="background-color: green"></div>
                <div class="color-option" onclick="setColor('yellow')" style="background-color: yellow"></div>
                <div class="color-option" onclick="setColor('orange')" style="background-color: orange"></div>
                <div class="color-option" onclick="setColor('purple')" style="background-color: purple"></div>
                <div class="color-option" onclick="setColor('pink')" style="background-color: pink"></div>
                <div class="color-option" onclick="setColor('teal')" style="background-color: teal"></div>
                <div class="color-option" onclick="setColor('gray')" style="background-color: gray"></div>
                <div class="color-option" onclick="setColor('brown')" style="background-color: brown"></div>
                <!-- Add more colors below -->
                <div class="color-option" onclick="setColor('cyan')" style="background-color: cyan"></div>
                <div class="color-option" onclick="setColor('magenta')" style="background-color: magenta"></div>
                <div class="color-option" onclick="setColor('lime')" style="background-color: lime"></div>
                <div class="color-option" onclick="setColor('silver')" style="background-color: silver"></div>
                <div class="color-option" onclick="setColor('indigo')" style="background-color: indigo"></div>
                <div class="color-option" onclick="setColor('gold')" style="background-color: gold"></div>
                <div class="color-option" onclick="setColor('maroon')" style="background-color: maroon"></div>
                <div class="color-option" onclick="setColor('navy')" style="background-color: navy"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="basic-styling big-box">
          <div class="d-flex-column" style="height: 100%">
            <button onclick="toggleDropdown2()" class="size-qty-box2 btn-style-remover d-flex-column" style="
                  height: 100%;
                  align-items: center;
                  justify-content: center;
                  gap: 10px;
                ">
              <div class="size-qty-box1">O items</div>
              <span style="width: 100%">Size & Qty</span>

              <i class="fas fa-chevron-down"></i>
            </button>

            <div id="dropdownContent2" class="basic-styling size-dropdown align-items-end flex-column" style="z-index: 500">
              <i class="p-2 fas fa-close" onclick="toggleDropdown2()"></i>
              <div class="p-2 rounded-3 border border-1 border-secondary w-100">
                <p class="text-center">Select your combination.</p>
                <div class="size-box1 d-flex justify-content-center flex-column gap-3 w-100">
                  <div class="w-100 d-flex">
                    <div class="w-50">
                      <input type="radio" id="combinationMen" name="combinationGender" />
                      <label for="combinationMen" class="btn-style-remover popup-btn w-75" style="background-color: #0c7ce5">
                        Men
                      </label>
                    </div>
                    <div class="w-50">
                      <input type="radio" id="combinationWomen" name="combinationGender" />
                      <label for="combinationWomen" class="btn-style-remover popup-btn w-75" style="background-color: #8e44ad">
                        Woman
                      </label>
                    </div>
                  </div>
                  <div class="w-100 d-flex">
                    <div class="w-50">
                      <input type="radio" id="combinationBudget" name="combinationBudget" />
                      <label for="combinationBudget" class="btn-style-remover popup-btn w-75" style="background-color: #0c7ce5">
                        Men
                      </label>
                    </div>
                    <div class="w-50">
                      <input type="radio" id="combinationCoperate" name="combinationBudget" />
                      <label for="combinationCoperate" class="btn-style-remover popup-btn w-75" style="background-color: #8e44ad">
                        Woman
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="my-2 d-flex flex-column gap-1">
                <div class="w-100 d-flex gap-2">
                  <div class="w-50 combination-size d-flex">
                    <div class="combination-size-input p-1">XS</div>
                    <input type="number" class="bg-transparent border-1 border border-secondary w-75" />
                  </div>
                  <div class="w-50 combination-size d-flex">
                    <div class="combination-size-input p-1">S</div>
                    <input type="number" class="bg-transparent border-1 border border-secondary w-75" />
                  </div>
                </div>
                <div class="w-100 d-flex gap-2">
                  <div class="w-50 combination-size d-flex">
                    <div class="combination-size-input p-1">M</div>
                    <input type="number" class="bg-transparent border-1 border border-secondary w-75" />
                  </div>
                  <div class="w-50 combination-size d-flex">
                    <div class="combination-size-input p-1">L</div>
                    <input type="number" class="bg-transparent border-1 border border-secondary w-75" />
                  </div>
                </div>
                <div class="w-100 d-flex gap-2">
                  <div class="w-50 combination-size d-flex">
                    <div class="combination-size-input p-1">Xl</div>
                    <input type="number" class="bg-transparent border-1 border border-secondary w-75" />
                  </div>
                  <div class="w-50 combination-size d-flex">
                    <div class="combination-size-input p-1">2XXL</div>
                    <input type="number" class="bg-transparent border-1 border border-secondary w-75" />
                  </div>
                </div>
                <div class="w-100 d-flex gap-2">
                  <div class="w-50 combination-size d-flex">
                    <div class="combination-size-input p-1">3XXl</div>
                    <input type="number" class="bg-transparent border-1 border border-secondary w-75" />
                  </div>
                  <div class="w-50 combination-size d-flex">
                    <div class="combination-size-input p-1">XXl</div>
                    <input type="number" class="bg-transparent border-1 border border-secondary w-75" />
                  </div>
                </div>
              </div>

              <div class="d-flex gap-2 w-100">
                <button class="btn btn-secondary w-50">Size Chart</button>

                <button class="btn btn-dark w-50">Add Quantities</button>
              </div>
            </div>
          </div>
        </div>
        <div class="basic-styling right-side-box2">
          <div class="t_changebtnbox" id="viewPortChange">
            <button class="t_changebtn t_changebtn1" onclick="sectionSwitch('t_changeblock1');" id="btn9">
              <div class="p-3 t_changebtnimg t_changebtnimg1"></div>
              <p class="t_changebtnpara">Front view</p>
            </button>
            <button class="t_changebtn t_changebtn2" onclick="sectionSwitch('t_changeblock2');">
              <div class="p-3 t_changebtnimg t_changebtnimg2"></div>
              <p class="t_changebtnpara">Left view</p>
            </button>
            <button class="t_changebtn t_changebtn3" onclick="sectionSwitch('t_changeblock3');">
              <div class="p-3 t_changebtnimg t_changebtnimg3"></div>
              <p class="t_changebtnpara">Back view</p>
            </button>
            <button class="t_changebtn t_changebtn4" onclick="sectionSwitch('t_changeblock4');">
              <div class="p-3 t_changebtnimg t_changebtnimg4"></div>
              <p class="t_changebtnpara">Right view</p>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>