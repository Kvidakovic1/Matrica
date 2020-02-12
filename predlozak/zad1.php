<?php
 echo '<form action="" method="POST">';
for($i=0;$i<24;$i++){
    echo' <label for="broj">Upišite '. ($i+1) . '. broj:</label>
    <input type="number" name="'. $i .'" id="0">';
    }
    echo '<input type="submit" value="Postavi" >';
?>