<?php
header('Content-Type: application/json');

// Only allow POST method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed, use POST']);
    exit;
}

// Decode JSON input
$input = json_decode(file_get_contents('php://input'), true);

// Validate input
if (
    !$input ||
    !isset($input['vins']) ||
    !is_array($input['vins']) ||
    count($input['vins']) === 0
) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid input. Expecting JSON with vins array.']);
    exit;
}

// Extract and validate VINs
$vins = $input['vins'];
foreach ($vins as $vin) {
    if (!is_string($vin) || strlen($vin) !== 17 || !preg_match('/^[A-Z0-9]+$/', strtoupper($vin))) {
        http_response_code(400);
        echo json_encode(['error' => "Invalid VIN format: $vin"]);
        exit;
    }
}

// Generate mock decoded data for now
$mockDecoded = [];
foreach ($vins as $vin) {
    $mockDecoded[] = [
        'vin' => $vin,
        'make' => 'MockMake',
        'model' => 'MockModel',
        'year' => 2025,
        'vehicle_type' => 'Passenger Car',
        'engine' => 'V6',
        'trim' => 'MockTrim',
        'plant_country' => 'MockCountry',
    ];
}

/*
|--------------------------------------------------------------------------
| TODO: Replace this block with actual DB query/save logic
|--------------------------------------------------------------------------
*/
# Example DB insert using SQLite3 (safe with prepared statements)

# Commented out now; uncomment when DB setup is ready
/*
try {
    $db = new SQLite3('trailers.db');

    // Create table if not exists
    $db->exec("CREATE TABLE IF NOT EXISTS trailers (
        vin TEXT PRIMARY KEY,
        make TEXT,
        model TEXT,
        year INTEGER,
        vehicle_type TEXT,
        engine TEXT,
        trim TEXT,
        plant_country TEXT
    )");

    $stmt = $db->prepare("
        INSERT OR IGNORE INTO trailers (
            vin, make, model, year, vehicle_type, engine, trim, plant_country
        ) VALUES (
            :vin, :make, :model, :year, :vehicle_type, :engine, :trim, :plant_country
        )
    ");

    foreach ($mockDecoded as $t) {
        $stmt->bindValue(':vin', $t['vin'], SQLITE3_TEXT);
        $stmt->bindValue(':make', $t['make'], SQLITE3_TEXT);
        $stmt->bindValue(':model', $t['model'], SQLITE3_TEXT);
        $stmt->bindValue(':year', $t['year'], SQLITE3_INTEGER);
        $stmt->bindValue(':vehicle_type', $t['vehicle_type'], SQLITE3_TEXT);
        $stmt->bindValue(':engine', $t['engine'], SQLITE3_TEXT);
        $stmt->bindValue(':trim', $t['trim'], SQLITE3_TEXT);
        $stmt->bindValue(':plant_country', $t['plant_country'], SQLITE3_TEXT);
        $stmt->execute();
    }

    $db->close();
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Database error', 'details' => $e->getMessage()]);
    exit;
}
*/

// Final response
echo json_encode([
    'success' => true,
    'count' => count($mockDecoded),
    'data' => $mockDecoded
]);
