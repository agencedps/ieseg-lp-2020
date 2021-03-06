<?php
/*
Template Name: LP par défaut 2020
*/

?>
<?php get_header(); ?>
<?php

//include('includes/test-current-page.php');
//include('includes/header-landing-pages.php');
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="main-container">

        <!-- HERO BEGIN -->
        <section class="hero-container">
            <div class="hero-wrapper">
                <div class="hero-inner">
                    <div class="hero">
                        <article class="hero-slide">
                            <div class="bg"
                                 style="background-image: url(<?php echo get_template_directory_uri() . '/img/photos/default_hero.jpg' ?>)"></div>
                            <div class="content">
                                <h1 class="titre"> <?php the_title(); ?></h1>
                                <!--<h1 class="titre">Executive Mastère Spécialisé&reg; Direction Commerciale et Business Development</h1>-->
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- HERO END -->

        <!-- KEYFACTS BEGIN -->
        <section class="keyfacts-container">
            <div class="keyfacts-wrapper">
                <div class="keyfacts-inner">
                    <ul class="keyfacts">
                        <li class="keyfact">
                            <div class="picto"><img alt="Format"
                                                    src="<?php echo get_template_directory_uri() . '/img/pictos/picto_keyfact_format.svg' ?>">
                            </div>
                            <div class="content">
                                <p class="fact">Format</p>
                                <p class="key">1 year (3 terms),<br>
                                    full time</p>
                            </div>
                        </li>
                        <li class="keyfact">
                            <div class="picto"><img alt="Format"
                                                    src="<?php echo get_template_directory_uri() . '/img/pictos/picto_keyfact_intake.svg' ?>">
                            </div>
                            <div class="content">
                                <p class="fact">Intake</p>
                                <p class="key">September</p>
                            </div>
                        </li>
                        <li class="keyfact">
                            <div class="picto"><img alt="Format"
                                                    src="<?php echo get_template_directory_uri() . '/img/pictos/picto_keyfact_language.svg' ?>">
                            </div>
                            <div class="content">
                                <p class="fact">Language</p>
                                <p class="key">English</p>
                            </div>
                        </li>
                        <li class="keyfact">
                            <div class="picto"><img alt="Format"
                                                    src="<?php echo get_template_directory_uri() . '/img/pictos/picto_keyfact_location.svg' ?>">
                            </div>
                            <div class="content">
                                <p class="fact">Location</p>
                                <p class="key">Paris - France</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- KEYFACTS END -->

        <!-- INSCRIPTION BEGIN -->
        <section class="inscription-container">
            <div class="inscription-wrapper">
                <div class="inscription-inner">
                    <div class="info"><p>Participez à la prochaine réunion d'information le 3 avril à 17h</p></div>
                    <a class="btn btn-transparent" href="lien_mail"><strong>S'inscrire par mail</strong>
                        <small>Sur diplomants@ieseg.fr</small></a>
                    <a class="btn btn-transparent" href="lien_tel"><strong>S'inscrire par tel.</strong>
                        <small>Au 01 55 91 98 06</small></a>
                </div>
            </div>
        </section>
        <!-- INSCRIPTION END -->

        <!-- CONTENT BEGIN -->
        <section class="content-container">
            <div class="content-wrapper">
                <div class="content-inner">
                    <div class="editor-content">
                        <?php the_content(); ?>
                    </div>
                    <p align="center"><a class="btn btn-jaune" href="#form-container">Je télécharge la
                            <strong>Brochure</strong></a></p>
                </div>
            </div>
        </section>
        <!-- CONTENT END -->

        <!-- VIDEO BEGIN -->
        <section class="video-container">
            <div class="video-wrapper">
                <div class="video-inner">
                    <h2 class="titre">Titre de section</h2>
                    <figure class="wp-block-embed-youtube aligncenter wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
                        <div class="wp-block-embed__wrapper">
                            <iframe title="Campus Channel - Oral Spécial Droit et Management - IÉSEG" width="500"
                                    height="281" src="https://www.youtube.com/embed/zdKm-UXd6AQ?feature=oembed"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen=""></iframe>
                        </div>
                    </figure>
                    <p align="center"><a class="btn btn-jaune-to-border-white" href="#form-container">Je télécharge la
                            <strong>Brochure</strong></a></p>
                </div>
            </div>
        </section>
        <!-- VIDEO END -->

        <!-- NUMBERS BEGIN -->
        <section class="numbers-container">
            <div class="numbers-wrapper">
                <div class="numbers-inner">
                    <h2 class="titre2">Chiffres</h2>
                    <div class="numbers">
                        <div class="number">
                            <a href="<?php echo get_page_link(apply_filters('wpml_object_id', 1766, 'page')); ?>">
                                <div class="picto"><img alt="<?php _e("students", "ieseg2020") ?>"
                                                        src="<?php echo get_template_directory_uri() . '/img/pictos/picto_bars3D.svg' ?>">
                                </div>
                                <div class="value">5 850</div>
                                <div class="unit"><?php _e("students", "ieseg2020") ?></div>
                            </a>
                        </div>
                        <div class="number"><a
                                    href="<?php echo get_page_link(apply_filters('wpml_object_id', 2029, 'page')); ?>">
                                <div class="picto"><img alt="<?php _e("international professors", "ieseg2020") ?>"
                                                        src="<?php echo get_template_directory_uri() . '/img/pictos/picto_international.svg' ?>">
                                </div>
                                <div class="value">82%</div>
                                <div class="unit"><?php _e("international professors", "ieseg2020") ?></div>
                            </a>
                        </div>
                        <div class="number">
                            <a href="<?php echo get_page_link(apply_filters('wpml_object_id', 1976, 'page')); ?>">
                                <div class="picto"><img alt="<?php _e("partner universities", "ieseg2020") ?>"
                                                        src="<?php echo get_template_directory_uri() . '/img/pictos/picto_atom.svg' ?>">
                                </div>
                                <div class="value">292</div>
                                <div class="unit"><?php _e("partner universities", "ieseg2020") ?></div>
                            </a>
                        </div>
                        <div class="number">
                            <a href="<?php echo get_page_link(apply_filters('wpml_object_id', 2134, 'page')); ?>">
                                <div class="picto"><img alt="<?php _e("partner companies", "ieseg2020") ?>"
                                                        src="<?php echo get_template_directory_uri() . '/img/pictos/picto_equalizer.svg' ?>">
                                </div>
                                <div class="value">2 500</div>
                                <div class="unit"><?php _e("partner companies", "ieseg2020") ?></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- NUMBERS END -->

        <!-- RESUME BEGIN -->
        <section class="content-container">
            <div class="content-wrapper">
                <div class="content-inner">
                    <h2>Titre de section</h2>

                    <div class="accordion" role="tablist" aria-live="polite" data-behavior="accordion">

                        <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
        <span id="tab1" tabindex="0" class="accordion__title" aria-controls="panel1" role="tab" aria-selected="false"
              aria-expanded="false" data-binding="expand-accordion-trigger">
          <img src="<?php echo get_template_directory_uri() . '/img/pictos/picto_student.svg' ?>"/><h4>A Top International Business School</h4>
        </span>
                            <div id="panel1" class="accordion__content" role="tabpanel" aria-hidden="true"
                                 aria-labelledby="tab1" data-binding="expand-accordion-container">
                                <div class="accordion__content-inner">
                                    <p>Accréditée EQUIS, AACSB et AMBA (1% des écoles de commerce mondiale), l’IÉSEG
                                        School of Management est reconnue par le Financial Times comme <strong>l’une des
                                            meilleures écoles de commerce au monde</strong> et est classée, dans le top
                                        10 des écoles
                                        de commerce en France*.</p>
                                    <p>Le campus de l’IÉSEG est idéalement situé au cœur du 1er quartier d’affaires
                                        européen&nbsp;:
                                        </strong>La Défense</strong>.</p>
                                    <p>*Classement Masters en Management, 2019</p>
                                </div>
                            </div>

                        </article>

                        <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
        <span id="tab2" tabindex="0" class="accordion__title" aria-controls="panel2" role="tab" aria-selected="false"
              aria-expanded="false" data-binding="expand-accordion-trigger">
          <img src="<?php echo get_template_directory_uri() . '/img/pictos/picto_toolhead.svg' ?>"/><h4>Career Services</h4>
        </span>
                            <div id="panel2" class="accordion__content" role="tabpanel" aria-hidden="true"
                                 aria-labelledby="tab2" data-binding="expand-accordion-container">
                                <div class="accordion__content-inner">
                                    <p>Eaque! Quis sollicitudin cupiditate egestas mollit diam, volutpat nibh
                                        adipiscing,
                                        repellendus occaecat pretium. Imperdiet, mollit voluptatibus repellat vehicula
                                        mus
                                        eveniet.</p>
                                    <p>Accusamus condimentum tempora? Cum, iste exercitationem nobis explicabo ipsa
                                        mollitia, exercitation sociosqu, quas assumenda quidem doloremque suscipit diam
                                        libero aliquam.</p>
                                    <p>Maecenas sint, aenean potenti, ducimus cupidatat fames congue at optio diamlorem
                                        nibh
                                        cumque dui. Reprehenderit, irure mollit aliquam quaerat fugiat.</p>
                                </div>
                            </div>
                        </article>

                        <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
        <span id="tab3" tabindex="0" class="accordion__title" aria-controls="panel3" role="tab" aria-selected="false"
              aria-expanded="false" data-binding="expand-accordion-trigger">
          <img src="<?php echo get_template_directory_uri() . '/img/pictos/picto_list.svg' ?>"/><h4>CFA Institute University Recognition Program</h4>
        </span>
                            <div id="panel3" class="accordion__content" role="tabpanel" aria-hidden="true"
                                 aria-labelledby="tab3" data-binding="expand-accordion-container">
                                <div class="accordion__content-inner">
                                    <p>Eget sapien dignissim. Harum? Montes! Vulputate! Cillum, vitae ad, magnam conubia
                                        deserunt, dui rhoncus, tristique, ornare enim occaecati occaecati, duis repellat
                                        sit, curabitur omnis! Quam ornare, deleniti, turpis! Aliquid pulvinar.</p>
                                </div>
                            </div>
                        </article>

                        <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
        <span id="tab4" tabindex="0" class="accordion__title" aria-controls="panel4" role="tab" aria-selected="false"
              aria-expanded="false" data-binding="expand-accordion-trigger">
          <img src="<?php echo get_template_directory_uri() . '/img/pictos/picto_world.svg' ?>"/><h4>Study in the Largest Business District of Europe</h4>
        </span>
                            <div id="panel4" class="accordion__content" role="tabpanel" aria-hidden="true"
                                 aria-labelledby="tab4" data-binding="expand-accordion-container">
                                <div class="accordion__content-inner">
                                    <p>Nullam voluptate, deleniti est. Praesentium torquent netus integer cursus
                                        nisl.</p>
                                    <p>Possimus euismod feugiat occaecati distinctio omnis sapien aliquet nullam
                                        pharetra.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- RESUME END -->

        <!-- ATTENTION STATIC TESTIMONIALS !!! -->
        <!-- TESTIMONIALS BEGIN -->
        <?php
        if (ICL_LANGUAGE_CODE != "zh-hans") {
            ?>
            <section class="testis-container">
                <div class="testis-wrapper">
                    <div class="testis-inner">
                        <h2 class="titre">Témoignages</h2>
                        <div class="testimonials">
                            <div class="testi-slide">
                                <article class="testimonial">
                                    <div class="thumbnail">
                                        <img src="http://ieseg.test/wp-content/uploads/2015/07/yeonhae-lee-fashion-420x385.png"
                                             class="testimonials-home-photo img-responsive" alt="Yeonhae (Ann) Lee">
                                    </div>
                                    <div class="infos">
                                        <h3 class="titre">Yeonhae (Ann) Lee</h3>
                                        <p class="meta">MSc in Fashion Management, 2014</p>
                                    </div>
                                    <div class="testi-excerpt"><a href="http://ieseg.test/testimonial/yeonhae-ann-lee/"
                                                                  title="Yeonhae (Ann) Lee" tabindex="-1">J’ai vécu
                                            chaque minute passée à l’IÉSEG à cent à
                                            l’heure,
                                            avec
                                            son lot de nouvelles expériences et de découvertes. L’année à l’IÉSEG à
                                            Paris a
                                            été
                                            une
                                            expérience enrichissante qui m’a permis d’acquérir des connaissances
                                            fondamentales
                                            approfondies que j’applique encore aujourd’hui.

                                            Cela m’a aidée à mieux comprendre les éléments nécessaires pour réussir dans
                                            un
                                            environnement commerci  </a>
                                    </div>
                                </article>
                            </div>
                            <div class="testi-slide">
                                <article class="testimonial">
                                    <div class="thumbnail">
                                        <img src="http://ieseg.test/wp-content/uploads/miart-420x385.png"
                                             class="testimonials-home-photo img-responsive" alt="Anne-Lise Miart">
                                    </div>
                                    <div class="infos">
                                        <h3 class="titre">Anne-Lise Miart</h3>
                                        <p class="meta">Programme Grande École, 2012</p>
                                    </div>
                                    <div class="testi-excerpt">Anne-Lise Miart est entrée à l’IÉSEG en 2006 et elle
                                        prend
                                        rapidement la décision de partir en échange au Chili pour sa deuxième année. De
                                        retour à
                                        Lille, elle s’investit dans son projet Co « Speed Recruit’in Lille ». Ce projet
                                        sera
                                        un
                                        véritable succès&nbsp;!

                                        Pour son stage opérationnel, elle intègre « Al Campo » en tant qu’Assistante
                                        Chef de
                                        Rayon en Espagne. Puis, persuadée que l’audit est fait pour <span
                                                class="troncat">...</span>
                                    </div>
                                </article>
                            </div>
                            <div class="testi-slide">
                                <article class="testimonial">
                                    <div class="thumbnail">
                                        <img src="http://ieseg.test/wp-content/uploads/2015/08/bac_henricus-warren-e1440435498433-420x385.png"
                                             class="testimonials-home-photo img-responsive" alt="Warren Henricus">
                                    </div>
                                    <div class="infos">
                                        <h3 class="titre">Warren Henricus
                                        </h3>
                                        <p class="meta">MSc in Business Analysis &amp; Consulting, 2015</p>
                                    </div>
                                    <div class="testi-excerpt">Avant de rejoindre l’IÉSEG, j’ai obtenu un Bachelor en
                                        Génie
                                        Mécanique à l’Université des Sciences et Technologies de Hong Kong. Je voulais
                                        poursuivre mes études au sein d’un établissement qui me permettrait d’établir un
                                        pont
                                        entre ma formation technique et mon envie de travailler dans le domaine du
                                        conseil.

                                        J’ai été attiré par le Master of Science in Business Analysis &amp; Consulting
                                        et
                                        par le
                                        fait
                                    </div>
                                </article>
                            </div>
                            <div class="testi-slide">
                                <article class="testimonial">
                                    <div class="thumbnail">
                                        <img src="" class="testimonials-home-photo img-responsive"
                                             alt="Brittany Hasden">
                                    </div>
                                    <div class="infos">
                                        <h3 class="titre">Brittany Hasden
                                        </h3>
                                        <p class="meta">International MBA, 2016</p>
                                    </div>
                                    <div class="testi-excerpt">Pour moi, l’expérience culturelle ainsi que la chance
                                        d’étudier à
                                        l’IÉSEG&nbsp; ont été très épanouissants.

                                        J’ai toujours rêvé de faire un MBA depuis l’obtention de mon Bachelor à
                                        l’université
                                        de
                                        Floride en 2009.

                                        Aujourd’hui, dans le marché actuel, la concurrence est rude c'est d'autant plus
                                        important d’avoir une valeur ajoutée pour pouvoir se différencier des autres.
                                        C'est
                                        ce
                                        que permet un MBA
                                    </div>
                                </article>
                            </div>
                            <div class="testi-slide">
                                <article class="testimonial">
                                    <div class="thumbnail">
                                        <img src="http://ieseg.test/wp-content/uploads/raphaelle-dessein-420x385.png"
                                             class="testimonials-home-photo img-responsive" alt="Raphaëlle Dessein">
                                    </div>
                                    <div class="infos">
                                        <h3 class="titre">Raphaëlle
                                            Dessein
                                        </h3>
                                        <p class="meta">Programme Grande École, 2013</p>
                                    </div>
                                    <div class="testi-excerpt">Après l’obtention de mon bac ES à Lille, j’ai su
                                        immédiatement
                                        que le commerce serait ma voie. Je désirais avant tout une formation qui me
                                        permette
                                        une
                                        approche aussi bien théorique que pratique.

                                        J’ai donc opté pour un DUT en Gestion des Entreprises et des Administrations à
                                        l’Université Lille 1. Mon diplôme en poche, j’ai ensuite intégré l’IÉSEG pour
                                        ses
                                        valeurs mais également pour le Master « à l
                                    </div>
                                </article>
                            </div>
                            <div class="testi-slide">
                                <article class="testimonial">
                                    <div class="thumbnail">
                                        <img src="http://ieseg.test/wp-content/uploads/2016/01/labis-1-420x385.png"
                                             class="testimonials-home-photo img-responsive" alt="Vincent Labis">
                                    </div>
                                    <div class="infos">
                                        <h3 class="titre">Vincent Labis</h3>
                                        <p class="meta">Programme Grande Ecole, 1991</p>
                                    </div>
                                    <div class="testi-excerpt">Mon premier emploi fut celui de collaborateur de Maître
                                        BECQUET,
                                        Administrateur Judiciaire sur la métropole lilloise. Je connaissais assez peu le
                                        métier
                                        mais j’ai été séduit par la diversité des missions, la variété des secteurs
                                        d’activité
                                        et le challenge de redresser une entreprise.

                                        En 2000, j’ai intégré le département Corporate Finance de EY (Ernst &amp; Young
                                        à
                                        l’époque) où je fus chargé de crée
                                    </div>
                                </article>
                            </div>
                            <div class="testi-slide">
                                <article class="testimonial">
                                    <div class="thumbnail">
                                        <img src="http://ieseg.test/wp-content/uploads/2015/07/yeonhae-lee-fashion-420x385.png"
                                             class="testimonials-home-photo img-responsive" alt="Yeonhae (Ann) Lee">
                                    </div>
                                    <div class="infos">
                                        <h3 class="titre">Yeonhae (Ann)
                                            Lee
                                        </h3>
                                        <p class="meta">MSc in Fashion Management, 2014</p>
                                    </div>
                                    <div class="testi-excerpt">J’ai vécu chaque minute passée à l’IÉSEG à cent à
                                        l’heure,
                                        avec
                                        son lot de nouvelles expériences et de découvertes. L’année à l’IÉSEG à Paris a
                                        été
                                        une
                                        expérience enrichissante qui m’a permis d’acquérir des connaissances
                                        fondamentales
                                        approfondies que j’applique encore aujourd’hui.

                                        Cela m’a aidée à mieux comprendre les éléments nécessaires pour réussir dans un
                                        environnement commerci
                                    </div>
                                </article>
                            </div>
                            <div class="testi-slide">
                                <article class="testimonial">
                                    <div class="thumbnail">
                                        <img src="http://ieseg.test/wp-content/uploads/miart-420x385.png"
                                             class="testimonials-home-photo img-responsive" alt="Anne-Lise Miart">
                                    </div>
                                    <div class="infos">
                                        <h3 class="titre">Anne-Lise Miart
                                        </h3>
                                        <p class="meta">Programme Grande École, 2012</p>
                                    </div>
                                    <div class="testi-excerpt">Anne-Lise Miart est entrée à l’IÉSEG en 2006 et elle
                                        prend
                                        rapidement la décision de partir en échange au Chili pour sa deuxième année. De
                                        retour à
                                        Lille, elle s’investit dans son projet Co « Speed Recruit’in Lille ». Ce projet
                                        sera
                                        un
                                        véritable succès&nbsp;!

                                        Pour son stage opérationnel, elle intègre « Al Campo » en tant qu’Assistante
                                        Chef de
                                        Rayon en Espagne. Puis, persuadée que l’audit est fait pour <span
                                                class="troncat">...</span>
                                    </div>
                                </article>
                            </div>
                            <div class="testi-slide">
                                <article class="testimonial">
                                    <div class="thumbnail">
                                        <img src="http://ieseg.test/wp-content/uploads/2015/08/bac_henricus-warren-e1440435498433-420x385.png"
                                             class="testimonials-home-photo img-responsive" alt="Warren Henricus">
                                    </div>
                                    <div class="infos">
                                        <h3 class="titre">Warren Henricus
                                        </h3>
                                        <p class="meta">MSc in Business Analysis &amp; Consulting, 2015</p>
                                    </div>
                                    <div class="testi-excerpt">Avant de rejoindre l’IÉSEG, j’ai obtenu un Bachelor en
                                        Génie
                                        Mécanique à l’Université des Sciences et Technologies de Hong Kong. Je voulais
                                        poursuivre mes études au sein d’un établissement qui me permettrait d’établir un
                                        pont
                                        entre ma formation technique et mon envie de travailler dans le domaine du
                                        conseil.

                                        J’ai été attiré par le Master of Science in Business Analysis &amp; Consulting
                                        et
                                        par le
                                        fait
                                    </div>
                                </article>
                            </div>
                            <div class="testi-slide">
                                <article class="testimonial">
                                    <div class="thumbnail">
                                        <img src="" class="testimonials-home-photo img-responsive"
                                             alt="Brittany Hasden">
                                    </div>
                                    <div class="infos">
                                        <h3 class="titre">Brittany Hasden
                                        </h3>
                                        <p class="meta">International MBA, 2016</p>
                                    </div>
                                    <div class="testi-excerpt">Pour moi, l’expérience culturelle ainsi que la chance
                                        d’étudier à
                                        l’IÉSEG&nbsp; ont été très épanouissants.

                                        J’ai toujours rêvé de faire un MBA depuis l’obtention de mon Bachelor à
                                        l’université
                                        de
                                        Floride en 2009.

                                        Aujourd’hui, dans le marché actuel, la concurrence est rude c'est d'autant plus
                                        important d’avoir une valeur ajoutée pour pouvoir se différencier des autres.
                                        C'est
                                        ce
                                        que permet un MBA
                                    </div>
                                </article>
                            </div>
                            <div class="testi-slide">
                                <article class="testimonial">
                                    <div class="thumbnail">
                                        <img src="http://ieseg.test/wp-content/uploads/raphaelle-dessein-420x385.png"
                                             class="testimonials-home-photo img-responsive" alt="Raphaëlle Dessein">
                                    </div>
                                    <div class="infos">
                                        <h3 class="titre">Raphaëlle
                                            Dessein
                                        </h3>
                                        <p class="meta">Programme Grande École, 2013</p>
                                    </div>
                                    <div class="testi-excerpt">Après l’obtention de mon bac ES à Lille, j’ai su
                                        immédiatement
                                        que le commerce serait ma voie. Je désirais avant tout une formation qui me
                                        permette
                                        une
                                        approche aussi bien théorique que pratique.

                                        J’ai donc opté pour un DUT en Gestion des Entreprises et des Administrations à
                                        l’Université Lille 1. Mon diplôme en poche, j’ai ensuite intégré l’IÉSEG pour
                                        ses
                                        valeurs mais également pour le Master « à l
                                    </div>
                                </article>
                            </div>
                            <div class="testi-slide">
                                <article class="testimonial">
                                    <div class="thumbnail">
                                        <img src="http://ieseg.test/wp-content/uploads/2016/01/labis-1-420x385.png"
                                             class="testimonials-home-photo img-responsive" alt="Vincent Labis">
                                    </div>
                                    <div class="infos">
                                        <h3 class="titre">Vincent Labis</h3>
                                        <p class="meta">Programme Grande Ecole, 1991</p>
                                    </div>
                                    <div class="testi-excerpt">Mon premier emploi fut celui de collaborateur de Maître
                                        BECQUET,
                                        Administrateur Judiciaire sur la métropole lilloise. Je connaissais assez peu le
                                        métier
                                        mais j’ai été séduit par la diversité des missions, la variété des secteurs
                                        d’activité
                                        et le challenge de redresser une entreprise.

                                        En 2000, j’ai intégré le département Corporate Finance de EY (Ernst &amp; Young
                                        à
                                        l’époque) où je fus chargé de crée
                                    </div>
                                </article>
                            </div>
                            <div class="testi-slide">
                                <article class="testimonial">
                                    <div class="thumbnail">
                                        <img src="http://ieseg.test/wp-content/uploads/2015/07/yeonhae-lee-fashion-420x385.png"
                                             class="testimonials-home-photo img-responsive" alt="Yeonhae (Ann) Lee">
                                    </div>
                                    <div class="infos">
                                        <h3 class="titre">Yeonhae (Ann)
                                            Lee
                                        </h3>
                                        <p class="meta">MSc in Fashion Management, 2014</p>
                                    </div>
                                    <div class="testi-excerpt">J’ai vécu chaque minute passée à l’IÉSEG à cent à
                                        l’heure,
                                        avec
                                        son lot de nouvelles expériences et de découvertes. L’année à l’IÉSEG à Paris a
                                        été
                                        une
                                        expérience enrichissante qui m’a permis d’acquérir des connaissances
                                        fondamentales
                                        approfondies que j’applique encore aujourd’hui.

                                        Cela m’a aidée à mieux comprendre les éléments nécessaires pour réussir dans un
                                        environnement commerci
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
        <!-- TESTIMONIALS END -->

        <!-- FORM BEGIN -->
        <section id="form-container" class="form-container">
            <div class="form-wrapper">
                <div class="form-inner">
                    <h2 class="titre">Plus d'informations</h2>
                    <p class="desc">Remplissez le formulaire pour télécharger la brochure de l'Exec MBA</p>

                    <?php if (function_exists('ninja_forms_display_form')) {
                        ninja_forms_display_form(25);
                    } ?> <!-- CHANGE FORM ID -->

                </div>
            </div>
        </section>
        <!-- FORM END -->

    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>