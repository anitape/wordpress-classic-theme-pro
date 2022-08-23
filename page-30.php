<?php
    get_header();
?> 

<!-- Start main content -->
<main>
        <!-- BLOG HEADER -->
        <section id="blog-header" data-stellar-background-ratio="0.5" 
				style="background: url(/~anitape/oma_wpsivu/wp-content/uploads/2022/03/20160218_keittioremonti_espoo.jpg) no-repeat 50% 400%; background-size: cover;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">

                    <div class="col-md-offset-1 col-md-5 col-sm-12">
                         <h2><?php the_field('intro_text'); ?></h2>
                    </div>
                    
               </div>
            </div>
        </section>
        
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="section-title">
										<h2><?php the_field('heading'); ?></h2>
										<p style="margin-top: 30px; padding: 0 15%;"><?php the_field('info_text'); ?></p>
										<span class="line-bar">...</span><br>                                       
									</div>
								</div>
							</div>
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left">
										<img class="img-responsive" src="<?php echo the_post_thumbnail_url(); ?>" alt="img">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<div class="choose-list">
											<div class="mu-company-info-icon">1</div>
											<div class="choose-info">
												<h3><?php the_field('additional_info_heading1'); ?></h3>
												<p><?php the_field('additional_info_text1'); ?></p>
											</div>
										</div>

										<div class="choose-list">
											<div class="mu-company-info-icon">2</div>
											<div class="choose-info">
												<h3><?php the_field('additional_info_heading2'); ?></h3>
												<p><?php the_field('additional_info_text2'); ?></p>
											</div>
										</div>

										<div class="choose-list">
											<div class="mu-company-info-icon">3</div>
											<div class="choose-info">
												<h3><?php the_field('additional_info_heading3'); ?></h3>
												<p><?php the_field('additional_info_text3'); ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Feature Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->
    </main>
    <!-- End main content -->
<?php
    get_footer();