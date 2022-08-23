<?php
    get_header();
?> 

    <!-- Start main content -->
	<main>
        <!-- BLOG HEADER -->
        <section id="blog-header" data-stellar-background-ratio="0.5" 
            style="background: url(<?php echo the_post_thumbnail_url(); ?>) no-repeat 50% 200%; background-size: cover;">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">
                    <div class="col-md-offset-1 col-md-5 col-sm-12">
                         <h2><?php the_field('intro_text'); ?></h2>
                    </div>                    
               </div>
          </div>
        </section>

        <!-- Start Portfolio -->
		<section id="mu-portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-portfolio-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2><?php the_field('heading'); ?></h2>
										<p><?php the_field('description'); ?></p>
									</div>
								</div>
							</div>

							<div class="row">
									<!-- Start Portfolio Filter -->
									<div class="mu-portfolio-filter-area">
										<ul class="mu-simplefilter">
							                <li class="active" data-filter="all">Kaikki<span>/</span></li>

                                            <?php
                                                $terms = get_terms('porfiolio_category');

                                                foreach ($terms as $term) { ?>
                                                    <li data-filter="<?php echo $term->slug ?>"><?php echo $term->name ?><span>/</span> </li>
                                                    <?php }                                              
                                            ?>
							            </ul>
									</div>

									<!-- Start Portfolio Content -->
									<div class="mu-portfolio-content">
										<div class="filtr-container">

                                        <?php
                                            $args = array(
                                                'post_type' => 'portfolio',
                                                'posts_per_page' => 10
                                            );

                                            $query = new WP_Query($args);


                                            while ($query->have_posts()) {
                                                $query->the_post();

                                                $termsArray = get_the_terms($post->ID, 'porfiolio_category');

                                                $termsSlug = "";
                                                foreach ($termsArray as $term) {
                                                    $termsSlug .= $term->slug . ' ';
                                                }                        
                                            ?>

							                <div class="col-xs-12 col-sm-6 col-md-4 filtr-item" data-category="<?php echo $termsSlug; ?>">
							                   <a class="mu-imglink" href="<?php the_post_thumbnail_url(); ?>" title="<?php echo $term->name ?>">
								                   	<img id="portfolio-image" class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="image"
                                                       style="object-position: <?php the_field('x_position'); ?>% <?php the_field('y_position'); ?>%;">
								                   	<div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title"><?php the_field('short_object_description'); ?></h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                   </a>
							                </div>

                                            <?php }

                                            ?>							            

							            </div>
									</div>
									<!-- End Portfolio Content -->
								</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Portfolio -->
    </main>
	<!-- End main content -->	
<?php
    get_footer();