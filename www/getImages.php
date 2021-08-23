<?php 
     $files = scandir('./images/');
    

     foreach ($files as $key => $image) {
         echo "<img src='$image'>" ;
     }

    // while($row = $result->fetch_assoc()) {
    
    //     echo '<div class="card my-2">
    //             <div class="card-body">
    //                 '.$row["comment"].'
    //             </div>
    //         </div>
    //         ';
    // }
    // } else {
    // echo "brak komentarzy";
    // }
    // $conn->close();


?>