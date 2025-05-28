CREATE TABLE vins(
    'id' INTEGER NOT NULL PRIMARY KEY,
    'vin' TEXT, 
    'make' TEXT,
    'model' TEXT,
    'year' INTEGER,
    'vehicle_type' TEXT,
    'engine' TEXT,
    'trim' TEXT,
    'plant_country' TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;

INSERT INTO 'vins' ('vin', 'make','model','year',
'vehicle_type','engine','trim','plant_country')
VALUES
(1, 'ABC123', 'MockMake','MockModel',2025,'Semi Trailer','V6','MockTrim','MockCountry')
