<?php

include('partials/connection.php');


    
    session_start();


$showError= "false";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inspire Club - The Science Club of NITR</title>
    <link rel="icon" href="assets/img/abc.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Kanadaka&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Telivigala&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akronim&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+SC&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aleo&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alex+Brush&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alice&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike+Angular&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allan&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4-Calendar-No-Custom-Code.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Calendar.css">
    <link rel="stylesheet" href="assets/css/Brands.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/iframe.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Ludens---Contact-Info--Google-Map.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Powerful-Calendar.css">
    <link rel="stylesheet" href="assets/css/Projects-Clean.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Quote-Card-1.css">
    <link rel="stylesheet" href="assets/css/Quote-Card.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Grid.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us-1.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us-2.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us.css">


    <script>(function(w, d) { w.CollectId = "6130d1fcef0a6c4814d2c37f"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
</head>

<body>


<?php

include('partials/navbar.php') ;

?>
    <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000" data-bs-pause="false"
        data-bs-keyboard="false" id="carousel-1">
        <div class="carousel-inner">
            <div class="carousel-item active"><img class="img-fluid w-100 d-block" src="assets/img/nit.jpg"
                    alt="Slide Image" height="650px"></div>
            <div class="carousel-item"><img class="img-fluid w-100 d-block" src="assets/img/inspire1.jpg"
                    alt="Slide Image" height="650px"></div>
            <div class="carousel-item"><img class="img-fluid w-100 d-block" src="assets/img/nit2.jpg" alt="Slide Image"
                    height="650px"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span
                    class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a
                class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span
                    class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
    </div>






    
    <section class="features-clean">
        <div class="container" data-aos="zoom-in">
            <div class="intro">
                <h2 class="text-center">Our Objectives</h2>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-map-marker icon"></i>
                    <p class="description">To promote inquisitiveness among the students and inculcate science temper
                        among them<br></p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-clock-o icon"></i>
                    <p class="description">It will give a platform to students who want to pursue scientific career in
                        future.<br></p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-list-alt icon"></i>
                    <p class="description">To encourage, motivate and enquire the students in applications of science
                        and its influence on the society.<br><br></p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-leaf icon"></i>
                    <p class="description">To encourage students to participate in activities organized in the club such
                        as group discussions, seminar, lectures etc. The lectures will be given by our club members<br>
                    </p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-plane icon"></i>
                    <p class="description">To put latest scientific research into teaching and inspire students
                        invention and creativity with realistic results of scientific research in order to promote
                        better teaching quality and add great vitality in teaching.<br></p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-phone icon"></i>
                    <p class="description">To discuss the latest scientific processes like Rocket science, Missile
                        technology, launching of Chandrayaan-2 etc.<br></p>
                </div>
            </div>
        </div>
        <section class="map-clean"></section>
    </section>






    <h1 style="text-align: center;font-family: Lora, serif;color: var(--bs-pink);">Social Media Corner</h1>
    <div class="container mx-auto" style="margin: 5px 10px 20px ;">
        <div class="row ">
            <div class="col-md-4 ">

            <h3>Facebook Page</h3>
            <div id="fb-root"></div>
<script async="1" defer="1" crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v11.0" nonce="yKI4l6vG"></script><div class="fb-page" data-href="https://www.facebook.com/pages/category/Science-Website/Inspirenitr-109972063893357/" data-height="500" data-small-header="" data-adapt-container-width="1" data-hide-cover="" data-show-facepile="true" data-show-posts="true" data-width="600"><blockquote cite="https://www.facebook.com/pages/category/Science-Website/Inspirenitr-109972063893357/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pages/category/Science-Website/Inspirenitr-109972063893357/">Inspire.nitr</a></blockquote></div>

            </div>
            <!-- <div class="col-md-4 ">
            <h3>Instagram Page</h3>
            <iframe src='https://www.sociablekit.com/app/embed/65981' frameborder='0' width='100%' height='1000'></iframe>
            </div> -->
            <div class="col-md-4 ">
            <h3>LinkedIn Page</h3>
            <iframe src='https://www.sociablekit.com/app/embed/65976' frameborder='0' width='100%' height='1000'></iframe>
            </div>
        </div>
    </div>






    <section data-aos="zoom-in-up" class="highlight-phone">
        <h1 class="text-center">OUR FACULTY ADVISOR</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro">
                        <h2 class="text-start">Prof. Sanjaya Dutta</h2>
                        <p>Assistant Professor Grade-I</p>
                        <p>Physics and Astronomy Department,NITR</p>
                            
                            
                            <a class="btn btn-primary"
                            role="button" href="https://www.nitrkl.ac.in/FProfile.aspx?e=dattas">See more</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="d-none d-md-block phone-mockup"><img class="img-thumbnail img-fluid device"
                            src="assets/img/1141150.jpg">
                        <div class="screen"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<!--     
    <div class="container bg-dark" data-aos="zoom-in-up" style="max-width: 1200px;padding: 0px;width: 100%;">
        <h1 class="text-center text-primary" style="margin: 10px;">Social Media Corner</h1>
        <div class="row text-center justify-content-end">
            <div class="col-md-6"><iframe src="https://www.instagram.com/p/CTLn4jJlJ3f/embed" allowtransparency="true"
                    frameborder="0" scrolling="no"></iframe></div>
            <div class="col-md-6"><iframe
                    src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2F109972063893357%2Fposts%2F396690728554821%2F&amp;show_text=true&amp;width=350"
                    scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe></div>
        </div>
    </div> -->








    <section class="text-center projects-horizontal" data-aos="zoom-in-up">
        <div class="container">
            <div class="intro">
                <h2 class="display-5 text-center text-black-50">Club Founders</h2>
            </div>
            <div class="row projects">
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/1.jpg"></a>
                        </div>
                        <div class="col">
                            <h3 class="name">Pulak Chandra Patra</h3>
                            <p class="text-danger description">Ex-President, Inspire Club</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/5.jpg"></a>
                        </div>
                        <div class="col">
                            <h3 class="name">Bhavesh Gupta</h3>
                            <p class="text-danger description">Ex-Vice President, Inspire Club</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/3.jpg"></a>
                        </div>
                        <div class="col">
                            <h3 class="name">Shubhranshu Sekhar Sethi</h3>
                            <p class="text-danger description">Ex- Secretary, Inspire Club<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/2.jpg"></a>
                        </div>
                        <div class="col">
                            <h3 class="name">Kuldeep Bhanja</h3>
                            <p class="text-danger description">Ex- Treasurer, Inspire Club<br></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row projects">
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/6.png"></a></div>
                        <div class="col">
                            <h3 class="name">Sambeet Kar</h3>
                            <p class="text-danger description">Ex-Advisor, Inspire Club</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/4.jpg"></a></div>
                        <div class="col">
                            <h3 class="name">Dinesh Behera</h3>
                            <p class="text-danger description">Ex-Advisor, Inspire Club</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/Harsh Raj.jpg"></a></div>
                        <div class="col">
                            <h3 class="name">Harsh Raj</h3>
                            <p class="text-danger description">Ex- Advisor, Inspire Club<br></p>
                        </div>
                    </div>
                </div>
            </div>      



        </div>
    </section>
    <section data-aos="zoom-in-up">
        <div style="padding-top: 60px;padding-bottom: 30px;">
            <div class="container" style="padding-bottom: 10px;">
                <div class="text-center">
                    <h4 class="text-center text-muted"
                        style="font-size: 45px;margin-top: 15px;font-family: Poppins, sans-serif;"><strong>Contact
                            Us</strong></h4>
                    <hr style="border-color: rgb(0,0,0);width: 121px;">
                </div>
                <div class="row" style="margin-top: 44px;">
                    <div class="col-md-12 col-lg-7"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.645191100743!2d84.8996377146806!3d22.25353698534786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a201f72bbd561c3%3A0xab5c70e76a7b5a!2sNational%20Institute%20of%20Technology%2C%20Rourkela!5e0!3m2!1sen!2sin!4v1630326471998!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                    <div class="col-md-6 col-lg-5">
                        <h2 class="h4" style="margin-top: 35px;color: #00b5a8;border-color: #23295f;"><i
                                class="fa fa-user"
                                style="color: #00b5a8;width: 20px;height: 25px;"></i>&nbsp;Contact&nbsp; Us&nbsp;</h2>
                        <div style="padding-top: 10px;"><span><strong>Email id :</strong>&nbsp;</span></div>
                        <div><span>inspireclubnitrkl@gmail.com</span></div>
                        <div style="padding-top: 10px;"><span><strong>Phone No: </strong><span><br>+91 6370002924 (Ayusha)<br></span></span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    
    <div data-aos="zoom-in-up" class="brands"><a href="#"> <img src="assets/img/Untitled-12.png" width="100px"><img
                src="assets/img/Untitled-1.png" width="100px"><img
                src="assets/img/IMG-20210106-WA0017-removebg-preview.png" width="100px"><img
                src="assets/img/IMG_20210106_054338.jpg" width="100px"></a></div>





  <?php

  include('partials/footer.php');

  ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
    <script src="assets/js/Powerful-Calendar.js"></script>
    <script src="assets/js/WOWSlider-about-us.js"></script>
</body>

</html>