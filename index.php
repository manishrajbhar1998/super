<!-- ----------------------------- php code --------------------------------- -->
<?php
  include('database.php'); 
?> 
<!-- --------------------------------------------- html doctyment ------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Fiber Glass</title>
    <!-- boostratp css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- fontawsome icons  -->
    <link rel="stylesheet" href="css/fontawsome.css">
    <!-- owl-Carousel min -->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.css">
    <!-- oas Animatio -->
    <link rel="stylesheet" href="./css/aos.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="css/Style.css">
</head>
<body>
    <!----------- header section start ----------->
    <div class="container-fluid header" id="header">
        <div class="row header-row">
            <div class="col-sm-6 header-col-1">
                <p><span><i class="far fa-envelope"></i></span><span>E-mail : </span><span>superfiberglass@gmail.com</span></p> 
            </div>
            <div class="col-sm-6 header-col-2">
                <p><i class="fas fa-phone-volume"></i> <span class="highlight">Call us : </span><span>8698698682</span><span>|</span><span>9226182528</span></p>
            </div>
        </div>
    </div>
    <!------X----- header section start ------X----->

    <!------------ nav section start ----------- -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Super Fiber Glass</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Products</a>
                    </li>
                </ul>
                <div class="nav-link">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
          </div>
        </div>
    </nav>
    <!------X----- nav section start ------X---- -->

    <!-- --------- landing section start ------------ -->
    <div class="container-fluid landing">
        <div class="row landing-row">
            <div class="col-md-6 landing-col">
                <div class="content">
                    <h1>Welcome to <span>Super Fiber Glass</span></h1>
                    <p>Manufacturer of All type of fiber items</p>
                    <hr>
                    <p class="category">Category we deals with</p>
                    <ol class="category-list">
                        <li><a href="product.php">Water Park</a></li>
                        <li><a href="product.php">Play time</a></li>
                        <li><a href="product.php">Status and Ports</a></li>
                        <li><a href="product.php">Door and bed</a></li>
                        <li><a href="product.php">Body part</a></li>
                    </ol>
                    <!-- <i class="fas fa-arrow-down"></i> -->
                </div>
            </div>
            <div class="col-md-6">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/landing/slide.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/landing/statu.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/landing/playtime.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- ----X----- landing section end ------X------ -->

    <!-- ---------- carousal section start ---------- -->
    <div class="container-fluid">
        <section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/landing/fiber.jpg" alt="post-1">
                            <div class="blog-title">
                              <h3>Fiber sheet</h3>
                              <a href="product.php/#status"><button class="btn blog-btn">View in detail</button></a>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./assets/product/3-door.jpg" alt="post-3">
                            <div class="blog-title">
                              <h3>Fiber Door</h3>
                              <a href="product.php"><button class="btn blog-btn">View in detail</button></a>
                          </div>
                         </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/product/gym-tremil-cover.jpg" alt="post-2">
                            <div class="blog-title">
                              <h3>Body Part</h3>
                              <a href="product.php"><button class="btn blog-btn">View in detail</button></a>
                          </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./assets/landing/playtime.jpg" alt="post-4">
                            <div class="blog-title">
                                <h3>PlayTime</h3>
                                <a href="product.php"><button class="btn blog-btn">View in detail</button></a>
                              </div>
                        </div>
                    </div>
                    <div class="owl-navigation">
                        <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left gary"></i></span>
                        <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right gray"></i></span>
                    </div>
                </div>
            </div>
         </section> 
    </div> 
    <!-- -----X----- crurosle section start ------X---- -->

    <!-- -----------about us section start ----------- -->
    <div class="container about-us p-5" id="about-us">
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-4">
                        <div class="card bg-dark text-white">
                            <img src="assets/product/bed2.png" class="card-img" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-dark text-white">
                            <img src="assets/product/budha.png" class="card-img" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-dark text-white">
                            <img src="assets/product/door-g43db9b195_1920.png" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="card bg-dark text-white">
                            <img src="assets/product/elephant.png" class="card-img" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-dark text-white">
                            <img src="assets/product/fiber-port.png" class="card-img" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-dark text-white">
                            <img src="assets/landing/slide.jpg" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h1>About us</h1>
                <p> Super Fiber Glass has been in this industry since 2000 and Manufacturing best quality product for there Clients.</p>
                <p>We are manufacturing  different categories product like playtime (5pt 7pt side, 5pt 7pt ladder, spiral, canopy</p>
                <P>Door as per given size, Bed width different design and color</P>
                <p>Status of Lord Budhha,Laughing Budhha, RadhaKishna, Elephant etc.</p>
                <p>Body part of Manchinary</p>
                <p>We are best of our quality and durability product</p>
                <i>Assgin your work</i><i class="fas fa-arrow-right px-4"></i><a href="#contact"><button class="btn btn-primary contact-btn"><i class="fas fa-phone-volume px-2"></i>Contact us</button></a>
            </div>
        </div>
    </div>
   <!-- -----X----- about-us section start ------X---- -->

   <!-- ----------- Contact us section --------------- -->
   <div class="container-fluid contact" id="contact">
       <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6">
                <h2>Contact us</h2>
                <hr>
                <div class="detail">
                    <h3 class="text-primary">Supper Fiber Glass</h3>
                    <p>E-mail: superfiberglass@gmail.com</p>
                    <p>Contact no: 9226182528 | 8698698682</p>
                    <p>Address: Ashiwini Traders, Bainabai Nagar, Tungar Phata, Sativali Vasai East Palghar 401208</p>
                    <button class="btn btn-secondary"><a class="btn text-white" href="https://goo.gl/maps/fhxuM5gGVcLnA4Jy8" target="_blank">Take me this address</a><i class="fas fa-arrow-right"></i> </button>
                </div>
            </div>
            <div class="col-sm-6">
                <h2>Send Query</h2>
                <hr>
                <form action="" method="post">
                 <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Email address</label>
                   <input type="email" class="form-control" id="exampleInputEmail1" name='email' aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Phone number</label>
                   <input type="number" class="form-control" name="number" id="exampleInputPassword1">
                 </div>
                 <div class="form-floating">
                     <textarea class="form-control" placeholder="Leave a comment here" name="query" id="floatingTextarea2" style="height: 100px"></textarea>
                     <label for="floatingTextarea2">Anu query</label>
                 </div>
                 <button type="submit" class="btn btn-primary mt-3 px-4" name="submit">Send</button>
                 <?php if(isset($regmsg)){
                            echo $regmsg;
                        }
                    ?>
               </form>
            </div>
        </div>
       </div>
   </div>
   <!-- -----X----- Contact us section --------X------ -->
   <div class="container-fluid map">
       <div class="row">
           <div class="col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.0528123010067!2d72.88063721490637!3d19.410123986897098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc5d8ee5e400c90e6!2zMTnCsDI0JzM2LjUiTiA3MsKwNTInNTguMiJF!5e0!3m2!1sen!2sin!4v1638000096054!5m2!1sen!2sin"allowfullscreen="" loading="lazy"></iframe>
           </div>
       </div>
   </div>

   <!-- ----------- footer section ------------------- -->
   <footer>
       <div class="container-fluid footer">
           <div class="row">
               <div class="col-md-3">
                <h2>Super Fiber Glass</h2>
                <p class="gray">Manufacturer of All types of Fiber item.</p>
                <img src="assets/logos/logo-1.jpg" class="logo" alt="">
                <p>Click here to visit <a href="https://www.indiamart.com/superfibreglass/">indiamart page</a></p>
                <p>GST Number: 27ABOFS1694M1ZB</p>
               </div>
               <div class="col-md-3">
                <h2>Our Clients</h2>
                <ul>
                    <li>Arihant industrial pvt LTD</li>
                    <li>Synergy waterpark Rides pvt LTD</li>
                    <li>Inventam Engeniring pvt LTD</li>
                    <li>Eureka Fibers</li>
                </ul>
               </div>
               <div class="col-md-3">
                    <h2>Gallary</h2>
                    <div class="flex-row">
                        <img src="./assets/landing/slide.jpg" alt="insta1">
                        <img src="./assets/landing/statu.jpg" alt="insta2">
                        <img src="./assets/landing/port.jpg" alt="insta3">
                    </div>
                    <div class="flex-row">
                    <img src="./assets/landing/playtime.jpg" alt="insta4">
                    <img src="./assets/landing/inventam.jpg" alt="insta5">
                    <img src="./assets/landing/fiber.jpg" alt="insta6">
                    </div>
                </div>
               <div class="col-md-3">
                    <h2>Follow us</h2>
                    <p class="gray">Let us be Social</p>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
               </div>
           </div>
       </div>
       <div class="copyright">
           <p>super fiber glass 2021-2022 copyright</p>
       </div>
   </footer>


   <!-- -----X----- footer section -----------X------- -->
 
   <!-- ------------X--------- body -------------X--------- -->
    <!-- Jquery js file -->
    <script src="js/jquery.min.js"></script>
    <!-- owl-Carousel js -->
    <script src="./js/owl.carousel.min.js"></script>
    <!-- oas Animatio -->
    <script src="./js/aos.js"></script>
    <!-- boostrap js file -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Custom js file -->
    <script src="js/main.js"></script>
</body>
</html>