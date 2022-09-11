<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <title>Сортировка</title>
</head>
<body>
    <form action="" method="post">
        <div class="editor">
            <label for="one">Введите число от 1 до 10</label>
            <input type="number" id="one" name="one" min="1" max="10" required>
        </div>
    
        <div class="editor">
            <label for="two">Введите число от 1 до 10</label>
            <input type="number" id="two" name="two" min="1" max="10" required>
        </div>

        <div class="editor">
            <label for="three">Введите число от 1 до 10</label>
            <input type="number" id="three" name="three" min="1" max="10" required>
        </div>
    
    
        <div class="editor">
            <label for="four">Введите число от 1 до 10</label>
            <input type="number" id="four" name="four" min="1" max="10" required>
        </div>

        <div class="editor">
            <label for="five">Введите число от 1 до 10</label>
            <input type="number" id="five" name="five" min="1" max="10" required>
        </div>
        <div class="editor">
            <input type="submit" value="Сортировать">
        </div>
    </form>

    <?php
        $one = 0;
        $two = 0;
        $three = 0;
        $four = 0;
        $five = 0;
        if (!empty($_POST['one'])) {
            $one = (int)$_POST['one'];
        };
        if (!empty($_POST['two'])) {
            $two = (int)$_POST['two'];
        };
        if (!empty($_POST['three'])) {
            $three = (int)$_POST['three'];
        };
        if (!empty($_POST['four'])) {
            $four = (int)$_POST['four'];
        };
        if (!empty($_POST['five'])) {
            $five = (int)$_POST['five'];
        };

        $array = array($one, $two, $three, $four, $five);
        ?>

        <div>Изначальный массив: <?php 
        foreach ($array as $value) {
            echo $value, " ";
        } ?>
        </div>

        <?php
        //сортировка вставками
        for ($i = 0; $i < count($array) - 1; $i++) {
            $key = $i + 1;
            $temp = $array[$key];
            for ($j = $i + 1; $j > 0; $j--) {
                if ($temp < $array[$j-1]) {
                    $array[$j] = $array[$j-1];
                    $key = $j - 1;
                }
            }
            $array[$key] = $temp;
        }
        ?>

        <div>Отсортированный массив: <?php 
        foreach ($array as $value) {
            echo $value, " ";
        } ?>
        </div>
</body>
</html>