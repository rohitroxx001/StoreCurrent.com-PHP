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
                <form method='post' action='articlehinsertposter.php'>
                    <table id='t1'align="center" >
                        <?php
                if(isset($_REQUEST["msg"])){
                       echo $_REQUEST["msg"];
                   }
                
                ?>
                        <h1>Enter Article Poster Description</h1>
                        
                        
                        <tr>
                            <td><input type='text' id='matchingid'  name='matchingid' placeholder="1-Mens 2-Womens  3-bollywood 4-cricket 5-desi 6-Tech"/></td>
                            
                                    
                            <td>
                                <input type='text' id='categoryid'  name='categoryid' placeholder="101/102/103/104 "/>
                            </td>       
                                   
                              <td>
                                <input type='text' id='name'  name='name' placeholder="name"/>
                            </td>            
                                    
                                    
                                    
                                    
                                    
                                    
                                   
                                   
                                    
                        
                        <tr>
                            <td colspan='2'><input style="height:40px; width:350px;" type='text' id='prodcutlink' name="productlink" placeholder='product link' /><td>
                            
                        </tr>
                        
                         
                         <tr>
                            <td><input type='text' id='imagelink' name='imagelink' placeholder='image link'/><td>
                        </tr>
                        <tr>
                            <td><input type='text' id='description' name='description' placeholder='description'/><td>
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
             
    </body>
</html>