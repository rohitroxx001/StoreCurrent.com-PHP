 <?php
 $urlEncode = urlencode("samsung-galaxy-s6-msp5275");
         $url = 'affiliate-feeds.snapdeal.com/feed/product?id=676860597612';
         $headers = array(
            'Cache-Control: no-cache',
            'Snapdeal-Affiliate-Id:81980',
            'Snapdeal-Token-Id:4a39b590b6afdd6028ab3ae9fffb14'
            );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($ch);
        curl_close($ch);

        var_dump($result);
        
        
        ?>
        