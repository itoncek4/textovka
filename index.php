<?php
if ( $cesta == "" ) {
				echo "Prosím pøihlašte se níže";
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
				 echo "Jméno: $jmeno <br>";
				 echo "Celé jméno:" . $hesla[$jmeno]["jmeno"];
				 $cesta = "system";
} 
