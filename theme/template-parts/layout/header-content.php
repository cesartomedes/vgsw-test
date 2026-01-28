<?php
/**
 * Template part for displaying the header content
 *
 * @package _tw
 */
?>

<header id="masthead" class="absolute top-0 left-0 w-full z-[999] pointer-events-none translate-y-24">

	<nav
		id="site-navigation"
		class="pointer-events-auto w-full flex justify-end items-center px-6 md:px-32 py-8"
		aria-label="<?php esc_attr_e( 'Main Navigation', '_tw' ); ?>"
	>
	<button
  id="burger-button"
  class="md:hidden text-white absolute right-6 top-1/2 -translate-y-1/2 z-50"
  aria-controls="primary-menu"
  aria-expanded="false"
>
  <span class="sr-only"><?php esc_html_e( 'Menu', '_tw' ); ?></span>

  <!-- icono burger -->
  <svg id="burger-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
  </svg>

  <!-- icono cerrar -->
  <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
  </svg>
</button>


		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'     => 'hidden md:flex gap-7 text-white capitalize text-base font-semibold tracking-wider',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			)
		);
		?>
	</nav>

</header>
