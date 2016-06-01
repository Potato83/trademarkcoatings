<?php
/*
Template Name: Home Page
 */
get_header(); ?>
	
<section id="toggle-menu" class="sneaky my-menu links links-home">
	<div class="my-menu links link-scroll">
		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#photos">Photos</a></li>
			<li><a href="#product">Product</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
  </div>	
</section><!-- toggle-menu -->

<section id="top-page">
<a name="home" class="anchor"></a>		
	<!-- HEADER -->
	<header id="masthead" class="site-header" role="banner">
		<div id="header-content" class="col-sm-12">
			<div class="jumbo">				
					<div id="teste">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-2.jpg" alt="logo" id="tm-logo"></a>
					</div>
						
					<div id="more">
						<p id="fb-only">
							<a href="http://www.facebook.com/Trademark-Coatings-165701160154052/" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
						</p>
						</p>
						<p>Karl Mailhiot</p>
						<p>(506) 663 0535</p>
						<p><a href="mailto:trademarkcoatings@gmail.com">trademarkcoatings@gmail.com</a></p>

					</div><!-- more -->
					
			</div><!-- jumbo -->
		</div><!-- header-content -->

				
	      <div class="my-menu links link-scroll">
					<ul>
						<li><a href="#about">About</a></li>
						<li><a href="#photos">Photos</a></li>
						<li><a href="#product">Product</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
	      </div>		
  </header><!-- #masthead -->

	<section id="home-content">
	
		<div id="welcome">
			<h1>Welcome to Trademark Coatings... where concrete is our canvas.</h1>
			
			<p class="lead">Installers of high performance flooring products for:</p>
		</div><!-- welcome -->
					
		<div class="balls">
			<ul>
				<li class="box">
					<div class="box-content"><div class="box-text">Decorative / Architectural Concrete Systems and Finishes</div></div>
				</li>
				
				<li class="box">
					<div class="box-content"><div class="box-text">Custom / Seamless Fluid Applied Commercial Flooring</div></div>
				</li>
								
				<li class="box">
				<div class="box-content"><div class="box-text">Industrial High Wear Protective Floor Coatings</div></div>
				</li>
				
			</ul>
		</div><!-- balls -->
		<div class="both"></div>
	</section><!-- #home -->

</section><!-- top-page -->
<?php get_template_part('content', 'about'); ?>
<?php get_template_part('content', 'photos'); ?>
<?php get_template_part('content', 'product'); ?>
<?php get_template_part('content', 'contact'); ?>
<?php get_footer(); ?>