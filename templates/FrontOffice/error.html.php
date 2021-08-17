<?php if ($data['errortab'] === null): ?>
    <section>
        <p class="pError"> Erreur : l'affichage des erreurs n'est pas possible. </p>
    </section>
<?php elseif ($data['errortab'] !== null): ?>
    <?php foreach($data['errortab'] as $post): ?>
        <section id="error" class="error section">
            <div class="error__container container grid">
                <div class="error__content grid">
                    <div class="error__data">
                    <h3 class="error__title">Information</h3>
                    <p class="error__description"> <?=$post['errorName']?> </p>
                    <p class="error__description"> <?=$post['errorValue']?> </p>
                    <a href="index.php?action=home" class="button button--flex">Accueil</a>
                    </div>
                </div>
            </div>
    <?php endforeach; ?>
<?php endif; ?>