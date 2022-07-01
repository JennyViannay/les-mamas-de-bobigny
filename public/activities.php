<?php include('layouts/header.php'); ?>
<main>
    <div class="container">
        <h1 class="text-center">Nos Activites</h1>
        <p>L’association « LES MAMANS DE BOBIGNY » met en place diverses actions dont l’objectif est de
            contribuer à l’accompagnement des mamans au quotidien et en parallèle soutenir les enfants dans
            leur scolarité et divertissement également.</p>
        <p>
            Nous proposons des démarches administratives, mais aussi des cours d’alphabétisations, des ateliers
            bureautiques, des sorties pour les enfants durant les vacances scolaires et le mercredi après-midi
            (jeux intérieurs au sein de nos locaux) et des sorties familiales. Chaque année nous réalisons une fête
            culturel avec plusieurs plat différents des musiques différentes
            et des tenues traditionnel dans une salle qui s’appelle la salle max jacob à Bobigny cela à pour but de
            favoriser des échanges culturel et de créer une bonne cohésion social entre les mamans
        </p>
    </div>
    <section class="container">
        <h1 class="text-center">Devenir Bénévole</h1>
        <form action="">
            <div class="mb-3">
                <label for="firstname" class="form-label">Nom</label>
                <input type="text" class="form-control" id="firstname" placeholder="name@example.com" name="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="lastname" placeholder="name@example.com" name="lastname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Dites nous en plus sur vous</label>
                <textarea class="form-control" id="message" name="message" rows="10"></textarea>
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary btn-sm">Envoyer</button>
            </div>
        </form>
    </section>
</main>
<?php include('layouts/footer.php'); ?>