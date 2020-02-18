<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Baja</title>
       
    </head>
    <body>

  

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

$sql = "SELECT * FROM pisos";
$result = $conn->query($sql);


if ($result->num_rows > 0) { // ->$RESULT = MYSQLI_QUERY($CONN, $SQL);
    echo "<table  border='1'"."><tr><th>ID</th><th>Tipo</th><th>Zona</th><th>Habitaciones</th><th>Precio</th><th>Tamaño</th><th>Extras</th><th>Observaciones</th><th>Foto</th></tr>";
    while($row = $result->fetch_assoc()) { // if /mysqli_num_rows($result) < 0 {
        // output data of each row
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

    echo"<tr>
            <td>".$row["id"]."</td>".
            "<td>".$row["tipo"]."</td>".
            "<td>".$row["zona"] ."</td>".
            "<td>".$row["nh"]."</td>".
            "<td>".$row["precio"]."</td>".
            "<td>".$row["size"]."</td>".
            "<td>".$row["extras"] ."</td>".
            "<td>".$row["observaciones"] ."</td>".
            "<td>"."<a href=".$row["foto"].">".$row["foto"]."</a>"."</td>

        </tr>";


    }

    
    
} else {
    echo "0 results";
}
    echo "</table>";




   

            $conn->close();  


  ?>
        
        
        
        
        <form name="baja" action="procesarBaja.php" method="get">
            
            <br><br>
                <label for="id" > Id: </label>

                <input type="text" id="id" name="id" placeholder="id"/>
            

            <tr>
                <td><input type="submit" name="enviar" value="Enviar" /></td>
                <td><input type="reset" value="Borrar" /></td>
                <br><br>
                <a href="1pantalla.php">Volver</a>

            </tr>

            
                
        </form>
    </body>
</html>   

