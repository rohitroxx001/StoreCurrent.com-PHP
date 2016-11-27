 <?php
 $urlEncode = urlencode("samsung-galaxy-s6-msp5275");
         $url = 'https://affiliate-api.flipkart.net/affiliate/product/json?id=MOBDPPZZPXVDJHSQ';
         $headers = array(
            'Cache-Control: no-cache',
            'Fk-Affiliate-Id:rohitroxx',
            'Fk-Affiliate-Token:728509689a264e2d8f85836ed51a2dfa'
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
        