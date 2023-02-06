<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Community</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/community.css">

    <link rel="stylesheet" type="text/css" href="css/communitystyle.css">
</head>
<body>

	<div class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-darkgray" style="background-color: #2A2424;">
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
	</div>
 <div class="heading" style=" text-align: center; padding: 10px; margin: auto;
    width: 800px;height: auto; margin-top: 10px; background-color: white; border-radius: 5px;">
   <h2>SHARE YOUR IDEAS WITH THE COMMUNITY</h2>
    <p style="text-align: center;">if you have any problems about your pets ask others for help <br> let's help each others</p>
 </div>
  <div class="container">
    <div id="display_comment"></div>
   <form method="POST" id="comment_form">
    <div class="form-group"style="margin-top: 20px;">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
     <span id="comment_message"></span>
    </div>
   </form>

  </div>

      <!--footer-->
			<div class="footback"style="background-color: #2A2424;">
    <div class="container-fluid mt-5">
    <div class="card mx-6"background-color:"#2A2424;">
        <div class="row mb-2">
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
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>

<script>
$(document).ready(function(){

 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_content').focus();
 });

});
</script>
