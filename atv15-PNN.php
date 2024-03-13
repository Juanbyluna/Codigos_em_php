<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="" method="post">
        <label for="inputnumber" class="form-label">número</label>
        <input type="text"  name="num">
        <button type="submit">Enviar</button>
    
        </form>
    <?php
    $num = $_POST["num"];

    if($num == 0){
        echo "o número informado é NEUTRO!";
    }if($num > 0){

        echo "o número informado é POSITIVO!";
    }if($num < 0){
        echo "o número informado é NEGATIVO!";
    }

    ?>
    
</body>
</html>