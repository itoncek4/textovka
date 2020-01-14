<?php
require_once ( "login.php" );
require_once ( "hesla.php" );
$heslo = $_POST["r_heslo"];
$jmeno = $_POST["r_uzivatel"];
echo $jmeno;
if ( $heslo == $hesla[$jmeno]["heslo"] )
				 echo "true"; 
                 