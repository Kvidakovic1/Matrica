<?php

//print_r($_POST);

if(!isset($_POST['email']) || !isset($_POST['lozinka'])){
    echo "ne može";
    exit; //short curcuiting
}

if(strlen($_POST['email'])===0 
    || strlen($_POST['lozinka'])===0){
    header('location: prijava.php?g=1');
    exit;
}

//ide provjera prema bazi podataka
//trenutno zapečena provjera
if(!(
    $_POST['email']==='oper@edunova.hr' &&
    $_POST['lozinka']==='edunova')
){
    header('location: prijava.php?g=2');
    exit;
}

require_once 'predlozak/konfiguracija.php';

//u ovom trenutku sve je spremno da da logiram
$_SESSION['autoriziran']=$_POST['email'];
header('location: nadzornaPloca.php');

