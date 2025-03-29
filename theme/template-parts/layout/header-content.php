<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vgday-tailwindv4
 */

?>

<header id="masthead" class="bg-gray-800 text-white">

	<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
		<div class="relative flex h-16 items-center justify-between">
			
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

			<nav 
				class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0"
				id="site-navigation" 
				aria-label="<?php esc_attr_e( 'Main Navigation', 'vgday-tailwindv4' ); ?>">
				<button 
				aria-controls="primary-menu" 
				aria-expanded="false"
				class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset"
				>
					<?php esc_html_e( 'Primary Menu', 'vgday-tailwindv4' ); ?>

				</button>

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
				?>
			</nav><!-- #site-navigation -->

		</div><!-- class="relative flex h-16 items-center justify-between" -->

	</div><!-- class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8" -->

	

</header><!-- #masthead -->
