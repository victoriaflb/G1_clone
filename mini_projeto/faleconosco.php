<?php
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
    $rawdata = file_get_contents("php://input");
    $data = json_decode($rawdata);
    extract(get_object_vars($data));
    // $nome = $data->nome;
    // $email = $data->email;
    // $assunto = $data->assunto;
    // $mensagem = $data->mensagem;



    echo "<h2> Olá, $nome.<h2><br>\n" . "<h2>Sua mensagem é: <br>$mensagem </h2><br>";

    echo '<h3 class="message" id="respostA"><em style="color:green;">MENSAGEM RECEBIDA COM SUCESSO!<em><h3>';
    return;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FALE CONOSCO</title>
    <link rel="stylesheet" href="./css/faleconosco.css">
</head>

<body>

    <div class="quadro">

        <div class="formulario">
            <h2>Fale Conosco</h2>
            <form method="post" id="formulario">
                <label for="nome"><b>Name:</b></label>
                <input type="text" id="nome" name="nome" autocomplete="off">
                <label for="email"><b>E-mail:</b></label>
                <input type="text" id="email" name="email">
                <label for="assunto"><b>Assunto:</b></label>
                <select name="assunto" id="assunto">
                    <option value="Sugestão">Sugestão</option>
                    <option value="Dúvida">Dúvida</option>
                    <option value="Reclamação">Reclamação</option>
                </select>
                <label for="mensagem"><b>Mensagem:</b></label>
                <textarea name="mensagem" id="mensagem"></textarea>
               
                    <input class="botao" type="submit" value="Enviar">
               
            </form>
        </div>

        <div id="resposta"></div>
    </div>
    <br>

    <script>
        document.getElementById("formulario").addEventListener("submit", function(event) {
            event.preventDefault();
            let formulario = document.querySelector(".formulario");
            let nome = document.getElementById("nome").value;
            let email = document.getElementById("email").value;
            let assunto = document.getElementById("assunto").value;
            let mensagem = document.getElementById("mensagem").value;
            console.log(nome);
            console.log(email);
            console.log(assunto);
            console.log(mensagem);
            fetch("./faleconosco.php", {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        nome,
                        email,
                        assunto,
                        mensagem
                    })
                })
                .then(response => response.text()) // Obtenha a resposta como texto
                .then(data => {
                    console.log(data)

                    let formulario = document.querySelector(".formulario");
                    let nome = document.getElementById("nome").value = 0;
                    let email = document.getElementById("email").value = 0;
                    let assunto = document.getElementById("assunto").value = 0;
                    let mensagem = document.getElementById("mensagem").value = 0;
                    let response = document.getElementById("respostA")
                    formulario.append(response)
                    console.log(response)
                    formulario.style.display = "none"
                    document.getElementById("resposta").innerHTML = data;

                })
                .catch(error => {
                    console.error('Erro:', error);
                });
        });
    </script>



    <br>



</body>

</html>