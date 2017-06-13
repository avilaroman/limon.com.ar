<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tabla coloreada</title>
<style type="text/css">
.bg1 { background:#E2E2E2; color:#000; }
.bg2 { background:#3B3B3B; color:#FFF; }
</style>
</head>
<body>
<?php
$nombres = array('Juan', 'Pepe', 'Jorge', 'Sumolari');
$apellidos = array ('P&eacute;rez', 'L&oacute;pez', 'Garc&iacute;a', 'Puntocom');
$fila = 0;
$filas_totales = 4;
echo '<table><tr class="bg1"><td><strong>Nombre:</strong></td><td><strong>Apellidos</strong></td></tr>';
do {
$fila2 = $fila / 2;
if (is_int($fila2)) { $estilo = 'bg2'; } else { $estilo = 'bg1'; }
echo '<tr class="'.$estilo.'">';
echo '<td>'.$nombres[$fila].'</td><td>'.$apellidos[$fila].'</td>';
echo '</tr>';
$fila++;
} while ($fila < $filas_totales);
echo '</table>';
?>
</body>
</html>