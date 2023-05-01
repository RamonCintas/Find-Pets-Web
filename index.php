<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Find-Pets</title>
    </head>
    <style>
        body {
            background-image: url("imgs/test2.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        </style>
    <body>
    <center><table width="20%" border="4" bordercolor="black" cellspacing="4" cellpadding="4" bgcolor="black" align ="center"><center>
    <tr align="center" bgcolor="black">
        <td>
        <?php
        echo "<CENTER><span style='color:white;'>Links</span><CENTER>";
        echo "<tr><th><span style='color:white;'>Cadastrar animais</span></th>";
        echo "<tr><th><CENTER><a href='/CadastrarAnimal.php'><img src='/imgs/cadastro.png' width = '20%' height = '20%' alt='Ir para a página de cadastro de animais' title='Ir para a página de cadastro de animais'></a></CENTER></th>";
        echo "<tr><th><span style='color:white;'>Sobre nós</span></th>";
        echo "<tr><th><CENTER><a href='/Sobre.php'><img src='/imgs/infonew.png' width = '20%' height = '20%' alt='Ir para a página sobre a find pets' title='Ir para a página sobre a find pets'></a></CENTER></th>";
        echo "<tr><th><span style='color:white;'>Anúncios</span></th>";
        echo "<tr><th><CENTER><a href='/Anuncios.php'><img src='/imgs/patas1.png' width = '20%' height = '20%' alt='Anúncios de animais' title='Ir para a página de anúncio'></a></CENTER></th>";
        ?>
        </td> 
    </tr>
    </table>
    </body>
</html>

