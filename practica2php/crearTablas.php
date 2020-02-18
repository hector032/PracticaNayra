<?php
$servername = "192.168.1.192";
$username = "root";
$password = "123456";
$dbname = "idealista2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE pisos (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
tipo VARCHAR(30) NOT NULL,
zona VARCHAR(30) NOT NULL,
direccion VARCHAR(50),
nh INT(6) ,
precio INT(4),
size INT(4),
extras VARCHAR(50), 
observaciones VARCHAR(200),
foto varchar(200),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla pisos creada correctamente" ;
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>