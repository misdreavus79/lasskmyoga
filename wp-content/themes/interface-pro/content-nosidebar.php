<?php
/**
 * This file displays page with no sidebar.
 *
 * @package Theme Horse
 * @subpackage Interface Pro
 * @since Interface Pro 1.0
 */
?>
<?php
   /**
    * interface_before_loop_content
	 *
	 * HOOKED_FUNCTION_NAME PRIORITY
	 *
	 * interface_loop_before 10
    */
   do_action( 'interface_before_loop_content' );

   /**
    * interface_loop_content
	 *
	 * HOOKED_FUNCTION_NAME PRIORITY
	 *
	 * interface_theloop 10
    */
	if(is_single() && in_category('benefits-of-yoga')) {
		do_action( 'interface_benefits_of_yoga_template_content' );
	}else{
		do_action( 'interface_loop_content' );
	}

   /**
    * interface_after_loop_content
	 *
	 * HOOKED_FUNCTION_NAME PRIORITY
	 *
	 * interface_next_previous 5
	 * interface_loop_after 10
    */
   do_action( 'interface_after_loop_content' );
?>