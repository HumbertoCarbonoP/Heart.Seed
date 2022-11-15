<?php
require 'statisticsV.php';
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
    <link rel="stylesheet" type="text/css" href="statistics.css" />
    <title>Estadísticas Heart.Seed</title>
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
                        <a href="profile.php?id_user=<?php echo urlencode($id_user);?>"><i class="fa-solid fa-circle-user"></i></a>
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
        <div class="users-number">
            <h2>
                Usuarios de Heart.Seed
            </h2>
            <p>
                <?php echo $numberUsers;?>
            </p>
        </div>
        <div class="events-number">
            <h2>
                Eventos registrados: <?php echo $numberEvents;?>
            </h2>
            <div class="events-type">
            <h2>De los cuales... </h2>
            <div class="animalism">
                <h3>
                    El <?php echo round($animalism, 2);?>% son animalistas
                </h3>
            </div>
            <div class="ecology">
                <h3>
                El <?php echo round($ecology, 2);?>% son ecológicos
                </h3>
            </div>
            <div class="social">
                <h3>
                    El <?php echo round($socialJustice, 2);?> son de justicia social
                </h3>
            </div>
            <div class="education">
                <h3>
                    El <?php echo round($education, 2);?>% son de educación
                </h3>
            </div>
        </div>
        
        </div>
        <div class="ages">
            <h2>
                Nuestros usuarios tienen en promedio <?php echo round($age['avg']);?> años de edad.
            </h2>
        </div>
        <div class="occupation">
            <h2>
                ¡La mayoría de nuestros usuarios son 
            <?php echo $occupation;?>s!
            </h2>
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