<?php
/**
 * Header de la landing-page MIB Latin America ES
 *
 */
 
if(is_page(1963)){ 
	$url_img_une="https://www.ieseg.fr/landings/wp-content/themes/ieseg-landings-2015/images/img-une/img-landing-mib.jpg";
	$punchline_programme="Liderazgo con perspectiva internacional";
	$punchline_footer="Vive en el corazón de Europa y conviértete en un experto en negocios internacionales.";
	$tel_footer ="(+33)3.20.54.58.92";
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
				<strong>INGRESO:</strong> Enero y Septiembre del 2019
			</div>
			<div class="col-sm-6">
				<strong>UBICACIÓN:</strong> Lille & Paris - Francia
			</div>
		</div> 
	  ';
}
 
 if ( has_post_thumbnail()) : 
	$str_img_une = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'mega-thumb' );
	//echo get_the_ID().' '.var_dump($str_img_une);

endif;
?>
<?php
/*
<div class="container-fluid" id="container-img-une" <?php if (!empty ($str_img_une[0]) && $str_img_une[1]>1000 ) { echo 'style="background-image:url('.$str_img_une[0].');"';}?>>
*/
?>

        
<div class="text-left container-titre-programme container-titre-bigdata" style="background-color: rgba(252, 194, 14, 1); margin-top:0 !important; padding-bottom:4px;">
	<div class="col-sm-8">
		<?php    
				the_title( '<h1 class="entry-title foundry_demi titre-bib">', '</h1>' ); 
		?>
		<div class="punchline-program" style="font-size:30px; margin-top:-15px !important; text-align:center; text-transform: none !important;">
			<?php echo $punchline_programme; ?>
		</div>
	</div>
</div>
<div id="container-img-une" style="background-image:url(<?php echo $url_img_une ?>);"></div>