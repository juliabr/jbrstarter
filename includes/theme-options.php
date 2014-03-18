<?php
/**
 * @package Jbr
 * @subpackage Functions
 */


add_action('admin_init', 'jbr_admin_init');
function jbr_admin_init() {

	register_setting( 'jbr_options', 'introtext' );

}

add_action( 'admin_menu', 'jbr_admin_setup' );
function jbr_admin_setup() {

	$admin_options_page = add_theme_page( 'Personnaliser', 'Personnaliser', 'manage_options', 'jbr_options', 'jbr_options_do_page');

}

function jbr_options_do_page() {

	if (!current_user_can('manage_options')) {
    	wp_die( __('You do not have sufficient permissions to access this page.') );
  	}
	?>

	<div class="wrap">

		<h2>Options du thème</h2>
		
		<?php if( isset($_GET['settings-updated']) ) : ?>
		<div id="message" class="updated" style="margin-top: 20px;"><p>Mise à jour réussie. <a href="<?php echo home_url(); ?>">Afficher la page d'accueil</a></p></div>
		<?php endif; ?>

		<div style="margin-top: 20px;">

			<form method="post" action="options.php">

				<?php settings_fields('jbr_options'); ?>

				<table class="form-table">
				
					<tr valign="top">
						<th scope="row" class="label">
							<label for="introtext">Présentation</label>
						</th>
						<td class="form-field">
							<textarea name="introtext" id="introtext" rows="5" cols="40" class="regular-text"><?php echo get_option('introtext'); ?></textarea>
							<p class="description">Ce texte s'affiche dans le pied de page du site</p>
						</td>
					</tr>

				</table>

				<?php submit_button(); ?>

			</form>

		</div>

	</div>
	
	<?php 
}

function jbr_options_validate_ID($ID) {
	
	//$ID = wp_filter_nohtml_kses( $input['introtext'] );

	return $ID;

}

?>