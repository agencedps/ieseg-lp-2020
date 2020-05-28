<?php
/**
 * Header de la landing-page MSc Digital Marketing Latin America ES
 *
 */
 
if(is_page(3081)){ 
	$url_img_une="https://www.ieseg.fr/landings/wp-content/themes/ieseg-landings-2015/images/img-une/banner-bis-msc-digital-marketing.jpg";
	$punchline_programme="Optimiza las estrategias y prácticas de negocio en línea";
	$punchline_footer="¡Experimente la Aventura Digital y acelera tu carrera en Marketing!";
	$tel_footer ="(+57)313 358 84 12";
	$mail_footer="latinamericaoffice@ieseg.fr";
	$keyfacts_programme = 
		'<div class="row">
			<div class="col-sm-6">
				<strong>FORMATO:</strong> 1 año, Tiempo Completo 
			</div>
			<div class="col-sm-6">
				<strong>IDIOMA:</strong> Inglés
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<strong>INGRESO:</strong> Septiembre
			</div>
			<div class="col-sm-6">
				<strong>UBICACIÓN:</strong> Lille - Francia
			</div>
		</div> 
	  ';
}
 
 if ( has_post_thumbnail()) : 
	$str_img_une = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'mega-thumb' );
	//echo get_the_ID().' '.var_dump($str_img_une);

endif;
?>
        
<div class="text-left container-titre-programme container-titre-banking" style="background-color: rgba(252, 194, 14, 1); margin-top:0 !important; padding-bottom:4px;">
	<div class="col-sm-7">
		<?php    
				the_title( '<h1 class="entry-title foundry_demi titre-bib">', '</h1>' ); 
		?>
		<div class="punchline-program" style="font-size:30px; margin-top:-15px !important; text-align:center; text-transform: none !important;">
			<?php echo $punchline_programme; ?>
		</div>
	</div>
</div>
<div id="container-img-une" style="background-image:url(<?php echo $url_img_une ?>);"></div>