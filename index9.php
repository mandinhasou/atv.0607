<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Atividade 9</title>
    <!--Faça um algoritmo que leia um número e informe se o mesmo é par ou ímpar.-->

    <?php
        $num = 0;
        if(isset($_POST['num']))
        $num = ($_POST['num'])
    ?>

</head>
<body>

<form action="" method="post">
    <fieldset>
        <legend>Número impar ou par</legend>
        Insira um número: <input type="number" name="num" id="num">
<br>
    <input type="submit" value="Enviar">
<br>
    <?php
        if($num % 2 == 0){
            echo "<h4> Par </h4>";
        } else {
            echo "<h4> Impar </h4>";
        }
    ?>
    </fieldset>
</form>
    
</body>
</html>