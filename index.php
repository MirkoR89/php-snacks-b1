<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php

$matches = [
    'firstMatch' => [
        'visitingTeam' => 'Los Angeles Lakers',
        'hostTeam' => 'Golden State Warriors',
        'visitingScore' => 13,
        'hostScore' => 10
    ],
    'secondMatch' => [
        'visitingTeam' => 'Brooklyn Nets',
        'hostTeam' => 'Boston Celtics',
        'visitingScore' => 9,
        'hostScore' =>7
    ],
    'thirdMatch' => [
        'visitingTeam' => 'Miami Heat',
        'hostTeam' => 'Toronto Rapotors',
        'visitingScore' => 11,
        'hostScore' => 6
   ]
];

foreach ($matches as $key => $match) {
  $visitingTeam = $match['visitingTeam'];
  $hostTeam = $match['hostTeam'];
  $visitingScore = $match['visitingScore'];
  $hostScore = $match['hostScore'];

  echo "$visitingTeam - $hostTeam | $visitingScore - $hostScore ";
}

?>

<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti
“Accesso negato”  -->
