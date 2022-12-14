<?php
$arrMatches = [
    "Fenerbahce - Olympiakos",
    "Stella Rossa - Zalgiris Kaunas",
    "Lyon-Villeurbanne",
    "Bayern- Partizan",
    "scoreh1" => "94",
    "scoret1" => "67",
    "scoreh2" => "12",
    "scoret2" => "45",
    "scoreh3" => "64",
    "scoret3" => "67",
    "scoreh4" => "58",
    "scoret4" => "100",
];


function checkMail($Mail)
{
    if (isset($_GET["email"])) {
        $Mail = isset($_GET["email"]);
        $messageRight = " email corretta";
        $messageWrong = "email sbagliata";

        $checkAt = strpos($Mail, "@");
        $checkFullstop = strpos($Mail, ".", $checkAt);
        if ($checkAt && $checkFullstop) {
            return $messageRight;
        } else {
            return $messageWrong;

        }
    } else {
        $messageFirst = "immetit la mail";
        return $messageFirst;

    }
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
    <div class="team">
        <h1>Partite di basket</h1>
        <h2 class="matches">
            <?= $arrMatches[0] ?>
                <span>
                    <?= $arrMatches["scoreh1"] ?>
                </span>
                <span> - </span>
                <span>
                    <?= $arrMatches["scoret1"] ?>
                </span>

        </h2>
        <h2>
            <?= $arrMatches[1] ?>
                <span>
                    <?= $arrMatches["scoreh2"] ?>
                </span>
                <span> - </span>
                <span>
                    <?= $arrMatches["scoret2"] ?>
                </span>
        </h2>

        <h2>
            <?= $arrMatches[2] ?>
                <span>
                    <?= $arrMatches["scoreh3"] ?>
                </span>
                <span> - </span>
                <span>
                    <?= $arrMatches["scoret3"] ?>
                </span>
        </h2>
        <h2>
            <?= $arrMatches[3] ?>
                <span>
                    <?= $arrMatches["scoreh4"] ?>
                </span>
                <span> - </span>
                <span>
                    <?= $arrMatches["scoret4"] ?>
                </span>
        </h2>
    </div>
    <!-- SNACK 2 -->
    <form method="get" action="">
        <label for="email"></label>
        <input type="text" id="email" name="email">
        <button>Check the E-Mail</button>
        <span>Email must contain at least 3 words, a @ and a .</span>
        <div>
            <?= checkMail($userMail) ?>
        </div>
    </form>
    <!-- SNACK 4 -->


    <!-- SNACK 1 WITH LOOP -->
    <!-- for ($i = 0; $i < count($arrMatches); $i++) { -->
    <!-- echo $arrMatches[$i]; -->
    <!-- } -->


</body>

</html>