<?php
if ( !isset ( $cesta ) ) {$cesta = "";}
if ( isset ( $_POST["cesta"] ) ) {$cesta = $_POST["cesta"];}

switch ($cesta) {
    case "prihlaseni":
		require_once ( "hesla.php" );
		$heslo = $_POST["r_heslo"];
		$jmeno = $_POST["r_uzivatel"];
		if ( empty ( $heslo ) )
				 die();
		if ( $heslo == $hesla[$jmeno]["heslo"] ) {
				 echo "true <br>";
				 echo "Jmeno: $jmeno <br>";
				 echo "Cele jmeno:" . $hesla[$jmeno]["jmeno"];
		}
                <form class="prihlaseni" action="index.php" method="post">

        break;
    default:
        echo "Prihlaste se prosim";
        require_once ( "login.php" );

}