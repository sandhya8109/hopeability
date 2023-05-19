<?php
include('header1.php')
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Work with us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="./CSS/work.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">
    <link href="./css/style1.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="/bootstrap.min1.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Work with us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Work with us</a></li>

                    </ol>
                </nav>
            </div>
        </div>
    </div>
    </div>
    <!-- Header End -->

    <section class="bg-light">
        <style>
            .bg-light {
                background-color: #fff !important;
            }
        </style>
        <div class="first bg-light">
            <p>We are always on the lookout for the best Disability Support Workers and Community Nurses. Our
                culture is all about creating a safe space for the whole team. Our values are respect, inclusion, and
                friendly support. If you think you’d be a great fit, we would love to hear from you.</p>
        </div>
    </section>
    <br>
    <br>
    <div class=" contact">
        <form action="action_page.php">
            <h1>Join The Hope Ability</h1>
            <br>
            <h3>Please register your interest below and we’ll be in touch soon.</h3>
            <br>
            <p>"<span class="A">*</span>" indicates required fields</p>

            <br>
            <label for="fname" class='required'>Name</label>
            <input type="text" id="name" name="name" placeholder="Your name..">

            <label for="lname" class='required'>Email</label>
            <input type="text" id="email" name="email" placeholder="Your email is..">

            <label for="phone" class='required'>Phone</label>
            <input type="text" id="phone" name="phone" placeholder="Your phone number is ..">

            <label for="cv" class='required'>Upload CV</label>
            <input type="file" id="cv" name="cv" placeholder="Drop Your Cv here.." style="height:200px">
            <p>Max. file size: 8 MB.</p>
            <br>
            <label for="subject">Tell us about your experience</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="Submit">
            <br>
            <br>
            <label for="captcha">CAPTCHA</label>
            <div class="g-recaptcha" data-sitekey="6LcyQBcmAAAAAP0_Vrt-lQYnoucVzJMnni6EUkEH"></div>
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <!-- mission-->
    <br>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
<?php
include('footer.php')
    ?>

</html>