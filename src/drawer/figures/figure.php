<style>
    .circle {
    <?php 
    
        $color = 0;
        if (!empty($_GET['color'])) {
            $color = $_GET['color'];
        };

        switch($color) {
            case 1:
                echo("background-color: red;");
                break;
            case 2:
                echo("background-color: green;");
                break;
            case 3:
                echo("background-color: blue;");
                break;
            default:
                echo("background-color: black;");
                break;
        }
    ?>
    width:100px;
    height: 100px;
    border-radius: 50%;
    margin:20px auto;
}

.square {
        <?php 
    
        $color = 0;
        if (!empty($_GET['color'])) {
            $color = $_GET['color'];
        };

        switch($color) {
            case 1:
                echo("background-color: red;");
                break;
            case 2:
                echo("background-color: green;");
                break;
            case 3:
                echo("background-color: blue;");
                break;
            default:
                echo("background-color: black;");
                break;
        }
    ?>
    width:100px;
    height: 100px;
    margin:20px auto;
}

.arrow-up {
    width: 0;
    height: 0;
    border-left: 60px solid transparent;
    border-right: 60px solid transparent;
    <?php 
    
        $color = 0;
        if (!empty($_GET['color'])) {
            $color = $_GET['color'];
        };

        switch($color) {
            case 1:
                echo("border-bottom: 60px solid red;");
                break;
            case 2:
                echo("border-bottom: 60px solid green;");
                break;
            case 3:
                echo("border-bottom: 60px solid blue;");
                break;
            default:
                echo("border-bottom: 60px solid black;");
                break;
        }
    ?>
    margin: 20px auto;
}
</style>


<?php

    $figure = 0;
    if (!empty($_GET['figure'])) {
        $figure = $_GET['figure'];
    };

    switch($figure) {
        case 1:
            echo("<div class='circle'></div>");
            break;
        case 2:
            echo("<div class='square'></div>");
            break;
        case 3:
            echo("<div class='arrow-up'></div>");
            break;
        default:
            echo("<div>Неверный код</div>");
            break;
    }
?>

