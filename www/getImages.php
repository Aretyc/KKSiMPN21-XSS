<?php 
     $files = scandir('./images/');

     foreach ($files as $key => $image) {
         echo "<div class='col-3' ><img class='img-fluid' src='./images/$image'></div> " ;
     }
?>