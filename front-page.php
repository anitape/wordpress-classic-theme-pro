<?php
    get_header();
?>    
    
    <!-- HOME -->
     <section id="home" data-stellar-background-ratio="0.5" style="background: url(<?php echo the_post_thumbnail_url(); ?>) no-repeat 50% 50%;">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="home-info">
                              <h1><?php the_field('main_heading'); ?></h1>
                              <a href="/~anitape/oma_wpsivu/ota-yhteytta" class="btn section-btn smoothScroll">Pyydä tarjous</a>
                              <span>
                                   <?php the_field('sub_heading'); ?></br>
                                   <i class="fa fa-check"></i> <?php the_field('small_sub_text'); ?>
                              </span>
                         </div>
                    </div>                    
               </div>
          </div>
     </section>


     <!-- ABOUT -->
     	<!-- Start Services -->
		<section id="mu-service">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-service-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
                                                  <div class="section-title">
                                                       <h2><?php the_field('intro_header'); ?></h2>
                                                       <span class="line-bar">...</span>
                                                  </div>
										<p><?php the_field('intro_text'); ?></p>
									</div>
								</div>
							</div>
							<!-- Start Service Content -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-service-content">
										<div class="row">
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-wrench" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3><?php the_field('benefit_heading1'); ?></h3>
														<p><?php the_field('benefit_text1'); ?></p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-check-square-o" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3><?php the_field('benefit_heading2'); ?></h3>
														<p><?php the_field('benefit_text2'); ?></p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3><?php the_field('benefit_heading3'); ?></h3>
														<p><?php the_field('benefit_text3'); ?></p>
													</div>
												</div>
											</div>
											<!-- End single service -->
                              </div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Services -->


     <!-- SERVICE -->
     <section id="blog" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Palvelut</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>

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
                    
                    if ( $post_query->have_posts() ) {

                     while ( $post_query->have_posts() ) {
                         $post_query->the_post();

                         $post_slug = $post->post_name;  ?>

                         <div class="col-md-6 col-sm-6">
                              <!-- SERVICE THUMB -->
                              <div class="media blog-thumb">
                                   <!--<div class="media-object media-left" style="background-image: url(''); background-repeat: no-repeat;
  background-size: 350px 350px;">-->
                                   <div class="row">
                                        <div class="col-md-5">
                                             <img class="service-info-image" src="<?php echo the_post_thumbnail_url(); ?>" 
                                                  style="object-position: <?php the_field('x_position'); ?>px <?php the_field('y_position'); ?>px;">
                                        </div>
                                        <div class="col-md-7">
                                             <div class="media-body blog-info">
                                                  <h3><a href="blog-detail.html"><?php the_title(); ?></a></h3>
                                                  <p><?php the_field('etusivulle_kuvaus'); ?></p>
                                                  <a href="/~anitape/oma_wpsivu/palvelut/#<?php echo $post_slug; ?>" class="btn section-btn">Lue lisää</a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    <?php }
                         } ?>
                                   
               </div>
          </div>
     </section>
          

     <!-- TOOLS -->
     <section id="work" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Käytämme laadukkaita työvälineitä</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>
                     
                    <div class="tool-images">
                         <?php
                              $args = array(
                                   'post_type' => 'post',
                                   'posts_per_page' => 1,
                                   'name' => 'tyovalineet'
                              );

                         $post_query = new WP_Query($args);
                         
                         if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post(); ?>

                         <div class="col-md-3 col-sm-6 col-xs-6">
                              <!-- WORK THUMB -->
                              <div class="work-thumb2">
                                   <img src="<?php the_field('image1');?>" class="img-responsive" alt="Work">
                              </div>
                         </div>

                         <div class="col-md-3 col-sm-6 col-xs-6">
                              <!-- WORK THUMB -->
                              <div class="work-thumb3">
                                   <img src="<?php the_field('image2');?>" class="img-responsive" alt="Work">
                              </div>
                         </div>

                         <div class="col-md-3 col-sm-6 col-xs-6">
                              <!-- WORK THUMB -->
                              <div class="work-thumb4">
                                   <img src="<?php the_field('image3');?>" class="img-responsive" alt="Work" />
                              </div>
                         </div>

                         <div class="col-md-3 col-sm-6 col-xs-6">
                              <!-- WORK THUMB -->
                              <div class="work-thumb5">
                                   <img src="<?php the_field('image4');?>" class="img-responsive" alt="Work" />
                              </div>
                         </div>
                         <?php 
                              endwhile;
                              endif;
                         ?>
                    </div>
               </div>
          </div>
     </section>

<?php
    get_footer();