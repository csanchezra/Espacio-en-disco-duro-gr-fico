<?php

exec('php /var/www/html/carpeta_de_proyecto/disco.php');

// MySQL database connection code
$connection = mysqli_connect("localhost","usuariomysql","contrasena","mibase") or die("Error " . mysqli_error($connection));


$sql = "SELECT * FROM raiz";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
//create an array
$array = array();
$i = 0;
while($row = mysqli_fetch_assoc($result))
{
    $tipo = $row['tipo'];
    $espacio = $row['espacio'];
    $array['cols'][] = array('type' => 'string');
    $array['rows'][] = array('c' => array( array('v'=> $tipo), array('v'=>(int)$espacio)) );
}
$data = json_encode($array);
echo $data;
?>
