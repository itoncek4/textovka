<?php
if ( $cesta == "" ) {
				echo "Pros�m p�ihla�te se n�e";
				$cesta = "login";
				} 
require_once ( "login.php" );
require_once ( "hesla.php" );
$heslo = $_POST["r_heslo"];
$jmeno = $_POST["r_uzivatel"];
if ( empty ( $heslo ) )
				 die();
if ( $heslo == $hesla[$jmeno]["heslo"] ) {
				echo "true <br>";
				 echo "Jm�no: $jmeno <br>";
				 echo "Cel� jm�no:" . $hesla[$jmeno]["jmeno"];
				 $cesta = "system";
} 
