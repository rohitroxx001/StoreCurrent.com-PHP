<html>
    <head>
        <title>
            
        </title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <style>
          .carousel-control.right , .carousel-control.left {
                background-image:none;
              }
               
        </style>
        
    </head>
    
    <body style="background-color:white;">
    <?php include 'header.php'; ?>
    <div style="padding-top:70px;" class="container-fluid">  
        
        <div style=" height:430px; width:100%; padding:0px; margin:0px; background-color: ;"class="col-lg-12 ">

            <div style=" padding: 0px; margin: 0px; padding:0px; margin:0px; " id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div style="padding:0px; margin:0px;"class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div style="padding:0px; margin:0px;" class="col-lg-12">
                            <?php
                
                                require 'hconn.php';
                                $query = "select * from article where categoryid=101 order by count desc";
                                $result = mysql_query($query);

                                if($row = mysql_fetch_row($result)){

                            ?>
                            <a href="mensarticle.php/?maker=<?php echo $row[0];?>" /><img style="width:100%; height:430px; padding: 0px; margin: 0px;" src="<?php echo $row[4];?>" class="img-responsive" alt="Responsive image">
                            
                                <div class="carousel-caption">
                                    <?php if($row[1]==1){?>
                                    <h5>Mens style</h5>
                                    <?php } elseif($row[1]==2){?>
                                    <h5>Womens style</h5>
                                    <?php } ?>
                                    <h1><?php echo $row[2];?> </h1>
                                    <p><?php echo $row[5];?> </p>
                                </div>
                            </a>
                            <?php }?>
                        </div>
                        
                    </div>

                    <div class="item">
                        <div style="padding:0px; margin:0px;" class="col-lg-12">
                            <?php
                
                                require 'hconn.php';
                                $query = "select * from article where categoryid=102 order by count desc";
                                $result = mysql_query($query);

                                if($row = mysql_fetch_row($result)){

                            ?>
                            <a href="mensarticle.php/?maker=<?php echo $row[0];?>" /><img style="width:100%; height:430px; padding: 0px; margin: 0px;" src="<?php echo $row[4];?>" class="img-responsive" alt="Responsive image">
                            
                                <div class="carousel-caption">
                                    <?php if($row[1]==1){?>
                                    <h5>Mens style</h5>
                                    <?php } elseif($row[1]==2){?>
                                    <h5>Womens style</h5>
                                    <?php } ?>
                                    <h1><?php echo $row[2];?> </h1>
                                    <p><?php echo $row[5];?> </p>
                                </div>
                            </a>
                            <?php }?>
                        </div>
                        
                    </div>


                 </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        
    </div>
    <div class="container-fluid">
        <div class="row">    
            <div style=background-color: ;  " class=" col-lg-12">  
                
                <div style="background-color: " class=" col-lg-12"> 
                    <div style="border-width: 3px;  border-color:#808080;" class="page-header">
                        <h3><strong>MENS</strong></h3>
                    </div>
                    <h5>TOP WEAR</h5>
                    <div style="padding:10px; padding-left:0px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px; padding-left:0px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px; float:right; " class="col-lg-4 col-lg-offset-8">
                        
                         <p style="float:right; ">View More</p>
                    </div>
                    <h5>BOTTOM WEAR</h5>
                    <div style="padding:10px; padding-left:0px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px; padding-left:0px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px; float:right; " class="col-lg-4 col-lg-offset-8">
                        
                         <p style="float:right; ">View More</p>
                    </div>
                    <h5>FOOT WEAR</h5>
                    <div style="padding:10px; padding-left:0px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px; padding-left:0px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px; float:right; " class="col-lg-4 col-lg-offset-8">
                        
                         <p style="float:right; ">View More</p>
                    </div>
                    
                </div>
                <div style="background-color: " class=" col-lg-12"> 
                    <div style="border-width: 3px;  border-color:#808080;" class="page-header">
                        <h3><strong>MENS</strong></h3>
                    </div>
                    <h5>TOP WEAR</h5>
                    <div style="padding:10px; padding-left:0px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px; padding-left:0px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px; float:right; " class="col-lg-4 col-lg-offset-8">
                        
                         <p style="float:right; ">View More</p>
                    </div>
                    <h5>BOTTOM WEAR</h5>
                    <div style="padding:10px; padding-left:0px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px; padding-left:0px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px; float:right; " class="col-lg-4 col-lg-offset-8">
                        
                         <p style="float:right; ">View More</p>
                    </div>
                    <h5>FOOT WEAR</h5>
                    <div style="padding:10px; padding-left:0px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px; padding-left:0px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px;" class="col-lg-2">
                        <img style="width:100%; height:330px;" src="http://freekaamaal.com/wp-content/uploads/Untitled6949.jpg" class="img-rounded" alt="Responsive image">
                    </div>
                    <div style="padding:10px; float:right; " class="col-lg-4 col-lg-offset-8">
                        
                         <p style="float:right; ">View More</p>
                    </div>
                    
                </div>

            </div>


        </div>
    </div>
        
   
    
   
        <?php include "footer.php"; ?>
</body>
</html>