<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>g1 - O portal de notícias da Globo</title>
    <link rel="icon" href="./assets//logo.png">
    <link rel="stylesheet" href="./css//topo.css">
    <link rel="stylesheet" href=".//css//menu.css">
    <link rel="stylesheet" href="./css//principal.css">
    <link rel="stylesheet" href=".//css//faleconosco.css">
    <link rel="stylesheet" href="./css//clientes.css">
    <link rel="stylesheet" href="./css//index.css">
    <link rel="stylesheet" href="./css//rodape.css">
    <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
    <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"></script>
</head>

<body>



    <?php

    include_once("./topo.php");
    include_once("./menu.php");

    if (empty($_SERVER["QUERY_STRING"])) {
        $var = "./conteudo.php";
        include_once("$var");
    } else {
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }

    

    ?>
    


    <?php include_once("rodape.php");?>

    
</body>

</html>