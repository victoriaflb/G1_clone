<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="menu">
        <div class="barra">
            <i class="fas fa-bars"></i>
            <div class="dropdown">
                <a href="./index.php"><button class="dropbtn">MENU</button></a>
                <div class="dropdown-content">
                    <a href="?pg=principal">Principal</a>
                    <a href="?pg=clientes">Clientes</a>
                    <a href="?pg=faleconosco">Fale Conosco</a>
                </div>
            </div>
        </div>
        <div class="logo">
            <p>g1</p>
        </div>
        <div class="search">
            <input placeholder="BUSCAR" type="search" name="q" id="busca-campo" autocomplete="off" tabindex="1">
            <label for="busca-campo" class="lupa"></label>
        </div>
    </div>
</body>
</html>
