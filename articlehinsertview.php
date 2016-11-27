<?php

print_r($_REQUEST);
Extract($_REQUEST);

require 'hconn.php';

$query = "insert into carticle (id,image,name,matchingid,maker,date,h1,p11,p12,p13,p14,p15,img11,img12,img13,h2,p21,p22,p23,p24,p25,img21,img22,img23,h3,p31,p32,p33,p34,p35,img31,img32,img33,h4,p41,p42,p43,p44,p45,img41,img42,img43,h5,p51,p52,p53,p54,p55,img51,img52,img53,pr1,li1,pr2,li2,pr3,li3,pr4,li4,pr5,li5,pr6,li6,pr7,li7,pr8,li8,pr9,li9,pr10,li10,pr11,li11,pr12,li12,pr13,li13,pr14,li14,pr15,li15,pr16,li16,pr17,li17,pr18,li18,pr19,li19,pr20,li20,cp1,cp2,cp3,cp4,cp5,cp6,cp7,cp8,cp9,cp10,cp11,cp12,cp13,cp14,cp15,cp16,cp17,cp18,cp19,cp20)
                        values('$id','$image','$name','$matchingid','$maker','$date','$h1','$p11','$p12','$p13','$p14','$p15','$img11','$img12','$img13','$h2','$p21','$p22','$p23','$p24','$p25','$img21','$img22','$img23','$h3','$p31','$p32','$p33','$p34','$p35','$img31','$img32','$img33','$h4','$p41','$p42','$p43','$p44','$p45','$img41','$img42','$img43','$h5','$p51','$p52','$p53','$p54','$p55','$img51','$img52','$img53','$pr1','$li1','$pr2','$li2','$pr3','$li3','$pr4','$li4','$pr5','$li5','$pr6','$li6','$pr7','$li7','$pr8','$li8','$pr9','$li9','$pr10','$li10','$pr11','$li11','$pr12','$li12','$pr13','$li13','$pr14','$li14','$pr15','$li15','$pr16','$li16','$pr17','$li17','$pr18','$li18','$pr19','$li19','$pr20','$li20','$cp1','$cp2','$cp3','$cp4','$cp5','$cp6','$cp7','$cp8','$cp9','$cp10','$cp11','$cp12','$cp13','$cp14','$cp15','$cp16','$cp17','$cp18','$cp19','$cp20')";
$r = mysql_query($query);

if($r>0){
    header('Location: articleinsertview.php?msg=poster inserted ');
}else{
     echo "ERROR: ".mysql_error();
}



mysql_close($con);
?>
