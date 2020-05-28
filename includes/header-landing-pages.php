<?php
/**
 * Header des landing-pages
 *
 */
 
//MSc Big Data
if(is_page(6)){ 
	$url_img_une="https://www.ieseg.fr/wp-content/uploads/2014/09/img-une-big-date2.jpg";
	$punchline_programme="Big Data, Big Career, Big Opportunities";
	$punchline_footer="Crunch Big Data, Take Control of your Future";
	$tel_footer ="(+33)3.20.54.58.92";
	$mail_footer="msc@ieseg.fr";
	$keyfacts_programme = 
		'<div class="row">
			<div class="col-sm-6">
				<strong>FORMAT:</strong> 1 year (3 terms), Full-time
			</div>
			<div class="col-sm-6">
				<strong>LANGUAGE:</strong> English
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<strong>NEXT INTAKE:</strong> September 2016
			</div>
			<div class="col-sm-6">
				<strong>LOCATION :</strong> Lille - France
			</div>
		</div> 
	  ';
}

//Executive MBA
if(is_page(20)){ 
	$url_img_une="https://www.ieseg.fr/wp-content/uploads/2013/01/img-une-executive-mba.jpg";
	$punchline_programme="Grandir, faire grandir ses équipes, faire grandir son entreprise – durablement";
	$punchline_footer="Saisissez l’opportunité de l’Executive MBA";
	$tel_footer ="(+33)1.55.91.10.10";
	$mail_footer="executive@ieseg.fr";
	$keyfacts_programme = 
		'<div class="row">
			<div class="col-sm-6">
				<strong>DURÉE :</strong> 24 mois, vendredi & samedi une semaine sur deux
			</div>
			<div class="col-sm-6">
				<strong>LANGUES :</strong> Français & Anglais
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<strong>PROCHAINE RENTRÉE :</strong> octobre 2017
			</div>
			<div class="col-sm-6">
				<strong>LIEU :</strong> Paris La Défense
			</div>
		</div> 
	  ';
}

//International MBA
if(is_page(22)){ 
	$url_img_une="https://www.ieseg.fr/wp-content/uploads/2013/12/img-international-mba.jpg";
	$punchline_programme="Sharpen your skills for the Global Market";
	$punchline_footer="International MBA is the perfect launch pad for a successful career";
	$tel_footer ="(+33)3.20.54.58.92";
	$mail_footer="imba@ieseg.fr";
	$keyfacts_programme = 
		'<div class="row">
			<div class="col-sm-6">
				<strong>FORMAT:</strong> 1 year (3 terms), Full-time 
			</div>
			<div class="col-sm-6">
				<strong>LANGUAGE:</strong> English
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<strong>NEXT INTAKE:</strong> September 2016
			</div>
			<div class="col-sm-6">
				<strong>LOCATION :</strong> Paris - France
			</div>
		</div> 
	  ';
}

//BIB
if(is_page(233)){ 
	$url_img_une="https://www.ieseg.fr/wp-content/uploads/2013/12/img-une-bib.jpg";
	$punchline_programme="Enter the workforce with a running start!";
	$punchline_footer="Live in the heart of Europe and become an expert in International Business";
	$tel_footer ="(+33)3.20.54.58.92";
	$mail_footer="bib@ieseg.fr";
	$keyfacts_programme = 
		'<div class="row">
			<div class="col-sm-6">
				<strong>FORMAT:</strong> 3 years 
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
				<strong>LOCATION :</strong> Lille - France
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
<div id="container-img-une" style="background-image:url(<?php echo $url_img_une ?>);">
        <div class="container">
            <div class="col-sm-7 col-sm-offset-5 text-right container-titre-programme">
                <div class="">
                    <?php    
                            the_title( '<h1 class="entry-title foundry_demi">', '</h1>' ); 
                    ?>
                    <div class="punchline-program">
                        <?php echo $punchline_programme; ?>
                    </div>
                </div>
            </div>
        </div>
</div>