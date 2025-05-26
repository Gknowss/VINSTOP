<?php

$ch = require "init_curl.php";

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

    <h1>Repos</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Desc</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $repository): ?>

                <tr>
                    <td>
                        <a href="show.php?full_name=<?= $repository["full_name"]
                        ?>">
                        <?= $repository["name"] ?></a>
                    </td>
                        <td><?= htmlspecialchars($repository["description"]) ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>