<?php
if(isset($_POST['email']) && !empty($_POST['email'])){
    
    $name=addslashes($_POST['name']);
    $email=addslashes($_POST['email']);
    $message=addslashes($_POST['email']);

    $to="luchtembergh@gmail.com";
    $subject="Aplicação PHP";
    $body="Nome: ".$name.'\n';
          "Email: ".$email.'\n';
          "Mensagem: ".$message.'\n';
    $header="From:".$email."Replay-To:".$email;

    try{
        mail($to, $subject, $body, $header);
        echo"E-MAIL QUASE ENVIADO COM SUCESSO, ESSE PROGRAMADOR PRECISAVA DE UMA HOSPEDAGEM E UM DOMÍNIO PRA FINALIZAR ESSA TAREFA.";
    }catch (Exception $e) {
        echo "Caught TestException ('{$e->getMessage()}')\n{$e}\n";
    }
}
?>