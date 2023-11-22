<?php
require_once('func.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nodnok</title>
</head>

<body>
    <form action="" method="POST">
        Число 1: <input type="text" name="num1" id="">
        Число 2: <input type="text" name="num2" id="">
        <select name="type" id="">
            <option value="nok">НОК</option>
            <option value="nod">НОД</option>
        </select>
        <button type="submit">Отправить</button>
    </form>
    <?php
    if (isset($_POST) && !empty($_POST)) {
        if ($_POST['type'] === 'nok') {
    ?>
            <p>Для вычисления наименьшего общего кратного (НОК) чисел <?= $_POST['num1'] ?> и <?= $_POST['num2'] ?>, мы можем воспользоваться формулой:</p>
            <p>НОК(a,b) = (a*b)/НОД(a,b)</p>
            <p>Найдем сначала НОД(<?= $_POST['num1'] ?>,<?= $_POST['num2'] ?>)</p>
            <p><?= $_POST['num1'] ?> = <?= factors($_POST['num1']) ?></p>
            <p><?= $_POST['num2'] ?> = <?= factors($_POST['num2']) ?></p>
            <p>Таким образом, НОД(<?= $_POST['num1'] ?>,<?= $_POST['num2'] ?>) = <?= gcd($_POST['num1'], $_POST['num2']) ?></p>
            <p>Теперь можем вычислить НОК(<?= $_POST['num1'] ?>,<?= $_POST['num2'] ?>):</p>
            <p>НОК(<?= $_POST['num1'] ?>,<?= $_POST['num2'] ?>) =
                (<?= $_POST['num1'] ?> * <?= $_POST['num2'] ?>)/НОД(<?= $_POST['num1'] ?>,<?= $_POST['num2'] ?>) =
                (<?= $_POST['num1'] ?> * <?= $_POST['num2'] ?>)/<?= gcd($_POST['num1'], $_POST['num2']) ?> =
                <?= multipNum($_POST['num1'], $_POST['num2']) ?>/<?= gcd($_POST['num1'], $_POST['num2']) ?> =
                <?= lcm($_POST['num1'], $_POST['num2']) ?> </p>
            <p>Таким образом, НОК(<?= $_POST['num1'] ?>,<?= $_POST['num2'] ?>) = <?= lcm($_POST['num1'], $_POST['num2']) ?></p>
        <?php
        }
        if ($_POST['type'] === 'nod') {
        ?>
            <p>Для вычисления наибольшего общего делителя чисел <?= $_POST['num1'] ?> и <?= $_POST['num2'] ?>, мы можем воспользоваться разложить эти числа на множители и выбрать наибольший делитель, встретившийся у обоих чисел:</p>
            <p><?= $_POST['num1'] ?> = <?= factors($_POST['num1']) ?></p>
            <p><?= $_POST['num2'] ?> = <?= factors($_POST['num2']) ?></p>
            <p>Таким образом, НОД(<?= $_POST['num1'] ?>,<?= $_POST['num2'] ?>) = <?= gcd($_POST['num1'], $_POST['num2']) ?></p>
    <?php
        }
    }

    ?>
</body>

</html>