<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculo</title>
</head>
<style>
    div {
        position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border:solid 3px;
    border-radius: 10px;
    padding: 10px;
    border-color: black;
    width: 1000px;
    height: 550px;
    background-color: white;
    }
    body {
    font-size: 50px;
    background-image: url('https://marketplace.canva.com/EAFwThEg0sU/1/0/1600w/canva-papel-de-parede-a-arte-liberta-delicado-azul-LDSqr5i9aeI.jpg');
    font-family: 'Comic Sans MS', cursive;
    margin: 0;
    background-size: cover;
   background-repeat: no-repeat;
   background-position: center center;
   min-height: 880px;
}
hr {
    border-color: black;
}
.carlos{
    font-size: 60px;
}


</style>
<body>
   <div>
        <?php

        $nome = $_POST['nome'];
        $v1 = $_POST['v1'];
        $v2 = $_POST['v2'];
        $vc = $_POST['vc'];

        $vl = $v1 + $v2;
        $vt = $vc - $vl;

        if ($v1 == 0 or $v2 == 0){
            echo("Não foi colocado o preço de algum dos produtos");

        }
        else if ($vc - $vl < 0){
           echo("Você não consegue pagar com isso.");
        }
        else{
        echo "Nota fiscal";
        echo "<br><hr><br>";
        echo "Cliente: "; echo " $nome";
        echo "<br><hr>Valor Total: "; echo " R$$vl"; 
        echo "<br><hr>Troco: "; echo " R$$vt";
        }
        ?>
    </div>
</body>
</html>