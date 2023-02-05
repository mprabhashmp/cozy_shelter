<?php

include "connect.php";

$sql = "SELECT * FROM shelter_form";

$result = mysqli_query($conn,$sql);

?>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Pets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body >
        <style type="text/css">
            body{
                background-color: #FEFCFF;
            }


            @keyframes slideInLeft {
            			 0% {
            				 transform: translateX(-100%);
            			 }
            			 100% {
            				 transform: translateX(0);
            			 }
            		 }


            		h1,h2{
            			animation: 0.5s ease-out 0s 1 slideInLeft;
            		}
            .navbar{
                background-color: #2A2424;
            }
            .btn{
                background-color: #F0DEB0;
                font-weight: bold;
            }
            #fn{
                font-family: cursive;
                color: #E2C275;
                font-size: 35px;
            }

            .display-4{
              margin:7px;
            }


            #context{
                margin-top: 550px;
            }
            #offcanvasRight{
                background-color: #E5E3C9;
            }
            .button {
              border: 1px;
              border-radius:7px;
              outline: 0;
              display: inline-block;
              padding: 8px;
              color: black;
              background-color: #CDC7BE;
              text-align: center;
              cursor: pointer;
              width: 10%;
            }

            .button:hover {
              background-color: #555;
            }
            #cll {
              border: 1px solid #6c5ce7;
              padding: 1 25;
              border-radius: .2em;
              background-color: #a29bfe;
              transition: 1s;
            }

            #cll:hover {
            background-color: #81ecec;
            border: 2px solid #00cec9;
            }


        </style>


        <body style="background-color:white">
            <nav class="navbar navbar-expand-lg navbar-light bg-darkgray">
              <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="resources/logo.png" width="310px" height="110px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php" style="color:rgb(209, 176, 75);">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="ourpets.php" style="color:rgb(209, 176, 75);">Our Pets</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="find a shelter.html" style="color:rgb(209, 176, 75);">Find a Shelter</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="gallery.html" style="color:rgb(209, 176, 75);">Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="educational info.html" style="color:rgb(209, 176, 75);">Education Info</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about us.html" style="color:rgb(209, 176, 75);">About Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="community.php" style="color:rgb(209, 176, 75);">Community</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

    <div class="container-fluid">
    <div class="px-lg-5">
      <div class="row py-5">
        <div class="col-lg-12 mx-auto">
          <div class="text-white p-2 shadow-sm rounded banner">
            <center><h1 class="display-4" style="font-family:Franklin Gothic;font-size:50px;">Our friends who are looking for a House</h1></center>
          </div>
        </div>
      </div>

    <div class="container">
      <div class="box-container">
                   <?php foreach ($result as $r) { ?>
                   <div class="box">
                     <div class="image">
                        <img src="upload/<?php echo $r['image']; ?>" style="width: 350px; height: 350px; border-radius: 6px;">
                     </div>
                     <div class="content">
                        <p><h3><?php echo $r['petname']; ?></h3>
                        <h4 style="color:lightgray;">Breed: <?php echo $r['breed']; ?></h4><br>
                        <p>Age:<?php echo $r['age']; ?><br>
                        Cat or dog: <?php echo $r['pets']; ?><br>
                        Location: <?php echo $r['location']; ?><br>
                        Special notes:<?php echo $r['note']; ?><br><br>
                        <button id="cll">Call Now: <?php echo $r['no']; ?></a></button>
                        <a href="user_dashboard.php"><div  class="btn btn-danger"style="border-radius: 5px;">Update</div></a>
                      </p>
                     </div>
                   </div>
                <?php } ?>

      </div>
    </div>
  </div>
</div>

                          <br><hr>
              <div class="content">
                <center><a href="ourpets_2.html"><button class="btn2"style="border:0.1px solid;">NEXT>></button></a>
          </div>
     </div>

    <!--footer-->
    <div class="container-fluid mt-5">
    <div class="card mx-6">
        <div class="row mb-2 ">
            <div class="col-md-3 col-sm-11 col-xs-11">
                <div class="footer-text pull-left">
                    <div class="d-flex">
                        <img src="resources/logo.png" width="330px" height="130px">
                    </div>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi non pariatur numquam animi nam at impedit odit nisi.</p>
                    <div class="social mt-2 mb-3"> <i class="fa fa-facebook-official fa-lg"></i> <i class="fa fa-instagram fa-lg"></i> <i class="fa fa-twitter fa-lg"></i> <i class="fa fa-linkedin-square fa-lg"></i> <i class="fa fa-facebook"></i> </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-1 col-xs-1 mb-2"></div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <h5 class="heading">For questions & Suggestions</h5>
                <ul>
                    <li>cozyshelter@gmail.com</li><br>
                    <li>+94114356782</li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4">
                <h5 class="heading">We are waiting for your visit</h5>
                <ul class="card-text">
                    <li>155/1 Dam Street,12,colombo</li><br>
                    <li>471 Galle Road,06,Colombo</li>
                </ul>
            </div>
        </div>
        <div class="divider mb-4"> </div>
        <div class="row" style="font-size:10px;">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="pull-left">
                    <p><i class="fa fa-copyright"></i> 2022 Fotdesign</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="pull-right mr-4 d-flex policy">
                    <div>Terms of Use</div>
                    <div>Privacy Policy</div>
                    <div>Cookie Policy</div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- <script src="js/bootstrap.min.js" type="text/javascript"></script> -->
</body>
</html>
