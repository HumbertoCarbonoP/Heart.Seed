<?php
require 'connection.php'
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@100&family=Qwitcher+Grypen&family=Sen&family=Shadows+Into+Light&display=swap"
        rel="stylesheet" />
    <link rel="shortcut icon" href="meta/favicons/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="assets/icons/fontawesome/css/all.css" />
    <link rel="stylesheet" href="news.css" />
    <title>Articulos Heart.Seed</title>
</head>

<body>
    <div class="background-container"></div>
    <header>
        <div class="encabezado">
            <div class="logo-container">
                <img src="meta/favicons/logo-heart-seed-color.png" alt="Logo de Heart.Seed" />
                <h1><b>Heart.</b><b>Seed</b></h1>
            </div>
            <div class="buscador">
                <a href=""><i id="lupa" class="fa-solid fa-magnifying-glass"></i></a>
            </div>
        </div>
        <div class="nav-container">
            <nav>
                <ul>
                    <li class="nav-item">
                        <a href="main-wall.html"><i class="fa-solid fa-house"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="news.html"><i class="fa-solid fa-newspaper"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#"><i class="fa-solid fa-chart-line"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="antonio-profile.html"><i class="fa-solid fa-circle-user"></i></a>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa-solid fa-right-from-bracket"></i></a>
                    </li>
                    <li class="nav-item" id="lupa-desktop">
                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="articulos">
            <h2>BBC</h2>
            <?php
            while($obj = pg_fetch_object($consultaBBC)){
            ?>
            <div class="articulo">
                <a href="<?php echo $obj->link;?>"
                    target="_blank">
                    <div class="img-container"
                        style="background-image: url(<?php echo $obj->img;?>);">
                    </div>
                    <h3><?php echo $obj->title;?></h3>
                </a>
            </div>
            <?php
            }
            ?>
        </section>
        <section class="videos">
            <h2>NatGeo</h2>
            <?php
            while($obj = pg_fetch_object($consultaNatGeo)){
            ?>
            <div class="video">
                <a href="<?php echo $obj->link;?>"
                    target="_blank">
                    <div class="img-container"
                        style="background-image: url(<?php echo $obj->img;?>);">
                    </div>
                    <h3><?php echo $obj->title;?></h3>
                </a>
            </div>
            <?php
            }
            ?>
        </section>
        <section class="otros">
            <h2>EcoNews</h2>
            <?php
            while($obj = pg_fetch_object($consultaecoNews)){
            ?>
            <div class="otro">
                <a href="<?php echo $obj->link;?>"
                    target="_blank">
                    <div class="img-container"
                        style="background-image: url(<?php echo $obj->img;?>);">
                    </div>
                    <h3><?php echo $obj->title;?></h3>
                </a>
            </div>
            <?php
            }
            ?>
        </section>
    </main>
    <footer>
        <div class="pie-de-pagina">
            <p>Universidad EAFIT</p>
            <p>Medellín, Antioquia, Colombia</p>
            <p>2022-2</p>
            <p>&copy; Heart.Seed</p>
        </div>
    </footer>
</body>
</html>