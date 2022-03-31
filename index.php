<?php
    $x = 5;
    $name = "aymen";
    $notes = [12,14,16];
    function whoIam() {
        echo $GLOBALS['name'];
    }
    whoIam();
    var_dump($GLOBALS);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    cc GL2 G2 Je suis <?= $x?>

    <table border="2">
        <?php
        foreach($notes as $note) { ?>
         <tr>
            <td><?= $note ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>