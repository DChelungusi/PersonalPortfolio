<?php
$name = "Damaris Chelungusi";
$greeting = "Welcome to my portfolio!";
<!-- Header-->
<header class="py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                        <div class="">Techtastic &middot; Codecraftin  &middot; Webwizardry</div>
                    </div>
                    <h1 class="display-3 fw-bolder mb-5">
                        <span class="text-gradient d-inline">
                            <?php echo $greeting; ?>
                        </span>
                    </h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="resume.html">Resume</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="projects.html">Projects</a>
                    </div>
                </div>
            </div>
            <!-- The rest of the <header> section remains the same as the provided HTML code -->
        </div>
    </div>
</header>