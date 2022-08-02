<?php
// Verifica se o formulário foi enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Verifica se o arquivo foi enviado sem erros
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verifica a extensão do arquivo
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Erro: Por vafor, escolha um formato de arquivo válido.");
    
        // Verifica o tamanho do arquivo - Máximo de 5 MB
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: Tamanho do arquivo é maior que o limite permitido (5 MB).");
    
        // Verifica o tipo MYME do arquivo
        if(in_array($filetype, $allowed)){
            // Verifica se o arquivo existe antes de enviá-lo
            if(file_exists("upload/" . $filename)){
                echo $filename . " já existe.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
                echo "Seu arquivo foi enviado com sucesso.";
            } 
        } else{
            echo "Erro: Houve um problema no enviio do seu arquivo. Por favor, tente novamente."; 
        }
    } else{
        echo "Erro: " . $_FILES["photo"]["error"];
    }
}
?>