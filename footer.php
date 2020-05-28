<footer>
	<div class="container-fluid barre-deco" >
        <div class="row">
            <div class="deco bg-orange1"></div>
            <div class="deco bg-orange2"></div>
            <div class="deco bg-jaune"></div>
            <div class="deco bg-bleu"></div>
            <div class="deco bg-bleu-ciel"></div>
            <div class="deco bg-rouge"></div>
            <div class="deco bg-corail"></div>
            <div class="deco bg-rose"></div>
            <div class="deco bg-violet"></div>
            <div class="deco bg-vert-canard"></div>
        </div>
    </div>
    
    <div id="footer-infos" class="container" > 
    	<div class="row punchline-footer">
        	<div class="col-sm-12 text-center">
            	<?php global $punchline_footer; echo $punchline_footer; ?>
            </div>
        </div>           		
                    <div class="row footer-adress">
                    	<div class="col-sm-3">
                        	<a href="https://www.ieseg.fr" title="Ieseg School Of Management" class="footer-logo">
                            
                            </a>
                        </div>
                        <div class="col-sm-3">
                        	<div class="conteneur-adresse"><div class="picto-adresse picto-adresse-lille"></div>3 rue de la Digue - 59000 Lille</div>
                            <div class="conteneur-adresse"><div class="picto-adresse picto-adresse-paris"></div>1 parvis de La Défense - 92044 Paris - La Défense Cedex</div>
                        </div>
                        <div class="col-sm-3">
                        	<div class="conteneur-adresse"><i class="fa fa-phone fa-2x"></i>&nbsp;&nbsp;&nbsp;&nbsp;
<?php global $tel_footer; echo $tel_footer; ?></div>
                            <div class="conteneur-adresse"><i class="fa fa-envelope fa-2x"></i>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="mailto:<?php global $mail_footer; echo $mail_footer; ?>" title="<?php _e('Send a message', 'ieseg2015');?>" class="footer-brochures"><?php echo $mail_footer; ?></a></div>
                        </div>
                        <div class="col-sm-3">
                        	<a title="Our accreditations" class="pull-right" href="https://www.ieseg.fr/en/accreditations-labels-business-school/"><img src="https://www.ieseg.fr/landings/wp-content/themes/ieseg-landings-2015/images/logos-accreditation-landing-pages-footer.png" class="img-responsive" /></a>
                        </div>
                	</div>

	</div>  
</footer>
<?php wp_footer(); ?>
</div><!-- fin de #container-global-->
</body>
</html>