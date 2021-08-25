<?php 
     $files = scandir('./images/');
     foreach ($files as $key => $image) {
         if($image==="." || $image==="..") continue;
         echo "<div class='col-3' ><img class='img-fluid' src=\"./images/$image\"></div> " ;
     }
?>