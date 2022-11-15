<?php
require 'connection.php';
$id_post = $_GET['id_post'];
$queryEvent = "SELECT * FROM mydb.heartseed_post WHERE id_post = $id_post;";
$consulta = pg_query($connection, $queryEvent);
$obj = pg_fetch_object($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Londrina+Outline&family=Londrina+Solid:wght@300&family=Poppins:wght@100&family=Qwitcher+Grypen&family=Sen&family=Shadows+Into+Light&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="meta/favicons/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="assets/icons/fontawesome/css/all.css" />
    <link rel="stylesheet" type="text/css" href="event.css" />
    <title>Heart.Seed</title>
</head>
<body>
<div class="background-container"></div>
    <header>
        <div class="encabezado">
            <div class="logo-container">
                <img src="meta/favicons/logo-heart-seed.png" alt="Logo de Heart.Seed" />
                <h1>Heart.Seed</h1>
            </div>
            <div class="buscador">
                <a href=""><i id="lupa" class="fa-solid fa-magnifying-glass"></i></a>
            </div>
        </div>
        <div class="nav-container">
            <nav>
                <ul>
                    <li class="nav-item">
                        <a href="main-wall.php"><i class="fa-solid fa-house"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="news.php"><i class="fa-solid fa-newspaper"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="statistics.php"><i class="fa-solid fa-chart-line"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="profile.php"><i class="fa-solid fa-circle-user"></i></a>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa-solid fa-right-from-bracket"></i></a>
                    </li>
                    <li class="nav-item" id="lupa-desktop">
                        <a href="searchP.php"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="img-container" style="background-image: url('<?php echo $obj->picture?>')">
        </div>
        <div class="info-container">
            <h2>
                <?php echo $obj->title?>
            </h2>
            <p>Tipo: <?php echo $obj->kind?></p>
            <p>Fecha: <?php echo $obj->event_date?></p>
            <p><?php echo $obj->content?></p>
            <p>Lugar de encuentro: <?php echo $obj->address?></p>
            <p>Hora de inicio: <?php echo $obj->event_beginning_hour?></p>
            <p>Hora de finalización: <?php echo $obj->event_ending_hour?></p>
        </div>
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