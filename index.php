<?php 

// GOAL:
// Snack 1
// Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$squadre = ["Milano - Cantu", "Sassari - Treviso","Roma - Trieste", "Cagliari - Como"];
$risultati = ['55-60', '101-80', '48-48','79-65'];
$casa = ['Squadra di Casa', 'Squadra Ospite'];


for ($i=0; $i < count($squadre)  ; $i++) { 
    $elem = $squadre[$i];
    echo $elem.'<br>';

    for ($y=0; $y < count($risultati)  ; $y++) { 
        $ris = $risultati[$y];
        echo $ris.'<br>';
    }
}
echo '<br>';






// var_dump ($risultati);
// echo '<br>';

// echo $squadre[0].' '.' - '.$squadre[1].' '.$risultati[0];
// echo '<br>';
// echo $casa[0];

// Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

// Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta

?>