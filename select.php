


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Find-Pets</title>
        <style>
        body {
            background-color: rgb(110, 175, 255);
        }
        </style>
    </head>
    <body>
        <?php
        $banco = "banco.txt";
        echo "</br>";
        echo "<CENTER>Registros de animais cadastrados</CENTER> ";
        echo "</br>";
        if (file_exists($banco) && !empty(file_get_contents($banco))) {
            $lista = explode("\n", file_get_contents($banco));
            $informacoes = 6; 
            unset($lista[count($lista) - 1]);
            $conjunto = 1;
            echo "<center><table border=1>";
            date_default_timezone_set('America/Sao_Paulo');
            echo "<meta charset='UTF-8'>";
            echo "<tr><th>Código</th><th>Nome do animal</th><th>Estado de saúde</th><th>Raça</th><th>Gênero</th><th>Data de nascimento</th><th>Comentários sobre o animal</th><th>Ações</th></tr>";
            for ($i = 0; $i < count($lista); $i += $informacoes) {
                echo "<tr>";
                echo "<td id='$conjunto'>$conjunto</td>";
                for($j=$i; $j < $i + $informacoes; $j++){
                    echo "<td>{$lista[$j]}</td>";
                }
                echo "<td>
                    <a href='/delete.php?codigo=$conjunto'><img src='/imgs/delete_crud.png' width = '25' height = '25' alt='Deletar' title='Deletar registro'></a>
                    <a href='/montar.php?codigo=$conjunto'><img src='/imgs/update_crud.png' width = '25' height = '25' alt='Atualizar' title='Atualizar registro'></a>
                    <a href='/index.php'><img src='/imgs/insert_crud.png' width = '25' height = '25' alt='Inserir' title='Inserir registro'></a>
                    </td>";
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
    </body>
</html>