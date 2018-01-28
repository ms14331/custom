 
<!-- <!DOCTYPE html> -->
<html>
<title><?php wp_title(''); ?></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="<?php echo JS; ?>/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css"><!-- STEPHEN -->
<link href="//db.onlinewebfonts.com/c/ffd0dcc47a9002be89cc7f900d4e144f?family=AvenirNextLTW01-UltraLight" rel="stylesheet" type="text/css"/><!-- WEB FONT -->
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo ( 'template_url' ); ?>/isset/css/index.css" /> 
 
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo ( 'template_url' ); ?>/css/custom-michael.css" /> 
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo ( 'template_url' ); ?>/css/custom-mike.css" /> 

    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo ( 'template_url' ); ?>/css/custom-list.css" />
<style>/*STEPHENR*/


 .brandNames > li{
    color:black !important;
 }
 #brandsContent p.brandShortInformation{

   font-weight: 900; 
 }

 .modal {
  text-align: center;
  padding: 0!important;
}

.modal:before {
  content: '';
  display: inline-block; 
  vertical-align: middle;
  margin-right: -4px;
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}
.custom-modal-dialog{
 }



</style>

    
<?php wp_head(); ?>
</head>
<body>

<div id="mainWrapper">
    <!--

    <div class="top-info">
        <div class='container'>
            <div class="col-md-6"><p>UP TO 80% OFF MEN AND WOMEN’S APPAREL, SHOES, ACCESSORIES AND HOME GOODS </p></div>
            <div class="col-md-6"><p>CONTACT:  SERVICE@LIFEAFTERPURCHASE.COM - PHONE: 1800 - 238 - 3938</p></div>
        </div>
    </div>
    --> 
 
<!-- Modal -->
<div class="modal fade" id="mySignInModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center  ">
            <div class="modal-content modal-sub-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

                    </button>


                        <h2 class="modal-title font-light text-center"  id="myModalLabel" style="letter-spacing: 0px;">
                            Login to your Account
                        </h2>

                        <p style="text-align: center;font-family: 'AvenirNextLTW01-UltraLight', 'Didot', 'Didot Regular & Avenir Next Medium' !important;color: black;list-style-type: none;font-weight: bolder;margin-right: 16px;color: #000 !important;text-decoration: none;font-size: 16px;letter-spacing: 2px;">
                            Don't have an account?
                            <span>
                                <a class="red" href = "#">
                                    Sign up now
                                </a>
                            </span>
                        </p> 
                </div>
                <div class="modal-body clearfix"> 
                    <form class="text-left">
                        <div class="form-group font-light">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group font-light" >
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div> 
                        <label for="pwd"  class="font-light" style = " color: #ccc !important;  ">I forgot my password!</label>
                        <button type="submit" class="btn btn-primary pull-right btn-sign-in" >LOG IN</button>
                    </form>                     
                </div> 
                <div class="modal-footer clearfix" style="text-align: center;"> 
                        <div class = "modal-fr clearfix" >
                            <p>By creating an account, I accept Life After Purchase's
                                <span>
                                    <a href = "#" class="red">
                                        Terms of Service
                                    </a>
                                </span>
                                and
                                <span>
                                    <a href = "#" class="red">
                                        Privacy Policy
                                    </a>
                                </span>
                            </p>
                        </div> 
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="mySignUpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog custom-modal-dialog vertical-align-center">
            <div class="modal-content modal-custom-width">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span> 
                    </button> 
                        <h1 class="modal-title font-light text-center"  id="myModalLabel" >SIGN UP <i>to</i> CONSIGN</h1>
                            <p style="font-size: 16px; text-align: center;">Life After Purchase is a easy and convenient way to sell your new and used goods.</p>
                </div>
                <div class="modal-body clearfix"> 
                    <form role="form" id="singupForm" class="text-left" method="POST" action="#">  
                        <div class="col-md-6  clearfix">
                            <div class="form-group">
                                <label for="user_name" class="font-light column-margnbotops">First Name</label>
                                <input type="text" name = "user_name" class="form-control" id="user_name" required>
                            </div>
                            <div class="form-group">
                                <label for="user_email" class="font-light column-margnbotops"  >Email</label>
                                <input type="email" name = "user_email" class="form-control" id="user_email" required>
                            </div>
                            <div class="form-group">
                                <label for="promo_code" class="font-light column-margnbotops" >Promo Code</label>
                                <input type="number" name="user_promocode"  class="form-control" id="promo_code">
                            </div>
                        </div>
                        <div class="col-md-6 clearfix">
                                <div class="form-group">
                                        
                                        <label for="usr" class="font-light column-margnbots" >Gender</label> 
                                        
                                        <div class="font-light text-center" style="border: 1px solid #ccc; padding: 9px 0px;">
                                            <label class="checkbox-inline male-gender">
                                                <input type="checkbox"  class = "btn-check " value = "Male" rel = "check1" id = "check1" name="user_gender">Male
                                            </label>
                                            <label class="checkbox-inline female-gender">
                                                <input type="checkbox" class="btn-check "  value = "Female" rel = "check2" id = "check2" name="user_gender">Female
                                            </label>
                                        </div>
                                    </div>
                                 <div class="form-group">
                                    <label for="pwd" class = "font-light column-margnbotops">Password:</label>
                                    <input type="password" name = "user_pass" class="form-control" id="user_password" required >
                                </div>
                                <div class="form-group">
                                     <label for="pwd"  class="font-light" style = "color:#ccc !important;  ">Already have an account?</label>
                                    <button type="submit" class="btn btn-primary pull-right btn-sign-up" >JOIN NOW</button>
                                </div>
                        </div>
                    </form>  
                </div>
                <div class="modal-footer clearfix" style="text-align: center;"> 
                        <div class = "modal-fr clearfix" >
                            <p>By creating an account, I accept Life After Purchase's
                                <span>
                                    <a href = "#" class="red">
                                        Terms of Service
                                    </a>
                                </span>
                                and
                                <span>
                                    <a href = "#" class="red">
                                        Privacy Policy
                                    </a>
                                </span>
                            </p>
                        </div> 
                </div>            
            </div>
        </div>
    </div>
</div>



    <div class="container">  




