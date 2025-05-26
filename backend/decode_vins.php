<?php
header('Content-Type: application/json');

// Enable CORS if needed (adjust origin accordingly)
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: POST");
// header("Access-Control-Allow-Headers: Content-Type");

// Check method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed, use POST']);
    exit;
}

// Get JSON body
$input = json_decode(file_get_contents('php://input'), true);
if (!$input || !isset($input['vins']) || !is_array($input['vins']) || count($input['vins']) === 0) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid input. Expecting JSON with vins array.']);
    exit;
}

$vins = $input['vins'];

// Prepare POST data for the API
$data = http_build_query([
    'format' => 'json',
    'data' => implode(';', $vins)
]);

$apiUrl = 'https://vpic.nhtsa.dot.gov/api/vehicles/decodevinvaluesbatch/';

// Initialize cURL
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/x-www-form-urlencoded'
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode !== 200) {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to fetch VIN data from API']);
    exit;
}

$responseData = json_decode($response, true);
if (!$responseData || !isset($responseData['Results'])) {
    http_response_code(500);
    echo json_encode(['error' => 'Invalid response from VIN API']);
    exit;
}

// Filter trailers
$trailers = [];
foreach ($responseData['Results'] as $item) {
    if (isset($item['VehicleType']) && stripos($item['VehicleType'], 'trailer') !== false) {
        $trailers[] = [
            'vin' => $item['VIN'] ?? '',
            'make' => $item['Make'] ?? '',
            'model' => $item['Model'] ?? '',
            'year' => intval($item['ModelYear'] ?? 0),
            'vehicle_type' => $item['VehicleType'] ?? ''
        ];
    }
}

// Save to SQLite
function saveToDatabase($trailers) {
    $db = new SQLite3('trailers.db');
    $db->exec("CREATE TABLE IF NOT EXISTS trailers (
        vin TEXT PRIMARY KEY,
        make TEXT,
        model TEXT,
        year INTEGER,
        vehicle_type TEXT
    )");

    $stmt = $db->prepare("INSERT OR IGNORE INTO trailers (vin, make, model, year, vehicle_type) VALUES (:vin, :make, :model, :year, :vehicle_type)");

    foreach ($trailers as $t) {
        $stmt->bindValue(':vin', $t['vin'], SQLITE3_TEXT);
        $stmt->bindValue(':make', $t['make'], SQLITE3_TEXT);
        $stmt->bindValue(':model', $t['model'], SQLITE3_TEXT);
        $stmt->bindValue(':year', $t['year'], SQLITE3_INTEGER);
        $stmt->bindValue(':vehicle_type', $t['vehicle_type'], SQLITE3_TEXT);
        $stmt->execute();
    }

    $db->close();
}

if (!empty($trailers)) {
    saveToDatabase($trailers);
}

// Return trailers JSON
echo json_encode($trailers);
