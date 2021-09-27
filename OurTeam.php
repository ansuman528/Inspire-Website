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
    <title>Our Teams</title>
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
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/line-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4-Calendar-No-Custom-Code.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Calendar.css">
    <link rel="stylesheet" href="assets/css/Brands.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
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
</head>

<body>
<?php

include('partials/navbar.php') ;

?>

    <section class="team-grid">
        <div class="container">
            <div class="intro">
                <h2 class="display-3 text-center" data-aos="zoom-in-up">Our Team </h2>
            </div>



            <div class="row people" data-aos="zoom-in-up">



               
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/ayusha%20barik.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Ayusha Barik</h3>
                            <p class="title">President</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Sandip%20Ranjan%20Sahoo.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Sandip Ranjan Sahoo</h3>
                            <p class="title">Vice-President</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/10.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Soumyasree Sahoo</h3>
                            <p class="title">Advisor</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/4-1.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">P R Pravasi</h3>
                            <p class="title">Advisor</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/spandita%20bhoi.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Spandita Bhoi</h3>
                            <p class="title">Treasurer</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/ansuman%20nayak.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Ansuman Nayak</h3>
                            <p class="title">Secretary / Manager,tech team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Bollam%20Reshma.jpeg&quot;);">
                        <div class="cover">
                            <h3 class="name">Bollam Reshma</h3>
                            <p class="title">Manager,Content team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Deepti%20mayee%20Samal.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Deepti Mayee Samal</h3>
                            <p class="title">MANAGER,MANAGEMENT TEAM</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Prasanth%20Zacheus.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Kommu Prasanth</h3>
                            <p class="title">manager,design team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Vijay%20Mohan.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Vijay Mohan</h3>
                            <p class="title">Manager,Publicity team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/DARAPU%20PREETHI.jpeg&quot;);">
                        <div class="cover">
                            <h3 class="name">Darapu Preethi</h3>
                            <p class="title">Ast. Manager,content team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Suwesh.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Suwesh Prasad Sah</h3>
                            <p class="title">ast. manager,publicity team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Atul.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Atul Patel</h3>
                            <p class="title">Core Member</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Ayush%20Meher.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Ayush Meher</h3>
                            <p class="title">member, content team/publicity team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Amit%20Suryadipta%20Kar.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Amit Suryadipta Kar</h3>
                            <p class="title">member,Content team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Deb%20Prasad%20Sethy.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Debprasad Sethy</h3>
                            <p class="title">member,content Team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box"
                        style="background-image: url(&quot;assets/img/Jyotiraditya%20Samantaray.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Jyotiraditya Samantaray</h3>
                            <p class="title">member,Content team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>






                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Pushpa.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Pushpa Ranjan Bhoi</h3>
                            <p class="title">member,Design Team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/budijaggula%20supritha.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Budijaggula Supritha</h3>
                            <p class="title">Artist </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Anitha%20Sharma.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Anitha Sharma</h3>
                            <p class="title">member,publicity team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Dhanalakshmi%20nenavath.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Dhanalakshmi Nenavath</h3>
                            <p class="title">member,tech team/PUBLICITY TEAM</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/meghana%20gajji.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Meghna Gajji</h3>
                            <p class="title">Member,Publicity team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Harsh%20Singh.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Harsh Singh</h3>
                            <p class="title">member,Content team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Kalyan%20Reddy.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Kalyan Reddy</h3>
                            <p class="title">Member,publicity team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Kamala%20Abeykoon.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Dasun Fernando</h3>
                            <p class="title">Member,content team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Nirmalya.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Nirmalya Ojha</h3>
                            <p class="title">member,Publicity team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Pratyush%20Sahoo.jpeg&quot;);">
                        <div class="cover">
                            <h3 class="name">Pratyush Sahoo</h3>
                            <p class="title">MEMBER,PUBLICITY TEAM</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Sourabh%20Shakya.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Sourabh Shakya</h3>
                            <p class="title">member,Content team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Srujana%20Kurella.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Srujana Kurella</h3>
                            <p class="title">member,publicity team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-lg-3 item">
                    <div class="box"
                        style="background-image: url(&quot;assets/img/SUDIPTA%20KUMAR%20BEHERA.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Sudipta Kumar Behera</h3>
                            <p class="title">MEMBER,DESIGN TEAM</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Suryakanta%20Barik.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Suryakanta Barik</h3>
                            <p class="title">MEMBER,Pubility team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/Vishal%20Soni.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Mahesh Pandey</h3>
                            <p class="title">member,tech team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(&quot;assets/img/adra.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Adra S Prakash</h3>
                            <p class="title">member,Content team</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>









            


           


                











            
               
        </div>
    </section>

    
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