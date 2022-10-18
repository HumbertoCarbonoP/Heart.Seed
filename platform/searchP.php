<?php
require 'search.php'
?>

<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" type="text/css" href="search.css" />
    <title>Heart.Seed</title>
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
                        <a href="news.php"><i class="fa-solid fa-newspaper"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#"><i class="fa-solid fa-chart-line"></i></a>
                    </li>
                    <form action="#">
                        <input type="text" name="query" id="query">
                    </form>
                    <li class="nav-item" id="lupa-desktop">
                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <?php
        while($obj = pg_fetch_object($consulta)){
            ?>
            <div class="evento">
                <div class="title">
                    <h2><?php echo $obj->title;?></h2>
                    <p><?php echo $obj->event_date ?></p>
                </div>
                <img src="<?php echo $obj->picture?>">
            </div>
        <?php
        }
        ?>
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