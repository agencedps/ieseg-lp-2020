<?php
/*
Template Name: Page Finance
*/
?>
<?php get_header(); 

//include('includes/test-current-page.php');
include('includes/header-landing-page-finance.php');

if (have_posts()) : while (have_posts()) : the_post();
the_content();
endwhile; endif; ?>
<div class="keyfacts-landing">
	<div class="container">
		<div class="row">
        	<div class="col-sm-8 cont-keyfacts">
				<?php echo $keyfacts_programme ; ?>
             </div>
		</div>
     </div>
</div>
<div class="container">
<div class="row">
	<div class="col-sm-8 intro-landing">
    	
         
    	<p class="overview-intro-bold">The Master of Science in Finance is a one-year program designed for students who wish to enhance their understanding of financial analysis and asset management in a very practical and international environment.</p>
        
        <p>The MSc in Finance is taught in English and prepares students for various jobs in the financial analysis and investment management industries. The program covers financial accounting, asset valuation and portfolio management techniques extensively.</p>
        
        <ul>
			<li>Accredited by the French Higher Education Ministry with a state-recognized ‘Grade de Master’</li>
        	<li>Financial markets lab with access to the Bloomberg professional service and Thomson Reuters Eikon</li>
            <li>Curriculum designed to help students seeking CFA designation</li>
            <li>Professional seminars bridging the gap between theory and market practices</li>
            <li>Focus on ethical attitude, critical for successful invesment managers and financial analysts</li>
        </ul>
    </div>
    <div class="col-sm-4">
    	<div id="ze-landing-form" class="container-formulaire bg-orange1 fixed-form-bib">
            <div class="">
             	<h3>Find Out More!</h3>
            </div>
            
            <em>Receive the brochure with program content, scholarship information &amp; application process</em>

            <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 25 ); } ?> <!-- CHANGE FORM ID -->
        </div>
    </div>
</div>
</div>

<div class="container-fluid title container-titre-section-programmes-gris container-titre-section-programmes-gris-clair">
    <h2 class="col-sm-8 col-sx-4"><span class="foundry_light"><?php _e("What makes our MSc in Finance stand out?","ieseg-landing-2015") ?></span></h2>
</div>
<section class="background-amphi">    
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            	<div class="bloc bloc-landing">
                	<div class="text-center">
                    	<i class="fa fa-trophy fa-4x"></i>
                		<h3>A Top International Business School</h3>
                    </div>
                    <p>Part of the 1% of elite Business Schools worldwide with triple international accreditations: EQUIS, AACSB and AMBA.</p>
                    <p>Multicultural environment: international students from more than 100 different nationalities.</p>
                    <p>82% of the permanent academic staff are international and 100% hold a PhD from prestigious universities.</p>
                </div>
            </div>
            
            <div class="col-sm-4 col-sx-4">
            	<div class="bloc bloc-landing">
                	<div class="text-center">
                    	<i class="fa fa-suitcase fa-4x"></i>
                		<h3>Career Services</h3>
                    </div>
                    <p>Global Corporations that recruit our students: PwC, Alstom, Société Générale, Décathlon.</p>
                    <p>Workshops: build your career plan with consultants and prepare to meet recruiters by working on your personal skills and strengths.</p>
                    <p>Corporate Events &amp; Career Fairs: create a professional network and find career opportunities.</p>
                    
                </div>
            </div>
         </div>
         
         <div class="row" style="margin-top: 50px;">
            <div class="col-sm-4">
            	<div class="bloc bloc-landing">
                	<div class="text-center">
                    	<p><img src="https://www.ieseg.fr/landings/wp-content/themes/ieseg-landings-2015/images/picto-cfa-institute.png" style="padding-top:5px;padding-bottom:7px;" /></p>
                		<h3>CFA Institute University Recognition Program</h3>
                    </div>
                    <p>Incorporating at least 70% of CFA content within the MSc Finance program.</p>
                    <p>IÉSEG's MSc in Finance is eligible to receive 16 student scholarships for the CFA Program.</p>
                </div>
            </div>
        
            <div class="col-sm-4 col-sx-4">
            	<div class="bloc bloc-landing">
                	<div class="text-center">
                    	<i class="fa fa-globe fa-4x"></i>
                		<h3>Study in the Largest Business District of Europe</h3>
                    </div>
                    <p>Paris Campus is located at La Défense, in the iconic Grande Arche building.</p>
                    <p>2 buildings with a total of 14,000 m² that provide students with many modern facilities.</p>
                </div>
            </div>
        </div>
        
    </div>
    </section>

<section class="container-testimonials">
	<div class="container-fluid title container-titre-section-programmes-jaune">
		<h2 class="col-sm-8 col-sx-4"><span class="foundry_light"><?php _e("What our students say","ieseg-landing-2015") ?></span></h2>
    </div>
    <div class="container">
        <div class="row">
        	<div class="col-sm-8 col-sx-4">
            	<div class="text-center proghome-testimonials"><img src="<?php echo get_template_directory_uri()?>/images/temoignages/finance-aristotelis.jpg"></div>
        		<div class="proghome-testimonials">      
                   <p>"I always had a strong interest in working in the financial sector. After completing my bachelor in applied economics, I decided to apply for the MSc in Finance at IÉSEG for its reputation, curriculum and the feedback of students.</p>
                   <p>My expectations have been exceeded. The knowledge of the professors, a curriculum adapted to the contemporary financial world, along with the multiple opportunities that Paris region offers, have all contributed to a unique experience.</p>
                   <p>This program has enabled me to be a highly competitive candidate for the jobs in the financial sector. Already, a great opportunity in the investment banking sector has come up, providing me with the chance to kick-start my career."</p>
                                        
                    <p class="text-center dr-name">Aristotelis DEMIRTZIS, Greece</p>
                
        		</div>
   			</div>
    	</div>

    </div>
</section>

<!--End Témoignages-->

<!-- Conversion Pixel - Ieseg_LP [type:VISIT][lead:Simple] - DO NOT MODIFY -->
<img src="https://secure.adnxs.com/px?id=1077277&seg=17057418&t=2" width="1" height="1" />
<!-- End of Conversion Pixel -->

<?php get_footer(); ?>