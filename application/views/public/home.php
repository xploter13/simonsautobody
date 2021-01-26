<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simons Auto Body</title>
    <?php $this->load->view('public/includes/style'); ?>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">        
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#">
                <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="">
            </a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- right links -->
                <ul class="navbar-nav ms-auto mb-3 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <!-- Navbar dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            Features
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>  
                    <!-- Navbar dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Navbar dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            Portfolio
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Navbar dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            Pages
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Navbar dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            Blog
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <img src="<?php echo base_url(); ?>assets/images/backgrounds/bg-home.jpg" class="img-slideshow" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-red pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h2 class="text-1 text-uppercase f-22">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod <br> dolore
magna aliqua.</h2>
                </div>
                <div class="col-md-2 d-flex align-items-center">
                    <button type="button" class="btn btn-white border-radius-0 btn-block">Contact Us</button>
                </div>
            </div>
        </div>
    </section>

    <section class="sc-default">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Set up your HTML -->
                    <div class="owl-carousel owl-theme owl-carousel-service">                        
                        <div class="item">
                            <div class="card box-shadow-none">
                                <img src="<?php echo base_url(); ?>assets/images/thumbs/painting.png" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Painting</h5>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card box-shadow-none">
                                <img src="<?php echo base_url(); ?>assets/images/thumbs/collision-repair.png" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Collision Repair</h5>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card box-shadow-none">
                                <img src="<?php echo base_url(); ?>assets/images/thumbs/towing.png" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Towing</h5>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sc-default bg-grayscale">
        <div class="container">
            <div class="row">
                <div class="col-md-6"> 
                    <img src="<?php echo base_url(); ?>assets/images/text-you-car.png" class="w-100" alt="">
                </div>
                <div class="col-md-6">
                    <img src="<?php echo base_url(); ?>assets/images/car-you-car.png" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="sc-default">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <h3 class="title text-grayscale text-center text-uppercase">Our Gallery</h3>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url(); ?>assets/images/gallery/1.jpg" class="w-100" alt="">
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url(); ?>assets/images/gallery/2.jpg" class="w-100" alt="">
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url(); ?>assets/images/gallery/3.jpg" class="w-100" alt="">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <img src="<?php echo base_url(); ?>assets/images/gallery/4.jpg" class="w-100" alt="">
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url(); ?>assets/images/gallery/5.jpg" class="w-100" alt="">
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url(); ?>assets/images/gallery/6.jpg" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="sc-default bg-grayscale">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <h3 class="title text-grayscale text-uppercase mb-5">Represent Your Staff</h3>
                    <p>theFutured is perfect to display the members of you staff, team or working force. Within our template you can present your team <br> members in the best well made and interface with special design and multiple styling options.</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card bg-none box-shadow-none">
                        <img src="<?php echo base_url(); ?>assets/images/thumbs/1.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Brian King</h5>
                            <p class="card-text">
                                <i>Marketing manager</i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-none box-shadow-none">
                        <img src="<?php echo base_url(); ?>assets/images/thumbs/2.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Amanda Smith</h5>
                            <p class="card-text">
                                <i>Director</i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-none box-shadow-none">
                        <img src="<?php echo base_url(); ?>assets/images/thumbs/3.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Tina Allen</h5>
                            <p class="card-text">
                                <i>Desinger</i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 p-0">
                    <img src="<?php echo base_url(); ?>assets/images/thumbs/4.jpg" class="w-100" alt="">
                </div>
                <div class="col-md-4 p-0">
                    <img src="<?php echo base_url(); ?>assets/images/thumbs/5.jpg" class="w-100" alt="">
                </div>
                <div class="col-md-4 p-0">
                    <img src="<?php echo base_url(); ?>assets/images/thumbs/6.jpg" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="sc-default">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Set up your HTML -->
                    <div class="owl-carousel owl-carousel-testimonials">
                        <div>
                            <div class="card box-shadow-none">
                                <img src="<?php echo base_url(); ?>assets/images/testimonials/1.png" class="card-img-top" alt="..." />
                                <div class="card-body text-center">
                                    <h5 class="title-2">Fulano da Silva</h5>
                                    <p class="card-text title-2">
                                        <span class="quote-left"><img src="<?php echo base_url(); ?>assets/images/icons/quote-left.png" alt=""></span> 
                                        Some quick example text to build on the card <br> title and make up the bulk of the card's <br>  content.
                                        <span class="quote-right"><img src="<?php echo base_url(); ?>assets/images/icons/quote-right.png" alt=""></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div> Your Content </div>
                        <div> Your Content </div>
                        <div> Your Content </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url(); ?>assets/images/logo-white.png" class="logo-footer" alt="">
                    <p class="f-14">Simon’s Auto Body specializes in automotive repair, keeping in vision the restoration of the vehicle that suffered from the smallest scratch to the biggest collision; offering complete cosmetic services.</p>
                </div>
                <div class="col-md-4">
                    <h4 class="title text-uppercase">Contact</h4>
                    <ul class="list-info-contact">
                        <li>37 Waverly Street, Framingham, MA, ZIP 01702</li>
                        <li><a href="#" class="btn-email">service@simonsautobody.com</a></li>
                        <li>(508) 624-4362</li>
                        <li>(508) 624-4365</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="title text-uppercase">Social Media</h4>
                    <ul class="list-inline list-social-icon mt-4">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <form class="form-inline">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="staticEmail2" class="sr-only">Sign up for our Newsletter</label>
                            <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <!-- SCRIPT -->
    <?php $this->load->view('public/includes/scripts'); ?>
</body>

</html>