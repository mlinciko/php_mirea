<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Drawer</title>
</head>
<body>
    Здесь будем рисовать
    <form action="" method="GET">
        <div class="input">
            <label for="figure">Код фигуры</label>
            <input id="figure" type="text" name="figure">
        </div>
        <div class="input">
            <label for="color">Код цвета</label>
            <input id="color" type="text" name="color">  
        </div>
        
        <input type="submit" value="Нарисовать">
    </form>

    <div class="figure">
        <?php
            require("figures/figure.php")
        ?>
    </div>
</body>
</html>