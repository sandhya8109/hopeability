<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include('admin/db_connect.php');
    ob_start();
    $query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
     foreach ($query as $key => $value) {
      if(!is_numeric($key))
        $_SESSION['setting_'.$key] = $value;
    }
    ob_end_flush();
    include('header.php');

	
    ?>

    <style>
    	header.masthead {
		  background: url(admin/assets/img/<?php echo $_SESSION['setting_cover_img'] ?>);
		  background-repeat: no-repeat;
		  background-size: cover;
		}
    </style>
    <body id="page-top">
    <!DOCTYPE html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disability & Home Care Service</title>
    <link rel="stylesheet" href="../css/style1.css">
    

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white  d-lg-flex">
        <style>
            .container py-3 d-flex a {
                color: #fff;
            }
        </style>
        <div class="container py-3 d-flex">
            <div class="ms-auto d-flex align-items-center">
                <a href="#"> <small class="ms-4"><i class="fa fa-phone-alt  me-3"></i>1300
                        424 442</small></a>
                <a href="./imp.php"><small class=" ms-4"><i class="fa fa-download me-3"></i>
                        Important
                        Documents</small></a>
                <a href="./referelform.php"> <small class="ms-4"><i
                            class="fa fa-user-plus me-3"></i>Referrals</small></a>
            </div>
            <div class="ms-3 d-flex">
                <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2"
                    href="https://www.facebook.com/hopeabilityofficial/"><i class="fab fa-facebook-f"
                        style="color: #274a84;"></i></a>
                <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2"
                    href="https://twitter.com/Hopeabilityau"><i class="fab fa-twitter" style="color: #274a84;"></i></a>
                <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2"
                    href="https://www.instagram.com/hope_ability/"><i class="fa-brands fa-square-instagram"
                        style="color: #274a84;"></i></a>
            </div>

        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="https://www.hopeability.com.au/">
                    <img src="https://www.hopeability.com.au/wp-content/uploads/2021/10/Artboard-1-blue@0.5x-2.png"
                        alt="">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="./index.php" class="nav-item nav-link">Home</a>
                        <a href="./services.php" class="nav-item nav-link">Our Services</a>
                        <a href="./about.php" class="nav-item nav-link">About</a>
                        <a href="./resigter.php" class="nav-item nav-link">Registered NDIS Provider</a>
                        <a href="./contact.php" class="nav-item nav-link">Contact</a>
                        <a href="./with us.php" class="nav-item nav-link">Work With Us</a>
                        <a href="./blog.php" class="nav-item nav-link">Testimonials</a>
                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="" class="btn btn-primary rounded-pill py-2 px-3">Search &nbsp;&nbsp;&nbsp;<i
                                class="fa fa-search"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


        <?php 
        $page = isset($_GET['page']) ?$_GET['page'] : "home";
        include $page.'.php';
        ?>
       

<div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-righ t"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  <div id="preloader"></div>
       
        
       <?php include('footer.php') ?>
    </body>

    <?php $conn->close() ?>

</html>
