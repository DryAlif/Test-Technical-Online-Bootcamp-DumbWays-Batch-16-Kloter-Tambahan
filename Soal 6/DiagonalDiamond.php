<?php 
// php program to print 
// diagonal pattern 

function pattern($n) 
{ 
    if ($n % 2 == 0){
        echo "Angka $n Bukan Bilangan Ganjil"; //Kondisi false
    } else {


    // For printing upper portion 
    $c1 = floor(($n - 1) / 2); 
    // For printing lower portion 
    $c2 = floor(3 * $n / 2 - 1); 

        for ($i = 0; $i < $n; $i++) 
        { 

            for ($j = 0; $j < $n; $j++)  
            { 
                if ($i + $j == $c1 || $i - $j == $c1 ||  
                    $j - $i == $c1 || $i + $j == $c2 ||  
                    $i == $c1 || $j == $c1) 
                    echo "*"; 
                else
                    echo " "; 
            } 
            echo "\n"; 
        } 

    }
} 
    $n = 9; 
    pattern($n); 
?> 