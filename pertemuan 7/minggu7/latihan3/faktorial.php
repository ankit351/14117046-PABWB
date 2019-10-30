<?php
function faktorial($value){
     $hasil= 1;
    for($i=$value; $i>0; $i--){
        $hasil = $hasil * $value;
    }
    echo "Faktorial dari $value adalah $hasil " ;
}
$value = 4;
faktorial($value);
?>

