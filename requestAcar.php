<?php
include 'navbar.php';
?>

<head>
    <title>Request a car</title>
    <link rel="stylesheet" href="css/requestAcar.css" />
</head>

<body>
    <!-- navbar starts -->

    <!-- navbar ends -->
    <section>
        <div class="container ">
            <div>
                <h1 class="Request-title text-center">
                    Request A Car
                </h1>
                <p class="tracking-description fs-4 my-5 text-center">
                    Ready to make your dream car a reality?
                    <br>
                    Fill out the application form below to start the process
                    <br>
                    of purchasing your vehicle.
                </p>

                <form action="form.php" method="post" enctype="multipart/form-data" class="tracking-form ">
                    <div class="row tracking-row">
                        <div class="col-12 tracking-col">
                            <label for="fname" class="form-label">
                                First Name*
                            </label>
                            <input type="text" name="fname" id="fname" class="form-control" required>
                        </div>
                        <div class="col-12 tracking-col">
                            <label for="lname" class="form-label">
                                Last Name*
                            </label>
                            <input type="text" name="lname" id="lname" class="form-control" required>
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
                        <div class="col-12 tracking-col">
                            <label for="city" class="form-label">
                                City*
                            </label>
                            <input type="text" name="city" id="city" class="form-control" required>
                        </div>
                        <div class="col-12 tracking-col">
                            <label for="track" class="form-label">
                                Vehicle of choice*
                            </label>
                            <input type="text" name="vehicle" id="vehicle" class="form-control" required>
                        </div>
                        <div class="col-12 tracking-col">
                            <label for="fname" class="form-label">
                                file*
                            </label>
                            <input type="file" name="fname" id="fname" class="form-control" required>
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