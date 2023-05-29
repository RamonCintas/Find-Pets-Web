<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="imgs/icone-pagina.png"/>
        <title>Find-Pets | Tela de Inicio</title>
    </head>
    <style>
html {
    line-height: 1.15;
    -webkit-text-size-adjust: 100%
}
*{margin: 0; padding: 0;}

body{ 
background-image: url("imgs/fundob.jpg");
background-size: cover;
background-repeat: no-repeat;
background-position: center;
font-family: Times New Roman, helvetica, sans-serif;
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
.logo{
border-radius: 60%;
height: 500px;
object-fit: cover;
width:500px;  
background-image: url("/imgs/Logo1.png");
background-position: center;
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
        <source src="/Audios/Tela-Inicial.mp3" type="audio/mp3">
        Seu navegador não suporta elementos de aúdio
    </audio>
    <?php
    echo '</br>';
    echo '</br>';
    echo '</br>';
    echo "<font size='5'  face='Times New Roman'<span style='color:white;'><center>Bem-Vindo(a) ao Find Pets!</center></span></font>";
    echo '</br>';
    echo '</br>';
    echo '</br>';
    ?>
    <div class="logo">
    </div>
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