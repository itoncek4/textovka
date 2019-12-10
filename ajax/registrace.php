<?php
session_start();
require_once '../configuration.php';
$chyba = array();
if(isset($_POST['r_uzivatel'])){
    $r_uzivatel = $_POST['r_uzivatel'];
    if(strlen($r_uzivatel)<3){
        $chyba['uz_malo_znaku'] = 'Uživatalské jméno má méně než 3' ;

    }
} else {
    $chyba['chybi_uz_jmeno'] = 'Chybí uživatalské jméno';
}
if(isset($_POST['r_heslo'])){
    $r_heslo = $_POST['r_heslo'];
    if(strlen($r_heslo)<6){
        $chyba['heslo_malo_znaku'] = 'Uživatalské heslo má méně než 6' ;
    }
} else {
    $chyba['chybi_uz_heslo'] = 'Chybí uživatalské jméno';
}


header('Location: /menu/');