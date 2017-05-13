<!-- <div class="navbar-fixed"> -->
<ul id="dropdown1" class="dropdown-content navbar-dropdown">
    <li><a href="Profile.php">Profile</a></li>
    <li class="divider"></li>
    <li><a href="Logout.php">Logout</a></li>
</ul>
<nav class="white">
    <!-- <div class="container-fluid"> -->


    <div class="nav-wrapper wrapper-nav">
        <a href="<?=baseurl()?>" class="brand-logo black-text center">Indie<span style="color: #3949ab  ">Helper</span></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons black-text">menu</i></a>
        <ul id="nav-mobile" class="left hide-on-med-and-down black-text">
            <li><a href="Explore.php" class="black-text"><i class="size material-icons left">language</i>Explore</a></li>
            <li><a href="formproject.php" class="black-text">Start a Project</a></li>
            <li><a href="About.php" class="black-text">About</a></li>
        </ul>
        <ul id="nav-mobile" class="valign-wrapper right hide-on-med-and-down black-text">
            <li><a href="#" class="black-text nav-search"><i class="material-icons">search</i></a></li>
            <?php if(empty($session->get_session('STATUS'))){ ?>
            <li><a href="Login.php" class="black-text">Login</a></li>
            <?php } else{ ?>
            <li>
                <a href="#" class="dropdown-button" data-activates='dropdown1'>
                    <div class="fotos valign-wrapper">
                        <?php if($session->get_session('STATUS') == 'admin'){ ?>
                        <div class="responsive-img img-user" style="background-image: url('<?=baseurl('assets/images/admin/').$session->get_session('FOTO')?>')"></div>
                        <?php }else{ ?>
                        <div class="responsive-img img-user" style="background-image: url('<?=baseurl('assets/images/user/').$session->get_session('FOTO')?>')"></div>
                        <?php } ?>
                    </div>
                </a>
            </li>
            <?php } ?>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li>
                <div class="search-wrapper card">
                    <form action="Explore.php" method="GET">
                        <input type="text" id="search" name="search">
                        <i class="material-icons black-text">search</i>
                    </form>
                </div>
            </li>
            <li><a href="Explore.php" class="black-text">Explore</a></li>
            <li><a href="#" class="black-text">Start a Project</a></li>
            <li><a href="About.php" class="black-text">About</a></li>
            <?php if(empty($session->get_session('STATUS'))){ ?>
            <li><a href="Login.php" class="black-text">Login</a></li>
            <?php } else{ ?>
            <li>
                <a href="Profile.php" class="black-text">
                    <div class="fotos valign-wrapper pb1">
                       <?php if($session->get_session('STATUS') == 'admin'){ ?>
                        <div class="responsive-img img-user" style="background-image: url('<?=baseurl('assets/images/admin/').$session->get_session('FOTO')?>')"></div>
                        <?php }else{ ?>
                        <div class="responsive-img img-user" style="background-image: url('<?=baseurl('assets/images/user/').$session->get_session('FOTO')?>')"></div>
                        <?php } ?>
                        <span class="pl1"><?= $session->get_session('NAMA')?></span>
                    </div>
                </a>
            </li>
            <?php } ?>
            <li class="divider"></li>
            <li><a href="Logout.php">Logout</a></li>

        </ul>
    </div>
    <div class="nav-wrapper wrapper-search" style="transform: translateY(-130px);">
        <form method="GET" action="Explore.php">
            <div class="input-field">
                <input id="search" type="search" style="color: #444;" name="search" required>
                <label class="label-icon" for="search"><i class="material-icons icons-nav">search</i></label>
                <i class="material-icons icons-nav icons-close">close</i>
            </div>
        </form>
    </div>

</nav>
<!-- </div> -->
<!-- </div> -->
