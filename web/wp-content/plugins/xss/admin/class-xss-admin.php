<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       x
 * @since      1.0.0
 *
 * @package    Xss
 * @subpackage Xss/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Xss
 * @subpackage Xss/admin
 * @author     xss <x>
 */
class Xss_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Xss_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Xss_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/xss-admin.css', array(), $this->version, 'all' );
		global $pagenow;
		if (( $pagenow === 'admin.php' ) && ($_GET['page'] === 'messages')) {
			wp_enqueue_style( $this->plugin_name."_bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css",array(), $this->version, 'all' );
		} 
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Xss_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Xss_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/xss-admin.js', array( 'jquery' ), $this->version, false );
		global $pagenow;
		if (( $pagenow === 'admin.php' ) && ($_GET['page'] === 'messages')) {
			wp_enqueue_script( $this->plugin_name."_bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js",array(),  $this->version, false );
		} 
	}

	function xss_setup_menu(){
		add_menu_page(
			'Messages',
			'Messages',
			'administrator',
			'messages',
			array( $this,'xss_admin_options')
		);
		// add_submenu_page(
		// 	'messages',
		// 	'Sittings',
		// 	'Ustawienia',
		// 	'administrator',
		// 	'mailing-sittings',
		// 	array($this,'sittings')
		// );

	}
	function xss_admin_options(){
		global $wpdb;
		$results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}xss_message ");
		

?>
		
			<table class="table table-striped mt-5">
				<thead class="thead-dark">
					<tr>
						<th>Id</th>
						<th>Imię</th>
						<th>Email</th>
						<th>Wiadomość</th>
						
						
					</tr>
				</thead>
				<tbody>	
					<?php  foreach($results as $row){?>
						<tr>
							<td><?php echo $row->id;?></td>
							<td><?php echo $row->name;?></td>
							<td><?php echo $row->email;?></td>
							<td><?php echo $row->message;?></td>
						<tr>
					<?php } ?>
				</tbody>
		</table>
		
		
		
<?php

	}

	function sittings(){
		// check user capabilities
		if ( ! current_user_can( 'administrator' ) ) {
			return;
		}
	}

}
