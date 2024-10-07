<?php $root = $_SERVER['DOCUMENT_ROOT'];?>

<?php
//Formatea un número con los miles y decimales.
$number = 1085.33;
echo number_format($number, decimals: 2); //44.094,00


//Una frase todo en minusucla pasa las primeras letras despues de una separacion a mayusucula
$nombre = "ola pepe";
echo ucwords($nombre);
?>




<?php include($root . '/student71/dwes/files/header.php')?>
<?php include($root . '/student71/dwes/files/footer.php')?>