<?php
if($argc < 7){
    exit;
}
$username = $argv[1];
$password = $argv[2];
$database = $argv[3];
$servername = $argv[4];
$table = $argv[5];
$output = $argv[6];

$enlace = mysqli_connect($servername, $username, $password, $database);

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos $database es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;
$sql = 'SELECT id_user,first_name,last_name,city,phone_number from '. $table;

if ($resultado = mysqli_query($enlace, $sql)) {
    $handle = fopen($output, 'w') or die('Cannot open file:  '.$output);
    while ($fila = mysqli_fetch_assoc($resultado)) {
        fwrite($handle,$fila['id_user'].",".$fila['first_name'].",".$fila['last_name'].",".$fila['city'].",".$fila['phone_number']."\n");
    }
    fclose($handle);
}else{
    echo "hola";
}

$enlace->close();
?>