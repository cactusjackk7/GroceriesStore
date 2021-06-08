<!DOCTYPE html>
<html>
<head>
    <title>'T fruithuisje</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="assets/fonts/sb-bistro/sb-bistro.css" rel="stylesheet" type="text/css">
    <link href="assets/fonts/font-awesome/font-awesome.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/o2system-ui/o2system-ui.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/owl-carousel/owl-carousel.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/cloudzoom/cloudzoom.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/thumbelina/thumbelina.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/bootstrap-touchspin/bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/style.css">

</head>
<body>
   <form action="connect.php" method="post">
    <div class="page-header">
        <!--=============== Navbar ===============-->
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-transparent" id="page-navigation">
            <div class="container">
                <!-- Navbar Brand -->
                <a href="index.php" class="navbar-brand">
                    <img src="assets/img/logofruithuis.png" alt="fruithuis">
                </a>

                <!-- Toggle Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarcollapse">
                    <!-- Navbar Menu -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="shop.html" class="nav-link">Winkel</a>
                        </li>
                        <li class="nav-item">
                            <a href="register.html" class="nav-link">Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.html" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar-header"><img src=""></div> Klant
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="transaction.html">Transactiegeschiedenis</a>
                                <a class="dropdown-item" href="setting.html">Instellingen</a>
                            </div>
                          </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-shopping-basket"></i> <span class="badge badge-primary"></span>
                            </a>
                            <div class="dropdown-menu shopping-cart">
                                <ul>
                                    <li>
                                        <div class="drop-title">Your Cart</div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-list">
                                            <div class="media">
                                        <div class="drop-title d-flex justify-content-between">
                                            <span>Total:</span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between pl-3 pr-3 pt-3">
                                        <a href="cart.html" class="btn btn-secondary">Zie Winkelwagen</a>
                                        <a href="checkout.html" class="btn btn-primary">Checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>
    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-video text-center bg-dark mb-0 rounded-0">
                <video width="100%" preload="auto" loop autoplay muted>
                    <source src='assets/media/explore.mp4' type='video/mp4' />
                    <source src='assets/media/explore.webm' type='video/webm' />
                </video>
                <div class="container">
                    <h1 class="pt-5">
                        Bespaar tijd
                        en kom bij ons.<br>
                        
                    </h1>
                    <p class="lead">
                        Elke dag vers.
                    </p>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-0 text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fa fa-shopping-basket"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Koop
                                    </h4>
                                    <p class="card-text">
                                    
                                        Klik om het gewenste product te kopen en verzend uw bestelling wanneer u klaar bent.

                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fas fa-leaf"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Oogst
                                    </h4>
                                    <p class="card-text">
                                        Wij leveren het beste kwaliteit. Vandaag bestelt, morgen in huis!.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Verzending
                                    </h4>
                                    <p class="card-text">
                                    Orders komen zo snel mogelijk naar de klant toe!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="why">
            <h2 class="title">Waarom wij?</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 text-center gray-bg">
                            <div class="card-icon">
                                <div class="card-icon-i text-success">
                                    <i class="fas fa-leaf"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Rechtstreeks uit de boederij!
                                </h4>
                                <p class="card-text">
                                Onze boederij-concept zorgt ervoor dat ons product niet alleen vers is, maar ook gezond. Ons product komt 
                                ook heel snel naar de klant.

                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center gray-bg">
                            <div class="card-icon">
                                <div class="card-icon-i text-success">
                                    <i class="fa fa-question"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                   Ken je boeren!
                                </h4>
                                <p class="card-text">
                                    Wij werken al jaren lang met onze boeren. Wij hebben een goede en vertrouwde band met onze boeren.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center gray-bg">
                            <div class="card-icon">
                                <div class="card-icon-i text-success">
                                    <i class="fas fa-smile"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Progressiefe boeren
                                </h4>
                                <p class="card-text">
                                Door de complexe toeleveringsketen en het voedselsysteem door te snijden, hopen we langzaam maar zeker het welzijn van boeren te verbeteren door ze het rendement te geven dat ze verdienen voor hun harde werk.                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-5 text-center">
                        <a href="shop.html" class="btn btn-primary btn-lg">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="categories" class="pb-0 gray-bg">
            <h2 class="title">Categorieën</h2>
            <div class="landing-categories owl-carousel">
                <div class="item">
                    <div class="card rounded-0 border-0 text-center">
                        <img src="assets/img/vegetables.jpg">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <!-- <h4 class="card-title">Vegetables</h4> -->
                            <a href="shop.html" class="btn btn-primary btn-lg">Groentes</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 border-0 text-center">
                        <img src="assets/img/fruits.jpg">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <!-- <h4 class="card-title">Fruits</h4> -->
                            <a href="shop.html" class="btn btn-primary btn-lg">Fruit</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 border-0 text-center">
                        <img src="assets/img/meats.jpg">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <!-- <h4 class="card-title">Meats</h4> -->
                            <a href="shop.html" class="btn btn-primary btn-lg">Vlees</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 border-0 text-center">
                        <img src="assets/img/fish.jpg">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <!-- <h4 class="card-title">Fishes</h4> -->
                            <a href="shop.html" class="btn btn-primary btn-lg">Vis</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 border-0 text-center">
                        <img src="assets/img/frozen.jpg">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <!-- <h4 class="card-title">Frozen Foods</h4> -->
                            <a href="shop.html" class="btn btn-primary btn-lg">Bevroren Goederen</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 border-0 text-center">
                        <img src="assets/img/package.jpg">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <!-- <h4 class="card-title">Package</h4> -->
                            <a href="shop.html" class="btn btn-primary btn-lg">Pakketen</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>About</h5>
                    <p>Wij, 'T Fruithuisje zijn een betrouwbare goederenwinkel. Wij zorgen ervoor dat jij jouw product zo vers en zo snel mogelijk hebt.</p>
                </div>
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-3">
                     <h5>Contact</h5>
                     <ul>
                         <li>
                            <a href="tel:"><i class="fa fa-phone"></i> Moet nog komen</a>
                        </li>
                        <li>
                            <a href="mailto:hello@domain.com"><i class="fa fa-envelope"></i> tfruithuisje</a> <!-- weet de mail en het telefoonnummer nog niet -->
                         </li>
                     </ul>

                     
        <p class="copyright">&copy; 2021 'T Fruithuisje. Alle rechte gereseveerd.</p>
    </footer>

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/jquery-migrate.js"></script>
    <script type="text/javascript" src="assets/packages/bootstrap/libraries/popper.js"></script>
    <script type="text/javascript" src="assets/packages/bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="assets/packages/o2system-ui/o2system-ui.js"></script>
    <script type="text/javascript" src="assets/packages/owl-carousel/owl-carousel.js"></script>
    <script type="text/javascript" src="assets/packages/cloudzoom/cloudzoom.js"></script>
    <script type="text/javascript" src="assets/packages/thumbelina/thumbelina.js"></script>
    <script type="text/javascript" src="assets/packages/bootstrap-touchspin/bootstrap-touchspin.js"></script>
    <script type="text/javascript" src="assets/js/theme.js"></script>
</body>
</html>
