<?php

    $nama = "Steiven";
    $umur = "21";
    $tinggi = 172;



    // $kalimat = "halo, nama saya $nama, umur saya adalah $umur tahun, dan tinggi badan saya adalah $tinggi cm";

   //  echo $kalimat;

   /*
   

    if($nama == "Steiven")
    {
        echo "benar itu Steiven";
    } else {
        echo "kamu siapa";
    }
    
    */

    // percabangan switch

    /*

    switch($nama) {
        case "Steiven";
        echo "benar itu Steiven";
        break;
        default;
        echo "kamu siapa ?";
    }
    */

    // ternary operator

    /*

    $kalimat = $nama == "Steiven" ? "benar itu Steiven" : "kamu siapa?"

    echo $kalimat

    */

    //perulangan for

    /*

    for($i=0; $i < 10; $i++) {
        echo "ini adalah perulangan ke=$i";
        echo "<br/>";
    }

    */

    //perulangan while

    /*
    $i = 0;
    while ($i <=10) {
        echo "ini adalah perulangan ke=$i";
        echo "br/>";
        $i++;

    }
    */

    // perulangan do while

    /*

    $i = 0;
    do {
        echo "ini adalah perulangan ke=$i";
        echo "br/>";
        $i++;

    }  while ($i < 11);

    */

    $nama = array("Steiven", "Chrozo", "Slyn", "mulanaking", "Antarez", "Spiegel");

    foreach ($nama as $sebutan) {
        echo "nama saya adalah $sebutan";
        echo "<br/>";
    }

    // user-define function
    /*
    function sebut_nama($nama) {
        $sebut = "halo, nama saya $nama";
        return $sebut;
    }

    echo sebut_nama($nama)
    */

    //build-in function

    /*
    echo strlen
 

?>