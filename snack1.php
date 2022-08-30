<?php
$results = [
    ["Home" => "Napoli", 
     "Away" => "Milano", 
     "HomeScore" => "63", 
     "AwayScore" => "73"],

    ["Home" => "Trieste",
     "Away" => "Brindisi", 
     "HomeScore" => "84", 
     "AwayScore" => "82"],

    ["Home" => "Varese",
     "Away" => "Brescia", 
     "HomeScore" => "75",
     "AwayScore" => "72"],  
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>

</head>
<body>
    <h1>Serie A Basket</h1>
    <h2>Giornata 1</h2>
    <ul>
        <?php for ($i = 0; $i < count($results); $i++): ?>
        <li><?=$results[$i]['Home']?> - <?=$results[$i]['Away']?> | <?=$results[$i]['HomeScore']?> - <?=$results[$i]['AwayScore']?></li>
        <?php endfor?>
    </ul>
</body>
</html>