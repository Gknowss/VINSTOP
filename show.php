<?php

$ch = require "init_curl.php";

//$headers = [
//    "User-Agent: Example REST API Client"
//    "Authorization: token (token)"
//];

$ch = curl_init("https://vpic.nhtsa.dot.gov/api/vehicles/decodevinvaluesbatch/");

//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_URL, "https://vpic.nhtsa.dot.gov/api/vehicles/decodevinvaluesbatch/$full_name");

//$response = curl_exec($ch);

curl_exec($ch);
curl_close($ch);

//var_dump($response);
//$data = json_decode($response, true);

// foreach ($data as $repository) {
        //echo $repository["full_name"], " ", 
             //$repository["name"], " ",
             //$repository["description"] "<br>";
// }

//var_dump($data);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Test cURL</title>
</head>

<body>

    <h1>Repo</h1>

    <dl>
        <dt>Name</dt>
        <dd><?= $data["name"] ?></dd>
        <dt>Descriptions</dt>
        <dd><?= htmlspecialchars($data["description"]) ?></dd>
    </dl>    

</body>

</html>