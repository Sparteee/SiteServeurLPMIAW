<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Serveur LP MIAW</title>
    <link rel="stylesheet" href="public/scss/master.css">
    <script src="https://kit.fontawesome.com/0d76749f2d.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="header-home">
    <img src="public/img/imgULR.png" alt="Université de La Rochelle">
    <img src="public/img/imgEDW.png" alt="Ecole du Web">
</header>
<nav>
    <ul class="nav-menu">
        <li class="nav-menu__element">
            <a class="nav-menu__link nav-menu__link--active" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-home">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
                <p class="nav-menu__text nav-menu__text--inactive">Home</p></a>
        </li>
        <li class="nav-menu__element">
            <a class="nav-menu__link" href="agence.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-graduation-cap">
                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                    <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                </svg>
                <p class="nav-menu__text nav-menu__text--active">Agences</p></a>
        </li>
    </ul>
</nav>
<main class="principal">
    <section class="principal-text">
        <h1 class="principal-text__title">LP MIAW</h1>
        <h2 class="principal-text__subtitle">École du Web</h2>
        <h3 class="principal-text__serveur">Serveur Pédagogique</h3>
        <p class="principal-text__formation">Métiers de l'informatique : Applications Web</p>
        <p class="principal-text__parcours"><strong>Web Designer Intégrateur - Développeur Full Stack</strong></p>
    </section>
    <section class="principal-img">
        <img class="principal-img__image" src="public/img/imageAccueil.png" alt="">
    </section>
</main>
<footer class="footer">
    <p class="footer__text">Copyright text & Mentions légales</p>
    <ul class="footer-reso">
        <li class="footer-reso__element">
            <a class="footer-reso__link" href="https://www.linkedin.com/company/licence-pro-miaw-la-rochelle/"><i
                        class="fa-brands fa-linkedin"></i></a>
        </li>
        <li class="footer-reso__element">
            <a class="footer-reso__link" href="https://www.instagram.com/lpmiaw_univlr/"><i
                        class="fa-brands fa-instagram"></i></a>
        </li>
    </ul>
</footer>
</body>
</html>