<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <?php wp_head(); ?>  
        <meta content="<?php echo get_bloginfo( 'name' );?>" name="title">  
        <meta content="<?php echo get_bloginfo( 'description' );?>" name="description">  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link rel="preconnect" href="https://fonts.googleapis.com">  
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />  
        <title><?php echo get_bloginfo( 'name' );?></title>
    </head>
    <body>
        <header>
            <figure>
                <img src="https://o.remove.bg/downloads/18b27d0e-c034-4a90-b821-99607e551b64/b88b921b0de27b28f8599271f3fedb6d-removebg-preview.png" alt="Logo du site">
            </figure>
            <nav>
                <ul>
                    <li>accueil</li>
                    <li>à propos</li>
                    <li>mes projets</li>
                    <li>me contacter</li>
                </ul>
            </nav>
        </header>
        <main>
            <section id="main-section">
                <h1 class="sr-only">Section de présention, titre avec image en fond</h1>
                <header>
                    <h1>yepfolio</h1>
                    <h2>développement web & mobile</h2>
                </header>
                <section>
                    <h1 class="sr-only">Image de fond</h1>
                </section>
            </section>
            <section id="yepfolio-description">
                <h1 class="sr-only">Explication de yepfolio</h1>
                <article>
                    <header>
                        <h2>yepfolio en quelques mots</h2>
                    </header>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                </article>
            </section>
            <section id="last-projects">
                <h1 class="sr-only">Les derniers projets de yepfolio</h1>
                <header>
                    <h2>mes derniers projets</h2>
                </header>
                <article>
                    <footer>
                        <h3>application santé</h3>
                        <h4>Pharmacie de Maurepas</h4>
                    </footer>
                </article>
                <article>
                    <footer>
                        <h3>site e-commerce</h3>
                        <h4>Librairie l'écume des jours</h4>
                    </footer>
                </article>
                <article>
                    <footer>
                        <h3>site vitrine</h3>
                        <h4>Boulangerie Galtier</h4>
                    </footer>
                </article>
                <article>
                    <footer>
                        <h3>site institutionnel</h3>
                        <h4>Mairie de Ploutruc</h4>
                    </footer>
                </article>
                <article>
                    <footer>
                        <h3>site promotionnel</h3>
                        <h4>Festival des choses</h4>
                    </footer>
                </article>
            </section>
            <section id="contact">
                <h1 class="sr-only">Formulaire de contact</h1>
                <header>
                    <h2>me contacter</h2>
                </header>
                <form>
                    <fieldset>
                        <label for="firstname-name">Prénom + Nom *<label>
                        <input type="text" name="firstname-name">
                    </fieldset>
                    <fieldset>
                        <label for="email">Email *<label>
                        <input type="email" name="email">
                    </fieldset>
                    <fieldset>
                        <label for="message">Message<label>
                        <textarea name="message"
                        rows="5" cols="33"></textarea>
                    </fieldset>
                    <fieldset>
                        <input type="submit" value="Envoyer">
                    </fieldset>
                </form>
            </section>
        </main>
        <?php wp_footer(); ?>
    </body>
</html>