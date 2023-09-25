<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'slick');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $qy = "select * from wadha where email='$email'";
        $result = mysqli_query($con, $qy);
        $num = mysqli_num_rows($result);

        if ($num >= 1) {
            echo "Already Registered";
        } else {
            $q = "insert into wadha (name,email,phone) value('$name','$email','$phone')";
            $add = mysqli_query($con, $q);

            if ($add) {
                require 'PHPMailer/PHPMailerAutoload.php';
                

                $mail = new PHPMailer;

                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'gausiyashafi786@gmail.com';
                $mail->Password = '9637443741#sonu';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;

                $mail->setFrom('gausiyashafi786@gmail.com', 'gausiya');
                $mail->addAddress('lifewithg.s786@gmail.com', 'sayyed');
                
                $mail->isHTML(true);
                $mail->Subject = 'hello, Gausiya';
                $mail->Body = 'Thank you for the enquiry. We will connect with you shortly.';
                $mail->AltBody = 'Thank you';

                if ($mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                }
            } else {
                echo "Failed, please try again";
            }
        }
    } else {
        echo "Invalid email";
    }
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-961791272"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-1234566');
  </script>

  <title>project by Gausiya</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;800;900&family=Mulish:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <link rel="shortcut icon" href="images/w1.png">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

  <!-- Owl Stylesheets -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <link rel="stylesheet" href="css/aos.css" />

</head>

<body data-aos-once="false">

  <!-- Start Header -->
  <header id="navigation" class="sticky-top">
    <nav class="navbar navbar-expand-lg shadow-sm " aria-label="navbar">
      <div class="container">

        <a class="navbar-brand py-0 text-decoration-none" href="index.php" > <img src="logo.png" alt="Logo"> </a>

        <a class="d-lg-none d-md-block d-sm-block d-block text-decoration-none text-left text-dark" href="tel:9637443741"><i class="fas fa-phone-alt"></i> &nbsp;+91 9637443741</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbars">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#overview">Overview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#price">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#floor_plan">Floor Plan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#amenities">Amenities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#location">Location</a>
            </li>
          </ul>
          <a class="button d-lg-block text-decoration-none d-md-none d-sm-block d-none" href="tel:9637443741"><span><i class="fas fa-phone-alt"></i> &nbsp;+91 9637443741</span></a>
        </div>

      </div>
    </nav>
  </header>
  <!-- End Header -->

  <!-- Banner Section Start -->
  <div class="container-fluid p-0 page-section" id="home">
        <div id="header-carousel" class="hero_header carousel slide carousel-fade" data-bs-interval="1500" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="images/slid-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="images/slide-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="images/slide-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="hero" id="home">
            <div class="container">
                <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card bg-transparent b-radius-0 border-0">
                      <div class="row justify-content-center align-items-center ">
                        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                          <div class=" d-block text-center text-md-center text-lg-start">
                            <div >
                              <h1 class="fw-bold text-white fs-1 mb-1" >Wadhwa Wise City Project</h1>
                            </div> 
                            <h5 class="fw-normal text-white fs-5 mb-3" >At <span class="fw-bold" style=" padding-bottom: 5px; border-bottom: 2px solid #fff;">Panvel</span>, Navi Mumbai</h5>
                            <h3 class="text-white fs-1 mb-1" >1, 2, 3 BHK, Plots & Bungalows</h3>
                            <div class="row d-flex justify-content-center justify-content-md-center justify-content-lg-start" >
                              <div class="col-xl-7 col-lg-7 col-md-10 col-sm-12 my-3 col-12">
                                <div class="text-white py-2 bg-color text-center bounce2 b-radius-10" style="background-color: rgba(255, 255, 255, .98);">
                                  <h3 class="fw-normal fs-6">Starting Price</h3>
                                  <h4 class="fw-bold fs-4 mb-0 ">1200 Sq Ft</h4>
                                  <span class="price-value fs-1 fw-bold"><small class="fs-5">@ ₹</small> <b class="" style="text-shadow: 2px 7px 5px rgba(0,0,0,0.3), 0px -4px 10px rgba(255,255,255,0.3); ">1.15 CR*</b> <small class="fs-4">Onwards</small></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 col-12">
                          <div class="card contact-form banner-form" >
                            <h3 class="fs-2 fw-bold text-white mb-4 text-lg-start text-center">Register to get call</h3>
  <form action="index.php" method="post">
    <div class="row" name="formblock">
        <div class="col-md-12">
            <div class="single-form form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                <div class="help-block with-errors" name="name_error" style="display: none;"></div>
            </div> <!-- single form -->
        </div>
        <div class="col-md-12">
            <div class="single-form form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                <div class="help-block with-errors" name="email_error" style="display: none;" style="display: none;"></div>
            </div> <!-- single form -->
        </div>
        <div class="col-md-12">
            <div class="single-form form-group input-group">
                <span class="input-group-text" id="basic-addon1">+91</span>
                <input class="form-control" type="tel" maxlength="10" oninput='digitValidate(this)' name="phone" placeholder="Phone">
                <div class="help-block with-errors" name="phone_error" style="display: none;"></div>
            </div> <!-- single form -->
        </div>
         <div class="col-md-12">
            <!-- <div class="single-form form-group">
               <select class="selectBox" name="projectId" id="#projectId">
                    <option value="" disabled selected>Select Project</option>
                    <option value="3130477">Arihant Alishan</option>
                    <option value="3302263">Imperial Codename</option>
                    <option value="1670219">Arihant Aspire</option>
                    <option value="3111580">Godrej Highlands</option>
                </select>
                <div class="help-block with-errors" name="projectId_error" style="display: none;"></div>
            </div> --> <!-- single form -->
        </div>
        <input type="hidden" name="projectId" value="1756037" />
        <input type="hidden" name="projectName" value="Wadhwa Wise City Plots" />
        <input type="hidden" name="localityId" value="" />
        <input type="hidden" name="source" value="google" />
        <input type="hidden" name="medium" value="cpc" />
        <input type="hidden" name="acturl" value="" />
        <div class="col-md-12">
            <div class="single-form form-group text-center">
                <button type="submit" class="first-btn"><span>Book Your Visit</span></button>
            </div> <!-- single form -->
        </div>
    </div> <!-- row -->
    <div name="confirmblock" style="color:#201f50;">
        
    </div>
</form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
  </div>
  
  <!-- Banner Section End -->

   <!-- Overview Start -->
  <section id="overview" class="page-section bg-transparent position-relative">
    <div class="container">

      <div class="card border-0 b-radius-20 shadow py-5 px-4">
        <div class="row justify-content-center align-items-center">

          <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 ">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-anchor-placement="top-bottom" data-aos-once="true">
              <h1 class="fs-1 lh-1 mb-5 fw-bold">About <span class="color2">Wadhwa Wise City project</span></h1>
            </div>
            <div class="m-mb" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="500" data-aos-anchor-placement="top-bottom" data-aos-once="true">

              <p class="mb-2 text-justify lh-base" style="font-family: inherit;">The Wadhwa Group carries a rich legacy of over half a century, built on the trust and belief of its customers and stakeholders. The group is one of Mumbai’s leading real estate players and is currently developing residential, commercial and township projects spread across approximately 4.21 million Sq.M developed, ongoing & future. the group’s clientele comprises of over 20,000 satisfied customers and over 150+ MNC corporates.</p>

              <div class="row mt-5 ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-anchor-placement="top-bottom" data-aos-once="true">
                  <button data-bs-toggle="modal" data-bs-target="#enquiry-modal" class="button"><span style="position: relative; z-index:1">Book Your Visit</span></button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 ">
            <div class="b-radius-0 text-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300" data-aos-anchor-placement="top-bottom" data-aos-once="true">
              <img class="img-fluid b-radius-20" src="images/slid2.webp">
            </div>
          </div>

        </div>
      </div>

      

    </div>
  </section>
  <!-- Overview End -->

  <!-- Price -->
  <section id="price" class="page-section position-relative" style="background-image: url('./images/price.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; width: 100%;">
    <div class="custom-shape-divider-top-1695114570">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
      </svg>
    </div>

    <div class="container">
      <div class="row ">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="title text-center" data-aos="fade-up" data-aos-duration="800" data-aos-anchor-placement="top-bottom" data-aos-once="true">
            <h1 class="fs-1 lh-1 text-white mb-5 fw-bold">Our <span class="color2">Price</span></h1>
          </div>
        </div>
      </div>

      <div class="row row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">

        <div class="cols">
          <div class="pricingTable shadow bg-white" data-aos="fade-up" data-aos-duration="800" data-aos-anchor-placement="top-bottom" data-aos-once="true">
            <div class="pricingTable-header">
              <h3 class="fw-bold mb-0">1 BHK</h3>
            </div>
            <div class="pricing-content text-center mt-3">
              <p class="mb-3 fw-semibold fs-6 lh-base">Area:<br> <span class="fs-5 fw-bold"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#enquiry-modal" class="text-decoration-none mx-auto">On Request</a></span></p>
              <p class="mb-0 fw-semibold fs-6 lh-base">Price:<br> <span class="fs-5 fw-bolder"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#enquiry-modal" class="text-decoration-none mx-auto">On Request</a></span></p>
            </div>

          </div>
        </div>

        <div class="cols">
          <div class="pricingTable shadow bg-white" data-aos="fade-up" data-aos-duration="800" data-aos-anchor-placement="top-bottom" data-aos-once="true">
            <div class="pricingTable-header">
              <h3 class="fw-bold mb-0">2 BHK</h3>
            </div>
            <div class="pricing-content text-center mt-3">
              <p class="mb-3 fw-semibold fs-6 lh-base">Area:<br> <span class="fs-5 fw-bold"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#enquiry-modal" class="text-decoration-none mx-auto">On Request</a></span></p>
              <p class="mb-0 fw-semibold fs-6 lh-base">Price:<br> <span class="fs-5 fw-bolder"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#enquiry-modal" class="text-decoration-none mx-auto">On Request</a></span></p>
            </div>

          </div>
        </div>

        <div class="cols">
          <div class="pricingTable shadow bg-white" data-aos="fade-up" data-aos-duration="800" data-aos-anchor-placement="top-bottom" data-aos-once="true">
            <div class="pricingTable-header">
              <h3 class="fw-bold mb-0">3 BHK</h3>
            </div>
            <div class="pricing-content text-center mt-3">
              <p class="mb-3 fw-semibold fs-6 lh-base">Area:<br> <span class="fs-5 fw-bold"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#enquiry-modal" class="text-decoration-none mx-auto">On Request</a></span></p>
              <p class="mb-0 fw-semibold fs-6 lh-base">Price:<br> <span class="fs-5 fw-bolder"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#enquiry-modal" class="text-decoration-none mx-auto">On Request</a></span></p>
            </div>

          </div>
        </div>

        <div class="cols">
          <div class="pricingTable shadow bg-white" data-aos="fade-up" data-aos-duration="800" data-aos-anchor-placement="top-bottom" data-aos-once="true">
            <div class="pricingTable-header">
              <h3 class="fw-bold mb-0">Plots</h3>
            </div>
            <div class="pricing-content text-center mt-3">
              <p class="mb-3 fw-semibold fs-6 lh-base">Area:<br> <span class="fs-5 fw-bold"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#enquiry-modal" class="text-decoration-none mx-auto">On Request</a></span></p>
              <p class="mb-0 fw-semibold fs-6 lh-base">Price:<br> <span class="fs-5 fw-bolder"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#enquiry-modal" class="text-decoration-none mx-auto">On Request</a></span></p>
            </div>

          </div>
        </div>

        <div class="cols">
          <div class="pricingTable shadow bg-white" data-aos="fade-up" data-aos-duration="800" data-aos-anchor-placement="top-bottom" data-aos-once="true">
            <div class="pricingTable-header">
              <h3 class="fw-bold mb-0">Bungalows</h3>
            </div>
            <div class="pricing-content text-center mt-3">
              <p class="mb-3 fw-semibold fs-6 lh-base">Area:<br> <span class="fs-5 fw-bold"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#enquiry-modal" class="text-decoration-none mx-auto">On Request</a></span></p>
              <p class="mb-0 fw-semibold fs-6 lh-base">Price:<br> <span class="fs-5 fw-bolder"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#enquiry-modal" class="text-decoration-none mx-auto">On Request</a></span></p>
            </div>

          </div>
        </div>

      </div>

      <div class="row mt-4">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-anchor-placement="top-bottom" data-aos-once="true">
          <button data-bs-toggle="modal" data-bs-target="#enquiry-modal" class="button mx-auto"><span style="position: relative; z-index:1">Book Your Visit</span></button>
        </div>
      </div>

    </div>
    <div class="custom-shape-divider-bottom-1695114609">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
      </svg>
    </div>
  </section>
  <!-- End Price -->

  <!-- Start Floor Plan -->
  <section id="floor_plan" class="page-section bg-transparent position-relative">

    <div class="container">

      <div class="row ">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="title text-center" data-aos="fade-up" data-aos-duration="800" data-aos-anchor-placement="top-bottom" data-aos-once="true">
            <h1 class="fs-1 lh-1 mb-5 fw-bold">Our <span class="color2">Floor Plan</span></h1>
          </div>
        </div>
      </div>

      <div class="row ">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card b-radius-20">
            <img src="images/master_plan.jpg" class="img-fluid b-radius-20">
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-anchor-placement="top-bottom" data-aos-once="true">
          <button data-bs-toggle="modal" data-bs-target="#enquiry-modal" class="button mx-auto"><span style="position: relative; z-index:1">Book Your Visit</span></button>
        </div>
      </div>

    </div>

  </section>
  <!-- End Floor Plan -->

  <!-- Start Amenities -->
  <section id="amenities" class="page-section position-relative">
    <div class="custom-shape-divider-top-1695114570">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
      </svg>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="title text-center" data-aos="fade-up" data-aos-duration="800" data-aos-anchor-placement="top-bottom" data-aos-once="true">
            <h1 class="fs-1 lh-1 mb-5 fw-bold">Our <span class="color2">Amenities</span></h1>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-12 col-lg-12">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="card pt-4 pb-4 text-center border-0  shadow h-100 mb-4">
                <div class="card-image border-radius-0 border-0 align-items-center mb-3">
                  <img class="border-radius-0" src="amenities/p-1.png" style="height:55px">
                </div>
                <h4 class="fs-6 text-dark">Swimming pool</h4>
              </div>
            </div>
            <div class="item">
              <div class="card pt-4 pb-4 text-center border-0 shadow h-100 mb-4">
                <div class="card-image border-radius-0 border-0 mb-3">
                  <img class=" border-radius-0" src="amenities/cp-1.png" style="height:55px">
                </div>
                <h4 class="fs-6 text-dark">Children's play area</h4>
              </div>
            </div>
            <div class="item">
              <div class="card pt-4 pb-4 text-center border-0  shadow h-100 mb-4">
                <div class="card-image border-radius-0 border-0 mb-3">
                  <img class=" border-radius-0" src="amenities/cl-1.png" style="height:55px"">
                </div>
                <h4 class="fs-6 text-dark">Club House </h4>
              </div>
            </div>
            <div class="item">
              <div class="card pt-4 pb-4 text-center border-0  shadow h-100 mb-4">
                <div class="card-image border-radius-0 border-0 mb-3">
                  <img class=" border-radius-0" src="amenities/j-1.png" style="height:55px"">
                </div>
                <h4 class="fs-6 text-dark">Jogging Track</h4>
              </div>
            </div>
            <div class="item">
              <div class="card pt-4 pb-4 text-center border-0  shadow h-100 mb-4">
                <div class="card-image border-radius-0 border-0 mb-3">
                  <img class=" border-radius-0" src="amenities/bb.png" style="height:55px"">
                </div>
                <h4 class="fs-6 text-dark">Basketball Court</h4>
              </div>
            </div>
            <div class="item">
              <div class="card pt-4 pb-4 text-center border-0  shadow h-100 mb-4">
                <div class="card-image border-radius-0 border-0 mb-3">
                  <img class=" border-radius-0"  src="amenities/g-1.png" style="height:55px"">
                </div>
                <h4 class="fs-6 text-dark">Gym</h4>
              </div>
            </div>
            <div class="item">
              <div class="card pt-4 pb-4 text-center border-0  shadow h-100 mb-4">
                <div class="card-image border-radius-0 border-0 mb-3">
                  <img class=" border-radius-0" src="amenities/car.png" style="height:55px"">
                </div>
                <h4 class="fs-6 text-dark">Car Parking</h4>
              </div>
            </div>


          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-anchor-placement="top-bottom" data-aos-once="true">
          <button data-bs-toggle="modal" data-bs-target="#enquiry-modal" class="button mx-auto"><span style="position: relative; z-index:1">Book Your Visit</span></button>
        </div>
      </div>

    </div>

    <div class="custom-shape-divider-bottom-1695114609">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
      </svg>
    </div>
  </section>
  <!-- End Amenities -->

  <!-- Start Gallery -->
  <section id="gallery" class="page-section bg-transparent position-relative">
    <div class="container">

      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="title text-center" data-aos="fade-up" data-aos-duration="800" data-aos-anchor-placement="top-bottom" data-aos-once="true">
            <h1 class="fs-1 lh-1 mb-5 fw-bold">Our <span class="color2">Gallery</span></h1>
          </div>
        </div>
      </div>

      <div class="row g-3">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
          <div class="card b-radius-10" data-aos="fade-up" data-aos-duration="800" data-aos-anchor-placement="top-bottom" data-aos-once="true">
            <a href="gallery/c-2.jpg" data-lightbox="photo"><img class="img-fluid b-radius-10" src="gallery/c-2.jpg"></a>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
          <div class="card b-radius-10" data-aos="fade-up" data-aos-duration="800" data-aos-anchor-placement="top-bottom" data-aos-once="true">
            <a href="gallery/cam 1.jpg" data-lightbox="photo"><img class="img-fluid b-radius-10" src="gallery/cam 1.jpg"></a>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
          <div class="card b-radius-10" data-aos="fade-up" data-aos-duration="800" data-aos-anchor-placement="top-bottom" data-aos-once="true">
            <a href="gallery/c-3.jpg" data-lightbox="photo"><img class="img-fluid b-radius-10" src="gallery/c-3.jpg"></a>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
          <div class="card b-radius-10" data-aos="fade-up" data-aos-duration="800" data-aos-anchor-placement="top-bottom" data-aos-once="true">
            <a href="gallery/pool.jpg" data-lightbox="photo"><img class="img-fluid b-radius-10" src="gallery/pool.jpg"></a>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-anchor-placement="top-bottom" data-aos-once="true">
          <button data-bs-toggle="modal" data-bs-target="#enquiry-modal" class="button mx-auto"><span style="position: relative; z-index:1">Book Your Visit</span></button>
        </div>
      </div>

    </div>
  </section>
  <!-- End Gallery -->

  <!-- Start Location -->
  <section class="m-0 p-0 page-section" id="location">
    <div class="container-fluid p-0">
      <div class="row m-0 justify-content-center align-items-center">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0 m-0">

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60378.1721189968!2d73.184157!3d18.94751!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e5c1de398747%3A0x611268bec040c514!2sWadhwa%20Wise%20Citypanvel!5e0!3m2!1sen!2sin!4v1695117715180!5m2!1sen!2sin" width="100%" height="350" style="border:0; margin-bottom: -5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

      </div>

    </div>
  </section>
  <!-- End Location -->

  <!-- Start Footer -->
  <footer class="pt-4 pb-4 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
          <p class="text-white fs-6 mb-0" style="font-family: inherit;"><small>Disclaimer: Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Eum, at repellendus aperiam corporis labore impedit reprehenderit perspiciatis accusantium temporibus unde
             consequatur magnam. Commodi dignissimos eligendi quis minus ratione nam qui..<br/> 
              All Rights Reserved.</small></p>
              <img src="images/qr.PNG" alt="" style=" height:50px; width:50px; srcset=">
              <p class="text-white fs-6 mb-0" style="text-center"> Copyright © 2023 Wadhwa Wise City Panvel | Powered by Wadhwa Group</p>
             
        </div>
        
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <p style="position:fixed; bottom:10px; left:20px; z-index:99;opacity: 1;">
    <a href="https://wa.me/9637443741" target="_blank"><img src="images/whatsapp.png" alt="Whatapp" style=" height:50px; width:50px;"></a>&nbsp; 
    <a href="tel:9637443741"><img src="images/call.png" alt="Phone" style=" height:50px; width:50px;"></a>
  </p>
  <p style="position:fixed; bottom:10px; right:20px; z-index:99;opacity: 1;">
  <a href="tel:9637443741"><button class="text-white py-2 bg-color text-center bounce2 b-radius-10" style="background-color: rgba(255, 255, 255, .98);">i am interested</button></a></p>
  

  <!-- Start Modal -->
  <div id="enquiry-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby=" modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content contact-form" id="getcallback">
        <div class="modal-header">
          <h2 class="form-title mb-" style="color:#fff;">I AM INTERESTED</h2>
          <button class="shake" type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#" method="post">
    <div class="row" name="formblock">
        <div class="col-md-12">
            <div class="single-form form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                <div class="help-block with-errors" name="name_error" style="display: none;"></div>
            </div> <!-- single form -->
        </div>
        <div class="col-md-12">
            <div class="single-form form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                <div class="help-block with-errors" name="email_error" style="display: none;" style="display: none;"></div>
            </div> <!-- single form -->
        </div>
        <div class="col-md-12">
            <div class="single-form form-group input-group">
                <span class="input-group-text" id="basic-addon1">+91</span>
                <input class="form-control" type="tel" maxlength="10" oninput='digitValidate(this)' name="phone" placeholder="Phone">
                <div class="help-block with-errors" name="phone_error" style="display: none;"></div>
            </div> <!-- single form -->
        </div>
         <div class="col-md-12">
            <!-- <div class="single-form form-group">
               <select class="selectBox" name="projectId" id="#projectId">
                    <option value="" disabled selected>Select Project</option>
                    <option value="3130477">Arihant Alishan</option>
                    <option value="3302263">Imperial Codename</option>
                    <option value="1670219">Arihant Aspire</option>
                    <option value="3111580">Godrej Highlands</option>
                </select>
                <div class="help-block with-errors" name="projectId_error" style="display: none;"></div>
            </div> --> <!-- single form -->
        </div>
        <input type="hidden" name="projectId" value="1234567" />
        <input type="hidden" name="projectName" value="Wadhwa Wise City project" />
        <input type="hidden" name="localityId" value="" />
        <input type="hidden" name="source" value="google" />
        <input type="hidden" name="medium" value="cpc" />
        <input type="hidden" name="acturl" value="" />
        <div class="col-md-12">
            <div class="single-form form-group text-center">
                <button type="submit" class="first-btn"><span>Book Your Visit</span></button>
            </div> <!-- single form -->
        </div>
    </div> <!-- row -->
    <div name="confirmblock" style="color:#201f50;">
        
    </div>
</form>
        </div>
        <div id="confirmblock" style="color:#333333"></div>
      </div>
    </div>
  </div>
  <!-- End Modal -->

  <!-- Start JavaScript File Link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="js/aos.js"></script>
  <script>
    AOS.init();

  </script>

  <script>
    $(document).ready(function(){  
        window.onload = function(){     
           setTimeout(function(){
            $('#enquiry-modal').modal('show');
            }, 3000);
        };
    }); 
  </script>

  <script type="text/javascript">
    let pIdValue;
    $(".modalBtn").on("click", function () {
      $(document).find("select[name='projectId'] option[value='']").attr('selected','selected');
      const myBookId = $(this).data('id');
      $(document).find("select[name='projectId']").val(myBookId).change();
    });
    $('form').bind('submit', function(e) {
      e.preventDefault();
      var clikedForm = $(this);
      checkunfn(clikedForm);

    });
    function checkunfn(activeForm)
    {
      name = activeForm.find("[name='name']").val();
      uname = activeForm.find("[name='email']").val();
      phone = activeForm.find("[name='phone']").val();
      let projectVal;
      if(pIdValue==null){
       projectVal = activeForm.find("[name='projectId']").val();
       //console.log(projectVal);
     }else{
      projectVal=pIdValue;
    }
                // console.log(name);
                // console.log(uname);
                // console.log(phone);

    var filter = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

    var filter1 = /^(\d)+$/;

    if(name.length == 0){
      activeForm.find("[name='name_error']").show();
      activeForm.find("[name='email_error']").hide();
      activeForm.find("[name='phone_error']").hide();
      activeForm.find("[name='name_error']").text('Please Enter your name');
                    // $(name).closest('.help-block').text(');
                    // $(name).closest('.help-block').css('display', "block");
      activeForm.find("[name='name']").focus();
      return false;
    }
    if(uname.length == 0){
      activeForm.find("[name='name_error']").hide();
      activeForm.find("[name='email_error']").show();
      activeForm.find("[name='phone_error']").hide();
      activeForm.find("[name='email_error']").text('Please Enter your email');
                    // $(name).closest('.help-block').text(');
                    // $(name).closest('.help-block').css('display', "block");
      activeForm.find("[name='email']").focus();
      return false;
    }
    if(phone.length == 0){
      activeForm.find("[name='name_error']").hide();
      activeForm.find("[name='email_error']").hide();
      activeForm.find("[name='phone_error']").show();
      activeForm.find("[name='phone_error']").text('Please Enter your phone number');
                    // $(name).closest('.help-block').text(');
                    // $(name).closest('.help-block').css('display', "block");
      activeForm.find("[name='phone']").focus();
      return false;
    }
    if(!filter.test(uname)) {
      activeForm.find("[name='name_error']").hide();
      activeForm.find("[name='email_error']").show();
      activeForm.find("[name='phone_error']").hide();
      activeForm.find("[name='email_error']").text('Please enter the email in correct format.');
      activeForm.find("[name='email']").focus();
      return false;
    } 
    if(!filter1.test(phone))
    {
      activeForm.find("[name='name_error']").hide();
      activeForm.find("[name='email_error']").hide();
      activeForm.find("[name='phone_error']").show();
      activeForm.find("[name='phone_error']").text('Phone Number Should Be Numeric');    
      activeForm.find("[name='phone']").focus();
      return false;
    }

    if(phone.length < 10){
      activeForm.find("[name='name_error']").hide();
      activeForm.find("[name='email_error']").hide();
      activeForm.find("[name='phone_error']").show();
      activeForm.find("[name='phone_error']").text('Phone Number Should Be 10 digit.');    
      activeForm.find("[name='phone']").focus();
      return false;
    }
    if(projectVal == null && pIdValue==null ){
      activeForm.find("[name='name_error']").hide();
      activeForm.find("[name='email_error']").hide();
      activeForm.find("[name='phone_error']").hide();
      activeForm.find("[name='projectId_error']").show();
      activeForm.find("[name='projectId_error']").text('Please Select a Project');
                    // $(name).closest('.help-block').text(');
                    // $(name).closest('.help-block').css('display', "block");
      activeForm.find("[name='projectId']").focus();
      return false;
    }

    else{
      activeForm.find("[name='projectId_error']").hide();
    }

            var url = "enquiryAPI.php";//"sendMail.php";
            //"https://proptiger.com/data/v1/entity/enquiry?utm_source=google&utm_medium=cpc&utm_campaign=orthomc";
            $.ajax({
              url: url,
              type: 'POST',
              data : $(activeForm).serialize(),
              success: function(data, textStatus, XMLHttpRequest)
              {
               gtag('event', 'conversion', {'send_to': 'GS-9637443741/IsClCIj6om8QqIrPygM'});
               activeForm.find("[name='formblock']").hide();
               activeForm.find("[name='confirmblock']").show();
               activeForm.find("[name='confirmblock']").html("<div style='color:#fff;padding-top:15px;'>Thank You <br/> Our executive will contact you soon..<br/> Or Call us at +91-91xxxxxxxx</div>");
             },
             error: function(XMLHttpRequest, textStatus, errorThrown)
             {
                // Error Message
              alert('Please Retry or Refresh the page.');
            }
          });         
        // Loading message
            activeForm.find("[name='confirmblock']").html('Thank you');
            // ("<img src='images/loader.gif' style='width:50px;' />");         
          } 
        </script>
        <!-- End JavaScript File Link -->

</body>
</html>