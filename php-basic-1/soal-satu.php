<?php
echo "<h3> Soal No 1</h3>";

$string = "Hello PHP!";
    echo "Panjang String: " . strlen($string);
    echo ", ";
    echo "jumlah kata: " . str_word_count($string);
    echo " ";
    echo "<b>Dari kata " . $string . "</b><br>";

$string = "I'm ready for the challenges";
    echo "Panjang String: " . strlen($string);
    echo ", ";
    echo "jumlah kata: " . str_word_count($string);
    echo " ";
    echo "<b>Dari kata " . $string . "</b><br>";


echo "<h3> Soal No 2</h3>";
        
$string2 = "I love PHP";
    echo "<label>String: </label> \"$string2\" <br>";
    echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
    echo "Kata kedua: " . substr($string2, 2,5 ) ;
    echo "<br> Kata Ketiga: " . substr($string2, 6,8 ) ;
    
echo "<h3> Soal No 3 </h3>";
        
    $string3 = "PHP is old but Good!";
    echo "String: \"$string3\" ";
    echo "<br>";
    echo str_replace ("Good", "Awesome", $string3);

?>