<!DOCTYPE html>
<html>
     <head>
       <link rel="stylesheet" type="text/css" href="cssboot/bootstrap.css" >
    
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   </head>
    <body>
         <?php 
        
        include 'header.php';
        ?>
        <div class="main">
        
            
               
             
          
            
          
        <div class="center" style="margin-top:50px; text-align: center;">
            <div id="f1">
                <form method='post' action='articlehinsertview.php'>
                    <table id='t1'align="center" >
                        <?php
                if(isset($_REQUEST["msg"])){
                       echo $_REQUEST["msg"];
                   }
                
                ?>
                        <h1>Enter article Description</h1>
                        
                        
                        <tr>
                            <td><input type='text' id='id'  name='id' placeholder="id"/></td>
                            <td>
                                <input type='text' id='image'  name='image' placeholder="image"/>
                            </td>       
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='matchingid' name="matchingid" placeholder='matchingid' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='name' name="name" placeholder='name' /><td>
                            
                        </tr>
                        <tr>
                            <td><input type='text' id='maker' name='maker' placeholder='maker'/><td>
                        </tr>
                        <tr>
                            <td><input type='text' id='date' name='date' placeholder='date'/><td>
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='h1' name="h1" placeholder='h1' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p11' name="p11" placeholder='p11' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p12' name="p12" placeholder='p12' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p13' name="p13" placeholder='p13' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p14' name="p14" placeholder='p14' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p15' name="p15" placeholder='p15' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='img11' name="img11" placeholder='img11' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='img12' name="img12" placeholder='img12' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='img13' name="img13" placeholder='img13' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp1' name="cp1" placeholder='category product1' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr1' name="pr1" placeholder='productimage1' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li1' name="li1" placeholder='procutlink1' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp2' name="cp2" placeholder='category product2' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr2' name="pr2" placeholder='productimage2' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li2' name="li2" placeholder='procutlink2' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp3' name="cp3" placeholder='category product3' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr3' name="pr3" placeholder='productimage3' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li3' name="li3" placeholder='procutlink3' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp4' name="cp4" placeholder='category product4' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr4' name="pr4" placeholder='productimage4' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li4' name="li4" placeholder='procutlink4' /><td>
                            
                        </tr>
                        
                        
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='h2' name="h2" placeholder='h2' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p21' name="p21" placeholder='p21' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p22' name="p22" placeholder='p22' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p23' name="p23" placeholder='p23' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p24' name="p24" placeholder='p24' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p25' name="p25" placeholder='p25' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='img21' name="img21" placeholder='img21' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='img22' name="img22" placeholder='img22' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='img23' name="img23" placeholder='img23' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp5' name="cp5" placeholder='category product5' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr5' name="pr5" placeholder='productimage5' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li5' name="li5" placeholder='procutlink5' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp6' name="cp6" placeholder='category product6' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr6' name="pr6" placeholder='productimage6' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li6' name="li6" placeholder='procutlink6' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp7' name="cp7" placeholder='category product7' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr7' name="pr7" placeholder='productimage7' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li7' name="li7" placeholder='procutlink7' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp8' name="cp8" placeholder='category product8' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr8' name="pr8" placeholder='productimage8' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li8' name="li8" placeholder='procutlink8' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='h3' name="h3" placeholder='h3' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p31' name="p31" placeholder='p31' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p32' name="p32" placeholder='p32' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p33' name="p33" placeholder='p33' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p34' name="p34" placeholder='p34' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p35' name="p35" placeholder='p35' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='img31' name="img31" placeholder='img31' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='img32' name="img32" placeholder='img32' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='img33' name="img33" placeholder='img33' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp9' name="cp9" placeholder='category product9' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr9' name="pr9" placeholder='productimage9' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li9' name="li9" placeholder='procutlink9' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp10' name="cp10" placeholder='category product10' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr10' name="pr10" placeholder='productimage10' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li10' name="li10" placeholder='procutlink10' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp11' name="cp11" placeholder='category product11' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr11' name="pr11" placeholder='productimage11' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li11' name="li11" placeholder='procutlink11' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp12' name="cp12" placeholder='category product12' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr12' name="pr12" placeholder='productimage12' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li12' name="li12" placeholder='procutlink12' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='h4' name="h4" placeholder='h4' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p41' name="p41" placeholder='p41' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p42' name="p42" placeholder='p42' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p43' name="p43" placeholder='p43' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p44' name="p44" placeholder='p44' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p45' name="p45" placeholder='p45' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='img41' name="img41" placeholder='img41' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='img42' name="img42" placeholder='img42' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='img43' name="img43" placeholder='img43' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp13' name="cp13" placeholder='category product13' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr13' name="pr13" placeholder='productimage13' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li13' name="li13" placeholder='procutlink13' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp14' name="cp14" placeholder='category product14' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr14' name="pr14" placeholder='productimage14' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li14' name="li14" placeholder='procutlink14' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp15' name="cp15" placeholder='category product15' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr15' name="pr15" placeholder='productimage15' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li15' name="li15" placeholder='procutlink15' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp16' name="cp16" placeholder='category product16' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr16' name="pr16" placeholder='productimage16' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li16' name="li16" placeholder='procutlink16' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='h5' name="h5" placeholder='h5co' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p51' name="p51" placeholder='p51' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p52' name="p52" placeholder='p52' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p53' name="p53" placeholder='p53' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p53' name="p54" placeholder='p54' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='p53' name="p55" placeholder='p55' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='img51' name="img51" placeholder='img51' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='img52' name="img52" placeholder='img52' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='img53' name="img53" placeholder='img53' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp17' name="cp17" placeholder='category product17' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr17' name="pr17" placeholder='productimage17' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li17' name="li17" placeholder='procutlink17' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp18' name="cp18" placeholder='category product18' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr18' name="pr18" placeholder='productimage18' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li18' name="li18" placeholder='procutlink18' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp19' name="cp19" placeholder='category product19' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr19' name="pr19" placeholder='productimage19' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li19' name="li19" placeholder='procutlink19' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='cp20' name="cp20" placeholder='category product20' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='pr20' name="pr20" placeholder='productimage20' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='li20' name="li20" placeholder='procutlink20' /><td>
                            
                        </tr>
                        <tr>
                            <td colspan='2'><input type='submit' value='  Insert  '/></td>
                        </tr>
                    </table>
                </form>
            
               
            </div>
         
            
        
            <div id="f2">
           
 
            </div>
        </div>
        <div class="footer">
            
        </div>
        </div>
             <?php  include 'footer.php' ?>
    </body>
</html>