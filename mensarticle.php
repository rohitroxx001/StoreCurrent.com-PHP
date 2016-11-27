<html>
    <head>
        <title>

        </title>

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
       
        <style>

            .para2{
                font-weight: bold;
                font-family:lato;
                       // background-color: black;
                        margin:0px;
                        padding:0px;
                            
                position:absolute;
                bottom:5px;
                color:white;
                width:100%;
                transition: all 1s ease;
                -moz-transition: all 1s ease;
                -ms-transition: all 1s ease;
                -webkit-transition: all 1s ease;
                -o-transition: all 1s ease;

                text-align: center;

            }



            .image2{
                width:100%;
                height:175px;
                background-color:red;
                background-position:center;
                transition: all 1s ease;
                -moz-transition: all 1s ease;
                -ms-transition: all 1s ease;
                -webkit-transition: all 1s ease;
                -o-transition: all 1s ease;

            }

            .figure2{
                position: relative;
               //background-color: black;
                overflow:hidden;

            }

            .figure2:hover .image2{

                -webkit-transform:scale(1.1,1.1);
                -webkit-filter: grayscale(80%); /* Chrome, Safari, Opera */
                filter: grayscale(80%);

            }


            .figure2:hover .para2{

                    
                padding-bottom: 10px;
               background-color: black;


            }
            #tabtwo ,tabone{
               background-color: black;
            }
         

        </style>
        <script>
            
           
               function tabtwocolor() {
    
    document.getElementById('tabone').style.backgroundColor = "white";
    document.getElementById('tabone').style.color = "black";
}            
function tabonecolor() {
    
    document.getElementById('tabtwo').style.backgroundColor = "white";
    document.getElementById('tabtwo').style.color = "black";
}             
                
            
        </script>

    </head>

    <body>

        <?php include 'header.php'; ?>
        <div style="padding-top: 45px; padding-bottom: 0; " class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <!-- <div style="padding:0px" class="col-lg-3 col-md-3">
                        <div  style="padding:0px; padding-right:7px;"  class="col-lg-12 ">
                            <h4>FIND PHONE</h4>
                            <ul style="border-radius:0px;" class="nav nav-tabs nav-justified">
                                <li class="active"><a id="tabone" style="background-color: black" data-toggle="tab" onclick="tabonecolor()"; href="#brand">BY BRAND</a></li>
                                <li><a id="tabtwo" onclick="tabtwocolor()"; data-toggle="tab" href="#price">BY PRICE</a></li>

                            </ul>
                            <div style="padding-top:5px;" class="tab-content">
                                <div id="brand" class="tab-pane fade in active">
                                    <div  class="form-group has-feedback">
                                        
                                        <input style="border-radius:0px;" type="text" class="form-control" placeholder="search" />
                                        <i class="glyphicon glyphicon-search form-control-feedback"></i>
                                    </div>

                                </div>
                                <div id="price" class="tab-pane fade">
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div style="padding:2px" class="col-lg-9 col-md-9">
                        <div  style="padding:1px" class="col-lg-4 col-md-4">
                            <a href="http://localhost/public_html/page/viewarticle.php/?maker=<?php echo $row[51]; ?>">
                                <div class="figure2">
                                    <img class="image2" src="http://www.thehindu.com/multimedia/dynamic/02834/Kabali_2834894f.jpg"/>
                                    <p class="para2">Go charger deccan cflfdkajflk;jaflkjsaarge</p>

                                </div>
                            </a>
                        </div>
                        <div  style="padding:1px" class="col-lg-4 col-md-4">
                            <a href="http://localhost/public_html/page/viewarticle.php/?maker=<?php echo $row[51]; ?>">
                                <div class="figure2">
                                    <img class="image2" src="http://www.thehindu.com/multimedia/dynamic/02834/Kabali_2834894f.jpg"/>
                                    <p class="para2">Go charger deccan carge</p>

                                </div>
                            </a>
                        </div>
                        <div  style="padding:1px" class="col-lg-4 col-md-4">
                            <a href="http://localhost/public_html/page/viewarticle.php/?maker=<?php echo $row[51]; ?>">
                                <div class="figure2">
                                    <img class="image2" src="http://www.thehindu.com/multimedia/dynamic/02834/Kabali_2834894f.jpg"/>
                                    <p class="para2">Go charger deccan carge</p>

                                </div>
                            </a>
                        </div>

                        <div  style="padding:1px" class="col-lg-4 col-md-4">
                            <a href="http://localhost/public_html/page/viewarticle.php/?maker=<?php echo $row[51]; ?>">
                                <div class="figure2">
                                    <img class="image2" src="http://www.thehindu.com/multimedia/dynamic/02834/Kabali_2834894f.jpg"/>
                                    <p class="para2">Go charger deccan carge</p>

                                </div>
                            </a>
                        </div>
                        <div  style="padding:1px" class="col-lg-4 col-md-4">
                            <a href="http://localhost/public_html/page/viewarticle.php/?maker=<?php echo $row[51]; ?>">
                                <div class="figure2">
                                    <img class="image2" src="http://www.thehindu.com/multimedia/dynamic/02834/Kabali_2834894f.jpg"/>
                                    <p class="para2">Go charger deccan carge</p>

                                </div>
                            </a>
                        </div>
                        <div  style="padding:1px" class="col-lg-4 col-md-4">
                            <a href="http://localhost/public_html/page/viewarticle.php/?maker=<?php echo $row[51]; ?>">
                                <div class="figure2">
                                    <img class="image2" src="http://www.thehindu.com/multimedia/dynamic/02834/Kabali_2834894f.jpg"/>
                                    <p class="para2">Go charger deccan carge</p>

                                </div>
                            </a>
                        </div>


                    </div>
                </div>


            </div>
        </div>
        <div style=" margin-top: 0px;background-color: ;" class="container">
            
            
                <div style="padding:0px; background-color:;padding-top:0px; margin-top: 0px;" class="col-lg-12">
                    
                    
                    <div style="padding:0px; padding-top:0px; margin-top: 0px; " class="col-lg-5">
                        <div style="border-bottom:solid black 1px;padding-top:0px;  padding-bottom:0px;  margin-top: 0px;"class="page-header">
                    <h4 >LATEST DEVICES</h4>
                    </div>
                        <div style="padding:1px;" class="col-lg-2">
                            <img style="width:100%; height:150px;" src="http://www.thehindu.com/multimedia/dynamic/02834/Kabali_2834894f.jpg"/>
                        </div>
                        <div style="padding:1px;" class="col-lg-2">
                            <img style="width:100%; height:150px;" src="http://www.thehindu.com/multimedia/dynamic/02834/Kabali_2834894f.jpg"/>
                        </div>
                        <div style="padding:1px;" class="col-lg-2">
                            <img style="width:100%; height:150px;" src="http://www.thehindu.com/multimedia/dynamic/02834/Kabali_2834894f.jpg"/>
                        </div>
                        <div style="padding:1px;" class="col-lg-2">
                            <img style="width:100%; height:150px;" src="http://www.thehindu.com/multimedia/dynamic/02834/Kabali_2834894f.jpg"/>
                        </div>
                       <div style="padding:1px;" class="col-lg-2">
                            <img style="width:100%; height:150px;" src="http://www.thehindu.com/multimedia/dynamic/02834/Kabali_2834894f.jpg"/>
                        </div>
                        <div style="padding:1px;" class="col-lg-2">
                            <img style="width:100%; height:150px;" src="http://www.thehindu.com/multimedia/dynamic/02834/Kabali_2834894f.jpg"/>
                        </div>
                       

                    </div>
                     <div style="padding:0px; padding-top:0px; margin-top: 0px; " class="col-lg-1">
                     </div>
                    
                    <div style="padding:0px; padding-top:0px; margin-top: 0px;"  class="col-lg-6">
                       <div style="border-bottom:solid black 1px; padding-top:0px;  padding-bottom:0px; margin-top: 0px;"class="page-header">
                    <h4>BEST PHONES</h4>
                    </div>
                        <div style="padding:1px;" class="col-lg-3">
                            <img style="width:100%; height:150px;" src="http://cdn.gsmarena.com/imgroot/reviews/16/motorola-moto-x-force/-728x314/thumb6.jpg"/>
                        </div>
                        <div style="padding:1px;" class="col-lg-3">
                            <img style="width:100%; height:150px;" src="http://cdn.gsmarena.com/imgroot/reviews/16/motorola-moto-x-force/-728x314/thumb6.jpg"/>
                        </div>
                        <div style="padding:1px;" class="col-lg-3">
                            <img style="width:100%; height:150px;" src="http://cdn.gsmarena.com/imgroot/reviews/16/motorola-moto-x-force/-728x314/thumb6.jpg"/>
                        </div>
                        <div style="padding:1px;" class="col-lg-3">
                            <img style="width:100%; height:150px;" src="http://cdn.gsmarena.com/imgroot/reviews/16/motorola-moto-x-force/-728x314/thumb6.jpg"/>
                        </div>

                    </div>
                </div>
           
        </div>
        <div style="padding-top: 0px; margin-top: 0px;background-color: ;" class="container">
            <div style="margin:10px;" class="row">
          
    
                <div style="padding:0px;background-color: ;" class="col-lg-12">
                    <div style=" margin-top:20px;" class="col-lg-6 col-lg-offset-3">
                        <div  style="background-color: black; margin-bottom: 5px; margin-right: 10px;" class="col-lg-12">
                            <h5 style="color:white;">NEWS</h5>
                        </div>
                        <div style="padding:0px;" class="col-lg-12">
                            <h5>Coolpad note 3 plus launch in india </h5>

                        </div>
                        <div style="padding:0px;" class="col-lg-4">
                            <img style="width:100%; height:150px;" src="http://www.thehindu.com/multimedia/dynamic/02834/Kabali_2834894f.jpg"/>

                        </div>
                        <div style="padding:5px;" class="col-lg-8">
                            <h5>Coolpad note 3 plus launch in indiaoolpad note 3 plus launch in india  oolpad note 3 plus launch in india</h5>

                        </div>
                        <div style="padding:0px;" class="col-lg-12">
                            <h5>Coolpad note 3 plus launch in india </h5>

                        </div>
                        <div style="padding:0px;" class="col-lg-4">
                            <img style="width:100%; height:150px;" src="http://www.thehindu.com/multimedia/dynamic/02834/Kabali_2834894f.jpg"/>

                        </div>
                        <div style="padding:5px;" class="col-lg-8">
                            <h5>Coolpad note 3 plus launch in indiaoolpad note 3 plus launch in india  oolpad note 3 plus launch in india</h5>

                        </div>









                    </div>
                    <div style="margin:0px; padding:0px; margin-top:20px; " class="col-lg-3">
                        <div style="background-color: black; margin-bottom: 5px; margin-right: 10px;" class="col-lg-12">
                            <h5 style=" color:white;">POPULAR</h5>

                        </div>
                        <div style="padding:0px;" class="col-lg-12">
                            <img style="width:100%; height:250px;" src="http://cdn.gsmarena.com/imgroot/reviews/16/motorola-moto-x-force/-728x314/thumb6.jpg"/>
                        </div>
                        <div style="padding:0px;" class="col-lg-12">
                            <img style="width:100%; height:250px;" src="http://cdn.gsmarena.com/imgroot/reviews/16/motorola-moto-x-force/-728x314/thumb6.jpg"/>
                        </div>
                        <div style="padding:0px;" class="col-lg-12">
                            <img style="width:100%; height:250px;" src="http://cdn.gsmarena.com/imgroot/reviews/16/motorola-moto-x-force/-728x314/thumb6.jpg"/>
                        </div>

                    </div>
                </div>    
        
        </div>
    </div>
















      <?php include 'footer.php';?>
    </body>
</html>