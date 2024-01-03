<?php
    //új számláló
    // session_start();

    // $fajlnev='./countertext/counter.txt';
        
    //     $f=fopen($fajlnev,"r");
    //     $n=fread($f,filesize($fajlnev));
    //     fclose($f);

    // if ($_SESSION['valami']!=1) {
    //     $n++;
    //     $f=fopen($fajlnev, "w");
    //     $w=fwrite($f, $n);
    //     fclose($f);

    //     $_SESSION['valami']=1;	
    // }
    //     if ($n>9999 && $n<=19999) {
    //         echo "<img style='width:20px;' src='./count/1SATF.GIF'>";
    //     }
    //     $szam=floor($n/1000);
    //     numberconverter($szam);
    //     $me=$n%1000;
    //     $szam=floor($me/100);
    //     numberconverter($szam);
    //     $mt=$n%100;
    //     $szam=floor($mt/10);
    //     numberconverter($szam);
    //     $megy=$n%10;
    //     $szam=floor($megy/1);
    //     numberconverter($szam);

    //     function numberconverter($szam)
    //     {
    //         if ($szam==9) {
    //             echo "<img style='width:20px;' src='./count/9SATF.GIF'>";
    //             return;
    //         } elseif ($szam==8) {
    //             echo "<img style='width:20px;' src='./count/8SATF.GIF'>";
    //             return;
    //         } elseif ($szam==7) {
    //             echo "<img style='width:20px;' src='./count/7SATF.GIF'>";
    //             return;
    //         } elseif ($szam==6) {
    //             echo "<img style='width:20px;' src='./count/6SATF.GIF'>";
    //             return;
    //         } elseif ($szam==5) {
    //             echo "<img style='width:20px;' src='./count/5SATF.GIF'>";
    //             return;
    //         } elseif ($szam==4) {
    //             echo "<img style='width:20px;' src='./count/4SATF.GIF'>";
    //             return;
    //         } elseif ($szam==3) {
    //             echo "<img style='width:20px;' src='./count/3SATF.GIF'>";
    //             return;
    //         } elseif ($szam==2) {
    //             echo "<img style='width:20px;' src='./count/2SATF.GIF'>";
    //             return;
    //         } elseif ($szam==1) {
    //             echo "<img style='width:20px;' src='./count/1SATF.GIF'>";
    //             return;
    //         } else {
    //             echo "<img style='width:20px;' src='./count/0SATF.GIF'>";
    //             return;
    //         }
    //     }

    //régi számláló
    
    $File = './countertext/counter.txt';
    # számláló fájl elérési úttal
    if (file_exists($File))
    # ha létezik a fájl
    {
    $fp = fopen($File,"r");
    # megnyitja olvasásra
    $num = fread($fp, filesize($File));
    # kiolvassa a tartalmát
    fclose($fp);
    # bezárja
    $num = $num + 1;
    # hozzáad egyet
    $fp = fopen($File, "w");
    # újra megnyitja írásra
    fwrite($fp, $num, 10);
    # felülírja az új értékkel és zárja a fájlt
    fclose($fp);
    echo("<B><span style='font-size:25px; letter-spacing: 8px;'>" . chop($num) . "</span></B>.");
    # kiírja a lapon az új értéket.
    }
    
?>