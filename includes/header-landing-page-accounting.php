<?php
/**
 * Header de la landing-page Investment Banking and Capital Markets
 *
 */
 
if(is_page(658)){ 
	$url_img_une="https://www.ieseg.fr/wp-content/uploads/2018/10/banner-aac-bis-18.jpg";
	$punchline_programme="When Accounting meets Leadership";
	$punchline_footer="Live in France, Study Accountancy in English!";
	$tel_footer ="(+33)3.20.54.58.92";
	$mail_footer="msc@ieseg.fr";
	$keyfacts_programme = 
		'<div class="row">
			<div class="col-sm-6">
				<strong>FORMAT:</strong> 1 - year (3 terms), Full time 
			</div>
			<div class="col-sm-6">
				<strong>LANGUAGE:</strong> English
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<strong>INTAKE:</strong> September
			</div>
			<div class="col-sm-6">
				<strong>LOCATION:</strong> Paris - France
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

        
            <div class="text-left container-titre-programme container-titre-ms" style="background-color: rgba(252, 194, 14, 1); margin-top:0 !important; padding-bottom:4px;">
                <div class="col-sm-7">
                    <?php    
                            the_title( '<h1 class="entry-title foundry_demi titre-accounting">', '</h1>' ); 
                    ?>
                    <div class="punchline-program" style="font-size:30px;margin-top:-15px !important;text-align:center;text-transform: none;">
                        <?php echo $punchline_programme; ?>
                    </div>
                </div>
            </div>
<div id="container-img-une" style="background-image:url(<?php echo $url_img_une ?>);">
</div>