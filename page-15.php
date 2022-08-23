<?php
    get_header();
?> 

    <!-- Start main content -->
	<main>
        <!-- BLOG HEADER -->
        <section id="blog-header" data-stellar-background-ratio="0.5" 
          style="background: url(<?php echo the_post_thumbnail_url(); ?>) no-repeat 50% 0%; background-size: cover;">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-1 col-md-5 col-sm-12">
                         <h2><?php the_field('intro_text'); ?></h2>
                    </div>
                    
               </div>
          </div>
        </section>

		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">
								<!-- Start Contact Content -->
							<div class="mu-contact-content">
								<div class="row">

									<div class="col-md-6">
                                                  <div class="custom-contact-form">
                                                       <h4 style="text-align: left; margin-left: 30px; margin-top: 20px;">Yhteydenottolomake</h4>
                                                       <hr style="border-top: 1px solid #cccccc;">
                                                       <div class="mu-contact-form-area">
                                                            <div id="form-messages"></div>
                                                            
                                                            <form id="ajax-contact" method="post" action="<?php echo get_template_directory_uri();?>/mailer.php" class="mu-contact-form">

                                                                 <div class="form-group">  
                                                                      <span class="fa fa-user mu-contact-icon"></span>              
                                                                      <input type="text" class="form-input-control" placeholder="Nimi" id="name" name="name" required>
                                                                 </div>

                                                                 <div class="form-group">  
                                                                      <span class="fa fa-envelope mu-contact-icon"></span>              
                                                                      <input type="email" class="form-input-control" placeholder="Sähköpostiosoite" id="email" name="email" required>
                                                                 </div>    

                                                                 <div class="form-group"> 
                                                                      <span class="fa fa-phone mu-contact-icon"></span>                
                                                                      <input type="text" class="form-input-control" placeholder="Puhelinnumero" id="phone" name="phone" required>
                                                                 </div>

                                                                 <div class="form-group">
                                                                      <span class="fa fa-pencil-square-o mu-contact-icon"></span> 
                                                                      <textarea class="form-input-control" placeholder="Viesti" id="message" name="message" required></textarea>
                                                                 </div>
                                                                 <div class="row">
                                                                      <div class="col-md-4 col-sm-6">
                                                                           <button type="submit" class="send-msg-button">Lähetä viesti</button>
                                                                      </div>
                                                                 </div>
                                                            </form>
                                                       </div>
                                                  </div>
									</div>
                                             <div class="col-md-6">
                                                  <div class="contact-info-area">
                                                       <div class="section-title">
                                                            <h2>Yhteystiedot</h2>
                                                            <span class="line-bar">...</span>
                                                            <br><br>
                                                       </dv>
                                                       <h4 class="company-contact-title">WP Solutions</h4>
                                                       <div class="contact-info-details">
                                                            <div class="contact-info-icon"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></div>
                                                            <div><p>Mannerheimintie 10, 00100 Helsinki</p></div>
                                                       </div>
                                                       <div class="contact-info-details">
                                                            <div class="contact-info-icon"><i class="fa fa-envelope"></i></div>
                                                            <div><p>wpsolutions@gmail.com</p></div>
                                                       </div>
                                                       <div class="contact-info-details">                                                           
                                                            <div class="contact-info-icon"><i class="fa fa-phone"></i></div>
                                                            <div><p>(+358) 040 123 45 67</p></div>
                                                       </div>                                                      
                                                  </div>
                                             </div>
								</div>
							</div>
							<!-- End Contact Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->	
     
		<!-- Google map -->
		<div class="row">
			<div class="col-md-12">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1984.800173462497!2d24.938640716080123!3d60.16748688195993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46920bcb8967a935%3A0x1a57cc2206219702!2sMannerheimintie%2010%2C%2000100%20Helsinki!5e0!3m2!1sfi!2sfi!4v1648029776210!5m2!1sfi!2sfi" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               </div>
          </div>
     </main>
	<!-- End main content -->	
<?php
    get_footer();