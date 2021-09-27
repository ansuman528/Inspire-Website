<?php

include('partials/connection.php');

    session_start();
    if(!isset($_SESSION['loggedin'])  || $_SESSION['loggedin']!=true){

        header('Location : login.php');
        // header('Location: ../index.php');
        exit;
    
    }
    

    

// $showError= "false";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
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



    <section class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center"
                    style="font-family: Adamina, serif;font-weight: bold;color: var(--bs-blue);font-size: 40px;">
                    Dashboard</h2>
            </div>
            <div class="row justify-content-center features" data-aos="zoom-in-up">


                <div class="col-sm-6 col-md-5 col-lg-4 item" data-bss-hover-animate="pulse">
                    <a href="postarticle.php">
                        <div class="box"><i class="far fa-edit icon"></i>
                            <h3 class="name">Post an Article</h3>
                            <p class="description">Post an article easily into the article section of the website.<br><br>
                            </p>
                        </div>
                    </a>        
                </div>



                <div class="col-sm-6 col-md-5 col-lg-4 item" data-bss-hover-animate="pulse">
                <a href="video_upload.php">
                    <div class="box"><i class="la la-file-video-o icon"></i>
                        <h3 class="name">Post a Video</h3>
                        <p class="description">To post an video (i.e. embed) into the video section of the website
                            easily.&nbsp;&nbsp;<br></p>
                    </div>

                </a>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item" data-bss-hover-animate="pulse">
                <a href="poster_uploader.php">
                    <div class="box"><i class="fa fa-list-alt icon"></i>
                        <h3 class="name">Post a Poster /Picture</h3>
                        <p class="description">To post an images or poster into the gallery section of the website
                            easily.&nbsp;&nbsp;</p>
                    </div>
                </a>
                </div>


                <div class="col-sm-6 col-md-5 col-lg-4 item" data-bss-hover-animate="pulse">
                <a href="contact_us_responses.php">
                    <div class="box"><i class="fas fa-user icon"></i>
                        <h3 class="name">Contact Us Responses</h3>
                        <p class="description">See the numbers of people tried to contact us using our contact us page.
                        </p>
                    </div>
                </a>
                </div>


                <div class="col-sm-6 col-md-5 col-lg-4 item" data-bss-hover-animate="pulse">
                    <div class="box"><i class="fa fa-plane icon"></i>
                        <h3 class="name">Status</h3>
                        <p class="description">See the status of articles, images, videos i.e.&nbsp; no. of articles,
                            videos and images are uploaded.&nbsp;</p>
                    </div>
                </div>


                <div class="col-sm-6 col-md-5 col-lg-4 item" data-bss-hover-animate="pulse">
                    <div class="box"><i class="fa fa-edit icon"></i>
                        <h3 class="name">Edit an Article</h3>
                        <p class="description">Edit the articles easily which are already uploaded in this website. Also
                            you can delete an article.</p>
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