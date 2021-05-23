<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

 
<?php
echo $_SERVER['HTTP_USER_AGENT'] ;
echo "<br />";
 
//private $datos;

$datos = "Prueba";

print_r($datos);

if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.<br />";
} else {
  echo "Cookies are disabled.<br />";
} 

if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE) {
?>
<p> Esta usado Explores </p>

<?php 
} else {
?>
<p> Usa otro </p>

<?php 
}
?>


</body>
</html>
