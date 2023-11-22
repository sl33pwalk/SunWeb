<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        Количество чисел: <input type="text" name="count" id="">
        <button type="submit">Отправить</button>
    </form>
    <?php
    if (isset($_POST) && !empty($_POST)) {
    ?>
    <ul>
        <?php
        require_once('func.php');

        $fibonacci = (getFibonacci($_POST['count']));
        for ($i = 0; $i < count($fibonacci); $i++) {
        ?>
            <li><?= $fibonacci[$i] ?></li>
        <?php
        }
        ?>
    </ul>
    <?php
        }
        ?>
</body>

</html>