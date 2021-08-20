<?php if ($data['error-tab'] === null): ?>
    <section>
        <p> Erreur : l'affichage des erreurs n'est pas possible. </p>
    </section>
<?php elseif ($data['error-tab'] !== null): ?>
    <?php foreach($data['error-tab'] as $post): ?>
        <section class="error section" id="error">
            <h2 class="section-title">Oups !</h2>

            <div class="error__container container grid">
                <div class="error__content alert-error grid" role="alert">
                    <div class="error__data">
                    <h3 class="error__title">Information</h3>
                    <p class="error__description"> <?=$post['error-name']?> </p>
                    <p class="error__description"> <?=$post['error-value']?> </p>
                    <a href="index.php?action=home" class="button button--flex">Accueil</a>
                    </div>
                </div>
            </div>
        </section>    
    <?php endforeach; ?>
<?php endif; ?>