<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

$banco = "banco.txt";
$conteudo = $_POST["NomeAnimal"] . "\n" . $_POST["SaudeAnimal"] . "\n" . $_POST["TipoAnimal"] . "\n" . $_POST["GeneroAnimal"] . "\n" . $_POST["IdadeAnimal"] . "\n" . str_replace("\n", "<br>", $_POST["TemperamentodoPet"]) . "\n" .$target_file. "\n". $_POST["NomeUsuario"] . "\n" . $_POST["EmailUsuario"] . "\n" . $_POST["telefoneUsuarioC"] . "\n" . $_POST["estado"] . "\n" . $_POST["telefoneUsuarioF"] . "\n" . $_POST["parentesco"] . "\n" . str_replace("\n", "<br>", $_POST["MensagemUsuario"]) ."\n" . $_POST["VacinaAnimal"] . "\n";

$criar = fopen($banco, "a+");
fwrite($criar, $conteudo);

if ($criar == true) {
    echo "<script language='javascript' type='text/javascript'> 
            alert('Dados cadastrados com sucesso!')</script>";
            header('Location: /Anuncios.php#');
            die();
} else {
    echo "<script language='javascript' type='text/javascript'> 
            alert('Erro ao cadastrar os dados!')</script>";
            header('Location: /Anuncios.php#');
            die();
}
fclose($criar);

?>
