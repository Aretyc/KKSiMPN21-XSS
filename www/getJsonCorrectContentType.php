<?php 
header('Content-Type: application/json');
    $list = array(
        "Jan",
        "Adam",
        "Urszula",
        "Krzysztof",
        "Aneta",
        "Patrycja",
        "Eustachy",
        "<img src='' onerror='alert(1)'>"
    );

    echo json_encode($list);

?> 