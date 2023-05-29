<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="imgs/icone-pagina.png"/>
        <title>Find-Pets | Tela de Cadastro</title>
    </head>
    <style>
html {
    line-height: 1.15;
    -webkit-text-size-adjust: 100%
}
*{margin: 0; padding: 0;}

body{
background-image: url("imgs/fundoa.jpg");
background-repeat: no-repeat;
background-size: cover;
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
INPUT.MeuInput {
     width: 200px;
     height: 50px;
     font-family: Times New Roman;
     font-size: 20px;
     background-color: orange;
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
        <source src="/Audios/Tela-Cadastrar.mp3" type="audio/mp3">
        Seu navegador não suporta elementos de aúdio
    </audio>
    <?php
        echo '</br>';
        echo '</br>';
    ?>
        <img src='/imgs/Anunciante.png' width = '120' height = '120'>
    <?php
        echo '</br>'; 
        echo '</br>'; 
    ?>
        <font size="5" face="Times New Roman" span style='color:white;'>Dados do anunciante</span></font>
    <?php
        echo '</br>';
        echo '</br>';
    ?>
    <form align="center" class="posicao" name="formulario" action="create.php" method="POST" enctype="multipart/form-data">
        <font size="5" face="Times New Roman" span style='color:white;'>Nome completo:</span></font>
        <input type="string" id="tamanho" class="form-control " name="NomeUsuario" placeholder="Nome completo" required="required"> 
        <font size="5" face="Times New Roman" span style='color:white;'>Estado:</span></font>
        <select name="estado" required="required">
            <option value="">Escolha o estado</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
        </select>
    <?php
        echo '</br>'; 
        echo '</br>';  
    ?>
        <font size="5" face="Times New Roman" span style='color:white;'>Telefone fixo:</span></font>
        <input type="number" id="tamanho" class="form-control " name="telefoneUsuarioF" placeholder="(00) 00000000" required="required">  
        <font size="5" face="Times New Roman" span style='color:white;'>Telefone celular:</span></font>
        <input type="number" id="tamanho" class="form-control " name="telefoneUsuarioC" placeholder="(00) 00000000" required="required">
    <?php
        echo '</br>';
        echo '</br>';
    ?>
    <font size="5" face="Times New Roman" span style='color:white;'>E-mail:</span></font>
        <input name="EmailUsuario" type="email" class="formbutton" id="email" size="40" maxlength="150"  placeholder="------@gmail.com" required="required">  
        <font size="5" face="Times New Roman" span style='color:white;'> Grau de parentesco com o Pet:</span></font>
        <select name="parentesco" required="required">
            <option value="">Escolha o grau de parentesco</option>
            <option value="Dono(a) do animal">Dono(a) </option>
            <option value="Animal resgatado">Responsável Temporário do Pet</option>
        </select>
    <?php
        echo '</br>';
        echo '</br>';
    ?>
        <font size="5" face="Times New Roman" span style='color:white;'>Motivo sobre a doação do Pet:</span></font>
    <?php
        echo '</br>';
        echo '</br>';
    ?>
        <font size="5"><textarea name="MensagemUsuario" cols="100" required="required" rows="2" class="formbutton" id="mensagem" input></textarea></font>
    <?php
        echo '</br>'; 
        echo '</br>';  
        echo '</br>';
        echo '</br>';
    ?>
        <img src='/imgs/Animal.png' width = '110' height = '110'>
    <?php
        echo '</br>';
        echo '</br>';
    ?>
        <font size="5" face="Times New Roman" span style='color:white;'>Dados sobre o Pet</span></font>
    <?php
        echo '</br>';
        echo '</br>';
    ?>
        <font size="5" face="Times New Roman" span style='color:white;'>Nome:</span></font>
        <input type="string" id="tamanho" class="form-control " name="NomeAnimal" placeholder="Nome do Pet" required="required"> 
        <font size="5" face="Times New Roman" span style='color:white;'>Idade: </span></font><select name="IdadeAnimal" required="required">
            <option value="">Escolha a idade</option>
            <option value="- de 1 ano">- de 1 ano</option>
            <option value="1 ano">1 ano</option>
            <option value="2 anos">2 anos</option>
            <option value="3 anos">3 anos</option>
            <option value="4 anos">4 anos</option>
            <option value="5 anos">5 anos</option>
            <option value="6 anos">6 anos</option>
            <option value="7 anos">7 anos</option>
            <option value="8 anos">8 anos</option>
            <option value="9 anos">9 anos</option>
            <option value="10 anos">10 anos</option>
            <option value="+ de 10 anos">+ de 10 anos</option>
        </select>
        <font size="5" face="Times New Roman" span style='color:white;'>Vacinação:</span></font>
        <select name="VacinaAnimal" required="required">
            <option value="">Escolha o grau de vacinação</option>
            <option value="Completamente vacinado(a)">Completamente vacinado(a)</option>
            <option value="Não possuo informações">Não possuo informações</option>
        </select> 
    <?php
        echo '</br>';
        echo '</br>';
    ?>
        <font size="5" face="Times New Roman" span style='color:white;'>Gênero:</span></font>
        <select name="GeneroAnimal" required="required">
            <option value="">Escolha o gênero</option>
            <option value="Macho">Macho</option>
            <option value="Fêmea">Fêmea</option>
        </select> 
        <font size="5" face="Times New Roman" span style='color:white;'>Saúde:</span></font>
        <select name="SaudeAnimal" required="required">
            <option value="">Escolha o estado de saúde</option>
            <option value="Saudável">Saudável</option>
            <option value="Outros">Outros</option>
        </select> 
        <font size="5" face="Times New Roman" span style='color:white;'>Tipo:</span></font>
        <select name="TipoAnimal" required="required">
            <option value="">Escolha o tipo</option>
            <option value="Cachorro">Cachorro</option>
            <option value="Gato">Gato</option>
        </select>
    <?php
        echo '</br>';
        echo '</br>';
    ?>
        <font size="5" face="Times New Roman" span style='color:white;'>Descrição sobre o temperamento do Pet:</span></font>
    <?php
        echo '</br>';
        echo '</br>';
    ?>
        <font size="5"><textarea name="TemperamentodoPet" required="required" cols="100" rows="2" class="formbutton" id="mensagem" input></textarea></font>
    <?php
        echo '</br>'; 
        echo '</br>';  
    ?>
        <font size="5" face="Times New Roman" span style='color:white;'>Selecione uma imagem do Pet:</span></font>
        <input type="file" name="fileToUpload" span style='color:white;'' id="fileToUpload" required="required">
    <?php
        echo '</br>'; 
        echo '</br>'; 
        echo '</br>'; 
    ?>
        <input class="MeuInput" type="submit" style='color:white;' class="btn btn-primary"  value=" Cadastrar">
    <?php
        echo '</br>'; 
        echo '</br>'; 
        echo '</br>'; 
    ?>
    </form>
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