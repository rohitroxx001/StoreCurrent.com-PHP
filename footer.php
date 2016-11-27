<!-- effect for popup -->

    <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="socialicons/bootstrap-social.css" />
    <link href="socialicons/assets/css/bootstrap.css" rel="stylesheet">
    <link href="socialicons/assets/css/font-awesome.css" rel="stylesheet">
    <link href="socialicons/assets/css/docs.css" rel="stylesheet" >

    <link href="socialicons/bootstrap-social.css" rel="stylesheet" >
    <script src="js/modernizr.custom.js"></script>
    <div class="md-modal md-effect-11" id="modal-11" style="background-color: transparent; border:0; padding: 0px; margin:0px; " >
        <div class="md-content" style="background-color: transparent; border:0; padding: 0px; margin:0px; " >
            <div class="modal-body" style="float:center; background-color: transparent; padding: 0px; margin:0px; ">
                <div id="loginbox"  class="mainbox col-lg-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" style=" border:0; padding: 0px; margin:0px; " >                    
                    <div class="panel panel-info" style="background-color: transparent; border:0; padding: 0px; margin:0px;"   >
                        <div  class="col-lg-6" style="float:left; text-align: left;margin: 0px; padding:0px; ">
                        <h4 style="text-align: left; margin:0px; margin-top:20px; font-size: 160%;color:gray; padding:0px; padding-bottom: 20px;">Sign In to your account</h4>
                        </div>
                        <div  class="col-lg-6" style="float:left; text-align: left;margin: 0px; padding:0px; " >
                        </div>     
                        <div class="panel-body" style="border:0; padding: 0px; margin:0px; "  >
                            
                            <form >   
                                <div class="form-group">

                                    <input style="background-color: black; "type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">

                                    <input style="background-color: black"  type="password" class="form-control"  placeholder="Password">
                                </div>

                                <button style="background-color: black; float:left;" type="submit" class="btn btn-default">SIGN IN</button>
                                <div style="border:0; margin:0px; padding:0px" class="form-group">
                                    <div style="border:0; margin:0px; padding:0px"class="col-md-12 control">
                                        <div style="margin:0px; padding:0px margin-top: 20px; " >
                                            <h5 style="color:darkgray;">Don't have a Storecurrent account? </h5>
                                            <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            <button style="background-color: black; float:left;" type="button" class="btn btn-default">SIGN UP </button>

                                            </a>
                                        </div>
                                    </div>
                                </div>  
                                <div style="margin:0px; padding:0px;" class="col-lg-12">
                                     <h4 style="text-align: left; margin:0px; margin-top:20px; font-size: 160%;color:gray; padding:0px; padding-bottom: 20px;">Sign in with:</h4>
                                </div>
                                
                                <div class="col-lg-6">
                                       <a href="http://storecurrent.com/page/test.php" class="btn btn-block btn-social btn-facebook">
                                        <span class="fa fa-facebook"></span> Sign in with Facebook
                                      </a>
                                </div>
                            </form> 
                        </div>
                    </div>                     
                </div>  
                          
                <div id="signupbox"  style="display:none; border:0; padding: 0px; margin:0px;"   class="mainbox col-lg-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                    <div style="background-color: transparent; border:0; padding: 0px; margin:0px;  class="panel panel-info" >
                        <div style="float:left; text-align: left;margin: 0px; padding:0px; " class="col-lg-6">
                        <h4 style="text-align: left; margin:0px; margin-top:20px; font-size: 160%;color:gray; padding:0px; padding-bottom: 20px;">Create an account</h4>
                        </div>
                        <div style="float:left; text-align: left;margin: 0px; padding:0px; " class="col-lg-6">
                        </div>     
                        <div style="background-color: ; border:0; padding: 0px; margin:0px; " class="panel-body" >
                            
                            <form >   
                                <div class="form-group">
                                    <input style="background-color: black; "type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">

                                    <input style="background-color: black"  type="password" class="form-control"  placeholder="Password">
                                </div>
                                <div class="form-group">

                                    <input style="background-color: black"  type="password" class="form-control"  placeholder="Confirm Password">
                                </div>
                                <button style="background-color: black; float:left;" type="submit" class="btn btn-default">SIGN UP</button>
                                <div style="border:0; margin:0px; padding:0px" class="form-group">
                                    <div style="border:0; margin:0px; padding:0px"class="col-md-12 control">
                                        <div style="margin:0px; padding:0px margin-top: 20px; " >
                                            <h5 style="color:darkgray;">By clicking SIGN UP, you agree to our <span style="color:white;">Terms and Conditions</span> and <span style="color:white;">Privacy Policy</span></h5>
                                            <a href="#" onClick="$('#loginbox').show(); $('#signupbox').hide()">
                                            <button style="background-color: black; float:left;" type="button" class="btn btn-default">SIGN IN</button>

                                            </a>
                                        </div>
                                    </div>
                                </div>  
                                <div style="margin:0px; padding:0px;" class="col-lg-12">
                                     <h4 style="text-align: left; margin:0px; margin-top:20px; font-size: 160%;color:gray; padding:0px; padding-bottom: 20px;">Sign up with:</h4>
                                </div>
                               
                                <div class="col-lg-6">
                                       <a href="http://storecurrent.com/page/test.php" class="btn btn-block btn-social btn-facebook" >
                                        <span class="fa fa-facebook"></span> Sign up with Facebook
                                      </a>
                                </div>

                            </form> 
                        </div>                     
                    </div>  
                </div>
            </div>
                            
        </div>
    </div>
                
		
		
    
    <button style="position:fixed; border-radius: 50px; bottom:0px; margin-bottom:5px; margin-right: 5px;  padding:10px; border:0; right:0px; z-index: 2; color:white; background-color: black;" class="md-trigger" data-modal="modal-11"><strong>LOGIN</strong></button>
                
    <div class="md-overlay"></div><!-- the overlay element -->

    
    <script src="js/classie.js"></script>
    <script src="js/modalEffects.js"></script>

    
    
    
    
    
    
    
    
    
    
<!-- Footer -->
    <div style="background-color:black" class="container-fluid">
    <div style="background-color:black; "  class="container">
        <div class="row">
            <div style="margin:0px; padding:0px;" class="col-lg-12">
                <div style="background-color:black" class="col-lg-8">
                    <div style="background-color:black; color:white; " class="col-lg-3">
                        <div class="page-header">
                            <h5><strong>INFORMATION</strong></h5>
                        </div>
                        <p>Advertise with us</p>
                        <p>Contact Us</p>
                        <p>Privacy & Cookies Policy</p>
                        <p>Terms & Conditions</p>
                        <p>Meet The Team</p>
                        
                    </div>
                    <div style="background-color:black; color:white;"  class="col-lg-3">
                        <div class="page-header">
                            <h5><strong>STORECURRENT</strong></h5>
                        </div>
                        <p>Mens Fashion</p>
                        <p>Womens Fashion</p>
                        <p>Style Icons</p>
                        <p>Food</p>
                        <p></p>
                        
                    </div>
                    <div style="background-color:black; color:white;"  class="col-lg-3">
                        <div class="page-header">
                            <h5><strong>SAVE MONEY</strong></h5>
                        </div>
                        <p>Discount Codes</p>
                        <p>Sale Alerts</p>
                        <p>Free Recharge </p>
                      
                        
                        
                    </div>
                    
                    <div style="background-color:black; color:white;"  class="col-lg-3">
                        <div class="page-header">
                            <h5><strong>OUR PARTNERS</strong></h5>
                        </div>
                        <p>Advertise with us</p>
                        <p>Contact Us</p>
                        <p>Privacy & Cookies Policy</p>
                        <p>Terms & Conditions</p>
                        <p>Meet The Team</p>
                        
                    </div>
                    
                    <div style="padding-top: 20px;" class="col-lg-5">
                        <img src="Untitled.png" height="20px" alt="..." class="img-rounded">
                    </div>
                    <div style="padding-top: 20px;" class="col-lg-7">
                        <p style="font-size: 80%; color:white;">Copyright &copy; Storecurrent 2015 - 2016. All Rights Reserved.
Storecurrent is a place to get fashion and deals for daily life .
Storecurrent.com: Men's & Women's Fashion Tips & Complete Style Guide Since 2015.</p>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div style="background-color:black" class="col-lg-12">
                        <hr style="width: 1px; background-color: white; height:35%;"/>
  
                    </div>
                    
                </div>
                <div style="background-color:black" class="col-lg-3">
                    <div style="background-color:black" class="col-lg-12">
                        <div class="page-header">
                            <h5 style="color:white;"><strong>CONTACT WITH STORECURRENT</strong>
                        </div>
                        <div class="col-lg-3">
                             <a class="btn btn-social-icon btn-facebook">
                                <span class="fa fa-facebook"></span>
                             </a>
                        </div>
                        <div class="col-lg-3">
                             <a class="btn btn-social-icon btn-twitter">
                                <span class="fa fa-twitter"></span>
                             </a>
                        </div>
                        <div class="col-lg-3">
                             <a class="btn btn-social-icon btn-instagram">
                                <span class="fa fa-instagram"></span>
                             </a>
                        </div>
                        <div class="col-lg-3">
                             <a class="btn btn-social-icon btn-instagram">
                                <span class="fa fa-google"></span>
                             </a>
                        </div>
                        
                    </div>
                    <div style="background-color:black" class="col-lg-12">
                        <div class="page-header">
                            <h5 style="color:white;"><strong>STORECURRENT NEWSLETTER</strong>
                        </div>
                        <p style="color:white;">Sign up to our newsletter to get the latest articles, lookbooks, street style & fashion voucher codes direct to your inbox:</p>
  
                    </div>
                </div>
                <div style="background-color:black; padding:0px; margin:0px;" class="col-lg-12">
                    <hr>
                </div>
            </div>
            
        </div>
        
        
    </div>
    
</div>
    
    
                