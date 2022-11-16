<?php
function activateSelected($pageName)
{
    if (stripos($_SERVER['REQUEST_URI'],$pageName) !== false) {
        return 'active';
    }
}

?>

<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container-fluid justify-content-between">
        <a class="navbar-brand" href="#">PlayTech</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav align-items-center  ms-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo activateSelected('index.php');?>" href="index.php" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo activateSelected('shop.php');?> " href="shop.php">Shop</a>
                </li>
                <div class="nav-item btn-group flex-column ms-5">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-solid fa-user"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-sm-end">
                        <li><button class="dropdown-item" type="button">Dashboard</button></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="auth/login.php" id="login-out">Login</a></li>
                        <li><a class="dropdown-item" type="auth/signup.php" id="sign-up">Sign Up</a></li>
                    </ul>
                </div>
            </ul>

        </div>
    </div>
</nav>