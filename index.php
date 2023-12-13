<?php
if(isset($_POST['submit1']))
{

 $to = "backwardadvisor@gmail.com";
 // $to = "shahidahmad110041@gmail.com";

 
 

$subject = "WEBSITE ENQUIRY";

// compose headers
$headers .= "X-Mailer: PHP/".phpversion();

// compose message
$message = "Name:".$_POST['name']."\n\n";
$message .= "Mobile:" .$_POST['mobile']."\n\n";
$message .= "Email:" .$_POST['email']."\n\n";
$message .= "Message:" .$_POST['msg']."\n\n";

// send email
if(mail($to, $subject, $message, $headers))
{
 echo "<script>alert('Thank you! Your message has been successfully sent. We will contact you very soon!')
window.location='thanks.php'</script>";

}
else{
     echo "<script>alert('try again');</script>";
}
}
else if(isset($_POST['submit2']))
{
    //  $to = "backwardadvisor@gmail.com";
$to = "shahidahmad110041@gmail.com";
$subject = "WEBSITE CLIENT ENQUIRY";

// compose headers
$headers .= "X-Mailer: PHP/".phpversion();

// compose message
$message = "Mobile Number:".$_POST['mobile']."\n\n";
$message .= "Email:" .$_POST['email']."\n\n";
// send email
if(mail($to, $subject, $message, $headers))
{
 echo "<script>alert('Thank you! Your message has been successfully sent. We will contact you very soon!')
window.location='thanks.php'</script>";
}
else{
     echo "<script>alert('try again');</script>";
}
}


?>


<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="155 characters of message matching text with a call to action goes here">
    <meta name="author" content="">
    <title>FSSAI Registration in Delhi NCR | Food License Registration |Backward Advisor</title>

    <meta name="description" content="fssai registration, food license in delhi, fssai registration delhi, fssai registration fees, food license delhi, fssai food license, fssai certificate, fssai registration in delhi, fssai license consultant in delhi, food licence delhi, fssai licence registration, fssai registration fee, fssai registration in delhi, food license in noida, fssai registration fees in delhi, fssai license consultant, food license agent, fssai registration, fssai consultant, fssai certificate, fssai certification, fssai license registration, fssai consultant in delhi, fssai certificate cost, food license in gurgaon, fssai registration charges, fssai registration consultant, fssai registration noida, fssai registration consultant delhi, steps for fssai registration, fssai registration haryana, food license in faridabad, food license consultant, fssai registration, fssai registration fees, food license consultant delhi, food license registration, fssai certificate, food license in gurgaon, fssai license consultant in gurgaon, fssai licence consultant in delhi, fssi registration, fssai food license consultant new delhi delhi, fssai food licence, fssai license consultant delhi, fssai registration office delhi, fssai delhi registration, fssai license consultant in delhi, fssai certificate, fssai registration agents in delhi ncr, fssai registration cost in delhi, fssai license agents in delhi, fssai consultant, fssai license cost, fssai consultants in delhi, fssai license agent, fssai license consultant, fssai certification cost, fassi catification, fssai consultant in faridabad, fast food license in delhi, food license registration in delhi online labour, Search
    fssai licence consultant in chandni chowk, fssai registration fees, fssai registration number verified, fssai certificate cost, food license agent in gurgaon, fssai registration in faridabad, charges for fssai registration, fssai certification cost, fssai registration for retailers, fssai registration requirement, fssai central license registration, fssai food registration, fssai licence consultant, fassi registration, fssai consultant in gurgaon, fssai registration consultant in gurgaon, fssai registration in gurgaon, fees for fssai certificate, food license gurgaon, food license delhi fees, food license in noida, food license agents in west delhi, registration fssai, fssai food licence fees, fssai food license fees, fssai license consultant gurgaon, fssai license consultant noida, fssai registration consultant in gurgaon, fssai registration consultant in noida, fssai registration gurgaon, fssai registration in gurgaon, fssi food license in delhi, fssai registration fee, fssai license consultant in gurgaon, food licence consultants in gurgaon,  fssai license consultant, food licence consultant in delhi, food license in delhi fees, food and safety licence renew broker in delhi, food license apply, fssai consultant at badarpur, fssai consultant delhi, fssai consultant east delhi, fssai food licence cost, fssai license registration fees, fssai registration, fssai registration immediately, fssai registration in up, fssai licence fee for central registration, fssi certificate, fssai apply, fssai registration ghaziabad, fssai consultant gurgaon, fssai registration for dry fruits, fssai central license registration, fssai new registration fees, fssai certfication, fssai certificate requirement, fssai consultants gurgaon, fssai consultants in sohna road, food license agent, food license in haryana, fssai registration fees, certification for fssai, 24hour food license in delhi, cheap and best food license in delhi, food license registration fees, food license registration national, fssai license for food chemical, top consultants for food license in delhi, fssai license for restaurant,  fssai consultant in noida, fssai food license company in delhi delhi, fssai food license consultant new delhi delhi, fssai registration company in delhi, fssai registration consultant in shakti nagar, fssai registration for farmers, fssai registration for restaurant, fssai registration in haryana, fssai registration in noida, fssai registration kaise kare, fssai registration uttar pradesh, requirements for fssai registration, fssai food licence registration in gurgaon, fssai license consultant in delhi, fssai license new registration, fssai licensing & registration system, registration fee for fssai, registration on fssai, registration in fssai, fissai food licence facilitator in delhi ncr, 
    fssai certificate fees, fssai certificate verification, required fssai certificate, fssai consultant in noida, fssai registration in delhi, fssai registration in noida, company registration in delhi, company registration, partnership firm registration in delhi, firm registration in delhi, company registration number india, proprietorship company registration in delhi, private company registration in delhi, company registration in delhi near me, company registration office in delhi, company registration in india ">
    
    <meta name="keywords" content="fssai registration, food license in delhi, fssai registration delhi, fssai registration fees, food license delhi, fssai food license, fssai certificate, fssai registration in delhi, fssai license consultant in delhi, food licence delhi, fssai licence registration, fssai registration fee, fssai registration in delhi, food license in noida, fssai registration fees in delhi, fssai license consultant, food license agent, fssai registration, fssai consultant, fssai certificate, fssai certification, fssai license registration, fssai consultant in delhi, fssai certificate cost, food license in gurgaon, fssai registration charges, fssai registration consultant, fssai registration noida, fssai registration consultant delhi, steps for fssai registration, fssai registration haryana, food license in faridabad, food license consultant, fssai registration, fssai registration fees, food license consultant delhi, food license registration, fssai certificate, food license in gurgaon, fssai license consultant in gurgaon, fssai licence consultant in delhi, fssi registration, fssai food license consultant new delhi delhi, fssai food licence, fssai license consultant delhi, fssai registration office delhi, fssai delhi registration, fssai license consultant in delhi, fssai certificate, fssai registration agents in delhi ncr, fssai registration cost in delhi, fssai license agents in delhi, fssai consultant, fssai license cost, fssai consultants in delhi, fssai license agent, fssai license consultant, fssai certification cost, fassi catification, fssai consultant in faridabad, fast food license in delhi, food license registration in delhi online labour, Search
    fssai licence consultant in chandni chowk, fssai registration fees, fssai registration number verified, fssai certificate cost, food license agent in gurgaon, fssai registration in faridabad, charges for fssai registration, fssai certification cost, fssai registration for retailers, fssai registration requirement, fssai central license registration, fssai food registration, fssai licence consultant, fassi registration, fssai consultant in gurgaon, fssai registration consultant in gurgaon, fssai registration in gurgaon, fees for fssai certificate, food license gurgaon, food license delhi fees, food license in noida, food license agents in west delhi, registration fssai, fssai food licence fees, fssai food license fees, fssai license consultant gurgaon, fssai license consultant noida, fssai registration consultant in gurgaon, fssai registration consultant in noida, fssai registration gurgaon, fssai registration in gurgaon, fssi food license in delhi, fssai registration fee, fssai license consultant in gurgaon, food licence consultants in gurgaon,  fssai license consultant, food licence consultant in delhi, food license in delhi fees, food and safety licence renew broker in delhi, food license apply, fssai consultant at badarpur, fssai consultant delhi, fssai consultant east delhi, fssai food licence cost, fssai license registration fees, fssai registration, fssai registration immediately, fssai registration in up, fssai licence fee for central registration, fssi certificate, fssai apply, fssai registration ghaziabad, fssai consultant gurgaon, fssai registration for dry fruits, fssai central license registration, fssai new registration fees, fssai certfication, fssai certificate requirement, fssai consultants gurgaon, fssai consultants in sohna road, food license agent, food license in haryana, fssai registration fees, certification for fssai, 24hour food license in delhi, cheap and best food license in delhi, food license registration fees, food license registration national, fssai license for food chemical, top consultants for food license in delhi, fssai license for restaurant,  fssai consultant in noida, fssai food license company in delhi delhi, fssai food license consultant new delhi delhi, fssai registration company in delhi, fssai registration consultant in shakti nagar, fssai registration for farmers, fssai registration for restaurant, fssai registration in haryana, fssai registration in noida, fssai registration kaise kare, fssai registration uttar pradesh, requirements for fssai registration, fssai food licence registration in gurgaon, fssai license consultant in delhi, fssai license new registration, fssai licensing & registration system, registration fee for fssai, registration on fssai, registration in fssai, fissai food licence facilitator in delhi ncr, 
    fssai certificate fees, fssai certificate verification, required fssai certificate, fssai consultant in noida, fssai registration in delhi, fssai registration in noida, company registration in delhi, company registration, partnership firm registration in delhi, firm registration in delhi, company registration number india, proprietorship company registration in delhi, private company registration in delhi, company registration in delhi near me, company registration office in delhi, company registration in india"> 



    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,500i,600,600i,700|Source+Sans+Pro:300,400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/formValidation.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/datepicker.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="icon" type="image/favicons" href="images/fevicon.png">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">

    <link rel="manifest" href="favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicons/">
    <meta name="theme-color" content="#ffffff">
    
     <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158859178-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-158859178-1');
</script>
<!--    <script>-->

<!--function myFunction() {-->
<!--  alert("Page is loaded");-->
<!--}-->
<!--</script>-->
  
<style>
@media only screen and (max-width: 767px) {
 
 .opop1{
     top: 174px;
 }
 
 
 .opop2{
     top: 264px;
 }
     
 
 .opop3{
     top:  173px
 }
 .opop4{
     top: 294px;
         padding: 5px 159px!important;
 }
 

 
}

@media only screen and (max-width: 767px) {
  .is{
       width: 314px!important;
    height: 328px!important;
  }
  .rm{
      width: 314px!important;
    height: 328px!important;
    margin-top: 13px!important;
    margin-left:0px!important;
  }
}

@media (max-width: 767px) and (min-width: 100px){
.mm1{
    height:250px!important;
}
.mm2{
    margin-top: 28px;
    height:543px!important;
}
}
    
}


</style>
<script>
        $(window).load(function(){
                $('#onload').modal('show');
            });
</script>


<script type="text/javascript">


function phonenumber(inputtxt)
{
  var phoneno = /^\d{10}$/;
  if(inputtxt.value.match(phoneno))
  {
      return true;
  }
  else
  {
     alert("Not a valid Phone Number");
     return false;
  }
  }


	</script>
	
	<script type="text/javascript">
		function validateForm() {
  var x = document.forms["myForm"]["email"].value;
  if (x == "") {
    alert("Email must be filled out");
    return false;
  }
}


	</script>
</head>

<body>
    
    
<!--   <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="onload">-->

<!--    <div class="modal-dialog">-->

      <!-- Modal content-->
<!--      <div class="modal-content">-->
<!--        <div class="modal-header">-->
<!--          <button type="button" class="close" data-dismiss="modal">×</button>-->
<!--          <h4 class="modal-title">Enquiry For Food License</h4>-->
<!--        </div>-->
<!--        <form action="" method="post" name="myForm" onsubmit="return validateForm()">-->
<!--        <div class="modal-body">-->
<!--        <input class="form-control" placeholder="Your Mobile" id="mobile"  name="mobile" type="text"  /><br>-->
<!--         <input class="form-control" placeholder=" Your Email"  name="email" type="email" required="" />  <br>     -->
<!--        </div>-->
<!--        <div class="modal-footer">-->
<!--         <input type="submit" value="submit" name="submit2" class="btn btn-default appoinment-form-submit" onclick="phonenumber(document.myForm.mobile)"/>-->
<!--        </div>-->
<!--        </form>-->
<!--      </div>-->

<!--    </div>-->
<!--</div>-->

<div class="modal fade" id="overlay">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>Context here</p>
      </div>
    </div>
  </div>
</div>
<!-- calling -->

<div class="mobile-call"><a href="tel: 8826815573"><i class="fa fa-phone"></i></a></div>

<!-- whatsap -->

<div class="whatsap">
    <a href="whatsapp://send?phone=+91  8826815573&amp;text=Hi, I contacted you Through your website.">
        <img src="images/whatsapp.png">
    </a>
</div>
    <!-- <div class="loader">
        <div class="preview" style="background: rgba(255, 255,255,0.7) url('images/oval.svg') center center no-repeat; background-size:125px;"></div>
    </div> -->

    <header class="header">
        <div class="top-container">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="hidden-xs col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="call-now text-center">
                                <p><span>Call Now:</span><br><a href="tel: 8826815573"> +91  8826815573</a></p>
                            </div>
                        </div>
                        <div class="hidden-xs col-xs-12 hidden-sm col-sm-3 col-md-4 col-lg-4">
                            <div class="email text-center">
                                <p><span>E-mail:</span><a href="mailto:info@backwardadvisor.com"> info@backwardadvisor.com</a></p>
                            </div>
                        </div>
                        <div class="col-xs-5 col-xs-12 col-sm-3 col-md-2 col-lg-2">
                            <div class="book-appoinment text-right">
                                <a href="" class="btn btn-default" data-toggle="modal" data-target="#myModal">Enquiry Now</a>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade premedi-popup" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Enquiry Now</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <form id="appoinment-form-fields" action="" method="post"  name="myForm" onsubmit="return validateForm()">
                                                    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-l-padding">
                                                        <div class="form-group">
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                <input class="form-control" placeholder="Your Name:" id="name" name="name" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required" />
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-l-padding">
                                                        <div class="form-group">
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                <input class="form-control" placeholder="Your Mobile" id="mobile" name="mobile"  type="text" required="" /><br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-l-padding">
                                                        <div class="form-group">
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                <textarea class="form-control" rows="4" name="msg" placeholder="Message" data-fv-notempty-message="The Message is required"></textarea>
                                                            </div>
                                                        </div>
                                                    </div> -->

                                                    <div class="form-group">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                            <input name="website" type="hidden" value="" /> 
                                                            <input name="loginID" type="hidden" value="12" /> 
                                                            <input type="submit" value="submit" name="submit2" class="btn btn-default appoinment-form-submit" onclick="phonenumber(document.myForm.mobile)">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky_navigation_wrapper" class="navbar-primary">
                <div id="sticky_navigation" class="sticky_navigation">
                    <!-- <div class="top-search" style="display:none;">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-search-alt-1"></i></span>
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-addon close-search"><i class="icofont icofont-ui-close"></i></span>
                            </div>
                        </div>
                    </div> -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 site-logo-part">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                    <div class="logo-image">
                                        <a href="index.php" class="brand js-target-scroll">
                                            <img class="aaa" src="images/logo.png">
                                        </a>
                                    </div>
                                    <!-- <div class="search-part">
                                        <div class="menu-search hidden-lg hidden-md">
                                            <a href="#"><i class="icofont icofont-search-alt-1"></i></a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 menu-part">
                                <div class="collapse navbar-collapse" id="navbar-collapse">
                                    <ul class="nav navbar-nav underline"> 
                                        <li class=" active "> <a href="index.php" title="HOME" id="home">HOME</a></li>
                                        <li class=""> <a href="#about" title="ABOUT" id="about-page">ABOUT</a></li>
                                        <li class=""> <a href="#service" title="ABOUT" id="about-page">SERVICES</a></li>
                                        <!-- <li class=""> <a href="#service" title="HOME" id="home">Clients</a></li>
                                        <li class=""> <a href="#service" title="HOME" id="home">FAQ'S</a></li> -->
                                        <li class=""> <a href="#contact" title="CONTACT" id="contact">CONTACT US</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <div class="content">

        <!-- bnner -->
            
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>

   
    </ol>
    
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
       

 <div class="item">
       
        <img src="images/Indian-Trademark-Law-in-1280x720.jpg" alt="GST" class="mm1" style="width:100%; height:430px;">
         
        <div class="carousel-caption">
         
          <p>
              
            <a href="#" data-toggle="modal" data-target="#myModal" class="hidden-xs btn btn-default fadeInUp wow" data-wow-duration="1s">Enquire Now</a>
          </p>
        </div>
      </div>
      <div class="item">
        <img src="images/gst-1024x444.png" alt="GST"  class="mm1" style="width:100%; height:430px;">
        <div class="carousel-caption">
         
          <p>
            <a href="#" data-toggle="modal" data-target="#myModal" class="hidden-xs btn btn-default fadeInUp wow" data-wow-duration="1s">Enquire Now</a>
          </p>
        </div>
      </div>
      
      <div class="item">
        <img src="images/income-tax-4097292_1280.jpg" alt="GST" class="mm1" style="width:100%; height:430px;">
        <div class="carousel-caption">
         
          <p>
            <a href="#" data-toggle="modal" data-target="#myModal" class="hidden-xs btn btn-default fadeInUp wow" data-wow-duration="1s">Enquire Now</a>
          </p>
        </div>
      </div>


      
      <div class="item">
        <img src="images/spaghetti-2931846_1920.jpg" alt="GST" class="mm1" style="width:100%; height:430px;">
        <div class="carousel-caption">
         
          <p>
            <a href="#" data-toggle="modal" data-target="#myModal" class="hidden-xs btn btn-default fadeInUp wow" data-wow-duration="1s">Enquire Now</a>
          </p>
        </div>
      </div>

      <div class="item active">
        <img src="images/FSSAI BANNER.png" alt="Fssai" class="mm1" style="width:100%; height:430px;">
        <!-- <div class="carousel-caption">
          <h3>FSSAI</h3>
          <p>
            <a href="#" data-toggle="modal" data-target="#myModal" class="hidden-xs btn btn-default fadeInUp wow" data-wow-duration="1s">Enquire Now</a>
        </p>
        </div> -->
      </div>


 <div class="item">
        <img src="images/salad-2068220_1280.jpg" alt="Fssai" class="mm1" style="width:100%; height:430px;">
        <!-- <div class="carousel-caption">
          <h3>FSSAI</h3>
          <p>
            <a href="#" data-toggle="modal" data-target="#myModal" class="hidden-xs btn btn-default fadeInUp wow" data-wow-duration="1s">Enquire Now</a>
        </p>
        </div> -->
      </div>

    </div>
        
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<style>
    @media only screen and (max-width: 767px) {
  .ss{
      font-size: 22px;
      line-height: 22px;
  }
  
  
}
</style>
  <!-- about -->
                    <div class="container" style="    margin-top: 25px;">
      <div class="top-text text-center">
                                <h2 class="text-center">Get Your Fssai License</h2>
                                <div class="divider">
                                    <span><i class="fa fa-handshake-o" aria-hidden="true"></i></span>
                                </div>
                            </div>
    <div class="row">
       
         <div class="col-md-6">
            <img src="images/Pink and White Grid Food Journal Book Cover .jpg"  style="height: 809px;" class="img-responsive mm2"/>
        </div>
         <div class="col-md-6">
            <img src="images/Red Simple Food Journal Book Cover.jpg"class="img-responsive mm2"/>
        </div>
    </div>
</div>
 
            <section class="about-wrap "id="about-page" style="background: #0aa39724;"> 
    <div class="container" >
        <h3 class="text-center ss" style="font-family: 'Merriweather', serif;">Welcome To Backward Legal Advisor</h3><br><br>
         <div class="row">

             <div class="col-md-6">
                  <div class="wrp-contnt">
                      
                      <p style="font-family: 'Merriweather', serif;">Backward legal advisor is a platform to simplify business - related matters.We are committed to helping startups and small business owners in solving legal compliance related to starting and running their business our mission is to provide good and affordable services to clients.</p><br>
                      <p style="font-family: 'Merriweather', serif;">Our slogan is All business solution under one roof. We provide services like GST,Income Tax,Fssai,IEC(Import/Export Certificate,MSME Registration, Shop and establishment License .we provide quick and good services to everyone.</p><br>
                      <p style="font-family: 'Merriweather', serif;">We have a team of experienced Chartered Accountant,company secretaries, Advocates and Accountants to offer effective financial solutions and advise. Our team having experience of more than 5 years in the consultancy field .We offer services in New Delhi, Gurugram, noida and other major cities in India.
</p>
                  </div>
             </div>
             <div class="col-md-6">
                 <div class="col-md-3">
                     <img src="images/office-1209640_640.jpg" class="is" style="width: 262px;
    height: 328px;" />
                 </div>
                 
                 <div class="col-md-3">
                     <img src="images/women-following-recipe-cooking.jpg" class="rm" style="width: 262px;
    height: 328px;margin-left:149px;" />
                 </div>
                
             </div>
          
    </div>
 </section>
 
 <section id="our-services" class="our-services">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <div class="top-text">
                                <h2>OUR SERVICES </h2>
                                <div class="divider">
                                    <span><i class="fa fa-handshake-o" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="services-box text-center">
                                <img src="images/gst.jpeg">
                                 <div class="opop opop4" style="padding: 11px 163px;">
                                <h4 style"color:white;">GST</h4>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="services-box text-center">
                                <img src="images/fssai.png">
                                <div class="opop opop3" style="padding: 5px 133px;">
                                <h4>FSSAI License</h4>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="services-box text-center" >
                                <img src="images/TRADEMARK.jpeg" style="height: 269px;">
                                <div class="opop" style="padding: 5px 133px;">
                                <h4>Trade Mark</h4>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="services-box text-center" >
                                <img src="images/INCOME TAX.jpeg" style="height: 270px;">
                                <div class="opop" style="padding: 5px 133px;">
                                <h4>Income Tax</h4>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="services-box text-center">
                                <img src="images/MSME.jpeg">
                                <div class="opop" style="padding: 11px 155px;">
                                <h4>MSME</h4>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="services-box text-center">
                                <img src="images/audit.jpg" style="height: 270px;">
                                <div class="opop" style="padding: 11px 143px;">
                                <h4>Auditing</h4>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="services-box text-center">
                                <img src="images/COMPANY INCORPOTATION.jpeg" style="height: 270px;">
                                <div class="opop" style="padding: 5px 133px;">
                                <h4>Company Incorporation</h4>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="services-box text-center">
                                <img src="images/IEC CERTIFICATE.jpeg">
                                <div class="opop opop2" style="padding: 5px 133px;">
                                <h4>Cetification Of IEC</h4>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="services-box text-center">
                                <img src="images/download.jpg">
                                <div class="opop opop1" style="padding: 5px 133px;">
                                <h4>Company Registration</h4>
                                
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section> 
            <style>
               .bi{
                   background-image: url('images/med-food-hero.jpg');
               } 
            </style>

            <!-- our Services ends -->
            <!-- Appoinment starts -->
            <section id="appoinment" class="appoinment bi" >
                <div class="container">
                    <div class="row"><br>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 col-lg-offset-2  text-center">
                            <div class="appoinment-form fadeIn wow" data-wow-duration="1s">
                                <h2>Enquiry Now</h2>
                             
                                <div class="divider">
                                    <span><i class="icofont icofont-bed-patient"></i></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <form id="appoinment-form-fields" action="" method="post" >
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-l-padding">
                                                <div class="form-group">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <input class="form-control" placeholder="Your Name:" name="name" type="text"  required="" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <input class="form-control" placeholder="Your Mobile No." name="mobile" pattern="[789][0-9]{9}" type="text" required="">

                                                         <input class="form-control" placeholder="Email"  name="email" type="email" required=""  />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                       <textarea class="form-control" rows="4" name="msg" placeholder="Message" ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <input name="website" type="hidden" />
                                                        <input name="loginID" type="hidden" value="12" /> 
                                                        <input type="submit" value="submit" name="submit1" class="btn btn-default appoinment-form-submit">
                                                    <!-- <button type="submit" class="btn btn-default appoinment-form-submit">Submit</button> -->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                  </div>
                            </div>
                        </div>
                     </div>
                </div>
            </section>
            <!-- Appoinment ends -->

            <!-- call -->
 
            <!-- //call -->
    
        </main>
    </div>
    <section id="footer" class="footer">
        <div class="footer-widget">
            <div class="container">
                <div class="row ">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-responsive-media">
                        <h4 class="icon-head">About Us</h4>
                        <div class="spw"></div>
                        <div class="footer-about">
<p>Backward legal advisor is a platform to simplify business - related matters.We are committed to helping startups and small business owners in solving legal compliance related to starting and running their business our mission is to provide good and affordable services to clients.
 
</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-responsive-media">
                        <h4 class="icon-head">Quick Links</h4>
                        <div class="spw"></div>
                                <div class="footer-nav-list">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Home</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> About us</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Services</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Clients</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Contact us</a></li>
                                        
                                    </ul>
                                </div>
                           
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 footer-responsive-media">
                        <h4 class="icon-head">Contact Information</h4>
                        <div class="spw"></div>
                        <ul class="addresss">
                                <span><i class="icofont icofont-location-pin"></i></span>
                                <li>Office No.38-A, First Floor, G.D.A Commercial Complex, Near Electricity Office Indrapuram, Ghaziabad-201010</li>
                                <span><i class="icofont icofont-ui-message"></i></span>
                                <li><a href="mailto:info@backwardadvisor.com">  info@backwardadvisor.com </a></li>
                                <span><i class="icofont icofont-phone"></i> </span>
                                <li><a href="tel:">+91  8826815573 </a></li>
                            </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-container">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" style="color:white;">Backwardadvisor © 2020. All rights reserved.<br>

  <a href="https://nexustechnologies.info/" style="color: #2cbdf1;">Design by:Nexus Technologies</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<script type="text/javascript">
(function () {
var options = {
whatsapp: "91 8826815573", // WhatsApp number
button_color: "#129BF4", // Color of button
position: "right", // Position may be 'right' or 'left'
order: "whatsapp,email,facebook,sms,call", // Order of buttons
};
var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>


    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/formValidation.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/premedi_custom.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>


</body>



</html>
