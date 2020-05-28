<?php
/**
 * Header de la landing-page MBA in Leadership and Coding FR
 *
 */
 
//MBA in Leadership and Coding
if(is_page(3232)){ 
	$url_img_une="https://www.ieseg.fr/wp-content/uploads/2020/02/header-mba-leadership-coding-ter.jpg";
	$punchline_programme="Leading a changing world and coding the future of business";
	$punchline_footer="Apprenez à manager et apprenez à coder !";
	$tel_footer ="(+33)1.55.91.10.10";
	$mail_footer="diplomants@ieseg.fr";
	$keyfacts_programme = 
		'<div class="row">
			<div class="col-sm-6">
				<strong>DURÉE :</strong> 1 an
			</div>
			<div class="col-sm-6">
				<strong>LANGUE :</strong> anglais
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<strong>RENTRÉE :</strong> octobre
			</div>
			<div class="col-sm-6">
				<strong>LIEU :</strong> Paris
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
                    <div class="punchline-program" style="font-size:30px;margin-top:-15px !important;text-align:center;">
                        <?php echo $punchline_programme; ?>
                    </div>
                </div>
            </div>
<div id="container-img-une" style="background-image:url(<?php echo $url_img_une ?>);">
</div>