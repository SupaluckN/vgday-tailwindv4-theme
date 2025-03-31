<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vgday-tailwindv4
 */

?>

<header id="masthead" class="fixed w-full md:h-16 py-2 md:py-2 px-4 bg-indigo-50/80 backdrop-blur text-lg text-gray-800 drop-shadow-md z-100">

		<nav 
			class="relative flex flex-wrap items-center justify-between mx-auto max-w-7xl px-2 sm:px-6 lg:px-8"

			aria-label="<?php esc_attr_e( 'Main Navigation', 'vgday-tailwindv4' ); ?>">

			<div>
			<?php
			if ( is_front_page() ) :
				?>
				<h1><?php bloginfo( 'name' ); ?></h1>
				<?php
			else :
				?>
				<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;

			$vgday_tailwindv4_description = get_bloginfo( 'description', 'display' );
			if ( $vgday_tailwindv4_description || is_customize_preview() ) :
				?>
				<p><?php echo $vgday_tailwindv4_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>
			
			<button 
				aria-controls="primary-menu" 
				aria-expanded="false"
				id="hamburger" class="h-6 w-6 cursor-pointer md:hidden block"
				>
					
					<scan class="sr-only"><?php esc_html_e( 'Primary Menu', 'vgday-tailwindv4' ); ?></scan>

					<i class="ri-menu-line"></i>
			</button>

			<div id="nav-menu" class="hidden w-full md:flex md:items-center md:w-auto">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
				?>
			</div>
			
			
		</nav><!-- #site-navigation -->

	

	

	

</header><!-- #masthead -->



