<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TAMAFLIGHTS TEMPLATE</title>
        <link rel="icon" type="image/ico" href="">
        <!-- Bootstrap/CSS -->
        <link href=" <?php echo BOOTSTRAP.'css/bootstrap.css'; ?> " rel="stylesheet">
        <link href="<?php echo CSS.'custom.css'; ?>" rel="stylesheet">

        <!-- JavaScript For Buttons -->
        <script src=" <?php echo BOOTSTRAP.'js/bootstrap.min.js'; ?> "></script>
    </head>

    <body>
        <!-- Header -->
        <nav class="navbar navbar-expand-sm navbar-dark navbar-custom">
            <div class="container">
                <a href="<?= base_url() ?>" class="navbar-brand text-uppercase fs-5">
                    <img src="" alt="Logo" width="70" class="d-inline-block align-middle">
                    TAMAFLIGHTS TEMPLATE
                </a>

                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="list1">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="<?= base_url() ?>" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() . "about" ?>" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() . "product" ?>" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="group" class="nav-link">Group</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- CODE HERE -->
        <h1>HOME PAGE</h1>

        <!-- Footer -->
        <div class="darkblue pb-3">
            <div class = "container text-center text-md-left mb-5">
                <div class ="row card-footer border-white border-opacity-10">
                    <div class="mx-auto pt-5 col-md-4 col-lg-4 col-xl-4">
                        <h3 class = "fw-bold cyan">TAMAFLIGHTS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada efficitur dignissim. Fusce et leo at nisl condimentum pellentesque vel blandit odio. Suspendisse potenti. Vestibulum dui nunc, molestie a ex nec, rutrum euismod eros. Nulla lacinia eros nec tincidunt tincidunt. Cras a auctor mauris. Nunc sed nibh accumsan, ullamcorper est sed, consectetur mauris.</p>
                    </div>

                    <div class="mx-auto pt-5 col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <h3 class = "fw-bold cyan">GROUP 1</h3>
                        <p class = "center">N/A</p>
                        <p class = "center">N/A</p>
                        <p class = "center">N/A</p>
                        <p class = "center">N/A</p>
                    </div>

                    <div class="mx-auto pt-5 col-8 col-sm-9 col-md-3 col-lg-3 col-xl-3">
                        <h3 class = "fw-bold cyan">Contacts</h3>
                        <p><i class="fa fa-home me-3" aria-hidden="true"></i>P. Paredes St, Sampaloc, Manila, 1015 Metro Manila</p>
                        <p><i class="fa fa-envelope me-3" aria-hidden="true"></i>group1@email.com</p>
                        <p><i class="fa fa-phone me-3" aria-hidden="true"></i>63+ 900-000-0000</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>