<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <ul>
    <?php
        require_once('func.php');
        $fibonacci = (getFibonacci(10));
        for ($i = 0; $i < count($fibonacci); $i++) {
        ?>
            <li><?= $fibonacci[$i] ?></li>
        <?php
        }
        ?>
    </ul>
</body>

</html>