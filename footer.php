<footer class="footer">

    <div class="footer-container">
        <div class="footer-wrapper">
            <a href="<?php echo get_page_link(apply_filters('wpml_object_id', 18286, 'page')); ?>"
               class="accreditations" title="<?php _e("Our accreditations and labels", "ieseg2020") ?>">
                <img src="<?php echo get_template_directory_uri() . '/img/logos/logos_accreditations-et-labels.png' ?>"
                     alt="EQUIS, AACSB, AMBA, CGE, EESPIG"></a>
        </div>
    </div>
    <div class="footer-container">
        <div class="footer-wrapper">
            <div class="adresses">
                <p class="titre"><span>Nos adresses</span></p>
                <p><strong>LILLE /</strong> 3 rue de la Digue <br> 59000 Lille <br> <br></p>
                <p><strong>PARIS /</strong> 1 parvis de La Défense <br> 92044 Paris - La Défense</p>
            </div>
            <div class="contacts">
                <p class="titre"><span>Nous contacter</span></p>
                <p class="email"><strong>PAR MAIL /</strong><br><a href="mailto:diplomants@ieseg.fr"
                                                                   title="diplomants@ieseg.fr">diplomants@ieseg.fr</a>
                </p>
                <p class="phone"><strong>PAR TÉLÉPHONE /</strong><br><a
                            href="tel:<?php _e('(+33)3.20.54.58.92', 'ieseg2020'); ?>"
                            title="<?php _e('(+33)3.20.54.58.92', 'ieseg2020'); ?>"><?php _e('(+33)3.20.54.58.92', 'ieseg2020'); ?></a>
                </p>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</div><!-- fin de #container-global-->
</body>
</html>