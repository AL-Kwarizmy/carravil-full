<?php
include 'navbar.php';
?>

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact.css" />
</head>

<body>

    <section class="contact-section">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-12">
                <img class="contact-img" src="images/contact_img.png" alt="">
            </div>
            <div class="col-lg-5 col-md-5 col-12">
                <h2 class="mt-5 p-3">Talk to us</h2>
                <p class="p-3">Do you have any questions? Just send us a message.</p>
                <form action="form.php" method="post" enctype="multipart/form-data" class="tracking-form">
                    <div class="row tracking-row">
                        <div class="col-12 tracking-col">
                            <label for="fname" class="form-label">
                                First Name*
                            </label>
                            <input type="text" name="fname" id="fname" class="form-control" required>
                        </div>

                        <div class="col-12 tracking-col">
                            <label for="phone" class="form-label">
                                Phone Number*
                            </label>
                            <input type="text" name="phone" id="phone" class="form-control" required>
                        </div>
                        <div class="col-12 tracking-col">
                            <label for="track" class="form-label">
                                Email <span class="optional">(optional)</span>
                            </label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>

                        <div class="col-12">
                            <input type="submit" name="submit" id="tracking-form-submit " class="btn btn-dark my-3 " value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- footer starts -->
    <?php
    include 'footer.php';
    ?>
    <!-- footer ends  -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>

</html>