<?php
/**
 * Template Name: Benefits of Yoga Template
 *
 * Displays the template for the Benefits of Yoga section.
 *
 * @package Theme Horse
 * @subpackage Interface Pro
 * @since Interface Pro 1.0
 */
?>
<?php get_header(); ?>
<?php
	/** 
	 * interface_before_main_container hook
	 */
	do_action( 'interface_before_main_container' );
?>
<?php
		/** 
		 * interface_contact_page_template_content hook
		 *
		 * HOOKED_FUNCTION_NAME PRIORITY
		 *
		 * interface_display_contact_page_template_content 10
		 */
		do_action( 'interface_benefits_of_yoga_template_content' );
	?>
<?php
	/** 
	 * interface_after_main_container hook
	 */
	do_action( 'interface_after_main_container' );
?>
<?php get_footer(); ?>