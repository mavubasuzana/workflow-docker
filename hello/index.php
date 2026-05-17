<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Praticando - Web</title>
</head>
<body>

    <h1>My first PHP page</h1>
    <br>
    <h2>Hello World!</h2>
    <br>

    <p>Olá, meu nome é <strong>Suzana.</strong></p>

    <?php
    date_default_timezone_set("America/Sao_Paulo");
    ?>
    <p>
        Hoje é dia
        <strong><?php echo date("d/m/Y"); ?> </strong>
        e agora são <strong><?php echo date("H:i:s"); ?></strong>
    </p>

    <hr>
    <a href="../">Voltar</a>


</body>
</html>