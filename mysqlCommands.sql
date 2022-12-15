CREATE DATABASE chain_gang;
 GRANT ALL PRIVILEGES ON chain_gang.* TO 'webuser'@'localhost' IDENTIFIED BY 'secretpassword';

USE chain_gang;

CREATE TABLE bicycles(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(255) NOT NULL,
    model VARCHAR(255) NOT NULL,
    year INT(4) NOT NULL,
    category VARCHAR(255) NOT NULL,
    gender VARCHAR(255) NOT NULL,
    color VARCHAR(255) NOT NULL,
    price DECIMAL(9,2) NOT NULL,
    weight_kg DECIMAL(9,5) NOT NULL,
    condition_id TINYINT(3) NOT NULL,
    description TXT NOT NULL
);

INSERT INTO bicycles(brand, model, year, category, gender, color, price,
weight_kg, condition_id, description) 
VALUES (
    'Trek', 'Enonda', '2017', 'Hybrid', 'unisex', 'black', '1495.00', '1.5', '5', ''
)

INSERT INTO bicycles(brand, model, year, category, gender, color, price,
weight_kg, condition_id, description) 
VALUES (
    'Cannondale', 'Synapse', '2016', 'Road', 'Unisex', 'matte Roze', '1990.00', '1.0', 5, ''
)