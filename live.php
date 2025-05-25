<html>

<head></head>

<body>

    <?php
        $curl = curl_init();
            
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://vpic.nhtsa.dot.gov/api/vehicles/DecodeVinValues/5UXWX7C5*BA?format=xml&modelyear=2011',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array()
        ));
            
        $response = curl_exec($curl);
            
        curl_close($curl);
        echo $response;
    ?>

</body>

</html>