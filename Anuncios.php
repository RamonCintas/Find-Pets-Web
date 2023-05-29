<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="imgs/icone-pagina.png"/>
        <title>Find-Pets | Tela de Anúncios</title>
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
img{
  border-radius: 60%;
  object-fit: cover; 
}
.tableFixHead {
      width: 650px;
      table-layout: fixed;
      border-collapse: collapse;
    }
      .tableFixHead tbody {
      display: block;
      width: 100%;
      overflow: auto;
      height: 600px;
    }
    .tableFixHead thead tr {
      display: block;
    }
    .tableFixHead th,
    .tableFixHead  td {
      padding: 5px 10px;
      width: 700px;
    }
    th{
        color:#fff;
    }
    tr {
        color:#fff;
    }
    td{
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
        <source src="/Audios/Tela-Anuncios.mp3" type="audio/mp3">
        Seu navegador não suporta elementos de aúdio
    </audio>
    <?php
    echo "</br>";
    echo "</br>";
    ?>
    <center><table width="650px" height="600px" border="5" bordercolor="black" cellspacing="5" cellpadding="5" bgcolor="#007bd9" align ="center"><center>
    <tr align="center" class="tableFixHead">
        <td>
        <?php
        $banco = "banco.txt";
        echo "</br>";
        echo "<CENTER>Registros de animais cadastrados</CENTER> ";
        echo "</br>";
        $lista = explode("\n", file_get_contents($banco));
        if (file_exists($banco) && !empty(file_get_contents($banco))) {
            $lista = explode("\n", file_get_contents($banco));
            $informacoes = 15; 
            unset($lista[count($lista) - 1]);
            $conjunto = 1;
            echo "<center><table border=1>";
            date_default_timezone_set('America/Sao_Paulo');
            echo "<meta charset='UTF-8'>";
            echo "<tr><th>Nome do animal</th><th>Anúncio do animal</th></tr>";
            for ($i = 0; $i < count($lista); $i += $informacoes) {
                $conjunto2 = $informacoes * ($conjunto - 1);
                $nomes= $lista[$conjunto2];
                $image = $lista[$conjunto2 + 6];
                echo "<tr>";
                echo "<td><center>$nomes</td><center>";
                echo "<td>";
                echo "<center><a href='Animal.php?codigo=$conjunto'><img src= ".$image." width='200px' height='200px' alt='Ir para a página de anúncio do animal' title='Ir para a página de anúncio do animal'></a></center>";
                echo "</td>";
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