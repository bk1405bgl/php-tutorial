<?php
    require_once "Classes/Mensch.php";
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Tutorial Nachbau</title>
</head>
<body>
    <div class="bg-black text-white">
        <?= "Hello";

        $bilal = new Mensch();
        $bilal->setVorname("Bilal");
        $bilal->setNachname("Kuzey");
        $bilal->setGeburtsdatum('1984-11-21');
        var_dump($bilal);
        ?>
    </div>
</body>
</html>