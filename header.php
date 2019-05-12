<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brembarron
 */

?>


<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="manifest" href="site.webmanifest">
	<link rel="apple-touch-icon" href="icon.png">
	<!-- Place favicon.ico in the root directory -->
	
	
	<?php $favicon_upload = get_field('favicon_upload', 'options');

							if($favicon_upload): ?>
        <link rel="shortcut icon" href="<?php echo $favicon_upload['url'] ?>" sizes="32x32" type="image/x-icon">
	<?php endif; ?>
	
	
	<link rel='stylesheet' id='divi-fonts-css'  href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext' type='text/css' media='all' />
    

		<?php wp_head(); ?>
   </head>
   <body <?php body_class('animated et_fixed_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_pb_footer_columns4 et_header_style_left'); ?>>
      <div id="page-container">
         <div id="top-header">
            <div class="container clearfix">
               <div id="et-secondary-menu">
			   
					<?php dynamic_sidebar('top-bar'); ?>
			   
                 <!-- <ul id="et-secondary-nav" class="menu">
					<li><a href="#">Agent Registration</a></li>
					<li><a href="#">Agent Profile</a></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">Agent Directory</a></li>
                  </ul> -->
               </div>
               <!-- #et-secondary-menu -->
            </div>
            <!-- .container -->
         </div>
         <!-- #top-header -->
         <header id="main-header" data-height-onload="85">
            <div class="container clearfix et_menu_container">
               <div class="logo_container">
                  <span class="logo_helper"></span>
				  
				  <?php 
							$logo = get_field('logo_upload', 'options');

							if($logo): ?>
				  
                  <a href="index.html">
                  <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['title']; ?>" id="logo" data-height-percentage="90" />
                  </a>
				  <?php endif; ?>
				  
				  
               </div>
               <div id="et-top-navigation" data-height="85" data-fixed-height="40">
                  <nav id="top-menu-nav">
				  
				  <?php 
					
					if ( has_nav_menu( 'primary-menu' ) ) {
						wp_nav_menu(array( 
						'menu_name'			=> 'Primary Menu',
						'theme_lcoation'	=> 'primary-menu',
						'menu_class'		=> 'nav',
						'menu_id'			=> 'top-menu',
						
						));
					}else{
						
						echo " ";
						
					}
										
					
					 ?>
					
				  
                   <!--  <ul id="top-menu" class="nav">
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Process</a></li>
						<li><a href="#">FAQ</a></li>
						 <li>
                           <a href="#">Stock Loans</a>
                           <ul class="sub-menu">
                              <li><a href="#">London Stock Loans</a></li>
                              <li><a href="#">Hong Kong Stock Loans</a></li>
                              <li><a href="#">China Stock Loans</a></li>
                              <li><a href="#">Canada Stock Loans</a></li>
                              <li><a href="#">OTC Stock Loans</a></li>
                           </ul>
                        </li>
						<li><a href="#">Block Trades</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Blog</a></li>
                      
                     </ul> -->
                  </nav>
                  <div id="et_top_search">
					 <i class="fas fa-search"></i>
                  </div>
                  <div id="et_mobile_nav_menu">
                     <div class="mobile_nav closed">
                        <span class="select_page">Select Page</span>
                        <span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
                     </div>
                  </div>
               </div>
               <!-- #et-top-navigation -->
            </div>
            <!-- .container -->
            <div class="et_search_outer">
               <div class="container et_search_form_container">
                  <form role="search" method="get" class="et-search-form" action="<?php echo home_url(); ?>">
                     <input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" />					
                  </form>
				  <i class="fas fa-times"></i>
               </div>
            </div>
         </header>
         <!-- #main-header -->
	

