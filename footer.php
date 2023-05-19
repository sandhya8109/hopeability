<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./css/footer.css">
    <style>
        @media (max-width: 768px) {
            .footer-distributed {
                flex-direction: column;
                text-align: center;
            }

            .footer-left,
            .footer-center,
            .footer-right {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <footer class="footer-distributed">

        <div class="footer-left">
            <img src="./img/hopeability.png" class="img-footer">
            <p class="footer-company-about">
                <span>Hope Ability acknowledges the traditional owners and custodians of country throughout Australia
                    and acknowledges their continuing connection to land, sea and community. We pay our respects to the
                    people, the cultures and the elders past, present and emerging.
                </span>
            </p>
        </div>

        <div class="footer-center">
            <h3>Get in Touch</h3>
            <div>
                <i class="fa-solid fa-location-dot"></i>
                <span>Address</span>
                <p>3 Grumman Court, Zuccoli, Northern Territory 0832</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <span>Phone</span>
                <p>1300 424 442</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <span><a href="mailto:info@hopeability.com.au">Email</a></span>
                <p>info@hopeability.com.au</p>
            </div>

            <div class="privacy">
                <span>Privacy Policy</span>
                &nbsp; &nbsp; &nbsp;
                <span>Terms & Conditions</span>
            </div>
        </div>

        <div class="footer-right">
            <h3>Social Links</h3>
            <div class="footer-icons">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <img src="./img/I-Heart-NDIS_2020.svg">
            </div>
        </div>

        <hr>
        <p class="footer-company-name">Copyright @ 2021 All Rights Reserved</p>
    </footer>
</body>

</html>