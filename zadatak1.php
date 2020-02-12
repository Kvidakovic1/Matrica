<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'?>
  </head>
  <body>
<div class="grid-container">
  <?php
  include_once 'predlozak/izbornik.php'
  ?>
  <div class="grid-x">
    <div class="large-12 small-12 columns">
      <div class="callout" style="min-height: 400px">
      <div> 
      <?php
      include_once 'predlozak/zad1.php';
      ?>
      </div>
        <?php
        $zbroj=0;
        $niz=[];
        for($i=0;$i<24;$i++){
         
          $niz[$i]=$_POST[$i];
          $zbroj=$zbroj+$niz[$i];
        }
        echo '</br>' . 'Najveći broj je:' . max($niz);
        echo '</br>' . 'Najmanji broj je:' . min($niz);
        echo '</br>' . 'Zbroj niza je:' . $zbroj;
        ?>
      </div>
    </div>
  </div>
  <?php include_once 'predlozak/podnozje.php'?>
</div>
<?php
require_once 'predlozak/skripte.php';
 ?>
  </body>
</html>