<?php

include('partials/connection.php');

    session_start();
$showError= "false";
if(!isset($_SESSION['loggedin'])  || $_SESSION['loggedin']!=true){

  header('Location : login.php');
  // header('Location: ../index.php');
  exit;

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Contact Us Responses</title>
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
  <link rel="stylesheet" href="assets/css/Bootstrap-DataTables.css">
  <link rel="stylesheet" href="assets/css/Brands.css">
  <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
  <link rel="stylesheet" href="assets/css/Features-Boxed.css">
  <link rel="stylesheet" href="assets/css/Features-Clean.css">
  <link rel="stylesheet" href="assets/css/Footer-Clean.css">
  <link rel="stylesheet" href="assets/css/Footer-Dark.css">
  <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
  <link rel="stylesheet" href="assets/css/iframe.css">
  <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
  <link rel="stylesheet" href="assets/css/Login-Form-blue-Gradient-1.css">
  <link rel="stylesheet" href="assets/css/Login-Form-blue-Gradient.css">
  <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
  <link rel="stylesheet" href="assets/css/Ludens---Contact-Info--Google-Map.css">
  <link rel="stylesheet" href="assets/css/Map-Clean.css">
  <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
  <link rel="stylesheet" href="assets/css/Powerful-Calendar.css">
  <link rel="stylesheet" href="assets/css/Pretty-Table-1.css">
  <link rel="stylesheet" href="assets/css/Pretty-Table.css">
  <link rel="stylesheet" href="assets/css/Projects-Clean.css">
  <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
  <link rel="stylesheet" href="assets/css/Quote-Card-1.css">
  <link rel="stylesheet" href="assets/css/Quote-Card.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
  <link rel="stylesheet" href="assets/css/Table-With-Search.css">
  <link rel="stylesheet" href="assets/css/Team-Grid.css">
  <link rel="stylesheet" href="assets/css/WOWSlider-about-us-1.css">
  <link rel="stylesheet" href="assets/css/WOWSlider-about-us-2.css">
  <link rel="stylesheet" href="assets/css/WOWSlider-about-us.css">
</head>

<body>
 

<?php


include('partials/navbar.php');

?>









  <div class="bootstrap_datatables">
    <div class="container py-5">
      <header class="text-center text-black">
        <h1 class="display-4">Contact Us Responses</h1>
      </header>
      <div class="row py-5">
        <div class="col-lg-10 mx-auto">
          <div class="card rounded shadow border-0">
            <div class="card-body p-5 bg-white rounded">
              <div class="table-responsive">
                <table id="example" style="width:100%" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Sl No</th>
                      <th>Name</th>
                      <th>Email Id</th>
                      <th>Message</th>
                      <th>Time and Date</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                  <?php

                          $sql=  "SELECT * FROM contact_us";
                          $result = mysqli_query($conn,$sql);
                          while($row = mysqli_fetch_assoc($result))
                            {
                               $sl_no=$row['sl_no'] ;
                               $name=$row['name'] ;
                               $email = $row['email'];
                               $msg= $row['message'];
                               $time= $row['time'];


                                      echo' <tr>
                                             <td>'.$sl_no.'</td>
                                             <td>'.$name.'</td>
                                             <td>'.$email.'</td>
                                             <td>'.$msg.'</td>
                                             <td>'.$time.'</td>
                      
                                             </tr>';
                            }
                    ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




 


  <?php

  include('partials/footer.php');

  ?>



  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/bs-init.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/js/Bootstrap-DataTables.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
  <script src="assets/js/Lightbox-Gallery.js"></script>
  <script src="assets/js/Powerful-Calendar.js"></script>
  <script src="assets/js/Table-With-Search.js"></script>
  <script src="assets/js/WOWSlider-about-us.js"></script>
</body>

</html>