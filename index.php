<!doctype html>
<html lang="en">

<head>
    <title>PlayTech</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require_once "includes/etc/css-cdn.php"; ?>
    <link rel="stylesheet" href="./src/css/index.css">
</head>

<body class="bg-dark">


    <?php require_once "includes/navbar.php" ?>

    <div id="capcarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#capcarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#capcarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#capcarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/459762/pexels-photo-459762.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>First slide label</h3>
                    <h5>Some representative placeholder content for the first slide.</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/1999463/pexels-photo-1999463.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Second slide label</h3>
                    <h5>Some representative placeholder content for the second slide.</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/459762/pexels-photo-459762.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Third slide label</h3>
                    <h5>Some representative placeholder content for the third slide.</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#capcarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#capcarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <section class="container mt-5  rounded-3" id="popular-products">
        <h2 class="h2 text-center text-white mb-4 mb-sm-5">Most Popular Products</h2>
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
        </div>
    </section>




    <?php require_once "includes/footer.php" ?>

    <?php require_once "includes/etc/js-cdn.php" ?>
    <script src="src/js/test.js"></script>

</body>

</html>