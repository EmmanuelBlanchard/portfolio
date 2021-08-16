<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- =====BOX ICONS===== -->
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

        <!--===== SWIPER CSS =====-->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">

        <!--===== CSS =====-->
        <link rel="stylesheet" href="css/styles.css">
        
        <title>Portfolio de Emmanuel Blanchard</title>
    </head>

    <body>
        <!--===== HEADER =====-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#home" class="nav__logo">Emmanuel</a>
                
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Accueil</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">À propos</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Compétences</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Réalisations</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="main">
            <?=$content?>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Emmanuel</p>

            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-linkedin' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-github' ></i></a>
            </div>
            <p> Emmanuel Blanchard | Mentions légales</p>
        </footer>

        <!--===== SCROLL UP =====-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
        </a>

        <!--===== SWIPER JS =====-->
        <script src="js/swiper-bundle.min.js"></script> 

        <!--===== MAIN JS =====-->
        <script src="js/main.js"></script>
    </body>
</html>