<? 
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "base01");


$connection = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if(!$connection){
	die("La conexion a la base de datos fallo: " . mysql_error());
}
$db_select = mysql_select_db("base01",$connection);
if(!$db_select){
	die("La Seleccion de la base de datos fallo: " . mysql_error());
}

$querycont1= "SELECT * FROM contenidos WHERE seccion_id = 1";
$contenidos1 = (mysql_query($querycont1, $connection))
	if(mysql_affected_rows() == 1){
	   echo "si";
}else{
	echo 'fallo';
}

while($contenido1 = mysql_fetch_array($contenidos1)){
	echo $contenido1['titulo'];
	echo $contenido1['contenido'];
}

?>