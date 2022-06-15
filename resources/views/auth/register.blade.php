<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <title> Orthoc </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="front_assets/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="/stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="front_assets/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="front_assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="front_assets/css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
  @include('front_side.header')
  </div>

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="col-md-6 col-sm-12">
            <img class="login-img" src="front_assets/images/signup.png" alt="">
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="heading_container">
            <h2 class="text-center">
              Register Yourself
            </h2>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form_container contact-form">
              <form method="POST" action="{{route('register')}}" enctype="multipart/form-data">
                @csrf
                  <div class="form-row">
                    <div class="col-md-12">
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"> <i class="fa-solid fa-user"></i></span>
                        <input type="text" name="name" class="form-control cst" placeholder="Name">
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-12">
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control cst" placeholder="Email">
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                    <input type="password" name="password" class="form-control cst" placeholder="Password">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                    <input id="password_confirmation" class="form-control cst"
                                type="password"
                                name="password_confirmation" required placeholder="Confirm Password">
                  </div>
                  <div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                    <input type="phone" name="phone" class="form-control cst" placeholder="Phone">
                  </div>
                  <div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                    <input type="text" name="address" class="form-control cst" placeholder="Address">
                  </div>
                  <div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                    <input type="file" name="photo" class="form-control cst">
                  </div>
                  <div>
                    <div class="form-check mt-3">
                      <input class="form-check-input" type="radio" value="0" name="role_as">
                      <label class="form-check-label" for="patient">
                        Patient
                      </label>
                    </div>
                    <div class="form-check mt-3">
                      <input class="form-check-input" type="radio" value="2" name="role_as">
                      <label class="form-check-label" for="donor">
                        Donor
                      </label>
                    </div>
                  </div>
                  <div class="btn_box">
                    <button>
                      Signup
                    </button>
                  </div>
                </form>
              </div>
            </div>
    
          </div>
        </div>

      </div>
     
    </div>
  </section>
  <!-- end contact section -->

  @include('front_side.footer')
  <!-- jQery -->
  <script type="text/javascript" src="front_assets/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="front_assets/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="front_assets/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>