<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
$root = $_SERVER["SERVER_NAME"];
function activateSelected($pageName)
{
    if (stripos($_SERVER['REQUEST_URI'],$pageName) !== false) {
        return 'active';
    }
}

?>

<nav class="navbar bg-dark navbar-dark navbar-expand-sm navbar-light bg-light">
    <div class="container-fluid justify-content-between">
        <a class="navbar-brand" href="http://<?php echo $root; ?>/playTech/index.php"><img  src="http://<?php echo $root ?>/playTech/assets/image/Logo-dark.svg" alt="log" width="103.38" height="32"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav align-items-center  ms-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo activateSelected('index.php');?>" href="http://<?php echo $root ?>/playTech/index.php" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo activateSelected('shop.php');?> " href="http://<?php echo $root ?>/playTech/shop.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo activateSelected('about-us.php');?> " href="http://<?php echo $root; ?>/playTech/about-us.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo activateSelected('contact.php');?> " href="http://<?php echo $root; ?>/playTech/contact.php">Contact</a>
                </li>
                <div class="nav-item btn-group flex-column ms-sm-5">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-solid fa-user"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-sm-end">
                        <?php if(isset($_SESSION["user"]) && $_SESSION["user"]["user_role"] =="admin"){ ?>
                        <li><a class="dropdown-item <?php echo activateSelected('dashboard.php');?> " href="http://<?php echo $root; ?>/playTech/admin/dashboard.php">Dashboard</a></li>
                        <hr class="dropdown-divider">
                        <?php } ?>
                        <?php if(isset($_SESSION["user"])){ ?>
                            
                            <li><a class="dropdown-item" href="http://<?php echo $root; ?>/playTech/auth/logout.php" > Logout </a></li>
                            <?php }else{ ?>
                                <li><a class="dropdown-item" href="http://<?php echo $root; ?>/playTech/auth/login.php" id="login-in"> Login </a></li>
                                <li><a class="dropdown-item" href="http://<?php echo $root ?>/playTech/auth/signup.php" id="sign-up">Sign Up</a></li>
                                <?php } ?>
                    </ul>
                </div>
            </ul>

        </div>
    </div>
</nav>