<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Find-Pets</title>
        <style>
        body {
            background-image: url("imgs/fundo-anuncio.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        </style>
    </head>
    <body>
    <center><table width="50%" border="10" bordercolor="black" cellspacing="10" cellpadding="4" bgcolor="gray" align ="center"><center>
    <tr align="center" bgcolor="white">
        <td>
        <?php
        $banco = "banco.txt";
        echo "</br>";
        echo "<CENTER>Registros de animais cadastrados para adoção.<br></CENTER> ";
        echo "</br>";
        if (file_exists($banco) && !empty(file_get_contents($banco))) {
            $lista = explode("\n", file_get_contents($banco));
            $informacoes = 6; 
            unset($lista[count($lista) - 1]);
            $conjunto = 1;
            echo "<center><table border=1       >";
            date_default_timezone_set('America/Sao_Paulo');
            echo "<meta charset='UTF-8'>";
            echo "<tr><th>Código</th><th> Nome do animal </th><th> Estado de saúde </th><th> Raça </th><th> Gênero </th><th> Data de nascimento </th><th> Comentários sobre o animal </th></tr>";
            for ($i = 0; $i < count($lista); $i += $informacoes) {
                echo "<tr>";
                echo "<td id='$conjunto'>$conjunto</td>";
                for($j=$i; $j < $i + $informacoes; $j++){
                    echo "<td>{$lista[$j]}</td>";
                }
                    echo "</tr>";
                $conjunto++;
            }
            echo "</table>";
            echo "<footer id='footer'>";
            echo "</footer>";
        } else {
            echo "<br><br><p align=center>Ainda não há nenhum registro!</p";
        }
        ?>
        </td> 
    </tr>
    </table>
    </body>
</html>