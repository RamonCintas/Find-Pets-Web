<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="imgs/icone-pagina.png"/>
        <title>Find-Pets  | Tela do Pet</title>
    </head>
    <style>
html {
    line-height: 1.15;
    -webkit-text-size-adjust: 100%
}
*{margin: 0; padding: 0;}

body{
background-image: url("imgs/teste1.jpg");
background-repeat: no-repeat;
background-size: cover;
background-position: center;
font-family: Times New Roman;
font-size: 20px;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale
}
.menu{
list-style:none;
border:1px solid #c0c0c0;
float:left;
}
.menu li{
position:relative;
float:left;
border-right:1px solid #c0c0c0;
}
.menu li a{color:#333; text-decoration:none; padding:5px 10px; display:block;}
.menu li a:hover{
background:orange;
color:#fff;
-moz-box-shadow:0 3px 10px 0 #CCC;
-webkit-box-shadow:0 3px 10px 0 #ccc;
text-shadow:0px 0px 5px #fff;
}
.menu li  ul{
position:absolute;
top:25px;
left:0;
background-color:#fff;
display:none;
}
.menu li:hover ul, .menu li.over ul{display:block;}
.menu li ul li{
border:1px solid #c0c0c0;
display:block;
width:150px;
}
.tableFixHead {
      width: 480px;
      table-layout: fixed;
    }
      .tableFixHead tbody {
      display: block;
      width: 100%;
      overflow: auto;
      height: 700px;
    }
    .tableFixHead thead tr {
      display: block;
    }
    .tableFixHead th,
    .tableFixHead  td {
      padding: 5px 10px;
      width: cover;
    }
    th {
        background-color: blue;
        color:#fff;
    }
</style> 
    <body align = "center">
        <?php
            echo '</br>';
        ?>
    <center><table border="5" bordercolor="black" cellspacing="4" cellpadding="5" bgcolor="orange"><center>
    <tr align="center" bgcolor="white">
        <td>
        <nav>
            <ul class="menu">
                <li><a href="/index.php" title='Ir para a página inicial'>Inicio </a></li>
		        <li><a href="/Cadastrar.php" title='Ir para a página de cadastro de anúncio'>Cadastrar anúncio</a></li>
	            <li><a href="/Anuncios.php" title='Ir para a página de anúncios cadastrados'>Adote Aqui</a></li>
            </ul>
        </nav>
        </td> 
    </tr>
    </table>
    <?php
    echo '</br>';
    echo '</br>';
    ?>
    <audio controls>
        <source src="/Audios/Tela-Pet.mp3" type="audio/mp3">
        Seu navegador não suporta elementos de aúdio
    </audio>
    <?php
    echo "</br>";
    echo "</br>";
    ?>
    <center><table width="500px" height="500px" border="5" bordercolor="black" cellspacing="5" cellpadding="5" bgcolor="#fc7a00" align ="center" class="tableFixHead"><center>
    <tr align="center" bgcolor="white">
        <td>
        <?php
    $banco= "banco.txt";
    if (isset($_GET['codigo'])) {
        if (file_exists($banco) && !empty(file_get_contents($banco))) {
            $lista = explode("\n", file_get_contents($banco));
            $informacoes = 15;
            $conjunto = $informacoes * ($_GET['codigo'] -1);
            $nome = $lista[$conjunto];
            $saude= $lista[$conjunto + 1];
            $tipo= $lista[$conjunto + 2];
            $genero= $lista[$conjunto + 3];
            $idade= $lista[$conjunto + 4];
            $temperamento= str_replace("<br>", "\n", $lista[$conjunto + 5]);
            $image = $lista[$conjunto + 6];
            $NomeAnunciante = $lista[$conjunto + 7];
            $EmailAnunciante = $lista[$conjunto + 8];
            $TelefoneCAnunciante = $lista[$conjunto + 9];
            $EstadoAnunciante = $lista[$conjunto + 10];
            $TelefoneFAnunciante = $lista[$conjunto + 11];
            $ParentescoAnunciante = $lista[$conjunto + 12];
            $MensagemAnunciante= str_replace("<br>", "\n", $lista[$conjunto + 13]);
            $Vacinacao = $lista[$conjunto + 14];
        }
    }
    ?>
    <?php
        echo "</br>";
        echo "----------------------------------";
    ?>
    <h3><label for="codigo">Dados do animal</label></h3>
     <?php
        echo "----------------------------------";
        echo "</br>";
        echo "</br>";
    ?>
    <h3><label for="image">Imagem do animal:</label></h3>
    <?php
        echo '<a href=""><img width="400px" height="400px" src= "'.$image.'"  /></a>';
        echo "</br>";
        echo "</br>";
    ?>
    <h3><label for="nome">Nome do Pet: </label></h3>
    <?php
        echo $nome;
        echo "</br>";
        echo "</br>";
    ?>
    <h3><label for="estado">Estado de saúde: </label></h3>
    <?php
        echo $saude;
        echo "</br>";
        echo "</br>";
    ?>
    <h3><label for="tipo">Tipo: </label></h3>
    <?php
        echo $tipo;
        echo "</br>";
        echo "</br>";
    ?>
    <h3><label for="genero">Gênero: </label></h3>
    <?php
        echo $genero;
        echo "</br>";
        echo "</br>";
    ?>
    <h3><label for="idade">Idade: </label></h3>
    <?php
        echo $idade; 
        echo "</br>";
        echo "</br>";
    ?>
    <h3><label for="vacinação">Grau de vacinação: </label></h3>
    <?php
        echo $Vacinacao; 
        echo "</br>";
        echo "</br>";
    ?>
    <h3><label for="Temperamento">Temperamento do Pet: </label></h3>
    <?php
        echo $temperamento;
        echo "</br>";
        echo "</br>";
        echo "----------------------------------";
    ?>
    <h3><label for="codigo">Dados do anunciante</label></h3>
    <?php
        echo "----------------------------------";
        echo "</br>";
        echo "</br>";
    ?>
    <h3><label for="nome do anunciante">Nome do anunciante: </label></h3>
    <?php
        echo $NomeAnunciante;
        echo "</br>";
        echo "</br>";
    ?>
    <h3><label for="nome do anunciante">Estado: </label></h3>
    <?php
        echo $EstadoAnunciante;
        echo "</br>";
        echo "</br>";
    ?>
    <h3><label for="Email">E-mail: </label></h3>
    <?php
        echo $EmailAnunciante;
        echo "</br>";
        echo "</br>";
    ?>
    <h3><label for="TelefoneC">Telefone celular: </label></h3>
    <?php
        echo $TelefoneCAnunciante;
        echo "</br>";
        echo "</br>";
    ?>
    <h3><label for="TelefoneF">Telefone fixo: </label></h3>
    <?php
        echo $TelefoneFAnunciante;
        echo "</br>";
        echo "</br>";
    ?>
    <h3><label for="parentesco">Grau de parentesco do animal: </label></h3>
    <?php
        echo $ParentescoAnunciante;
        echo "</br>";
        echo "</br>";
    ?>
    <h3><label for="mensagem do anunciante">Motivo sobre a doação do Pet: </label></h3>
    <?php
        echo $MensagemAnunciante;
        echo "</br>";
        echo "</br>";
        echo "</br>";
    ?>
    <a href='Anuncios.php'><img src='/imgs/BVoltar.png' width = '200' height = '200' alt='Ir para a página de anúncios' title='Ir para a página de anúncios'></a>
    </td>
    </tr>
    </table>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    </body>
</html>





   
    