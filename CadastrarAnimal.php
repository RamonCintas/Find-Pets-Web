<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Find-Pets</title>
        <style>
        body {
            background-image: url("imgs/test111.png");
            background-size: cover;
            background-repeat: no-repeat;
        }
        </style>
    </head>
    <body>
    <div align="left">
        <h3>
            <?php
            echo "<span style='color:white;'>Sobre o programa: </span>";
            echo "</br><span style='color:white;'>Este programa é um projeto desenvolvido baseado no aplicativo mobile Find Pets</span>";
            echo '</br>';
            echo "</br><span style='color:white;'>Formulário para cadastrar animal</span>";
            echo '</br>';
            ?>
        </h3>
    <form align="left" class="posicao" name="formulario" action="create.php" method="POST">
        <input type="string" id="tamanho" class="form-control " name="stringNome" placeholder="Nome do animal">
        <input type="string" id="tamanho" class="form-control " name="stringProdutor" placeholder="Estado de saúde">
        <input type="string" id="tamanho" class="form-control " name="stringAtores" placeholder="Raça">
            <select name="EscolhaoGenero" required="required">
                <option value="">Escolha o gênero</option>
                <option value="Macho">Macho</option>
                <option value="Femea">Fêmea</option>
            </select>
            <?php
            echo '</br>';
            echo '</br>';
            ?>
            <tr>
                <td width="118">
                    <font size="3" face="Arial black" span style='color:white;'>Data de nascimento:</span></font>
                </td>
                <td width="460">
                    <input name="DataLancamento" type="date" class="formbutton" id="nome" size="40" maxlength="150">
                </td>
            </tr>
            <?php
            echo '</br>';
            echo '</br>';
            ?>
            <tr>
                <td>
                    <font size="3" face="Arial black" span style='color:white;'>Comente sobre o animal:</span></font>
                </td>
                <?php
                echo '</br>';
                ?>
                <td rowspan="2">
                    <font size="2">
                        <textarea name="stringMensagem" cols="100" rows="2" class="formbutton" id="mensagem" input></textarea>
                    </font>
                </td>
            </tr>
            <?php
                echo '</br>';
            ?>
        <input type="submit" class="btn btn-primary" value=" Cadastrar">
        <input name="Reset" type="reset" class="formobjects" value="Limpar campos"> 
    </form>
    </div>
    </body>
</html>