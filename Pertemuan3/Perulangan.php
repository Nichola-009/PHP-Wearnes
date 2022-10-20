<?php

    
/*  for 
    while
    do... while
    foreach : perulangan yang di khususkan untuk array
    */

    //for
    for ($i = 0; $i <= 10; $i++)
    {
        echo "$i . Halo Dunia <br>";  
    }
        echo "<h1> Ini Pake Perulangan FOR</h1>";

    //while
    // $i = 0;
    // while($i <  5);
    // {
    //     echo "Hello Cuy";
    //     $i++;
    // }

    $i = 0;
    do {
        echo "Hello Cuy <br>"; // Dijalankan Sekali
        $i++; //Increment / Nambah
    } while (false); // Jika Kondisi True Maka Akan Di Jalankan