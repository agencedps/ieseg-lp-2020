<?php
/**
 * Header de la General Landing Page
 *
 */
 
//General Landing Page
if(is_page(369)){  /* CHANGE NUMER PAGE */
	$url_img_une="https://www.ieseg.fr/wp-content/uploads/2017/01/img-landing-general.jpg";
	$punchline_programme="";
	$punchline_footer="Experience the new culture of international management!";
	$tel_footer ="(+33)3.20.54.58.92";
	$mail_footer="msc@ieseg.fr";
	$keyfacts_programme = 
		'<div class="row" style="padding: 10px 0;">
			<div class="col-sm-6">
				<strong>LANGUAGE:</strong> English
			</div>
			<div class="col-sm-6">
				<strong>LOCATION :</strong> Paris and Lille - France
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
                the_title( '<h1 class="entry-title foundry_demi titre-bib" style="padding-top: 20px;">', '</h1>' ); 
        ?>
        <div class="punchline-program" style="font-size:30px;margin-top:-15px !important;text-align:center;">
            <?php echo $punchline_programme; ?>
        </div>
    </div>
</div>
<div id="container-img-une" style="background-image:url(<?php echo $url_img_une ?>);">
</div>