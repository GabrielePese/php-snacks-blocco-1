<?php 

// GOAL:
// Snack 1
// Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60
echo 'Snack 1';
echo '<br>';

$squadre = ["Milano - Cantu", "Sassari - Treviso","Roma - Trieste", "Cagliari - Como"];
$risultati = ['55-60', '101-80', '48-48','79-65'];
$casa = ['Squadra di Casa', 'Squadra Ospite'];

for ($i=0; $i < count($squadre)  ; $i++) { 
    $elem = $squadre[$i];
    $ris = $risultati[$i];
   
    echo $elem. ' | '.$ris;
    echo '<br>';
}

echo '<br>';

// Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
echo 'Snack 2';
echo '<br>';
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];


$isDotPresent = strpos($mail, '.'); 
$isAtPresent = strpos($mail, '@');
$isNumero = is_numeric($age);

$nome = strlen($name);
if ($nome > 3 && $isDotPresent && $isAtPresent && $isNumero){
    echo 'Accesso riuscito';
}
else{
    echo 'Accesso negato';
}
echo '<br>';


// Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
echo '<br>';
echo 'Snack3';
echo '<br>';

for ($i = 1; $i < 16;$i++){
    
    
    $numbs = rand(1,20);
    if($numbs !== $numeri[$i]){
        $numeri[] = $numbs;
    }
    

}

var_export ($numeri);

?>
