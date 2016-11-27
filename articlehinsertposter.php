<?php

print_r($_REQUEST);
Extract($_REQUEST);

require 'hconn.php';

$query = "insert into article(matchingid,categoryid,name,productlink,imagelink,description)
        values('$matchingid','$categoryid','$name','$productlink','$imagelink','$description')";
$r = mysql_query($query);

if($r>0){
    header('Location: articleinsertposter.php?msg=poster inserted ');
}else{
     echo "ERROR: ".mysql_error();
}



mysql_close($con);
?>
