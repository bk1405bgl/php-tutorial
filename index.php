<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
        <?php echo "Hello<br><br>"; ?>
    </div>
    <div class="text-green-800">
        <?php $bilal = new Mensch("Bilal", "Kuzey", "1984-11-21");
        var_dump($bilal);
        ?>
    </div>
</body>
</html>
