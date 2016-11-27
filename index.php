<html>
    <head>
        <title>
            
        </title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <!--bx slider bottom-->
        
        <script src="jquery.bxslider/jquery.bxslider.min.js"></script>
        <!-- bxSlider CSS file -->
        <link href="jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
        
        <style>
            //carousel background image remove
                .carousel-control.right , .carousel-control.left {
                  background-image:none;
                }
            //image zoom effect
                .pizza { transition: all .2s ease-in-out; }
                .pizza:hover { transform: scale(1.1); }
        
            //rounded corner carousel   
            
            

            //product shop now option
                figure { 
                  display: block; 
                  position: relative; 
                  overflow: hidden; 
                }

                figcaption { 
                  position: absolute; 
                  background: rgba(0,0,0,0.75); 
                  color: white; 
                  padding: 10px 20px; 
                }
                figcaption { 
                  position: absolute; 
                  background: rgba(0,0,0,0.75); 
                  color: white; 
                  padding: 10px 20px; 

                  opacity: 0;
                  bottom: 0; 
                  left: -30%;
                  -webkit-transition: all 0.6s ease;
                  -moz-transition:    all 0.6s ease;
                  -o-transition:      all 0.6s ease;
                }

                figure:hover figcaption {
                  opacity: 1;
                  left: 0;
                }
                
               
                
                .para3{
                
                z-index: -4;
               width:100%;
               text-align:center;
               padding:5px;
               padding-top: 8px;
               font-family:lato;
                font-weight: bold;  
              
               
               height:67px;
               overflow: hidden;
                color:black;
                background-color: black;
               color:white;
            }
            .image3{
                width:100%;
                height:175px;
                overflow:hidden;
                
                 background-position:center;
                transition: all 1s ease;
          -moz-transition: all 1s ease;
          -ms-transition: all 1s ease;
          -webkit-transition: all 1s ease;
          -o-transition: all 1s ease;
                
            }
            .figure3{
                overflow:hidden;
            }
            .figure3:hover .image3{
                
                -webkit-transform:scale(1.1,1.1);
               
               
  
            }
        </style>
        <script>
            $(document).ready(function(){
 $('.bxslider').bxSlider({

   minSlides: 3,
  maxSlides: 4,
  pager:false,
  slideWidth: 300,
  slideMargin: 10
});
});


        </script>
        
    </head>
    
    <body style="background-color:white;">
    <?php include 'header.php'; ?>
        
        
              <div style="padding-top:55px; " class="container-fluid">
            <div style="padding-left:10px;" class="row">
               
                <div class="col-lg-12">
                    <ul class="bxslider">
                    <?php
                
                            
                            require 'hconn.php';
                            $query = "select * from carticle where matchingid=3 order by count desc";
                            $result = mysql_query($query);
                            while($row = mysql_fetch_row($result)){

                        ?>
                            <div  style="padding:1px;"  class="col-lg-3">
                                <a style="text-decoration: none;" href="http://localhost/public_html/page/viewarticle.php/?maker=<?php echo $row[51];?>">
                                    <div class="figure1">
                                            <img class="image1" src="<?php echo $row[1];?>"/>
                                            <p style="font-family: 'Raleway', sans-serif;" class="para1"><?php echo $row[2];?></p>

                                    </div>
                                </a>
                            </div>    
                         <?php  } ?>
                        
                    </ul>
                    
                 </div>
            </div>
        </div>
    <div style="padding-top:17px;" class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div style="position:relative" class="image">
                    <?php
                
                                require 'hconn.php';
                                $query = "select * from article where categoryid=200 order by count desc";
                                $result = mysql_query($query);

                                if($row = mysql_fetch_row($result)){

                    ?>
                        <img  style="width:100%; height:200px;" src="<?php echo $row[4];?>"/>
                        
                    <?php } ?>
                    <div style="position:absolute; top:0px;">
                    <?php
                
                                require 'hconn.php';
                                $query = "select * from article where categoryid=201 order by count desc";
                                $result = mysql_query($query);

                                if($row = mysql_fetch_row($result)){

                    ?>
                            <a href="<?php echo $row[3];?>" /><img class="pizza" style=" margin-left:15px; padding-top: 15px; padding-bottom: 15px;width:170px; height:200px;" src="<?php echo $row[4];?>"/>
                            </a>
                    <?php } ?>
                    <?php
                
                                require 'hconn.php';
                                $query = "select * from article where categoryid=202 order by count desc";
                                $result = mysql_query($query);

                                if($row = mysql_fetch_row($result)){

                    ?>
                            <a href="<?php echo $row[3];?>" /><img class="pizza" style=" margin-left:15px; padding-top: 15px; padding-bottom: 15px;width:170px; height:200px;" src="<?php echo $row[4];?>"/>
                            </a>
                    <?php } ?>
                    <?php
                
                                require 'hconn.php';
                                $query = "select * from article where categoryid=203 order by count desc";
                                $result = mysql_query($query);

                                if($row = mysql_fetch_row($result)){

                    ?>
                            <a href="<?php echo $row[3];?>" /><img class="pizza" style=" margin-left:15px; padding-top: 15px; padding-bottom: 15px;width:170px; height:200px;" src="<?php echo $row[4];?>"/>
                            </a>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    </div>


  
        <div class="container-fluid">
            <div style="padding-left:10px;" class="row">
                <div class="page-header">
                    <h3 style="font-family: 'Raleway', sans-serif;">Cricket Stories</h3>
                </div>
                <div class="col-lg-12">
                    <ul class="bxslider">
                    <?php
                
                            
                            require 'hconn.php';
                            $query = "select * from carticle where matchingid=4 order by count desc";
                            $result = mysql_query($query);
                            while($row = mysql_fetch_row($result)){

                        ?>
                            <div  style="padding:1px;"  class="col-lg-3">
                                <a style="text-decoration: none;" href="http://localhost/public_html/page/viewarticle.php/?maker=<?php echo $row[51];?>">
                                    <div class="figure3">
                                            <img class="image3" src="<?php echo $row[1];?>"/>
                                            <p style="font-family: 'Raleway', sans-serif;" class="para3"><?php echo $row[2];?></p>

                                    </div>
                                </a>
                            </div>    
                         <?php  } ?>
                        
                    </ul>
                    
                 </div>
            </div>
        </div>
        
        
        <div class="container-fluid">
            <div style="padding-left:10px;" class="row">
                <div class="page-header">
                    <h3 style="font-family: 'Raleway', sans-serif;">Desi Stories</h3>
                </div>
                <div class="col-lg-12">
                    <ul class="bxslider">
                    <?php
                
                            
                            require 'hconn.php';
                            $query = "select * from carticle where matchingid=5 order by count desc";
                            $result = mysql_query($query);
                            while($row = mysql_fetch_row($result)){

                        ?>
                            <div  style="padding:1px;"  class="col-lg-3">
                                <a style="text-decoration: none;" href="http://localhost/public_html/page/viewarticle.php/?maker=<?php echo $row[51];?>">
                                    <div class="figure3">
                                            <img class="image3" src="<?php echo $row[1];?>"/>
                                            <p style="font-family: 'Raleway', sans-serif;" class="para3"><?php echo $row[2];?></p>

                                    </div>
                                </a>
                            </div>    
                         <?php  } ?>
                        
                    </ul>
                    
                 </div>
            </div>
        </div>
        <div class="container-fluid">
            <div style="padding-left:10px;" class="row">
                <div class="page-header">
                    <h3 style="font-family: 'Raleway', sans-serif;">Tech Stories</h3>
                </div>
                <div class="col-lg-12">
                    <ul class="bxslider">
                    <?php
                
                            
                            require 'hconn.php';
                            $query = "select * from carticle where matchingid=6 order by count desc";
                            $result = mysql_query($query);
                            while($row = mysql_fetch_row($result)){

                        ?>
                            <div  style="padding:1px;"  class="col-lg-3">
                                <a style="text-decoration: none;" href="http://localhost/public_html/page/viewarticle.php/?maker=<?php echo $row[51];?>">
                                    <div class="figure3">
                                            <img class="image3" src="<?php echo $row[1];?>"/>
                                            <p style="font-family: 'Raleway', sans-serif;" class="para3"><?php echo $row[2];?></p>

                                    </div>
                                </a>
                            </div>    
                         <?php  } ?>
                        
                    </ul>
                    
                 </div>
            </div>
        </div>
        <div class="container-fluid">
            <div style="padding-left:10px;" class="row">
                <div class="page-header">
                    <h3 style="font-family: 'Raleway', sans-serif;">Knowledge Stories</h3>
                </div>
                <div class="col-lg-12">
                    <ul class="bxslider">
                    <?php
                
                            
                            require 'hconn.php';
                            $query = "select * from carticle where matchingid=7 order by count desc";
                            $result = mysql_query($query);
                            while($row = mysql_fetch_row($result)){

                        ?>
                            <div  style="padding:1px;"  class="col-lg-3">
                                <a style="text-decoration: none;" href="http://localhost/public_html/page/viewarticle.php/?maker=<?php echo $row[51];?>">
                                    <div class="figure3">
                                            <img class="image3" src="<?php echo $row[1];?>"/>
                                            <p style="font-family: 'Raleway', sans-serif;" class="para3"><?php echo $row[2];?></p>

                                    </div>
                                </a>
                            </div>    
                         <?php  } ?>
                        
                    </ul>
                    
                 </div>
            </div>
        </div>
        
        
        
        
    
    <div style="padding-bottom:50px;" class="container-fluid">
        <div class="page-header">
            <h3>OUR PARTNERS</h3>
            
        </div>
        <div class="row">
                <div class="col-lg-12">
                    <?php 



                                    require 'hconn.php';
                                    $query = "select * from article where categoryid=300 order by count desc";
                                    $result = mysql_query($query);

                                    while($row = mysql_fetch_row($result)){

                        ?>
                    <div style="padding:0px; margin:0px; " class="col-lg-1">
                    
                            <a href="<?php echo $row[3];?>" > <img  style="width:100%; height:100px; padding:5px;" src="<?php echo $row[4];?>"/>
                            </a>
                    
                    </div>
                    <?php } ?>
                
                </div>
                    
            </div>
    </div>
        
        
   
    
   
        <?php include "footer.php"; ?>
</body>
</html>