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
    
<form action="" method="post">
Unesi 2 broja: 
<input type="number" name="a"><br>
<input type="number" name="b"><br>
<input type="submit" value="Pokreni">
</form>

<?php 
              $a=$_POST['a'];
              $b=$_POST['b'];
            
              $manji=$a>$b ? $b : $a;
              $veci=$a<$b ? $b : $a;
            
            
              echo 'Prosti brojevi izmedu ' . $manji . ' i ' . $veci . ' su: ';
              
              for($i=$manji+1;$i<$veci;$i++)
              {
                $pokazatelj=false;
                for($j=2;$j<$i;$j++)
                {
                  if($i%$j==0) $pokazatelj=true;
                }
                  if($pokazatelj===false) echo $i . ' ';
               }
             
             
              
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