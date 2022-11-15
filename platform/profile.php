<?php
require 'user.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@100&family=Qwitcher+Grypen&family=Sen&family=Shadows+Into+Light&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="meta/favicons/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/icons/fontawesome/css/all.css">
    <link rel="stylesheet" href="profile.css">
    <title>Antonio Carbonó Pedroza.Seed</title>
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
        <section class="profile-data">
            <div class="encabezado-perfil">
                <div id="profile-picture">
                    <img src="assets/images/<?php echo $id_user?>.jpeg" alt="">
                </div>
                <h2 id="nombre-usuario">
                    <?php echo $name . " " . $lastname; ?>
                </h2>
                <h3 id="nivel">Nivel: Novato</h3>
            </div>
        </section>
        <div class="info">
            <div class="datos-personales">
                <h4>Datos personales</h4>
                <p><?php echo $occupation;?></p>
                <p>Universidad Nacional</p>
                <p>Química pura</p>
                <p>19 Años</p>
                <p>Actividades realizadas: 3</p>
            </div>
            <div class="descripcion">
                <h4>Descripción</h4>
                <p><?php echo $bio;?></p>
            </div>
        </div>
        <section class="posts">
            <h2><?php echo $name;?> aún no publica ningún evento... :(</h2>
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