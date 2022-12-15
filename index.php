<?php
$arrMatches = [
    [
        "casa" => [
            "nome" => "Olimpiakos",
            "punteggio" => "95"
        ],
        "ospite" => [
            "nome" => "Zagabria",
            "punteggio" => "67",
        ],
    ],
    [
        "casa" => [
            "nome" => "Stella Rossa",
            "punteggio" => "95"
        ],
        "ospite" => [
            "nome" => "Lyon-Villeurbanne",
            "punteggio" => "67",
        ],
    ],
    [
        "casa" => [
            "nome" => "Zalgiris Kaunas",
            "punteggio" => "95"
        ],
        "ospite" => [
            "nome" => "Partizan",
            "punteggio" => "67",
        ],
    ],
    [
        "casa" => [
            "nome" => "Bayern",
            "punteggio" => "95"
        ],
        "ospite" => [
            "nome" => "Dinamo Kiev",
            "punteggio" => "67",
        ],
    ],
];
$nrandoms = 15;
$arr_randoms = [];
while (count($arr_randoms) < $n_randoms){
    $random_number ? rand($min, $max);
    if(!in_array($random_number, $arr_randoms))
    $arr_randoms[] = $random_number;

} 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Snacks-b1</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- SNACK 1 -->
    <h1>Partite di basket</h1>
    <ul>
        <?php
        $arrMatches_lenght = count($arrMatches);
        for ($i = 0; $i < $arrMatches_lenght; $i++) {
            $match = $arrMatches[$i];
            echo "<li>" . $match['casa']['nome'] . '-' . $match['ospite']['nome'] . '-' . $match['casa']['punteggio'] . '-' . $match['ospite']['punteggio'] . "</li>";
        }
        ?>
    </ul>

    <!-- SNACK 2 -->
    <?php
    $firstname = isset($_GET["firtname"]) ? $_GET["firstname"] : "";
    $mail = $_GET["firstname"] ?? "";
    $_GET["age"] ??= "";
    $age = $_GET["age"];
    if () {
        # code...
    }
    if ($checkAt && $checkFullstop) {
        return $messageRight;
    } else {
        return $messageWrong;

    }
} else {
    $messageFirst = "immetti la mail";
    return $messageFirst;

}
?>
    <form method="get" action="">
        <label for="email"></label>
        <input type="text" id="email" name="email">
        <label for="firstname"></label>
        <input type="text" id="firstname" name="firstname">
        <label for="age"></label>
        <input type="text" id="age" name="age">

        <button>Check the E-Mail</button>
        <span>Email must contain at least 3 words, a @ and a .</span>
        <div>
            <?php
            $Mail = isset($_GET["email"]);

            function checkMail($Mail)
            {
                if (isset($_GET["email"])) {
                    $messageRight = " email corretta";
                    $messageWrong = "email sbagliata";

                    $checkFullstop = strpos($Mail, ".", $checkAt);
                    
            }
            ?>
            <?= checkMail($Mail) ?>
        </div>
    </form>
    <?php 
    
    ?>



</body>

</html>