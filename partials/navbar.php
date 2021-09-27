<nav class="navbar navbar-dark navbar-expand-md sticky-top bg-dark navigation-clean">
    <div class="container-fluid">
       <a href ="https://inspireclubnitrkl.com/"><picture><img src="assets/img/abc.png" width="80px" height="70px"></picture></a><button data-bs-toggle="collapse"
            class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle
                navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-2"><a href ="https://www.nitrkl.ac.in/"><img
                src="assets/img/1200px-NIT_Rourkela_Colour_Logo.svg.png" style="width: 70px;height: 67px;"></a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" data-bss-hover-animate="swing"
                        href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" data-bss-hover-animate="swing"
                        href="articles.php">Articles</a></li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false"
                        data-bs-toggle="dropdown" data-bss-hover-animate="swing" href="#">About Us</a>
                    <div class="dropdown-menu"><a class="dropdown-item" href="about.php">About Club</a><a
                            class="dropdown-item" href="oldmembers.php">Old Members</a><a class="dropdown-item"
                            href="OurTeam.php">Our Team</a></div>
                </li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false"
                        data-bs-toggle="dropdown" data-bss-hover-animate="swing" href="#">Media</a>
                    <div class="dropdown-menu"><a class="dropdown-item" href="videos.php">Videos</a><a
                            class="dropdown-item" href="gallery.php">Gallery</a></div>
                </li>
            </ul>
            <ul class="navbar-nav">

                <li class="nav-item"><a class="nav-link" data-bss-hover-animate="swing" href="contact_us.php">Contact
                        Us</a></li>
            </ul>

            <ul class="navbar-nav">


                <?php

                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
                        {
                            echo' <li class="nav-item"><a class="nav-link" data-bss-hover-animate="swing" href="./dashboard.php">Dashboard</a>';
                            echo'<li class="nav-item"><a class="nav-link" data-bss-hover-animate="swing" href="partials/logout.php">Logout</a> ';
                        }

                    else{
                            echo '<li class="nav-item"><a class="nav-link" data-bss-hover-animate="swing" href="login.php">Login</a>';
                        }

                ?>



            </ul>
        </div>
    </div>
</nav>








</ul>
</div>
</div>
</nav>