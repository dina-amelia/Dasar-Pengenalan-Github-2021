<?php

$bangun = array(
    array('Segitiga','Persegi','Persegi Panjang','Lingkaran'),
    array('Segitujuh','Persegi','Persegi Panjang','Lingkaran'),
    array('Segidelapan','Persegi','Persegi Panjang','Lingkaran')
);
?>

<ul>
    <?php foreach($bangun as $key => $value):?>
    <li>Kota - kota di <?= $value[0]?>adalah
    <?= $value[1].','.$value[2].','.$value[3]?></li>
    <?php endforeach ?>

</ul>
