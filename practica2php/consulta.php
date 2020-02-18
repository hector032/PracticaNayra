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


$ruta = 'files/';
    if(isset($_POST["transformar"])){
        $id  = $_POST["id"];
        $ruta .=$id.'.txt';
        $consulta = "select * from pisos where id= ".$id;
        $resultado = $conn->query($consulta);
        if($resultado->num_rows > 0){
            while($row = $resultado->fetch_assoc()){
                $fichero = fopen($ruta, "w") or die("Unable to open file!");
                $txt = "Id: ".$row["id"]."\nTipo: ".$row["tipo"]."\nDireccion: ".$row["direccion"]."\nDormitorios: ".$row["nh"]."\nPrecio: ".$row["precio"]."\nTamanio: ".$row["size"]."\nExtras: ".$row["extras"]."\nObservaciones: ".$row["observaciones"];
                fwrite($fichero, $txt);
                fclose($fichero);   
            }
        }
    }

    $sql = "SELECT * FROM pisos";
    $result = $conn->query($sql);


if ($result->num_rows > 0) { // ->$RESULT = MYSQLI_QUERY($CONN, $SQL);
    echo "<table border='1'"."><tr><th>Tipo</th><th>Zona</th><th>Habitaciones</th><th>Precio</th><th>Tamaño</th><th>Extras</th><th>Observaciones</th><th>Foto</th><th>Crean Informe</th><th>Ver informe</th></tr>";
    while($row = $result->fetch_assoc()) { // if /mysqli_num_rows($result) < 0 {
        // output data of each row
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

        echo'<tr>

        <td>'.$row["tipo"].'</td>
        <td>'.$row["zona"] .'</td>
        <td>'.$row["nh"].'</td>
        <td>'.$row["precio"].'</td>
        <td>'.$row["size"].'</td>
        <td>'.$row["extras"] .'</td>
        <td>'.$row["observaciones"] .'</td>
        <td><a href="'.$row["foto"].'">Foto</a></td>
        <td><form action="consulta.php" method="POST">
        <input type="hidden" value="'.$row["id"].'" name="id"/>
        <input name="transformar" type="submit" value="transformar"/></form></td>
        <td><a href="files/'.$row["id"].'.txt" target="_blank">Archivo</a>
        </tr>';


    }


    
    
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
?>

<td><a href="1pantalla.php"><button type="button">VOLVER</button></a></td>

<style>
    table tr:nth-child(1){
        background-color: rgba(71, 160, 215,1);
        color: #fff;
    }
    table tr {
        background-color: rgba(158, 167, 172,1);
    }

    table tr td{
        border-color: #fff;
        text-align: center;
    }
</style>