<?php
 
$udrl = "http://www.phonearena.com/phones/Samsung-Galaxy-S7_id9817";



$url=$_REQUEST["url"];
echo "$url";
    
                


 
$response = getPriceFromFlipkart($url);
 
echo json_encode($response);
 
/* Returns the response in JSON format */
 
function getPriceFromFlipkart($url) {
 
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 10.10; labnol;) ctrlq.org");
	curl_setopt($curl, CURLOPT_FAILONERROR, true);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$html = curl_exec($curl);
	curl_close($curl);
 
	//$regex = '/<meta itemprop="price" content="([^"]*)"/';
	//preg_match($regex, $html, $price);
        
        
        //$regex = '/data-src="([^"]*)"/i';
	//preg_match($regex, $html, $image);
 
	//$regex = '/<h1[^>]*>([^<]*)<\/h1>/';
	//preg_match($regex, $html, $name);
    
       //<a href="#" class="link-network-detail collapse">GSM / CDMA / HSPA / LTE</a>
       //$regex = '/class="link-network-detail collapse"[^>]*>([^<]*)<\/a>/';
	//preg_match($regex, $html, $technology);
        
        
        
        
        
        
             //name
        $regex = '/<h1 itemprop="name"><span[^>]*>([^<]*)<\/span>/';
        preg_match($regex, $html, $named);
        
        
        //image
        
        $regex = '/<img itemprop="image" src=[\'"]?([^\'" >]+)/';
        preg_match($regex, $html, $image);
        
        
        
        
        //Description
        $regex = '//';
        preg_match($regex, $html, $descr);
        
        
        
        //release date
        $regex = '/Release date<br \/>
            <span[^>]*>([^<]*)<\/span>/';
        preg_match($regex, $html, $releasedate);
        
        
        
        
        
        
        
        
        
       //Device type
        $regex = '/Device type:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $devicetype);
        
        //os
        $regex = '/alt="Popup" align="right" \/><\/a[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $os);
        
        //os1
        $regex = '/<\/li><li class="s_lv_1"><strong class=" s_lv_1 ">OS:<\/strong><ul class=" s_lv_1 "><l[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $os1);
        
        //smalldimensions
        $regex = '/class="s_size_rating s_size_rating_s3 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $smalldimensions);
        
        //mediumdimensions
       // $regex = '/ing s_size_rating_s1 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        //preg_match($regex, $html, $mediumdimensions);
        
         //mediumdimensions1
        $regex = '/class="s_size_rating s_size_rating_s2 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $mediumdimensions1);
        
        //largedimensions
        $regex = '/Big Dimensions\' class="s_size_rating s_size_rating_s1 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $largedimensions);
        
        
         //smallweight
        $regex = '/<span title=\'Light Weight\. The average weight is: 17\.7 oz \(507 g\)\.\' class="s_weight_rating s_weight_rating_s3 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<br \/>/';
        preg_match($regex, $html, $smallweight);
        
         //mediumweight
        $regex = '/class="s_weight_rating s_weight_rating_s2 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<br/';
        preg_match($regex, $html, $mediumweight);
        
         //materials
        $regex = '/Materials:<\/strong><ul class=" s_lv_1 "><l[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $materials);
        
        //rugged
        $regex = '/Rugged:<\/strong><ul class=" s_lv_1 ">
<li class=\' s_lv_2  \'><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $rugged);
        
        
       
          //ipcertified
        $regex = '/IP certified:<\/strong><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $ipcertified);
        
         //MIL-STD-certified
        $regex = '/MIL-STD-810 certified:<\/strong><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $mscertified);
        
        
        //colors
        $regex = '/Colors:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $colors);
        
           //designfeatures
        $regex = '/Features:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)s<\/li><\/ul>
<\/li><\/ul>
<\/div><div class="s_specs_box s_box_4"><h2 class="htitle">Display<\/h2>/';
        preg_match($regex, $html, $designfeatures);
        
        
        //largephysicalsize
        $regex = '/<li>Big display <span class="gray_9"[^>]*>([^<]*)<\/span>/';
        preg_match($regex, $html, $largephysicalsize);
        
        //largephysicalsize1
        $regex = '/Big display\' class="s_resolution_rating s_resolution_rating_s1 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $largephysicalsize1);
        
         //mediumphysicalsize
        $regex = '/="s_resolution_rating s_resolution_rating_s2 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $mediumphysicalsize);
        
         //smallphysicalsize
        $regex = '/<span title=\'Small display\' class="s_resolution_rating s_resolution_rating_s3 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $smallphysicalsize);
        
        //largeresolution
        $regex = '/High-resolution display <span class="gray_9[^>]*>([^<]*)<\/span>/';
        preg_match($regex, $html, $largeresolution);
        
        //largeresolution1
        $regex = '/High resolution\' class="s_display_rating s_display_rating_s1 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $largeresolution1);
        
        //smallresolution
        $regex = '/ul class=" s_lv_1 "><li><span title=\'Low resolution\' class="s_display_rating s_display_rating_s3 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $smallresolution);
        
        
        
        
        //largepixeldensity
        $regex = '/Extremely high pixel density screen, over 430ppi <span class="gray_9"[^>]*>([^<]*)<\/span>/';
        preg_match($regex, $html, $largepixeldensity);
        
        //largepixeldensity1
        
        $regex = '/High pixel density\' class="s_pixel_density_rating s_pixel_density_rating_s1 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $largepixeldensity1);
        
        
        
          //mediumpixeldensity
        $regex = '/title=\'Medium pixel density\' class="s_pixel_density_rating s_pixel_density_rating_s2 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $mediumpixeldensity);
        
        
                
        //smallpixeldensity
        $regex = '/<\/p><\/span><\/strong><ul class=" s_lv_1 "><li><span title=\'Low pixel density\' class="s_pixel_density_rating s_pixel_density_rating_s3 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $smallpixeldensity);
        
        //technology
        $regex = '/<\/p><\/span><\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $technology);
        
         //screen_body_ratio
        $regex = '/<\/li><li class="s_lv_1"><strong class=" s_lv_1 ">Screen-to-body ratio:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $screen_body_ratio);
        
        //displayfeatures
        $regex = '/<\/li><li class="s_lv_1"><strong class=" s_lv_1 ">Features:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li><\/ul>
<\/li><\/ul>
<\/div><div class="s_specs_box s_box_4"><h2 class="htitle">Camera/';
        preg_match($regex, $html, $displayfeatures);
        
           //largecamera
        $regex = '/High camera resolution\' class="s_camera_rating s_camera_rating_s1 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $largecamera);
        
        
        //mediumcamera
        $regex = '/<span title=\'Average camera resolution\' class="s_camera_rating s_camera_rating_s2 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $mediumcamera);
        
        
        //flash
        $regex = '/Flash:<\/strong><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $flash);
        
        
        //camerafeatures
        $regex = '/<strong class=" s_lv_2 ">Features:<\/strong><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $camerafeatures);
        
        
      //camerasettings
        $regex = '/Settings:<\/strong><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $camerasettings);
        
        //camerashottingmodes
        $regex = '/Shooting Modes:<\/strong><ul class=" s_lv_2 "><li><a href=\'javascript:;\' title=\'view related images\' onclick=\'showSpecsGal\("camera"\)\' class="floatright specspop tooltip"><img src="\/\/s-cdn\.phonearena\.com\/images\/galleryicon\.png" alt="Popup" align="right" \/><\/a[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $camerashottingmodes);
        
        
          //camerashottingmodes1
        $regex = '/Shooting Modes:<\/strong><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $camerashottingmodes1);
        
        
          //camcodermod
        $regex = '/<li class=\' s_lv_2  \'><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $camcodermod);
        
        
          //camcoderfeatures
        $regex = '/<strong class=" s_lv_2 ">Features:<\/strong><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li><\/ul>
<\/li>
<\/ul><\/li><li class="s_lv_1"><strong class=" s_lv_1 ">Front-facing camera/';
        preg_match($regex, $html, $camcoderfeatures);
        
        
        //frontfacingcamera
        $regex = '/Front-facing camera:<\/strong><ul class=" s_lv_1 ">
<li class=\' s_lv_2  \'><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $frontfacingcamera);
        
        
        
        //system chip
         $regex = '/<\/span><\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li><\/ul>
<\/li><li class="s_lv_1"><strong class=" s_lv_1 "><span class=\'s_tooltip_anchor\'>Processor:<\/span>/';
        preg_match($regex, $html, $systemchip);
        
        
         //mediumprocessor
         $regex = '/span title=\'Low amount of RAM memory\' class="s_ram_rating s_ram_rating_s3 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $mediumprocessor);
        
        
        
        
         //largeprocessor
         $regex = '/class="s_cpu_rating s_cpu_rating_s1 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $largeprocessor);
        
        
        //graphicsprocessor
         $regex = '/Graphics processor:<\/strong><ul class=" s_lv_1 ">
<li class=\' s_lv_2  \'><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $graphicsprocessor);
        
         //largesystemmemory
         $regex = '/class="s_ram_rating s_ram_rating_s1 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $largesystemmemory);
        
        //smallsystemmemory
         $regex = '/span title=\'Low amount of RAM memory\' class="s_ram_rating s_ram_rating_s3 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $smallsystemmemory);
        
        
       // bulitinstorage
         $regex = '/Built-in storage:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $bulitinstorage);
        
        
        // storageexpansion
         $regex = '/Storage expansion:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $storageexpansion);
        
        
          // smalltalktime
         $regex = '/<span title=\'Short Talk time\. The average talk time is: 15 hours \(877 mins\)\.\' class="s_battery_rating s_battery_rating_s3 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<br \//';
        preg_match($regex, $html, $smalltalktime);
        
        // largetalktime
         $regex = '//';
        preg_match($regex, $html, $largetalktime);
        
        
         // smallstandbytime
         $regex = '/class="s_battery_rating s_battery_rating_s3 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<br \/><span class="s_f_11 gray_9">the <span class="s_tooltip_info blue_1 tooltip" title="<p>Average represents the mean value, calculated from all phones, from the last year\.">average<\/span> is 16 days \(377 h\)<\/span><\/li><\/ul>/';
        preg_match($regex, $html, $smallstandbytime);
        
         // mediumstandbytime
         $regex = '/class="s_battery_rating s_battery_rating_s2 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<br/';
        preg_match($regex, $html, $mediumstandbytime);
        
        // largestandbytime
         $regex = '/\'Long Stand-by time\. The average stand-by time is: 16 days \(377 hours\)\.\' class="s_battery_rating s_battery_rating_s1 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<br /';
        preg_match($regex, $html, $largestandbytime);
        
        
         // internetuse3g
         $regex = '/Internet use \(3G\):<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $internetuse3g);
        
        
         // internetuselte
         $regex = '/Internet use \(LTE\):<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $internetuselte);
        
        
        // internetusewifi
         $regex = '/Internet use \(Wi-Fi\):<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $internetusewifi);
        
        
        
        // musicplayback
         $regex = '/Music playback:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $musicplayback);
        
        
        
        // videoplayback
         $regex = '/Video playback:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $videoplayback);
        
         // capacity
         $regex = '/Capacity:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $capacity);
        
          // musicfilterby
         $regex = '/<strong class=" s_lv_2 ">Filter by:<\/strong><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $musicfilterby);
        
        
         // musicfeatures
         $regex = '/<strong class=" s_lv_2 ">Features:<\/strong><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li><\/ul>
<\/li>
<\/ul><\/li><li class="s_lv_1"><strong class=" s_lv_1 ">Speakers:/';
        preg_match($regex, $html, $musicfeatures);
        
        
        // musicfeatures1
         $regex = '/<strong class=" s_lv_2 ">Features:<\/strong><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li><\/ul>
<\/li>
<\/ul><\/li><li class="s_lv_1"><strong class=" s_lv_1 ">Radio:/';
        preg_match($regex, $html, $musicfeatures1);
        
         // radio
         $regex = '/Radio:<\/strong><ul class=" s_lv_1 ">
<li class=\' s_lv_2  \'><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $radio);
        
        
        // speakers
         $regex = '/Speakers:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $speakers);
        
        
          // gsm
         $regex = '/GSM:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $gsm);
        
        
          // umts
         $regex = '/UMTS:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $umts);
        
        
          //fddlte
         $regex = '/FDD LTE:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $fddlte);
        
        
         // largedata
         $regex = '/class="s_data_rating s_data_rating_s1 s_mr_5"><span><\/span><\/span[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $largedata);
        
        
          // hdvoice
         $regex = '/HD Voice:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $hdvoice);
        
        
         //positioning
         $regex = '/<\/span><\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li><\/ul>
<\/li><li class="s_lv_1"><strong class=" s_lv_1 ">Navigation:/';
        preg_match($regex, $html, $positioning);
        
        
         //navigation
         $regex = '/Navigation:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $navigation);
        
        
          //bluetooth
         $regex = '/Bluetooth:<\/strong><ul class=" s_lv_1 ">
<li class=\' s_lv_2  \'><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $bluetooth);
        
          //wifi
         $regex = '/Wi-Fi:<\/strong><ul class=" s_lv_1 ">
<li class=\' s_lv_2  \'><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $wifi);
        
          //mobilehotspot
         $regex = '/Mobile hotspot:<\/strong><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $mobilehotspot);
        
          //usb
         $regex = '/USB:<\/strong><ul class=" s_lv_1 ">
<li class=\' s_lv_2  \'><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $usb);
        
          //connector
         $regex = '/Connector:<\/strong><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $connector);
        
          //connectivityfeatures
         $regex = '/<strong class=" s_lv_2 ">Features:<\/strong><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li><\/ul>
<\/li>
<\/ul><\/li><li class="s_lv_1"><strong class=" s_lv_1 ">Other:/';
        preg_match($regex, $html, $connectivityfeatures);
        
          //othersconnectivity
         $regex = '/Other:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $othersconnectivity);
        
        
         
          //notifications
         $regex = '/Notifications:<\/strong><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $notifications);
        
        
         
          //Additionalmicrophone
         $regex = '/Additional microphone\(s\):<\/strong><ul class=" s_lv_1 ">
<li class=\' s_lv_2  \'><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $Additionalmicrophone);
        
         
          //sensors
         $regex = '/Sensors:<\/strong><ul class=" s_lv_1 ">
<li class=\' s_lv_2  \'><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $sensors);
        
        
           
          //hearingaidcompatibility
         $regex = '/Hearing aid compatibility:<\/strong><ul class=" s_lv_1 ">
<li class=\' s_lv_2  \'><ul class=" s_lv_2 "><li[^>]*>([^<]*)<\/li>/';
        preg_match($regex, $html, $hearingaidcompatibility);
        
        
         
          //additional
         $regex = '/\/li><\/ul>
<\/li>
<\/ul><\/li><li class="s_lv_1"><ul class=" s_lv_1 "><li[^>]*>([^<]*)<\/li><\/ul>
<\/li><\/ul>
<\/div>/';
        preg_match($regex, $html, $additional);
        
       echo $named[1];
        echo $image[1];
        echo $releasedate[1];
        echo $descr[1];
        
        
        
        
require 'hconn.php';

$query = "insert into mobiles (name,image,releasedate,descr,devicetype,os,os1,smalldimensions,mediumdimensions,mediumdimensions1,largedimensions,smallweight,mediumweight,materials,rugged,ipcertified,mscertified,colors,designfeatures,largephysicalsize,largephysicalsize1,mediumphysicalsize,smallphysicalsize,largeresolution,largeresolution1,smallresolution,largepixeldensity,largepixeldensity1,smallpixeldensity,mediumpixeldensity,technology,screen_body_ratio,displayfeatures,largecamera,mediumcamera,flash,camerafeatures,camerasettings,camerashottingmodes,camerashottingmodes1,camcodermod,camcoderfeatures,frontfacingcamera,systemchip,mediumprocessor,largeprocessor,graphicsprocessor,largesystemmemory,smallsystemmemory,bulitinstorage,storageexpansion,largetalktime,smalltalktime,smallstandbytime,mediumstandbytime,largestandbytime,internetuse3g,internetuselte,internetusewifi,musicplayback,videoplayback,capacity,musicfilterby,musicfeatures,musicfeatures1,radio,speakers,gsm,umts,fddlte,largedata,hdvoice,positioning,navigation,bluetooth,wifi,mobilehotspot,usb,connector,connectivityfeatures,othersconnectivity,notifications,Additionalmicrophone,sensors,hearingaidcompatibility,additional)
         values('$named[1]','$image[1]','$releasedate[1]','$descr[1]','$devicetype[1]','$os[1]','$os1[1]','$smalldimensions[1]','$mediumdimensions[1]','$mediumdimensions1[1]','$largedimensions[1]','$smallweight[1]','$mediumweight[1]','$materials[1]','$rugged[1]','$ipcertified[1]','$mscertified[1]','$colors[1]','$designfeatures[1]','$largephysicalsize[1]','$largephysicalsize1[1]','$mediumphysicalsize[1]','$smallphysicalsize[1]','$largeresolution[1]','$largeresolution1[1]','$smallresolution[1]','$largepixeldensity[1]','$largepixeldensity1[1]','$smallpixeldensity[1]','$mediumpixeldensity[1]','$technology[1]','$screen_body_ratio[1]','$displayfeatures[1]','$largecamera[1]','$mediumcamera[1]','$flash[1]','$camerafeatures[1]','$camerasettings[1]','$camerashottingmodes[1]','$camerashottingmodes1[1]','$camcodermod[1]','$camcoderfeatures[1]','$frontfacingcamera[1]','$systemchip[1]','$mediumprocessor[1]','$largeprocessor[1]','$graphicsprocessor[1]','$largesystemmemory[1]','$smallsystemmemory[1]','$bulitinstorage[1]','$storageexpansion[1]','$largetalktime[1]','$smalltalktime[1]','$smallstandbytime[1]','$mediumstandbytime[1]','$largestandbytime[1]','$internetuse3g[1]','$internetuselte[1]','$internetusewifi[1]','$musicplayback[1]','$videoplayback[1]','$capacity[1]','$musicfilterby[1]','$musicfeatures[1]','$musicfeatures1[1]','$radio[1]','$speakers[1]','$gsm[1]','$umts[1]','$fddlte[1]','$largedata[1]','$hdvoice[1]','$positioning[1]','$navigation[1]','$bluetooth[1]','$wifi[1]','$mobilehotspot[1]','$usb[1]','$connector[1]','$connectivityfeatures[1]','$othersconnectivity[1]','$notifications[1]','$Additionalmicrophone[1]','$sensors[1]','$hearingaidcompatibility[1]','$additional[1]')";
$r = mysql_query($query);

if($r>0){
    header('Location: testing1.php?msg=record inserted ');
}else{
    echo "ERROR: ".mysql_error();
}



mysql_close($con);
       
	
	 $response = array("devicetype" => $devicetype[1] , "os" => $os[1],"os1" => $os1[1],"smalldimensions" => $smalldimensions[1],"mediumdimensions" => $mediumdimensions[1],"mediumdimensions1" => $mediumdimensions1[1],"largedimensions" => $largedimensions[1],"smallweight" => $smallweight[1],"mediumweight" => $mediumweight[1],"materials" => $materials[1],"rugged" => $rugged[1] ,"ipcertified" => $ipcertified[1] ,"mscertified" => $mscertified[1] ,"colors" => $colors[1] ,"designfeatures" => $designfeatures[1], 
                        "largephysicalsize" => $largephysicalsize[1] ,"largephysicalsize1" => $largephysicalsize1[1] ,"mediumphysicalsize" => $mediumphysicalsize[1] ,"smallphysicalsize" => $smallphysicalsize[1] ,"largeresolution" => $largeresolution[1],"largeresolution1" => $largeresolution1[1],"smallresolution" => $smallresolution[1] ,"largepixeldensity" => $largepixeldensity[1],"largepixeldensity1" => $largepixeldensity1[1], "mediumpixeldensity" => $mediumpixeldensity[1]   ,"smallpixeldensity" => $smallpixeldensity[1]  ,"technology" => $technology[1]  , "screen_body_ratio" => $screen_body_ratio[1] , "displayfeatures" => $displayfeatures[1], 
                        "largecamera" => $largecamera[1], "mediumcamera" => $mediumcamera[1], "flash" => $flash[1], "camerafeatures" => $camerafeatures[1],"camcodermod" => $camcodermod[1],"camcoderfeatures" => $camcoderfeatures[1],"camerasettings" => $camerasettings[1],"camerashottingmodes" => $camerashottingmodes[1],"camerashottingmodes1" => $camerashottingmodes1[1]  ,"frontfacingcamera" => $frontfacingcamera[1],
                        "systemchip" => $systemchip[1],"mediumprocessor" => $mediumprocessor[1],"largeprocessor" => $largeprocessor[1],"graphicsprocessor" => $graphicsprocessor[1], "largesystemmemory" => $largesystemmemory[1] ,"smallsystemmemory" => $smallsystemmemory[1] , "bulitinstorage" => $bulitinstorage[1] , "storageexpansion" => $storageexpansion[1] ,
                        "largetalktime" => $largetalktime[1],"smalltalktime" => $smalltalktime[1],"smallstandbytime" => $smallstandbytime[1] ,"mediumstandbytime" => $mediumstandbytime[1] , "largestandbytime" => $largestandbytime[1] , "internetuse3g" => $internetuse3g[1]  , "internetuselte" => $internetuselte[1]    , "internetusewifi" => $internetusewifi[1]      , "musicplayback" => $musicplayback[1]    , "videoback" => $videoplayback[1] , "capacity" => $capacity[1]  ,
                         "musicfilterby" => $musicfilterby[1],  "musicfeatures" => $musicfeatures[1], "musicfeatures1" => $musicfeatures1[1], "radio" => $radio[1],"speakers" => $speakers[1],
                           "gsm" => $gsm[1],  "umts" => $umts[1],  "fddlte" => $fddlte[1],  "largedata" => $largedata[1],      "hdvoice" => $hdvoice[1],   "positioning" => $positioning[1],    "navigation" => $navigation[1],     
                          "bluetooth" => $bluetooth[1],  "wifi" => $wifi[1],  "mobilehotspot" => $mobilehotspot[1],  "usb" => $usb[1],  "connector" => $connector[1],  "connectivityfeatures" => $connectivityfeatures[1],  "othersconnectivity" => $othersconnectivity[1], 
                         "notifications" => $notifications[1], "Additionalmicrophone" => $Additionalmicrophone[1], "sensors" => $sensors[1], "hearingaidcompatibility" => $hearingaidcompatibility[1], "additional" => $additional[1]   );  
	return $response; 
     
        
        
        
        
        //$regex = '/(<table[^>]*>(?:.|\n)*<\/table>)>/';
        //preg_match($regex, $html, $name);
        //$response = array("name" => "$name[1]");
        //return $response;
        
        
        
   


}?>