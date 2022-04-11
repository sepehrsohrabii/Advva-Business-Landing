<?php
    // Check if User Coming From A Request
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        // Assign Variables
        $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
        $lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
        $msg = filter_var($_POST['msg'], FILTER_SANITIZE_STRING);
        
        // Creating Array of Errors
        $formErrors = array();
        if (strlen($fname) <= 3) {
            $formErrors[] = 'Username Must Be Larger Than <strong>3</strong> Characters';
        }
        
        // If No Errors Send The Email [ mail(To, Subject, Message, Headers, Parameters) ]
        
        // $headers = 'From: ' . $email . '\r\n';
        $headers = 'From: advva@rs018.webhostbox.net' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $myEmail = 'info@advva.com';
        $subject = 'Contact Form';
        $message = "<html><body>";
        $message .= "<div>First Name: </div>" . strip_tags($_POST['fname']) ."</br></br>";
        $message .= "<div>Last Name: </div>" . strip_tags($_POST['lname']) ."</br></br>";
        $message .= "<div>Company Email: </div>" . strip_tags($_POST['email']) ."</br></br>";
        $message .= "<div>Company Name: </div>" . strip_tags($_POST['company']) ."</br></br>";
        $message .= "<div>Message: </div>" . strip_tags($_POST['msg']) ."</br>";
        $message .= "</body></html>";
        
        if (empty($formErrors)) {
            
            mail($myEmail, $subject, $message, $headers);
            
            $fname = '';
            $lname = '';
            $email = '';
            $company = '';
            $msg = '';
            $success = '<div class="alert alert-success alert-dismissible" role="alert">
                          
                          We Have Recieved Your Message
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
            
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Advva Business">
    <meta name="robots" content="max-image-preview:large">
    <meta itemprop="name" content="Advva Business">
    <meta itemprop="url" content="">

    <title>Advva Business</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    
</head>
<body>

        <header>
          <nav class="navbar navbar-expand-md fixed-top bg-light">
            <div class="container">
              <div class="col align-self-center text-start">
                <img src="/img/Logo.svg" height="60px" alt="Advva Drivers Logo">
              </div>
              <div class="col align-self-center text-end d-none d-md-inline">
                <a href=""><b class="text-secondary">Become Partner</b></a>
                <img class="mx-3" src="/img/H-Line.svg" alt="Seperator Line">
                <a href="https://demodrivers.advva.com"><b>Become Driver</b></a>
              </div>
              <div class="col align-self-center text-end d-md-none">
                <button class="navbar-toggle" id="toggle" type="button">
                  <svg viewBox="0 0 100 100" width="50">
                    <path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                    <path class="line middle"d="m 30,50 h 40" />
                    <path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
                  </svg>
                </button>
                <div class="navbar-new" id="toggle-nav">
                  <ul id="navlinks">
                    <li><a data-text="1" href="#">Become Partner</a></li>
                    <li><a data-text="2" href="#">Become Driver</a></li>
                    
                  </ul>
                </div>
                <div id="bg-circle"></div>
              </div>
            </div>
          </nav> 
        </header>
        
        
        <main>
          <!-- Go to top circle-->
          <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
              <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
          </div>
          <!-- The Slider Background video -->
          <video autoplay muted loop id="slidervideo" class="mt-5">
            <source src="/img/advva driver.MP4" type="video/mp4">
          </video>
          <!-- Slider Content -->
          <div class="section-1 container mt-5 vh-100 d-flex align-items-center justify-content-center" id="smooth-wrapper">
            <div class="row justify-content-center" id="smooth-content">
              <h1 class="text-center mt-5">BRAND AWARENESS AND</br>ENGAGEMENT FOR THE MODERN AGE</h1>
              <a class="button1 mt-5 py-2 px-5" href="#sign_up">Become a Partner</a>
            </div>
          </div>
          <!-- Partners Section -->
          <div class="section-2 banner5">
            <div class="container py-5">
              <div class="row justify-content-center justify-content-md-between d-flex align-self-center">
                <div class="section-13 col-12 col-md-2">
                  <h5 class="text-white text-center text-md-start mb-4 mb-md-0">Our</br>Partners</h5>
                </div>
                <div class="section-14 col-12 col-md-10 justify-content-center justify-content-md-between d-flex align-self-center mt-3 mt-md-0">
                  <div class="d-md-none carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="5000">
                        <img class="align-self-center" src="/img/allaccidentslogo.svg" alt="All Accidents Law Group Logo" height="50px">
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img class="align-self-center" src="/img/ielogo.svg" alt="Identity Experiense Design Logo" height="50px">
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img class="align-self-center" src="/img/luxlogo.png" alt="Lux Dental SPA Logo" height="50px">
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img class="align-self-center" src="/img/mdblogo.png" alt="Medical Dental Builders Logo" height="50px">
                      </div>
                    </div>
                  </div>
                  <div class="d-none w-100 d-md-flex justify-content-center justify-content-between align-self-center">
                    <img class="align-self-center" src="/img/allaccidentslogo.svg" alt="All Accidents Law Group Logo" height="40px">
                    <img class="align-self-center" src="/img/ielogo.svg" alt="Identity Experiense Design Logo" height="40px">
                    <img class="align-self-center" src="/img/luxlogo.png" alt="Lux Dental SPA Logo" height="40px">
                    <img class="align-self-center" src="/img/mdblogo.png" alt="Medical Dental Builders Logo" height="40px">
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- Video Section -->
          <div class="section-9 banner2 py-5">
            <div class="container my-5 py-md-5">
              <div class="section-29 row text-center mb-5">
                <h2 class="text-uppercase">advertising to a new different level</h2>
              </div>
              <div class="row">
                <div class="col-12 d-flex justify-content-center">
                  <div class="section-30 card img-fluid w-75">
                    <img class="card-img-top image-cover" src="/img/video1.jpg" alt="advva video 1" height="510px">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center">
                      <a href="#"><img src="/img/play-icon.svg" alt="play icon"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Advertise on... Section -->
          <div class="overflow-hidden">
            <div class="section-7 container pt-5 py-md-5">
              <div class="row my-md-5 py-md-5">
                <div class="section-26 col-12 col-md-5 order-2 order-md-1 align-self-center pt-5 text-center text-md-start">
                  <h2 class="pt-md-5">ADVERTISE ON</br>UBER, LYFT CARS</h2>
                  <h4 class="fw-normal w-75 mx-auto mx-md-0">
                    Flood the roads of any top 200 market in the country, with an army of wrapped Uber, Lyft, and Grubhub drivers.
                  </h4>
                </div>
                <div class="col-12 col-md-7 order-1 order-md-2">
                  <img class="section-27" src="/img/123.png" alt="Advva car" width="100%">
                </div>
              </div>
            </div>
          </div>
          
          
          <!-- How it works Section -->
          <div class="section-5 py-5 pt-md-0 mt-5 mt-md-0">
            <div class="section-20 container py-5">
              <div class="row text-center my-5">
                <h2>How It Works</h2>
                <h4 class="fw-normal">Drop us a line. We’ll respond asap.</h4>
              </div>
              <div class="row">
                
                <div class="horizontal-text-accordion-section">

                  <div class="accordion-wrapper">

                    <div class="accordion active">
                      <h4 class="accordion-heading vertical fw-bold ">
                        <img class="number1" src="/img/one-b.svg" width="56px" alt="">
                        Choose Target Geographies
                      </h4>
                      <div class="content-wrapper">
                        <div class="accordion-img" id="accordion-1"></div>
                        
                        <div class="d-flex p-5 bg-1">
                          <div class="row">
                            <div class="col-12 col-md-3 align-self-center text-start text-md-center">
                              <img src="/img/one-b.svg" alt="one">
                            </div>
                            <div class="col-12 col-md-9 align-self-center mt-3">
                              
                              <div class="fade active">
                                <h4 class="accordion-heading horizontal fw-bold text-white">Choose Target Geographies</h4>
                                <div class="paragraph">
                                  <h5 class="fw-normal">TOP MARKETS</h5>
                                  <p>Flood the roads of any top 200 market in the country, with an army of wrapped Uber, Lyft, and Grubhub drivers</p>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="accordion">
                      <h4 class="accordion-heading vertical fw-bold ">
                        <img class="number1" src="/img/two-b.svg" width="56px" alt="">
                        Choose Driver Type
                      </h4>
                      <div class="content-wrapper">
                        <div class="accordion-img" id="accordion-2"></div>
                        <div class="d-flex p-5 bg-1">
                          <div class="row">
                            <div class="col-12 col-md-3 align-self-center text-start text-md-center">
                              <img src="/img/two-b.svg" alt="one">
                            </div>
                            <div class="col-12 col-md-9 align-self-center mt-3">
                              <div class="fade active">
                                <h4 class="accordion-heading horizontal fw-bold text-white">Choose Driver Type</h4>
                                <div class="paragraph">
                                  <h5 class="fw-normal">DRIVERS</h5>
                                  <p>Wrapped Uber, Lyft, and GrubHub cars picking up hundreds of passengers a month Best for urban geographies Interactive - hand out material to passengers</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion">
                      <h4 class="accordion-heading vertical fw-bold ">
                        <img class="number1" src="/img/three-b.svg" width="56px" alt="">
                        Choose Number of Cars
                      </h4>
                      <div class="content-wrapper">
                        <div class="accordion-img" id="accordion-3"></div>
                        <div class="d-flex p-5 bg-1">
                          <div class="row">
                            <div class="col-12 col-md-3 align-self-center text-start text-md-center">
                              <img src="/img/three-b.svg" alt="one">
                            </div>
                            <div class="col-12 col-md-9 align-self-center mt-3">
                              <div class="fade active">
                                <h4 class="accordion-heading horizontal fw-bold text-white">Choose Number of Cars</h4>
                                <div class="paragraph">
                                  <h5 class="fw-normal">15 CARS</h5>
                                  <p>Flood the roads of any top 200 market in the country, with an army of wrapped Uber, Lyft, and Grubhub drivers</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion">
                      <h4 class="accordion-heading vertical fw-bold ">
                        <img class="number1" src="/img/four-b.svg" width="56px" alt="">
                        Choose Wrap Style
                      </h4>
                      <div class="content-wrapper">
                        <div class="accordion-img" id="accordion-4"></div>
                        
                        <div class="d-flex p-5 bg-1">
                          <div class="row">
                            <div class="col-12 col-md-3 align-self-center text-start text-md-center">
                              <img src="/img/four-b.svg" alt="one">
                            </div>
                            <div class="col-12 col-md-9 align-self-center mt-3">
                              <div class="fade active">
                                <h4 class="accordion-heading horizontal fw-bold text-white">Choose Wrap Style</h4>
                                <div class="paragraph">
                                  <h5 class="fw-normal">FULL WRAP</h5>
                                  <p>Flood the roads of any top 200 market in the country, with an army of wrapped Uber, Lyft, and Grubhub drivers</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Form Section -->
         <div class="banner1">
           <div class="container">
             <div class="sp-371"></div>
             <div class="row pb-5 mb-5 section-21" id="sign_up">
               <div class="col-12 col-md-5 section-22 pb-5 align-self-center text-center text-md-start">
                 <h3 class="text-white">Become a Partner</h3>
                 <h4 class="fw-normal text-white">Drop us a line. We’ll respond asap.</h4>
               </div>
               <div class="col-12 col-md-7 section-23 pb-5">
                 
                   <form id="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                      <?php if (! empty($formErrors)) { ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true"></span>
                            </button>
                            <?php
                                foreach($formErrors as $error) {
                                    echo $error . '<br/>';
                                }
                            ?>
                        </div>
                      <?php } ?>
                      <?php if (isset($success)) { echo $success; } ?>
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <input id="fname" name="fname" type="name" class="form-control my-3 p-3" placeholder="First Name" value="<?php if (isset($fname)) { echo $fname; } ?>">
                        </div>
                        <div class="col-12 col-md-6">
                          <input id="lname" name="lname" type="name" class="form-control my-3 p-3" placeholder="Last Name" value="<?php if (isset($lname)) { echo $lname; } ?>">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <input id="company" name="company" type="name" class="form-control my-3 p-3" placeholder="Company" value="<?php if (isset($company)) { echo $company; } ?>">
                        </div>
                        <div class="col-12 col-md-6">
                          <input id="email" name="email" type="email" class="form-control my-3 p-3" placeholder="Company Email" value="<?php if (isset($email)) { echo $email; } ?>">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <textarea name="msg" id="msg" class="form-control my-3 p-3" rows="5" placeholder="Message"><?php if (isset($msg)) { echo $msg; } ?></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col text-center text-md-end">
                          <button type="submit" value="Send" class="w-50 button2 p-3 px-5 fw-bold mt-3" data-bs-target="#form">Submit</button>
                        </div>
                      </div>
                   </form>
               </div>
             </div>
           </div>
         </div>

          <!-- Web App Section -->
          <div class="section-38 container mt-121">
            <div class="section-39 row text-center ">
              <h2>Professional Panel</h2>
              
            </div>
          </div>
          <!-- Full width web app picture-->
          <div class="bg-2">
            <div class="section-40 section-41 text-center mbapp-pic mx-md-5 px-md-5">
              <img src="/img/webapp.png" alt="Advva Web App">
            </div>
          </div>
          <!-- SingUp Banner -->
          <div class="section-8 banner3 text-center py-5">
            <h4 class="fw-bold white mt-5 p-5">Don’t miss your next opportunity!</h4>
            <a href="#sign_up2"><button class="section-28 button1 mb-5 mt-4 py-2 px-5" href="#sign_up2">Sign up today</button></a>
          </div>
          <!-- Gallery Section -->
          <div class="banner4 section-6 py-5">
            <div class="container overflow-hidden my-5">
              <section class="section-gallery gallery">
                <div class="row gallery-row"> 
                  <div class="gallery__image-container">
                    <img src="/img/car1.jpg" alt="" class="gallery__image">
                  </div>
                  <div class="gallery__image-container">
                    <img src="/img/car2.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                  </div>
                  <div class="gallery__image-container">
                    <img src="/img/car3.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                  </div>
                  <div class="gallery__image-container">
                    <img src="/img/car4.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                  </div>
                </div>
                <div class="row gallery-row">
                  <div class="gallery__image-container">
                    <img src="/img/car5.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                  </div>
                  <div class="gallery__image-container">
                    <img src="/img/car1.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                  </div>
                  <div class="gallery__image-container">
                    <img src="/img/car2.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                  </div>
                  <div class="gallery__image-container">
                    <img src="/img/car3.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                  </div>
                </div>
                <div class="row gallery-row">
                  <div class="gallery__image-container">
                    <img src="/img/car4.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                  </div> 
                  <div class="gallery__image-container">
                    <img src="/img/car5.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                  </div>
                  <div class="gallery__image-container">
                    <img src="/img/car1.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                  </div>
                  <div class="gallery__image-container">
                    <img src="/img/car2.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                  </div>
                </div>
              </section>
              
            </div>
          </div>
          
          <!-- Mobile App Section -->
          <div class="section-3 container mt-121">
            <div class="section-15 row text-center ">
              <h2>OUR #1 PRIORITY: BRAND SAFETY</h2>
              <h4 class="fw-normal">To ensure your brand is safe on the streets, we select the top drivers to represent your name on the road</h4>
            </div>
            <div class="row mt-5">
              <div class="col-12 col-md-4 section-16">
                <h4 class="fw-normal text-center">
                  <img class="me-1" src="/img/check.svg" alt="Check icon">
                  Clean Driving
                </h4>
              </div>
              <div class="col-12 col-md-4 section-17">
                <h4 class="fw-normal text-center">
                  <img class="me-1" src="/img/check.svg" alt="Check icon">
                  Background Checked
                </h4>
              </div>
              <div class="col-12 col-md-4 section-18">
                <h4 class="fw-normal text-center">
                  <img class="me-1" src="/img/check.svg" alt="Check icon">
                  Top Rated Rideshare Drivers
                </h4>
              </div>
            </div>
          </div>
          <!-- Full width mobiles app picture-->
          <div class="bg-2">
            <div class="section-4 section-19 text-center mbapp-pic mx-md-5 px-md-5">
              <img class="bg-shadow" src="/img/Mobile-App.png" alt="Advva Mobile App">
            </div>
          </div>
          
          <!-- FAQs Section -->
          <div class="section-10 banner4 py-5">
            <div class="container my-5 overflow-hidden">
              <div class="row">
                <div class="col-12 col-md-4 align-self-center ">
                  <h3 class="section-33 black">FAQs</h3>
                </div>
                <div class="section-34 col-12 col-md-8">
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          <h6>Do I have to pay anything to get started?</h6>
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Driver does not pay to become a member, and there is no cost to wrap or unwrap the driver's car!</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          <h6>How much money will I make each month?</h6>
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">It depends on the size of the campaign. Each campaign has a different payout category. It starts from $300 and goes up to $2000.00 per month.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          <h6>Do I choose the campagin myself?</h6>
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          You can choose which area you would like to drive for our campaign. We consider both your selection of the campaign and the business owner's choice.                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                          <h6>How do I get paid?</h6>
                        </button>
                      </h2>
                      <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          After selecting you as a driver, you provide your bank account information to us and we pay you by direct deposit.                        
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                          <h6>How does my car gets wrapped?</h6>
                        </button>
                      </h2>
                      <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          We will provide you with our qualified wrap partners near your location.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                          <h6>How do I track my mileage?</h6>
                        </button>
                      </h2>
                      <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        Our mobile driver application will track all your mileage.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                          <h6>What happens when a campaign is over?</h6>
                        </button>
                      </h2>
                      <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          One of our professional wrappings unwrap your car by one of our professional wrapping companies and we look for another campaign.
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="red fw-bold" href="">Show More</a>
                </div>
              </div>
              
            </div>
          </div>
          <!-- Form Section -->
          <div class="section-11 form-banner2">
            <div class="container">
              <div class="row justify-content-center justify-content-md-between py-5">
                <div class="section-35 col-md-5 col-12 mt-5 mt-md-0 py-5 pe-md-5 align-self-center text-center text-md-start">
                  <h3 class="text-white">Become a Partner</h3>
                  <h4 class="fw-normal text-white">Drop us a line. We’ll respond asap.</h4>
                </div>
                <div class="section-36 col-md-7 col-12 p-4 p-md-5 text-center" id="sign_up2">
                  <form id="form" class="mt-0 mt-md-5 mb-5 py-5" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                      <?php if (! empty($formErrors)) { ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true"></span>
                            </button>
                            <?php
                                foreach($formErrors as $error) {
                                    echo $error . '<br/>';
                                }
                            ?>
                        </div>
                      <?php } ?>
                      <?php if (isset($success)) { echo $success; } ?>
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <input id="fname" name="fname" type="name" class="form-control my-3 p-3" placeholder="First Name" value="<?php if (isset($fname)) { echo $fname; } ?>">
                        </div>
                        <div class="col-12 col-md-6">
                          <input id="lname" name="lname" type="name" class="form-control my-3 p-3" placeholder="Last Name" value="<?php if (isset($lname)) { echo $lname; } ?>">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <input id="company" name="company" type="name" class="form-control my-3 p-3" placeholder="Company" value="<?php if (isset($company)) { echo $company; } ?>">
                        </div>
                        <div class="col-12 col-md-6">
                          <input id="email" name="email" type="email" class="form-control my-3 p-3" placeholder="Company Email" value="<?php if (isset($email)) { echo $email; } ?>">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <textarea name="msg" id="msg" class="form-control my-3 p-3" rows="5" placeholder="Message"><?php if (isset($msg)) { echo $msg; } ?></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col text-center text-md-end">
                          <button type="submit" value="Send" class="w-50 button2 p-3 px-5 fw-bold mt-3" data-bs-target="#form">Submit</button>
                        </div>
                      </div>
                   </form>
                </div>
              </div>
            </div>
          </div>
          
        </main>
        
        <footer>
          <div class="section-12 container mt-md-0 mt-121 py-md-5">
            <div class="section-37 row my-md-4 py-md-4 justify-content-around">
              <div class="col-12 col-md-2 align-self-center text-center text-md-start">
                <img src="/img/Logo.svg" alt="Advva Logo" height="60px">
              </div>
              <div class="col-12 col-md-2 align-self-center text-center text-md-start mt-4 mt-md-0">
                <h6 class="fw-normal">
                  FOLLOW US
                </h6>
                <a href="https://www.instagram.com/advvainc/"><img src="/img/instagram.svg" alt="advva instagram"></a>
                <a href="https://www.facebook.com/Advva-103036491994850"><img src="/img/facebook.svg" alt="advva facebook"></a>
              </div>
              <div class="col-12 col-md-6 align-self-center text-center text-md-start mt-4 mt-md-0">
                <p>Advva is the state-of-the-art and largest advertising firm in the United States and Canada.
                   It takes advertising to a new different level by advertising business on individual cars.
                </p>
                <div class="d-md-flex justify-content-md-between mt-4 mt-md-0">
                  <p class=""><b>Advertising & Marketing Agency</b></p>
                  <p>Ⓒ 2022 Advva Inc.</p>
                </div>
                
              </div>
            </div>
            
          </div>
        </footer>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/ScrollTrigger.min.js"></script>
  
    <script src="/js/main.js"></script>
</body>
</html>