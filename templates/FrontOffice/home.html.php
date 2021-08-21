<!--===== HOME =====-->
<section class="home section" id="home">
    <div class="home__container container grid">
        <div class="home__content grid">
            <div class="home__social">
                <a href="https://www.linkedin.com/in/emmanuel-blanchard-001/" target="_blank" class="home__social-icon"><i class='bx bxl-linkedin' ></i></a>
                <a href="https://github.com/EmmanuelBlanchard/" target="_blank" class="home__social-icon"><i class='bx bxl-github' ></i></a>
            </div>

            <div class="home__img">
                <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <mask id="mask0" mask-type="alpha">
                        <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                        130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                        97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                        0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                    </mask>
                    <g mask="url(#mask0)">
                        <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                        165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                        129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                        -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>

                        <image class="home__blob-img" x='20' y='15' href="img/profil.png"/>
                    </g>
                </svg>
            </div>

            <div class="home__data">
                <h1 class="home__title">Bonjour, <br> Je suis Emmanuel</h1>
                <h3 class="home__subtitle">Développeur Web</h3>
                
                <a href="#contact" class="button button--flex">
                    Me contacter <i class='bx bx-message-rounded-detail button__icon'></i>
                </a>
            </div>
        </div>

        <div class="home__scroll">
            <a href="#about" class="home__scroll-button button--flex">
                <i class='bx bx-mouse home__scroll-mouse' ></i>
                <span class="home__scroll-name">Défiler vers le bas</span>
                <i class='bx bx-down-arrow-alt home__scroll-arrow' ></i>
            </a>
        </div>
    </div>
</section>

<!--===== ABOUT =====-->
<section class="about section" id="about">
    <h2 class="section-title">À propos</h2>

    <div class="about__container container grid">
        <img src="img/about.jpg" alt="" class="about__img">

        <div class="about__data">
            <p class="about__description">
                Passionné par la technologie et l'informatique, après avoir lu des cours de programmation sur les sites Codecademy et OpenClassrooms, j'ai décidé de me reconvertir dans le développement web.

                Je suis autodidacte, curieux, persévérant et j'ai soif d'apprendre.
            </p>
        
            <div class="about__buttons">
                <a download="" href="pdf/CV-Emmanuel-Blanchard.pdf" class="button button--flex">
                    Télécharger mon CV <i class='bx bx-download button__icon' ></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!--===== SKILLS =====-->
<section class="skills section" id="skills">
    <h2 class="section-title">Compétences</h2>

    <div class="skills__container container grid">

        <div>
            <h2 class="skills__subtitle">Compétences professionnelles</h2>
            <p class="skills__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro error reiciendis quidem laudantium culpa sed quibusdam, dolores vitae consequuntur id cupiditate iusto esse dicta eveniet sint, necessitatibus cum voluptas quos!</p>

            <div class="skills__data">
                <div class="skills__names">
                    <i class='bx bxl-html5 skills__icon' ></i>
                    <span class="skills__name">HTML5</span>
                </div>

                <div>
                    <span class="skills__percentage">80%</span>
                </div>
                
                <div class="skills__bar skills__html"></div>
            </div>

            <div class="skills__data">
                <div class="skills__names">
                    <i class='bx bxl-css3 skills__icon' ></i>
                    <span class="skills__name">CSS3</span>
                </div>

                <div>
                    <span class="skills__percentage">80%</span>
                </div>
                
                <div class="skills__bar skills__css"></div>
            </div>

            <div class="skills__data">
                <div class="skills__names">
                    <i class='bx bxl-bootstrap skills__icon' ></i>
                    <span class="skills__name">BOOTSTRAP</span>
                </div>

                <div>
                    <span class="skills__percentage">70%</span>
                </div>
                
                <div class="skills__bar skills__bootstrap"></div>
            </div>

            <div class="skills__data">
                <div class="skills__names">
                    <i class='bx bxl-javascript skills__icon' ></i>
                    <span class="skills__name">JAVASCRIPT</span>
                </div>

                <div>
                    <span class="skills__percentage">50%</span>
                </div>
                
                <div class="skills__bar skills__js"></div>
            </div>

            <div class="skills__data">
                <div class="skills__names">
                    <i class='bx bxl-php skills__icon' ></i>
                    <span class="skills__name">PHP</span>
                </div>

                <div>
                    <span class="skills__percentage">60%</span>
                </div>
                
                <div class="skills__bar skills__php"></div>
            </div>
        </div>

        <div>
            <img src="img/work6.jpg" alt="" class="skills__img">
        </div>
    </div>
</section>

<!--===== WORK =====-->
<section class="work section" id="work">
    <h2 class="section-title">Réalisations</h2>

    <div class="work__container container swiper-container mySwiper">
        <div class="swiper-wrapper">
            <!--===== WORK 1 =====-->
            <div class="work__content grid swiper-slide">
                <img src="img/work1.jpg" alt="" class="work__img">

                <div class="work__data">
                    <h3 class="work__title">WebAgency</h3>
                    <p class="work__description">
                        Site web vitrine d'une agence web fictive
                    </p>
                    <a href="https://projet1.emmanuel-blanchard.fr/" class="button button--flex button--small work__button">
                        Demo
                        <i class='bx bx-right-arrow-alt button__icon' ></i>
                    </a>
                </div>
            </div>

            <!--===== WORK 2 =====-->
            <div class="work__content grid swiper-slide">
                <img src="img/work2.jpg" alt="" class="work__img">

                <div class="work__data">
                    <h3 class="work__title">Ireki</h3>
                    <p class="work__description">
                        Site fictif de l'office de tourisme d'Ireki
                    </p>
                    <a href="https://projet2.emmanuel-blanchard.fr/" class="button button--flex button--small work__button">
                        Demo
                        <i class='bx bx-right-arrow-alt button__icon' ></i>
                    </a>
                </div>
            </div>

            <!--===== WORK 3 =====-->
            <div class="work__content grid swiper-slide">
                <img src="img/work3.jpg" alt="" class="work__img">

                <div class="work__data">
                    <h3 class="work__title">Velo Lyon</h3>
                    <p class="work__description">
                        Site de réservation de vélos, utilise les APIsJCDecaux et Leaflet
                    </p>
                    <a href="https://projet3.emmanuel-blanchard.fr/" class="button button--flex button--small work__button">
                        Demo
                        <i class='bx bx-right-arrow-alt button__icon' ></i>
                    </a>
                </div>
            </div>

            <!--===== WORK 4 =====-->
            <div class="work__content grid swiper-slide">
                <img src="img/work4.jpg" alt="" class="work__img">

                <div class="work__data">
                    <h3 class="work__title">JeanForteroche</h3>
                    <p class="work__description">
                        Blog pour un écrivain, utilisant le modèleMVC et la logique CRUD
                    </p>
                    <a href="https://projet4.emmanuel-blanchard.fr/" class="button button--flex button--small work__button">
                        Demo
                        <i class='bx bx-right-arrow-alt button__icon' ></i>
                    </a>
                </div>
            </div>

            <!--===== WORK 5 =====-->
            <div class="work__content grid swiper-slide">
                <img src="img/work5.jpg" alt="" class="work__img">

                <div class="work__data">
                    <h3 class="work__title">ÉchangeLivres</h3>
                    <p class="work__description">
                        Site web d'échange de livres, en développement utilisant le framework Symfony
                    </p>
                    <a href="https://github.com/EmmanuelBlanchard/OpenClassroomsProject5" class="button button--flex button--small work__button">
                        Demo
                        <i class='bx bx-right-arrow-alt button__icon' ></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Add Arrows -->
        <div class="swiper-button-next">
            <i class='bx bx-chevron-right swiper-work-icon' ></i>
        </div>
        <div class="swiper-button-prev">
            <i class='bx bx-chevron-left swiper-work-icon' ></i>
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>

<!--===== CONTACT =====-->
<section class="contact section" id="contact">
    <h2 class="section-title">Me contacter</h2>

    <div class="contact__container container grid">
        <div>
            <div class="contact__information">
                <i class='bx bx-phone contact__icon' ></i>

                <div>
                    <h3 class="contact__title">Appelez moi <br> (sms uniquement)</h3>
                    <span class="contact__subtitle"> <span class="contact__zero-one">[ANTISPAM]</span> 37 55 28 40</span>
                </div>
            </div>

            <div class="contact__information">
                <i class='bx bx-envelope contact__icon' ></i>

                <div>
                    <h3 class="contact__title">E-mail</h3>
                    <span class="contact__subtitle">emmanuel.blanchard.pro<span class="contact__at"><span>(arobase)</span></span>gmail.com</span>
                </div>
            </div>

            <div class="contact__information">
                <i class='bx bx-map contact__icon' ></i>
                
                <div>
                    <h3 class="contact__title">Localisation</h3>
                    <span class="contact__subtitle">79000 Niort</span>
                </div>
            </div>
        </div>

        <form method="post" action="index.php?action=contact" id="contact__form" class="contact__form grid" name="contact__form">
            <?php if(isset($_SESSION['success-form']))
            {
                ?>
                <div class="contact__content alert-success" role="alert">
                    <?php echo $_SESSION['success-form']; ?>
                </div>
                <?php
                unset($_SESSION['success-form']);
            }
            ?>
            <?php if(isset($_SESSION['error-form']))
            {
                ?>
                <div class="contact__content alert-error" role="alert">
                    <?php echo $_SESSION['error-form']; ?>
                </div>
                <?php
                unset($_SESSION['error-form']);
            }
            ?>
            <div class="contact__content">
                <i class='bx bx-check-circle' ></i>
                <i class='bx bx-error-circle' ></i>
                <label for="contact__form-lastname" class="contact__label">Nom</label>
                <input type="text" id="contact__form-lastname" name="lastname" class="contact__input" maxlength="255" required>
                <small></small>
            </div>
            <?php if(isset($_SESSION['error-lastname']))
            {
                ?>
                <div class="contact__content alert-error" role="alert">
                    <?php echo $_SESSION['error-lastname']; ?>
                </div>
                <?php
                unset($_SESSION['error-lastname']);
            }
            ?>
            
            <div class="contact__content">
                <i class='bx bx-check-circle' ></i>
                <i class='bx bx-error-circle' ></i>
                <label for="contact__form-firstname" class="contact__label">Prénom</label>
                <input type="text" id="contact__form-firstname" name="firstname" class="contact__input" maxlength="255" required>
                <small></small>
            </div>
            <?php if(isset($_SESSION['error-firstname']))
            {
                ?>
                <div class="contact__content alert-error" role="alert">
                    <?php echo $_SESSION['error-firstname']; ?>
                </div>
                <?php
                unset($_SESSION['error-firstname']);
            }
            ?>

            <div class="contact__content">
                <i class='bx bx-check-circle' ></i>
                <i class='bx bx-error-circle' ></i>
                <label for="contact__form-email" class="contact__label">E-mail</label>
                <input type="email" id="contact__form-email" name="email" class="contact__input" maxlength="320" required>
                <small></small>
            </div>
            <?php if(isset($_SESSION['error-email']))
            {
                ?>
                <div class="contact__content alert-error" role="alert">
                    <?php echo $_SESSION['error-email']; ?>
                </div>
                <?php
                unset($_SESSION['error-email']);
            }
            ?>

            <div class="contact__content">
                <i class='bx bx-check-circle' ></i>
                <i class='bx bx-error-circle' ></i>
                <label for="contact__form-message" class="contact__label">Message</label>
                <textarea name="message" id="contact__form-message" cols="0" rows="7" class="contact__input" minlength="150" maxlength="2000" required></textarea>
                <small></small>
            </div>
            <?php if(isset($_SESSION['error-message']))
            {
                ?>
                <div class="contact__content alert-error" role="alert">
                    <?php echo $_SESSION['error-message']; ?>
                </div>
                <?php
                unset($_SESSION['error-message']);
            }
            ?>
            
            <div class="contact__content">
                <i class='bx bx-check-circle' ></i>
                <i class='bx bx-error-circle' ></i>
                <label for="contact__form-agreeterms" class="contact__label">En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de la demande de contact.</label>
                <input type="checkbox" id="contact__form-agreeterms" name="agreeterms" class="contact__input" value="1" required>
                <small></small>
            </div>
            <?php if(isset($_SESSION['error-agreeterms']))
            {
                ?>
                <div class="contact__content alert-error" role="alert">
                    <?php echo $_SESSION['error-agreeterms']; ?>
                </div>
                <?php
                unset($_SESSION['error-agreeterms']);
            }
            ?>
            
            <input class="hidden" type="hidden" name="csrfToken" value="<?=$data['csrfToken']; ?>" >

            <div>
                <button type="submit" id="contact__form-submit" class="button button--flex">
                    Envoyer
                    <i class='bx bx-message-rounded-detail button__icon'></i>
                </button>
            </div>
        </form>
    </div>
</section>
