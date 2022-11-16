<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require_once "includes/etc/css-cdn.php"; ?>
    <!-- Bootstrap CSS v5.2.1 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->

</head>

<body>


    <?php require_once "includes/navbar.php" ?>
    <!-- <button id="test" class=" btn btn-primary">Get products</button> -->


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://c4.wallpaperflare.com/wallpaper/581/633/147/controllers-bw-playstation-wii-xbox-pc-hd-black-computer-mouse-ps-controller-xbox-xontroller-and-nintendo-wii-controlller-wallpaper-preview.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://c4.wallpaperflare.com/wallpaper/581/633/147/controllers-bw-playstation-wii-xbox-pc-hd-black-computer-mouse-ps-controller-xbox-xontroller-and-nintendo-wii-controlller-wallpaper-preview.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://c4.wallpaperflare.com/wallpaper/581/633/147/controllers-bw-playstation-wii-xbox-pc-hd-black-computer-mouse-ps-controller-xbox-xontroller-and-nintendo-wii-controlller-wallpaper-preview.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <?php require_once "includes/etc/js-cdn.php" ?>
    <script src="src/js/test.js"></script>

</body>

</html>