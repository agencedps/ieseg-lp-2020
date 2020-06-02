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
        </section>
        <!-- HERO END -->

        <!-- KEYFACTS BEGIN -->
        <section class="keyfacts-container">
            <div class="keyfacts-wrapper">
                <ul class="keyfacts">
                    <li class="keyfact">
                        <div class="picto"><img alt="Format"
                                                src="<?php echo get_template_directory_uri() . '/img/pictos/picto_keyfact_format.svg' ?>">
                        </div>
                        <div class="content">
                            <p class="fact">Format</p>
                            <p class="key">1 year (3terms),<br>
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
        </section>
        <!-- KEYFACTS END -->

        <!-- CONTENT BEGIN -->
        <section class="content-container">
            <div class="content-wrapper">
                <?php the_content(); ?>
                <p align="center"><a class="btn btn-jaune" href="lien_brochure">Je télécharge la
                        <strong>Brochure</strong></a></p>
            </div>
        </section>
        <!-- CONTENT END -->

        <!-- VIDEO BEGIN -->
        <section class="video-container">
            <div class="video-wrapper">
                <h2 class="titre">Titre de section</h2>
                <div class="player-video"></div>
                <p align="center"><a class="btn btn-jaune" href="lien_brochure">Je télécharge la
                        <strong>Brochure</strong></a></p>
            </div>
        </section>
        <!-- VIDEO END -->

        <!-- NUMBERS BEGIN -->
        <section class="numbers-container">
            <div class="numbers-wrapper">
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
        </section>
        <!-- NUMBERS END -->

        <!-- RESUME BEGIN -->
        <section class="content-container">
            <div class="content-wrapper">
                <h2>Titre de section</h2>

                <div class="accordion" role="tablist" aria-live="polite" data-behavior="accordion">

                    <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
        <span id="tab1" tabindex="0" class="accordion__title" aria-controls="panel1" role="tab" aria-selected="false"
              aria-expanded="false" data-binding="expand-accordion-trigger">
          <h5>A Top International Business School</h5>
        </span>
                        <div id="panel1" class="accordion__content" role="tabpanel" aria-hidden="true"
                             aria-labelledby="tab1" data-binding="expand-accordion-container">
                            <div class="accordion__content-inner">
                                <p>Quasi. Consectetur curabitur penatibus? Itaque natus potenti ipsum ligula fermentum
                                    semper recusandae. Doloribus cubilia cras, nostrud alias harum, accusamus saepe?
                                    Vero leo curabitur vulputate. Incididunt.</p>
                                <p>Adipisci nesciunt ea quis sunt assumenda senectus vero pariatur dictum. Diamlorem
                                    quis. Quisque, morbi qui architecto eiusmod facilisi ad dolorem, condimentum?
                                    Facilisi labore? Cupiditate elementum.</p>
                            </div>
                        </div>

                    </article>

                    <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
        <span id="tab2" tabindex="0" class="accordion__title" aria-controls="panel2" role="tab" aria-selected="false"
              aria-expanded="false" data-binding="expand-accordion-trigger">
          <h5>Career Services</h5>
        </span>
                        <div id="panel2" class="accordion__content" role="tabpanel" aria-hidden="true"
                             aria-labelledby="tab2" data-binding="expand-accordion-container">
                            <div class="accordion__content-inner">
                                <p>Eaque! Quis sollicitudin cupiditate egestas mollit diam, volutpat nibh adipiscing,
                                    repellendus occaecat pretium. Imperdiet, mollit voluptatibus repellat vehicula mus
                                    eveniet.</p>
                                <p>Accusamus condimentum tempora? Cum, iste exercitationem nobis explicabo ipsa
                                    mollitia, exercitation sociosqu, quas assumenda quidem doloremque suscipit diam
                                    libero aliquam.</p>
                                <p>Maecenas sint, aenean potenti, ducimus cupidatat fames congue at optio diamlorem nibh
                                    cumque dui. Reprehenderit, irure mollit aliquam quaerat fugiat.</p>
                            </div>
                        </div>
                    </article>

                    <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
        <span id="tab3" tabindex="0" class="accordion__title" aria-controls="panel3" role="tab" aria-selected="false"
              aria-expanded="false" data-binding="expand-accordion-trigger">
          <h5>CFA Institute University Recognition Program</h5>
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
          <h5>Study in the Largest Business District of Europe</h5>
        </span>
                        <div id="panel4" class="accordion__content" role="tabpanel" aria-hidden="true"
                             aria-labelledby="tab4" data-binding="expand-accordion-container">
                            <div class="accordion__content-inner">
                                <p>Nullam voluptate, deleniti est. Praesentium torquent netus integer cursus nisl.</p>
                                <p>Possimus euismod feugiat occaecati distinctio omnis sapien aliquet nullam pharetra.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- RESUME END -->

        <!-- TESTIMONIALS BEGIN -->
        <?php
        if (ICL_LANGUAGE_CODE != "zh-hans") {
            ?>
            <section class="testis-container">
                <div class="testis-wrapper">
                    <h2 class="titre"><?php _e("Testimonials", "ieseg2020") ?></h2>
                    <div class="testimonials">

                        <?php
                        $args = array(
                            'posts_per_page' => 6,
                            'order' => 'DESC',
                            'orderby' => 'rand',
                            'post_type' => 'testimonial',
                            'suppress_filters' => false,
                            'tax_query' => array( //Exclusion de la cat EMBA
                                array(
                                    'taxonomy' => 'testimonial-category',
                                    // My Custom Taxonomy
                                    'terms' => array('emba', 'executive-mba-en'),
                                    // My Taxonomy Term that I wanted to exclude
                                    'field' => 'slug',
                                    // Whether I am passing term Slug or term ID
                                    'operator' => 'NOT IN',
                                    // Selection operator
                                ),
                            ),

                        );

                        //supress_filter false est utile pour WPML (ne retourne les posts que dans la langue en cours)
                        $postslist = get_posts($args);
                        if ($postslist) { ?>

                            <?php foreach ($postslist as $post) : setup_postdata($post); ?>
                                <div class="testi-slide">
                                    <article class="testimonial">
                                        <?php if (has_post_thumbnail()) {
                                            $thumb_testi = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'testimonial-thumb'); ?>
                                            <a class="thumbnail" href="<?php the_permalink(); ?>"
                                               title="<?php the_title(); ?>">
                                                <img src="<?php echo $thumb_testi['0']; ?>"
                                                     class="testimonials-home-photo img-responsive"
                                                     alt="<?php the_title(); ?>"/>
                                            </a>
                                        <?php } //end has post thumbnail ?>
                                        <div class="infos">
                                            <h3 class="titre"><a href="<?php the_permalink(); ?>"
                                                                 title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <p class="meta"><?php echo get_post_meta($id, 'wpcf-class', true) ?></p>
                                        </div>
                                        <div class="testi-excerpt"><?php ieseg_excerpt_debut_contenu(430) ?>
                                            <?php //the_excerpt(); ?>
                                            <a href="<?php the_permalink(); ?>" class="readmore"
                                               title="<?php _e("Keep reading", "ieseg2020") ?>">
                                                <?php _e("Keep reading", "ieseg2020") ?>
                                                <span class="glyphicon glyphicon-menu-right"></span>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                            <?php endforeach; ?>

                            <?php
                        } else {
                            _e("No testimonial for this program", "ieseg2020");
                        }
                        ?>

                    </div>
                    <div class="see-all">
                        <a href="<?php echo get_post_type_archive_link('testimonial'); ?>"
                           title="<?php _e('All testimonials', 'ieseg2020'); ?>"
                           class="btn btn-blanc"><?php _e("All the testimonials", "ieseg2020") ?></a>
                    </div>
                </div>
            </section>
        <?php } ?>
        <!-- TESTIMONIALS END -->

    </div>

<?php endwhile; endif; ?>


    <!--<div class="fond-menu-program hidden-xs">
        <div class="container-fluid container-1600">
            <div class="row container-sous-menu">
                <div id="menu-program">
                    ici barre grise

                </div>
            </div>
        </div>
        <div id="clear"></div>

    </div>
    <div class="programme-overview">

        <div class="hidden-md hidden-lg">
            <div class="keyfacts col-sm-3">
                <?php /*echo $keyfacts_programme; */ ?>
            </div>
        </div>

    </div>

    <section class="container-testimonials">
        <div class="container-fluid title container-titre-section-programmes-gris">
            <h2><span class="foundry_light"><?php /*_e("What our students", "ieseg2015") */ ?></span> <span
                        class="foundry_bold"><?php /*_e("say", "ieseg2015") */ ?></span></h2>

        </div>
        <div class="container-fluid container-1600">
            <div class="row">
                <div class="col-sm-12">
                    <div class="proghome-testimonials">


                    </div>
                </div>
            </div>

        </div>
    </section>-->
    <!--End Témoignages-->

<?php get_footer(); ?>