<?php
    isset ($_POST['name']) ? $name = $_POST['name'] : $name = '';
    isset ($_POST['city']) ? $city = $_POST['city'] : $city = '';
    isset ($_POST['comment']) ? $comment = $_POST['comment'] : $comment = '';

    $to = "jamersonwalderson@gmail.com";
    $subject = "Enviado atrávez do formulário da aplicação dicasparaformulairos.herokuapp.com";

    $headers = "MIME-Version: 1.1\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: $to\r\n"; // remetente
    $headers .= "Return-Path: $to\r\n"; // return-path



    if ($sendmail = mail ($to, $subject, $headers)) {
        echo ("Mensagem enviada com sucesso!");
    
    } else {
        echo ("Problema ao enviar!");

    }


?>