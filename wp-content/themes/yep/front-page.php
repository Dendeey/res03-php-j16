<?php  
    $menuItems = getNavigationMenu();  
?>

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
                <?xml version="1.0" encoding="utf-8"?>
                <!-- Generator: Adobe Illustrator 27.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Calque_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 2250 1500" style="enable-background:new 0 0 2250 1500;" xml:space="preserve">
                <style type="text/css">
                    .st0{fill:none;stroke:#FFFFFF;stroke-width:8;stroke-miterlimit:10;}
                    .st1{fill:none;stroke:#EFEC4F;stroke-width:10;stroke-miterlimit:10;}
                    .st2{fill:#EFEC4F;}
                    .st3{fill:none;stroke:#4CEE7E;stroke-width:10;stroke-miterlimit:10;}
                    .st4{fill:#4CEE7E;}
                    .st5{fill:none;stroke:#427CF5;stroke-width:10;stroke-miterlimit:10;}
                    .st6{fill:#427CF5;}
                    .st7{fill:none;stroke:#956CAF;stroke-width:10;stroke-miterlimit:10;}
                    .st8{fill:#956CAF;}
                    .st9{fill:none;stroke:#ECA45C;stroke-width:10;stroke-miterlimit:10;}
                    .st10{fill:#ECA45C;}
                    .st11{fill:none;stroke:#E85B69;stroke-width:10;stroke-miterlimit:10;}
                    .st12{fill:#E85B69;}
                </style>
                <line class="st0" x1="432.6" y1="181.1" x2="130.8" y2="679"/>
                <line class="st0" x1="609.6" y1="1116.9" x2="130.8" y2="679"/>
                <line class="st0" x1="1334.3" y1="984.1" x2="609.6" y2="1116.9"/>
                <line class="st0" x1="2097.2" y1="946.8" x2="1334.3" y2="984.1"/>
                <line class="st0" x1="1334.3" y1="278.9" x2="2097.2" y2="946.8"/>
                <line class="st0" x1="432.6" y1="181.1" x2="1334.3" y2="278.9"/>
                <line class="st0" x1="130.8" y1="679" x2="1334.3" y2="984.1"/>
                <line class="st0" x1="609.6" y1="1116.9" x2="432.6" y2="181.1"/>
                <line class="st0" x1="130.8" y1="679" x2="1343.1" y2="286.7"/>
                <line class="st0" x1="2097.2" y1="946.8" x2="435" y2="194"/>
                <line class="st0" x1="1334.3" y1="984.1" x2="1343.1" y2="286.7"/>
                <line class="st0" x1="609.6" y1="1116.9" x2="1343.1" y2="286.7"/>
                <circle class="st1" cx="432.6" cy="181.1" r="105.6"/>
                <circle class="st2" cx="432.6" cy="181.1" r="71.5"/>
                <circle class="st3" cx="130.8" cy="679" r="105.6"/>
                <circle class="st4" cx="130.8" cy="679" r="71.5"/>
                <circle class="st5" cx="609.6" cy="1116.9" r="105.6"/>
                <circle class="st6" cx="609.6" cy="1116.9" r="71.5"/>
                <circle class="st7" cx="1334.3" cy="984.1" r="105.6"/>
                <circle class="st8" cx="1334.3" cy="984.1" r="71.5"/>
                <circle class="st9" cx="1334.3" cy="278.9" r="105.6"/>
                <circle class="st10" cx="1334.3" cy="278.9" r="71.5"/>
                <circle class="st11" cx="2097.2" cy="946.8" r="105.6"/>
                <circle class="st12" cx="2097.2" cy="946.8" r="71.5"/>
                </svg>
                
            </figure>
            <nav>
                <ul>
                <?php foreach($menuItems as $item) { ?>
                    <li><a href="<?= $item->url ?>"><?= $item->title ?> </a></li>
                <?php } ?>
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
            </section>
            <section id="yepfolio-description">
                <h1 class="sr-only">Explication de yepfolio</h1>
                <article>
                    <header>
                        <h2>yepfolio en quelques mots</h2>
                    </header>
                    <section>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </section>
                </article>
            </section>
            <section id="last-projects">
                <h1 class="sr-only">Les derniers projets de yepfolio</h1>
                <header>
                    <h2>mes derniers projets</h2>
                </header>
                <section>
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
            </section>
            <section id="contact">
                <h1 class="sr-only">Formulaire de contact</h1>
                <header>
                    <h2>me contacter</h2>
                </header>
                <form method="get">
                    <fieldset>
                        <label for="firstname-name">Prénom + Nom *</label>
                        <input type="text" name="firstname-name">
                    </fieldset>
                    <fieldset>
                        <label for="email">Email *</label>  
                        <input type="email" name="email">
                    </fieldset>
                    <fieldset>
                        <label for="message">Message</label>
                        <textarea name="message"
                        rows="5" cols="33"></textarea>
                    </fieldset> 
                    <fieldset>
                        <input type="submit" id="submit-form" value="Envoyer">
                    </fieldset>
                </form>
            </section>
            
        </main>
        <footer>
                
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>