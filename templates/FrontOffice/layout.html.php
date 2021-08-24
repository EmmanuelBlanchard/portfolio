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

        <!--===== BOOTSTRAP CSS =====-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <!--===== CSS =====-->
        <link rel="stylesheet" href="css/styles.css">
        
        <!--===== FAVICON =====-->
        <link rel="icon" type="image/x-icon" href="/favicon.ico"/>

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
                <a href="https://www.linkedin.com/in/emmanuel-blanchard-001/" target="_blank" class="footer__icon"><i class='bx bxl-linkedin' ></i></a>
                <a href="https://github.com/EmmanuelBlanchard/" target="_blank" class="footer__icon"><i class='bx bxl-github' ></i></a>
            </div>
            <p> Emmanuel Blanchard | <a class="legalnotices__button modal-trigger" href="#" data-bs-toggle="modal" data-bs-target="#modal-legalnotices" aria-haspopup="dialog" role="button">Mentions légales</a>
            </p>
        </footer>

        <!-- Modal -->
        <div class="modal fade" id="modal-legalnotices" tabindex="-1" aria-labelledby="dialog-title" aria-hidden="true">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="dialog-title">Mentions Légales</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer" title="Fermer cette fenêtre modale"></button>
                    </div>
                    <div class="modal-body">
                        <h4>1. Présentation du site.</h4>
                        <hr />
                        <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>
                        <p><strong>Propriétaire</strong> : Emmanuel Blanchard – 48 Rue Jean Honoré Fragonard - 79000 Niort<br />
                        <strong>Créateur</strong> : <a target="blank" href="https://emmanuel-blanchard.fr/">Emmanuel Blanchard</a><br />
                        <strong>Responsable publication</strong> : Emmanuel Blanchard <br />
                        <strong>Webmaster</strong> : Emmanuel Blanchard – emmanuel.blanchard.pro<span class="contact__at"><span>(arobase)</span></span>gmail.com</span> <br />
                        <strong>Hébergeur</strong> : O2SWITCH – 222-224 Boulevard Gustave Flaubert - 63000 Clermont-Ferrand<br />
                        Crédits : <br />
                        Le modèle de mentions légales est offert par <a target="blank" href="https://www.subdelirium.com/generateur-de-mentions-legales/">Subdelirium.com</a></p>
                        <h4>2. Conditions générales d’utilisation du site et des services proposés.</h4>
                        <hr />
                        <p>L’utilisation du site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a> sont donc invités à les consulter de manière régulière.</p>
                        <p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par Emmanuel Blanchard, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>
                        <p>Le site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a> est mis à jour régulièrement par Emmanuel Blanchard. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
                        <h4>3. Description des services fournis.</h4>
                        <hr />
                        <p>Le site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a> a pour objet de fournir une information concernant l’ensemble des activités de la société.</p>
                        <p>Emmanuel Blanchard s’efforce de fournir sur le site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a> des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
                        <p>Tous les informations indiquées sur le site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a> sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a> ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
                        <h4>4. Limitations contractuelles sur les données techniques.</h4>
                        <hr />
                        <p>Le site utilise la technologie JavaScript.</p>
                        <p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>
                        <h4>5. Propriété intellectuelle et contrefaçons.</h4>
                        <hr />
                        <p>Emmanuel Blanchard est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>
                        <p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : Emmanuel Blanchard.</p>
                        <p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
                        <h4>6. Limitations de responsabilité.</h4>
                        <hr />
                        <p>Emmanuel Blanchard ne pourra être tenu responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site emmanuel-blanchard.fr, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
                        <p>Emmanuel Blanchard ne pourra également être tenu responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a>.</p>
                        <p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. Emmanuel Blanchard se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, Emmanuel Blanchard se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>
                        <h4>7. Gestion des données personnelles.</h4>
                        <hr />
                        <p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
                        <p>A l'occasion de l'utilisation du site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a>, peuvent êtres recueillies : l'URL des liens par l'intermédiaire desquels l'utilisateur a accédé au site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a>, le fournisseur d'accès de l'utilisateur, l'adresse de protocole Internet (IP) de l'utilisateur.</p>
                        <p> En tout état de cause Emmanuel Blanchard ne collecte des informations personnelles relatives à l'utilisateur que pour le besoin de certains services proposés par le site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a>. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a> l’obligation ou non de fournir ces informations.</p>
                        <p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
                        <p>Aucune information personnelle de l'utilisateur du site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a> n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat de Emmanuel Blanchard et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a>.</p>
                        <p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
                        <h4>8. Liens hypertextes et cookies.</h4>
                        <hr />
                        <p>Le site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de Emmanuel Blanchard. Cependant, Emmanuel Blanchard n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
                        <p>La navigation sur le site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a> est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>
                        <p>Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>
                        <p>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.</p>
                        <p>Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l'onglet Options. Cliquer sur l'onglet Vie privée.
                        Paramétrez les Règles de conservation sur :  utiliser les paramètres personnalisés pour l'historique. Enfin décochez-la pour  désactiver les cookies.</p>
                        <p>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur Paramètres de contenu. Dans la section "Cookies", vous pouvez bloquer les cookies.</p>
                        <p>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur préférences.  Dans l'onglet "Confidentialité", vous pouvez bloquer les cookies.</p>
                        <p>Cookies de sessions présents sur ce site :</p>
                        <ul>
                            <li>PHPSESSID : Cookie de session propre à PHP</li>
                        </ul>
                        <h4>9. Droit applicable et attribution de juridiction.</h4>
                        <hr />
                        <p>Tout litige en relation avec l’utilisation du site <a href="https://emmanuel-blanchard.fr/">emmanuel-blanchard.fr</a> est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>
                        <h4>10. Les principales lois concernées.</h4>
                        <hr />
                        <p>Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l'informatique, aux fichiers et aux libertés.</p>
                        <p> Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique.</p>
                        <h4>11. Lexique.</h4>
                        <hr />
                        <p>Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>
                        <p>Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary modal-trigger" data-bs-target="#modal-legalnotices" data-bs-dismiss="modal" aria-label="Fermer" title="Fermer cette fenêtre modale">Fermer</button>
                    </div>
                </div>
            </div>
        </div>

        <!--===== SCROLL UP =====-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
        </a>

        <!--===== SWIPER JS =====-->
        <script src="js/swiper-bundle.min.js"></script> 

        <!--===== BOOTSTRAP JS =====-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

        <!--===== MAIN JS =====-->
        <script src="js/main.js"></script>
    </body>
</html>