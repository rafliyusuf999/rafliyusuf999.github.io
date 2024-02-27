<?php
if(isset($_POST['alas']) && isset($_POST['tinggi'])){
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];

    $luas = $alas * $tinggi / 2;
    echo "Luas Segitiga = ".$luas;
}
?>
