<html>
    <head>
        <title>
            
        </title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato|Raleway:400,300italic|Ubuntu' rel='stylesheet' type='text/css'>
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
                //background-color:red;
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
              //  -webkit-filter: grayscale(80%); /* Chrome, Safari, Opera */
                //filter: grayscale(80%);

            }


            .figure2:hover .para2{

                    
                padding-bottom: 10px;
               background-color: black;


            }
            #tabtwo ,tabone{
               background-color: black;
            }
         

      
       
            h5{
                font-family: 'Raleway', sans-serif;
                color:#5C5252;
                font-size: 130%;
            }
            h2{
                font-family: 'Raleway', sans-serif;
                color:#5C5252;
                font-size: 130%;
            }
            h6{
                font-family: 'Raleway', sans-serif;
                color:#5C5252;
                font-size: 80%;
            }
            
        </style>
    </head>
    
    <body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=786591984775232";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



    <?php include 'header.php'; ?>
        <div  style="margin-top: 50;  ;" class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php if(isset($_REQUEST["maker"])){
                        
                    $count = $_REQUEST["maker"];
                    require 'hconn.php';
                    $query = "select * from carticle where count=$count ";
                    $result = mysql_query($query);
                    if($row = mysql_fetch_row($result)){
                    // print_r($row);
                    //       echo $row[1];?>
                    <div style="margin-top:5px;  padding:0px;" class="col-lg-10">
                    
                        <div class="figure2">
                                       <img class="image2" style="width:100%;  height:500px; " src="<?php echo $row[1]; ?>"/>
                                        <p class="para2">Go charger deccan cflfdkajflk;jaflkjsaarge</p>

                        </div>
                    </div>
                    <div style="margin-top:5px; padding-left:5px; "class="col-lg-2">
                     <div style="background-color: black; margin-bottom: 5px; margin-right: 10px;" class="col-lg-12">
                            <h5 style=" color:white;">BUY</h5>

                        </div>
                        <div style="padding:0px;" class="col-lg-12">
                            <img style="width:100%; height:200px;" src="http://cdn.gsmarena.com/imgroot/reviews/16/motorola-moto-x-force/-728x314/thumb6.jpg"/>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                </div>
            </div>
            
        </div>
        <div style="margin-top:30px;" class="container">
                <div class="row">
                    <div style="" class="col-lg-9">
                        <h1><?php echo $row[2]; ?></h1>
                      
                        <p>Posted by : <?php echo $row[4];?></p>
                        <p><?php echo $row[5];?></p>
                        <p><?php echo $row[6];?></p>
                        <p><?php echo $row[7];?></p>
                         <p><?php echo $row[8];?></p>
                          <p><?php echo $row[9];?></p>
                           <p><?php echo $row[10];?></p>
                            <p><?php echo $row[11];?></p>
                             <p><?php echo $row[12];?></p>
                              <p><?php echo $row[13];?></p>
                              <div class="col-lg-9"/>
                              <img src="<?php echo $row[13];?>" />
                               <img src="<?php echo $row[12];?>" />
                        
                        
                        
                        
                     
                    </div>
                    <div style=" margin-top:20px; " class="col-lg-3">
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
            <?php }else{
                     echo "$rno Record Not Found";
                    } }?>
        </div>
            
    
   
    <?php include "footer.php"; ?>
</body>
</html>