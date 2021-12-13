
<?php
$host = "localhost";
$dbname = "db_mantenimiento";
$username = "prueba";
$password = "c8u$7ShG";

/*
$connec = mysqli_connect($servername,$username,$password,$dbname);

                
        $datos = mysqli_fetch_array(mysqli_query($connec," SELECT   FROM  c_contreras  "));
      
      

      echo  $data = json_encode($datos);


  


?>
$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password );
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$que = "SELECT * FROM c_contreras";
$resultado = $conn->prepare($que);
$resultado->execute();

//variable tipo array
$data = array();

while ($row = $resultado->fetch(PDO::FETCH_ASSOC)){
    $data [] = $row;
}
echo json_encode($data);
?>

*/

  
try {
    $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
    die("Connection error: " . $exception->getMessage());
}

$arreglo = array();

$query = $db->prepare(" SELECT * FROM c_contreras ORDER BY Fecha ");
$query->execute();
$data = $query->fetchAll();

foreach ($data as $row): 
        $fecha = $row['Fecha'];
        $taller = $row['Name_taller'];
        $costos = $row['Costos'];
        $kilometraje = $row['Kilometraje'];
        $mantenimiento= $row['Tipo_mantenimiento'];
        $observaciones= $row['Observaciones'];

$arreglo[] = array("fecha" => $fecha,
"taller" => $taller,
"costos" => $costos,
"kilometraje" => $kilometraje,
"mantenimiento" => $mantenimiento,
"observaciones" => $observaciones);

endforeach;

// Encoding array in JSON format
echo json_encode($arreglo);
?>


