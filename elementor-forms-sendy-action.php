<?php
/**
 * Plugin Name: Elementor Forms Sendy Action
 * Description: Custom addon which adds new subscriber to Sendy after form submission.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-forms-sendy-action
 *
 * Elementor tested up to: 3.16.0
 * Elementor Pro tested up to: 3.16.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Add new subscriber to Sendy.
 *
 * @since 1.0.0
 * @param ElementorPro\Modules\Forms\Registrars\Form_Actions_Registrar $form_actions_registrar
 * @return void
 */
function add_new_sendy_form_action( $form_actions_registrar ) {

	include_once( __DIR__ .  '/form-actions/sendy.php' );

	$form_actions_registrar->register( new Sendy_Action_After_Submit() );

}
add_action( 'elementor_pro/forms/actions/register', 'add_new_sendy_form_action' );
