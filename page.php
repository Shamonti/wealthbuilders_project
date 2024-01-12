<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>


<?php $locked = get_field('registered_user_only');
	
				if( $locked && !is_user_logged_in() ){

				
				header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
				header("Cache-Control: post-check=0, pre-check=0", false);
				header("Pragma: no-cache");

					
					echo '<div class="notice_bar_top">This page is for members only. Please login.</div>';
					echo do_shortcode('[elementor-template id="1239"]'); 
					echo '<div class="reset_bar_bottom"><a id="resetlink" style="color: red; font-weight: bold;" href="?clear='. rand(99999, 999999) .'"/>If you are already logged in, select this.</a></div><script>var rlink = document.getElementById("resetlink");  rlink.href = "?reset=" + Math.floor( Math.random() * 100000 );</script>';
					echo '<style>header#masthead{display:none!important}.ast-title-bar-wrap{display:none!important}footer#colophon{display:none!important}.disclaimer{display:none!important}.notice_bar_top{background:#da7474;position:fixed;top:0;left:0;right:0;height:40px;z-index:10;line-height:40px;text-align:center;color:#fff;text-shadow:1px 1px #00000078;font-size:18px}.reset_bar_bottom{background:#5c568a;position:fixed;bottom:0;left:0;right:0;height:40px;z-index:10;line-height:40px;text-align:center;color:#fff;text-shadow:1px 1px #00000078;font-size:18px}.reset_bar_bottom a{color:#fff!important}</style>';
					
				} else {
					//echo '<div id="alertOG" class="notice_bar_top">The academy will be under maintenance Friday, 11 June 2021 from 01:00 AM to 06:00 AM CDT. Any quizzes, lessons, courses completed within that timeframe maynot be reflected afterward.</div>';
			
				$approved_packages = get_field('approved_packages');
				$usr = 'user_' . get_current_user_id();
				$udata = get_field('purchase', $usr);

				if( $approved_packages && $udata){
					$uarray = json_decode($udata);
					$common = array_intersect( $approved_packages , $uarray );
					if(!empty($common)){
						$allow = 1;
					} else {
						$allow = 0;
					}
				} else {
					$allow = 1;
				}

				if( empty($approved_packages) || current_user_can( 'manage_options' )  ){
					$allow = 1;
				}

				if( $allow == 1 ){

			?>




<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>
	<div id="primary" <?php astra_primary_class(); ?>>
		<?php astra_primary_content_top(); ?>

		<?php astra_content_page_loop(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>


<?php 
				} else {
					echo do_shortcode('[elementor-template id="126813"]');
				}
				}
			?>



<?php get_footer(); ?>
