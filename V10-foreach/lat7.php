<?php 

    // pengulangan for increment (++)
    for ($i=1; $i <= 12; $i++) { 
        echo $i . ',';
        
    }
    echo '<br><br>';
    for ($i=1; $i <= 12; $i=$i+2) { 
        echo $i . ',';
    }
    echo '<br><br>';
    echo '<br><br>';
    // pengulangan for decrement (--)
    for ($i=12; $i > 0 ; $i--) { 
        echo $i . ',';
    }
    echo '<br><br>';
    for ($i=12; $i > 0 ; $i=$i-2) { 
        echo $i . ',';
    }
    echo '<br><br>';
    echo '<br><br>';
    // pengulangan dengan while
    $a = 1;
    while ($a <= 10) {
        echo $a.',';
        $a++;
    }
    echo '<br><br>';
    // pengulangan dengan do while
    $b=1;
    do {
        echo $b.',';
        $b++;
    } while ($b <= 8);



?>