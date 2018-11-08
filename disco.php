<?php

$dev = '/';
$freespace = disk_free_space($dev);
$totalspace = disk_total_space($dev);
$freespace_mb = $freespace/1024/1024;
$totalspace_mb = $totalspace/1024/1024;
$freespace_percent = ($freespace/$totalspace)*100;
$used_percent = (1-($freespace/$totalspace))*100;

echo $freespace_percent. "\n";

echo $used_percent;

////////////datos para la conexion a la base de datos
$link = mysql_connect("localhost","usuariomysql","contrasena");
mysql_select_db("mibase", $link);
$result = mysql_query("UPDATE raiz SET espacio='$used_percent' WHERE id=2;", $link);
$result = mysql_query("UPDATE raiz SET espacio='$freespace_percent'WHERE id=1;", $link);
?>
