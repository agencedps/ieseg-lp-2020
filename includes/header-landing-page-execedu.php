<?php
/**
 * Header de la landing-page Executive Education
 *
 */
 
//Executive Education
if(is_page(593)){ 
	$url_img_une="https://www.ieseg.fr/wp-content/uploads/2017/02/img-landing-ExecEducation.jpg";
	$punchline_programme="Formation Continue pour Managers et Dirigeants";
	$punchline_footer="Votre formation intra entreprise sur-mesure";
	$tel_footer ="(+33)1 55 91 98 06";
	$mail_footer="executive@ieseg.fr";
	$keyfacts_programme = 
		'<div class="row">
			<div class="col-sm-8">
				<strong>LANGUE :</strong> français ou anglais, au choix
			</div>
			<div class="col-sm-4">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<strong>LIEU :</strong> défini selon vos besoins, en France et à l\'international
			</div>
			<div class="col-sm-4">
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