<?php
/**
 * Header de la landing-page IMBA (ES)
 *
 */
 
if(is_page(1966)){ 
	//$url_img_une="http://www.ieseg.fr/wp-content/uploads/2013/12/img-international-mba.jpg";
	$url_img_une="https://www.ieseg.fr/wp-content/uploads/2017/01/img-landing-imba.jpg";
	$punchline_programme="Afina tus habilidades para el mercado global";
	$punchline_footer="Únete a un MBA internacional y estudia en el corazón de Europa";
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
				<strong>UBICACIÓN:</strong> Paris - Francia
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<strong>ACREDITACIÓN:</strong> AMBA
			</div>
			<div class="col-sm-6">
				<strong>CRÉDITOS:</strong> 90 ECTS
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

        
            <div class="text-left container-titre-programme container-titre-bib" style="background-color: rgba(252, 194, 14, 1); margin-top:0 !important; padding-bottom:4px;">
                <div class="col-sm-8">
                    <?php    
                            the_title( '<h1 class="entry-title foundry_demi titre-bib">', '</h1>' ); 
                    ?>
                    <div class="punchline-program" style="font-size:30px;margin-top:-15px !important;text-align:center;text-transform: none;">
                        <?php echo $punchline_programme; ?>
                    </div>
                </div>
            </div>
<div id="container-img-une" style="background-image:url(<?php echo $url_img_une ?>);">
</div>