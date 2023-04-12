<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Address crypto generator</title>
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/fav.png'); ?>" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/fontawesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    </head>
    <body>
        <!-- header-section start -->
        <header class="header-section">
            <div class="overlay">
                <div class="container">
                    <div class="row d-flex header-area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="/">
                                <img src="assets/images/logo.png" class="logo" alt="logo">
                            </a>
                            <button
                                class="navbar-toggler collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#navbar-content">
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
                                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/">Home</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-section end -->
        <!-- Banner Section start -->
        <section class="banner-section inner-banner soccer-bets">
            <div class="overlay">
                <div class="shape-area">
                    <img src="assets/images/coin-5.png" class="obj-2" alt="image">
                    <img src="assets/images/coin-3.png" class="obj-3" alt="image">
                    <img src="assets/images/coin-6.png" class="obj-4" alt="image">
                    <img src="assets/images/coin-9.png" class="obj-5" alt="image">
                    <img src="assets/images/coin-8.png" class="obj-6" alt="image">
                    <img src="assets/images/coin-7.png" class="obj-7" alt="image">
                </div>
                <div class="banner-content">
                    <div class="container">
                        <div class="content-shape">
                            <img src="assets/images/coin-1.png" class="obj-8" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section end -->

        <!-- Contact In start -->
        <section class="contact-section">
            <div class="overlay">
                <div class="container bg-area">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-header text-center">
                                <h2 class="title">Generate Address</h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="form-content">
                                <form action="<?php echo base_url('tron'); ?>" id="tronForm" method="post">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <label>Base58</label>
                                                <input type="text" id="base58" value="<?php echo $rawdata['address_base58']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <label>Address Hex</label>
                                                <input type="text" id="addrhex" value="<?php echo $rawdata['address_hex']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <label>Public key</label>
                                                <input type="text" id="pubkey" value="<?php echo $rawdata['public_key']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <label>Private key</label>
                                                <input type="text" id="privkey" value="<?php echo $rawdata['private_key']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-10">
                                            <div class="btn-border w-100 mt-40">
                                                <button type="submit" class="cmn-btn w-100">Buat baru</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact In end -->
        <div id="dataForm"></div>
        <!-- Footer Area Start -->
        <footer class="footer-section">
            <div class="container pt-40">
                <div class="footer-bottom-area pt-40">
                    <div class="col-12">
                        <div class="copyright">
                            <div class="copy-area">
                                <p>2023 Copyright © Cryptoney - Crypto address generator</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

        <!--==================================================================-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/fontawesome.js"></script>
    </body>
</html>