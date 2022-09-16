<?php
$nombre = $_GET['nombre'] ??  'Víctor';
echo "<br>";
echo 'hola $nombre';
echo "<br>";
$cadena = "sHola soy Danis";
echo trim($cadena, "s");
echo "<br>";
$cadena1 = "abcdefgh";
echo strlen($cadena1);
echo "<br>";
$cadena2 = "Es en MINUSCULAS";
echo strtolower($cadena2);
echo "<br>";
$cadena3 = "es en mayusculas";
echo strtoupper($cadena3);
echo "<br>";
$cadena4 = "Esto es un Espejo español";
echo strlen($cadena4);
echo "<br>";
echo substr_count(strtolower($cadena4), "es");
echo "<br>";
$cadena5 = "Donde esta la letra ";
$letra = "a";
$pos = stripos($cadena5, $letra );
if ($pos === false){
    echo "La cadena $letra no fue encontrada en la cadena '$cadena5'";
} else {
    echo "La cadena $letra fue encontrada en la cadena '$cadena5' y ha sido encontrada en la posicion ", $pos;
}
echo "<br>";
$buscar = "o";
$sustituir = 0;
$cadena6 = "El otrO dia gano 0 veces";
$remplazar = str_ireplace($buscar, $sustituir, $cadena6);
echo $remplazar;
echo "<br>";
echo "<br>";
$url = 'http://username:password@hostname:9090/path?arg=value';
echo $url;
echo "<br>";
echo parse_url($url, PHP_URL_SCHEME);
echo "<br>";
echo parse_url($url, PHP_URL_USER);
echo "<br>";
echo parse_url($url, PHP_URL_PATH);
echo "<br>";
echo parse_url($url, PHP_URL_QUERY);

?>