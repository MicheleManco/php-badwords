<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helloworld</title>
</head>
<body>
    <?php
        $ciao = "ciao! questo è il mio primo esperimento con php!";
        $count = str_word_count($ciao)
    ?>
    <p><?php echo $ciao ?></p>
    <p>questa frase è composta da <?php  echo $count + 1 ;?> parole</p>
</body>
</html>