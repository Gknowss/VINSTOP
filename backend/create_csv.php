<?php

//Generate and layout info for CSV file

function array_to_csv_download($vins, $filename = "export.csv", $delimiter=";") {
    header('Content-Type: application/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename="'.$filename.'";');

    // open the "output" stream
    // see http://www.php.net/manual/en/wrappers.php.php#refsect2-wrappers.php-unknown-unknown-unknown-descriptioq
    $f = fopen('php://output', 'w');

    foreach ($vins as $line) {
        fputcsv($f, $line, $delimiter);
    }
}

?>