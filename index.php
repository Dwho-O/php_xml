<?php
$link = "element.xml";
$xml = simplexml_load_file($link)->mes;
$i = 0;
$vlrTotal = 0;
$media = 0;


for ($i = 0; $i < 5; $i++) {
    echo utf8_decode("O dia ".$i." valor: " . $xml->dia[$i]."<br/>");

    $vlrTotal += $xml->dia[$i]; //valor total
}
$media = ($vlrTotal / 5);
echo "<br/>";
$aux=$vlrTotal;
for ($i = 0; $i < 5; $i++) {
    if ($xml->dia[$i] > $media) {
        echo 'O dia ' . $i .  ' com valor ' . $xml->dia[$i] . ' é maior que a média<br/>';
    }
    if($xml->dia[$i] < $aux){
        $aux = $xml->dia[$i];
    }
}
echo "Menor valor: ".$aux."<br/>";
echo "Média: " . $media;
