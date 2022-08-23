<?php
    get_header();
?> 

    <!-- Start main content -->
	<main>
        <!-- BLOG HEADER -->
        <section id="blog-header" data-stellar-background-ratio="0.5" 
            style="background: url(<?php echo the_post_thumbnail_url(); ?>) no-repeat 50% 350%; background-size: cover;">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-1 col-md-5 col-sm-12">
                         <h2><?php the_field('intro_text'); ?></h2>
                    </div>
                    
               </div>
          </div>
        </section>

        <section class="services">
			<div class="container">
				<!-- Title -->
				<div class="row">
					<div class="col-md-12">
						<div class="mu-title">
							<h2><?php the_field('heading'); ?></h2>
							<p><?php the_field('description'); ?></p>
						</div>
					</div>
                </div>
            </div>
        </section>

            <div class="container services-menu">
                <div class="row">
                    <div class="col-md-12">
						<!-- Start Portfolio Filter -->
					    <div class="mu-portfolio-filter-area">
							<ul class="mu-simplefilter">
							    <li><a href="/~anitape/oma_wpsivu/palvelut/#keittoasennukset">Keittiöasennukset</a><span>/</span></li>
							    <li><a href="/~anitape/oma_wpsivu/palvelut/#laatoitus">Laatoitukset</a><span>/</span></li>
							    <li><a href="/~anitape/oma_wpsivu/palvelut/#lattioiden-asennus">Lattioiden asennus</a><span>/</span></li>
							    <li><a href="/~anitape/oma_wpsivu/palvelut/#pohja-tasoite-ja-pintatyot">Pohja-, tasoite- ja pintatyöt</a><span>/</span></li>
							</ul>
						</div>
                    </div>              
                </div>
            </div>


            <div class="container service-list">
            <?php 
                    
                    $args = array(
                         'post_type' => 'post',
                         'post_status' => 'publish',
                         'posts_per_page' => 4,
                         'category_name' => 'Palvelut',
                         'orderby' => 'date',
                         'order'   => 'ASC'
                     );
                 
                    $post_query = new WP_Query($args);
                    
                    if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post(); ?>

                    <div class="row service-row" id="<?php  echo $post->post_name; ?>">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <img class="service-image" src="<?php echo the_post_thumbnail_url(); ?>">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 service-description">
                            <h3><?php the_title(); ?></h3>                            
                            <p><?php the_field('sivukuvaus'); ?></p>
                        </div>
                    </div>
                    <?php 
                         endwhile;
                         endif;
                    ?>
            </div>

            <div class="benefit-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Hyödynnä kotitalousvähennys</h4>
                            <p>Kotitalousvähennys on verovähennys, jonka yksityishenkilö voi saada kotona teetetyistä 
                                kotitalous- tai hoitotöistä sekä asunnon ja vapaa-ajan asunnon kunnossapito- ja perusparannustöistä.</p>
                        </div>
                        <div class="col-md-3">
                            <a href="https://www.vero.fi/henkiloasiakkaat/verokortti-ja-veroilmoitus/tulot-ja-vahennykset/kotitalousvahennys/" 
                                class="read-more-btn" target="_blank">Lue lisää</a>
                        </div>
                    </div>
                </div>
            </div>

    </main>
	<!-- End main content -->
<?php
    get_footer();
