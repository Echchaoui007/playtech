<!doctype html>
<html lang="en">

<head>
    <title>PlayTech</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require_once "includes/etc/css-cdn.php"; ?>
    <link rel="stylesheet" href="./src/css/shop.css">
</head>

<body class="bg-dark">


    <?php require_once "includes/navbar.php" ?>

    <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">
  GAME OF THE YEAR
</button>
<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
  RPG GAMES
</button>
<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
  SHOOTER GAMES
</button>
<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover">
  PARTS
</button>*

<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Cart - 2 items</h5>
          </div>
          <div class="card-body">
            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
                    class="w-100" alt="Blue Jeans Jacket" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>Resident Evil VILLAGE</strong></p>
               
                <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <i class="fas fa-trash"></i>
                </button>
                
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                  <button class="btn btn-primary px-3 me-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                  </button>

                  <div class="form-outline">
                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                    <label class="form-label" for="form1">Quantity</label>
                  </div>

                  <button class="btn btn-primary px-3 ms-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>$17.99</strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->

            <hr class="my-4" />

            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp"
                    class="w-100" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>Red dead</strong></p>
                

                <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <i class="fas fa-trash"></i>
                </button>
                
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                  <button class="btn btn-primary px-3 me-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                  </button>

                  <div class="form-outline">
                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                    <label class="form-label" for="form1">Quantity</label>
                  </div>

                  <button class="btn btn-primary px-3 ms-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>$17.99</strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->
          </div>
        </div>

     
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Products
                <span>$53.98</span>
              </li>
              
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span><strong>$53.98</strong></span>
              </li>
            </ul>

            <button type="button" class="btn btn-primary btn-lg btn-block">
              Go to checkout
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
       


    <section class="container mt-5  rounded-3" id="popular-products">
        <h2 class="h2 text-center text-white mb-4 mb-sm-5">category name</h2>
        <div class="row">
            <div class="col-md mb-3">
                <div class="card bg-dark text-bg-dark bg-gradient mx-auto " style="width: 18rem;">
                    <img src="assets/image/razer-viper-8khz.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Razer Viper 8KHz</h5>
                        <a href="shop.php" class="btn btn-outline-secondary mt-4">Go to Shop </a>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card bg-dark text-bg-dark bg-gradient mx-auto" style="width: 18rem;">
                    <img src="https://assets.razerzone.com/eeimages/support/products/1689/1689-huntsmanmini.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Razer Huntsman Mini</h5>
                        <a href="shop.php" class="btn btn-outline-secondary mt-4">Go to Shop </a>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card bg-dark text-bg-dark bg-gradient mx-auto" style="width: 18rem;">

                    <img src="assets/image/COOLER-MASTER-MH630.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cooler Master MH-630</h5>
                        <a href="shop.php" class="btn btn-outline-secondary mt-4">Go to Shop </a>
                    </div>
                </div>
            </div>

            <div class="col-md mb-3">
                <div class="card bg-dark text-bg-dark bg-gradient mx-auto " style="width: 18rem;">
                    <img src="assets/image/razer-viper-8khz.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Razer Viper 8KHz</h5>
                        <a href="shop.php" class="btn btn-outline-secondary mt-4">Go to Shop </a>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card bg-dark text-bg-dark bg-gradient mx-auto" style="width: 18rem;">
                    <img src="https://assets.razerzone.com/eeimages/support/products/1689/1689-huntsmanmini.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Razer Huntsman Mini</h5>
                        <a href="shop.php" class="btn btn-outline-secondary mt-4">Go to Shop </a>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card bg-dark text-bg-dark bg-gradient mx-auto" style="width: 18rem;">

                    <img src="assets/image/COOLER-MASTER-MH630.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cooler Master MH-630</h5>
                        <a href="shop.php" class="btn btn-outline-secondary mt-4">Go to Shop </a>
                    </div>
                </div>
            </div>

            <div class="col-md mb-3">
                <div class="card bg-dark text-bg-dark bg-gradient mx-auto " style="width: 18rem;">
                    <img src="assets/image/razer-viper-8khz.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Razer Viper 8KHz</h5>
                        <a href="shop.php" class="btn btn-outline-secondary mt-4">Go to Shop </a>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card bg-dark text-bg-dark bg-gradient mx-auto" style="width: 18rem;">
                    <img src="https://assets.razerzone.com/eeimages/support/products/1689/1689-huntsmanmini.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Razer Huntsman Mini</h5>
                        <a href="shop.php" class="btn btn-outline-secondary mt-4">Go to Shop </a>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card bg-dark text-bg-dark bg-gradient mx-auto" style="width: 18rem;">

                    <img src="assets/image/COOLER-MASTER-MH630.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cooler Master MH-630</h5>
                        <a href="shop.php" class="btn btn-outline-secondary mt-4">Go to Shop </a>
                    </div>
                </div>
            </div>

            <div class="col-md mb-3">
                <div class="card bg-dark text-bg-dark bg-gradient mx-auto " style="width: 18rem;">
                    <img src="assets/image/razer-viper-8khz.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Razer Viper 8KHz</h5>
                        <a href="shop.php" class="btn btn-outline-secondary mt-4">Go to Shop </a>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card bg-dark text-bg-dark bg-gradient mx-auto" style="width: 18rem;">
                    <img src="https://assets.razerzone.com/eeimages/support/products/1689/1689-huntsmanmini.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Razer Huntsman Mini</h5>
                        <a href="shop.php" class="btn btn-outline-secondary mt-4">Go to Shop </a>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card bg-dark text-bg-dark bg-gradient mx-auto" style="width: 18rem;">

                    <img src="assets/image/COOLER-MASTER-MH630.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cooler Master MH-630</h5>
                        <a href="shop.php" class="btn btn-outline-secondary mt-4">Go to Shop </a>
                    </div>
                </div>
            </div>

            <div class="col-md mb-3">
                <div class="card bg-dark text-bg-dark bg-gradient mx-auto " style="width: 18rem;">
                    <img src="assets/image/razer-viper-8khz.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Razer Viper 8KHz</h5>
                        <a href="shop.php" class="btn btn-outline-secondary mt-4">Go to Shop </a>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card bg-dark text-bg-dark bg-gradient mx-auto" style="width: 18rem;">
                    <img src="https://assets.razerzone.com/eeimages/support/products/1689/1689-huntsmanmini.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Razer Huntsman Mini</h5>
                        <a href="shop.php" class="btn btn-outline-secondary mt-4">Go to Shop </a>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card bg-dark text-bg-dark bg-gradient mx-auto" style="width: 18rem;">

                    <img src="assets/image/COOLER-MASTER-MH630.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cooler Master MH-630</h5>
                        <a href="shop.php" class="btn btn-outline-secondary mt-4">Go to Shop </a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php require_once "includes/footer.php" ?>

    <?php require_once "includes/etc/js-cdn.php" ?>
    <script src="src/js/test.js"></script>

</body>

</html>