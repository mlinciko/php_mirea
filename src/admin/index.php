<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <title>Администрирование</title>
</head>
<body>

        <div class="commandline-container">
            Терминал
            <div class="commandline">
            <form action="" method="post">
                <input name="command" class="input" type="text">
            </form>
            <div class="output">
                <?php
                    $output=null;
                    $retval=null;
                    if (!empty($_POST['command'])) {
                        $command = $_POST['command'];
                        $commands = ['ls', 'whoami', 'id', 'ps'];
                        if (in_array($command, $commands)) {
                            exec($command, $output, $retval);
                            foreach ($output as $value) {
                                echo $value, " ";
                            }
                        }
                        else {
                            echo "Запрещенная команда!";
                        }
                    }
                ?>
            </div>
            </div>
        </div>
</body>
</html>