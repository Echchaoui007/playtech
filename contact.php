<!doctype html>
<html lang="en">

<head>
    <title>PlayTech</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require_once "includes/etc/css-cdn.php"; ?>
    <link rel="stylesheet" href="./src/css/index.css">
    <link rel="stylesheet" href="./src/css/contact.css">
</head>

<body class="bg-dark">
    <?php require_once "includes/navbar.php" ?>
    <!--Section: Contact v.2-->
    <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-2   text-light">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5 text-muted">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name" class="text-muted">Your name</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form ">
                                <label for="email"  class="text-muted">Your email</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form ">
                                <label for="subject" class="text-muted">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <label for="message" class="text-muted" >Your message</label>
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-warning" onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x bg-warning"></i>
                        <p class="text-white">YouCode, Safi 94126, MOROCCO</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x bg-warning"></i>
                        <p class="text-white">+ 01 234 567 89</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x bg-warning"></i>
                        <p class="text-white">contact@mdbootstrap.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </section>
    <!--Section: Contact v.2-->

    <?php require_once "includes/footer.php" ?>

    <?php require_once "includes/etc/js-cdn.php" ?>

</body>

</html>