<?php 
$tipo = $_POST["tipo"];
$zona = $_POST["zona"];
$direccion = $_POST["direccion"];
$nh = $_POST["nh"];
$precio = $_POST["precio"];
$size = $_POST["size"];
$observaciones = $_POST["observaciones"];



$target_dir = "casas/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}


    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

	/*$extras = $_POST["extras"];
	$extrasFinal = "";
	for ($i=0; $i<sizeof($extras) ; $i++) { 
		$extrasFinal=$extras[$i]. " ";
	}*/
 if(isset($_POST['extras'])){
    $extras = $_POST['extras'];
}
$extras2="";

foreach($extras as $key){
    $extras2 .= " ".$key;
}

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



$sql = "INSERT INTO pisos (tipo, zona, direccion, nh, precio, size, extras, observaciones, foto)
VALUES ('$tipo', '$zona', '$direccion', '$nh', '$precio', '$size', '$extras2', '$observaciones', '$target_file')";

if ($conn->query($sql) === TRUE) {

    echo "Vivienda insertada correctamente" ."<br>"."<br>";
    echo " - Tipo: " . $tipo. "<br>" . 
    " - Zona: " . $zona. "<br>" . 
    " - Direccion: " . $direccion. "<br>" . 
    " - nHabitaciones : " . $nh. "<br>" . 
    " - Precio: " . $precio. "<br>" . 
    " - Tamaño: " . $size. "<br>" . 
   
    " - Extras: " . $extras2 ."<br>" . 
    " - Observaciones: " . $observaciones. "<br>";


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br><br>
<a href="1pantalla.php">Volver</a>